<?
	// login 여부 체크
	if ($_SESSION['pid']==null) {
		
		include ('../include/noaccess.php');		
	
	} else {
		
		$dblink = mysqli_connect($dbserver, $dbuser, $dbpassword);

		if (!$dblink) {
			echo "DB Connection is failed.";
		}
	
		// Choose database
		mysqli_select_db($dblink,$db_name);
		
		
		
		
?>
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
				<article>
					<h2><? echo $board_name; ?></h2>
						<div id="container">
<?
		// 게시물이 없을 경우의 처리
		if ($reslut_rows==0) {
?>
							<p align="center">게시물이 없습니다.</p>
<?			
		} else {
			
		}
?>
						</div>						
						
				</article>
							
			</section><!-- end of #content -->
			
<?
		include('side_after_login.php');
?>
	</section><!-- end of #main content and sidebar-->
<?
	}
?>
