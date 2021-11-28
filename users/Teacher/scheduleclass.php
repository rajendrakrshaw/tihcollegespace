<?php
include 'connection.php';

$faculty_id=$_SESSION['login']['id'];
$faculty_name=$_SESSION['login']['name'];
$stream=$_GET['streamSC'];
$sem=$_GET['semesterSC'];
$section=$_GET['sectionSC'];
$subject=$_GET['subjectSC'];
$date=$_GET['dateSC'];
$time=$_GET['timeSC'];
$topic=$_GET['topicSC'];
$classlink=$_GET['classlinkSC'];

$q = "INSERT INTO `schedule_class`(`faculty_id`, `faculty_name`, `stream`, `sem`, `section`, `subject`, `topic`, `date`, `time`, `classlink`) VALUES (`$faculty_id`, `$faculty_name`, `$stream`, `$sem`, `$section`, `$subject`, `$topic`, `$date`, `$time`, `$classlink`)";

$query = $db->query($conn,$q);

if($query){
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