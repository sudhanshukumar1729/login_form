<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username=='sudhanshu'&&$password=='12345'){
            echo "user login<br>";
            echo $username;
        }
        else{
            echo "invalid user";
        }

        
    }
?>
