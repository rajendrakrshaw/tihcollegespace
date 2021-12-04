<?php
include 'connection.php';
if(isset($_POST['submit'])){
$viewid=$_GET['viewid'];
// $viewid=25;
$section=$_POST['sectionSC'];
$date=$_POST['dateSC'];
$time=$_POST['timeSC'];
$topic=$_POST['topicSC'];
$classlink=$_POST['classlinkSC'];


$updatesql="UPDATE `schedule_class` SET `section`='$section',`topic`='$topic',`date`='$date',`time`='$time',`classlink`='$classlink' WHERE id='$viewid'";
$updatequery=mysqli_query($conn,$updatesql);
if($updatequery){
  ?>
    <script>
      alert('Class Updated.');
      window.history.back();
    </script>
  <?php
}
else{
  ?>
    <script>
      alert('An Error Occured.');
      window.history.back();
    </script>
  <?php
}
}
else{
  header('location:ScheduleClass.php');
}
?>