<?php
session_start();

$GLOBALS['btbdate'] = strtotime('September 11, 2020');

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}

if (!isset($TopDir)) $TopDir = "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>The Charles E. Kubly Foundation<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="<?php if (isset($Description)) echo $Description; ?>">
    <meta name="keywords" content="<?php if (isset($Keywords)) echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo $TopDir; ?>inc/jquery.mmenu.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css<?php if ($TopDir == "") echo '?'.filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.modal.min.js"></script>
    <script src="<?php echo $TopDir; ?>inc/jquery.mmenu.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(".menu-holder").waypoint(function(direction) {
          $(".scrolling-menu").toggleClass("sticky", direction == "down");
        });

        $(".btb-banner .header-left").waypoint(function(direction) {
          $(".scrolling-menu").toggleClass("btb-sticky", direction == "down");
        },{offset: '75px'});

        $('a[href="#incrisis"]').click(function(event) {
          event.preventDefault();
          $(this).modal({ fadeDuration: 200, fadeDelay: 0 });
        });

        // Mobile menu dropdowns
        $("#my-menu").mmenu({
          "navbar": { "title": '<a href="#my-page">&times</a>' },
          "extensions": [ "pagedim-black" ]
        });
      });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-37958686-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <div id="my-page"> <!-- For mobile menu -->

      <div id="incrisis" style="display: none;">
        If you or someone you know is at immediate risk of harm or has harmed themselves <u>CALL 911</u> immediately.<br>
        <br>

        If you are having suicidal thoughts or you are worried about someone you know <strong>CALL</strong> the National Suicide Prevention Lifeline at <u>1-800-273-8255</u> or text "<strong>HOPELINE</strong>" to <u>741741</u>.
      </div>

      <?php if (!isset($PageTitle)) { ?>
      <div class="kf-header">
        <div class="site-width">
          <a href="." class="logo"><img src="images/logo.png" alt="The Charles E. Kubly Foundation"></a>

          <a href="#my-menu" class="my-menu-toggle"></a>
          <div class="menu"><?php include "menu.php" ?></div>
        </div>
      </div>

      <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
      <div class="cycle-slideshow home-banner" data-cycle-slides="> div" data-cycle-timeout="5000" data-cycle-pause-on-hover="true">
        <!-- <a href="endowment.php" id="dogear"><div>The Joey Schmitz &amp; Charlie Kubly Endowment Fund <span>Read More &raquo;</span></div></a> -->

        <!-- <div class="home-banner-slide night-out">
          <div class="site-width">
            <h3>JOIN US FOR</h3>
            <h1>CHARLIE'S NIGHT OUT</h1>
            <h2>
              <div class="green"></div>
              <div class="yellow"></div>
              <div class="orange"></div>
              A NIGHT OUT FOR MENTAL HEALTH AWARENESS
              <div class="red"></div>
              <div class="pink"></div>
              <div class="purple"></div>
            </h2>

            <a href="https://www.eventbrite.com/e/charlies-night-a-night-out-for-mental-health-awareness-tickets-41263055911" class="button">TICKETS + INFO</a>
          </div>
        </div> -->

        <!-- <div class="home-banner-slide btb" style="background-image: url(images/home-banner-btb2017.jpg);">
          <div class="site-width">
            <h1><span class="btb-green">B</span><span class="btb-yellow">E</span><span class="btb-orange">Y</span><span class="btb-red">O</span><span class="btb-pink">N</span><span class="btb-purple">D</span> <span class="btb-blue">THE BLUES</span></h1>

            <h3>Thank you to all who helped make Beyond the Blues a great success!</h3>

            <a href="beyond-the-blues.php" class="button">MORE INFORMATION</a>
          </div>
        </div> -->

        <!-- <div class="home-banner-slide btb" style="background-image: url(images/charlies-night-2019.jpg);">
          <div class="site-width">
            <h3>JANUARY 4, 2020</h3>

            <h1>CHARLIE'S NIGHT</h1>

            <h2>DEPRESSION AWARENESS EVENT AND FUNDRAISER 2020</h2>

            <a href="https://www.eventbrite.com/e/charlies-night-depression-awareness-event-and-fundraiser-2020-tickets-82879559995" class="button">GET TICKETS</a>
          </div>
        </div> -->

        <!-- <div class="home-banner-slide dogear" style="background-image: url(images/home-banner.jpg);">
          <div class="site-width">
            <h1>A PUBLIC CHARITY DEVOTED TO IMPROVING THE LIVES OF THOSE WITH DEPRESSION</h1>

            <a href="donate.php" class="button">DONATE</a>
            <a href="foundation.php" class="learnmore">LEARN MORE</a>
          </div>
        </div> -->

        <div class="home-banner-slide btb" style="background-image: url(images/btb-banner-2020.jpg);">
          <div class="site-width">
            <div class="image">
              <img src="images/beyond-the-blues-2020-logo.png" alt="Beyond the Blues 2020">
            </div>
            
            <div class="text">
              This year only! Our much-loved, annual Beyond the Blues event transforms into a weeklong campaign to support mental health and suicide prevention.  Click below to make a donation of any size or to become a Blues Backer or Campaign Sponsor.<br>

              <a href="donate.php" class="button">DONATE</a>
              <a href="beyond-the-blues.php" class="button">MORE INFO</a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="menu-holder<?php if (isset($PageMod)) echo " " . $PageMod; ?>">
        <div class="scrolling-menu">
          <div class="site-width">
            <a href="<?php echo $TopDir; ?>." class="logo">
              <?php if (isset($PageMod)) { ?>
              <img src="images/beyond-the-blues-2020-logo.png" alt="Beyond the Blues">
              <?php } else { ?>
              <img src="<?php echo $TopDir; ?>images/logo.png" alt="The Charles E. Kubly Foundation">
              <?php } ?>
            </a>

            <a href="#my-menu" class="my-menu-toggle"></i></a>
            <div class="menu"><?php include "menu.php" ?></div>
          </div>
        </div>
      </div>
