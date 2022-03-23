
<html>
<head>
	<!-- Basic Page Info -->

<meta name="title" content="GESAM UMaT">
<meta name="description" content="Technology">
<!-- Primary Meta Tags -->
<title>GESAM UMaT</title>
<meta name="title" content="GESAM UMaT">
<meta name="description" content="Technology">

<!-- Open Graph / Facebook -->

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icon.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
    	<link rel="stylesheet" type="text/css" href="vendors/styles/mdb.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
    <style>
    
    .cont {
    width: 310px;
    height: 750px;
    border-radius: 30px;
    margin-top: 20px;
    background-color: #fefdf9;
    overflow: hidden;
    box-shadow: 0px 20px 50px 0px rgba(0,0,0,0.2);
}
        .container{
       
         
            
        }
        .btn{

        border-radius: 50px;
        }
       
        .conta{
            margin-left: 70px;
            
            
            
        }

div.bg {
    top: -5px;
    z-index: 0;
}

.fa {
    color: white;
}

.fa-angle-left {
    font-size: 1.5em;
}

span.note {
    font-weight: 600;
    font-size: 2em;
    color: white;
}

input[type="text"] {
    outline: none;
    border: none;
    border-bottom: 1px solid lightgray;
    background: transparent;
}

div.sign-in-btn {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: linear-gradient(to top right, #232529,#7f8084);
}

span.big {
    font-weight: 900;
    font-size: 1.2em;
    color:#42484f;
}

span.underline {
    text-decoration: underline;
    font-weight: 900;
    font-size: 0.8em;
}

    
    
    
    </style>
</head>
<body style="background:white">
	<div class="pre-loader" style=" background-image: url('preview2.gif'); background-size:70%;">
		<div class="pre-loader-box">
			<div class="loader-logo"><img  src="icon.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			 <div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				
			</div>
		</div>
	</div>
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" onkeyup="myFunction()" placeholder="" id="myFilter">
						
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
            <!---notifications--->
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll" onclick="window.location.href='info.php';">
							<ul>
                                <?php require "broadquery.php";
                                
                                $info = getbroadcast();
                                foreach($info as $in):
                                ?>
								<li>
									<a href="#">
										<img src="icon.png" alt="">
										<h3><?php echo $in['topic']?></h3>
										<p><?php echo $in['date'];?></p>
                                        <p><?php echo $in['message'];?></p>
									</a>
								</li>
								<?php endforeach?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					
					
				</div>
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				

				
				
			</div>
		</div>
	</div>

	<div class="left-side-bar"><br>
		<div class="">
			<a href="">
				
				<img src="icon.png" style="border-radius:50%; width:200px" alt="" class="light-logo">
                
                	
			</a>
            
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
        
        
        <!-------this guy----->
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
                
				  
				<ul id="accordion-menu">
					
                    
                    <li class="">
						<a href="index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-home"></span><span class="mtext">Home </span>
						</a>
						
					</li>
                    
					
					
					<li >
						<a href="info.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-megaphone"></span><span class="mtext">Broadcast</span>
						</a>
						
					</li>
                  
					
					<li>
						<a href="about.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">About</span>
						</a>
					</li>
					
                  
					
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					
					<li>
						
					</li>
                    
                    <li>
						
					</li>
				</ul>
                
                
                
			</div>
		</div>
	</div>
    
    
    
    
	<div class="mobile-menu-overlay"></div>

	<div class="main-container " style="margin-left:10px; overflow:hidden;">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>DataTable</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">DataTable</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
                
                require "query.php";
                $users = getUsers();
                
                ?>
			
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Number of Users <?php echo count($users);?> </h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Name</th>
									<th>Telephone</th>
									<th>Email</th>
									<th>program</th>
									<th>Date Of Birth</th>
                                    <th>Place of stay</th>
									
								</tr>
							</thead>
							<tbody>
                                <?php  
                                
                                foreach($users as $user):
                                ?>
								<tr>
									<td class="table-plus"><?php echo $user['name'];?></td>
									<td><?php echo $user['tel'];?></td>
									<td><?php echo $user['email'];?></td>
									<td><?php echo $user['program'];?></td>
									<td><?php echo $user['date'];?></td>
                                    <td><?php echo $user['pos'];?></td>
                                    
									
								</tr>
								<?php  endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				@GESAM UMaT
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>