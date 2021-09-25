<!-- replika mirp credit TheJay-->
<?php require_once "controllerUserData.php"; ?>
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
    <title>Metro UCP Test</title>

    <!-- Fontfaces CSS-->
    <link href="template/css/font-face.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="template/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="template/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="template/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="template/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="template/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="all">
    <link href="template/vendor/jquery/jquery-ui.min.css" rel="stylesheet" media="all">
    <link href="template/css/select2-bootstrap4.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="template/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <h2>
                    UCP<br>
                    Login
                </h2>
            </div>
            <div class="login-form">
                <form action="regis" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Harus Menggunakan _" required value="<?php echo $username ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="signup" value="signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
<!-- Jquery JS-->
    <script src="template/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="template/vendor/jquery/jquery-ui.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="template/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="template/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="template/vendor/slick/slick.min.js">
    </script>
    <script src="template/vendor/wow/wow.min.js"></script>
    <script src="template/vendor/animsition/animsition.min.js"></script>
    <script src="template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="template/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="template/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="template/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="template/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="template/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="template/vendor/select2/select2.min.js">
    </script>
    <script src="template/js/moment.js"></script>
    <script src="template/js/bootstrap-datetimepicker.js"></script>

    <!-- Main JS-->
    <script src="template/js/main.js"></script>

    <!-- Custom Script -->
    <script>
    $(document).ready(function(){
        $('#show_password').on('change', function(){
            $('#password').attr('type',$('#show_password').prop('checked') == true ? "text" : "password"); 
        });
    });
</script>

</body>

</html>