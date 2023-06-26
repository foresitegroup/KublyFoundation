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
    CEKF HAS FUNDED OVER $3.6 MILLION TO 412 PROJECTS SINCE 2003
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
      <h3><span class="bluetext">01.</span> Christian Family Solutions</h3>
      <div class="content">
        Parent education and peer mentoring program for families enrolled in their day treatment program using Trust Based Relational Intervention. TBRI equips parents with skills needed to help their children heal from past relational traumas and improve their long term outcomes.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">02.</span> Eastbrook Academy</h3>
      <div class="content">
        Supplies, materials, facility improvements, sensory room needs and further support for newly implemented school mental health program.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">03.</span> The Friendship Circle</h3>
      <div class="content">
        Funding for "One Thing I Wish I Knew"; a speaker event with shared personal stories of strength and hope, showcasing their resilience in face of mental health struggles.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">04.</span> Gathering on the Green, Inc.</h3>
      <div class="content">
        Supporting Stages program support to engage audiences and bring awareness to community mental health resources.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">05.</span> Institutional Ministries</h3>
      <div class="content">
        First Responder support programming including support groups and the design and release of a moral injury brochure. Additional funding provided for QPR (Question, Persuade, Refer) training.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">06.</span> Lutheran Social Services of WI & Upper Michigan</h3>
      <div class="content">
        School Centered Mental Health services to remove systemic barriers to treatment for Milwaukee area children of color impacted by healthcare disparities and inequities.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">07.</span> MKE Urban Stables</h3>
      <div class="content">
        Equine assisted therapy and learning program to build self-esteem, improve social skills, build confidence and better relationships for at-risk youth in Milwaukee.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">08.</span> Milwaukee Academy of Science</h3>
      <div class="content">
        Continuum of art therapy project for middle school students in order to promote healing from trauma, decrease depression and anxiety and improve mental wellness.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">09.</span> Milwaukee Youth Theatre, Inc.</h3>
      <div class="content">
        Summer Theatre Arts Program for Milwaukee Academy in an effort to raise self esteem and improve social skills for participants.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">10.</span> PIUS XI Catholic High School</h3>
      <div class="content">
        Comprehensive School-Based Mental Health Support and Family Engagement partnered with Children's Wisconsin to meet increased "in the moment" student needs.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">11.</span> REDgen</h3>
      <div class="content">
        Funding to support and strengthen REDgen Education Program through an enhanced speaker series, Spanish language education for collaborative suicide prevention programming of 16th Street Community Clinics and Notre Dame School of Milwaukee, educational videos, QPR training for leadership and a social media campaign.
      </div>
    </div>

    <div>
      <h3><span class="bluetext">12.</span> Shield of Sisters</h3>
      <div class="content">
        A grant to support Restoration Retreats for female active duty/reserve/guard and veterans that have suffered the impacts of military sexual trauma. Retreats provide tools to prevent suicide, peer support and referrals for aftercare.
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
    If you or someone you know is struggling or in crisis, help is available. CALL or TEXT <span class="bluetext">988</span> or chat <a href="https://988lifeline.org" class="bluetext">988lifeline.org</a>.
  </div>
</div>

<?php include "footer.php"; ?>