<?php
//Question:
//Write a basic authentication program that uses session to store user’s data
//User should be able to register

if (isset($_POST['register'])){

    //check email
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    } else {
        $email= htmlspecialchars($_POST['email']);
    }
    
     //check name
    if(empty($_POST['name'])){
        echo 'A name is required <br />';
    } else {
        $name=htmlspecialchars($_POST['name']);
    }

     //check Password
    if(empty($_POST['password'])){
        echo 'A password is required <br />';
    } else {
        $password=htmlspecialchars($_POST['password']);
    }
    
    // end of the POST check

    session_start();

    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;

}


//Question:
//Write a basic authentication program that uses session to store user’s data
//User should be able to login

if (isset($_POST['login'])){

    $_POST['login']==$_POST['register'];

    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);


    //$_SESSION['email'] = $email;
   // $_SESSION['password'] = $password;

    echo 'Welcome: '. $email;

}

?>