<!DOCTYPE html>
<html<?php print $html_attributes; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php

  // commenting this lines i remove all the css and js crap of the standard drupal configuration
  //print $styles;
  //print $scripts;
  $ImagesPath = '/images';
  $CssPath = '/css';
  $CssLayout = '/layout.css';
  $CssStyle = '/style.css';
  $CssUri = file_build_uri($CssPath);
  $CssUrl = file_create_url($CssUri);
  $ImagesUri = file_build_uri($ImagesPath);
  $ImagesUrl = file_create_url($ImagesUri);

  ?>

  <link rel="stylesheet" type="text/css" href="<?php echo $CssUrl.$CssLayout; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $CssUrl.$CssStyle; ?>">

</head>

<body<?php print $body_attributes;?>>
<img src="<?php echo $ImagesUrl; ?>/header.jpg" class="img">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>