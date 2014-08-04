<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand">PCT Admin</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Change Password</a></li>
              <li><a href="javascript:logout();">Logout</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> PCT Project Home <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Project Site</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <? if ($mode=="admin_dashboard") { echo "<li class=\"active\">"; } else  { echo "<li>"; } ?><a href="javascript:dashboard()"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-list"></i><span>Boards</span> <b class="caret"></b></a> 
			<ul class="dropdown-menu">
          		<li><a href="javascript:newboard()">Make a new bulletin board</a></li>
          		<li><a href="">View boards</a></li>
        	</ul>		
		</li>		
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-group"></i><span>Groups</span>  <b class="caret"></b></a> 
			<ul class="dropdown-menu">
      			<li><a href="javascript:newgroup()">Make a new groups</a></li>
      			<li><a href="javascript:listgroup()">View groups</a></li>
    		</ul>		
		</li>
        <li><a href="guidely.html"><i class="icon-calendar"></i><span>Schedule</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
