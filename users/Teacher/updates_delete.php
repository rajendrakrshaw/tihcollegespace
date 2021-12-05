<?php
include 'connection.php';
$viewid=$_GET['viewid'];
$a="delete from updates where id='$viewid'";
$b=mysqli_query($conn,$a);
if($b==1){
    ?>
        <script>
            alert('Update Deleted..');
            window.history.back();
        </script>
    <?php
}
else{
    ?>
        <script>
            alert('Error..');
            window.history.back();
        </script>
    <?php
}
?>