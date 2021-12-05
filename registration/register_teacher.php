<?php
echo "hello";
$conn = mysqli_connect("localhost", "root", "", "tihcollespace");
if(isset($_POST['submit'])){
    $role = "teacher";
    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $bca = $_POST['bca'];
    $bba = $_POST['bba'];
    $mca = $_POST['mca'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $photo = $_FILES['photo']['name'];
    $url = "images/";
    $furl = $url.$photo;
    $e = pathinfo($photo, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['file']['tmp_name'], $furl);
    $query = "INSERT INTO `teacher`(`firstname`, `midname`, `lastname`, `dob`, `gender`, `bca`, `bba`, `mca`, `phone`, `email`, `password`, `photo`) VALUES ('$firstname','$midname','$lastname','$dob','$gender','$bca','$bba','$mca','$phone','$email','$password','$furl')";
    $query1 = "INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$email','$password','$role')";
    $run = mysqli_query($conn, $query);
    $run1 = mysqli_query($conn, $query1);
    if($run){
        header("location:../index.html?msg=Registered");
    }
    else{
        header("location:../index.html?msg=NotRegistered");
    }
}
?>