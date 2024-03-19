<?php

session_start();

require('src/models/Article.php');

if (!isset($_SESSION["admin"]) && empty($_SESSION["admin"])) {
    header("Location: views/login.php");
}


$id = $_GET["id"];


$success = deleteArticle($id);

if (!$success) {
    throw new Exception("Identifiant invalide");
} else {
    header("Location: index.php?controller=admin_homepage");
}
