<?
	// pct version x.x

	// 전역 변수 선언
	global $mode;
	
	global $year;
	global $month;
	
	global $host;
	global $uri;
	
	global $id;
	
	global $dbserver;
	global $dbuser;
	global $dbpassword;
	global $db_name;
	
	global $boardname;
	
	session_start();
		
	// 환경 변수 셋팅
	require_once("config.php");
		
	// 각 라이브러리 불러오기
    require_once("module/calendar.php");
	require_once("module/functions.php");
		
	$mode = $_POST['mode'];
	
	// 유저의 선택에 따라 다른 페이지 생성
	switch ($mode) {
		case "login":
			$id = $_POST['id'];
			include('include/login.php'); 
		 	break;
		case "login_fail":
			include('include/header.php');
			include('pages/login_fail.php');
			include('include/footer.php');
	 		break;
		case "logout":
			include('include/logout.php'); 
	 		break;
		case "loginalert":
			include('include/header.php');
			include('pages/loginalert.php');
			include('include/footer.php');
 			break;
		case "main":
			$year = $_POST['year'];
			$month = $_POST['month'];
			include('include/header.php');
			include('pages/main.php');
			include('include/footer.php');
		 	break;
		case "board_list":
			$boardname = $_POST['boardname'];
			include('include/header.php');
			include('pages/board_list.php');			
			include('include/footer.php');
			break;
		case "admin_login":
			$id = $_POST['id'];
			$pass = $_POST['password'];
			include('include/adminlogin.php'); 
	 		break;
		case "admin_session_expired":
			include('include/adminsessionexpired.php'); 
 			break;
		case "admin_dashboard":
			include('include/adminfrontpage.php'); 
			break;
		default:
			$year = $_POST['year'];
			$month = $_POST['month'];
			include('include/header.php');
			include('pages/main.php');
			include('include/footer.php');	
	}
	

?>