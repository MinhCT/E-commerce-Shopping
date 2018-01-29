<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="font/Pacifico-Regular.ttf" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper">
	<!-- HEADER -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 logo">
					<a href="#"><img src="img/logo.jpg" class="img-responsive" style="height: 150px;"></a>
				</div>
				<div class="offset-md-9">
					
				</div>
			</div>
			<div class="menubar">
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Home</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="#">Shopping <span class="sr-only">(current)</span></a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >Categories <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Knife</a></li>
				            <li><a href="#">Clothes</a></li>
				            <li><a href="#">Equipment</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Toys</a></li>
				          </ul>
				        </li>
				        <li><a href="#">Account</a></li>

				      </ul>
				      
				      <ul class="nav navbar-nav navbar-right">
				      	<form class="navbar-form navbar-left">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search on Shopping Cart">
					        </div>
					        <button type="submit" class="btn btn-default">Search</button>
				      	</form>
				        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>				        
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  	</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</header>
	<!-- END OF HEADER -->

	<!-- CONTENT -->
	<div class="container">
		<div class="row">
			<div class="page-header text-center">
				<h2>ACCOUNT</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 box-content">
				<h4 class="heading text-center">I'M ALREADY HAVE AN ACCOUNT</h4>
				<form class="logregform" action="check-login.php" method="post">
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>E-mail Address</label>
								<input name="email" type="text" value="" class="form-control">
							</div>
						</div>
					</div>
					<div class="clearfix space20"></div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<a class="pull-right" href="#">(Lost Password?)</a>
								<label>Password</label>
								<input name="password" type="password" value="" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space20"></div>
							<button type="submit" class="btn btn-warning form-control" name="login">Login</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6 box-content">
				<h4 class="heading text-center">REGISTER AN ACCOUNT</h4>
				<form class="logregform">
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Username or E-mail Address</label>
								<input type="text" value="" class="form-control">
							</div>
						</div>
					</div>
					<div class="clearfix space20"></div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label>Password</label>
								<input type="password" value="" class="form-control">
							</div>
							<div class="col-md-6">
								<label>Re-enter Password</label>
								<input type="password" value="" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="space20"></div>
							<button type="submit" class="btn btn-warning form-control" name="register">Register</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END OF CONTENT -->
	<div class="clearfix space35"></div>
	<!-- FOOTER -->
	<div id="footer">
		<hr>
		<p>Theme By | MinhNQ</p>
		<p>This site is only for study purpose</p>
	</div>
	<!-- END OF FOOTER -->
</div>
</body>
</html>
