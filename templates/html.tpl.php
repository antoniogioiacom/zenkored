<!DOCTYPE html>
<html<?php print $html_attributes; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <link rel="stylesheet" href="/themes/zenkored/css/layout.css">
  <link rel="stylesheet" href="/themes/zenkored/css/style.css">
  <?php
  // commenting this lines i remove all the css and js crap of the standard drupal configuration
  //print $styles;
  //print $scripts; 
  ?>
</head>
 
<body<?php print $body_attributes;?>>
<img src="/themes/zenkored/images/header.jpg" class="img">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>