<?php
    if(isset($_POST['submit'])){
        include('connect.php');
        $flag = $_POST['input'];
        if(!$flag){
            echo "Please enter flag...";
        }
        //hash input
        $flag = md5($flag);
        $query = "SELECT flag FROM flags WHERE md5(flag) = '$flag'";
        if (mysqli_num_rows($result) <= 0) {
            echo "Incorrect!";            
        } else {
            echo "Correct,Congratulation!";
        }
    }




?>
