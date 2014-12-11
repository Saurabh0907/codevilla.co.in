<?php
include 'Database_Connect.php';

		
		$name = htmlentities($_POST['name']);
			$name = mysql_escape_string($name);
		$tel = htmlentities($_POST['tel']);
			$tel = mysql_escape_string($tel);	
		$email = htmlentities($_POST['email']);
			$email = mysql_escape_string($email);
		$password = htmlentities($_POST['password']);

		$id = rand();
		$id = $id."";
		$id = $name.$id;
		
		$path = 'files/'.$id.'/';
		
		mkdir($path, 0777, true);

		
		$new = strrev($password);
		$password = hash("sha512", $new); 
		
		$hash1 = md5( rand(1000,2000) );
		$val = 0;
		
		$subject = 'Confirm Your Registration';
		$message = '
		<h5>Greetings,<h5><br>Thankyou for registring at CodeVilla.co.in<br>Click on the below link in order to confirm your registration and continue coding<br>'.
		'<span class="skimlinks-unlinked">http://www.codevilla.co.in/verify.php?email='.$email.'&hash='.$hash1.'</span>';
		$headers = 'From: noreply@codevilla.co.in' . "\r\n";
		mail($email, $subject, $message, $headers);
		
		
		$query = "insert into user1(name,phone,email,password,identity,hash,active) values('$name','$tel','$email','$password','$id','$hash1','$val')";
		$result = mysql_query($query);

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
					  }
					echo '1';
?>