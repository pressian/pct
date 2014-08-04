<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><? echo $community_name; ?> 관리자 모드</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script language = "JavaScript">
	function logout() {
		document.PCT.mode.value = "admin_logout";	
		document.PCT.submit();		
	}
	function dashboard() {
		document.PCT.mode.value = "admin_dashboard";	
		document.PCT.submit();		
	}
	function newboard() {
		document.PCT.mode.value = "admin_newboard";	
		document.PCT.submit();		
	}
	function newgroup() {
		document.PCT.mode.value = "admin_newgroup";	
		document.PCT.submit();		
	}
	function listgroup() {
		document.PCT.mode.value = "list_group";	
		document.PCT.submit();				
	}
	function viewgroup(gid) {
		document.PCT.mode.value = "view_group";
		document.PCT.groupno.value = gid;
		document.PCT.submit();		
	}
	function membersearch1() {
		document.PCT.mode.value = "membersearch_a";	
		document.PCT.submit();		
	}
	function membersearch2() {
		document.PCT.mode.value = "membersearch_g";	
		document.PCT.submit();				
	}
	function makegroup() {
		if (document.PCT.groupname.value=="") {
			alert("Group name is necessary.");
			return false;
		}
		if (document.PCT.introduction.value=="") {
			alert("Group introduction is necessary.");
			return false;
		}
		if (document.PCT.adminid.value=="") {
			alert("You must assign group administrator!");
			return false;
		} else {
			document.PCT.mode.value = "make_group";	
			document.PCT.submit();					
		}
	}	
	</script>

</head>
<body>
<? 
	 if ( ($mode!="admin_newgroup") && ($mode!="membersearch_a") && ($mode!="view_group") ) {
?>
<form name="PCT" action="index.php" method="post">
<input type="hidden" name="mode" value="">
<input type="hidden" name="groupno" value="">

<?
	 }
?>