<?PHP
class categorie{
	private $id;
	private $nom;
	
	
	function __construct($id,$nom){
		$this->id=$id;
		$this->nom=$nom;
	}
	function getid(){
		return $this->id;
	}
	
	function getnom(){
		return $this->nom;
	}
}
	
	
?>