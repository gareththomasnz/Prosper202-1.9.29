<?php include_once(substr(dirname( __FILE__ ), 0,-17) . '/202-config/connect.php'); 

AUTH::require_user(); 

//check if its the latest verison
if(!isset($_SESSION['next_update_check']) || time() > $_SESSION['next_update_check']) {
	$_SESSION['show_update_check'] = true;
	$_SESSION['update_needed'] = update_needed();
	$_SESSION['premium_update_available'] = check_premium_update();
} else {
    $_SESSION['show_update_check'] = false;
}
