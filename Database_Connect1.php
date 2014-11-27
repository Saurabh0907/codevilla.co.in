<?php

$link = mysql_connect('mysql.hostinger.in', 'u887678322_root', 'majorproject');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('u887678322_code1', $link);
if (!$db_selected) {
    die ('Can\'t use Codeonline : ' . mysql_error());
}

?>