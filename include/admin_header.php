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
	function dashboard(name) {
		document.PCT.mode.value = "admin_dashboard";	
		document.PCT.submit();		
	}
	function newboard(name) {
		document.PCT.mode.value = "admin_newboard";	
		document.PCT.submit();		
	}
	
	</script>

</head>
<body>
<form name="PCT" action="index.php" method="post">
<input type="hidden" name="mode" value="">
