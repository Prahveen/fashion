<?php
include '../core/init.php';
	
	if(mysql_query("CREATE TABLE Persons	

(
ID int NOT NULL AUTO_INCREMENT,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Address varchar(255),
City varchar(255),
PRIMARY KEY (ID)
)

")){echo 'ela';}else{echo mysql_error();}

	
?>

