
<?php
session_start();
?>
<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>gesion panier-commande</title>
    <link rel="icon" href="images/icone.ico">


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<link href='style.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script.js' type='text/javascript'></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link href='style.css' rel='stylesheet' type='text/css'>
        <script src='script.js' type='text/javascript'></script>
</head>
<style type="text/css">
   .au-btn-filter:hover {
    background: black;
    color: white;
} 
</style>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="panier_commande.php">
                                <i class="fas fa-table"></i>panier_commande</a>
                        </li>
                                                 <li>
<a href="promotion.php">
<i class="far fa-check-square"></i>Promotion</a>
</li>
<li>
<a href="fidelite.php">
<i class="fas fa-calendar-alt"></i>Fidelite</a>
</li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Mailbox</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>


                        <li>
                          <a href="table.php">
                            <i class="fas fa-table"></i>Gerer Clients</a>
                        </li> 

  <li >
                            <a href="produit.php">
                                <i class="fas fa-tachometer-alt"></i>Add Product</a>
                            
                        </li>




<li>

 <a href="listeprod.php">
                                <i class="fas fa-chart-bar"></i>Liste produits</a>
                        </li>


  <li>
                            <a href="categorie.php">
                                <i class="fas fa-chart-bar"></i>Add Categorie</a>
                      
                        </li>



<li  >
                         <a href="listecat.php">
                                <i class="fas fa-chart-bar"></i>Liste Cat</a>
                        </li>
 
                         <li class="active">
                            <a href="panier_commande.html">
                                <i class="fas fa-table"></i>panier_commande</a>
                        </li>
                                                                        <li>
<a href="promotion.php">
<i class="far fa-check-square"></i>Promotion</a>
</li>
<li>
<a href="fidelite.php">
<i class="fas fa-calendar-alt"></i>Fidelite</a>
</li>
                        <li >
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Mailbox</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                              <div class="content">
                                                    <h6>mohamed jbali</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                 <div class="content">
                                                    <h6>anwer mosbah</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
<div class="content">
                                                    <p> reclamation number 111 </p>
                                                    <span>mourouj 1 , 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>reclamation number 127</p>
                                                    <span>ariana , Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>reclamation number 124</p>
                                                    <span>el kram, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>client  account  has been blocked</p>
                                                    <span class="date">november 4, 2019 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/<?php echo ($_SESSION['prenom']);?>.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo ($_SESSION['prenom']);?> <?php echo ($_SESSION['nom']);?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/<?php echo ($_SESSION['prenom']);?>.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                 <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo ($_SESSION['prenom']);?> <?php echo ($_SESSION['nom']);?></a>
                                                    </h5>
                                                    <span class="email"><?php echo ($_SESSION['email']);?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
******************************************  
<h4>triee par :</h4>
<form action="" method="GET" >          
<table>
<tr>
<td><input type="submit" name="bouton" class="au-btn-filter" value="prixD"><i class=" fa fa-arrow-down" type="submit" name="bouton" value="prixD" ></i> </td>
<td><input type="submit" name="bouton" class="au-btn-filter" value="prixA"><i class=" fa fa-arrow-up" type="submit" name="bouton" value="prixD" ></i></td>
</tr>
<tr>
<td><input type="submit" name="bouton" class="au-btn-filter" value="anneeD"><i class=" fa fa-arrow-down" type="submit" name="bouton" value="prixD" ></i> </td>
<td><input type="submit" name="bouton" class="au-btn-filter" value="anneeA"><i class=" fa fa-arrow-up" type="submit" name="bouton" value="prixD" ></i></td>
</tr>    
</table>
</form>
*********************************************
<form method="POST" action=""> 
     Rechercher une commande : <input type="text" name="recherche">
     <input type="submit" value="search"> 
     </form>
