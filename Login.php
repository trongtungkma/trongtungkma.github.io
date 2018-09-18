
<!DOCTYPE html>
<html>
<head>
	<title>Login TandTShop</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Oswald|Playfair+Display" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleloga.css">
	<script type="text/javascript"  src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body >

<?php  
	include_once('Users.php');
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$pass =  $_POST['pass'];

		$sql = "SELECT * FROM users WHERE user_mail ='$email' AND user_pass='$pass'";

	$database = new database();
	$database->connect();
	$database->query($sql);

	if ($database->numRows() > 0) {
		$_SESSION['mail'] = $email;
		$_SESSION['pass'] = $pass;
		header('location:index.php');
	}
	elseif ($_SESSION['mail'] == 'trongtung.kma1@gmail.com' AND $_SESSION['pass'] == 'tandt1234') {
		header('location:quantri.php');
	}
	else{
		$error = '<div class="alert alert-danger">Account not valid!</div>';
	}

}

 ?>
	<div id="wrapper" class="container">
		<div id="header" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<h1><a href="#"> <img src="img/logo.png"></a></h1>
		</div>
		<div id="content" class="col-xs-12 col-sm-8 col-md-8 col-lg-8"> 
			<div class="content__container">
				<ul class="content__container__list">
					<li class="content__container__list__item">TandT Web </li>
					<li class="content__container__list__item">Welcome to Login Page^^ </li>
					<li class="content__container__list__item">Have a nice day! </li>
					<li class="content__container__list__item">Nice to miss you! </li>
				</ul>
			</div>
		</div>
	
	<div class="container" id="Login_Img">
		<div id="login_img" class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
			<img  width="500px" height="400px" src="img/login_img2.png">
			<div class="login_overlay">
				<div class ="login_text">
					Login your account help We know who you are!
				</div>
			</div>
		</div>
		

		<div  id ="forma" class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
		<?php 
					if (isset($error)) {
							echo $error;
						}	

		 ?>
			
			<h3 align="center"> Đăng nhập hệ thống</h3>
			<form action="#" method="POST">
				 <div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="text" type="text" class="form-control" name="email" placeholder="Nhập email" required="Vui Lòng Nhập Tên">
			    </div>
				<br>
			    <div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    			<input id="password" type="password" class="form-control" name="pass" placeholder="Password">
				</div>

				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="reset" class="btn btn-info"> Reset </button>
				  <button type="submit" class="btn btn-primary" name="submit">Đăng Nhập</button>		
				  <button class="btn btn-primary" name="signin"><a href="#"></a>Đăng Ký</button>		
				</form>
			</div>			
		
		</div>
	</div>

</body>
</html>