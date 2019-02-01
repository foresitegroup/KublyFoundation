<?php
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="home-mission">
  <div class="site-width">
    <div class="home-mission-left">
      <h1>OUR MISSION</h1>

      The <strong>Charles E. Kubly Foundation</strong> seeks to better the lives of those affected by depression by increasing public awareness of the disease and its devastating effects, eliminating the stigma associated with it, supporting suicide prevention programs and promoting improved access to quality mental health resources within communities.<br>
      <br>

      <a href="grants.php" class="learnmore">PROJECTS &amp; GRANTS</a>
    </div>

    <div class="home-mission-right">
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

      <a href="donate.php" class="button">DONATE</a>
    </div>
  </div>
</div>

<div class="home-projects">
  <div class="site-width">
    <h1>PROJECTS FUNDED</h1>

    Through the generous support of our donors, we provide grants to fund quality mental health projects to nonprofit organizations for projects that are consistent with our mission to raise awareness of depression, reduce the stigma associated with it and help people access resources in their communities. Additionally, we fund projects that address suicide prevention.<br>
    <br>

    <a href="grants.php#grant-guidelines" class="button">GRANT REQUESTS</a>

    <script src="inc/swipebox/jquery.swipebox.min.js"></script>
    <link rel="stylesheet" href="inc/swipebox/swipebox.css">
    <script type="text/javascript">
      $(document).ready(function() {
        $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0});
        $('.swipe-box').swipebox({autoplayVideos: true, hideBarsDelay : 0});
      });
    </script>
    <a href="https://www.youtube.com/watch?v=hsIOcLMTwfI" class="watchvideo swipebox">2015 PROJECT VIDEO</a>
  </div>
</div>

<div class="home-event">
  <div class="site-width">
    <div class="home-event-left">
      <!-- <a href="https://www.youtube.com/watch?v=dQClkoB-7DE" class="swipe-box"><i class="fa fa-play" aria-hidden="true"></i></a> -->
    </div>

    <div class="home-event-right">
      <img src="images/beyond-the-blues-logo.png" alt=""><br>
      <br>
      
      <h4>Save the Date<br>Beyond the Blues 2019</h4>
      <h3><?php echo strtoupper(date("l<b\\r>F j, Y", $GLOBALS['btbdate'])); ?></h3>
      <h4>DISCOVERY WORLD PIER WISCONSIN PAVILION</h4>
      <br>

      <!-- <a href="tickets.php">Tickets on sale now!</a><br> -->
      <!-- <a href="pdf/Beyond_the_Blues_Sponsorship_2018.pdf">Sponsorships available</a><br>
      <br> -->

      <a href="beyond-the-blues.php" class="button">EVENT INFO</a>
      <a href="events.php" class="more">+ MORE EVENTS</a>
    </div>
  </div>

  <div class="home-event-back" style="background-image: url(images/discovery-world.jpg);"></div>
</div>

<div class="home-foundation">
  <div class="footer-arrow"><div class="footer-arrow-mask"></div></div>
  <img src="images/charlie-circle.png" alt="" class="hf-image">

  <div class="site-width">
    <div class="home-foundation-left">
      WHY WAS THE FOUNDATION STARTED?
    </div>

    <div class="home-foundation-right">
      Many people don't recognize that depression is a disease and often see depression as a weakness or something that they should be able to fix on their own. Depression is a disease like any other, and, if left untreated, can have devastating consequences. The <strong>Charles E. Kubly Foundation</strong> was founded in 2003 after the death of Charlie Kubly. Friends and family members of Charlie saw a need in the community for services to address depression and suicide prevention.<br>
      <br>

      <a href="foundation.php#charlies-story" class="button">CHARLIE'S STORY</a>

      <img src="images/charlie-circle.png" alt=""  class="hf-image-static">
    </div>
  </div>
</div>

<?php include "footer.php"; ?>