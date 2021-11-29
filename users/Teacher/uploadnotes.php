<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'scheduleclass';

$conn = mysqli_connect($host,$username,$pass,$db);

// $faculty_id=$_SESSION['login']['id'];
// $faculty_name=$_SESSION['login']['name'];
$faculty_id=1;
$faculty_name="Subrata Saha";
$stream=$_POST['streamUN'];
if($stream==1)
    $stream="BCA";
else if($stream==2)
    $stream="BBA";
else if($stream==3)
    $stream="MCA";
else if($stream==4)
    $stream="MSC";
$sem=$_POST['semesterUN'];
     if($sem==1||$sem==7||$sem==13||$sem==17)
    $sem="SEM1";
else if($sem==2||$sem==8||$sem==14||$sem==18)
    $sem="SEM2";
else if($sem==3||$sem==9||$sem==15||$sem==19)
    $sem="SEM3";
else if($sem==4||$sem==10||$sem==16||$sem==20)
    $sem="SEM4";
else if($sem==5||$sem==11)
    $sem="SEM5";
else if($sem==6||$sem==12)
    $sem="SEM6";

$section=$_POST['sectionUN'];
$subject=$_POST['subjectUN'];
$date=$_POST['dateUN'];
$topic=$_POST['topicUN'];
// $time=$_GET['timeUN'];
// $file=
$filename=$_FILES['fileUN']['name'];
$url = "Notes/";
$furl = $url.$filename;
$classlink=$_POST['classlinkUN'];

$q = "INSERT INTO  `upload_notes` (`faculty_id`, `faculty_name`, `stream`, `sem`, `section`, `subject`, `topic`, `date`, `file`, `recordinglink`) VALUES ('$faculty_id', '$faculty_name', '$stream', '$sem', '$section', '$subject', '$topic', '$date', '$furl', '$classlink')";

$query = mysqli_query($conn,$q);

if($query==1){
    move_uploaded_file($_FILES['fileUN']['tmp_name'],$furl); ?>
        <script>
            alert('Successfully Uploaded');
        </script>
    <?php
}
else{
    ?>
        <script>
            alert('Error Occured');
        </script>
    <?php
}
header('location:index.php');
?>