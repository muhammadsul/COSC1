<?php

/* database connection stuff here
 * 
 */

function db_connect() {
    try {
        $dbh = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
    } catch (PDOException $e) {
   			$erorrs = $e->getMessage();
       }
               return $dbh;

}
