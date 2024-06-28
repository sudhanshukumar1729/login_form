<?php
    if($_SERVER["REQUEST_METHOD"]=="post"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username=='sudhanshu'){
            echo "user login";
        }

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "login";

        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if($conn->connect_error){
            echo "connection failed";
        }

        $stmt = $conn->prepare("SELECT * FROM login WHERE username='$username' AND password='$password'");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows==1){
            echo "login successfull";
        }
        else{
            echo "invalid user";
        }
        
    }
?>