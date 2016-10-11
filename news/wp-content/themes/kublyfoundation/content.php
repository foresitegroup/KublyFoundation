<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$featuredID = get_query_var('fid', 0);

if ( is_single() ) :
	the_content();
else :
	if (get_the_ID() != $featuredID) {
		echo "<div class=\"news-index-third\">";
		echo "<div class=\"news-index-date\">" . get_the_date() . "</div>";
	  echo "<h2>" . get_the_title() . "</h2>";
		echo get_the_excerpt();
	  echo " <a href=\"" . get_permalink() . "\" class=\"readmore\">Read More</a>";
	  echo "<div class=\"news-index-cat\">" . get_the_category_list(", ") . "</div>";
	  echo "</div>";
	}
endif;
?>