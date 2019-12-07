<?PHP
require_once 'C:/wamp64/www/web/entities/client.php';
require_once 'C:/wamp64/www/web/core/clientC.php';
// var_dump($_POST);
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['username']) and isset($_POST['adresse']) and isset($_POST['tel']) and isset($_POST['password'])) {
	// echo "1";
	$d=date("Y-m-j");
$client1=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['username'],$_POST['adresse'],
	$_POST['tel'],$_POST['password'],$d,"client");
// echo "2";
$clientC=new clientC();
$clientC->ajouterclient($client1);
header('location: index.php' );
// echo "3";

	
}else{
	echo "vérifier les champs";
}
//*/

?>