<?php

class Reports {
    
    public function __construct() {   
    }
	public function remindersSrch () {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM notes
                                WHERE username = :name ");
        $statement->bindValue(':name', $_SESSION['name']);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}

}
