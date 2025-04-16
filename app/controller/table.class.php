<?php 

include 'database.class.php';

class Table extends Db
{
	public  function getAll($tableName, $where = null, $sort = null,$limit = null) {
		
		$sql_where = $where == null ? "" : "AND $where";
		$sql_sort = $sort == null ? "" : "ORDER BY $sort";
		$sql_limit = $limit == null ? "" : "LIMIT $limit";

		$sql= "SELECT * FROM $tableName WHERE active=1 $sql_where $sql_sort $sql_limit";

		$stmt = $this->connexion()->query($sql);

		return $stmt;
	}

	public function commenter($id_livre,$pseudo,$message) {
		$sql = "INSERT INTO commentaire(id, id_livre, pseudo, message, dateAjout, active) VALUES (NULL, '$id_livre','$pseudo','$message',NOW(), '1')";

		$this->connexion()->exec($sql);
	}

	public function contactez($pseudo,$email, $message) {
		$sql = "INSERT INTO contact(id, pseudo, email, message, dateAjout, active) VALUES (NULL,'$pseudo', '$email','$message',NOW(), '0')";

		$this->connexion()->exec($sql);
	}

	
}

?>

