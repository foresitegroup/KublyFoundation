<?php
session_start();

$GLOBALS['btbdate'] = strtotime('September 18, 2026');

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}

if (!isset($TopDir)) $TopDir = "";

$MetaDesc = (isset($Description) && $Description != "") ? $Description : "The Charles E. Kubly Foundation seeks to better the lives of those affected by depression by increasing public awareness and eliminating associated stigma.";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Charles E. Kubly Foundation<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css<?php if ($TopDir == "") echo '?'.filemtime('inc/main.css'); ?>">

    <meta name="description" content="<?php echo $MetaDesc; ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7X0SMH5HXJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-7X0SMH5HXJ');
    </script>
  </head>
  <body class="<?php echo "page-".basename($_SERVER['PHP_SELF'], '.php'); ?>">
    <header>
      <section>
        <a href="<?php echo $TopDir; ?>." id="logo">
          <?php if (isset($PageMod)) { ?>
            <img src="images/beyond-the-blues-logo.webp<?php echo '?'.filemtime('images/beyond-the-blues-logo.webp'); ?>" width="1000" height="450" loading="lazy" alt="Beyond the Blues">
          <?php } else { ?>
            <img src="<?php echo $TopDir; ?>images/logo.webp" width="450" height="118" loading="lazy" alt="The Charles E. Kubly Foundation">
          <?php } ?>
        </a>
        
        <nav><?php include "menu.php" ?></nav>

        <button aria-label="Menu" id="menu-toggle"></button>
      </section>
    </header>

    <main>