<?php
$PageTitle = "Events";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="events-banner">
  <div class="site-width">
    <h1>WHAT'S HAPPENING?</h1>

    There are many community events that happen throughout the year.<br>
    See sponsored and events alike below.<br>
    <br>

    <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
  </div>
</div>

<div class="events-header">
  <div class="site-width">
    UPCOMING EVENTS 2020
  </div>
</div>

<div class="events">
  <div class="site-width">
<!--     <div class="event">
      <div class="event-left">
        <div class="event-day">Saturday</div>
        December 8<br>
        6:30 pm

        <a href="https://www.eventbrite.com/e/charlies-night-out-tickets-30130353699">EVENT DETAILS</a>
      </div>

      <div class="event-right">
        <div class="event-title">Cause for the Claus</div>
        Ozaukee County Fairgrounds Pavilion, Cedarburg, WI.
      </div>

      <div style="clear: both;"></div>
    </div> -->

<!--     <div class="event">
      <div class="event-left">
        <div class="event-day">Saturday</div>
        January 12<br>
        7:00 pm

        <a href="https://www.eventbrite.com/e/charlies-night-out-tickets-30130353699">EVENT DETAILS</a>
      </div>

      <div class="event-right">
        <div class="event-title">Charlie's Night Out</div>
        A fun night out for a great cause! Grab your friends and join us for our blue jean casual "Charlie's Night Out" fundraiser at the Black Swan in Milwaukee's Downtown Third Ward.
      </div>

      <div style="clear: both;"></div>
    </div> -->

    <div class="event">
      <div class="event-left">
        <div class="event-day"><?php echo strtoupper(date("l", $GLOBALS['btbdate'])); ?></div>
        <?php echo strtoupper(date("F j", $GLOBALS['btbdate'])); ?><br>
        <!-- Time TBA -->
      </div>

      <div class="event-right">
        <div class="event-title">Beyond the Blues</div>
        A Charles E Kubly Foundation Fundraising Event to better the lives of those affected by depression by increasing public awareness of the disease and its devastating effects, eliminating the stigma associated with it, supporting suicide prevention programs and promoting improved access to quality mental health resources within communities.
      </div>

      <div style="clear: both;"></div>
    </div>

    <!-- <div class="event">
      <div class="event-left">
        <div class="event-day">Friday</div>
        June 2<br>
        7:00 pm

        <a href="https://www.eventbrite.com/e/gs-big-jig-registration-33235548420">EVENT DETAILS</a>
      </div>

      <div class="event-right">
        <div class="event-title">G's Big Jig</div>
        Please Register for the first annual G's Big Jig 5K fun run/walk. There will be a family-friendly gathering in the park with food, beer, and entertainment. All proceeds will be donated to the Garrett Kelley Memorial Fund in coordination with the Charles E. Kubly Foundation to further our mission of providing more awareness and support for those suffering the effects of suicide and depression.
      </div>

      <div style="clear: both;"></div>
    </div> -->

    <!-- <div class="event">
      <div class="event-left">
        <div class="event-day">Thursday</div>
        November 3<br>
        5:30 pm
      </div>

      <div class="event-right">
        <div class="event-title">Celebrate Children's 2016</div>
        Visit <a href="http://www.chw.org">www.chw.org</a> for details
      </div>

      <div style="clear: both;"></div>
    </div> -->

    <!-- <div class="event">
      <div class="event-left">
        <div class="event-day">Sunday</div>
        November 6<br>
        5:00 pm
      </div>

      <div class="event-right">
        <div class="event-title">Dining in the Dark</div>
        Presented by Vision-Forward. For more information contact: <?php //email("klynch@vision-forward.org"); ?> or at 414-615-0161.
      </div>

      <div style="clear: both;"></div>
    </div> -->

    <!-- <div class="event">
      <div class="event-left">
        <div class="event-day">Wednesday, Thursday</div>
        November 16-17

        <a href="http://www.ccfconference.org">EVENT DETAILS</a>
      </div>

      <div class="event-right">
        <div class="event-title">Children Come First Conference</div>
        This Charles E Kubly Foundation sponsored Children Come First Conference is for those caring for, working with, or concerned with the well being of children and young adults with social, emotional, and behavioral challenges. Each year, this conference brings together professionals, educators, and families, with national experts in the field of children's mental health.
      </div>

      <div style="clear: both;"></div>
    </div> -->
  </div>
</div>

<div class="news-footer">
  <div class="footer-arrow"><div class="footer-arrow-mask"></div></div>

  <div class="site-width">
    <h1>BEYOND THE BLUES CONCERT EVENT</h1>
    <?php echo strtoupper(date("l F j, Y", $GLOBALS['btbdate'])); ?><br>
    <a href="beyond-the-blues.php">FOR EVENT INFO</a>
  </div>
</div>
<?php $ArrowNo = "true"; include "footer.php"; ?>