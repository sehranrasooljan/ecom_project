<?php
    session_start();
    include_once "php/connection.php";

    if(!isset($_SESSION['user_id'])){
       // header("location: ../index.html");
    }

    $user_id = $_SESSION['user_id'];

    $sql = mysqli_query($conn,"SELECT * from tbl_user WHERE `user_id` = '{$user_id}'");
    if(mysqli_num_rows($sql) > 0)
    {
        $result = mysqli_fetch_assoc($sql);
    }

    // $sqlother = mysqli_query($conn,"SELECT * from tbl_teacher WHERE `user_id` = '{$user_id}'");
    // if(mysqli_num_rows($sqlother) > 0)
    // {
    //     $resultother = mysqli_fetch_assoc($sqlother);
    // }

?>