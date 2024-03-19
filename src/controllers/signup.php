<?php
require("src/models/User.php");

$name = null;
$email = null;
$password = null;

if (
    isset($_POST["name"]) && !empty($_POST["name"])
    && isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["password"]) && !empty($_POST["password"])
) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password  = password_hash($_POST["password"], PASSWORD_DEFAULT);
} else {
    throw new Exception("vos informations sont incorrectes");
}

$success = createUser(
    $name,
    $email,
    $password
);

if (!$success) {
    throw new Exception("Impossible de creer votre compte");
    // var_dump("mm");
} else {
    //Redirige sur la page login.php
    header("Location: views/login.php");
}



























// require_once("src/models/User.php");

// $name = null;
// $email = null;
// $password = null;

// if (
//     isset($_POST['name']) && !empty($_POST['name'])
//     && isset($_POST['email']) && !empty($_POST['email'])
//     && isset($_POST['password']) && !empty($_POST['password'])
// ) {

//     $name = htmlspecialchars($_POST["name"]);
//     $email = htmlspecialchars($_POST["email"]);
//     $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
// }else{
//     throw new \Exception("Informations incorrectes");

// }

// $success = createUser($name, $email, $password);

// if (!$success) {
//     throw new \Exception("Impossible de creer votre compte");
// } else {
//     header("Location: views/login.php");
// }
