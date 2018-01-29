<?php
/**
 * Created by PhpStorm.
 * User: Niles
 * Date: 1/29/2018
 * Time: 8:52 PM
 */
$homepage_link = 'index.php';
$homepage_text = 'Home';
$pages = array(
	'shop-full.php'    => 'Shopping',
	'shop-account.php' => 'Account',
	'login.php'        => 'Log In',
	'logout.php'       => 'Log Out'
);

$currentPage = basename( $_SERVER['REQUEST_URI'] ); ?>
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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $homepage_link; ?>"><?php echo $homepage_text;?></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Shopping <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="true">Categories <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Knife</a></li>
                                    <li><a href="#">Clothes</a></li>
                                    <li><a href="#">Equipment</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Toys</a></li>
                                </ul>
                            </li>
							<?php
							if ( isset( $_SESSION['user_id'] ) ) {
								echo '<li><a href="shop-account.php">Account</a></li>';
								echo '<li><a href="logout.php">Log Out</a></li>';
							} else {
								echo '<li class="active"><a href="login.php">Log In</a></li>';
								echo '<li><a href="register.php">Register</a></li>';
							}
							?>

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
