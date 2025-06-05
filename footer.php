    <?php if (isset($shin)) { ?>
      <?php if ($shin == "legacy") { ?>
        <div class="footer-call legacy">
          <div class="footer-arrow"><div class="footer-arrow-mask purple"></div></div>
          <div class="site-width">
            <a href="legacy-giving.php">
              <div>Giving Defined</div>
              Learn about Legacy Giving
            </a>
          </div>
        </div>
      <?php } ?>
      
      <?php if ($shin == "call") { ?>
        <div class="footer-call">
          <div class="footer-arrow"><div class="footer-arrow-mask"></div></div>
          <div class="site-width">
            For immediate risk of harm and/or emergencies always <span class="bluetext">CALL 911</span>.<br>
            If you or someone you know is struggling or in crisis, help is available. CALL or TEXT <span class="bluetext">988</span> or chat <a href="https://988lifeline.org" class="bluetext">988lifeline.org</a>.
          </div>
        </div>
      <?php } ?>
    <?php } ?>

    <div class="footer-join<?php if (isset($ArrowNo)) echo " noarrow"; ?>">
      <div class="site-width">
        <h2>JOIN OUR EFFORTS</h2>
        <a href="https://twitter.com/hashtag/mentalhealthmatters">#MentalHealthMatters</a>
      </div>
    </div>

    <div class="kf-footer">
      <div class="site-width">
        <div class="social">
          <a href="https://www.facebook.com/Charles-E-Kubly-FoundationBeyond-the-Blues-284170516290/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <!-- <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
          <a href="https://www.youtube.com/channel/UCaCjuonRqJgEgAau-bJpybg"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/charlesekublyfoundation/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/company/the-charles-e-kubly-foundation/"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
        </div>

        <div class="footer-menu">
          <a href="<?php echo $TopDir; ?>connect.php">CONTACT</a>
          <a href="<?php echo $TopDir; ?>young-leaders-council.php">YLC</a>
          <a href="<?php echo $TopDir; ?>donate.php">DONATE</a>
          <a href="<?php echo $TopDir; ?>endowment.php">ENDOWMENT</a>
          <a href="l<?php echo $TopDir; ?>egal.php">LEGAL</a>
          <a href="<?php echo $TopDir; ?>privacy.php">PRIVACY</a>
        </div>

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> The Charles E. Kubly Foundation. All Rights Reserved.<br>
          <a href="https://foresitegrp.com" style="color: #636363; text-decoration: none;">WEBSITE BY FORESITE</a>
        </div>
      </div>
    </div>

  </div> <!-- /#my-page For mobile menu -->
  <nav id="my-menu"><?php include "menu.php" ?></nav>

  </body>
</html>