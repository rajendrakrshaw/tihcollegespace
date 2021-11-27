<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tihcollespace");

if(isset($_POST['submit'])){
    $uid = $_POST['uid'];
    $pass = $_POST['password'];
    $q = "SELECT * FROM `login` WHERE uid = '$uid' and password = '$pass'";
    $query = mysqli_query($conn, $q);

    if(mysqli_num_rows($query) > 0){
        $_SESSION['uid'] = $uid;
        $_SESSION['login'] = true;
        while($row = mysqli_fetch_array($query)){
            $role = $row['role'];
        }
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
        echo "Invalid Credential";
    }
}

?>