<div class="container">
	
	<div class="row">
		
		<div class="span12">
			
			<div class="error-container">
				<h1><? echo $error_title; ?></h1>
				
				<h2><? echo $error_message; ?></h2>
				
				<div class="error-details">
					<? echo $error_detail; ?>
					
				</div> <!-- /error-details -->
				
				<div class="error-actions">
					<a href="<? echo $error_link; ?>" class="btn btn-large btn-primary">
						<i class="icon-chevron-left"></i>
						&nbsp;<? echo $error_button; ?>						
					</a>
					
					
					
				</div> <!-- /error-actions -->
							
			</div> <!-- /error-container -->			
			
		</div> <!-- /span12 -->
		
	</div> <!-- /row -->
	
</div> <!-- /container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>
