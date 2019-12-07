<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();
include"../config.php";	

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>High-Tech-Info<</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
<!----------------------------- lllllllll------>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head> 
<style type="text/css">
	.alert, #loader {
    	display: none;
    }

    .glyphicon, #itemCount {
    	font-size: 18px;
    }
</style>
<body class="grey lighten-3">
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="Email" placeholder="Email Address" type="text" required="">						
													<input name="Password" placeholder="Password" type="password" required="">										
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input placeholder="Name" name="Name" type="text" required="">
													<input placeholder="Email Address" name="Email" type="email" required="">	
													<input placeholder="Password" name="Password" type="password" required="">	
													<input placeholder="Confirm Password" name="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Create Account"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!---!><script>
		$('#myModal88').modal('show');
	</script>  
<!-->
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">High-Tech-Info<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
<?php 
require_once('../db/DbConnect.php');
            $db   = new DbConnect();
            $conn = $db->connect();

            require '../entities/customer.php';
            require '../core/customerC.php';
	    	/*$objCustomer = new customerC($conn);
	    	$objCustomer->setEmail('durgesh@gmail.com');
	    	$customer = $objCustomer->getCustomerByEmailId();*/
//session_start();

	    	//$_SESSION['cid'] = $customer['id'];

            require '../entities/cart.php';
            require '../core/cartC.php';
            $objCart = new cartC($conn);
			$objCart->setCid($_SESSION['id']);
			$cartItems = $objCart->getAllCartItems();

			$cartCss = 'display: none';
        $emptyCss = 'display: block';
        if (count($cartItems) > 0) {
            $cartCss = 'display: block';
            $emptyCss = 'display: none';
        }
  ?>		
			<div class="cart cart box_1"> 
					
					<button class="w3view-cart" disabled type="submit" name="submit" value="">
<a href="checkout.php"  style="color: white;"><span class="glyphicon glyphicon-shopping-cart"></span><sup id="itemCount"><?php echo count($cartItems);?></sup></a>
						 </button>
						
              
			</div>   
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="act">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="products.html">Mobile Phones</a></li>
											<li><a href="products.html">Mp3 Players <span>New</span></a></li> 
											<li><a href="products.html">Popular Models</a></li>
											<li><a href="products.html">All Tablets<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accessories</h6>
											<li><a href="products1.html">Laptop</a></li>
											<li><a href="products1.html">Desktop</a></li>
											<li><a href="products1.html">Wearables <span>New</span></a></li>
											<li><a href="products1.html"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.html">Tv</a></li>
											<li><a href="products2.html">Camera</a></li>
											<li><a href="products2.html">AC</a></li>
											<li><a href="products2.html">Grinders</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.html">About Us</a></li> 
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="icons.html">Web Icons</a></li>
								<li><a href="codes.html">Short Codes</a></li>     
							</ul>
						</li>  
						<li><a href="mail.html">Mail Us</a></li>
												<li><a href="historique.php">historique achats</a></li>

					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

************************************************

 <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
            <div id="result"></div>
        </div>
        <center><img src="images/loader.gif" id="loader"></center>
    </div>
*
    <div id="fullCart" class="row" style="<?=$cartCss?>">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Workshop</th>
                    <th>Seats</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <td>
                        <button id="clearItems" type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span> Clear
                        </button>
                    </td>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $subTotal   = 0;
                        $quantity   = 0;
                        $tax        = 10;
                        foreach ($cartItems as $key => $cartItem) {
                          $subTotal += $cartItem['totalAmount'];
                          $quantity += $cartItem['quantity'];
                     ?>
                <tr id="item_<?= $cartItem['id']; ?>">
                    <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../back-end/<?= $cartItem['image']; ?>" style="width: 72px; height: 72px;"> </a>
                            <div style="padding-left: 10px;" class="media-body">
                                <h4 class="media-heading"><a href="#"><?= $cartItem['title']; ?></a></h4>
                               
                            </div>
                        </div>
                    </td>
                    <td class="col-sm-1 col-md-1" style="text-align: center">
                        <select onchange="updateCart(<?= $cartItem['pid']; ?>, <?= $cartItem['id']; ?>)" class="form-control" id="seat_<?= $cartItem['id']; ?>">
                            <?php 
                                for ($i=1,$f=11; $i < $f ; $i++) { 
                            ?>
                            <option value="<?= $i; ?>" <?php echo ($i == $cartItem['quantity']) ? "selected" : ''; ?>><?= $i; ?></option>
                        <?php } ?>
                        </select>
                        
                    </td>
                    <td class="col-sm-1 col-md-1 text-center">
                        <strong><span id="price">
<?php
$promid=$cartItem['pid'];
$sql="SELECT * from promotion where idproduit =$promid ";
$db = config::getConnexion();
$idPromo=$db->query($sql);
$prix = 0;
foreach($idPromo as $nn){
 $prix = $nn['pourcentage'];
 $date_debut=$nn['datedebut'];
 $date_fin=$nn['datefin'];
}
?>
<?php
if($prix!=0){
 ?>                        	
<del><?php echo number_format($cartItem['prix'],2)  ?> TND</del> 
                        	<?= number_format($cartItem['prix']-($cartItem['prix']*($prix/100)),2); ?> TND</span>
                        </strong>
                        <?php } ?>
<?php  if ($prix==0) {    ?>  
	<?= number_format($cartItem['prix'],2); ?> </span>
                        </strong>
<?php }  ?>
                    </td>
                    <td class="col-sm-1 col-md-1 text-center">
                        <strong><span id="totalPrice_<?= $cartItem['id']; ?>"><?= number_format( $cartItem['totalAmount'], 2 );  ?>TND</span>
                        </strong>
                    </td>
                    <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger" onclick="removeItem(<?= $cartItem['id']; ?>)">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button>
                    </td>
                </tr>
            <?php } ?>
                <tr>
                    <td colspan="4" align="right">Subtotal</td>
                    <td class="text-right">
                        <strong><span style="font-size: 18px;">&#x20b9;</span>
                            <span id="subTotal"><?= number_format( $subTotal, 2 ); ?></span>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="right">Taxes</td>
                    <td class="text-right">
                        <strong><span style="font-size: 18px;">&#x20b9;</span>
                            <span id="taxes"><?= number_format( $tax * $quantity, 2 ); ?></span>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="right">Total</td>
                    <td class="text-right">
                        <strong><span style="font-size: 18px;">&#x20b9;</span>
                            <span id="finalPrice"><?= number_format( $subTotal+($tax * $quantity), 2 ); ?></span>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="right">
                        <a href="index.php" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> buy products
                        </a>
                    </td>
                    <td >
