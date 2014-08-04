<?					
	$dblink = mysqli_connect($dbserver, $dbuser, $dbpassword);

	if (!$dblink) {
		include ('db_connect_fail.php');
		exit();	
	}

	// Choose database
	mysqli_select_db($dblink,$db_name);

	$query = "SELECT * FROM GROUPS";
	$count = 0;

	if ($result = mysqli_query($dblink, $query)) {
		
	    while ($row = mysqli_fetch_assoc($result)) {
			
			$gid[$count] = $row["gid"];
			$gname[$count] = $row["name"];
			$gintro[$count] = $row["introduction"];

			$count++;
			
	    }
	}
	
	mysqli_close($dblink);

	include('include/admin_navi_after_login.php');
		
?>
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-th-large"></i>
	      				<h3>View groups</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">
						
					<br>
					
<?
	if ($count>0) {
		
		for ($i=0;$i<$count;$i++) {
?>
                   	<div class="alert">
                    	<strong><? echo $gname[$i]; ?> : </strong> <? echo $gintro[$i]; ?> &nbsp;<button class="btn btn-info" onClick="viewgroup('<? echo $gid[$i]; ?>')"> Info</button>
                    </div>			
<?			
		}
	
	} else {
		
		echo "생성된 그룹이 없습니다.";
		
	}	
?>
										
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
				
				
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
