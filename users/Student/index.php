<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_student.css">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/Overlay.css">
    <title>Document</title>
    
</head>
<body>
<?php
if($_SESSION['login'] && $_SESSION['student']){
?>
    <div class="home">
        <div class="topdesign" >
            <h3 class="stu">STUDENT PANEL</h3>
        </div>
        <div class="action">
            <div class="profile" onclick="toggle();">
                <img src="images/RajendraKumarShaw.jpg" alt="">
            </div>
            <div class="menu">
                <h3>Name <br>
                <span>Student</span>
                </h3>
                <ul>
                    <li data-target="#MyProfile" ><img src="images/user.png" alt=""><a  data-target="#MyProfile" href="#MyProfile">My Profile</a></li>
                    <li><img src="images/edit.png" alt=""><a  data-target="#EditProfile" href="#EditProfile">Edit Profile</a></li>
                    <li><img src="images/envelope.png" alt=""><a  data-target="#Inbox" href="#Inbox">Inbox</a></li>
                    <li><img src="images/settings.png" alt=""><a  data-target="#Settings" href="#Settings">Settings</a></li>
                    <li><img src="images/question.png" alt=""><a  data-target="#Help" href="#Help">Help</a></li>
                    <li><a href="../../logout.php"><img src="images/log-out.png" alt="">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

<!--My Profile Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;"  id="MyProfile">
    <div class="modal-header">
      <div class="title"><Strong>My Profile</Strong></div>
      <button class="btn close-modal" class="close cl">&times;</button>
    </div>
    <div>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere ea
      officia consectetur. Laborum, dolor? Assumenda quo corrupti eveniet
      velit fugit fugiat odit, dolorum labore obcaecati quia. Commodi
      assumenda sed maxime!
    </div>
</div>
<!--Edit Profile Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="EditProfile">
<div class="modal-header">
<div class="title"><Strong>Edit Profile</Strong></div>
<button class="btn close-modal" class="close cl">&times;</button>
</div>
<div>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere ea
officia consectetur. Laborum, dolor? Assumenda quo corrupti eveniet
velit fugit fugiat odit, dolorum labore obcaecati quia. Commodi
assumenda sed maxime!
</div> 
</div>

<!--Inbox Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="Inbox">
    <div class="modal-header">
      <div class="title"><strong>Inbox</strong></div>
      <button class="btn close-modal">&times;</button>
    </div>
    <div>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere ea
      officia consectetur. Laborum, dolor? Assumenda quo corrupti eveniet
      velit fugit fugiat odit, dolorum labore obcaecati quia. Commodi
      assumenda sed maxime!
    </div>
</div>
<!--Settings Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="Settings">
    <div class="modal-header">
      <div class="title"><strong>Settings</strong></div>
      <button class="btn close-modal">&times;</button>
    </div>
    <div>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere ea
      officia consectetur. Laborum, dolor? Assumenda quo corrupti eveniet
      velit fugit fugiat odit, dolorum labore obcaecati quia. Commodi
      assumenda sed maxime!
    </div>
</div>


<!--Help Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="Help">
    <div class="modal-header">
      <div class="title"><strong>Help</strong></div>
      <button class="btn close-modal">&times;</button>
    </div>
    <div>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere ea
      officia consectetur. Laborum, dolor? Assumenda quo corrupti eveniet
      velit fugit fugiat odit, dolorum labore obcaecati quia. Commodi
      assumenda sed maxime!
    </div>
</div>

















    <!-- Adding Overlay -->
    <div id="overlay"></div>
    <script src="admin.js"></script>
    <script src="../../Javascripts/Overlay.js"></script>
<?php
}
else{
  header("location:../../index.html");
}
?>
</body>
</html>