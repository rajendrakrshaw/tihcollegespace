<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tihcollegespace");

if(isset($_POST['submit'])){
    $uid = $_POST['uid'];
    $pass = $_POST['password'];
    $q = "SELECT * FROM `login` WHERE uid = '$uid' and password = '$pass'";
    $query = mysqli_query($conn, $q);
    $_SESSION['admin'] = false;
    $_SESSION['teacher'] = false;
    $_SESSION['student'] = false;
    if(mysqli_num_rows($query) > 0){
        $_SESSION['uid'] = $uid;
        $_SESSION['login'] = true;
        while($row = mysqli_fetch_array($query)){
            $role = $row['role'];
        }
        $_SESSION[$role] = true;
        if($role == "admin"){
            header("location:users/Admin/index.php");
        }
        elseif($role == "teacher"){
            header("location:users/Teacher/index.php");
        }
        elseif($role == "student"){
            header("location:users/Student/index.php");
        }
        
    }
    else{
        header("location:index.php");
    }
}

?>