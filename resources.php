<?php
$PageTitle = "Resources";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="resources-banner">
  <div class="site-width">
    An important aspect of the Charles E. Kubly Foundation's mission is to help people access resources in their community.<br>
    <br>

    <div class="down">RESOURCES <i class="fa fa-long-arrow-down" aria-hidden="true"></i></div>
  </div>
</div>

<div class="site-width resources">
  <div class="left">
    <h2>ARE YOU LOOKING FOR RESOURCES?</h2>

    The following national organizations can help you access services and/or important mental health information. See below for other national organizations and state and local resources in Wisconsin.<br>
    <br>

    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
  </div>

  <div class="right">
    Although many resources exist, individuals suffering from depression and their families are often confused about to how and where to find help. These resources include information about depression, mood disorders, hospital and clinic services where professionals provide evaluation and treatment, support groups and hotlines.
  </div>

  <div style="clear: both;"></div><br>
  <br>
  <br>

  <a href="http://www.nami.org" class="logo-link"><img src="images/resources-nami.png" alt="NAMI"></a>
  <a href="http://mhah.org" class="logo-link"><img src="images/resources-mha.png" alt="MHA"></a>
  <a href="http://www.save.org" class="logo-link"><img src="images/resources-save.png" alt="SAVE"></a>
  <a href="http://www.suicidepreventionlifeline.org" class="logo-link spl"><img src="images/resources-spl.png" alt="Suicide Prevention Lifeline"></a>
</div>

<div class="mixitup-header">
  <div class="site-width">
    The following is a list of national organizations that provide services and/or information related to depression and suicide prevention.
    <div>* This is not a comprehensive list, but rather a list of organizations which the Charles E. Kubly Foundation is familiar.</div>
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
          <div><input type="checkbox" name="area" value="" id="ra-all" checked> <label for="ra-all">SHOW ALL</label></div>
          <div><input type="checkbox" name="area" value=".local" id="ra-local"> <label for="ra-local">LOCAL</label></div>
          <div><input type="checkbox" name="area" value=".statewide" id="ra-statewide"> <label for="ra-statewide">STATEWIDE</label></div>
          <div><input type="checkbox" name="area" value=".national" id="ra-national"> <label for="ra-national">NATIONAL</label></div>
        </div>

        <hr style="border-top-color: #CCCCCC;">

        <div class="controls">
          <div><input type="checkbox" name="control" value="" id="r-all" checked> <label for="r-all">SHOW ALL</label></div>
          <div><input type="checkbox" name="control" value=".crisis" id="r-crisis"> <label for="r-crisis">CRISIS</label></div>
          <div><input type="checkbox" name="control" value=".residential" id="r-residential"> <label for="r-residential">RESIDENTIAL</label></div>
          <div><input type="checkbox" name="control" value=".men" id="r-men"> <label for="r-men">MEN</label></div>
          <div><input type="checkbox" name="control" value=".women" id="r-women"> <label for="r-women">WOMEN</label></div>
          <div><input type="checkbox" name="control" value=".youth" id="r-youth"> <label for="r-youth">YOUTH</label></div>
          <div><input type="checkbox" name="control" value=".teen" id="r-teen"> <label for="r-teen">TEEN</label></div>
          <div><input type="checkbox" name="control" value=".school" id="r-school"> <label for="r-school">SCHOOL</label></div>
          <div><input type="checkbox" name="control" value=".college" id="r-college"> <label for="r-college">COLLEGE</label></div>
          <div><input type="checkbox" name="control" value=".seniors" id="r-seniors"> <label for="r-seniors">SENIORS</label></div>
          <div><input type="checkbox" name="control" value=".veteran" id="r-veteran"> <label for="r-veteran">VETERAN</label></div>
          <div><input type="checkbox" name="control" value=".family" id="r-family"> <label for="r-family">PARENT</label></div>
          <div><input type="checkbox" name="control" value=".minority" id="r-minority"> <label for="r-minority">MINORITY</label></div>
          <div><input type="checkbox" name="control" value=".educational" id="r-educational"> <label for="r-educational">EDUCATIONAL</label></div>
        </div>
      </div>
    </div>

    <div id="mixcontainer">
      <?php
      include_once "inc/dbconfig.php";

      $result = $mysqli->query("SELECT * FROM resources ORDER BY
        CASE 
          WHEN title REGEXP '^(A|An|The)[[:space:]]' = 1 THEN 
            TRIM(SUBSTR(title , INSTR(title ,' '))) 
          ELSE title
        END
        ASC");

      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo "<div class=\"mix " . $row['categories'] . "\">\n";
        echo "<h4>" . $row['title'] . "</h4>\n";
        echo nl2br($row['description']) . "<br>\n";
        echo "<a href=\"http://" . $row['link'] . "\">" . $row['link'] . "</a>\n";
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
    If you are having suicidal thoughts or worried about someone you know CALL the Suicide Prevention Lifeline: <span class="bluetext">1-800-273-8255</span>
  </div>
</div>

<?php include "footer.php"; ?>