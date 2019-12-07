<?php 
	require_once('../db/DbConnect.php');
    $db   = new DbConnect();
    $conn = $db->connect();

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
		 			<th><a href="panier_commande.php">go back</a></th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php 
		 			foreach ($produit_transs as $key => $produit_trans) {
		 		?>
		 		<tr>
		 			<td><?= $produit_trans['id']; ?></td>
		 			<td><img width="60" height="30" src="images/<?= $produit_trans['image']; ?>"> <?= $produit_trans['nom']; ?></td>
		 			<td><?= $produit_trans['quantity']; ?></td>
		 			<td><?= ($produit_trans['quantity'] * $produit_trans['prix']); ?></td>
		 			<td><?= $produit_trans['nom']; ?></td>
		 			<td><?= $produit_trans['createdOn']; ?></td>
		 		</tr>
		 	<?php } ?>
		 	</tbody>
		</table>
	</div>

</body>
</html>