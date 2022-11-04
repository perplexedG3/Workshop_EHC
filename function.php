<?php

global $conn;

function connectDB() {
    global $conn;
    $conn = mysqli_connect("localhost", "root", "", "ehc-workshop");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
}

function disconnect_db() {
    global $conn;
    if ($conn) {
        mysqli_close($conn);
    }
}

function get_chall_by_id($chall_id) {

    global $conn;
    connectDB();

    $regex = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $chall_id);

    if (!$regex) {
        $query = "SELECT * FROM list_challenge WHERE ID_chall = ?";

        // use prepared statement to prevent SQL injection
        $preparedStatement = $conn->prepare($query);
        $preparedStatement->bind_param('d', $chall_id);
        $preparedStatement->execute();
        $result = $preparedStatement->get_result();
        $row = $result->fetch_assoc();

        return $row;
    }
}

function check_submit($user_id, $chall_id){
    global $conn;
    connectDB();
    
    $regex1 = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $user_id);
    $regex2 = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $chall_id);
    if (!$regex1 && !$regex2) {
        $query = "SELECT * FROM users INNER JOIN solve on users.id=solve.ID_team where users.id=? AND solve.ID_chall=?";

        // use prepared statement to prevent SQL injection
        $preparedStatement = $conn->prepare($query);
        $preparedStatement->bind_param('ii', $user_id, $chall_id);
        $preparedStatement->execute();
        $result = $preparedStatement->get_result();

        return mysqli_num_rows($result);
    }
}

function get_score() {
    global $conn;

    connectDB();

    $sql = "SELECT * FROM users ORDER BY score DESC";
    $query = mysqli_query($conn, $sql);

    $result = array();
    if ($query) {
        while ($row = $query->fetch_row()) {
            $result[] = $row;
        }
    }
    return $result;
}

function change_status_submition_by_id($user_id, $chall_id) {
    global $conn;
    connectDB();

    $regex1 = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $user_id);
    $regex2 = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $chall_id);

    if (!$regex1 && !$regex2) {
        /* Prepared statement, stage 1: prepare */
        $stmt = $conn->prepare("INSERT INTO `solve`(`ID_team`, `ID_chall`) VALUES (?,?)");
        $stmt->bind_param("ii", $user_id, $chall_id);
        $stmt->execute();
    }
}

function update_score($user_id){
    global $conn;
    connectDB();

    $regex1 = preg_match('/[\'"^£$%&*()}{@#~?><>,|=_+¬-]/', $user_id);

    if (!$regex1) {
        
        $query = "SELECT COUNT(ID_chall) AS count FROM `solve` WHERE ID_team=?";       
        $preparedStatement = $conn->prepare($query);
        $preparedStatement->bind_param('i', $user_id);
        $preparedStatement->execute();
        $result = $preparedStatement->get_result();
        $row = $result->fetch_assoc();   //$row["count"]
        
        $value = 500*$row["count"];
        
        $stmt2 = $conn->prepare("UPDATE `users` SET `score`=? WHERE id=?");
        $stmt2->bind_param("ii", $value, $user_id);
        $stmt2->execute();
    }
}
?>