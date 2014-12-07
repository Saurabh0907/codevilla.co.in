<?php
$link = mysql_connect('mysql.hostinger.in', 'u887678322_root', 'majorproject');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}


function remote_get_contents($url)
{
        if (function_exists('curl_get_contents') AND function_exists('curl_init'))
        {
                return curl_get_contents($url);
        }
        else
        {
                // A litte slower, but (usually) gets the job done
                return file_get_contents($url);
        }
}

function curl_get_contents($url)
{
        // Initiate the curl session
        $ch = curl_init();        
        // Set the URL
        curl_setopt($ch, CURLOPT_URL, $url);
        // Removes the headers from the output
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // Return the output instead of displaying it directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Execute the curl session
        $output = curl_exec($ch);
        // Close the curl session
        curl_close($ch);
        // Return the output as a variable
        return $output;
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


	$username	= 'saurabhgarg09';
	$password	= 'codevilla.co.in';
	$api_url	= 'http://api.verify-email.org/api.php?';
	$url		= $api_url . 'usr=' . $username . '&pwd=' . $password . '&check=' . $email;
	$object		= json_decode(remote_get_contents($url));
	
	$status = $object->verify_status?'GOOD':'BAD';

	if(strcmp($status,"BAD")==0)
	{
		echo '0';
	}	

	else
	{	$id = rand();
		$id = $id."";
		$id = $name.$id;
		
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
		}
?>