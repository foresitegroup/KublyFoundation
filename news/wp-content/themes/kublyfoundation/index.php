<?php
get_header();
$TopDir = substr(home_url(), 0, strrpos(home_url(), '/')+1);

if (!is_single()) :
  $featured = new WP_Query(array('posts_per_page' => 1, 'meta_key' => 'featured-checkbox', 'meta_value' => 'yes'));

  if ($featured->have_posts()) :
    $featured->the_post();
  else :
    the_post();
  endif;

  $FID = $post->ID;

  echo '<section id="featured">'."\n";
    echo '<div class="site-width">'."\n";
      echo '<div class="text">'."\n";
        echo '<div class="cat">Featured:</div>'."\n";
        echo '<div class="date">'.get_the_date()."</div>\n";
        the_title('<h2>','</h2>');
        echo get_the_excerpt();
        echo '<a href="'.get_the_permalink().'">Read More</a>'."\n";
      echo "</div>\n";
    echo "</div>\n";

    echo '<div class="image"';
    if (has_post_thumbnail()) echo ' style="background-image: url('.get_the_post_thumbnail_url(get_the_ID(),'full').');"';
    echo "></div>\n";

    echo '<a href="'.get_the_permalink().'" class="read">Read</a>'."\n";
  echo "</section>\n";

  wp_reset_postdata();
  ?>

  <section id="news-filter">
    <div class="site-width">
      Filter:
      <a href="<?php echo site_url(); ?>/">All</a>
      <a href="<?php echo site_url(); ?>/category/news/">News</a>
      <a href="<?php echo site_url(); ?>/category/articles/">Articles</a>
      <a href="<?php echo site_url(); ?>/category/events/">Events</a>
      <a href="<?php echo site_url(); ?>/category/billies-corner/">Billie's Corner</a>
    </div>
  </section>

  <script type="text/javascript">
    document.getElementById('news-filter').querySelectorAll('a').forEach(link => {
      if (link.href == window.location.href) link.classList.add("current");
    });
  </script>

<?php
endif;

echo '<section id="news-content" class="site-width';
if (!is_single()) echo " index";
echo '">'."\n";
	while (have_posts()) : the_post();
    if (is_single()) :
      the_content();
    else :
      if (get_the_ID() != $FID) {
        echo "<div>\n";
          echo '<div class="date">'.get_the_date()."</div>\n";
          the_title('<h2>','</h2>');
          echo get_the_excerpt();
          echo ' <a href="'.get_permalink().'">Read More</a>'."\n";
          echo '<div class="cat">'.get_the_category_list(", ")."</div>\n";
        echo "</div>\n";
      }
    endif;
	endwhile;
echo "</section>\n";

wp_custom_pagination();

get_footer();
?>