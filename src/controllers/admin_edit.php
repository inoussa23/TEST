<?php

session_start();

require_once("src/models/Article.php");

if (!isset($_SESSION["admin"]) && empty($_SESSION["admin"])) {
    header("Location: views/login.php");
}


$id = $_GET["id"];
$article = getArticle($id);


require("views/admin/edit.php");
