<?php

#check username, password name
if  (isset($_POST['username']) &&
    (isset($_POST['password']) &&
    (isset($_POST['name'])){

        $name = $_POST['name'];
        $password = $_POST['password'];
        $username = $_POST[username];

        $data = 'name' .$name.'&username='.$username;

        if(empty($name)){
            $em = "Name is required";

            header("Location :../../signup.php.error=$em");
            exit;
        }else if(empty($username)){
            $em = "Username is required";

            header("Location :../../signup.php.error=$em");
            exit;
        }else if(empty($password)){
            $em = "Password is required";

            header("Location :../../signup.php.error=$em");
            exit;
        }else
        echo"Good!";
        
    }
