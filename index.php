<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 	<?php echo '<p>Hello World</p>'; ?> 

	<?php require "mixpanel-php-master/lib/Mixpanel.php"; ?> 

	<?php $mp = Mixpanel::getInstance(""); ?>

	<?php $mp->track("Page viewed", array("Page" => "Homepage")); ?>

 </body>
</html>