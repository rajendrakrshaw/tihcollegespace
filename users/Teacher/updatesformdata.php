<?php
include 'connection.php';
// extract($_POST);
$stream=$_POST['stream'];
if($stream==1)
    $stream="ALL";
else if($stream==2)
    $stream="BCA";
else if($stream==3)
    $stream="BBA";
else if($stream==4)
    $stream="MCA";
else if($stream==5)
    $stream="MSC";
$year=$_POST['year'];

$yearsql="select * from years where id='$year'";
$yearquery=mysqli_query($conn,$yearsql);
$yeardata=mysqli_fetch_assoc($yearquery);
$year=$yeardata['year'];

$title=$_POST['title'];
$message=$_POST['message'];

$filename=$_FILES['documentname']['name'];
if($message!=NULL || $filename!=NULL){

$url = "Updates/";
$furl = $url.$filename;
echo $furl;

// echo $stream.' '.$year.' '.$title.' '.$message.' '.$path.' '.$document;

// $date=date("d-m-Y");
// $time=date("h:i a");
    $q="INSERT INTO `updates`(`stream`, `year`, `title`, `message`, `file`) VALUES ('$stream','$year','$title','$message','$furl')";
    $query = mysqli_query($conn,$q);
    if($query==1){
        move_uploaded_file($_FILES['documentname']['tmp_name'],$furl);
        ?>
        <script>
            alert('Updates Saved \n <?php echo $title;?>');
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('An Error Occured');
            window.history.back();
        </script>

    <?php
    }
}
else{
    ?>
        <script>
            alert('Message or File can\'t be empty.');
            window.history.back();
        </script>

    <?php
}
// header('location:index.php');

?>