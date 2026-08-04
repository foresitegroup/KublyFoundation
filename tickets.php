<?php
$PageTitle = "Tickets";
$Description = "";

include "header.php";
?>

<section id="btb-hero">
  <div class="site-width">
    <div class="header">
      <h1>
        <span class="btb-green">B</span><span class="btb-yellow">e</span><span class="btb-orange">y</span><span class="btb-red">o</span><span class="btb-pink">n</span><span class="btb-purple">d</span>
        <div>The</div>
        Blues
      </h1>
    </div>

    <div class="content">
      <span class="blue">Please join us on <?php echo strtoupper(date("F j, Y", $GLOBALS['btbdate'])); ?></span><br>
      Discovery World at Pier Wisconsin<br>
      500 N. Harbor Drive<br>
      Milwaukee, WI

      <!-- <br><br><a href="https://www.eventbrite.com/e/beyond-the-blues-2024-tickets-948107825027" class="button">Purchase Tickets</a> -->

      <!-- <br><br>Tickets on sale August 1<sup>ST</sup> -->
    </div>
  </div>
</section>

<a href="beyond-the-blues.php#sponsors" id="sponsor-link">See Our Sponsors</a>

<?php include "footer.php"; ?>