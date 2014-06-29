<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>프레시안 조합원 커뮤니티</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	
	<script language = "JavaScript">
	function changeCalendar(month, year) {
		document.PCT.mode.value = "main";
		document.PCT.year.value = year;
		document.PCT.month.value = month;
		document.PCT.submit();
	}
	
	function login() {
	    if (PCT.id.value=="" ) {
	     	alert("아이디를 입력해주세요.");
			PCT.id.focus();
	     	return;
	    }
		if (PCT.password.value=="") {
			alert("비밀번호를 입력해주세요.");
			PCT.password.focus();
			return;
		}
		document.PCT.mode.value = "login";	
		document.PCT.submit();
	}
	
	function logout() {
		document.PCT.mode.value = "logout";	
		document.PCT.submit();		
	}
	
	function board(name) {
		document.PCT.boardname.valeu = name;
		document.PCT.mode.value = "board_list";	
		document.PCT.submit();		
	}
	
	</script>
	
</head>
<body>
<form name="PCT" action="index.php" method="post">
<input type="hidden" name="mode" value="">
<input type="hidden" name="year" value="">
<input type="hidden" name="month" value="">
<input type="hidden" name="boardname" value="">
<div id="wrapper"><!-- #wrapper -->

	<nav><!-- top nav -->
		<div class="menu">
			<ul>
				<li><a href="index.php">커뮤니티홈</a></li>				
				<li><a href="#">소모임</a></li>
				<li><a href="http://www.pressian.com/mybbs/bbs.html?bbs_code=cooplec">조합원 교육</a></li>
				<li><a href="http://www.pressian.com/">프레시안</a></li>
				<li><a href="http://www.pressian.com/ezview/week_view.html">주간 프레시안</a></li>
				<li><a href="http://www.pressian.com/news/books.html">Books</a></li>				
			</ul>
		</div>
	</nav><!-- end of top nav -->
	
	<header><!-- header -->
		<div id="plandesign"><img src="images/plans.png" alt="" /></div>
		<h1><a href="#">프레시안 조합원 커뮤니티</a></h1>
		<p>2013년 6월 1일 언론협동조합으로 전환한 프레시안의 조합원들 간에 자유롭게 의견을 나누기 위한 공간입니다.</p>
	</header><!-- end of header -->

