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
		$tel = htmlentities($_POST['tel']);
		$email = htmlentities($_POST['email']);
		$password = htmlentities($_POST['password']);
		
		$id = rand();
		$id = $id."";
		$id = $name.$id;
		
		$path = 'files/'.$id.'/';
		
		mkdir($path, 0777, true);

		
		$new = strrev($password);
		$password = hash("sha512", $new); 

		
		$query = "insert into user(name,phone,email,password,identity) values('$name','$tel','$email','$password','$id')";
		$result = mysql_query($query);

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error() . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
					  }
					echo "You Have Registered Successfully";
?>