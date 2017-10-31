<?php


function db_connect() {
    try {
        $db = new PDO('mysql:127.0.0.1;=$servername;dbname=COSC', 'root', '');
        return $db;
    } catch (PDOException $ex) {
	echo $errors . "<br>" . $ex->getMessage();
    }
}
