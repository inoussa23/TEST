<?php
session_start();

require("src/models/User.php");

$email = null;
$password = null;

if (
    isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["password"]) && !empty($_POST["password"])
) {
    $email = htmlspecialchars($_POST["email"]);
    $password  = htmlspecialchars($_POST["password"]);
} else {
    throw new Exception("vos informations sont incorrectes");
}

$user = getUser($email);
if ($user) {
    if (password_verify($password, $user["password"])) {
        if ($user['role'] === 'admin'){ 
        $_SESSION["admin"] = $user;
        header("Location: index.php?controller=admin_homepage");
    }
    else {
        $_SESSION["user"] = $user;
        header("Location: index.php");
    }
    } else {
        throw new Exception("Aucun utilisateur trouvé");
    }
} else {
    throw new Exception("Aucun utilisateur trouvé");
}



























// require_once("src/models/User.php");

// $email = null;
// $password = null;

// if (
//     isset($_POST['email']) && !empty($_POST['email'])
//     && isset($_POST['password']) && !empty($_POST['password'])
// ) {

//     $email = htmlspecialchars($_POST["email"]);
//     $password = htmlspecialchars($_POST["password"]);
// } else {
//     throw new \Exception("Informations incorrectes");
// }

// $user = getUser($email);

// if ($user) {
//     if (password_verify($password, $user->password)) {

//         $_SESSION["user"] = $user;
//         header("Location: index.php");

//     } else {

//         throw new \Exception("xxAucun utilisateur trouvé");

//     }
// } else {
//     throw new \Exception("Aucun utilisateur trouvé");
// }
