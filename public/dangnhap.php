<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="./css/all.css" />
	<link rel="stylesheet" href="./css/header.css" />
	<link rel="stylesheet" href="./css/main.css" />
	<link rel="stylesheet" href="./css/footer.css" />
	<link rel="stylesheet" href="./css/dangnhap.css" />
	<link rel="stylesheet" href="./flickity/flickity.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
</head>
<body>
	<?php include './header.php';?>
	<main>
		<!-- Page Content -->
		<div class="container">

			<!-- slider -->
			<div class="row holder">
				<div class="col-md-4"></div>
				<div class="col-md-4 login">
					<div class="panel panel-default">
						<div class="panel-heading">Đăng nhập</div>
						<div class="panel-body">
							<form>
								<div>
									<label>Email</label>
									<input type="email" class="form-control" placeholder="Email" name="email" 
									>
								</div>
								<br>	
								<div>
									<label>Mật khẩu</label>
									<input type="password" class="form-control" name="password">
								</div>
								<br>
								<div class="btn">
									<button type="button" class="btn btn-success">Đăng nhập
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
			<!-- end slide -->
		</div>
		<!-- end Page Content -->
	</main>
	<?php include './footer.php';?>

</body>
</html>