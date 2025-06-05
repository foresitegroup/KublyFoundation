<?php
$PageTitle = "Projects Funded";
$Keywords = "";
$Description = "";

include "header.php";
include_once "inc/dbconfig.php";
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
    CEKF HAS FUNDED OVER $4 MILLION TO 463 PROJECTS SINCE 2003
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
    <?php
    $currents_stmt = $mysqli->prepare("SELECT * FROM projects_funded WHERE current != '' ORDER BY CASE WHEN title REGEXP '^(A|An|The)[[:space:]]' = 1 THEN TRIM(SUBSTR(title , INSTR(title ,' '))) ELSE title END ASC");
    $currents_stmt->execute();
    $currents = $currents_stmt->get_result();

    if ($currents->num_rows > 0) {
      $count = 1;

      foreach ($currents as $current) {
        echo "<div>\n";
          echo '<h3><span class="bluetext">'.str_pad($count, 2, '0', STR_PAD_LEFT).".</span> ".$current['title']."</h3>\n";
          echo '<div class="content">'."\n";
            echo nl2br($current['description']);
            if ($current['link'] != "") {
              $http = (substr($current['link'], 0, 4) === "http") ? "" : "http://";
              echo "<br>\n".'<a href="'.$http.$current['link'].'">'.$current['link']."</a>\n";
            }
          echo "</div>\n";
        echo "</div>\n";

        $count++;
      }
    }

    $currents->close();
    $currents_stmt->close();
    ?>
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

          <?php
          $pf_cats_stmt = $mysqli->prepare("SELECT * FROM projects_funded_categories ORDER BY category ASC");
          $pf_cats_stmt->execute();
          $pf_cats = $pf_cats_stmt->get_result();

          if ($pf_cats->num_rows > 0) {
            foreach ($pf_cats as $pf_cat) {
              echo '<div><input type="checkbox" name="control" value=".'.strtolower(preg_replace("/[^A-Za-z0-9]/", '', $pf_cat['category'])).'" id="r-'.strtolower(preg_replace("/[^A-Za-z0-9]/", '', $pf_cat['category'])).'"> <label for="r-'.strtolower(preg_replace("/[^A-Za-z0-9]/", '', $pf_cat['category'])).'">'.strtoupper($pf_cat['category'])."</label></div>\n";
            }
          }

          $pf_cats->close();
          $pf_cats_stmt->close();
          ?>
        </div>
      </div>
    </div>

    <div id="mixcontainer">
      <?php
      $projects_stmt = $mysqli->prepare("SELECT * FROM projects_funded ORDER BY CASE WHEN title REGEXP '^(A|An|The)[[:space:]]' = 1 THEN TRIM(SUBSTR(title , INSTR(title ,' '))) ELSE title END ASC, year DESC");
      $projects_stmt->execute();
      $projects = $projects_stmt->get_result();

      if ($projects->num_rows > 0) {
        foreach ($projects as $project) {
          echo '<div class="mix '.$project['categories'].'">'."\n";
          echo "<h4>".$project['title']."</h4>\n";
          echo nl2br($project['description']);
          if ($project['year'] != "") echo " (".$project['year'].")<br>\n";
          if ($project['link'] != "") {
            $http = (substr($project['link'], 0, 4) === "http") ? "" : "http://";
            echo '<a href="'.$http.$project['link'].'">'.$project['link']."</a>\n";
          }
          echo "</div>\n\n";
        }
      }

      $projects->close();
      $projects_stmt->close();
      ?>
    </div>
  </div>
</div>

<?php $shin = "call"; include "footer.php"; ?>