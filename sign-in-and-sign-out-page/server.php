<?php

session_start();

//initialising variables
$username = "";
$email="";

$errors = array();

//connect to db
$db = mysqli_connect('localhost', 'root', '', 'anicare') or die("could not connect to database");

//if(isset($_POST['reg_user']))
//Register users
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation
if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password_1)) {array_push($errors, "Username is required");}
if($password_1 != $password_2) {array_push($errors, "Password do not match");}

//check db for existinng user with same username
$user_check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email' LIMIT 1 ";

$results = mysqli_query($db, $user_check_query);
$users = mysqli_fetch_assoc($results);


if($users) {
    if($users['username'] == $username) {array_push($errors, "Username already exists");}
    if($users['email'] == $email) {array_push($errors, "Email already exists");}
}

//Register the user if no error
if(count($errors)==0) {
    $password = md5($password_1);       //this will encrypt the password
    $query = "INSERT INTO users (username, email, password)     values ('$username, '$email', '$password') ";
    
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are logged in";

    
    if(isset($_SESSION['username'])) {
        session_start();
        $_SESSION['msg'] = "You must log in first to view this page";
        header('location: index.php');
    }

    if(isset($_GET['logout'])) {
        session_destroy;
        unset($_SESSION['username']);
        header('location: index.php');
    }
}






//login user
if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($username)){
        array_push($errors, "Username is required");
    }

    
    if(empty($password)){
        array_push($errors, "Password is required");
    }

    if(count($errors)==0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>