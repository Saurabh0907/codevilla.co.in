<?php
session_start();

$name = $_POST['name'];
$content = $_POST['content'];

if(isset($_SESSION['user_id']))
{
		$dir = "files/".$_SESSION['user_id']."/";
		if (!file_exists($dir)) {
			mkdir($dir, 0777, true);
			}		
		$name = $dir.($name);
}

else
{
		if (!file_exists('temp_files/')) {
			mkdir('temp_files/', 0777, true);
		}

		$name = "temp_files/".($name);
}



if(!(file_exists($name)))
{
file_put_contents($name, $content);
}
else
{
unlink($name);
file_put_contents($name, $content);
}

echo $name;
?>