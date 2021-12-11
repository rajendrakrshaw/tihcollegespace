
<?php
include 'connection.php';
$viewid=$_POST['viewid'];
$query = "SELECT * FROM updates WHERE id='$viewid'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<button type="button" class="btn btn-success btn-lg btn-block" style="border-radius:0px; margin:0px 2px;">Title : <?php echo $row['title']; ?></button>
    <div class="notice">
        <div class="notice-stream">
            To, <br> <?php if ($row['stream']=="ALL") echo 'All the Students of Techno India Hooghly'; else echo $row['stream'].' '.$row['year']; ?>
        </div>
        <div class="notice-text">
            <?php echo $row['message']; ?>
        </div>
    </div>
    
</body>
</html>