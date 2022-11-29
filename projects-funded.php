<?php
$PageTitle = "Projects Funded";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="projects-banner">
  <div class="site-width">
    The Charles E Kubly Foundation provides grants to nonprofit organizations for projects that are consistent with our mission to raise awareness of depression, reduce the stigma associated with it and help people access resources in their communities. Additionally we have funded projects that address suicide prevention.<br>
    <br>

    <div class="left">
      <script src="inc/swipebox/jquery.swipebox.min.js"></script>
      <link rel="stylesheet" href="inc/swipebox/swipebox.css">
      <script type="text/javascript">
        $(document).ready(function() { $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0}); });
      </script>
      <a href="https://www.youtube.com/watch?v=hsIOcLMTwfI" class="watchvideo swipebox">WATCH AN IMPACTFUL PROJECT VIDEO</a>
    </div>

    <div class="right">
      PROJECTS FUNDED <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
    </div>
  </div>
</div>

<div class="funding-current-header">
  <div class="site-width">
    CEKF HAS FUNDED OVER $3.9 MILLION TO 399 PROJECTS SINCE 2003
  </div>
</div>

<link rel="stylesheet" href="inc/slick/slick.css">
<script type="text/javascript" src="inc/slick/slick.min.js"></script>
<script type="text/javascript" src="inc/slick/slick.init.funding.js"></script>

<div class="funding-current-menu">
  <div class="site-width">
    <div class="left">CURRENT PROJECTS FUNDED:</div>
    <div class="right"></div>
  </div>
</div>

<div class="funding-current">
  <div class="site-width">
    <div>
      <h3><span class="bluetext">01.</span> Art With Impact</h3>
      <div class="content">
        Funding to continue support of art-based mental health workshops on Wisconsin college campuses.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">02.</span> FORGE, Inc.</h3>
      <div class="content">
        Rescheduled support of Trans Alive! at Milwaukee PrideFest 2022. The resource area at PrideFest will have Trans-specific suicide prevention messaging and materials that includes support by the community, friends and families.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">03.</span> The Friendship Circle</h3>
      <div class="content">
        This grant will provide SafeTALK suicide prevention training and support groups to teens through outreach from The Friendship Circle in north shore Milwaukee.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">04.</span> Kids Matter, Inc.</h3>
      <div class="content">
        In home mental health support for non-parent caregivers of youth homicide survivors. Funds will help caregivers identify their own depression, break down barriers of stigma for treating it along and suggested treatment options.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">05.</span> Medical College of Wisconsin</h3>
      <div class="content">
        MedMoth student led program to host storytelling workshops for MCW students, Residents, Fellows, Staff and Faculty to combat burnout and mental distress that has exacerbated due to the pandemic.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">06.</span> Mental Health America of Wisconsin</h3>
      <div class="content">
        Funding for a strategic outreach campaign for MHA's Peer Support programming for both LGBTQ+ youth and military Veterans.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">07.</span> MERA Response Team</h3>
      <div class="content">
        Funding for assistive technology, CIT training and "in the moment" trauma informed care to support Milwaukee youth and families experiencing an ongoing mental health need and in need of crisis intervention/resolution.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">08.</span> Milwaukee Academy of Science</h3>
      <div class="content">
        A grant for MAS Middle School Therapeutic Arts Project. Art therapy supplies and curriculum to help middle students with mental wellness, promote healing from trauma, and decrease depression, anxiety and other mental health issues.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">09.</span> Milwaukee Institute of Art & Design</h3>
      <div class="content">
        A grant to purchase and set up Maxient Software to support counseling staff and students in need of mental health support. This software will provide quicker response times and quality recordkeeping to better serve students in need.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">10.</span> Milwaukee PBS</h3>
      <div class="content">
        Funding for the Milwaukee PBS broadcast of the Florentine Productions' film on youth depression, "Hiding in Plain Sight". This film features stories of over twenty diverse young Americans who have struggled with their mental health. This is a Ken Burns documentary.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">11.</span> Modern Warrior Live</h3>
      <div class="content">
        Support for a one-day LIVE & Virtual screening of the Modern Warrior film with a talk-back including audience, MWL creators, and mental health community leaders. There will also be a resource fair for Veterans, their families and community members to attend.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">12.</span> Spark Media</h3>
      <div class="content">
        Sponsorship of the film airing of "Scattering CJ" -- a moving documentary about a mother who lost her son to suicide and made huge impact by having his ashes scattered around the world. Support will bring the film to WI PBS stations, and Spark Media is specifically hoping to make further inroads with the Oneida Nation in Wisconsin.
      </div>
    </div>
  </div>
</div>

