<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">

<meta name="title" content="Transcendence Studio GH">
<meta name="description" content="Technology">
    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" href="icon.png">
<!-- Primary Meta Tags -->
<title>GESAM UMaT</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
    <!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
    	<link rel="stylesheet" type="text/css" href="css/mdb.css">

    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/fancybox/dist/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
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
						<input type="text" class="form-control search-input" onkeyup="myFunction()" placeholder="search" id="myFilter">
						
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
                    <li >
						<a href="cert.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-book"></span><span class="mtext">Certificate</span>
						</a>
						
					</li>
					
					<li>
						<a href="about.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">About</span>
						</a>
					</li>
					<li >
						<a href="check.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-check"></span><span class="mtext">Check Status</span>
						</a>
						
					</li>
                     <li >
						<a href="reg.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-login"></span><span class="mtext">Register</span>
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

	<div class="main-container col-md-12">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Gallery</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">About</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="gallery-wrap">
					<ul class="row">
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220313_100306_696.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img2.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220313_100321_546.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img3.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220313_105407_383.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img4.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220313_105418_265.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220313_105418_265.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img2.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220313_105535_091.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img3.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220320_101603_006.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img4.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="IMG_20220313_105418_265.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				@ <a href="transcendencestudiogh.tech" target="_blank">Transcendence studio gh</a>
			</div>
		</div>
	</div>
    
    

							
                            
					
					
       
				
	<!--js-->
    <script>
    function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
        
        for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-text");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
    
    </script>
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
    <!-- js -->

	<!-- fancybox Popup Js -->
	<script src="src/plugins/fancybox/dist/jquery.fancybox.js"></script>
    
</body>
</html>
