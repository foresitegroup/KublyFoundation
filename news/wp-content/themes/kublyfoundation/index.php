<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if (!is_single()) :
	global $post;

	$args = array('posts_per_page' => 1, 'meta_key' => 'featured-checkbox', 'meta_value' => 'yes');
  $featured = new WP_Query($args);
  if ($featured->have_posts()):
  	$featured->the_post();
  else :
  	wp_reset_postdata();
  	$nofeatured = get_posts('posts_per_page=1&order=DESC&orderby=date');
  	foreach ($nofeatured as $post) : setup_postdata( $post ); endforeach;
  endif;

  $featuredID = $post->ID;
  $featuredDate = get_the_date();
  $featuredTitle = get_the_title();
  $featuredExcerpt = get_the_excerpt();
  $featuredPermalink = get_permalink();
  $featuredImage = (get_post_thumbnail_id() != "") ? wp_get_attachment_url(get_post_thumbnail_id()) : "../images/news-header.jpg";
?>

<div class="featured-post">
  <div class="site-width">
    <div class="featured-left">
      <div class="fcat">FEATURED:</div>
      <div class="fdate"><?php echo $featuredDate; ?></div>
      <h2><?php echo $featuredTitle; ?></h2>
      <?php echo $featuredExcerpt; ?>
      <a href="<?php echo $featuredPermalink; ?>">Read More</a>
    </div>
  </div>

  <div class="featured-image" style="background-image: url(<?php echo $featuredImage; ?>);"></div>

  <a href="<?php echo $featuredPermalink; ?>" class="featured-read">READ</a>
</div>

<script type="text/javascript">
$(document).ready(function() {
  $(".news-filter [href]").each(function() {
    if (this.href == window.location.href) { $(this).addClass("current"); }
  });
});
</script>

<div class="news-filter">
  <div class="site-width">
    FILTER:
    <a href="<?php echo site_url(); ?>/">ALL</a>
    <a href="<?php echo site_url(); ?>/category/news/">NEWS</a>
    <a href="<?php echo site_url(); ?>/category/articles/">ARTICLES</a>
    <a href="<?php echo site_url(); ?>/category/events/">EVENTS</a>
    <a href="<?php echo site_url(); ?>/category/billies-corner/">BILLIE'S CORNER</a>
  </div>
</div>

<?php
endif;
?>

<div class="site-width news-content<?php if (is_single()) echo " news-content-single"; ?>">
	<?php if ( have_posts() ) : ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			set_query_var( 'fid', $featuredID );
			get_template_part( 'content', get_post_format() );

		// End the loop.
		endwhile;

	// If no content, include the "No posts found" template.
	else :
		get_template_part( 'content', 'none' );

	endif;
	?>
</div><!-- .content-area -->

<?php
if (is_single()) :
  // Previous/next post navigation.
  the_FG_post_navigation( array(
    'next_text' => __( 'NEXT', 'twentysixteen' ),
    'prev_text' => __( 'PREVIOUS', 'twentysixteen' ),
  ) );
else :
  // Previous/next page navigation.
  the_FG_posts_pagination( array(
    'mid_size' => 5,
    'prev_text'          => __( 'PREVIOUS', 'twentysixteen' ),
    'next_text'          => __( 'NEXT', 'twentysixteen' ),
  ) );
endif;

get_footer(); ?>