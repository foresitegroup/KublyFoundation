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
        $('input[name="recipient-donation-type"]').on('change', function(){
          if ($('#r-honor').is(':checked')) {
            $("#recipient-name").attr("placeholder", "In Honor Of...Their Name");
          } else {
            $("#recipient-name").attr("placeholder", "In Memory Of...Their Name");
          }
        });
        
        $('#donation').submit(function(event) {
          function formValidation() {
            if (!$('#r-standard').is(':checked') && $('#recipient-name').val() === '') {
              alert('Recpient name is required');
              $('#recipient-name').focus();
              return false;
            }

            return true;
          }
          
          if (formValidation()) {
            if (!$('#r-standard').is(':checked')) {
              var paypalstring = $('#recipient-name').val() + "^";
              paypalstring += $('#notification-address').val() + "^";
              paypalstring += $('#notification-city').val() + "^";
              paypalstring += $('#notification-state').val() + "^";
              paypalstring += $('#notification-zip').val() + "^";
              paypalstring += $('input[name=recipient-donation-type]:checked').val() + "^";
              paypalstring += $('#donor-name').val() + "^";
              paypalstring += $('#notification-name').val();
              $('#paypal-custom-field').val(paypalstring);
            }
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

        <input type="text" name="donation-amount" placeholder="Amount $">

        <span class="bluetext">DONATION TYPE</span><br>
        <input type="radio" name="recipient-donation-type" value="" id="r-standard" checked> <label for="r-standard">Standard</label>
        <input type="radio" name="recipient-donation-type" value="In honor of" id="r-honor"> <label for="r-honor">In Honor Of</label>
        <input type="radio" name="recipient-donation-type" value="In memory of" id="r-memory"> <label for="r-memory">In Memory Of</label>

        <div class="donation-reveal">
          <input id="paypal-custom-field" name="custom" type="hidden">

          <input type="text" name="recipient-name" id="recipient-name">

          <input type="text" name="donor-name" id="donor-name" placeholder="Your Name">

          <span class="bluetext">PLEASE SEND NOTIFICATION OF THIS GIFT TO:</span><br>
          <br>

          <input type="text" name="notification-name" id="notification-name" placeholder="First &amp; Last Name">

          <input type="text" name="notification-address" id="notification-address" placeholder="Address">

          <input type="text" name="notification-city" id="notification-city" placeholder="City">
          
          <div class="left">
            <div class="styled-select">
              <select id="notification-state" name="notification-state">
                <option value="0">State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
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
  P.O. Box 170284<br>
  Milwaukee, WI 53217<br>
  <br>

  Thank you very much for your support.<br>
  <br>

  <div class="nonprofit">
    The Charles E. Kubly Foundation is a public charity. Contributions from individuals are tax deductible to the extent permitted by law under the provisions of section 501 (c)(3) of the Internal Revenue Code.
  </div>
</div>

<div class="footer-call">
  <div class="footer-arrow"><div class="footer-arrow-mask"></div></div>
  <div class="site-width">
    For immediate risk of harm and/or emergencies always <span class="bluetext">CALL 911</span>.<br>
    If you are having suicidal thoughts or worried about someone you know CALL the National Suicide Prevention Lifeline: <span class="bluetext">1-800-273-8255</span>
  </div>
</div>

<?php include "footer.php"; ?>