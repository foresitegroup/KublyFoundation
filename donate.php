<?php
$PageTitle = "Donate";
$Description = "Your donation makes possible important programs, which provide education and awareness about mental health and help people access resources in their community.";

include "header.php";
?>

<section id="donate">
  <div class="site-width">
    <div class="left">
      <h1>Donation</h1>

      Make a contribution to the Charles E. Kubly Foundation and help those affected by depression. Your donation makes possible important programs, which provide education and awareness about mental health and help people access resources in their community.
    </div>

    <div class="right">
      <h2>Your Contribution Helps:</h2>

      <ul>
        <li>Raise awareness of depression</li>
        <li>Reduce suicide</li>
        <li>Provide education about depression</li>
        <li>Reduce stigma</li>
        <li>Help people find resources in their community</li>
      </ul>
    </div>
  </div>

  <form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="donate-form">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="krick@charlesekublyfoundation.org">
    <input type="hidden" name="mrb" value="EHA8VGKLUNAXE">
    <input type="hidden" name="kublyDonationsForm" value="1">
    <input type="hidden" name="return" value="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']; ?>#thankyou">
    <input type="hidden" name="notify_url" value="http://charlesekublyfoundation.org">
    <input type="hidden" name="item_name" value="Charles E. Kubly Foundation">
    <input type="hidden" name="item_number" value="cekdonation">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="custom">

    <input type="text" name="amount" placeholder="Amount $">

    <h3>Donation Type</h3>
    <label>
      <input type="radio" name="recipient-donation-type" value="General" checked> General Support
    </label>
    <label>
      <input type="radio" name="recipient-donation-type" value="Endowment"> Endowment
    </label>

    <br><br><br>

    <label>
      <input type="radio" name="sub-recipient-donation-type" value="My Gift" checked> My Gift
    </label>
    <label>
      <input type="radio" name="sub-recipient-donation-type" value="In honor of"> In Honor Of
    </label>
    <label>
      <input type="radio" name="sub-recipient-donation-type" value="In memory of"> In Memory Of
    </label>

    <br><br>

    <input type="text" name="recipient-name" placeholder ="Their Name">

    <input type="text" name="donor-name" placeholder="Your Name">

    <br><br>

    <h3>Please Send Notification Of This Gift To:</h3>
    <br>

    <input type="text" name="notification-name" placeholder="First &amp; Last Name">

    <input type="text" name="notification-address" placeholder="Address">

    <input type="text" name="notification-city" placeholder="City">

    <div class="col2">
      <input type="text" name="notification-state" placeholder="State">

      <input type="text" name="notification-zip" placeholder="Zip Code">
    </div>

    <button type="submit" id="submit">Donate Now</button>
  </form>
</section>

<section id="donate-contact" class="site-width">
  <h2>Checks Can Be Mailed To:</h2>

  The Charles E. Kubly Foundation<br>
  1341 W. Mequon Road<br>
  Suite 220<br>
  Mequon, WI 53092<br>
  <br>

  Thank you very much for your support.<br>

  <div class="nonprofit">
    The Charles E. Kubly Foundation is a public charity. Contributions from individuals are tax deductible to the extent permitted by law under the provisions of section 501 (c)(3) of the Internal Revenue Code.
  </div>
</section>

<dialog id="thankyou">
  <button aria-label="Close dialog"></button>

  <div>
    <h3>Thank You!</h3>
    Thank you very much for your donation to the Charles E Kubly Foundation. You will be receiving a confirmation of your donation via mail containing tax information.
  </div>
</dialog>

<script>
  const thankyou = document.getElementById('thankyou');

  if (window.location.hash == "#thankyou") thankyou.showModal();

  document.querySelector('#thankyou BUTTON').addEventListener("click", () => { thankyou.close(); });

  document.querySelector('#thankyou DIV').addEventListener("click", (typ) => { typ.stopPropagation(); });

  thankyou.addEventListener("click", (tyc) => { thankyou.close(); });
  
  // BEGIN form submit
  const form = document.getElementById('donate-form');
  form.addEventListener('submit', submitForm);
  
  function submitForm(event) {
    var paypal = document.querySelector('input[name="recipient-donation-type"]:checked').value + "^";
    paypal += document.querySelector('input[name="sub-recipient-donation-type"]:checked').value + "^";
    paypal += "Recipient Name: " + document.querySelector('input[name="recipient-name"]').value + "^";
    paypal += "Donor Name: " + document.querySelector('input[name="donor-name"]').value + "^";
    paypal += "Notification Name: " + document.querySelector('input[name="notification-name"]').value + "^";
    paypal += "Notification Address: " + document.querySelector('input[name="notification-address"]').value + "^";
    paypal += "Notification City: " + document.querySelector('input[name="notification-city"]').value + "^";
    paypal += "Notification State: " + document.querySelector('input[name="notification-state"]').value + "^";
    paypal += "Notification Zip: " + document.querySelector('input[name="notification-zip"]').value;
    document.querySelector('input[name="custom"]').value = paypal;
  }
</script>

<?php $shin = "call legacy"; include "footer.php"; ?>