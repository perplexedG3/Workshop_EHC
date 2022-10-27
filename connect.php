<?php
try {
    $connect = mysqli_connect ('localhost', 'root', '', 'test');
    mysqli_set_charset($connect, 'UTF8');
} catch (\Throwable $th) {
}

?>