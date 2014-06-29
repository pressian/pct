<?
	// 년과 월이 지정되지 않았으면, 현재 년, 월 가져오기
	if ($year=="") {
		$year = date("Y");		
	}
	
	if ($month=="") {
		$month = date("m");		
	}
	
    $Calendar = new Calendar($year, $month); 
?>
	<section id="main"><!-- #main content and sidebar area -->
			<section id="content"><!-- #content -->
				<article>
					<h2>금월 조합 일정</h2>
						<div id="container">
							<? $Calendar->showCalendar($year, $month); ?>
						</div>						
						
				</article>
							
			</section><!-- end of #content -->
			
<?
	if ($_SESSION['pid']==null) {
	 	include('include/side_before_login.php');		
	} else {
		include('include/side_after_login.php');
	}
?>
	</section><!-- end of #main content and sidebar-->
