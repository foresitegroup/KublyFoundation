<?php
$PageTitle = "Signs and Facts";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="facts-banner">
  <div class="site-width">
    UNDERSTANDING DEPRESSION &amp; SUICIDE<br>

    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
  </div>
</div>

<div class="depression">
  <div class="site-width">
    <div class="facts-left">
      <div class="depression-box">
        <h1>DEPRESSION</h1>
        A SERIOUS, TREATABLE, VERY COMMON MEDICAL ILLNESS.<br>
        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
      </div>

      <ul>
        <li>Typified by sadness, sleeping too little or too much, eating too little or too much, and loss of interest in usually pleasurable activities.</li>
        <li>Disease responsible for the most years lived with disability, according to the World Health Organization.</li>
        <li>Divided into unipolar depression (only depressive episodes) and bipolar disorder (depressive episodes alternating with manic periods of elevated mood).</li>
        <li>Unipolar depression usually treated best with antidepressant medication plus psychotherapy.</li>
        <li>Bipolar disorder treatment usually includes mood stabilizer.</li>
      </ul>
    </div>

    <div class="facts-right">
      <div class="facts-images">
        <img src="images/facts1.jpg" alt="" class="facts1">
        <img src="images/facts2.jpg" alt="" class="facts2">
        <img src="images/facts3.jpg" alt="" class="facts3">
      </div>

      <h3>COMMONLY USED EFFECTIVE ANTIDEPRESSANTS:</h3>
      Selective Serotonin Reuptake Inhibiters (SSRIs), Such as Fluoxetine (Prozac), Sertraline (Zoloft), Paroxetine (Paxil), Citalopram (Celexa), among others.<br>
      <br>

      <h3>OTHER COMPOUNDS MAY INCLUDE</h3>
      Bupropion (Wellbutrin), Venlafaxine (Effexor), Duloxetine (Cymbalta), and Amitriptyline (Elavil).<br>
      <br>

      <h3>COMMONLY USED MOOD STABILIZERS USED FOR PATIENTS WITH BIPOLAR DISORDER:</h3>
      Lithium Carbonate, Divalproex Sodium (Depakote), Lamotrigine (Lamictal).<br>
      <br>

      <h3>ELECTROCONVULSIVE THERAPY (ECT), REPETITIVE TRANSCRANIAL MAGNETIC STIMULATION (rTMS):</h3>
      Non-Medication Treatment Alternatives for unresponsive depression may include ECT, TMS and VNS.<br>
      <br>

      <em class="smalltext">These are common mediations and procedures in the treatment of depression. Please consult your doctor to determine the medication or treatment appropriate for you.</em>
    </div>
  </div>
</div>

<div class="the-facts">
  <div class="site-width">
    <div class="call-circle">
      <div>
        CALL THE NATIONAL SUICIDE PREVENTION HOTLINE:
        <h3>1-800-273-TALK</h3>
        TEXT THE HOPELINE:
        <h3>741741</h3>
      </div>
    </div>

    <div class="suicide-box">
      <span class="bluetext">SUICIDE</span> IS AN ALL TOO COMMON RESULT OF DEPRESSION.
    </div><br>
    <br>

    <div class="the-facts-left">
      THIRD LEADING CAUSE OF DEATH OF U.S. ADOLESCENTS AGES 15-19.<br>
      <br>

      <img src="images/facts4.jpg" alt="">
    </div>

    <div class="the-facts-right">
      ELEVENTH LEADING CAUSE OF DEATH IN THE U.S. OVERALL.<br>
      <br>

      90% OF SUICIDE ATTEMPTS MADE BY CLINICALLY DEPRESSED INDIVIDUALS.<br>
      <br>

      MORE COMMON THAT HOMICIDE IN THE US.<br>
      <br>

      MORE FREQUENTLY ATTEMPTED BY WOMEN OVER MEN IN U.S.<br>
      <br>

      MORE FREQUENTLY COMPLETED BY MEN THAN WOMEN IN THE U.S.<br>
      <br>

      HIGHEST RATE OF SUCCESSFUL SUICIDE IN OLDER WHITE MEN LIVING IN THE U.S.<br>
      <br>

      <a href="donate.php" class="button">MAKE A DIFFERENCE</a>
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

<link rel="stylesheet" href="inc/animation.css">
<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  var sr = new ScrollReveal();
  var customAni = { distance: 0, duration: 0, opacity: 1, scale: 1, viewFactor: 0, reset: true }

  sr.reveal('.facts-images IMG', { distance: 0, duration: 1000, scale: 1 }, 750);

  sr.reveal('.call-circle', {
    beforeReveal: function (el) { el.classList.add('RollInRight'); },
    beforeReset: function (el) { el.classList.remove('RollInRight'); },
    customAni
  });

  sr.reveal('.the-facts-right .button', {
    beforeReveal: function (el) { el.classList.add('pulse'); },
    beforeReset: function (el) { el.classList.remove('pulse'); },
    customAni
  });
</script>

<?php include "footer.php"; ?>