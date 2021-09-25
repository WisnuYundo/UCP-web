<!-- replika mirp credit TheJay-->
<?php require_once "controllerUserData.php"; ?>


<?php
$sql = "SELECT * FROM vehicle WHERE"
?>


<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM players WHERE email = '$email'";
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
    header('Location: login-user.php');
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
              <a class="logo" href="https://localhost/project/home">
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
  <a href="https://localhost/phpmailerucp/home">
    <i class="fas fa-desktop"></i>
    Dashboard
  </a>
</li>
<li class="active">
  <a href="https://localhost/phpmailerucp/veh">
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
		<a href="https://localhost/phpmailerucp/home">
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
  <a href="https://localhost/project/home">
    <i class="fas fa-desktop"></i>
    Dashboard
  </a>
</li>
<li class="active">
  <a href="https://localhost/project/veh">
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
                                    Jay_Alberd
                                                                      </div>
                              </a>
                          </div>
                          <div class="account-dropdown js-dropdown">
                              <div class="info clearfix">
                                  
                                  <div class="content">
                                      <h5 class="name">
                                        Jay_Alberd
                                      </h5>
                                      <span class="email">
                                        wheyou22@gmail.com
                                      </span>
                                  </div>
                              </div>
                              <div class="account-dropdown__body">
                                  <div class="account-dropdown__item">
                                      <a href="https://www.metro-rp.fun/ucp/profile">
                                          <i class="zmdi zmdi-account"></i>Profile</a>
                                  </div>
                                  
                              </div>
                              <div class="account-dropdown__footer">
                                  
                                    <a href="https://www.metro-rp.fun/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>Logout
                                    </a>
                                    
                                    <form id="logout-form" action="https://www.metro-rp.fun/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="lxmJ84ImwamBmpzIWhsCgrw0FbOgvTyNXPt4QDOD">
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
                <h2 class="title-1">List Kendaraan</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
                    <div class="col-sm-12 col-lg-4 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-car"></i>
                        <strong class="card-title pl-2">Slot 1</strong>
                    </div>
                    <div class="card-body">
                                                    <div class="mx-auto d-block">
                                <img class="mx-auto d-block" src="https://assets.open.mp/assets/images/vehiclePictures/Vehicle_<?php echo $fetch_info['Ammo1'] ?>.jpg" alt="Vehicle Image">
                                <h5 class="text-center mt-3 mb-1 vehname">
                                <?php echo $fetch_info['Ammo1'] ?>
                                </h5>
                                <div class="location text-center">
                                    <p>Model ID: <?php echo $fetch_info['Ammo1'] ?></p>
                                </div>
                            </div>                           
                                            </div>
                </div>
            </div>
                    <div class="col-sm-12 col-lg-4 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-car"></i>
                        <strong class="card-title pl-2">Slot 2</strong>
                    </div>
                    <div class="card-body">
                                                    <div class="mx-auto d-block">
                                <img class="mx-auto d-block" 
                                                            src="https://assets.open.mp/assets/images/vehiclePictures/Vehicle_<?php echo $fetch_info['Ammo2'] ?>.jpg" alt="Vehicle Image">
                                                            <h5 class="text-center mt-3 mb-1 vehname">
                                                            <?php echo $fetch_info['Ammo2'] ?>
                                </h5>
                                <div class="location text-center">
                                    <p>Model ID: <?php echo $fetch_info['Ammo2'] ?></p>
                                </div>
                            </div>                           
                                            </div>
                </div>
            </div>
                    <div class="col-sm-12 col-lg-4 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-car"></i>
                        <strong class="card-title pl-2">Slot 3</strong>
                    </div>
                    <div class="card-body">
                                                    <p class="text-center">vip</p>
                                            </div>
                </div>
            </div>
            </div>
</div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
      <script type="module">
    import { vehName } from 'https://www.metro-rp.fun/js/vehname.js'
    document.addEventListener("DOMContentLoaded", function() {
      const vehNames = document.querySelectorAll('.vehname');
      vehNames.forEach(veh => {
        const vehId = parseInt(veh.innerHTML);
        if(!vehId || vehId < 400) veh.innerHTML = 'Kosong';
        else veh.innerHTML = vehName.find((_, index) => index === vehId - 400);
      })
    });
  </script>

</body>

</html>
<!-- end document-->