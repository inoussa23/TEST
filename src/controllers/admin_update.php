<?php

session_start();

require("src/models/Article.php");

if (!isset($_SESSION["admin"]) && empty($_SESSION["admin"])) {
    header("Location: views/login.php");
}

$title =null;
$subtitle = null;
$content = null;




if (
    isset($_POST["title"]) && !empty($_POST["title"])
    && isset($_POST["subtitle"]) && !empty($_POST["subtitle"])
    && isset($_POST["content"]) && !empty($_POST["content"])
) {
    $title = htmlspecialchars($_POST["title"]);
    $subtitle  = htmlspecialchars($_POST["subtitle"]);
    $content  = htmlspecialchars($_POST["content"]);
} else {
    throw new Exception("informations incorrectes");
}
$id = $_GET["id"];
$success = updateArticle(
    $title,
    $subtitle,
    $content,
   $id,
);

if (!$success) {
    throw new Exception("Impossible de modifier cet article!");
    // var_dump("mm");
} else {
    //Redirige sur la page login.php
    // header(header: "Location: index.php?controller=admin_homepage");
    var_dump('cool');
}

