<?
	$legacy_groupname = $_POST['groupname'];
	$legacy_intro = $_POST['introduction'];
	
	$search_membername = $_POST['membername'];
	
	$search_result = 1;
	
	$member_id = "";
	$member_name = "";
	$member_nick = "";
	
	$dblink = mysqli_connect($dbserver, $dbuser, $dbpassword);

	if (!$dblink) {
		
		include ('db_connect_fail.php');
		exit();	
		
	}

	// Choose database
	mysqli_select_db($dblink,$db_name);
	
	$query = sprintf("SELECT pressian_id, pressian_name, pressian_nick from USERS WHERE pressian_id='%s';", $search_membername);
	$result = mysqli_query($dblink,$query);
	$row = mysqli_fetch_assoc($result);

	if ($row==null) {
		
		mysqli_close($dblink);	
		
		$search_result = 1;
				
	} else {
		
		mysqli_close($dblink);	
		
		$search_result = 0;
		
		$member_id = $row['pressian_id'];
		$member_name = $row['pressian_name'];
		$member_nick = $row['pressian_nick'];
		
	}
?>