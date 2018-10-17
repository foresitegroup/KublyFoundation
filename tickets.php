<?php
$PageTitle = "Tickets";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="btb-tickets">
  <div class="site-width">
    <div class="btb-banner cftc">
      <div class="header-left">
        <span class="btb-green">CAUSE</span> <div class="btb-blue">FOR THE</div> <span class="btb-red">CLAUS</span>
      </div>

      <div class="info">
        <span class="btb-blue">PLEASE JOIN US ON DECEMBER 8, 2018</span><br>
        6:30pm - 11:00 pm<br>
        Ozaukee Pavilion at the Ozaukee County Fairgrounds<br>
        W67 N890 Washington Ave.<br>
        Cedarburg, WI
      </div>
    </div>

    $40 per person includes catering, raffle, live auction, and Dueling Pianos, cash bar as well as awards for the best Santas, Mrs. Claus's, Santa's helpers, elves, costumes, etc.<br>
    <br>
    <br>

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

        <input type="hidden" name="item_name_1" value="Cause for the Claus Tickets">
        <input type="hidden" name="amount_1" value="40">
        <input type="hidden" name="item_name_2" value="Cause for the Claus Donation">

        Send me <input type="text" name="quantity_1"> tickets to Cause for the Claus at $40 each.<br>
        <br>

        I would like to make a donation of $<input type="text" name="amount_2"><br>
        <br>
        <br>

        <input type="submit" name="submit" value="PURCHASE NOW">
      </div>
    </form>

    <div id="thankyou" style="display: none;">
      <h3>Thank You!</h3>
      Thank you very much for supporting the Charles E. Kubly Foundation and Cause for the Claus.
    </div>
  </div>
</div>

<?php include "footer.php"; ?>