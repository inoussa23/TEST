<?php
session_start();

$_SESSION[] = []; // J'écrase l'ancienne session
session_destroy();

header('location: views/login.php');

