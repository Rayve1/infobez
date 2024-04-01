<?php
    require_once 'db.php';

    if ( isset( $_GET['login'] ) ) {
        /*  
            SELECT * FROM users WHERE `login`='admin' -- ' AND `password`='1'
            login = "admin' -- "
        */
        
            $query = "SELECT * FROM users WHERE `login`='$_GET[login]' AND `password`='$_GET[password]'";
            echo $query."<br>";
            $a = mysqli_query($connect, $query);
            if ($a) {
                echo "<pre>";
                print_r($a = mysqli_fetch_assoc($a));
                echo "</pre>";
                
                foreach ($a as $key => $value) {
                    echo $key." = ".$value."<br>";
                }
            } else {
                echo "Ошибка!!!";
            }
        
        /*
            $login = mysqli_real_escape_string( $connect, htmlspecialchars($_GET['login']) );
            $password = mysqli_real_escape_string( $connect, htmlspecialchars($_GET['password']) );
            $query = "SELECT * FROM users WHERE `login`='$login' AND `password`='$password'";
            echo $query."<br>";
            $a = mysqli_query($connect, $query);
            if ($a) {
                echo "<pre>";
                print_r($a = mysqli_fetch_assoc($a));
                echo "</pre>";

                foreach ($a as $key => $value) {
                    echo $key." = ".$value."<br>";
                }
            } else {
                echo "Ошибка!!!";
            }
        */
        }   
?>
<form action="?" method="GET">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Войти">
</form>