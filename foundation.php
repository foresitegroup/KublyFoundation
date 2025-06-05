<?php
$PageTitle = "Foundation";
$Keywords = "";
$Description = "";

include "header.php";
?>

<div class="foundation-banner">
  <div class="site-width">
    The Charles E. Kubly Foundation is a public charity committed to improving the lives of those affected by depression. Through the generous support of our donors, we fund quality mental health projects that aim to reduce suicide and the stigma associated with depression and provide education and resource information.
  </div>
</div>

<div class="foundation-menu">
  <ul>
    <li><a href="#foundation">THE FOUNDATION</a></li>
    <li><a href="#charlies-story">CHARLIE'S STORY</a></li>
    <li><a href="#faq">FAQ</a></li>
    <li><a href="#board-leadership">BOARD &amp; LEADERSHIP</a></li>
  </ul>
</div>

<div id="foundation">
  <div class="site-width">
    <div class="foundation-left">
      WHY WAS THE FOUNDATION STARTED?
      <br>

      <script src="inc/swipebox/jquery.swipebox.min.js"></script>
      <link rel="stylesheet" href="inc/swipebox/swipebox.css">
      <script type="text/javascript">
        $(document).ready(function() { $('.swipebox').swipebox({autoplayVideos: true, hideBarsDelay : 0}); });
      </script>
      <a href="https://www.youtube.com/watch?v=FLu97T4y6Jk" class="watchvideo swipebox">15th ANNIVERSARY VIDEO</a>
    </div>

    <div class="foundation-right">
      An estimated 16 million Americans suffer from depression.<br>
      <br>

      Only 1/3 of people with depression seek treatment.<br>
      <br>

      80% of those that do seek treatment are treated successfully.<br>
      <br>

      Suicide claims approximately 48,000 lives annually in the U.S.
    </div>
  </div>
</div>

<div id="foundation-videos">
  <div class="site-width">
    <a href="https://www.youtube.com/watch?v=65uG53nSP90" class="watchvideo swipebox">20th ANNIVERSARY DONOR VIDEO</a>

    <a href="https://www.youtube.com/watch?v=HRtck6Zmgrs" class="watchvideo swipebox">20th ANNIVERSARY YLC VIDEO</a>

    <a href="https://www.youtube.com/watch?v=EeF4u53uMT8" class="watchvideo swipebox">20th ANNIVERSARY GENERAL VIDEO</a>
  </div>
</div>

<div id="charlies-story">
  <div class="site-width">
    <div class="left">
      <img src="images/charlie-circle.png" alt="">
    </div>

    <div class="right">
      CHARLIE'S STORY
    </div>

    <div style="clear: both;"></div><br>
    <br>

    <strong>Charlie Kubly was 28 years old when he took his own life after a long and gallant battle against the disease of depression. He lived in Milwaukee, Wisconsin close to family and friends. The youngest of seven children, he was a beloved uncle to 17 nieces and nephews.</strong><br>
    <br>

    Charlie attended the University School of Milwaukee for elementary and high school where he excelled in economics and finance classes. He continued his education at the University of St. Thomas in St. Paul, Minnesota where he chose to be an entrepreneurial major. Charlie worked in the financial industry in Milwaukee where he was also developing a small mail order business to college students called "Care By Air," care packages sent to college students from parents, relatives and friends.<br>
    <br>

    Charlie was adventuresome, curious and always ready to try new things. In high school he spent two summers in Outward Bound programs ,a sailing program in Maine and the other in Colorado. The summer before his senior year, he traveled to Iceland as an AFS student. After college he worked for a season at Copper Mountain, Colorado where he also became an accomplished skier. Charlie enjoyed tennis, sailing, water skiing and was working on his pilot's license.<br>
    <br>

    Like everyone else in the family, Charlie loved music. He had a special affinity for the Blues and Johnny Lee Hooker, thus our "Beyond the Blues" music benefit is in his memory. Charlie had a host of friends and was often the life of the party. His one-liners and humor kept family and friends in stitches, even during his last few years as his depression worsened. His embarrassment caused him to hide his disease even from his closest friends. He shared only glimpses of his pain and agony with his family.<br>
    <br>

    It was after college that Charlie decided he needed professional advice. He tried numerous treatments and sought the advice of a variety of professionals for his depression, but did not find the relief he so desperately wanted. He described his depression as a terrible physical pain that would leave him incapacitated. He wrote that he would have had a happy life had it not been for this disease.<br>
    <br>

    The Charles E. Kubly Foundation was formed to help others affected by depression so that they might achieve a better outcome. Depression can be deceiving; one may have all the trappings of a good life and yet be ill. It is important for people not to be ashamed of the disease. It is a disease like any other for which one should seek help. The Charles E. Kubly Foundation aims to raise awareness of the disease of depression, reduce the stigma associated with it and help people to access resources in their communities.
  </div>
</div>

<script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="inc/jquery.cycle2.carousel.min.js"></script>

