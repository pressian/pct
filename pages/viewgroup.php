<?			
	$selected_gid = $_POST['groupno'];
	$selected_gname = "";
	
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
							for ($i=0;$i<$count;$i++) {
								
								if ($selected_gid == $gid[$i]) {
									$selected_gname = $gname[$i];
					?>
										<div class="alert alert-info">
					<?
									
								} else {
					?>
                   						<div class="alert">
					
					<?				
								}
					?>
					                    	<strong><? echo $gname[$i]; ?> : </strong> <? echo $gintro[$i]; ?> &nbsp;<button class="btn btn-info" onClick="viewgroup(<? echo $gid[$i]; ?>)"> Info</button>
					                    </div>			
					<?			
							}
					?>
										
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->


	      		<div class="widget ">
	      			<div class="widget-header">
	      				<i class="icon-group"></i>
	      				<h3>Group Member</h3>
	  				</div> <!-- /widget-header -->
					<div class="widget-content">
						<form class="form-horizontal" name="PCT" action="index.php" method="post" onSubmit="makegroup();return false">
							<input type="hidden" name="mode" value="">
							<input type="hidden" name="groupno" value="<? echo $selected_gid; ?>">
							
							<fieldset>																							
						
                        	<div class="control-group">
								<label class="control-label" for="radiobtns">멤버 추가</label>
                            	<div class="controls">
									<input type="hidden" name="newid" value="">
									<!-- Button to trigger modal -->
                                	<a href="#myModal" role="button" class="btn" data-toggle="modal">회원 검색</a>
                                                     
                                	<!-- Modal -->
                                	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                		<div class="modal-header">
                                			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                			<h3 id="myModalLabel">회원 아이디를 입력하십시요.</h3>
                                		</div>
                                    	<div class="modal-body">
                                    		<div class="input-append">
                                    			<input class="span2 m-wrap" name="membername" type="text">
                                        		<button class="btn" type="button" onClick="membersearch2()">Go!</button>
                                    		</div>
                                		</div>
                             		</div>
		                 		</div>	<!-- /controls -->	
							</div> <!-- /control-group -->
						
							<h3><? echo $selected_gname; ?>의 구성원</h3>
<?
	$query = sprintf("SELECT * FROM GROUP_MEMBERS WHERE gid='%s';", $selected_gid);
	
	$gmember_count = 0;

	if ($result = mysqli_query($dblink, $query)) {
    	while ($row = mysqli_fetch_assoc($result)) {
			$member_id[$gmember_count] = $row["pid"];
			$gmember_count++;
    	}
	}
	
	if ($gmember_count>0) {
		
		for ($i=0;$i<$gmember_count;$i++) {
			
			$query = sprintf("SELECT pressian_id, pressian_name, pressian_nick from USERS WHERE pressian_id='%s';", $member_id[$i]);
			$result = mysqli_query($dblink,$query);
			$row = mysqli_fetch_assoc($result);	
?>
							<div class="alert"><strong><? echo $row['pressian_id']; ?>(<? echo $row['pressian_name']; ?>, <? echo $row['pressian_nick']; ?>)</strong>  &nbsp;&nbsp;<button class="btn btn-danger">Kick out</button></div>
<?			
		}
	
	} else {
		
		echo "그룹에 멤버가 없습니다.";
		
	}
	
	mysqli_close($dblink);	
		
?>
							</fieldset>
						</form>

					</div>
				
				</div> <!-- /widget -->

		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

