<!-- replika mirp credit TheJay-->
<!DOCTYPE html>

	<?php 
	session_start();
	require "connection.php"; //ini jangan di rubah nah yang lainya lu sesuain aja ya ama databes lu
	$email = "";
	$username = "";
	$errors = array();

	//if user signup button
	if(isset($_POST['signup'])){
		$name = mysqli_real_escape_string($con, $_POST['username']); //username boleh di rubah sesuain ama databes anda
		$email = mysqli_real_escape_string($con, $_POST['email']); //email boleh di rubah sesuain databes anda
		$password = mysqli_real_escape_string($con, $_POST['password']); //password boleh di rubah sesuain databes anda
		$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']); // ini gausah
		if($password !== $cpassword){
			$errors['Password'] = "Confirm password not matched!";
		}
		$email_check = "SELECT * FROM players WHERE email = '$email'"; //sesuain tabel databes anda
		$res = mysqli_query($con, $email_check);
		if(mysqli_num_rows($res) > 0){
			$errors['email'] = "Email that you have entered is already exist!";
		}
		$name_check = "SELECT * FROM players WHERE username = '$name'"; //sesuain tabel databes anda
		$res = mysqli_query($con, $name_check);
		if(mysqli_num_rows($res) > 0){
			$errors['name'] = "name that you have entered is already exist!";
		}

		if(count($errors) === 0){
			$encpass = password_hash($password, PASSWORD_BCRYPT);
			$code = rand(999999, 111111);
			$status = "notverified";
			$insert_data = "INSERT INTO players (username, email, password, code, status)  
							values('$name', '$email', '$encpass', '$code', '$status')";  // yang ini ngeget dari line 13 ampe 34 nah pokonya yang ada tulisan seperti ini 'apa pun isinya' itu dia ngeget dari databes 
			$data_check = mysqli_query($con, $insert_data);
			if($data_check){
				$subject = "Email Verification Code"; //ini nama nya bisa di ganti misal MetroIndoRpUCP
				$message = "Your verification code is halo $name akun anda sudah kami acc silakan memasukan code ini ke web kami $code</p>"; //ini buat pesan dan bisa di rubah yang terkirim pada email contoh pada gambar nya di contohpesan.png
				$sender = "From: ucpsamp";
				if(mail($email, $subject, $message, $sender)){
					$info = "We've sent a verification code to your email - $email";
					$_SESSION['info'] = $info;
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					header('location: user-otp');
					exit();
				}else{
					$errors['otp-error'] = "Failed while sending code!";
				}
			}else{
				$errors['db-error'] = "Failed while inserting data into database!";
			}
		}

	}
		//if user click verification code submit button
		if(isset($_POST['check'])){
			$_SESSION['info'] = "";
			$otp_code = mysqli_real_escape_string($con, $_POST['otp']);
			$check_code = "SELECT * FROM players WHERE code = $otp_code"; //sesuain ama table databes anda ya
			$code_res = mysqli_query($con, $check_code);
			if(mysqli_num_rows($code_res) > 0){
				$fetch_data = mysqli_fetch_assoc($code_res);
				$fetch_code = $fetch_data['code'];
				$email = $fetch_data['email'];
				$code = 0;
				$status = 'verified';
				$update_otp = "UPDATE players SET code = $code, status = '$status' WHERE code = $fetch_code"; //sesuain ama table databes anda ya
				$update_res = mysqli_query($con, $update_otp);
				if($update_res){
					$_SESSION['username'] = $name;
					$_SESSION['email'] = $email;
					header('location: home');
					exit();
				}else{
					$errors['otp-error'] = "Failed while updating code!";
				}
			}else{
				$errors['otp-error'] = "You've entered incorrect code!";
			}
		}

		//if user click login button
		if(isset($_POST['login'])){
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$check_email = "SELECT * FROM players WHERE email = '$email'";
			$res = mysqli_query($con, $check_email);
			if(mysqli_num_rows($res) > 0){
				$fetch = mysqli_fetch_assoc($res);
				$fetch_pass = $fetch['password'];
				if(password_verify($password, $fetch_pass)){
					$_SESSION['email'] = $email;
					$status = $fetch['status'];
					if($status == 'verified'){
					  $_SESSION['email'] = $email;
					  $_SESSION['password'] = $password;
					  $_SESSION['pName'] = $pName;
						header('location: home');
					}else{
						$info = "It's look like you haven't still verify your email - $email";
						$_SESSION['info'] = $info;
						header('location: user-otp');
					}
				}else{
					$errors['email'] = "Incorrect email or password!";
				}
			}else{
				$errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
			}
		}

		//if user click continue button in forgot password form
		if(isset($_POST['check-email'])){
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$check_email = "SELECT * FROM players WHERE email='$email'";
			$run_sql = mysqli_query($con, $check_email);
			if(mysqli_num_rows($run_sql) > 0){
				$code = rand(999999, 111111);
				$insert_code = "UPDATE players SET code = $code WHERE email = '$email'";
				$run_query =  mysqli_query($con, $insert_code);
				if($run_query){
					$subject = "Password Reset Code";
					$message = "Your password reset code is $code";
					$sender = "From: renceofficial12@gmail.com";
					if(mail($email, $subject, $message, $sender)){
						$info = "We've sent a passwrod reset otp to your email - $email";
						$_SESSION['info'] = $info;
						$_SESSION['email'] = $email;
						header('location: reset-code.php');
						exit();
					}else{
						$errors['otp-error'] = "Failed while sending code!";
					}
				}else{
					$errors['db-error'] = "Something went wrong!";
				}
			}else{
				$errors['email'] = "This email address does not exist!";
			}
		}

		//if user click check reset otp button
		if(isset($_POST['check-reset-otp'])){
			$_SESSION['info'] = "";
			$otp_code = mysqli_real_escape_string($con, $_POST['otp']);
			$check_code = "SELECT * FROM players WHERE code = $otp_code";
			$code_res = mysqli_query($con, $check_code);
			if(mysqli_num_rows($code_res) > 0){
				$fetch_data = mysqli_fetch_assoc($code_res);
				$email = $fetch_data['email'];
				$_SESSION['email'] = $email;
				$info = "Please create a new password that you don't use on any other site.";
				$_SESSION['info'] = $info;
				header('location: new-password.php');
				exit();
			}else{
				$errors['otp-error'] = "You've entered incorrect code!";
			}
		}

		//if user click change password button
		if(isset($_POST['change-password'])){
			$_SESSION['info'] = "";
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
			if($password !== $cpassword){
				$errors['password'] = "Confirm password not matched!";
			}else{
				$code = 0;
				$email = $_SESSION['email']; //getting this email using session
				$encpass = password_hash($password, PASSWORD_BCRYPT);
				$update_pass = "UPDATE players SET code = $code, password = '$encpass' WHERE email = '$email'";
				$run_query = mysqli_query($con, $update_pass);
				if($run_query){
					$info = "Your password changed. Now you can login with your new password.";
					$_SESSION['info'] = $info;
					header('Location: password-changed.php');
				}else{
					$errors['db-error'] = "Failed to change your password!";
				}
			}
		}
		
	   //if login now button click
		if(isset($_POST['login-now'])){
			header('Location: login.php');
		}
	?>