<div class="image-slider">
  <a href="#" class="prev cycle-prev"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>
  <a href="#" class="next cycle-next"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
  <img src="images/foundation-slider1.jpg" alt="">
  <img src="images/foundation-slider2.jpg" alt="">
  <img src="images/foundation-slider3.jpg" alt="">
  <img src="images/foundation-slider4.jpg" alt="">
  <img src="images/foundation-slider5.jpg" alt="">
  <img src="images/foundation-slider6.jpg" alt="">
  <img src="images/foundation-slider7.jpg" alt="">
</div>

<script type="text/javascript">
  $(document).ready(function() {
    function buildCarousel() {
      var slides = 3;

      if (window.innerWidth <= 800) { slides = 2; }
      if (window.innerWidth <= 600) { slides = 1; }

      $('.image-slider').cycle({
        timeout: 0,
        fx: 'carousel',
        carouselFluid: 'true',
        carouselVisible: slides
      });
    }

    function resizeCarousel() {
      $('.image-slider').cycle('destroy');
      buildCarousel();
    }

    buildCarousel();

    $(window).resize(function(){ setTimeout(function() { resizeCarousel(); },100); });
  });
</script>

<div id="faq">
  <div class="site-width">
    <div class="left">
      FREQUENTLY ASKED QUESTIONS
    </div>

    <div class="right">
      Keeping overhead costs down enables the maximum amount of funds to be provided for life-improving projects. This is one of the Foundation's main goals. We have tried to answer as many FAQs to allow for our volunteers and employees to dedicate themselves to as much project-related work as possible. Feel free to <a href="connect.php">contact</a> us with any questions.
    </div>

    <div style="clear: both;"></div><br>
    <br>

    <strong class="q">Q: I want to help the Charles E. Kubly Foundation in its efforts to improve the lives of those affected by depression. What can I do?</strong><br>
    <br>

    <a href="connect.php#newsletter">Register</a> with us so that you can receive our mailings and news about upcoming events electronically. Make a <a href="donate.php">donation</a> to the Foundation and help fund quality mental health projects. Talk about the illness of depression openly. Spread the word that it is a treatable disease.<br>
    <br>
    <br>

    <strong class="q">Q: How does the Foundation distribute funds and decide upon projects?</strong><br>
    <br>

    The Charles E. Kubly Foundation receives project proposals from nonprofit organizations who educate about depression and/or provide services for people with depression and other mental illness. We choose projects which closely fit with our mission to raise awareness of depression, reduce the stigma associated with it and help people access resources in their community. Additionally, some of the selected projects have focused on suicide prevention. Our goal is to raise enough funds to support depression related research as well.<br>
    <br>
    <br>

    <strong class="q">Q: How long has the Foundation been in existence?</strong><br>
    <br>

    The Charles E. Kubly Foundation was created in 2003. Friends and family of Charlie Kubly, who took his own life after a struggle with depression, came together to see what could be done to help others. It became immediately clear that the community was interested in this effort.<br>
    <br>
    <br>

    <!-- <strong class="q">Q: How can I submit a proposal and request funds for my depression-related project?</strong><br>
    <br>

    Project proposals can be mailed to:<br>
    The Charles E. Kubly Foundation<br>
    1341 W. Mequon Road<br>
    Suite 220<br>
    Mequon, WI 53092<br>
    Currently, the Board of Directors of the Charles E. Kubly Foundation reviews project proposals and provides grants bi-annually.<br>
    <br>
    <br> -->

    <strong class="q">Q: What are the common symptoms of depression?</strong><br>
    <br>

    <ul>
      <li>Sadness or irritability</li>
      <li>Tearfulness</li>
      <li>Fatigue or loss of energy</li>
      <li>Loss of interest in activities formerly enjoyed</li>
      <li>Loss of appetite or increased eating</li>
      <li>Problems sleeping or sleeping too much</li>
      <li>Thoughts of suicide</li>
      <li>Negative effect on one's work performance and social relationships</li>
      <li>Diminished ability to think or concentrate</li>
      <li>Decrease in sex drive</li>
    </ul>
    <br>
    <br>

    <strong class="q">Q: How common is depression and how treatable is it?</strong><br>
    <br>

    Depression is very common and very treatable. According to the National Institute of Mental Health, an estimated 15 million Americans suffer from depression. It is important to note that 80% of those that seek treatment are treated successfully.<br>
    <br>
    <br>

    <strong class="q">Q: Are there different kinds of depression?</strong><br>
    <br>

    The most common form of depression is <strong>Major Depression</strong>, in which individuals typically suffer severely low mood, trouble with sleeping too little or too much, and loss of interest in most areas of daily living for at least two weeks. <strong>Dysthymia</strong> is a type of depression in which individuals feel sadness more days than not over a period of at least two years. <strong>Bipolar Disorder</strong> consists of periods of depression alternating with manic highs, in which an individual can feel energetic or euphoric. <strong>Postpartum Depression</strong> is depression which strikes women in weeks or months immediately following childbirth. <strong>Seasonal Affective Disorder</strong> is a cyclical change in mood connected with the length of daylight hours, with depression typically occurring in late fall or winter.<br>
    <br>
    <br>

    <strong class="q">Q: What should I do if I think I have depression?</strong><br>
    <br>

    It is important to consult with a mental health professional. Your primary care physician can recommend someone. For more information on depression, please visit <a href="https://www.nimh.nih.gov">The National Institute of Mental Health</a>.<br>
    <br>
    <br>

    <strong class="q">Q: What should I do if I am experiencing a mental health crisis?</strong><br>
    <br>

    If you are experiencing a mental health crisis and feel that you are in danger of harming yourself or others, please call 911 immediately.<br>
    <br>

    If you or someone you know is struggling or in crisis, help is available. <strong>CALL</strong> or <strong>TEXT</strong> 988 or chat <a href="https://988lifeline.org">988lifeline.org</a>.
  </div>
