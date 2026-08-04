<?php
$TopDir = substr(home_url(), 0, strrpos(home_url(), '/')+1);

if (is_home()) {
?>

<section id="newsletters" class="background-text" data-background="Newsletter">
  <div class="site-width">
    <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2026.pdf" class="image"><img src="<?php echo $TopDir; ?>images/Kubly_Newsletter_Summer_2026.webp" alt="" width="1000" height="1294"></a>

    <div class="text">
      <h2>Winter 2026 Newsletter</h2>

      <h3>What's Inside</h3>
      <ul id="toc">
        <li data-marker="01.">Mental Health in Wisconsin</li>
        <li data-marker="02.">6th YLC Golf Outing</li>
        <li data-marker="03.">Dudess & T.A.C.O.S</li>
        <li data-marker="04.">Projects Funded</li>
        <li data-marker="05.">Thank You Donors</li>
      </ul>

      <h4>Past Newsletters</h4>
      <div id="past-newsletters">
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2026.pdf">Summer 2026</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2026.pdf">Winter 2026</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2025.pdf">Summer 2025</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2025.pdf">Winter 2025</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2024.pdf">Summer 2024</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2024.pdf">Winter 2024</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2023.pdf">Summer 2023</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2023.pdf">Winter 2023</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2022.pdf">Summer 2022</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2022.pdf">Winter 2022</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2021.pdf">Summer 2021</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2021.pdf">Winter 2021</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2020.pdf">Summer 2020</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2020.pdf">Winter 2020</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2019.pdf">Summer 2019</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2019.pdf">Winter 2019</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2018.pdf">Summer 2018</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2018.pdf">Winter 2018</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Summer_2017.pdf">Summer 2017</a>
        <a href="<?php echo $TopDir; ?>pdf/Kubly_Newsletter_Winter_2017.pdf">Winter 2017</a>
      </div> <!-- /#past-newletters -->
    </div> <!-- /.text -->
  </div> <!-- /.site-width -->
</section> <!-- /#newsletters -->

<?php } ?>

<section id="news-footer">
  <div class="site-width">
    <h2>Beyond The Blues Concert Event</h2>
    <?php echo date("l F j, Y", $GLOBALS['btbdate']); ?><br>
    <a href="<?php echo $TopDir; ?>beyond-the-blues.php">For Event Info</a>
  </div>
</section>

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