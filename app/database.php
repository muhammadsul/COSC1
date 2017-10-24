<?php

/* database connection stuff here
 * 
 */

function db_connect() {
    try {
    	$conn = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    
    }
	catch(PDOException $ex){
   			$erorrs = $ex->getMessage();
    	}
    $conn = null;	
}
