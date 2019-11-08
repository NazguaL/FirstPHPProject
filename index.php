<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
    <form action="action.php" method="GET">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"><br>
        <button type="submit">Submit</button>

    <?php
        class User {
            public $name;
            public $surname;
            private $email;
            private $login;
            private $password = "None";

            public function __construct($name, $surname, $login) {
                $this->name = $name;
                $this->surname = $surname;
                $this->login = $login;
            }

            public function ShowAll() {
                return $this->password;
            }
        }

        $admin = New User('Admin', 'Adminov', 'admin');

        $user = New User('User', 'Userov', 'user');
        $user->surname = 'Userovich';

//        if ($_SESSION["name"] == "")
//            echo "<br>Enter your name!";
//        echo $_SESSION["name"].'<br>';
//        echo $_SESSION['email'].'<br>';
        //session_destroy();
        if ($_COOKIE["name"] == "")
            echo "<br>Enter your name!";
        echo $_COOKIE["name"].'<br>';
        echo $_COOKIE['email'].'<br>';
        setcookie("name", $_GET["name"], time() - 3600);
        setcookie("email", $_GET["email"], time() - 3600);
        $date = date("H:i:s");
        echo $date.'<br>';
        echo $_SERVER["SERVER_ADDR"];
        echo '<br>'.'<br>';
        echo $admin->name.'<br>';
        echo $admin->surname.'<br>';
        echo $admin->ShowAll();
        echo '<br>'.'<br>';
        echo $user->name.'<br>';
        echo $user->surname.'<br>';
    ?>
    </form>
</body>

</html>

