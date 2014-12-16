<?php
if (!file_exists('temp/')) {
    mkdir('temp/', 0777, true);
}

$name="ss1.txt";
$name = "temp/".($name);
$content = "kldfgjkd";
if(!(file_exists($name)))
{
file_put_contents($name, $content);
}

?>