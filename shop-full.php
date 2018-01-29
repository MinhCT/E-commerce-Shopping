<?php
if ( session_id() == '' || ! isset( $_SESSION ) ) {
	session_start();
}
if ( isset( $_SESSION["email"] ) ) {
	//header( "location:shop-full.php" );
}
?>
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
    <?php include "header.php"; ?>
    <!-- END OF HEADER -->

    <!-- CONTENT -->
    <div class="container">
        <div class="row">
            <div class="page-header text-center">
                <h2>SHOP</h2>
                <p>You can order products from here</p>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 20rem;">
                            <img src="img/ssd-samsung.jpg" class="img-responsive" alt="">
                            <div class="card-block">
                                <h4 class="card-title">Samsung SSD</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget.</p>
                                <a href="#" class="btn btn-warning"><span class="fa fa-link"></span> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 20rem;">
                            <img src="img/ssd-samsung.jpg" class="img-responsive" alt="">
                            <div class="card-block">
                                <h4 class="card-title">Samsung SSD</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget.</p>
                                <a href="#" class="btn btn-warning"><span class="fa fa-link"></span> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 20rem;">
                            <img src="img/ssd-samsung.jpg" class="img-responsive" alt="">
                            <div class="card-block">
                                <h4 class="card-title">Samsung SSD</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget.</p>
                                <a href="#" class="btn btn-warning"><span class="fa fa-link"></span> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 20rem;">
                            <img src="img/ssd-samsung.jpg" class="img-responsive" alt="">
                            <div class="card-block">
                                <h4 class="card-title">Samsung SSD</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget.</p>
                                <a href="#" class="btn btn-warning"><span class="fa fa-link"></span> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- paging -->
                <nav aria-label="">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
                <!-- end of paging -->
            </div>
        </div>
    </div>
    <!-- END OF CONTENT -->

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