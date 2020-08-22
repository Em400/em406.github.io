CREATE TABLE users{
	
	username VARCHAR(50) NOT NULL UNIQUE;
	password VARCHAR(255) NOT NULL;
	password2 VARCHAR(256) NOT NULL;
}

<?php


$message ="";

if(count($_POST)) {
	
	$conn = mysqli_connect("localhost","root","","phppot_examples");
	
	mysqli_query($conn,"INSERT INTO users VALUES(EmilS,theater123,puppet123)");
	
	$count = mysqli_num_rows($result);
	
	if($count==0){
		
		$message="Invalid username or password";
	}
	else{
		
		$message = "You are successfully authenticated";
	}
}