</div>

<div id="board-leadership">
  <div class="site-width">
    <div class="left">
      <h3>LEADERSHIP IN THE COMMUNITY</h3>

      We are close to the community we serve. Here are some of the dedicated people of our greater community that work to bring awareness and relief to individuals and their families who suffer from depression.

      <div class="flex">
        <img src="images/ylc-logo.webp" alt="Young Leaders Council">

        <div>
          Learn more about the Young Leaders Council<br>
          <a href="young-leaders-council.php">Learn More</a>
        </div>
      </div>
    </div>

    <div class="right">
      <h4>EXECUTIVE DIRECTOR & BUSINESS MANAGER:</h4> <strong>Kris Rick</strong>, 414.477.9959, <?php email("krick@charlesekublyfoundation.org"); ?><br>
      <br>

      <h4>BOARD OF DIRECTORS:</h4>
      <strong>Lori R. Kilian</strong>, President &nbsp; // &nbsp;
      <strong>Nick Hengst</strong>, Treasurer, Manpower Group &nbsp; // &nbsp;
      <strong>Dean Knauss</strong> &nbsp; // &nbsp;
      <strong>Thayre Faust</strong> &nbsp; // &nbsp;
      <strong>Molly Kubly Fritz</strong> &nbsp; // &nbsp;
      <strong>Meg Fetherston Kasch</strong>, Community Volunteer &nbsp; // &nbsp;
      <strong>Dylan Ross</strong>, Head of Clinical, Blueprint &nbsp; // &nbsp;
      <strong>Brenda Wesley</strong>, Milwaukee Mental Health Advocate

      <br><br>

      <h4>HONORARY BOARD MEMBER:</h4> Billie Kubly<br>
      <br>

      <h4>MEDICAL ADVISORY BOARD:</h4>
      <strong>Carlyle H. Chan, MD</strong>, Medical College of Wisconsin &nbsp; // &nbsp;
      <strong>Ken Johnson, MD</strong>, Columbia St.Mary's &nbsp; // &nbsp;
      <strong>Jon A. Lehrmann, MD</strong>, Medical College of Wisconsin &nbsp; // &nbsp;
      <strong>Michael McBride, MD</strong>, Veteran's Administration Hospital &nbsp; // &nbsp;
      <strong>Laura Roberts, MD</strong>, National Medical Advisor Stanford University<br>
      <br>

      <h4>GRANT REVIEW COMMITTEE:</h4>
      <strong>Alexander Buhk, PhD</strong>, Froedert & The Medical College of WI &nbsp; // &nbsp;
      <strong>Rosa Kim, MD</strong>, Children's Hospital of Wisconsin &nbsp; // &nbsp;
      <strong>Jon A. Lehrmann, MD</strong>, Medical College of Wisconsin

      <br>
      <strong>We are extremely grateful for the time, expertise and dedication of our Grant Review Committee members.</strong><br>
      <br>

      <h4>YOUNG LEADERS COUNCIL:</h4>
      <strong>Lily Kubly</strong>, Founding Member &nbsp; // &nbsp;
      <strong>Augie Fritz</strong> &nbsp; // &nbsp;
      <strong>Colin Fritz</strong> &nbsp; // &nbsp;
      <strong>Michaela Fritz</strong> &nbsp; // &nbsp;
      <strong>Katie Frommelt Walsh</strong> &nbsp; // &nbsp;
      <strong>Adam Karnes</strong> &nbsp; // &nbsp;
      <strong>Bridget Kelley</strong> &nbsp; // &nbsp;
      <strong>Gen Klinker</strong> &nbsp; // &nbsp;
      <strong>Sean McNealy</strong> &nbsp; // &nbsp;
      <strong>Conor Quick</strong> &nbsp; // &nbsp;
      <strong>Jack Walsh</strong>

      <br><br>
    </div>
  </div>
</div>

<?php $shin = "legacy"; include "footer.php"; ?>