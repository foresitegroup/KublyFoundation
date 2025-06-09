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

if (is_home()) {
?>

<div id="newsletters">
  <div class="site-width">
    <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2025.pdf" class="image"><img src="<?php echo $TopDir; ?>images/Kubly_Newsletter_Winter_2025.webp" alt="" width="1000" height="1294"></a>

    <div class="text">
      <h3>Winter 2025 Newsletter</h3>

      <span>What's Inside</span><br>
      <span>01.</span> Rocketship School<br>
      <span>02.</span> Projects Funded<br>
      <span>03.</span> Beyond the Blues 2024 Recap<br>
      <span>05.</span> Annual Financial Report<br>
      <span>06.</span> C4C and Paddle With A Purpose<br>
      <br>

      <h4>Past Newsletters</h4>
      <div id="past-newsletters">
        <div>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2024.pdf">Summer 2024</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2023.pdf">Summer 2023</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2022.pdf">Summer 2022</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2021.pdf">Summer 2021</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2020.pdf">Summer 2020</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2019.pdf">Summer 2019</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2018.pdf">Summer 2018</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2017.pdf">Summer 2017</a>
        </div>

        <div>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2025.pdf">Winter 2025</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2024.pdf">Winter 2024</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2023.pdf">Winter 2023</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2022.pdf">Winter 2022</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2021.pdf">Winter 2021</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2020.pdf">Winter 2020</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2019.pdf">Winter 2019</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2018.pdf">Winter 2018</a><br>
          <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2017.pdf">Winter 2017</a>
        </div>
      </div> <!-- /#past-newletters -->
    </div> <!-- /.text -->
  </div> <!-- /.site-width -->
</div> <!-- /#newsletters -->

<?php } ?>

<div class="news-footer">
	<!-- <div class="footer-arrow"><div class="footer-arrow-mask"></div></div> -->

	<div class="site-width">
	  <h1>BEYOND THE BLUES CONCERT EVENT</h1>
    <?php echo strtoupper(date("l F j, Y", $GLOBALS['btbdate'])); ?><br>
	  <a href="<?php echo $TopDir; ?>beyond-the-blues.php">FOR EVENT INFO</a>
	</div>
</div>

<script>
  // Open external links and PDFs in new tab
  [...document.links].forEach(link => {
    if (link.hostname != window.location.hostname || link.href.split('.').pop() == "pdf") {
      link.target = '_blank'; link.rel = 'noopener';
    }
  });
</script>

<?php
$shin = "legacy";
include "../footer.php";
?>