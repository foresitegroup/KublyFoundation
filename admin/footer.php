  </main>

  <script>
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
    </script>
  </body>
</html>