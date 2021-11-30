<?php
include 'connection.php';
$viewid=$_GET['viewid'];
$a="delete from schedule_class where id='$viewid'";
$b=$db->query($a);
if($b==1){
    ?>
        <script>
            alert('Class Deleted..');
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