<?php
if ( session_id() == '' || ! isset( $_SESSION ) ) {
	session_start();
}
if ( ! isset( $_SESSION["email"] ) ) {
	header( "location:shop-full.php" );
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
    <<?php include "header.php"; ?>
    <!-- END OF HEADER -->

    <!-- CONTENT -->
    <div class="container">
        <div class="row">
            <div class="page-header text-center">
                <h2>MY ACCOUNT</h2>
                <p>Easy payment, fast delivery</p>
            </div>
        </div>
        <table class="table table-hover" style="width: 30%;align-self: center;">
            <tbody>
            <tr>
                <th class="text-success">Full Name</th>
                <td><?php echo $_SESSION["full_name"]; ?></td>
            </tr>
            <tr>
                <th class="text-success">Email</th>
                <td><?php echo $_SESSION["email"]; ?></td>
            </tr>
            </tbody>
        </table>
        <h2 class="text-info">Order History</h2>
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                <tr>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        900
                    </td>
                    <td>
                        June 15, 2015
                    </td>
                    <td>
                        Delivered
                    </td>
                    <td>
                        &pound;173 for 4 items
                    </td>
                </tr>
                <tr>
                    <td>
                        873
                    </td>
                    <td>
                        June 02, 2015
                    </td>
                    <td>
                        Delivered
                    </td>
                    <td>
                        &pound;55 for 2 items
                    </td>
                </tr>
                <tr>
                    <td>
                        629
                    </td>
                    <td>
                        March 23, 2015
                    </td>
                    <td>
                        Delivered
                    </td>
                    <td>
                        &pound;599 for 14 items
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix space35"></div>
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
