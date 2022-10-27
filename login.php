<?php
//declare use session
session_start();

//declare utf-8 
header('Content-Type: text/html; charset=UTF-8');

//handle login
if (isset($_POST['login'])) {
    //connect to database
    include('connect.php');

    //get input
    $username = $_POST['username'];
    $password = $_POST['password'];

    //check enter password and username
    if (!$username || !$password) {
        echo "Please enter the full login username and password!";
        exit;
    }

    $regex1 = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $username);
    $regex2 = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $password);
    if (!$regex1 && !$regex2) { 
        //hash pasword
        $password = md5($password);

        $query = "SELECT username,password FROM users WHERE username = ? and md5(password) = '$password'";

        // use prepared statement to prevent SQL injection
        $preparedStatement = $connect->prepare($query);
        $preparedStatement->bind_param('s', $username); 
        $preparedStatement->execute();
        $result = $preparedStatement->get_result();

        if (mysqli_num_rows($result) <= 0) {
            echo "Incorrect username or password!";
        } else {
            //lưu tên đăng nhập
            $_SESSION['username'] = $username;
            $_SESSION["loggedin"] = true;
            echo "abc";
            // header("location: challenges.php");
        }
    }
    else{
        http_response_code(400);
        die('Error processing bad or malformed request');
    }

    $connect->close();
}
