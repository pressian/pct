<?
	// 관리자 로그인 세션 체크 	
	
	if ($_SESSION['padmincheck']!="OK") {
?>

<form name="PCT" action="index.php" method="post">
	<input type="hidden" name="mode" value="admin_session_expired">
</form>

<script type="text/javascript">
        document.PCT.submit();
</script>

<?
		exit();
		
	}
?>
