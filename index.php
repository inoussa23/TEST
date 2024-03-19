<?php
try {
  // Ternaire
  $controller = isset($_GET["controller"]) ? $_GET["controller"] : "homepage";
  include("src/controllers/" . $controller . ".php");
  
} catch (Exception $e) {
  $message = $e->getMessage();
  require("views/404.php");
}
