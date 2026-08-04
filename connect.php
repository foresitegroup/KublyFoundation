<?php
$PageTitle = "Connect";
$Description = "Contact the Charles E. Kubly Foundation, subscribe to our newsletter, and learn how you can male a difference.";

include "header.php";
include_once "inc/dbconfig.php";
?>

<section id="connect-hero">
  <div class="site-width">
    <div class="image">
      <h1>Connect</h1>

      Send Us A Message

      <div class="arrow"></div>
    </div>

    <div class="text">
      The Charles E. Kubly Foundation<br>
      1341 W. Mequon Road<br>
      Suite 220<br>
      Mequon, WI 53092<br>
      <br>

      Kris Rick<br>
      Executive Director & Business Manager<br>
      (414) 477-9959<br>
      <br>
      <br>

      <a href="donate.php" class="button">Donate</a>
    </div>
  </div>
</section>

<?php
// Settings for randomizing form field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "KublyConnectForm";
?>

<form action="form-connect.php" method="POST" id="connect-form" novalidate>
  <h2>Please fill out the form below or call (414) 477-9959.</h2>

  <div class="required">Required *</div>

  <div>
    <input type="text" name="username" tabindex="-1" aria-hidden="true" autocomplete="new-password">

    <input type="text" name="<?php echo md5("name".$ip.$salt.$timestamp); ?>" placeholder="First &amp; Last Name *" required>

    <input type="text" name="<?php echo md5("address".$ip.$salt.$timestamp); ?>" placeholder="Address">

    <input type="text" name="<?php echo md5("citystatezip".$ip.$salt.$timestamp); ?>" placeholder="City, State, Zip">

    <input type="email" name="<?php echo md5("email".$ip.$salt.$timestamp); ?>" placeholder="Email Address *" required>

    <textarea name="<?php echo md5("message".$ip.$salt.$timestamp); ?>" placeholder="Message"></textarea>

    <label>
      <input type="checkbox" name="subscribe" value="yes" id="c-subscribe" checked> I would like to receive the Charles E. Kubly Foundation newsletter and event information.
    </label>

    <label>
      <input type="checkbox" name="ambassador" value="yes" id="c-ambassador"> I am interested in becoming a CEKF / YLC Ambassador.
    </label>

    <div class="g-recaptcha" data-sitekey="<?php echo $RCsitekey; ?>"></div>

    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

    <button type="submit" id="submit">Send Message</button>
  </div>
</form>

<section id="footer-call" class="shin shin-connect">
  Sign me up for the Charles E. Kubly Newsletter.

  <form action="https://charlesekublyfoundation.us11.list-manage.com/subscribe/post?u=6c470c9f94843d07af2cd8889&amp;id=cb47948f28&amp;f_id=00e515e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self" novalidate="">
    <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="" placeholder="Email Address">

    <div style="position: absolute; left: -5000px;" aria-hidden="true">
      <input type="text" name="b_b93b1b616b0c1e6484322ceaf_8e627c05fe" tabindex="-1" value="">
    </div>

    <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Sign Up">
  </form>
</section>

<dialog>
  <button>&#10005;</button>
  <div></div>
</dialog>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  // Modal
  const dialog = document.querySelector("dialog");
  const dialogClose = document.querySelector("dialog button");
  const dialogContent = document.querySelector("dialog div");

  dialogClose.addEventListener("click", () => { dialog.close(); });
  dialog.addEventListener("click", () => { dialog.close(); });
  dialogContent.addEventListener("click", (event) => { event.stopPropagation(); });

  // BEGIN form submit
  const form = document.getElementById('connect-form');
  form.addEventListener('submit', submitForm);

  function submitForm(event) {
    event.preventDefault();

    // Validate any fields with "required" selector
    var valid = 'yes';

    for (const el of form.querySelectorAll('[required]')) {
      if (!el.checkValidity()) {
        document.getElementsByName(el.name).forEach(function (input) {
          input.classList.add('alert');
          input.placeholder = input.placeholder+' REQUIRED';
        });

        valid = 'no';
      }
    }

    // If fields are valid, send the data
    if (valid == 'yes') {
      document.getElementById("submit").classList.add("loader");

      const data = new FormData(form);

      fetch(form.action, {
        method: 'POST',
        body: data
      })
      .then((response) => response.text())
      .then((result) => {
        // Data sent, so display success message in modal
        // and clear all the form fields
        dialogContent.innerHTML = result;
        dialog.showModal();
        form.reset();

        // Clear alerts
        document.querySelectorAll('.alert').forEach(function (alert) {
          alert.classList.remove('alert');
          alert.placeholder = alert.placeholder.substring(0, alert.placeholder.length-9);
        });

        document.getElementById("submit").classList.remove("loader");
      });
    }
  } // END submitForm
</script>

<?php $shin = "legacy"; include "footer.php"; ?>