<!DOCTYPE html>
<html<?php print $html_attributes; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php

  print $styles;
  print $scripts;

  ?>

</head>

<body<?php print $body_attributes;?>>
<img src="http://p1984.nl/sites/p1984.nl/files/header.jpg" class="img">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>