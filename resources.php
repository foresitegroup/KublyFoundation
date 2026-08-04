<?php
$PageTitle = "Resources";
$Description = "An important aspect of the Charles E. Kubly Foundation's mission is to help people access resources in their community.";

include "header.php";
?>

<section id="resources-hero">
  <h1 class="site-width">An important aspect of the Charles E. Kubly Foundation's mission is to help people access resources in their community.</h1>

  <div class="down">Resources</div>
</section>

<section id="resources-content" class="site-width">
  <div class="left">
    <h2>Are You Looking For Resources?</h2>

    The following national organizations can help you access services and/or important mental health information. See below for other national organizations and state and local resources in Wisconsin.<br>
    <br>

    <div class="down"></div>
  </div>

  <div class="right">
    Although many resources exist, individuals suffering from depression and their families are often confused about to how and where to find help. These resources include information about depression, mood disorders, hospital and clinic services where professionals provide evaluation and treatment, support groups and hotlines.
  </div>

  <p>
    <a href="https://www.mhanational.org"><img src="images/logo-mha.webp" width="600" height="233" loading="lazy" alt="Mental Heath America"></a>
    <a href="http://www.nami.org"><img src="images/logo-nami.webp" width="600" height="230" loading="lazy" alt="National Alliance on Mental Illness"></a>
  </p>

  <p>
    <a href="https://www.samhsa.gov"><img src="images/logo-samhsa.webp" width="600" height="203" loading="lazy" alt="Substance Abuse and Mental Health Services Administration"></a>
    <a href="https://www.nimh.nih.gov"><img src="images/logo-nih.webp" width="600" height="376" loading="lazy" alt="National Institute of Mental Health" class="tall"></a>
  </p>
</section>

<h2 id="resources-header">
  The following is a list of national organizations that provide services and/or information related to depression and suicide prevention.
  <div>* This is not a comprehensive list, but rather a list of organizations which the Charles E. Kubly Foundation is familiar.</div>
</h2>

<section id="filter-list" class="site-width">
  <input type="checkbox" id="toggle-filter">
  <label for="toggle-filter">Filter</label>

  <div class="filter">
    <h3>Filter</h3>

    <label>Show All <input type="checkbox" name="location" value="" checked></label>
    <label>Local <input type="checkbox" name="location" value="local"></label>
    <label>Statewide <input type="checkbox" name="location" value="statewide"></label>
    <label>National <input type="checkbox" name="location" value="national"></label>

    <hr>

    <label>Show All <input type="checkbox" name="filter" value="" checked></label>
    <label>Crisis <input type="checkbox" name="filter" value="crisis"></label>
    <label>Residential <input type="checkbox" name="filter" value="residential"></label>
    <label>Men <input type="checkbox" name="filter" value="men"></label>
    <label>Women <input type="checkbox" name="filter" value="women"></label>
    <label>Youth <input type="checkbox" name="filter" value="youth"></label>
    <label>Teen <input type="checkbox" name="filter" value="teen"></label>
    <label>School <input type="checkbox" name="filter" value="school"></label>
    <label>College <input type="checkbox" name="filter" value="college"></label>
    <label>Seniors <input type="checkbox" name="filter" value="seniors"></label>
    <label>Veteran <input type="checkbox" name="filter" value="veteran"></label>
    <label>Family <input type="checkbox" name="filter" value="family"></label>
    <label>Minority <input type="checkbox" name="filter" value="minority"></label>
    <label>Educational <input type="checkbox" name="filter" value="educational"></label>
  </div>

  <div id="list">
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
      echo '<div class="list-item-r active loc-active '.$row['categories'].'">'."\n";
      echo "<h4>" . $row['title'] . "</h4>\n";
      echo nl2br($row['description']) . "<br>\n";
      if ($row['link'] != "") {
        $http = (substr($row['link'], 0, 4) === "http") ? "" : "http://";
        echo '<a href="'.$http.$row['link'].'">'.$row['link']."</a>\n";
      }
      echo "</div>\n";
    }
    ?>
  </div>
</section>

<script>
  // Filter items
  const locall = document.querySelector('input[type="checkbox"][name="location"][value=""]');
  const loc = document.querySelectorAll('input[type="checkbox"][name="location"]');
  const showall = document.querySelector('input[type="checkbox"][name="filter"][value=""]');
  const check = document.querySelectorAll('input[type="checkbox"][name="filter"]');
  const list = document.getElementById('list');
  const items = document.querySelectorAll('.list-item-r');

  loc.forEach(location => {
    location.addEventListener('change', function(event) {
      if (this.value != "") {
        locall.checked = false;

        if (this.checked == true) {
          list.classList.add(this.value);
        } else {
          list.classList.remove(this.value);
        }

        items.forEach(item => {
          if (item.classList.contains(this.value)) {
            item.classList.add('loc-active');
          } else {
            item.classList.remove('loc-active');
          }
        });

        const isOneLocChecked = Array.from(loc).some(box => box.checked);
        if (!isOneLocChecked) {
          items.forEach(el => el.classList.add('loc-active'));
          locall.checked = true;
        }
      } else {
        loc.forEach(el => el.checked = false);
        this.checked = true;
        list.classList.remove('local', 'statewide', 'national');
        items.forEach(el => el.classList.add('loc-active'));
      }
    });
  });

  check.forEach(checkbox => {
    checkbox.addEventListener('change', function(event) {
      if (this.value != "") {
        showall.checked = false;

        if (this.checked == true) {
          list.classList.add(this.value);
        } else {
          list.classList.remove(this.value);
        }

        const catOnly = [...list.classList].filter(cls => cls !== 'local' && cls !== 'statewide' && cls !== 'national');

        items.forEach(item => {
          const itemArray = [...item.classList];

          if (catOnly.some(cls => itemArray.includes(cls))) {
            item.classList.add('active');
          } else {
            item.classList.remove('active');
          }
        });

        const isOneChecked = Array.from(check).some(box => box.checked);
        if (!isOneChecked) {
          items.forEach(el => el.classList.add('active'));
          showall.checked = true;
        }
      } else {
        check.forEach(el => el.checked = false);
        this.checked = true;
        [...list.classList].forEach(cls => {
          if (cls !== 'local' && cls !== 'statewide' && cls !== 'national') list.classList.remove(cls);
        });
        items.forEach(el => el.classList.add('active'));
      }
    });
  });
</script>

<?php $shin = "call"; include "footer.php"; ?>