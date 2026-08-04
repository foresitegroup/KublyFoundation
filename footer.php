    </main>

    <footer>
      <?php if (isset($shin) && str_contains($shin, "call")) { ?>
        <section id="footer-call" class="shin">
          <div class="site-width">
            For immediate risk of harm and/or emergencies always <a href="tel:911">CALL 911</a>.<br>
            If you or someone you know is struggling or in crisis, help is available. CALL or TEXT <a href="tel:988">988</a> or chat <a href="https://988lifeline.org">988lifeline.org</a>.
          </div>
        </section>
      <?php } ?>

      <?php if (isset($shin) && str_contains($shin, "legacy")) { ?>
        <section id="footer-legacy" class="shin">
          <a href="<?php echo $TopDir; ?>legacy-giving.php">
            <h2>Giving Defined</h2>
            Learn about Legacy Giving
          </a>
        </section>
      <?php } ?>

      <section id="footer-join" class="shin">
        <h2>Join Our Efforts</h2>
        <a href="https://www.instagram.com/explore/tags/mentalhealthmatters/">#MentalHealthMatters</a>
      </section>

      <section class="social">
        <a href="https://www.facebook.com/Charles-E-Kubly-FoundationBeyond-the-Blues-284170516290/" aria-label="Facebook" class="facebook"></a>
        <a href="https://www.youtube.com/channel/UCaCjuonRqJgEgAau-bJpybg" aria-label="YouTube" class="youtube"></a>
        <a href="https://www.instagram.com/charlesekublyfoundation/" aria-label="Instagram" class="instagram"></a>
        <a href="https://www.linkedin.com/company/the-charles-e-kubly-foundation/" aria-label="LinkedIn" class="linkedin"></a> 
      </section>

      <section id="footer-menu">
        <a href="<?php echo $TopDir; ?>connect.php">Contact</a>
        <a href="<?php echo $TopDir; ?>young-leaders-council.php">YLC</a>
        <a href="<?php echo $TopDir; ?>donate.php">Donate</a>
        <a href="<?php echo $TopDir; ?>endowment.php">Endowment</a>
        <a href="<?php echo $TopDir; ?>legal.php">Legal</a>
        <a href="<?php echo $TopDir; ?>privacy.php">Privacy</a>
      </section>

      <section id="copyright">
        &copy; <?php echo date("Y"); ?> The Charles E. Kubly Foundation. All Rights Reserved.<br>
        <a href="https://foresitegrp.com" style="color: #636363; text-decoration: none;">WEBSITE BY FORESITE</a>
      </section>
    </footer>

    <dialog id="incrisis">
      <button aria-label="Close dialog"></button>

      <div>
        If you or someone you know is at immediate risk of harm or has harmed themselves <u>CALL 911</u> immediately.<br>
        <br>
        If you or someone you know is struggling or in crisis, help is available. <strong>CALL</strong> or <strong>TEXT</strong> 988 or chat <a href="https://988lifeline.org">988lifeline.org</a>.
      </div>
    </dialog>

    <script>
      // Open external link and PDFs in new tab
      [...document.links].forEach(link => {
        if (link.hostname != window.location.hostname || link.href.split('.').pop() == "pdf") {
          link.target = '_blank'; link.rel = 'noopener';
        }
      });

      // Mobile menu
      document.getElementById('menu-toggle').addEventListener("click", () => {
        if (document.body.classList.contains('sidemenu')) {
          document.body.classList.remove('sidemenu');
        } else {
          document.body.classList.add('sidemenu');
        }
      });

      document.querySelectorAll('.open-sub').forEach(e => {
        e.addEventListener('click', () => {
          e.nextElementSibling.classList.add('submenu');
          document.querySelector('HEADER NAV').classList.add('has-submenu');
        });
      });

      document.querySelectorAll('.close-sub').forEach(e => {
        e.addEventListener('click', () => {
          e.parentElement.parentElement.classList.remove('submenu');
          document.querySelector('HEADER NAV').classList.remove('has-submenu');
        });
      });

      // Modal
      const incrisis = document.getElementById('incrisis');

      document.getElementById('open-incrisis').addEventListener('click', (oi) => {
        oi.preventDefault();
        incrisis.showModal(); 
      });

      document.querySelector('#incrisis BUTTON').addEventListener("click", () => { incrisis.close(); });

      document.querySelector('#incrisis DIV').addEventListener("click", (ip) => { ip.stopPropagation(); });

      incrisis.addEventListener("click", (ic) => { incrisis.close(); });
    </script>
  </body>
</html>