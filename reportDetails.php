<?php 
	require_once('../db/DbConnect.php');
    $db   = new DbConnect();
    $conn = $db->connect();
include"../config.php";	

            require '../entities/produit_trans.php';
            require '../core/produit_transC.php';
                $objproduit_trans = new produit_transC($conn);
    $objproduit_trans->settId($_GET['tid']);
	$produit_transs = $objproduit_trans->getproduit_transsByTid();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../library/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<table class="table table-striped" cellpadding="10%">
		 	<caption><strong>detaillée</strong></caption>
		 	<thead>
		 		<tr>
		 			<th>#id</th>
		 			<th>Title</th>
		 			<th>Quantity</th>
		 			<th>Amount</th>
		 			<th>bought By</th>
		 			<th>purchase  Date</th>
		 			<th><a href="historique.php">go back</a></th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php 
		 			foreach ($produit_transs as $key => $produit_trans) {
		 		?>
		 		<tr>
		 			<td><?= $produit_trans['id']; ?></td>
		 			<td><img width="60" height="30" src="../back-end/<?= $produit_trans['image']; ?>"> <?= $produit_trans['nom']; ?></td>
		 			<td><?= $produit_trans['quantity']; ?></td>
<?php
$promid=$produit_trans['id'];
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
		<td><?= ($produit_trans['quantity'] * ($produit_trans['prix']-($produit_trans['prix']*($prix/100)))); ?></td>
		 			<td><?= $produit_trans['nom']; ?></td>
		 			<td><?= $produit_trans['createdOn']; ?></td>
		 		</tr>
		 	<?php } ?>
		 	</tbody>
		</table>
	</div>

</body>
</html>