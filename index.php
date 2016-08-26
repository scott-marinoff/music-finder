<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 	<?php echo '<p>Hello World</p>'; 
 	
	// import Mixpanel
	require 'mixpanel-php/lib/Mixpanel.php';

	// get the Mixpanel class instance, replace with your project token
	$mp = Mixpanel::getInstance("fd57ae8ed4617b21b3ee19238a7309d8");

	// track an event
	$mp->track("button clicked", array("label" => "sign-up"));

	// create/update a profile for user id 12345
	$mp->people->set(12345, array(
	    '$first_name'       => "John",
	    '$last_name'        => "Doe",
	    '$email'            => "john.doe@example.com",
	    '$phone'            => "5555555555",
	    "Favorite Color"    => "red"
	)); ?> 

 </body>
</html>