<?php
$TopDir = substr(home_url(), 0, strrpos(home_url(), '/')+1);
include "../header.php";

echo '<section id="news-header" class="';
echo (!is_single()) ? "index" : "single";
echo '"';
if (is_single() && has_post_thumbnail()) echo ' style="background-image: url('.get_the_post_thumbnail_url(get_the_ID(),'full').');"';
echo ">\n";
  echo '<div class="site-width">'."\n";
    echo "<h1>";
      echo (!is_single()) ? "Foundation News" : get_the_title();
    echo "</h1>\n";
    echo (!is_single()) ? "News, Articles, Billie's Corner &amp; More." : get_the_date()."\n";
  echo "</div>\n";
echo "</section>\n";
?>
