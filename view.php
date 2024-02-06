
<html>
    
  <?php

require __DIR__ . '/query.php';

if (!isset($_GET['id'])) {
    include "null.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "null.php";
    exit;
}

?>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
<!-- Primary Meta Tags -->
<title>Standard Chartered</title>
<meta name="title" content="Standard Chartered">
<meta name="description" content="Rebacon 2023">
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icon.png">


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
    	<link rel="stylesheet" type="text/css" href="css/mdb.css">

    	
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
    height: 480px;
    border-radius: 30px;
    margin-top: 10px;
    background-color: #fefdf9;
    overflow: hidden;
    box-shadow: 0px 20px 50px 0px rgba(0,0,0,0.2);
}
        .container{
       
         
            
        }
        .btn{

        border-radius: 50px;
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
    font-size: 0.7em;
}

      .ringing-bell {
    position: absolute;

    transition: translate(-50%, -50%)
}

      .dark-mode {
  background-color: #111111;
 
  
}


@-webkit-keyframes ring {
    0% {
        -webkit-transform: rotate(-15deg);
        transform: rotate(-15deg)
    }

    2% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg)
    }

    4% {
        -webkit-transform: rotate(-18deg);
        transform: rotate(-18deg)
    }

    6% {
        -webkit-transform: rotate(18deg);
        transform: rotate(18deg)
    }

    8% {
        -webkit-transform: rotate(-22deg);
        transform: rotate(-22deg)
    }

    10% {
        -webkit-transform: rotate(22deg);
        transform: rotate(22deg)
    }

    12% {
        -webkit-transform: rotate(-18deg);
        transform: rotate(-18deg)
    }

    14% {
        -webkit-transform: rotate(18deg);
        transform: rotate(18deg)
    }

    16% {
        -webkit-transform: rotate(-12deg);
        transform: rotate(-12deg)
    }

    18% {
        -webkit-transform: rotate(12deg);
        transform: rotate(12deg)
    }

    20% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
}

@keyframes ring {
    0% {
        -webkit-transform: rotate(-15deg);
        -ms-transform: rotate(-15deg);
        transform: rotate(-15deg)
    }

    2% {
        -webkit-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        transform: rotate(15deg)
    }

    4% {
        -webkit-transform: rotate(-18deg);
        -ms-transform: rotate(-18deg);
        transform: rotate(-18deg)
    }

    6% {
        -webkit-transform: rotate(18deg);
        -ms-transform: rotate(18deg);
        transform: rotate(18deg)
    }

    8% {
        -webkit-transform: rotate(-22deg);
        -ms-transform: rotate(-22deg);
        transform: rotate(-22deg)
    }

    10% {
        -webkit-transform: rotate(22deg);
        -ms-transform: rotate(22deg);
        transform: rotate(22deg)
    }

    12% {
        -webkit-transform: rotate(-18deg);
        -ms-transform: rotate(-18deg);
        transform: rotate(-18deg)
    }

    14% {
        -webkit-transform: rotate(18deg);
        -ms-transform: rotate(18deg);
        transform: rotate(18deg)
    }

    16% {
        -webkit-transform: rotate(-12deg);
        -ms-transform: rotate(-12deg);
        transform: rotate(-12deg)
    }

    18% {
        -webkit-transform: rotate(12deg);
        -ms-transform: rotate(12deg);
        transform: rotate(12deg)
    }

    20% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg)
    }
}

