<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);
?>

<div class="news-footer">
	<div class="footer-arrow"><div class="footer-arrow-mask"></div></div>

	<div class="site-width">
	  <h1>BEYOND THE BLUES CONCERT EVENT</h1>
	  SATURDAY SEPTEMBER 16, 2017<br>
	  <a href="<php echo $TopDir; ?>/beyond-the-blues.php">FOR EVENT INFO</a>
	</div>
</div>

<?php
include "../footer.php";
?>