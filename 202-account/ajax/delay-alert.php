<?php
include_once(substr(dirname( __FILE__ ), 0,-17) . '/202-config/connect.php');
AUTH::require_user(); 

if (isset($_POST['delay']) && $_POST['delay'] == true) {
	$_SESSION['next_update_check'] = time() + 3600;
 	$_SESSION['show_update_check'] = false;
} 
?>