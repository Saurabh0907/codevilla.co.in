<?php
$link = $_GET['src'];
$type = $_GET['type'];
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