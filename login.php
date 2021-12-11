<?php
session_start();
// $conn = mysqli_connect("sql302.epizy.com", "epiz_30514950", "LYBnFW3UacatKl", "epiz_30514950_tihcollegespace");
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'tihcollegespace';

// $db = new mysqli($host,$username,$pass,$db);

$conn = mysqli_connect($host,$username,$pass,$db);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
  }
if(!$conn){
    echo '<script> alert("Not Connected"); </script>';
}
else{
     echo '<script> alert("Connected"); </script>';
}
if(isset($_POST['submit'])){
<<<<<<< HEAD
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $q = "SELECT * FROM `login` WHERE email = '$email' and password = '$pass'";
=======
    $uid = $_POST['uid'];
    $pass = $_POST['password'];
    $q = "SELECT * FROM `login` WHERE uid = '$uid' and password = '$pass'";
>>>>>>> bd03311877cbb94b8c6dc813c3495fe47c440816
    $query = mysqli_query($conn, $q);
    if(!$query){
        echo '<script> alert("Invalid Credentials"); </script>';
    }
    $_SESSION['admin'] = false;
    $_SESSION['teacher'] = false;
    $_SESSION['student'] = false;
    if(mysqli_num_rows($query) > 0){
        $_SESSION['uid'] = $uid;
        $_SESSION['login'] = true;
        while($row = mysqli_fetch_array($query)){
            $role = $row['role'];
        }
        if($role == "admin"){
            $_SESSION['admin'] = true;
            header("location:users/admin/index.php");
        }
        elseif($role == "teacher"){
            $_SESSION['teacher'] = true;
            $q = "SELECT * FROM `teacher` WHERE email = '$email' and password = '$pass'";
            $query=mysqli_query($conn,$q);
            $res=mysqli_fetch_array($query);
            $_SESSION['user'] = $res;
            header("location:users/Teacher/index.php");
        }
        elseif($role == "student"){
            $_SESSION['student'] = true;
            header("location:users/Student/index.php");
        }
        
    }
    else{
<<<<<<< HEAD
        echo '<script> alert("Invalid Credentials"); </script>';
=======
        header("location:index.php");
>>>>>>> bd03311877cbb94b8c6dc813c3495fe47c440816
    }
}

?>