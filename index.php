<?php

// Check if we are a user
//OCP\User::checkLoggedIn();
OCP\App::setActiveNavigationEntry( 'polls' );

//echo '<pre>r_uri: '; print_r($_SERVER); '</pre>';
if (OCP\User::isLoggedIn()) {
	$tmpl = new OCP\Template('polls', 'main', 'user');
}
else {
	$tmpl = new OCP\Template('polls', 'main', 'base');
}
$tmpl->printPage();
