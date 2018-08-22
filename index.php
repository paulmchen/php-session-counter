<?php

//simple counter to test sessions. should increment on each page reload.
session_start();
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;

echo "This is a simple test page to display a counter in http session which actually stored in our DCS.<br> ";
echo $count;

$_SESSION['count'] = ++$count;


?>
