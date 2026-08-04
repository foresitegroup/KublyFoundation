<?php
$PageTitle = "Projects Funded";
$Description = "We provide grants to nonprofit organizations for projects that raise awareness of depression, reduce the associated stigma and help people access resources.";

include "header.php";
include_once "inc/dbconfig.php";
?>

<section id="projects-hero">
  <div class="site-width">
    The Charles E Kubly Foundation provides grants to nonprofit organizations for projects that are consistent with our mission to raise awareness of depression, reduce the stigma associated with it and help people access resources in their communities. Additionally we have funded projects that address suicide prevention.<br>
    <br>

    <div class="col2">
      <a href="https://www.youtube.com/watch?v=hsIOcLMTwfI" data-fancybox class="watchvideo">Watch An Impactful Project Video</a>

      <div class="down">Projects Funded</div>
    </div>
  </div>
</section>

<h1 id="funding-current-header">CEKF has funded over $4.5 million to 505 projects since 2003</h1>

<section id="funding-current">
  <?php
  $currents_stmt = $mysqli->prepare("SELECT * FROM projects_funded WHERE current != '' ORDER BY CASE WHEN title REGEXP '^(A|An|The)[[:space:]]' = 1 THEN TRIM(SUBSTR(title , INSTR(title ,' '))) ELSE title END ASC");
  $currents_stmt->execute();
  $currents = $currents_stmt->get_result();

  if ($currents->num_rows > 0) {
    $count = 1;

    foreach ($currents as $current) {
      echo '<div class="f-carousel__slide">'."\n";
        echo '<div class="site-width">'."\n";
          echo "<h3><span>".str_pad($count, 2, '0', STR_PAD_LEFT).".</span> ".$current['title']."</h3>\n";
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
</section>

<h2 id="projects-header">Since 2003, we have provided funds to the following organizations.</h2>

<section id="filter-list" class="site-width">
  <input type="checkbox" id="toggle-filter">
  <label for="toggle-filter">Filter</label>
  
  <div class="filter">
    <h3>Filter</h3>

    <label>Show All <input type="checkbox" name="filter" value="" checked></label>

    <?php
    $pf_cats_stmt = $mysqli->prepare("SELECT * FROM projects_funded_categories ORDER BY category ASC");
    $pf_cats_stmt->execute();
    $pf_cats = $pf_cats_stmt->get_result();

    if ($pf_cats->num_rows > 0) {
      foreach ($pf_cats as $pf_cat) {
        echo "<label>".strtoupper($pf_cat['category']).' <input type="checkbox" name="filter" value="'.strtolower(preg_replace("/[^A-Za-z0-9]/", '', $pf_cat['category'])).'"></label>'."\n";
      }
    }

    $pf_cats->close();
    $pf_cats_stmt->close();
    ?>
  </div>

  <div id="list">
    <?php
    $projects_stmt = $mysqli->prepare("SELECT * FROM projects_funded ORDER BY CASE WHEN title REGEXP '^(A|An|The)[[:space:]]' = 1 THEN TRIM(SUBSTR(title , INSTR(title ,' '))) ELSE title END ASC, year DESC");
    $projects_stmt->execute();
    $projects = $projects_stmt->get_result();

    if ($projects->num_rows > 0) {
      foreach ($projects as $project) {
        echo '<div class="list-item active '.$project['categories'].'">'."\n";
        echo "<h4>".$project['title']."</h4>\n";
        echo nl2br($project['description']);
        if ($project['year'] != "") echo " (".$project['year'].")<br>\n";
        if ($project['link'] != "") {
          $http = (substr($project['link'], 0, 4) === "http") ? "" : "http://";
          echo '<a href="'.$http.$project['link'].'">'.$project['link']."</a>\n";
        }
        echo "</div>\n";
      }
    }

    $projects->close();
    $projects_stmt->close();
    ?>
  </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/carousel/carousel.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/carousel/carousel.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/carousel/carousel.arrows.css">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/carousel/carousel.arrows.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/carousel/carousel.dots.css">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/carousel/carousel.dots.umd.js"></script>

<script>
  Fancybox.bind("[data-fancybox]", {});

  Carousel(document.getElementById('funding-current'), {
    adaptiveHeight: true,
    slidesPerPage: 1,
    Arrows: { nextTpl: '', prevTpl: '' },
    Dots: { dotTpl: "<button data-carousel-go-to=\"%i\">%d</button>" },
  }, { Dots, Arrows }).init();

  // Filter items
  const showall = document.querySelector('input[type="checkbox"][name="filter"][value=""]');
  const check = document.querySelectorAll('input[type="checkbox"][name="filter"]');
  const list = document.getElementById('list');
  const items = document.querySelectorAll('.list-item');

  check.forEach(checkbox => {
    checkbox.addEventListener('change', function(event) {
      if (this.value != "") {
        showall.checked = false;

        if (this.checked == true) {
          list.classList.add(this.value);
        } else {
          list.classList.remove(this.value);
        }

        items.forEach(item => {
          item.classList.remove('active');
          if (Array.from(item.classList).some(cls => list.classList.contains(cls))) item.classList.add('active');
        });

        const isOneChecked = Array.from(check).some(box => box.checked);
        if (!isOneChecked) {
          items.forEach(el => el.classList.add('active'));
          showall.checked = true;
        }
      } else {
        check.forEach(el => el.checked = false);
        this.checked = true;
        list.removeAttribute('class');
        items.forEach(el => el.classList.add('active'));
      }
    });
  });
</script>

<?php $shin = "call legacy"; include "footer.php"; ?>