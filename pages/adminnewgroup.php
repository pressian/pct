<?					
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
	      				<h3>Make a new group</h3>
	  				</div> <!-- /widget-header -->
						
						<div class="widget-content">
						
						<br>
						<div class="tabbable">
							
							<div class="tab-content">								
								
								<form class="form-horizontal" name="PCT" action="index.php" method="post" onSubmit="makegroup();return false">
									<input type="hidden" name="mode" value="">
									
									<fieldset>																							
										<div class="control-group">											
											<label class="control-label" for="groupname">Group Name</label>
											<div class="controls">
												<input type="text" class="span6" name="groupname" value="<? echo $legacy_groupname; ?>">
												<p class="help-block">This name is title of the Group</p>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->										
										
										<div class="control-group">											
											<label class="control-label" for="introduction">Introduction</label>
											<div class="controls">
												<input type="text" class="span6" name="introduction" value="<? echo $legacy_intro; ?>">
												<p class="help-block">This text will be printed as guide for community members.</p>
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
                                        <div class="control-group">											
											<label class="control-label" for="radiobtns">Admin</label>
<?
	if ($search_result>0) { 
?>
											
                                            <div class="controls">
												<input type="hidden" name="adminid" value="">
												
<?
		if ($search_result==1) { echo "해당하는 ID의 회원이 없습니다.<br>"; }
?>
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
                                                  			<button class="btn" type="button" onClick="membersearch1()">Go!</button>
                                                	  	</div>
                                                      </div>
                                                    </div>
		                                     </div>	<!-- /controls -->	
													
												
<?
	} else {
?>
											<div class="controls">

												<div class="alert alert-success">
													<input type="hidden" name="adminid" value="<? echo $member_id; ?>">
      											  	<strong>ID : </strong><? echo $member_id; ?>&nbsp;&nbsp;<strong>NAME : </strong><? echo $member_name; ?>&nbsp;&nbsp; <strong>NICK : </strong><? echo $member_nick; ?>&nbsp;&nbsp;
    											</div>
											</div>
<?		
	}
?>		

										</div> <!-- /control-group -->
										
										 <br />
										
											
										<div class="form-actions">
											<button class="btn btn-primary">Save</button> 
										</div> <!-- /form-actions -->
										
																			
									</fieldset>
								</form>
						
							</div>
						
						</div>
						  
						</div>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
