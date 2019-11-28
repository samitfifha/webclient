<?PHP
require_once 'C:/wamp64/www/web/front/entities/client.php';
require_once 'C:/wamp64/www/web/front/core/clientC.php';
// var_dump($_POST);
if (isset($_POST['idsup'])) {
	// echo "1";
// echo "2";
$clientC=new clientC();
$clientC->supprimerclient($_POST['idsup']);
header('location: table.php' );
// echo "3";

	
}else{
	echo "vérifier les champs";
}
//*/

?>