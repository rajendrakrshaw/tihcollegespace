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
$stream=$_POST['streamSC'];
if($stream==1)
    $stream="BCA";
else if($stream==2)
    $stream="BBA";
else if($stream==3)
    $stream="MCA";
else if($stream==4)
    $stream="MSC";
$sem=$_POST['semesterSC'];
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

$section=$_POST['sectionSC'];
$subject=$_POST['subjectSC'];
$date=$_POST['dateSC'];
$time=$_POST['timeSC'];
$topic=$_POST['topicSC'];
$classlink=$_POST['classlinkSC'];

$q = "INSERT INTO `schedule_class`(`faculty_id`, `faculty_name`, `stream`, `sem`, `section`, `subject`, `topic`, `date`, `time`, `classlink`) VALUES ('$faculty_id', '$faculty_name', '$stream', '$sem', '$section', '$subject', '$topic', '$date', '$time', '$classlink')";

$query = mysqli_query($conn,$q);

if($query==1){
    ?>
        <script>
            alert('Successfully Scheduled');
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