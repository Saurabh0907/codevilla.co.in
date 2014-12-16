<?php
$link = mysql_connect('mysql.hostinger.in', 'u887678322_root', 'majorproject');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}


$db_selected = mysql_select_db('u887678322_code1', $link);
if (!$db_selected) {
    die ('Can\'t use Codeonline : ' . mysql_error());
}
		
		$name = htmlentities($_POST['name']);
			$name = mysql_escape_string($name);
		$tel = htmlentities($_POST['tel']);
			$tel = mysql_escape_string($tel);	
		$email = htmlentities($_POST['email']);
			$email = mysql_escape_string($email);
		$password = htmlentities($_POST['password']);

		$id = rand();
		$id = $id."";
		$nm1 = str_replace(" ","", $name);
		$id = $nm1.$id;
		
		$path = 'files/'.$id.'/';
		
		mkdir($path, 0777, true);

		
		$new = strrev($password);
		$password = hash("sha512", $new); 
		
		$hash1 = md5( rand(1000,2000) );
		$val = 0;
		
		$query = "insert into user1(name,phone,email,password,identity,hash,active) values('$name','$tel','$email','$password','$id','$hash1','$val')";
		$result = mysql_query($query);

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
					  }
					  
					echo '1';
					header('Location: http://codevilla.co.in');
?>