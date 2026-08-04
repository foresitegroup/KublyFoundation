<?php
include "header.php";

$files = glob('images/home-headers/*.webp');
$file = $files[rand(0, count($files) - 1)];
?>

<section id="home-hero" style="background-image: url(<?php echo $file; ?>);">
  <div id="credit">Photo by Curt Lundeen</div>

  <div class="site-width">
    <h1>A public charity devoted to improving the lives of those with depression</h1>

    <a href="donate.php" class="button">Donate</a>
    <a href="foundation.php" class="learnmore" aria-label="Learn more about the Foundation">Learn More</a>
  </div>

  <a href="https://www.eventbrite.com/e/beyond-the-blues-2026-tickets-1996119265457" id="curl">
    <div>
      <p>September 18</p>
      Beyond the Blues
      <p>Tickets On Sale Now</p>
    </div>
  </a>
</section>

<section id="home-mission">
  <div class="site-width">
    <div class="left">
      <h2>Our Mission</h2>

      The <strong>Charles E. Kubly Foundation</strong> seeks to better the lives of those affected by depression by increasing public awareness of the disease and its devastating effects, eliminating the stigma associated with it, supporting suicide prevention programs and promoting improved access to quality mental health resources within communities.<br>
      <br>

      <a href="grants.php" class="learnmore">Projects &amp; Grants</a>
    </div>

    <div class="right">
      Your donation will support efforts to:

      <ul>
        <li>Raise Depression Awareness</li>
        <li>Reduce Suicide</li>
        <li>Provide Depression Education</li>
        <li>Reduce Stigma</li>
        <li>Help Individuals Find Resources</li>
      </ul>

      <a href="donate.php" class="button">Donate</a>
    </div>
  </div>
</section>

<section id="home-projects">
  <div class="site-width">
    <h2>Projects Funded</h2>

    Through the generous support of our donors, we provide grants to fund quality mental health projects to nonprofit organizations for projects that are consistent with our mission to raise awareness of depression, reduce the stigma associated with it and help people access resources in their communities. Additionally, we fund projects that address suicide prevention.<br>
    <br>

    <a href="grants.php#grant-guidelines" class="button">Grant Requests</a>
  </div>
</section>

<section id="home-foundation">
  <div class="site-width">
    <div class="left">
      <h2>Why Was The Foundation Started?</h2>

      <div class="charlie-round"><img src="images/charlie-pilot.webp" width="700" height="700" loading="lazy" alt=""></div>
    </div>

    <div class="right">
      Many people don't recognize that depression is a disease and often see depression as a weakness or something that they should be able to fix on their own. Depression is a disease like any other, and, if left untreated, can have devastating consequences. The <strong>Charles E. Kubly Foundation</strong> was founded in 2003 after the death of Charlie Kubly. Friends and family members of Charlie saw a need in the community for services to address depression and suicide prevention.<br>
      <br>

      <a href="foundation.php#charlies-story" class="button">Charlie's Story</a>
    </div>

    <div class="charlie-round"><img src="images/charlie-pilot.webp" width="700" height="700" loading="lazy" alt=""></div>
  </div>
</section>

<script>
  // Header on scroll
  const indexob = new IntersectionObserver(function(indextarget) {
    if (indextarget[0].isIntersecting) {
      document.body.classList.remove('scrolling');
    } else {
      document.body.classList.add('scrolling');
    }
  }, { threshold: 0.13 });
  indexob.observe(document.getElementById("home-hero"));
</script>

<?php $shin = "legacy"; include "footer.php"; ?>