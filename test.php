<?php
// page1.php

session_start();

echo 'Welcome to page #1';

$_SESSION['appName'] = 'needs';
$_SESSION['animal']   = 'cat';

?>