.faa-ring.animated,
.faa-ring.animated-hover:hover,
.faa-parent.animated-hover:hover>.faa-ring {
    -webkit-animation: ring 2s ease infinite;
    animation: ring 2s ease infinite;
    transform-origin-x: 50%;
    transform-origin-y: 0px;
    transform-origin-z: initial
}
      
  
      .btn
      {
          border-radius:30px;
          width: 80%;
      }
      .form-control
      {
           animation: 2s ease-out 0s 1 Fromleft;
 border-radius: 50px;
}
      .rin
      { position: absolute;
          font-size: 15px;
          margin-bottom: 660px;
          margin-left: 390px;
          padding: 10px;
      }
     .men
      {
   margin :auto auto auto auto;
          width: 320px;
      
      }
         
         .cont
         
         {
             

             
              margin :100px auto auto auto;
             
         }
    
         .navbar
         {
              margin :10px auto auto auto;
             border-radius: 50px;
              -webkit-box-shadow: 0 2px 5px 0 lavender, whitesmoke;
             width: 80%;
         }
         
            @keyframes Fromtleft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

             @keyframes Fromleft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
    
    
    </style>
    
</head>
<body >
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
						<input type="text" class="form-control search-input" onkeyup="myFunction()" placeholder="Search " id="myFilter">
						
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
						<div onclick="window.location.href='info.php';" class="notification-list mx-h-350 customscroll">
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
		<div class="menu-block customSearch for hymn number and scroll">
			<div class="sidebar-menu">
                
			  
				<ul id="accordion-menu">
					
                    
                    <li class="">
						<a href="index.php" class="dropdown-toggle no-arrow">
							<span class="micon ti ti-home"></span><span class="mtext">Home </span>
						</a>
						
					</li>
                    
					<li >
						<a href="check.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-check"></span><span class="mtext">check</span>
						</a>
						
					</li>
                    <li >
						<a href="register.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-lock"></span><span class="mtext">Register</span>
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
<div class="col-md-3 col-sm-6 container" >
   
    		
        <div class="main-container  " >
            


     <div class="cont  ">
         
         
        <div class="position-relative bg">
            <img src="assets/orange.svg" class="position-absolute">
            <img src="assets/black.svg" class="position-absolute">
            <img src="assets/blue.svg" class="position-absolute"
            style="
            right: 0px;top:2px;
            ">
            
             <?php if (isset($user['extension'])): ?>
                        
            
            <span class="user-icon">
							<img class="position-absolute"   src="<?php echo "images/${user['id']}.${user['extension']}" ?>" alt="">
						</span>
            
                    <?php endif; ?>
        </div>
        <br><br>
        <div class="ml-4 mt-4 pl-2 pt-3 position-relative">
           <button class="btn btn-" style=";border-radius:50px; width:100px;" data-backdrop="static" data-toggle="modal" data-target="#login-modal"style="border-radius:50px;"><i class="fa fa-bell faa-ring animated "></i></button><br><br>     
        </div>
         
            
<div class=" row col-1">
               
                <span class="note" style="color:gold;font-size:25px;" ><i class="icon-copy ion-qr-scanner"></i> </span>
            </div> 
         <div class="login-box   border-radius-10" >
             
       <form method="POST" enctype="multipart/form-data"
                  action="">
												
													 
												<div class=" input-group custom">
													<input type="text" class="form-control card  " placeholder="Full name" name="name" style="border-radius:50px;" value="<?php echo $user['name']?>">
                                                    
                                                    
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
													</div>
												</div>
           <div class=" input-group custom">
													<input type="tel" class="form-control card  " placeholder="Staff ID" name="std" style="border-radius:50px;" value="<?php echo $user['std']?>">
                                                    
                                                    
													<div class="input-group-append custom">
														<span class="input-group-text"><i class="icon-copy ti ti-lock"></i></span>
													</div>
												</div>
          
           
         <div class="btn-group">
             <a class="btn btn-primary" href="update.php?id=<?php echo $user['id'] ?>"><i class="icon-copy ion-ios-settings-strong"></i></a>
                           <a class="btn btn-danger" href="delete.php?id=<?php echo $user['id'] ?>"><i class="icon-copy ion-ios-trash-outline"></i></a>
        </div>
												 
         </form>
         
         
    </div>
	</div>

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
					
					</div>
				
        
    </div>

                       
					
					
       
				
	<!--js-->

	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
    
</body>
    
</html>