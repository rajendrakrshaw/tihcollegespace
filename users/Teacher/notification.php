<?php
   if($_SESSION['login'] && $_SESSION['teacher']){
    ?>
<?php
include 'connection.php';
$query = "SELECT * FROM updates order by date desc,time desc";
$result = mysqli_query($conn,$query);
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
<div class="updates-container">
    <div class="updates-list">
        <div class="updates-list-title">
            <button type="button" class="btn btn-success btn-lg btn-block" id="updates-list">Updates</button>
            <button type="button" class="btn btn-success btn-lg btn-block" id="updates-new">Add New</button>
        </div>
        <div class="notification-area">
            <marquee behavior="scroll" direction="up" scrolldelay="0" height="400px;" onmouseover="this.stop();" onmouseout="this.start();">
                <?php
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="notification-row" data-role="view" data-id="<?php echo $row['id']; ?>">
                    <div class="stream"><?php echo $row['stream']; ?></div>
                    <div class="year"><?php echo $row['year']; ?></div>
                    <div class="title"><?php echo $row['title']; ?></div>
                    <div class="date"><?php echo $row['date']; ?></div>
                </div>
                <?php
                    }
                ?>
            </marquee>
        </div>
    </div>
    <div class="updates-form" id="change-updates-container">
        <?php include 'notificationform.php'; ?>
    </div>  
</div>










<!-- <div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="updates-list" disabled>Updates</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="updates-new" >New Update</button>
      </div>
</div> -->

    
    <!-- <marquee behavior="" direction="up" scrolldelay="1" onmouseover="this.stop();" onmouseout="this.start();">
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>
        <a href="">Notification1</a><br>

    </marquee> -->

    
    <?php
    }
    else{
    header("location:../../index.html");
    }
    ?>

<script>
    $(document).ready(function(){
        $('#updates-new').click(function(){
            // $.get('get.html',function(data,status){
            //     $('#changehere').html(data);
            //     alert(status);
            // });
            $.post('notificationform.php',function(data,status){
                $('#change-updates-container').html(data);
            })
        });
        $(document).on('click','tr[data-role=view]',function(){
            // alert($(this).data('id'));
            var dataid=$(this).data('id');
            $.post('notification.php',{
            viewid : dataid },
            function(data,status){
                $('#change-updates').html(data);
            })
        });
        $(document).on('click','div[data-role=view]',function(){
            // alert($(this).data('id'));
            var dataid=$(this).data('id');
            $.post('notificationview.php',{
            viewid : dataid },
            function(data,status){
                $('#change-updates-container').html(data);
            })
        });
    });
</script>
</body>
</html>