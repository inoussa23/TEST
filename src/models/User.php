
<?php
class User{

    public string $id;
    public string $name;
    public string $email;
    public string $password;
}

function createUser($name, $email, $password)
{

    if (require("src/lib/database.php")) {

        $statement = $db->prepare("INSERT INTO users
         (name, email, password) VALUES (?,?, ?)");

        $affectedLines =  $statement->execute(
            [$name, $email, $password]
        );

        return ($affectedLines > 0);
    }
}


function getUser($email)
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("SELECT * FROM users WHERE email = ?");
        $affectedLines = $statement->execute([$email]);

        if($affectedLines > 0){
            $data = $statement->fetch();

            // $user = new User();

            // $user->id = $data['id'];
            // $user->name = $data['name'];
            // $user->email = $data['email'];
            // $user->password = $data['password'];

            return $data;
        }else{
            return false;
        }
    }
}























// function getUser($email)
// {
//     if (require("src/lib/database.php")) {
//         $statement = $db->prepare("SELECT * FROM users WHERE email = ?");
//         $affectedLines = $statement->execute([$email]);

//         if (!$affectedLines) {
//             $row = $statement->fetch();
//             $user = new User();
//             $user->id = $row['id'];
//             $user->name = $row['name'];
//             $user->email = $row['email'];
//             $user->password = $row['password'];

//             exit(var_dump($user));

//             return $user;
//         } else {
//             return false;
//         }
//     }
// }
