<?php
$PageTitle = "Connect";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="connect-banner">
  <div class="site-width">
    <div class="left">
      <div>
        <h1>CONNECT</h1>

        SEND US A MESSAGE<br>
        <br>

        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
      </div>
    </div>

    <div class="right">
      <div>
        The Charles E. Kubly Foundation<br>
        1341 W. Mequon Road<br>
        Suite 220<br>
        Mequon, WI 53092<br>
        <br>

        Kris Rick<br>
        Executive Director & Business Manager<br>
        <strong>(414) 477-9959</strong><br>
        <br>
        <br>

        <a href="donate.php" class="button">DONATE</a>
      </div>
    </div>
  </div>
</div>

<div class="site-width connect">
  Please fill out the form below or call (414) 477-9959.<br>
  <br>

  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#connect-form');
      var formMessages = $('#connect-form-messages');
      $(form).submit(function(event) {
        event.preventDefault();

        function formValidation() {
          if ($('#name').val() === '') { alert('First & Last name required.'); $('#name').focus(); return false; }
          if ($('#email').val() === '') { alert('Email address required.'); $('#email').focus(); return false; }
          return true;
        }

        if (formValidation()) {
          var formData = $(form).serialize();
          formData += '&src=ajax';

          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
          })
          .done(function(response) {
            $(formMessages).html(response);

            $(form).find('input:text, textarea').val('');
            $('#email').val(''); // Grrr!
            $(form).find('input:radio, input:checked').removeAttr('checked').removeAttr('selected');
          })
          .fail(function(data) {
            if (data.responseText !== '') {
              $(formMessages).html(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        }
      });
    });
  </script>

  <?php
  // Settings for randomizing form field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "KublyConnectForm";
  ?>

  <noscript>
  <?php
  $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
  unset($_SESSION['feedback']);
  ?>
  </noscript>

  <form action="form-connect.php" method="POST" id="connect-form">
    <div class="required">Required *</div>

    <div>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="First &amp; Last Name *">

      <input type="text" name="<?php echo md5("address" . $ip . $salt . $timestamp); ?>" id="address" placeholder="Address">

      <input type="text" name="<?php echo md5("citystatezip" . $ip . $salt . $timestamp); ?>" id="citystatezip" placeholder="City, State, Zip">

      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address *">

      <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="Message"></textarea>

      <input type="checkbox" name="subscribe" value="yes" id="c-subscribe" checked> <label for="c-subscribe"><span></span>I would like to receive the Charles E. Kubly Foundation newsletter and event information.</label>
      <br>

      <input type="checkbox" name="ambassador" value="yes" id="c-ambassador"> <label for="c-ambassador"><span></span>I am interested in becoming a CEKF / YLC Ambassador.</label>
      <br>

      <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
      <!-- <div class="g-recaptcha" data-sitekey="6Lfk0EYUAAAAAAIL3WuhVbN0IEMpi8axB5y4j3S8"></div> -->
      <div class="g-recaptcha" data-sitekey="6Lfk0EYUAAAAAAIL3WuhVbN0IEMpi8axB5y4j3S8"></div>

      <input type="hidden" name="referrer" value="connect.php">

      <input type="text" name="confirmationCAP" style="display: none;">

      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <div id="connect-form-messages"><?php echo $feedback; ?></div>

      <input type="submit" name="submit" value="SEND MESSAGE">
    </div>
  </form>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</div>

<div class="footer-call">
  <div class="footer-arrow"><div class="footer-arrow-mask"></div></div>
  <div class="site-width" id="newsletter">
    <!-- Begin Newsletter Signup Form -->
    <script type="text/javascript">
      $(document).ready(function() {
        var mcform = $('#newsletter-form');
        var mcformMessages = $('#newsletter-form-messages');
        $(mcform).submit(function(event) {
          event.preventDefault();

          function formValidation() {
            if ($('#mcemail').val() === '') { alert('Email address required.'); $('#mcemail').focus(); return false; }
            return true;
          }

          if (formValidation()) {
            var mcformData = $(mcform).serialize();
            mcformData += '&src=ajax';

            $.ajax({
              type: 'POST',
              url: $(mcform).attr('action'),
              data: mcformData
            })
            .done(function(response) {
              $(mcformMessages).html(response);
              $('#mcemail').val('');
            })
            .fail(function(data) {
              if (data.responseText !== '') {
                $(mcformMessages).html(data.responseText);
              } else {
                $(mcformMessages).text('Oops! An error occured and your message could not be sent.');
              }
            });
          }
        });
      });
    </script>

    <?php
    // Settings for randomizing form field names
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = time();
    $salt = "KublyNewsletterForm";
    ?>

    <noscript>
    <?php
    $nlfeedback = (!empty($_SESSION['nlfeedback'])) ? $_SESSION['nlfeedback'] : "";
    unset($_SESSION['nlfeedback']);
    ?>
    </noscript>

    Sign me up for the Charles E. Kubly Newsletter.<br>

    <div id="newsletter-form-messages"><?php echo $nlfeedback; ?></div>

    <form action="form-newsletter.php" method="POST" id="newsletter-form">
      <div>
        <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="mcemail" placeholder="Email Address">
        <input type="submit" name="submit" value="SIGN UP">

        <input type="text" name="confirmationCAP" style="display: none;">
        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
      </div>
    </form>
    <!--End Newsletter Signup Form -->
  </div>
</div>

<?php include "footer.php"; ?>