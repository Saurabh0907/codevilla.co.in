<?php	
$link = mysql_connect('mysql.hostinger.in', 'u887678322_root', 'majorproject');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('u887678322_code1', $link);
if (!$db_selected) {
    die ('Can\'t use Codeonline : ' . mysql_error());
}

$x = $_POST['email'];
	$x = mysql_escape_string($x);
$y = $_POST['password'];


$new = strrev($y);
$password = hash("sha512", $new); 

$login = mysql_query("SELECT * FROM user1 WHERE email='$x' and password='$password'");
$x = mysql_fetch_assoc($login);
if (mysql_num_rows($login) == 1) 
{
session_start();
$_SESSION['user_id'] = $x['identity'];
echo("1");
	//echo $login['name']." logined Successfully";
}
else {
	echo("2");
}

?>