<div class="mixitup-header">
  <div class="site-width">
    Since 2003, we have provided funds to the following organizations.
  </div>
</div>

<div class="mixitup">
  <div class="site-width">
    <script src="inc/jquery.mixitup.js"></script>
    <script type="text/javascript" src="inc/mixitup.init.radio.js"></script>

    <div id="mixfilter">
      <h4>FILTER</h4>

      <input type="checkbox" id="show-filter" role="button">
      <label for="show-filter" id="filter-toggle">FILTER</label>

      <div class="allcontrols">
        <div class="controls">
          <div><input type="checkbox" name="control" value="" id="r-all" checked> <label for="r-all">SHOW ALL</label></div>
          <div><input type="checkbox" name="control" value=".youth" id="r-youth"> <label for="r-youth">YOUTH</label></div>
          <div><input type="checkbox" name="control" value=".teen" id="r-teen"> <label for="r-teen">TEEN</label></div>
          <div><input type="checkbox" name="control" value=".college" id="r-college"> <label for="r-college">COLLEGE</label></div>
          <div><input type="checkbox" name="control" value=".school" id="r-school"> <label for="r-school">SCHOOL</label></div>
          <div><input type="checkbox" name="control" value=".parents" id="r-parents"> <label for="r-parents">PARENTS</label></div>
          <div><input type="checkbox" name="control" value=".adult" id="r-adult"> <label for="r-adult">ADULT</label></div>
          <div><input type="checkbox" name="control" value=".veterans" id="r-veterans"> <label for="r-veterans">VETERANS</label></div>
          <div><input type="checkbox" name="control" value=".seniors" id="r-seniors"> <label for="r-seniors">SENIORS</label></div>
          <div><input type="checkbox" name="control" value=".minorities" id="r-minorities"> <label for="r-minorities">BIPOC</label></div>
          <div><input type="checkbox" name="control" value=".lgbtq" id="r-lgbtq"> <label for="r-lgbtq">LGBTQ+</label></div>
          <div><input type="checkbox" name="control" value=".men" id="r-men"> <label for="r-men">MEN</label></div>
          <div><input type="checkbox" name="control" value=".women" id="r-women"> <label for="r-women">WOMEN</label></div>
          <div><input type="checkbox" name="control" value=".suicide" id="r-suicide"> <label for="r-suicide">SUICIDE</label></div>
          <div><input type="checkbox" name="control" value=".mentalhealth" id="r-mentalhealth"> <label for="r-mentalhealth">MENTAL HEALTH</label></div>
          <div><input type="checkbox" name="control" value=".training" id="r-training"> <label for="r-training">TRAINING</label></div>
          <div><input type="checkbox" name="control" value=".awareness" id="r-awareness"> <label for="r-awareness">AWARENESS</label></div>
          <div><input type="checkbox" name="control" value=".professionaltraining" id="r-professionaltraining"> <label for="r-professionaltraining">PROFESSIONAL TRAINING</label></div>
          <div><input type="checkbox" name="control" value=".awarenesssupport" id="r-awarenesssupport"> <label for="r-awarenesssupport">AWARENESS SUPPORT</label></div>
          <div><input type="checkbox" name="control" value=".spiritualmindfulness" id="r-spiritualmindfulness"> <label for="r-spiritualmindfulness">SPIRITUAL / MINDFULNESS</label></div>
        </div>
      </div>
    </div>

    <div id="mixcontainer">
      <?php
      include_once "inc/dbconfig.php";

      $result = $mysqli->query("SELECT * FROM projects_funded ORDER BY
        CASE
          WHEN title REGEXP '^(A|An|The)[[:space:]]' = 1 THEN
            TRIM(SUBSTR(title , INSTR(title ,' ')))
          ELSE title
        END
        ASC, year DESC");

      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo "<div class=\"mix " . $row['categories'] . "\">\n";
        echo "<h4>" . $row['title'] . "</h4>\n";
        echo nl2br($row['description']);
        echo " (" . $row['year'] . ")<br>\n";
        if ($row['link'] != "") echo "<a href=\"http://" . $row['link'] . "\">" . $row['link'] . "</a>\n";
        echo "</div>\n\n";
      }
      ?>
    </div>
  </div>
</div>

<div class="footer-call">
  <div class="footer-arrow"><div class="footer-arrow-mask"></div></div>
  <div class="site-width">
    For immediate risk of harm and/or emergencies always <span class="bluetext">CALL 911</span>.<br>
    If you are having suicidal thoughts or worried about someone you know CALL the Suicide Prevention Lifeline: <span class="bluetext">1-800-273-8255</span><br>
    TEXT the HOPELINE: <span class="bluetext">741741</span>
  </div>
</div>

<?php include "footer.php"; ?>