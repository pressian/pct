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
	      				<h3>Make a new bulletin board</h3>
	  				</div> <!-- /widget-header -->
						
						<div class="widget-content">
						
						<br>
						<div class="tabbable">
							
							<div class="tab-content">
								
								<form id="edit-profile" class="form-horizontal">
									<fieldset>						
										<div class="control-group">											
											<label class="control-label" for="boardid">Board ID</label>
											<div class="controls">
												<input type="text" class="span6" id="boardid" value="">
												<p class="help-block">This ID is used by PCT program.</p>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->	
										
										
										<div class="control-group">											
											<label class="control-label" for="boardname">Board Name</label>
											<div class="controls">
												<input type="text" class="span6" id="boardname" value="">
												<p class="help-block">This name is title of the board.</p>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->										
										
										<div class="control-group">											
											<label class="control-label" for="introduction">Introduction</label>
											<div class="controls">
												<input type="text" class="span6" id="introduction" value="">
												<p class="help-block">This text will be printed as guide for community members.</p>
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
                                        <div class="control-group">											
											<label class="control-label" for="radiobtns">Owner</label>
											
                                            <div class="controls">
				                                <select id="select" name="owner">
				                                    <option value="열린프레시안">열린프레시안</option>
				                                    <option value="광주,전라 지역모임">광주,전라 지역모임</option>
				                                    <option value="조합원 전원">조합원 전원</option>
				                                </select>
												
                                            </div>	<!-- /controls -->			
										</div> <!-- /control-group -->
										

                                        <div class="control-group">											
											<label class="control-label" for="radiobtns">Authority - List View</label>
											
                                            <div class="controls">
				                                <select id="select" name="list_authority">
				                                    <option value="admin">관리자 이상</option>
				                                    <option value="owner">소유그룹 멤버 이상</option>
				                                    <option value="member">조합원 이상</option>
				                                    <option value="member">손님도 가능</option>
				                                </select>
												
                                            </div>	<!-- /controls -->			
										</div> <!-- /control-group -->

                                        <div class="control-group">											
											<label class="control-label" for="radiobtns">Authority - Reading</label>
											
                                            <div class="controls">
				                                <select id="select" name="read_authority">
				                                    <option value="admin">관리자 이상</option>
				                                    <option value="owner">소유그룹 멤버 이상</option>
				                                    <option value="member">조합원 이상</option>
				                                    <option value="member">손님도 가능</option>
				                                </select>
												
                                            </div>	<!-- /controls -->			
										</div> <!-- /control-group -->


                                        <div class="control-group">											
											<label class="control-label" for="radiobtns">Authority - Writing/Modifing/Deleting</label>
											
                                            <div class="controls">
				                                <select id="select" name="write_authority">
				                                    <option value="admin">관리자 이상</option>
				                                    <option value="owner">소유그룹 멤버 이상</option>
				                                    <option value="member">조합원 이상</option>
				                                    <option value="member">손님도 가능</option>
				                                </select>
												
                                            </div>	<!-- /controls -->			
										</div> <!-- /control-group -->
										
                                        
										
											
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
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
