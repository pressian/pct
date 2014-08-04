<?
	// 인증 페이지 호출  * 언론재단과 협의해서 구현
	
	$login_success = "YES";
	
	if ($login_success=="YES") {
		
		// 인증이 성공한 경우의 처리  * 프레시안 조합원 db에서 정보를 가져와서 저장, 아래는 임시값.
		$name = "프레시안";
		$nick = "테스터";
		$p_email = "test@test.com";
	
		// PCT DB에 등록되었는지 여부 확인, 등록이 안되어 있으면 등록
		$dblink = mysqli_connect($dbserver, $dbuser, $dbpassword);

		if (!$dblink) {
			include ('db_connect_fail.php');
			exit();	
		}
	
		// Choose database
		mysqli_select_db($dblink,$db_name);
	
		$query = "SELECT pressian_name, pressian_nick, pressian_email FROM `USERS` WHERE pressian_id = '$id'";
		$result = mysqli_query($dblink,$query);
		$row = mysqli_fetch_assoc($result);
	
		if ($row==null) {
		
			$query = "INSERT INTO `USERS`(`pressian_id`, `pressian_name`, `pressian_nick`, `pressian_email`) VALUES ('$id','$name','$nick','$p_email')";
			$inserts=mysqli_query($dblink,$query);
		
			if(!$inserts) {
		
				$message = 'INVALId query :' .mysql_error()."\n";
				$message .= 'whole query : ' .$query;
			
				echo $message;

			}
		
		} else {
			
			// 세션 생성
			$_SESSION['pid'] = $id;
			$_SESSION['pname'] = $row['pressian_name'];
			$_SESSION['pnick'] = $row['pressian_nick'];
			$_SESSION['pemail'] = $row['pressian_email']; 
			
		}
	
		mysqli_close($dblink);	
		
		include ('loginsuccess.php');		
		
	} else {
		// 인증이 실패한 경우의 처리
		include ('loginfail.php');		
	}
	
?>
