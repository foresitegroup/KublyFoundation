<?php
$PageTitle = "Tickets";
$Keywords = "";
$Description = "";

include "header.php";
?>

<!-- <div class="btb-tickets"> -->
  <!-- <div class="site-width"> -->
    <div class="btb-banner">
      <div class="site-width tickets-header">
        <div class="header-left">
          <span class="btb-green">B</span><span class="btb-yellow">E</span><span class="btb-orange">Y</span><span class="btb-red">O</span><span class="btb-pink">N</span><span class="btb-purple">D</span>
          <span class="btb-blue"><div>THE</div> BLUES</span>
        </div>

        <div class="header-right">
          <span class="btb-blue">PLEASE JOIN US ON <?php echo strtoupper(date("F j, Y", $GLOBALS['btbdate'])); ?></span><br>
          Discovery World at Pier Wisconsin<br>
          500 N. Harbor Drive<br>
          Milwaukee, WI
        </div>
      </div> <!-- /.site-width -->
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        if (window.location.hash == "#thankyou") {
          $(function() {
            $('#thankyou').modal();
          });
        }
      });
    </script>

    <form id="tickets" name="_cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <div>
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="krick@charlesekublyfoundation.org">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']; ?>?thankyou">

        <input type="hidden" name="item_name_1" value="Beyond The Blues Tickets">
        <input type="hidden" name="amount_1" value="95">
        <input type="hidden" name="item_name_2" value="Blues Backer Board Donation">

        Send me <input type="text" name="quantity_1"> tickets to Beyond the Blues at $95 each.<br>
        <br>

        <!-- I would like to make a donation of $<input type="text" name="amount_2"><br>
        <br>
        <br> -->

        List me on the Blues Backers Board at the event for an additional $100 or more donation: $<input type="text" name="amount_2"><br>
        <input type="hidden" name="on0" value="Blues Backer Board Name(s)">
        <input type="text" name="os0" placeholder="List my donation under this name(s)" id="donation_name"><br>
        <br>
        <br>

        <input type="submit" name="submit" value="PURCHASE NOW">
      </div>
    </form>
    <!-- Online ticket sales have ended &mdash; please join us and purchase your ticket at the door at Discovery World! See you Saturday! -->

    <div id="thankyou" style="display: none;">
      <h3>Thank You!</h3>
      Thank you very much for supporting the Charles E. Kubly Foundation and Beyond the Blues.
    </div>
  <!-- </div> -->
<!-- </div> -->

<div class="site-width ticket-sponsors">
  <a href="beyond-the-blues.php#sponsors">SEE OUR SPONSORS</a> <!-- &bull; <a href="https://charlesekublyfoundation.harnessapp.com/wv2/donate?checkout=1857&campaign_id=4517">BECOME A SPONSOR</a> -->
</div>

<?php include "footer.php"; ?>