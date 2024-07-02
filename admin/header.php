<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>The Charles E. Kubly Foundation<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../inc/main.css<?php echo '?'.filemtime('../inc/main.css'); ?>">
    <link rel="stylesheet" href="admin.css<?php echo '?'.filemtime('admin.css'); ?>">
  </head>
  <body>

    <div class="menu-holder">
      <div class="scrolling-menu">
        <div class="site-width">
          <a href="." class="logo">
            <img src="../images/logo.png" alt="The Charles E. Kubly Foundation">
          </a>

          <a href="#my-menu" class="my-menu-toggle"></i></a>
          <div class="menu"><?php if ($PageTitle != "Login") include "menu.php"; ?></div>
        </div>
      </div>
    </div>