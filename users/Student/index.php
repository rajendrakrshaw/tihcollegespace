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
    <link rel="stylesheet" href="style.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <title>Student Panel</title>
    <link rel="shortcut icon" href="../../images/logo.png" />

    
</head>
<body>
<?php
<<<<<<< HEAD
if($_SESSION['login']){
  $stream="BCA";
  $sem="SEM1";
  $section="Alpha";
=======
if($_SESSION['login'] && $_SESSION['student']){
>>>>>>> 4f06f42502737e3676a2f859439d4f52bcbcee1d
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
                    <li><img src="images/schedule.png" alt=""><a  data-target="#Classes" href="#Classes">Classes</a></li>
                    <li><img src="images/envelope.png" alt=""><a  data-target="#Notes" href="#Notes">Notes</a></li>
                    <li><img src="images/envelope.png" alt=""><a  data-target="#YearPapers" href="#YearPapers">Year Papers</a></li>

                    <li><img src="images/envelope.png" alt=""><a  data-target="#Updates" href="#Updates">Updates</a></li>
                    <li><img src="images/question.png" alt=""><a  data-target="#Doubts" href="#Doubts">Doubts</a></li>

                    <!-- <li><img src="images/settings.png" alt=""><a  data-target="#Settings" href="#Settings">Settings</a></li> -->
                    <!-- <li><img src="images/question.png" alt=""><a  data-target="#Help" href="#Help">Help</a></li> -->
                    <li><a href="../../logout.php"><img src="images/log-out.png" alt="">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

<!--My Profile Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;"  id="MyProfile">
<div class="modal-header">
      <div class="title"><h2 data-role="MyProfile"><Strong>My Profile</Strong></h2></div>
      <button class="close-modal modal-close-btn">&times;</button>
    </div>
    
</div>
<!--Edit Profile Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="EditProfile">
<div class="modal-header">
      <div class="title"><h2 data-role="EditProfile"><Strong>Edit Profile</Strong></h2></div>
      <button class="close-modal modal-close-btn">&times;</button>
    </div>
  
</div>

<!-- Classes Modal  -->
<div class="modal-container modal-lg" style="margin-top:50px;"  id="Classes">
    <?php include 'classes_list.php';?>
  
</div>

<!--Notes Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="Notes">
    <?php include 'notes_list.php';?>
</div>
<!--Updates Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="Updates">
    <?php include 'updates.php';?>
</div>

<!-- YearPapers Modal -->
<div class="modal-container modal-lg" style="margin-top:50px;" id="YearPapers">
<div class="modal-header">
      <div class="title"><h2 data-role="YearPapers"><Strong>Previous Year Papers</Strong></h2></div>
      <button class="close-modal modal-close-btn">&times;</button>
    </div>
</div>


<!--Doubts Modal-->
<div class="modal-container modal-lg" style="margin-top:50px;" id="Doubts">
    <div class="modal-header">
      <div class="title"><h2 data-role="Doubts"><Strong>Doubts</Strong></h2></div>
      <button class="close-modal modal-close-btn">&times;</button>
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