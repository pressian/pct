<?
	session_destroy();
	
	// 이 아래에는 언론재단 쪽에서 필요한 로그아웃 처리 내용 구현
	
?>
<form name="PCT" action="index.php" method="post">
	<input type="hidden" name="mode" value="main">
</form>

<script type="text/javascript">
        document.PCT.submit();
</script>
