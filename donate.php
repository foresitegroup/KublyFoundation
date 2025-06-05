<?php
$PageTitle = "Donate";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="donation">
  <div class="site-width">
    <div class="donation-left">
      <h1>DONATION</h1>

      Make a contribution to the Charles E. Kubly Foundation and help those affected by depression. Your donation makes possible important programs, which provide education and awareness about mental health and help people access resources in their community.
    </div>

    <div class="donation-right">
      <h2>Your Contribution Helps:</h2>

      <ul>
        <li>Raise awareness of depression</li>
        <li>Reduce suicide</li>
        <li>Provide education about depression</li>
        <li>Reduce stigma</li>
        <li>Help people find resources in their community</li>
      </ul>
    </div>

    <div style="clear: both;"></div><br>
    <br>
    <br>

    <script type="text/javascript">
      $(document).ready(function() {
        // $('input[name="recipient-donation-type"]').on('change', function(){
        //   if ($('#r-endowment').not(':checked')) {
        //     $('.donation-reveal').find('input:text').val('');
        //     $('.donation-reveal').find('input:radio').removeAttr('checked');
        //   }
        // });

        $('#donation').submit(function(event) {
          function formValidation() {
            // if (($('#r-endowment').is(':checked')) && $('#r-gift, #r-honor, r-memory').not(':checked')) {
            //   alert('You must select "My Gift", "In Honor Of" or "In Memory Of"');
            //   return false;
            // }

            // if (($('#r-endowment').is(':checked')) && $('#recipient-name').val() === '') {
            //   alert('Recipient name is required');
            //   $('#recipient-name').focus();
            //   return false;
            // }

            return true;
          }

          if (formValidation()) {
            // if ($('#r-endowment').is(':checked')) {
              var paypalstring = $('input[name=recipient-donation-type]:checked').val() + "^";
              paypalstring += $('input[name=sub-recipient-donation-type]:checked').val() + "^";
              paypalstring += "Recipient Name: " + $('#recipient-name').val() + "^";
              paypalstring += "Donor Name: " + $('#donor-name').val() + "^";
              paypalstring += "Notification Name: " + $('#notification-name').val() + "^";
              paypalstring += "Notification Address: " + $('#notification-address').val() + "^";
              paypalstring += "Notification City: " + $('#notification-city').val() + "^";
              paypalstring += "Notification State: " + $('#notification-state').val() + "^";
              paypalstring += "Notification Zip: " + $('#notification-zip').val();
              $('#paypal-custom-field').val(paypalstring);
            // }
          } else {
            event.preventDefault();
          }
        });

        if (window.location.hash == "#thankyou") {
          $(function() {
            $('#thankyou').modal();
          });
        }
      });
    </script>

    <form id="donation" name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <div>
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="krick@charlesekublyfoundation.org">
        <input type="hidden" name="mrb" value="EHA8VGKLUNAXE">
        <input type="hidden" name="kublyDonationsForm" value="1">
        <input type="hidden" name="return" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']; ?>?thankyou">
        <input type="hidden" name="notify_url" value="http://charlesekublyfoundation.org">
        <input type="hidden" name="item_name" value="Charles E. Kubly Foundation">
        <input type="hidden" name="item_number" value="cekdonation">
        <input type="hidden" name="currency_code" value="USD">

        <input type="text" name="amount" placeholder="Amount $">

        <span class="bluetext">DONATION TYPE</span><br>
        <!-- <input type="radio" name="recipient-donation-type" value="Beyond the Blues" id="r-btb"> <label for="r-btb">Beyond the Blues</label> -->
        <input type="radio" name="recipient-donation-type" value="General" id="r-general" checked> <label for="r-general">General Support</label>
        <input type="radio" name="recipient-donation-type" value="Endowment" id="r-endowment"> <label for="r-endowment">Endowment</label><br>
        <br>

        <!-- <input type="radio" name="recipient-donation-type" value="G's Big Jig" id="r-bigjig"> <label for="r-bigjig">G's Big Jig</label> -->

        <!-- <small>Beyond the Blues Donors: Give $150 or more and you'll be listed as a Blues Backer; give $500 or more to be listed at one of our campaign sponsor levels.</small> -->

        <div class="donation-reveal">
          <input id="paypal-custom-field" name="custom" type="hidden">

          <input type="radio" name="sub-recipient-donation-type" value="My Gift" id="r-gift" checked> <label for="r-gift">My Gift</label>
          <input type="radio" name="sub-recipient-donation-type" value="In honor of" id="r-honor"> <label for="r-honor">In Honor Of</label>
          <input type="radio" name="sub-recipient-donation-type" value="In memory of" id="r-memory"> <label for="r-memory">In Memory Of</label><br>
          <br>

          <input type="text" name="recipient-name" id="recipient-name" placeholder ="Their Name">

          <input type="text" name="donor-name" id="donor-name" placeholder="Your Name">

          <span class="bluetext">PLEASE SEND NOTIFICATION OF THIS GIFT TO:</span><br>
          <br>

          <input type="text" name="notification-name" id="notification-name" placeholder="First &amp; Last Name">

          <input type="text" name="notification-address" id="notification-address" placeholder="Address">

          <input type="text" name="notification-city" id="notification-city" placeholder="City">

          <div class="left">
            <input type="text" name="notification-state" id="notification-state" placeholder="State">
          </div>

          <div class="right">
            <input type="text" name="notification-zip" id="notification-zip" placeholder="Zip Code">
          </div>

          <div style="clear: both;"></div>
        </div>

        <input type="submit" name="submit" value="DONATE NOW">
      </div>
    </form>

    <div id="thankyou" style="display: none;">
      <h3>Thank You!</h3>
      Thank you very much for your donation to the Charles E Kubly Foundation. You will be receiving a confirmation of your donation via mail containing tax information.
    </div>
  </div>
</div>

<div class="site-width donation-mail">
  <strong>CHECKS CAN BE MAILED TO:</strong><br>
  <br>

  The Charles E. Kubly Foundation<br>
  1341 W. Mequon Road<br>
  Suite 220<br>
  Mequon, WI 53092<br>
  <br>

  Thank you very much for your support.<br>
  <br>

  <div class="nonprofit">
    The Charles E. Kubly Foundation is a public charity. Contributions from individuals are tax deductible to the extent permitted by law under the provisions of section 501 (c)(3) of the Internal Revenue Code.
  </div>
</div>

<?php $shin = "call"; include "footer.php"; ?>