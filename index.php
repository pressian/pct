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
	
	// 인클루드 경로 설정
	set_include_path(get_include_path() . PATH_SEPARATOR . $path);
		
	// 각 라이브러리 불러오기
    require_once("module/calendar.php");
	require_once("module/functions.php");
		
	$mode = $_POST['mode'];
	
	// 유저의 선택에 따라 다른 페이지 생성
	switch ($mode) {
		case "db_connect_fail":
			include('include/admin_header.php');
			include('pages/error_dbcon.php');
			include('include/admin_footer.php');
			break;	
		case "login":
			$id = $_POST['id'];
			include('include/login.php'); 
		 	break;
		case "login_fail":
			include('include/header.php');
			include('pages/login_fail.php');
			include('inc동e/footer.php');
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
		case "admin_login_fail":
			include('include/admin_header.php');
			include('pages/adminloginfail.php');
			include('include/admin_footer.php');	
			break;
		case "admin_logout":
			include('include/adminlogout.php');
			break;
		case "admin_session_expired":
			include('include/admin_header.php');
			include('pages/adminsessionexpired.php'); 
			include('include/admin_footer.php');	
 			break;
		case "admin_dashboard":
			include('include/admin_session_check.php');
			include('include/admin_header.php');
			include('pages/adminfrontpage.php'); 
			include('include/admin_footer.php');	
			break;
		case "membersearch_a":
			include('include/admin_session_check.php');
			include('include/membersearch.php');
			include('include/admin_header.php');
			include('pages/adminnewgroup.php'); 
			include('include/admin_footer.php');	
			break;
		case "membersearch_g":
			include('include/admin_session_check.php');
			include('include/membersearch_g.php'); // 이 파일 작업할 차례
			break;
		case "admin_newboard":
			include('include/admin_session_check.php');
			include('include/admin_header.php');
			include('pages/adminnewboard.php'); 
			include('include/admin_footer.php');	
			break;
		case "admin_newgroup":
			$legacy_groupname = "";
			$legacy_intro = "";
			$search_result = 2;
			include('include/admin_session_check.php');
			include('include/admin_header.php');
			include('pages/adminnewgroup.php'); 
			include('include/admin_footer.php');	
			break;
		case "make_group":
			include('include/make_group.php');
			break;
		case "list_group":
			include('include/admin_session_check.php');
			include('include/admin_header.php');
			include('pages/listgroup.php'); 
			include('include/admin_footer.php');	
			break;
		case "view_group":
			include('include/admin_session_check.php');
			include('include/admin_header.php');
			include('pages/viewgroup.php'); 
			include('include/admin_footer.php');	
			break;
		default:
			$year = $_POST['year'];
			$month = $_POST['month'];
			include('include/header.php');
			include('pages/main.php');
			include('include/footer.php');	
	}
	

?>