<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>The Charles E. Kubly Foundation Admin<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../inc/main.css<?php echo '?'.filemtime('../inc/main.css'); ?>">
    <link rel="stylesheet" href="admin.css<?php echo '?'.filemtime('admin.css'); ?>">
  </head>
  <body>

    <header>
      <section>
        <a href="." id="logo">
          <img src="../images/logo.webp" width="450" height="118" loading="lazy" alt="The Charles E. Kubly Foundation">
        </a>
        
        <nav><?php if ($PageTitle != "Login") include "menu.php" ?></nav>

        <button aria-label="Menu" id="menu-toggle"></button>
      </section>
    </header>

    <main>