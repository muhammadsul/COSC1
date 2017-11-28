<?php

class Profile {
    
    public function __construct() {  

     
    }
	public function personalDetails ($firstNM,$lastNM,$phoneN,$birthD) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO personalDetails(FirstName,LastName, PhoneNumber,BirthDate) 
            values (:firstNM,:lastNM,:phoneN,:birthD)");
        $statement->bindParam(':firstNM',$firstNM);
        $statement->bindParam(':lastNM',$lastNM);
        $statement->bindParam(':phoneN',$phoneN);
        $statement->bindParam(':birthD',$birthD);
        $statement->execute();
    }

}
