<!-- replika mirp credit TheJay-->
<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM players WHERE email = '$email'"; // sesuain nama table di databesnya misal character WHERE email
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>
              MIRP UCP          </title>

    <!-- Fontfaces CSS-->
    <link href="https://www.metro-rp.fun/template/css/font-face.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="https://www.metro-rp.fun/template/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="https://www.metro-rp.fun/template/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/vendor/jquery/jquery-ui.min.css" rel="stylesheet" media="all">
    <link href="https://www.metro-rp.fun/template/css/select2-bootstrap4.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="https://www.metro-rp.fun/template/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
          <header class="header-mobile d-block d-lg-none">
  <div class="header-mobile__bar">
      <div class="container-fluid">
          <div class="header-mobile-inner">
              <a class="logo" href="home">
                <div class="row d-flex align-items-center">
                    
                    <div class="col">
                                                    <h4>METRO UCP</h4>
                                            </div>
                </div>
              </a>
              <button class="hamburger hamburger--slider" type="button">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
      </div>
  </div>
  <nav class="navbar-mobile">
      <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
                            <li class="">
  <a href="home">
    <i class="fas fa-desktop"></i>
    Dashboard
  </a>
</li>
<li class="">
  <a href="veh">
    <i class="fas fa-car"></i>
    Kendaraan
  </a>
</li>                      </ul>
      </div>
  </nav>
</header>        <!-- END HEADER MOBILE-->
          
        <!-- MENU SIDEBAR-->
          <aside class="menu-sidebar d-none d-lg-block">
  <div class="logo">
		<a href="home">
			<div class="row d-flex align-items-center">
				
				<div class="col">
											<h4>METRO UCP</h4>
									</div>
			</div>
		</a>
  </div>
  <div class="menu-sidebar__content js-scrollbar1">
		<nav class="navbar-sidebar">
			<ul class="list-unstyled navbar__list">
									<li class="">
  <a href="home">
    <i class="fas fa-desktop"></i>
    Dashboard
  </a>
</li>
<li class="">
  <a href="veh">
    <i class="fas fa-car"></i>
    Kendaraan
  </a>
</li>							</ul>
		</nav>
  </div>
</aside>        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
              <header class="header-desktop">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="header-wrap d-flex justify-content-end">
              <div class="header-button justify-content-center">
                  <div class="account-wrap d-flex flex-row align-items-center">
                      <div class="account-item clearfix js-item-menu">
                          
                          <div class="content">
                              <a class="js-acc-btn d-flex flex-row" href="#">
                                  <div>
                                    <?php echo $fetch_info['username'] ?>
                                                                      </div>
                              </a>
                          </div>
                          <div class="account-dropdown js-dropdown">
                              <div class="info clearfix">
                                  
                                  <div class="content">
                                      <h5 class="name">
                                        Jay_Turner
                                      </h5>
                                      <span class="email">
                                        <?php echo $fetch_info['email'] ?>
                                      </span>
                                  </div>
                              </div>
                              <div class="account-dropdown__body">
                                  <div class="account-dropdown__item">
                                      <a href="profile">
                                          <i class="zmdi zmdi-account"></i>Profile</a>
                                  </div>
                                  
                              </div>
                              <div class="account-dropdown__footer">
                                  
                                    <a href="logout-user" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>Logout
                                    </a>
                                    
                                    <form id="logout-form" action="logout-user" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="IRNkYgS46rqAB8wlmoCU4cVYenCS7l5jKsfa9Cvq">
                                    </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>            <!-- HEADER DESKTOP-->


            <!-- MODAL LOCATION -->
                          <!-- MODAL LOCATION -->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Profile</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-12 col-lg-4 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-envelope-open"></i>
                    <strong class="card-title pl-2">Profile Info</strong>
                </div>
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <form action="profile" method="post">
                            <input type="hidden" name="_token" value="IRNkYgS46rqAB8wlmoCU4cVYenCS7l5jKsfa9Cvq">                            <input type="hidden" name="_method" value="PUT">                            <div class="form-group">
                                <label for="mail" class="control-label mb-1">Email</label>
                                <input id="kode_whitelist" name="kode_whitelist" type="text" class="form-control " aria-required="true" aria-invalid="false" placeholder="<?php echo $fetch_info['email'] ?>" disabled>
                                <span id="email_error" class="field_error"></span>
                                                            </div>
                            <div class="form-group">
                                                            </div>
                                                            <div>
                                </div>
                                                    </form>
                    </div>
                </div>
            </div>


    </div>

    <!-- Jquery JS-->
    <script src="https://www.metro-rp.fun/template/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/jquery/jquery-ui.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="https://www.metro-rp.fun/template/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="https://www.metro-rp.fun/template/vendor/slick/slick.min.js">
    </script>
    <script src="https://www.metro-rp.fun/template/vendor/wow/wow.min.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/animsition/animsition.min.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="https://www.metro-rp.fun/template/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="https://www.metro-rp.fun/template/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="https://www.metro-rp.fun/template/vendor/select2/select2.min.js">
    </script>
    <script src="https://www.metro-rp.fun/template/js/moment.js"></script>
    <script src="https://www.metro-rp.fun/template/js/bootstrap-datetimepicker.js"></script>
    <script src="https://www.metro-rp.fun/template/js/sweetalert.min.js"></script>
  
    <!-- Main JS-->
    <script src="https://www.metro-rp.fun/template/js/main.js"></script>

    <!-- Custom Script -->
        <script>
        function send_otp(){
	var email=jQuery('#email').val();
	jQuery.ajax({
		url:'send_otp.php',
		type:'post',
		data:'email='+email,
		success:function(result){
			if(result=='yes'){
				jQuery('.second_box').show();
				jQuery('.first_box').hide();
			}
			if(result=='not_exist'){
				jQuery('#email_error').html('Please enter valid email');
			}
		}
	});
}

function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'check_otp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
				window.location='dashboard.php'
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid otp');
			}
		}
	});
}
    </script>

</body>

</html>
<!-- end document-->