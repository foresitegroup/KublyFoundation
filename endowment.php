<?php
$PageTitle = "The Joey Schmitz & Charlie Kubly Endowment Fund";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div id="endowment-banner">
  <div class="site-width">
    The Joey Schmitz &amp; Charlie Kubly Endowment Fund
  </div>
</div>

<div id="banner-caption">
  <div>Joey Schmitz</div>
  <div>Charlie Kubly</div>
</div>

<div id="endowment-gift">
  <div class="site-width">
    <h2>A Gift from the Heart</h2>
    In 2018, dedicated CEKF supporters Michael and Jeanne Schmitz, made a significant commitment of $500,000 to establish The Joey Schmitz & Charlie Kubly Endowment Fund. Like their dear friends, Billie and the late Dr. Michael Kubly, the Schmitzes also lost a beloved son, Joey, to depression and suicide.  The endowment fund memorializes both young men by establishing a consistent source of future investment income to support the mission and grant-making of The Charles E. Kubly Foundation.<br>
    <br>

    Jeanne Schmitz passed away in early 2019.  As we remember her, we appreciate not only the foresight that Mike and Jeanne demonstrated in making this gift but their deep compassion for those struggling with depression.<br>
    <br>

    <h2>Our Mission</h2>
    We seek to better the lives of those affected by depression by increasing awareness of the disease and its devastating effects, eliminating the stigma associated with it, supporting suicide prevention programs and promoting improved access to quality mental health resources within communities.
  </div>
</div>

<div id="endowment-goal">
  <div class="site-width">
    <?php
    $TotalRaised = 960800;
    $TotalPercent = number_format(($TotalRaised/1000000) * 100);
    ?>

    <h3>We have raised a total of</h3>
    <h4 id="total-raised"><noscript>$<?php echo number_format($TotalRaised); ?></noscript></h4>

    <div id="total-raised-bar"><div class="outer-therm" style="width: <?php echo $TotalPercent; ?>%;"><div class="inner-therm"><span><?php echo $TotalPercent; ?>%</span></div></div></div>

    <h3>toward our $1,000,000 endowment goal</h3>

    <script type="text/javascript" src="inc/countUp.min.js"></script>
    <script type="text/javascript" src="inc/jqmeter.min.js"></script>
    <script type="text/javascript">
      var totalRaised = new CountUp("total-raised", 0, <?php echo $TotalRaised; ?>, 0, 2, { prefix: '$' });

      $(document).ready(function() {
        $('#total-raised-bar').hide();

        $("#endowment-goal").waypoint(function() {
          totalRaised.start();

          $('#total-raised-bar').show();
          $('#total-raised-bar').jQMeter({
            goal: '1000000',
            raised: '<?php echo $TotalRaised; ?>',
            height: '12px',
            bgColor: '#F1F2F2',
            barColor: '#0E8DC8'
          });

          this.disable();
        },{offset: '50%'});
      });
    </script>

    <br><br>

    <h2>Our Endowment Goal</h2>
    The $500,000 Schmitz endowment gift was announced publicly at the September 21, 2018 Beyond the Blues event, the CEKF's largest annual fundraiser, to a crowd of more than 400 guests.  The CEKF Board has set a goal to reach a total of $1 million for the new endowment fund in 2019.  Watch our progress here then come to the next Beyond the Blues, September 20, 2019, to celebrate with us!
  </div>
</div>

<div id="endowment-power">
  <div class="site-width">
    <h2>The Power of Your Gift</h2>
    Why invest now in an endowment gift to the CEKF?  Unfortunately, depression, mental health and suicide prevention receive very little philanthropic support despite the fact suicide rates continue to rise. Nationally, suicide is the 10th leading cause of death and it is the second most common cause of death among individuals ages 15-34.  Meanwhile, the National Institute of Mental Health reports that more than 16 million adults&mdash;or 6.7% of the population&mdash;experienced a major depressive episode in 2016, making it one of the most common mental health disorders.<br>
    <br>

    You can help raise awareness of depression, eliminate stigma and prevent suicide.  Give today to the Endowment Fund and watch the multiplier effect of your gift create impact far into the future.  Your gift, leveraged with those of other donors, will generate earnings to support both our mission today and the future sustainability of our efforts.
  </div>
</div>

<div id="endowment-giving">
  <div class="site-width">
    <h2>Your Giving Options</h2>
    Give now through a donation of cash, publicly-traded securities or other qualified charitable distributions.<br>
    <br>

    Make a pledge for up to three years.<br>
    <br>

    Name the Charles E. Kubly Foundation (CEKF) as a recipient of an estate gift such as:
    <ul>
      <li>Bequest through a will or trust</li>
      <li>Beneficiary designations on retirement, brokerage or bank accounts</li>
      <li>Beneficiary or ownership designation on life insurance</li>
    </ul>
    <br>

    For more information or to make a gift to The Joey Schmitz & Charlie Kubly Endowment Fund, contact Ann Homstad, CEKF Executive Director, at (414) 477-8901 or email Ann at <?php email("ahomstad@cekf.org"); ?>.<br>
    <br>

    <a href="donate.php" class="button">CONTRIBUTE NOW</a>
  </div>
</div>

<div id="endowment-tribute">
  <div class="site-width">
    <h2>In Their Own Words</h2>
    <strong>Lead donors Michael and Jeanne Schmitz wrote this heartfelt message to the CEKF Board to announce their generous gift beginning an endowment fund in memory of their son Joey.</strong><br>
    <br>

    <img src="images/schmitzs.jpg" alt="">
    <em>"In the years since your founding, we have become very impressed with the work that your Foundation has done funding programs to deal with depression and its devastating impact on individuals, families and society. From a modest beginning to becoming an organization that has distributed grants of more than $2 million is truly remarkable. We applaud your organization and its supporters, including your nearly 700 individual and business donors. We are convinced that you are doing very important work to help people deal with this crushing illness.<br>
    <br>

    In our opinion, the Charles E. Kubly Foundation has achieved the success and has reached the stage of growth where the community should support an expansion of your program and provide for its long-term existence. The best means to accomplish this is to establish an endowment fund. The time to create this permanent financial base has come. You have demonstrated the performance to warrant our trust, and we hope, the community's trust as well."</em><br>
    Michael &amp; Jeanne Schmitz
  </div>
</div>

<?php $ArrowNo = "true"; include "footer.php"; ?>