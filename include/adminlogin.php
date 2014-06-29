<?
		// PCT ADMINS 테이블에 등록되어 있는 관리자인지 여부 확인, 등록이 안되어 있으면 등록
		$dblink = mysqli_connect($dbserver, $dbuser, $dbpassword);

		if (!$dblink) {
			echo "DB Connection is failed.";
		}
	
		// Choose database
		mysqli_select_db($dblink,$db_name);
		
		$query = sprintf("SELECT admin_id from ADMINS WHERE admin_id='%s' AND admin_pass='%s';", $id, md5($pass));
		$result = mysqli_query($dblink,$query);
		$row = mysqli_fetch_assoc($result);
	
		if ($row==null) {
			
			mysqli_close($dblink);	
			
			include ('admin_login_fail.php');		
			
		} else {
			
			mysqli_close($dblink);	
			
			// 세션 생성
			$_SESSION['paloginid'] = $id;
			$_SESSION['padmincheck'] = "OK";			
			
			include ('admin_login_success.php');
		}
		
		// 게시판 관리자 로그인 체크 페이지  -- 추후 구현
		
		// 그룹장 로그인 체크 페이지 -- 추후 구현 

?>