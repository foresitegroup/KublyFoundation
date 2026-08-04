<?php
$PageTitle = "Signs and Facts";
$Description = "";

include "header.php";
?>

<section id="signs-and-facts-hero">
  <h1 class="site-width">Understanding Depression &amp; Suicide</h1>
</section>

<section id="depression" class="background-text" data-background="Depression">
  <div class="site-width">
    <div class="left">
      <div class="box">
        <h2>Depression</h2>
        <p>A serious, treatable, very common medical illness.</p>
      </div>

      <ul>
        <li>Typified by sadness, sleeping too little or too much, eating too little or too much, and loss of interest in usually pleasurable activities.</li>
        <li>Disease responsible for the most years lived with disability, according to the World Health Organization.</li>
        <li>Divided into unipolar depression (only depressive episodes) and bipolar disorder (depressive episodes alternating with manic periods of elevated mood).</li>
        <li>Unipolar depression usually treated best with antidepressant medication plus psychotherapy.</li>
        <li>Bipolar disorder treatment usually includes mood stabilizer.</li>
      </ul>
    </div>

    <div class="right">
      <div id="facts-images">
        <img src="images/signs-and-facts1.webp" width="700" height="615" loading="lazy" alt="" class="facts1">
        <img src="images/signs-and-facts2.webp" width="700" height="593" loading="lazy" alt="" class="facts2">
        <img src="images/signs-and-facts3.webp" width="700" height="576" loading="lazy" alt="" class="facts3">
      </div>
    </div>
  </div>
</section>

<section id="call-circle">
  <div>
    <p>Call <span>or</span> Text</p>
    988
    <div>or chat</div>
    <a href="https://988lifeline.org">988lifeline.org</a>
  </div>
</section>

<section id="the-facts" class="background-text" data-background="The Facts">
  <div class="site-width">
    <h2><span>Suicide</span> is an all too common result of depression.</h2>

    <div class="left">
      Third leading cause of death of U.S. adolescents ages 15-19.<br>
      <br>

      <img src="images/the-facts.webp" width="700" height="486" loading="lazy" alt="">
    </div>

    <div class="right">
      Eleventh leading cause of death in the U.S. overall.<br>
      <br>

      90% of suicide attempts made by clinically depressed individuals.<br>
      <br>

      More common that homicide in the U.S.<br>
      <br>

      More frequently attempted by women over men in the U.S.<br>
      <br>

      More frequently completed by men than women in the U.S.<br>
      <br>

      Highest rate of successful suicide in older white men living in the U.S.<br>
      <br>

      <a href="donate.php" id="pulse-button" class="button">Make A Difference</a>
    </div>
  </div>
</section>

<script>
  const factsImages = document.getElementById('facts-images');
  const factsImages_ob = new IntersectionObserver(function(images) {
    if (images[0].isIntersecting) factsImages.classList.add('fade-in');
  }, { threshold: 1 });
  factsImages_ob.observe(factsImages);

  const callCircle = document.getElementById('call-circle');
  const callCircle_ob = new IntersectionObserver(function(circle) {
    if (circle[0].isIntersecting) callCircle.classList.add('roll-in');
  }, { threshold: 0.5 });
  callCircle_ob.observe(callCircle);

  const pulseButton = document.getElementById('pulse-button');
  const pulseButton_ob = new IntersectionObserver(function(images) {
    if (images[0].isIntersecting) pulseButton.classList.add('pulse');
  }, { threshold: 1 });
  pulseButton_ob.observe(pulseButton);
</script>

<?php $shin = "call legacy"; include "footer.php"; ?>