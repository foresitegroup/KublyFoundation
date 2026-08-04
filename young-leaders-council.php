<?php
$PageTitle = "Young Leaders Council";
$Description = "The Young Leaders Council uses social media and additional unique fundraising opportunities that provide social connection and conversation.";

include "header.php";
include_once "inc/dbconfig.php";
?>

<section id="ylc-hero">
  <img src="images/ylc-logo.webp" alt="Young Leaders Council" width="587" height="587" loading="lazy">
</section>

<section id="ylc">
  <div class="site-width">
    The Charles E. Kubly Foundation Young Leaders Council will make a difference for the Foundation in several ways. Those include greater community connection to the Foundation through social media and additional unique fundraising opportunities that provide social connection and conversation. This will continue to break down the stigma associated with mental health while letting young adults know they have an organization to connect with that makes a difference in mental wellness.<br>
    <br>

    The YLC also maintains a group of Ambassadors who can help share messaging and events on behalf of The CEKF YLC.
  </div>
</section>

<section id="ylc-join">
  <h2 class="site-width">Become a Young Leaders Council Ambassador</h2>
  
  <form action="form-ylc.php" method="POST" id="ylc-form" novalidate>
    <div class="required">Required *</div>

    <div>
      <input type="text" name="username" tabindex="-1" aria-hidden="true" autocomplete="new-password">

      <input type="text" name="name" placeholder="First &amp; Last Name *" required>

      <input type="text" name="address" placeholder="Address">

      <input type="text" name="citystatezip" placeholder="City, State, Zip">

      <input type="email" name="email" placeholder="Email Address *" required>

      <label>
        <input type="checkbox" name="ambassador" value="yes" checked> I am interested in becoming a CEKF / YLC Ambassador.
      </label>

      <label>
        <input type="checkbox" name="subscribe" value="yes"> I would like to receive the Charles E. Kubly Foundation newsletter and event information.
      </label>
      
      <div class="g-recaptcha" data-sitekey="<?php echo $RCsitekey; ?>"></div>

      <button type="submit" id="submit">Submit</button>
    </div>
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
  const form = document.getElementById('ylc-form');
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