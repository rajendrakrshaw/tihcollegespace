
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin.css">
    <link rel="stylesheet" href="../../css/Overlay.css">
    <title>Admin</title>
</head>
<body>
<?php
if($_SESSION['login'] && $_SESSION['admin']){
?>
    <div class="home">
        <div class="topdesign" >
        <h3 class="adm">ADMIN PANEL</h3>
        </div>
       
        <div class="action">
            <div class="profile" onclick="toggle();">
                <img src="images/RajendraKumarShaw.jpg" alt="">
            </div>
            <div class="menu">
                <h3>Name <br>
                <span>Designation</span>
                </h3>
                <ul>
                    <li data-target="#MyProfile"><img src="images/user.png" alt="">My Profile</li>
                    <li><img src="images/edit.png" alt="">Edit Profile</li>
                    <li><img src="images/envelope.png" alt="">Inbox</li>
                    <li><img src="images/edit.png" alt="">Add User</li>
                    <li><img src="images/settings.png" alt="">settings</li>
                    <li><img src="images/question.png" alt="">Help</li>
                    <li><a href="../../logout.php"><img src="images/log-out.png" alt="">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal-container" id="MyProfile">
        <div class="modal-wrapper">
          <div class="title">MyProfile</div>
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