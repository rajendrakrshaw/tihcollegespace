<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../css/Overlay.css">
    <link rel="stylesheet" href="../../css/schedule.css">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
<?php
  include_once 'connection.php';
  $query = "SELECT * FROM streams";
  $result = $db->query($query);
?>
    <div class="home">
        <div class="topdesign" >

        </div>
        <div class="action">
            <div class="profile" onclick="toggle();">
                <img src="images/RajendraKumarShaw.jpg" alt="">
            </div>
            <div class="menu">
                <h3>Name <br>
                <span>Teacher</span>
                </h3>
                <ul>
                    <li><img src="images/user.png" alt=""><a  data-target="#MyProfile" href="#MyProfile">My Profile</a></li>
                    <li><img src="images/edit.png" alt=""><a  data-target="#EditProfile" href="#EditProfile">Edit Profile</a></li>
                    <li><img src="images/envelope.png" alt=""><a  data-target="#Inbox" href="#Inbox">Inbox</a></li>
                    <li><img src="images/schedule.png" alt=""><a  data-target="#SC" href="#SC">Schedule Class</a></li>
                    <li><img src="images/envelope.png" alt=""><a  data-target="#UN" href="#UN">Upload Notes</a></li>
                    <li><img src="images/envelope.png" alt=""><a  data-target="#Updates" href="#Updates">Updates</a></li>
                    <li><img src="images/settings.png" alt=""><a  data-target="#Settings" href="#Settings">Settings</a></li>
                    <li><img src="images/question.png" alt=""><a  data-target="#Help" href="#Help">Help</a></li>
                    <li><img src="images/log-out.png" alt="">Logout</li>
                </ul>
            </div>
        </div>
    </div>
<!--My Profile Modal-->
    <div class="modal-container" id="MyProfile">
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
<div class="modal-container" id="EditProfile">
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
<div class="modal-container" id="Inbox">
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

<!--Schedule Class Modal-->
<div class="modal-container" id="SC">
    <div class="modal-header">
      <div class="title">
        <h3><strong>Schedule Class</strong></h3>
      </div>
      <button class="btn close-modal">&times;</button>
    </div>
    <div class="sc-container">
      <form action="">
        <div id="left">

          <div class="crs-left">
            <table>
              <tr>
                <th><h5>Choose Course :</h5></th>
                <td>
                  <input type="radio" name="course" value="BCA">&nbsp;BCA &nbsp;&nbsp;<input type="radio" name="course" value="BBA">&nbsp;BBA&nbsp;&nbsp;<input type="radio" name="course" value="MCA">&nbsp;MCA&nbsp;&nbsp;<input type="radio" name="course" value="Msc">&nbsp;M.sc.</td>
              </tr>
            </table>
          </div>
          <div class="crs-left">
            <h5 class="f-right">Choose Subject :</h5>           
            <select required>
              <option selected disabled value="">Choose...</option>
              <option>Accounting</option>
              <option>Cybertronix</option>
              <option>Industrial Training</option>
              <option>Unix</option>
              
              </select>
          </div>
        </div>
        <div id="right">

          <div class="crs-right">
            <h5>Choose Semester :</h5>
            <select required>
              <option selected disabled value="">Choose...</option>
              <option>1st Semester</option>
              <option>2nd Semester</option>
              <option>3rd Semester</option>
              <option>4th Semester</option>
              <option>5th Semester</option>
              <option>6th Semester</option>
            </select>
          </div>
          <div class="crs-right">
            <h5 class="f-right">Select Date & Time :</h5>
            <input type="datetime-local">
          </div>
        </div>
          <div class="crs-mid">
                <h5>Class Link :</h5>
                <input type="text">
              </div>
      </form>
      <button type="submit" class="sc-btn">Schedule</button>
    </div>
</div>

  


<!--Update Notes Modal-->
<div class="modal-container" id="UN">
    <div class="modal-header">
      <div class="title"><strong>Upload Notes</strong></div>
      <button class="btn close-modal">&times;</button>
    </div>
    <div class="un-container">
      <form action="">
        <div id="update-left">
          <div class="update-crs-left">
            <table>
              <tr>
                <th><h5>Choose Course :</h5></th>
                <td>
                  <input type="radio" name="course" value="BCA">&nbsp;BCA &nbsp;&nbsp;<input type="radio" name="course" value="BBA">&nbsp;BBA&nbsp;&nbsp;<input type="radio" name="course" value="MCA">&nbsp;MCA&nbsp;&nbsp;<input type="radio" name="course" value="Msc">&nbsp;M.sc.</td>
              </tr>
            </table>
          </div>
          <div class="update-crs-left">
            <h5 class="f-right">Choose Subject :</h5>           
            <select required>
              <option selected disabled value="">Choose...</option>
              <option>Accounting</option>
              <option>Cybertronix</option>
              <option>Industrial Training</option>
              <option>Unix</option>
              </select>
          </div>
        </div>
        <div id="update-right">

          <div class="update-crs-right">
            <h5>Choose Semester :</h5>
            <select required>
              <option selected disabled value="">Choose...</option>
              <option>1st Semester</option>
              <option>2nd Semester</option>
              <option>3rd Semester</option>
              <option>4th Semester</option>
              <option>5th Semester</option>
              <option>6th Semester</option>
            </select>
          </div>
          <div class="update-crs-right">
            <h5 class="f-right">Select Date & Time :</h5>
            <input type="datetime-local">
          </div>
        </div>
        <div id="update-mid">
          <div class="update-crs-mid">
            <h5>Chapter Name :</h5>
            <input type="file">
          </div>
          <div class="update-crs-mid">
            <h5>Upload PDF :</h5>
            <input type="file">
          </div>
          <div class="update-crs-mid">
            <h5>Upload PDF :</h5>
            <input type="file">
          </div>
        </div>
        <div class="update-crs">
              <h5>Upload Class Recording Link :</h5>
              <input type="text">
        </div>
      </form>
      <button type="submit" class="un-btn">Schedule</button>
    </div>
</div>

<!--Updates Modal-->
<div class="modal-container" id="Updates">
    <div class="modal-header">
      <div class="title"><strong>Updates</strong></div>
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
<div class="modal-container" id="Settings">
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
<div class="modal-container" id="Help">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>