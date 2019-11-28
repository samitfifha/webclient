<?php 
	require_once('../db/DbConnect.php');
    $db   = new DbConnect();
    $conn = $db->connect();

            require '../entities/workshopseat.php';
            require '../core/workshopseatC.php';
                $objWseat = new workshopSeatC($conn);
    $objWseat->settId($_GET['tid']);
	$workshopSeats = $objWseat->getWorkshopSeatsByTid();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../library/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<table class="table table-striped">
		 	<caption><strong>detaillée</strong></caption>
		 	<thead>
		 		<tr>
		 			<th>#id</th>
		 			<th>Title</th>
		 			<th>Quantity</th>
		 			<th>Amount</th>
		 			<th>bought By</th>
		 			<th>purchase  Date</th>
		 			<th><a href="payer.php">go back</a></th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php 
		 			foreach ($workshopSeats as $key => $workshopSeat) {
		 		?>
		 		<tr>
		 			<td><?= $workshopSeat['id']; ?></td>
		 			<td><img width="60" height="30" src="images/<?= $workshopSeat['image']; ?>"> <?= $workshopSeat['title']; ?></td>
		 			<td><?= $workshopSeat['quantity']; ?></td>
		 			<td><?= ($workshopSeat['quantity'] * $workshopSeat['price']); ?></td>
		 			<td><?= $workshopSeat['name']; ?></td>
		 			<td><?= $workshopSeat['createdOn']; ?></td>
		 		</tr>
		 	<?php } ?>
		 	</tbody>
		</table>
	</div>

</body>
</html>