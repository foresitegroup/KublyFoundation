<?php
$PageTitle = "Young Leaders Council";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div id="ylc-banner">
  <img src="images/ylc-logo.webp" alt="Young Leaders Council">
</div> <!-- /.ylc-banner -->

<div id="ylc">
  <div class="site-width">
    The Charles E. Kubly Foundation Young Leaders Council will make a difference for the Foundation in several ways. Those include greater community connection to the Foundation through social media and additional unique fundraising opportunities that provide social connection and conversation. This will continue to break down the stigma associated with mental health while letting young adults know they have an organization to connect with that makes a difference in mental wellness.<br>
    <br>

    The YLC also maintains a group of Ambassadors who can help share messaging and events on behalf of The CEKF YLC.
  </div> <!-- /.site-width -->
</div> <!-- /#ylc -->

<!-- <div id="ylc-events">
  <h2 class="site-width">Upcoming Events</h2>

  <div class="ylc-event">
    <div class="image" style="background-image: url(images/ylc-event.webp);"></div>

    <div class="title">
      <h3>2023 For The Cause Golf Outing</h3>
      Sat, June 10, 2023 at 10am
    </div>

    <div class="text">
      The Charles E. Kubly Foundation Young Leaders Council is hosting their 3rd annual golf outing on Saturday, June 10th at the Silver Spring Golf Course in Menomonee Falls (Now called The Preserve)! The day will include 18 rounds of golf and social time at the end of the outing to include passed apps and placing announcements. Guests will also be allowed to come socialize while the golfers play and join the social time at the end of the event.<br>
      <br>

      <a href="https://www.eventbrite.com/e/2023-fore-the-cause-golf-outing-tickets-524807442187" class="button">Buy Tickets Now</a>
    </div>
  </div>
</div> -->

<div id="ylc-form-wrap">
  <div class="site-width connect">
    <h2>Become a Young Leaders Council Ambassador</h2>

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
    $salt = "KublyYLCForm";
    ?>

    <noscript>
    <?php
    $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
    unset($_SESSION['feedback']);
    ?>
    </noscript>

    <form action="form-ylc.php" method="POST" id="connect-form">
      <div class="required">Required *</div>

      <div>
        <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="First &amp; Last Name *">

        <input type="text" name="<?php echo md5("address" . $ip . $salt . $timestamp); ?>" id="address" placeholder="Address">

        <input type="text" name="<?php echo md5("citystatezip" . $ip . $salt . $timestamp); ?>" id="citystatezip" placeholder="City, State, Zip">

        <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address *">

        <input type="checkbox" name="ambassador" value="yes" id="c-ambassador" checked> <label for="c-ambassador"><span></span>I am interested in becoming a CEKF / YLC Ambassador.</label>
        <br>

        <input type="checkbox" name="subscribe" value="yes" id="c-subscribe"> <label for="c-subscribe"><span></span>I would like to receive the Charles E. Kubly Foundation newsletter and event information.</label>
        <br>
        
        <div class="g-recaptcha" data-sitekey="6Lfk0EYUAAAAAAIL3WuhVbN0IEMpi8axB5y4j3S8"></div>

        <input type="hidden" name="referrer" value="young-leaders-council.php">

        <input type="text" name="confirmationCAP" style="display: none;">

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <div id="connect-form-messages"><?php echo $feedback; ?></div>

        <input type="submit" name="submit" value="Submit">
      </div>
    </form>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </div>
</div>

<?php include "footer.php"; ?>