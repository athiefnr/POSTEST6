<?php
try{
		$dbh = new PDO ('mysql:host=localhost;
                        dbname=cards',
                        "root",
                        "");

		$dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch (PDOException $e){
		print "error :" . $e->getMessage() . "<br>";
		die();
}
?>