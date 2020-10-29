<?php
        require('connect.php');
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        echo $name;
        echo $email;
        echo $pass;

        $e_pass= password_hash($pass,PASSWORD_DEFAULT);
        echo$e_pass;

        if(password_verify($pass,$e_pass)){
            echo"0";};  
?>