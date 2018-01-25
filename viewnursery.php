<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nursery Recommendation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script type="text/javascript">
    function ConfirmDelete3()
    {
      var x = confirm("Are you sure you want to log out?");
      if (x)
          return true;
      else
        return false;
    }
</script>  
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="viewnursery.php"><i class="fa fa-crosshairs"></i> List Nursery</a></li>
								<li><a href="viewplant.php"><i class="fa fa-star"></i> List Plant</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index0.php">Home</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Nursery ID</td>
							<td class="image">Name</td>
							<td class="description">Address</td>
							<td class="description">Postcode</td>
							<td class="description">City</td>
							<td class="description">State</td>
							<td class="description">Operation Hours</td>
							<td class="description">Website</td>
							<td class="description">Phone Number</td>
							<td class="price">Email</td>
							<td class="quantity">Password</td>
							<td></td>
						</tr>
					</thead>
					
					<tbody>
					<?php


							  include "dbconn.php";
							  $conn = Connect();

 							$cu = "SELECT * from nursery";
  							$result = mysqli_query($conn, $cu) or die(mysqli_error());

  						while($row = mysqli_fetch_array($result)){

						       	$nur_id = $row['nur_id'];
						       	$nur_name = $row['nur_name'];
								$nur_address= $row['nur_address'];
								$nur_post= $row['nur_post'];
								$nur_city= $row['nur_city'];
								$nur_state= $row['nur_state'];
								$nur_phone = $row['nur_phone'];
								$nur_email = $row['nur_email'];
								$nur_web = $row['nur_web'];
								$nur_open= $row['nur_open'];
								$nur_close= $row['nur_close'];
								$timex= $row['timex'];
								$timex1= $row['timex1'];
								$n_password = $row['n_password'];

						   

					echo "<form name=update action=listplant0.php method=post>";
						echo "<tr>";
							echo "<td>
								<p>".$nur_id."</p>					
							</td>";
							
							echo "<td >
								<p>".$nur_name."<p>
							</td>";

							echo  "<td>
								<p>".$nur_address."</p>
							</td>";

							echo  "<td>
								<p>".$nur_post."</p>
							</td>";

							echo  "<td>
								<p>".$nur_city."</p>
							</td>";

							echo  "<td>
								<p>".$nur_state."</p>
							</td>";

							
							echo  "<td>
								<p>".$nur_open.$timex.$nur_close.$timex1." </p>
							</td>";

							echo  "<td>
								<p>".$nur_web."</p>
							</td>";

							echo  "<td>
								<p>".$nur_phone."</p>
							</td>";	

							echo  "<td>
								<p>".$nur_email."</p>
							</td>";	

							echo  "<td>
								<p>".$n_password."</p>
							</td>";	

					echo "</form>";

							
						}
							?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
		
<br><br><br><br><br><br><br><br><br><br>
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				
			</div>
		</div>
		<br><br><br>
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>