**********************************************
                            <div class="row" id="HTMLtoPDF">
                                <h2 class="title-1 m-b-25" style="margin-left: 41%">commandes </h2> 
                                <div class="table-responsive table--no-card m-b-40">

                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>

                                            <tr>
                                                <th>order ID </th>
                                                <th>client ID</th>
                                                <th>quantity</th>
                                                <th class="text-right">total price</th>
                                                <th class="text-right">order status</th>
                                                <th class="text-right">created ON</th>
                                                <th class="text-right">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
require_once('../db/DbConnect.php');
            $db   = new DbConnect();
            $conn = $db->connect();
require "../entities/transaction.php";
require "../core/transactionC.php";
                $objcommandes = new transactionC($conn);

$colTab1 = ['prixD'];
$colTab2 =['anneeD'];
$colTab3 = ['prixA'];
$colTab4 =['anneeA'];
/////////////////////////////////////
// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "webb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

if(isset($_POST['recherche']))
{
    $valueToSearch = $_POST['recherche'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `commandes` WHERE CONCAT(`id`, `cid`, `quantity`, `amount`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
     while($commande = mysqli_fetch_array($search_result)):
?>
<tr>
<td><a href="reportDetails.php?tid=<?= $commande['id']; ?>"><?php echo $commande['id'];  ?></a></td>
                                                <td><?php echo $commande['cid'];  ?></td>
                                                <td><?php echo $commande['quantity'];  ?> </td>
                                                <td class="text-right"><?php echo $commande['amount'];  ?>TND</td>
                                                <td class="text-right"><?php echo $commande['orderStatus'];  ?>   
                                                </td>
                                                <td class="text-right"><?php echo $commande['createdOn'];  ?>TND</td>
                                                <td class="text-right"  class="col-sm-1 col-md-1">
             <span class='delete' id='del_<?php echo $commande['id']; ?>'>Delete</span></td>                                     
                                            </tr>
 <?php endwhile; } ?>

 <?php    
 if (!isset($_POST['recherche'])) {
     
if (isset($_GET['bouton']) AND in_array($_GET['bouton'], $colTab1))
      {
         $commandes = $objcommandes->getAlltransactionsAD();
      }
else if (isset($_GET['bouton']) AND in_array($_GET['bouton'], $colTab2))
      {
         $commandes = $objcommandes->getAlltransactionsanD();
      }
elseif (isset($_GET['bouton']) AND in_array($_GET['bouton'], $colTab3))
      {
         $commandes = $objcommandes->getAlltransactionsAA();
      }
else if (isset($_GET['bouton']) AND in_array($_GET['bouton'], $colTab4))
      {
         $commandes = $objcommandes->getAlltransactionsanA();
      }  
                  
      else
      {

         $commandes = $objcommandes->getAlltransactions();
      }
               

foreach ($commandes as $key => $commande) {

?>
                                            <tr>
<td><a href="reportDetails.php?tid=<?= $commande['id']; ?>"><?php echo $commande['id'];  ?></a></td>
                                                <td><?php echo $commande['cid'];  ?></td>
                                                <td><?php echo $commande['quantity'];  ?> </td>
                                                <td class="text-right"><?php echo $commande['amount'];  ?>TND</td>
                                                <td class="text-right"><?php echo $commande['orderStatus'];  ?>   
                                                </td>
                                                <td class="text-right"><?php echo $commande['createdOn'];  ?>TND</td>
                                                <td class="text-right"  class="col-sm-1 col-md-1">
             <span class='delete' id='del_<?php echo $commande['id']; ?>'>Delete</span></td>                                     
                                            </tr>
                                        <?php } }  ?>


   



 

                                        </tbody>
                                    </table>
                                    
                                </div>

                        </div>

<!-- here we call the function that makes PDF -->
 <button class="au-btn-filter"> <a href="#" onclick="HTMLtoPDF()">Download PDF</a> </button><br>



*********************************************
             </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- these js files are used for making PDF -->
    <script src="js/jspdf.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>
</body>

</html>
<!-- end document-->
