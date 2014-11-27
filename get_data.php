<?php
$link = $_GET['src'];
$type = $_GET['type'];

if($type=="DROP/")
		{
		$type= substr($type, 0, -1);
		}
if($type=="DROP")
		{
		$link = "https://".$link;
		}
$data="";
$lines = file($link);

foreach($lines as $line_num => $line)
{
if($line==' ')
{}
else
{
$data = $data.$line;
}
}
echo $data;
?>