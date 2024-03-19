<?php
session_start();

// On charge le model Article ici 
require_once("src/models/Article.php");

$articles = getArticles();

// On charge la vue
require('views/homepage.php');