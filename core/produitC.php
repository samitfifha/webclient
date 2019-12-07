<?php 
	class produitC                                                                              extends produit
	{

		public function getAllproduits() {
			$sql  = "SELECT * FROM produit";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->execute();
			$workshops = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $workshops;	
		}

		public function getproduitById() {
			$sql  = "SELECT * FROM produit WHERE id = :wid";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->bindParam('wid', $this->id);
			$stmt->execute();
			$workshop = $stmt->fetch(PDO::FETCH_ASSOC);
			return $workshop;	
		}
	}
 ?>