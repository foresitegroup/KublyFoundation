<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if (!is_single()) :
  $HeaderClass = "banner-news-index";
  $PageTitle = "Foundation News";
  $Description = "";
  $Keywords = "";
else :
  $HeaderClass = "banner-news-single";
  $HeaderBackground = wp_get_attachment_url(get_post_thumbnail_id());
  $PageTitle = get_the_title();
  $TheDate = get_the_date();
endif;

include "../header.php";
?>

<div class="<?php echo $HeaderClass; ?>"<?php if ($HeaderBackground != "") echo 'style="background-image: url(' . $HeaderBackground . ');"'; ?>>

	<div class="site-width">
	  <h1><?php echo $PageTitle; ?></h1>

	  <?php echo ($HeaderClass == "banner-news-single") ? $TheDate : "NEWS, ARTICLES, BILLIE'S CORNER &amp; MORE."; ?>
	</div>
</div>
