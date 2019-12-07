<?PHP
require_once 'C:/wamp64/www/web/entities/avis.php';
require_once 'C:/wamp64/www/web/core/avisC.php';
// var_dump($_POST);
if (isset($_POST['id_client']) and isset($_POST['description']) and isset($_POST['avis'])) {
	// echo "1";
	$d=date("Y-m-j");
$avis1=new avis($_POST['id_avis'],$_POST['id_client'],$_POST['description'],$_POST['avis']);
// echo "2";
$avisC=new avisC();
$avisC->ajouteravis($avis1);
header('location: profile.php' );
// echo "3";


}else{
	echo "vérifier les champs";
}
//*/

?>
