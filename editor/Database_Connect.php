<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('codeonline', $link);
if (!$db_selected) {
    die ('Can\'t use Codeonline : ' . mysql_error());
}
?>