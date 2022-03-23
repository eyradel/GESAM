<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">

<meta name="title" content="GESAM UMaT">
<meta name="description" content="Technology">
        <link rel="icon" href="icon.png">
<!-- Primary Meta Tags -->
<title>GESAM UMaT</title>
<meta name="title" content="GESAM UMaT">
<meta name="description" content="Technology">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.transcendencestudiogh.tech/">
<meta property="og:title" content="GESAM UMaT">
<meta property="og:description" content="Technology">
<meta property="og:image" content="http://www.transcendencestudiogh.tech/icon.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="http://www.transcendencestudiogh.tech/">
<meta property="twitter:title" content="GESAM UMaT">
<meta property="twitter:description" content="Technology">
<meta property="twitter:image" content="http://www.transcendencestudiogh.tech/icon.png">
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
	<div class="pre-loader" >
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
						<input type="text" class="form-control search-input" onkeyup="myFunction()" placeholder="Search for hymn number and Search for hymn number and scroll" id="myFilter">
						
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
						<div class="notification-list mx-h-350 customSearch for hymn number and scroll">
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
		<div class="right-sidebar-body customSearch for hymn number and scroll">
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
		<div class="menu-block customSearch for hymn number and scroll">
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
			
					<div class="pd-20 card-box mb-30">
					<div class="clearfix">
              <form method="post" action="#">
                  <?php   
              
              
              $user = [
    'topic' => '',
    'date' => '',
    'time'=>'',
    'link'=>'',
    'date',
    'message',
                
                  
];

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
     
     $user = create($_POST);
 echo "<div class=' card alert alert-success' style=' margin-right:300px;width:300px;'>Submitted Successfully</div>" ;  
     if(!$user)
     {
echo "<div class='btn card alert alert-warning' style=' margin-right:300px;width:300px;'>Request failed to send</div>" ;  
     }


 }
    
              
              
              
              
              ?>
						 <div class="col-md-2"><img src="icon.png" width="200"></div>
						
						
						
						
						<div class="form-group row">
							<label class="col-sm-6 col-md-2 col-form-label">Topic</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control " name="topic" placeholder="topic" type="text">
							</div>
						</div>
						
						<div class="form-group row">
                            
                           
							<label class="col-sm-6 col-md-2 col-form-label">Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" name="date" placeholder="Select Date" type="text">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-6 col-md-2 col-form-label">Time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control time-picker" name="time" placeholder="Select time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-6 col-md-2 col-form-label">Link</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control " name="link" placeholder="link" type="text">
                               
							</div>
						</div>
						
                  <div class="form-group row">
							<label class="col-sm-6 col-md-2 col-form-label">Message</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="form-control" name="message"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<button class="btn btn-success"><i class="fa fa-send"></i></button>
							</div>
						
					</form>
                   
                            </div></div>
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