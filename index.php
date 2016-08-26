<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 	<?php echo '<p>Hello World</p>'; ?> 

	<?php require "mixpanel-php-master/lib/Mixpanel.php"; ?> 

	<?php $mp = Mixpanel::getInstance("fd57ae8ed4617b21b3ee19238a7309d8"); ?>

	<?php $mp.track("Page viewed", array("Page" => "Homepage")); ?>

 </body>
</html>