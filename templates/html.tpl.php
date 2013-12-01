<!DOCTYPE html>
<html<?php print $html_attributes; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php

  // commenting this lines i remove all the css and js crap of the standard drupal configuration
  
  print $styles;
  //print $scripts;

  ?>

</head>

<body<?php print $body_attributes;?>>
<img src="<?php echo $ImagesUrl; ?>/header.jpg" class="img">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>