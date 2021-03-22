<?php
// page2.php

session_start();

echo 'Welcome to page #2<br />';

echo $_SESSION['appName']; // green
echo $_SESSION['animal'];   // cat

?>