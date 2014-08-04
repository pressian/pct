<?
	$group_name = $_POST['groupname'];
	$intro = $_POST['introduction'];
	$admin_id = $_POST['adminid'];
	
	$dblink = mysqli_connect($dbserver, $dbuser, $dbpassword);

	if (!$dblink) {
		include ('db_connect_fail.php');
		exit();	
	}

	// Choose database
	mysqli_select_db($dblink,$db_name);



	$query = "INSERT INTO `GROUPS`(`name`, `introduction`) VALUES (\"$group_name\",\"$intro\");";
	$inserts=mysqli_query($dblink,$query);

	if(!$inserts) {

		$message = 'INVALId query :' .mysql_error()."\n";
		$message .= 'whole query : ' .$query;
	
		echo $message;

	}
	
	$query = sprintf("SELECT gid from GROUPS WHERE name='%s';", $group_name);
	$result = mysqli_query($dblink,$query);
	$row = mysqli_fetch_assoc($result);
	
	$group_id = $row['gid'];
	
	$query = sprintf("SELECT uid from USERS WHERE pressian_id='%s';", $admin_id);
	$result = mysqli_query($dblink,$query);
	$row = mysqli_fetch_assoc($result);
	
	$pid = $row['uid'];
	
	$query = "INSERT INTO `GROUPS_ADMINS`(`pid`, `gid`) VALUES ($pid,$group_id);";
	$inserts=mysqli_query($dblink,$query);

	if(!$inserts) {

		$message = 'INVALId query :' .mysql_error()."\n";
		$message .= 'whole query : ' .$query;
	
		echo $message;

	}

	mysqli_close($dblink);
?>
<form name="PCT" action="index.php" method="post">
	<input type="hidden" name="mode" value="list_group">
</form>

<script type="text/javascript">
        document.PCT.submit();
</script>
