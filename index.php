<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>The Charles E. Kubly Foundation<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="<?php if (isset($Description)) echo $Description; ?>">
    <meta name="keywords" content="<?php if (isset($Keywords)) echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css">

    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(".menu-holder").waypoint(function(direction) {
          $(".scrolling-menu").toggleClass("sticky", direction == "down");
        });
      });
    </script>
  </head>
  <body>

    <div class="kf-header">
      <div class="site-width">
        <a href="." class="logo"><img src="images/logo.png" alt="The Charles E. Kubly Foundation"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="menu"><?php include "menu.php" ?></div>
      </div>
    </div>

    <div class="home-banner">
      <div class="home-banner-slide" style="background-image: url(images/home-banner.jpg);">
        <div class="site-width">
          <h1>A PUBLIC CHARITY DEVOTED TO IMPROVING THE LIVES OF THOSE WITH DEPRESSION</h1>

          <a href="#" class="button">DONATE</a>
          <a href="#" class="learnmore">LEARN MORE</a>
        </div>
      </div>
    </div>

    <div class="menu-holder">
      <div class="scrolling-menu">
        <div class="site-width">
          <a href="." class="logo"><img src="images/logo.png" alt="The Charles E. Kubly Foundation"></a>

          <input type="checkbox" id="show-menu" role="button">
          <label for="show-menu" id="menu-toggle"></label>
          <div class="menu"><?php include "menu.php" ?></div>
        </div>
      </div>
    </div>

    <div class="home-mission">
      <div class="site-width">
        <div class="home-mission-left">
          <h1>OUR MISSION</h1>

          The <strong>Charles E. Kubly Foundation</strong> seeks to better the lives of those affected by depression by increasing public awareness of the disease and its devastating effects, eliminating the stigma associated with it, supporting suicide prevention programs and promoting improved access to quality mental health resources within communities.<br>
          <br>

          <a href="#" class="learnmore">PROJECTS &amp; GRANTS</a>
        </div>

        <div class="home-mission-right">
          <br>

          Your donation will support efforts to:<br>
          <br>

          <ul>
            <li>Raise Depression Awareness</li>
            <li>Reduce Suicide</li>
            <li>Provide Depression Education</li>
            <li>Reduce Stigma</li>
            <li>Help Individuals Find Resources</li>
          </ul><br>
          <br>

          <a href="#" class="button">DONATE</a>
        </div>
      </div>
    </div>

    <div class="home-projects">
      <div class="site-width">
        <h1>PROJECTS FUNDED</h1>

        Through the generous support of our donors, we fund quality mental health projects and provide grants to nonprofit organizations for projects that are consistent with our mission to raise awareness of depression, reduce the stigma associated with it and help people access resources in their communities. Additionally we have funded projects that address suicide prevention.<br>
        <br>

        <a href="#" class="button">GRANT REQUESTS</a>

        <script src="inc/swipebox/jquery.swipebox.min.js"></script>
        <link rel="stylesheet" href="inc/swipebox/swipebox.css">
        <script type="text/javascript">
          $(document).ready(function() { $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0}); });
        </script>
        <a href="https://www.youtube.com/watch?v=hsIOcLMTwfI" class="watchvideo swipebox">WATCH VIDEO</a>
      </div>
    </div>
    
    <div class="kf-footer">
      <div class="site-width">
        <div class="social">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        
        <div class="footer-menu">
          <a href="#">CONTACT</a>
          <a href="#">DONATE</a>
          <a href="#">FUNDING</a>
          <a href="#">LOGIN</a>
          <a href="#">LEGAL</a>
          <a href="#">PRIVACY</a>
        </div>

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> The Charles E. Kubly Foundation. All Rights Reserved.
        </div>
      </div>
    </div>

  </body>
</html>