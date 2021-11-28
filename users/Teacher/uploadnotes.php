<?php
include 'connection.php';

$faculty_id=$_SESSION['login']['id'];
$faculty_name=$_SESSION['login']['name'];
$stream=$_GET['streamUN'];
$sem=$_GET['semesterUN'];
$section=$_GET['sectionUN'];
$subject=$_GET['subjectUN'];
$date=$_GET['dateUN'];
$topic=$_GET['topicUN'];
// $time=$_GET['timeUN'];
// $file=
$filename=$_FILES['fileUN']['topic'];
$url = "Notes/";
$furl = $url.$filename;
move_uploaded_file($_FILES['a2']['tmp_name'],$furl);
$classlink=$_GET['classlinkUN'];

$q = "upload_notes`(`id`, `faculty_id`, `faculty_name`, `stream`, `sem`, `section`, `subject`, `topic`, `date`, `file`, `recordinglink`) VALUES (`$faculty_id`, `$faculty_name`, `$stream`, `$sem`, `$section`, `$subject`, `$topic`, `$date`, `$furl`, `$classlink`)";

$query = $db->query($conn,$q);

if($query){
    ?>
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