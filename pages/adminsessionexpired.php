<?					
		include('include/admin_navi_before_login.php');
		
		$error_title = "Login Session do not found!";
		$error_message = "There is no more admin login session.";
		$error_detail = "PCT can't find admin login session. Maybe login session is expired. or you may access through invaild path.<br/>Go back to <a href=\"admin.php\">Admin login page</a>";
		$error_link ="admin.php";
		$error_button = "Back to login";		
		
		include('include/error.php');
?>