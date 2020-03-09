<?php
session_start();
//intitialising var

$username="";
$email="";
$errors=array();

//connet to db

$db= mysqli_connect('localhost', 'root', 'rakib', 'userregistration') or die('could not connect to DB');

//register user
if (isset($_POST['reg_user'])) {
    $username= mysqli_real_escape_string($db, $_POST['user']);
    $email= mysqli_real_escape_string($db, $_POST['email']);
    $pass= mysqli_real_escape_string($db, $_POST['pass']);
    $pass2= mysqli_real_escape_string($db, $_POST['pass2']);


    //form validation

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($pass)) {
        array_push($errors, "Password is required");
    }
    if ($pass!=$pass2) {
        array_push($errors, "Password Mismatch");
    }


    //check db for existing user

    $user_check="SELECT * FROM user WHERE username= '$username' or email='$email' LIMIT 1";

    $result=mysqli_query($db, $user_check);

    $user=mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username']==$username) {
            array_push($errors, "Username already exist");
        }
        if ($user['email']==$email) {
            array_push($errors, "Email already exist");
        }
    }

    if (count($errors)== 0) {
        $type="policy maker";
        $passE=md5($pass2);// encrypt password
        $qury=" INSERT INTO user(username,email,password,type) VALUES('$username' ,'$email','$passE','$type') ";
        mysqli_query($db, $qury);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        header('location: home.php');
    }
}



// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['user']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