<a href="checkoutf.php" class="btn btn-success"> Checkout <span class="glyphicon glyphicon-play"></span></a>  
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
*******************************
    <div id="emptyCart" class="row" style="<?=$emptyCss?>">
        <div class="col-md-12 text-center">
            <p><strong>Your cart is empty. <a href="index.php">Click here</a> to buy products.</strong></p>
        </div>
    </div>


**************************************
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>you can reach us through this also .</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>23 Avenue habib chaker, <span>Mourouj 3.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">High-Tech-Info@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+216 54 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="mail.html">Contact Us</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="faq.html">FAQ's</a></li>
						<li><a href="products.html">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="products.html">Mobiles</a></li>
						<li><a href="products1.html">Laptops</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products1.html">Wearables</a></li>
						<li><a href="products2.html">Kitchen</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="index.html">Home</a></li>
						<li><a href="products.html">Today's Deals</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2017 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
  
</body>
<script type="text/javascript">
    function updateCart(pId, cartId) {
        console.log($('#seat_'+cartId).val())
        $('#loader').show();
        $.ajax({
            url: "action.php",
            data: "wId=" + pId + "&action=update&quantity="+$('#seat_'+cartId).val(),
            method: "post"
        }).done(function(response) {
            console.log(response)
            var data = JSON.parse(response);
            $('#loader').hide();
            $('.alert').show();
            if(data.status == 0) {
                $('.alert').addClass('alert-danger');
                $('#result').html(data.msg);
            } else {
                $('.alert').addClass('alert-success');
                $('#result').html(data.msg);
                $('#totalPrice_'+cartId).text( data.data.totalPrice );
                $('#subTotal').text( data.data.subTotal);
                $('#taxes').text( data.data.taxes);
                $('#finalPrice').text( data.data.finalPrice);
            }
        })
    }

    function removeItem(cartId) {
        $('#loader').show();
        $.ajax({
            url: "action.php",
            data: "cartId=" + cartId + "&action=remove",
            method: "post"
        }).done(function(response) {
            console.log(response);
            var data = JSON.parse(response);
            $('#loader').hide();
            $('.alert').show();
            if(data.status == 0) {
                $('.alert').addClass('alert-danger');
                $('#result').html(data.msg);
            } else {
                $('.alert').addClass('alert-success');
                $('#result').html(data.msg);
                $('#item_'+cartId).remove();
                $('#itemCount').text( data.data.itemCount);

                if (data.data.itemCount == 0.00) {
                    $('#fullCart').hide();
                    $('#emptyCart').show();
                } else {
                    $('#subTotal').text( data.data.subTotal);
                    $('#taxes').text( data.data.taxes);
                    $('#finalPrice').text( data.data.finalPrice);
                }
            }
        })
    }

    $('#clearItems').click(function(){
        $('#loader').show();
        $.ajax({
            url: "action.php",
            data: "action=clear",
            method: "post"
        }).done(function(response) {
            console.log(response);
            var data = JSON.parse(response);
            $('#loader').hide();
            $('.alert').show();
            if(data.status == 0) {
                $('.alert').addClass('alert-danger');
                $('#result').html(data.msg);
            } else {
                $('.alert').addClass('alert-success');
                $('#result').html(data.msg);

                $('#itemCount').text( 0 );
                $('#fullCart').hide();
                $('#emptyCart').show();
            }
        })
    })

</script>
</html>