<?php
session_start();
require('src/models/Article.php');


if (!isset($_SESSION["admin"]) && empty($_SESSION["admin"])) {
    header("Location: views/login.php");
}

$articles = getArticles();

// On charge la vue
require('views/admin/homepage.php');