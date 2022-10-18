<?php
// Don't send emails when Wordpress updates happen
add_filter('auto_core_update_send_email', 'stop_auto_update_emails', 10, 4);
function stop_update_emails($send, $type, $core_update, $result) {
  if (!empty($type) && $type == 'success') return false;
  return true;
}
add_filter('auto_plugin_update_send_email', '__return_false');
add_filter('auto_theme_update_send_email', '__return_false');


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

// Allow Featured Images
add_theme_support( 'post-thumbnails' );

// Don't resize Featured Images
function my_thumbnail_size() {
  set_post_thumbnail_size();
}
add_action('after_setup_theme', 'my_thumbnail_size', 11);

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




// Format the index page pagination
function the_FG_posts_pagination($args = [], $class = 'pagination') {
  if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

  $args = wp_parse_args( $args, [
    'mid_size'           => 2,
    'prev_next'          => false,
    'prev_text'          => __('Older posts', 'textdomain'),
    'next_text'          => __('Newer posts', 'textdomain'),
    'screen_reader_text' => __('Posts navigation', 'textdomain'),
  ]);

  $links     = paginate_links($args);
  $next_link = get_next_posts_link($args['next_text']);
  $prev_link = get_previous_posts_link($args['prev_text']);
  $template  = apply_filters( 'the_FG_navigation_markup_template', '
  <nav class="navigation %1$s" role="navigation">
    <h2 class="screen-reader-text">%2$s</h2>
    <div class="nav-links">%3$s<div class="page-numbers-container">%4$s</div>%5$s</div>
  </nav>', $args, $class);

  echo sprintf($template, $class, $args['screen_reader_text'], $prev_link, $links, $next_link);
}

add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
function posts_link_attributes_prev() { return 'class="prev"'; }
function posts_link_attributes_next() { return 'class="next"'; }

// Format the single post pagination
function the_FG_post_navigation( $args = array() ) {
  echo get_the_FG_post_navigation( $args );
}
function get_the_FG_post_navigation( $args = array() ) {
  $args = wp_parse_args( $args, array(
    'prev_text'          => '%title',
    'next_text'          => '%title',
    'in_same_term'       => false,
    'excluded_terms'     => '',
    'taxonomy'           => 'category',
    'screen_reader_text' => __( 'Post navigation' ),
  ) );

  $navigation = '';

  $previous = get_previous_post_link(
    '<div class="prev">%link</div>',
    $args['prev_text'],
    $args['in_same_term'],
    $args['excluded_terms'],
    $args['taxonomy']
  );

  $blogindex = '<a href="' . home_url() . '">NEWS HOME</a>';

  $next = get_next_post_link(
    '<div class="next">%link</div>',
    $args['next_text'],
    $args['in_same_term'],
    $args['excluded_terms'],
    $args['taxonomy']
  );

  // Only add markup if there's somewhere to navigate to.
  if ( $previous || $next ) {
    $navigation = _navigation_markup( $previous . $blogindex . $next, 'post-navigation', $args['screen_reader_text'] );
  }

  return $navigation;
}

// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}
?>