<?php 
	include_once('Users.php');
	if (isset($_POST['sbm'])) {
		$users = new users();
		$users->setUserFull($_POST['full']);
		$users->setUserName($_POST['user']);
		$users->setUserMail($_POST['email']);
		$users->setUserPass($_POST['pass']);
		$users->setUserSex($_POST['sex']);
		$users->setUserDate($_POST['date']);
		$users->setUserMonth($_POST['month']);
		$users->setUserYear($_POST['year']);

	$pass = $_POST['pass'];
	

	if ($users->add()=='fail') {
			$error='<div class="alert alert-danger">Gặp lỗi trong quá trình đăng ký</div>';
		}elseif ( preg_match("#.*^(?=.{6,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass)) {
			$errorp ='<div class="alert alert-danger">Mật khẩu phải dài trên 6 ký tự, chứa ít nhất một chữ số, in hoa và ký tự đặc biệt</div>';
		}
		else{
			$_SESSION['alert'] = 'Add user success';
			$_SESSION['class'] = 'success';
			header('location:index.php');
		}	
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Signin TandTShop</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Oswald|Playfair+Display" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/stylesigna.css">
	<script type="text/javascript"  src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container" id="wrapper">
		<div id="header" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<h1><a href="#"> <img src="img/logo.png"></a></h1>
		</div>
		<div id="content" class="col-xs-12 col-sm-8 col-md-8 col-lg-8"> 
			<div class="content__container">
				<ul class="content__container__list">
					<li class="content__container__list__item">TandT Web </li>
					<li class="content__container__list__item">Welcome to SignIn Page </li>
					<li class="content__container__list__item">Have a nice day! </li>
					<li class="content__container__list__item">Nice to miss you! </li>
				</ul>
			</div>
		</div>


		<div class="container" id="wrapper_1">

			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" >
				<img  width="500px" height="400px" src="img/login_img2.png">
			</div>

			<div id="tablesign" class="col-xs-12 col-sm-7 col-md-7 col-lg-7" >
				<h4  >Form Đăng Ký Tài Khoản TandTer</h4>
				<?php 
					if (isset($error)) {
						echo $error;
					}elseif (isset($errorp)) {
						echo $errorp;
					}

				 ?>
			<form id="frm2" method="POST">
				<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="text" type="text" class="form-control" name="full" placeholder="Tên Của Bạn" required="Vui Lòng Nhập Full Name">
			    </div>

			    <div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="text" type="text" class="form-control" name="user" placeholder="Tên Của Bạn" required="Vui Lòng Nhập User Name">
			    </div>
				
				<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="text" type="email" class="form-control" name="email" placeholder="Email" required="Nhập Email" >
			    </div>
				<div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    			<input id="password" type="password" class="form-control" name="pass" placeholder="Password">
				</div>
				<div>
					<label>Giới Tính :</label>
					<label><input type="radio" name="sex" value="1">
					Nam</label>
					<label><input type="radio" name="sex" value="2">
					Nữ</label>
				</div>
				<div>
					<label for = "sel1">Ngày Sinh :</label>
					<span data-type="selectors" data-name="birthday">
						<span>
							<select aria-label="Ngày" title="Ngày" name="date"  id = "sel1">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<select aria-label="Tháng" title="Tháng" name="month"  id = "sel1">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>

							</select>
							<select aria-label="Năm" title="Năm" name="year"  id="sel1">
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>

							</select>	
						</span>
					</span>
					

				</div>
				<button type = "submit" name = "sbm" class = "btn btn-primary" >Đăng Ký</button> 
			</form>
			</div>
		</div>
	</div>
</body>
</html>