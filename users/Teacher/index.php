<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_teacher2.css">
    <link rel="stylesheet" href="../../css/Overlay.css">
    <link rel="stylesheet" href="../../css/schedule.css">
    <link rel="stylesheet" type="" href="style.css">
    <title>Teacher Panel</title>
    <link rel="shortcut icon" href="../../images/logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Great+Vibes&family=Raleway:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>
<?php
  if($_SESSION['login'] && $_SESSION['teacher']){
  include 'connection.php';
  $query = "SELECT * FROM streams";
  $result = mysqli_query($conn,$query);
?>
    <div class="home">
        <div class="topdesign" >
        <h4 class="teh"><strong>Dashboard</strong></h4>
        </div>
        <div class="sc-header">
      <div class="sc-header-logo">
        <a href="index.php"><img src="../../images/logo.png" alt="TihCollegeSpace"></a>
      </div>
      <div class="sc-header-name">
        <a href="index.php"><h2>TIH College Space</h2></a>
      </div>
      
    </div>
        <div class="action">
            <div class="profile" onclick="toggle();">
                <!-- <img src="images/RajendraKumarShaw.jpg" alt=""> -->
                <img src="<?php echo $_SESSION['user']['photo']; ?>" alt="">
            </div>
            <div class="menu">
                <h3><?php echo $_SESSION['user']['firstname'].' '.$_SESSION['user']['midname'].' '.$_SESSION['user']['lastname']; ?> <br>
                <span>Teacher</span>
                </h3>
                <ul>
                    <li><img src="images/user.png" alt=""><a href="#Profile.php">Profile</a></li>
                    <li><img src="images/schedule.png" alt=""><a href="ScheduleClass.php">Schedule Class</a></li>
                    <li><img src="images/edit.png" alt=""><a  href="UploadNotes.php">Upload Notes</a></li>
                    <li><img src="images/envelope.png" alt=""><a href="Updates.php">Updates</a></li>
                    <li><img src="images/edit.png" alt=""><a href="#YearPaper.php">Year Paper</a></li>
                   <li><img src="images/question.png" alt=""><a href="Doubts.php">Doubts</a></li>
                    <li><a href="../../logout.php"><img src="images/log-out.png" alt="">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    

    <!-- Dashboard -->



    <!-- Adding Overlay -->
    <div id="overlay"></div>
    
    <script src="admin.js"></script>
    <script src="../../Javascripts/Overlay.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function FetchSemester(id){
        $('#semester').html('');
        $('#subject').html('<option>Select Subject</option>');
        $.ajax({
          type:'post',
          url: 'ajaxdata.php',
          data : { stream_id : id},
          success : function(data){
            $('#semester').html(data);
          }
        })
      }

      function FetchSubject(id){ 
        $('#subject').html('');
        $.ajax({
          type:'post',
          url: 'ajaxdata.php',
          data : { semester_id : id},
          success : function(data){
            $('#subject').html(data);
          }

        })
      }

      function FetchSemesterUN(id){
        $('#semesterUN').html('');
        $('#subjectUN').html('<option>Select Subject</option>');
        $.ajax({
          type:'post',
          url: 'ajaxdata.php',
          data : { stream_id : id},
          success : function(data){
            $('#semesterUN').html(data);
          }

        })
      }

      function FetchSubjectUN(id){ 
        $('#subjectUN').html('');
        $.ajax({
          type:'post',
          url: 'ajaxdata.php',
          data : { semester_id : id},
          success : function(data){
            $('#subjectUN').html(data);
          }

        })
      }
      updateList = function() {
        var input = document.getElementById('file');
        var output = document.getElementById('fileList');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name + '</li>';
        }
        output.innerHTML = '<ul>'+children+'</ul>';
      }

      $(document).ready(function(){
        $(document).on('click','a[data-role=ScheduleClass]',function(){
          $.post('test.php',
            function(data,status){
                $('#dashboard').html(data);
            })
          });
          $('#sc-new').click(function(){
            $.post('scheduleclassform.php',function(data,status){
                $('#change-scheduleclass').html(data);
            })
          });
          $('#sc-list').click(function(){
            $.post('scheduleclasslist.php',function(data,status){
                $('#change-scheduleclass').html(data);
            })
          });
        $('#un-new').click(function(){
          $.post('uploadnotesform.php',function(data,status){
              $('#change-uploadnotes').html(data);
          })
        });
        $('#un-list').click(function(){
          $.post('uploadnoteslist.php',function(data,status){
              $('#change-uploadnotes').html(data);
          })
        });
      });
  
    </script>
<?php
  }
else{
  header("location:../../index.html");
}
?>
</body>
</html>