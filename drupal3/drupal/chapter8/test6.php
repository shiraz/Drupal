<?php

//In order to use $_SESSION variables, we have to start (or resume) a session.
session_start();

//Add to a "refresh_log" array.
$_SESSION['refresh_log'][] = 'You loaded this page on ' . date('H:i:s');

//Display the log of refreshes, but order by newest first by reversing the array.
$log = array_reverse($_SESSION['refresh_log']);
foreach($log as $log_item) {
	print '<p>' . $log_item . '</p>';
} 

?>