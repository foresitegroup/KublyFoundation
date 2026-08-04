<?php
// Don't send emails when Wordpress updates happen
add_filter('auto_core_update_send_email', 'stop_auto_update_emails', 10, 4);
function stop_update_emails($send, $type, $core_update, $result) {
  if (!empty($type) && $type == 'success') return false;
  return true;
}
add_filter('auto_plugin_update_send_email', '__return_false');
add_filter('auto_theme_update_send_email', '__return_false');

// Remove annoying persistent cache suggestion
add_filter('site_status_should_suggest_persistent_object_cache', '__return_false');

/* Lowers the metabox priority to 'low' for Yoast SEO's metabox. */
add_filter('wpseo_metabox_prio', 'lower_yoast_metabox_priority');
function lower_yoast_metabox_priority($priority) {
  return 'low';
}

// Remove emojis (and other crud)
add_action('init', 'disable_wp_emojicons');
function disable_wp_emojicons() {
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  add_filter('emoji_svg_url', '__return_false');
  add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'start_post_rel_link');
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'adjacent_posts_rel_link');
}

function disable_emojicons_tinymce($plugins) {
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}

/* Disable WordPress Admin Bar for all users */
add_filter('show_admin_bar', '__return_false');

// Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Enqueue scripts and styles
add_action('wp_enqueue_scripts', 'my_styles');
function my_styles() {
  global $post;

  // Remove Gutenberg Block Library CSS
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('global-styles'); // Remove inline block CSS
  wp_dequeue_style('classic-theme-styles');

  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'));
}

// Set editor to HTML by default for all users
add_filter('wp_default_editor', function() { return "html"; });

// We want Featured Images on Pages and Posts
add_theme_support('post-thumbnails');

// Don't resize Featured Images
add_action('after_setup_theme', 'my_thumbnail_size', 11);
function my_thumbnail_size() {
  set_post_thumbnail_size();
}

// Don't wrap images in P tags
add_filter('the_content', 'filter_ptags_on_images');
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('upload_mimes', 'upload_mime_types');
function upload_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}

// Set length of blog index except
function wpdocs_custom_excerpt_length( $length ) {
  return 21;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Add "..." to end of excerpt
function change_excerpt_more() {
  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
}
add_action('after_setup_theme', 'change_excerpt_more');

// Add Featured Post checkbox to post admin page
function fg_custom_meta() {
  add_meta_box('fg_meta', __('Featured Post', 'fg-textdomain'), 'fg_meta_callback', 'post');
}
function fg_meta_callback( $post ) {
  $featured = get_post_meta( $post->ID );
  ?>
  <p>
    <div class="fg-row-content">
      <label for="featured-checkbox">
        <input type="checkbox" name="featured-checkbox" id="featured-checkbox" value="Yes" <?php if (isset($featured['featured-checkbox'])) checked($featured['featured-checkbox'][0], 'Yes'); ?> />
        <?php _e('Make this the featured post', 'fg-textdomain')?>
      </label>
    </div>
  </p>
  <?php
}
add_action( 'add_meta_boxes', 'fg_custom_meta' );

// Saves the Featured Post input
function fg_meta_save( $post_id ) {
  // Checks save status
  $is_autosave = wp_is_post_autosave( $post_id );
  $is_revision = wp_is_post_revision( $post_id );
  $is_valid_nonce = ( isset( $_POST[ 'fg_nonce' ] ) && wp_verify_nonce( $_POST[ 'fg_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

  // Exits script depending on save status
  if ( $is_autosave || $is_revision || !$is_valid_nonce ) return;

  // Checks for input and saves
  $fp_input = (isset($_POST[ 'featured-checkbox' ])) ? 'Yes' : '';
  update_post_meta( $post_id, 'featured-checkbox', $fp_input);
}
add_action( 'save_post', 'fg_meta_save' );

// Add Featured Post column to admin post list
add_filter( 'manage_edit-post_columns', 'admin_post_header_columns', 10, 1);
add_action( 'manage_posts_custom_column', 'admin_post_data_row', 10, 2);
function admin_post_header_columns($columns) {
  if (!isset($columns['featured-checkbox'])) $columns['featured-checkbox'] = "Featured";
  unset($columns['comments']); // Remove Comments column while we're at it
  return $columns;
}
function admin_post_data_row($column_name, $post_id) {
  switch($column_name) {
    case 'featured-checkbox':    
      $featuredpost = get_post_meta($post_id, 'featured-checkbox', true);
      if ($featuredpost) echo $featuredpost;
      break;    
    default:
      break;
  }
}

// Style the Featured Post admin column
add_action('admin_head', 'my_admin_styles');
function my_admin_styles() {
  echo '<style>
    .fixed .column-featured-checkbox { width: 10%; }
  </style>';
}

function wp_custom_pagination($args = [], $class = 'pagination') {
  if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

  $args = wp_parse_args($args, ['mid_size' => 5, 'prev_next' => false]);

  $links = paginate_links($args);
  $prev = get_previous_posts_link("Previous");
  $next = get_next_posts_link("Next");
  $template = apply_filters('navigation_markup_template', '
    <nav class="navigation %1$s" aria-label="%2$s">
      <div class="nav-links">
        %3$s
        <div class="page-numbers-container">%4$s</div>
        %5$s
      </div>
    </nav>', $args, $class);

  echo sprintf($template, $class, 'Posts navigation', $prev, $links, $next);
}

add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
function posts_link_attributes_prev() { return 'class="prev"'; }
function posts_link_attributes_next() { return 'class="next"'; }
?>