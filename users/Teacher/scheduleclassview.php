<?php
include 'connection.php';
$viewid=$_POST['viewid'];
$query = "SELECT * FROM schedule_class WHERE id='$viewid'";
$result = $db->query($query);
$row = $result->fetch_assoc()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            width: 400px;
            margin:auto;
            margin-top:5px;
        }
    </style>
</head>
<body>
<div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="sc-list" onclick="ScheduleList()">List of Classes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="sc-new" onclick="ScheduleNew()">New Class</button>
      </div>
</div>
<div class="SC-form-container">
    <button type="button" class="btn btn-success" id="sc-action">Action</button>
    <table class="table table-bordered">
        <tr>
            <th>Stream</th>
            <td><?php echo $row['stream'];?></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><?php echo $row['sem'];?></td>
        </tr>
        <tr>
            <th>Section</th>
            <td><?php echo $row['section'];?></td>
        </tr>
        <tr>
            <th>Subject</th>
            <td><?php echo $row['subject'];?></td>
        </tr>
        <tr>
            <th>Topic</th>
            <td><?php echo $row['topic'];?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo $row['date'];?></td>
        </tr>
        <tr>
            <th>Time</th>
            <td><?php echo $row['time'];?></td>
        </tr>
        <?php
            if($row['classlink']==''||$row['classlink']==NULL){
            ?>
        <tr>
            <th colspan="2" class="text-center">No Class Links Available</th>
        </tr>
        <?php
            }
            else{
        ?>
        <tr>
            <td class="text-center"><a href="<?php echo $row['classlink'];?>"><button class="btn btn-outline-success" >Class Link</button></a></th>
        </tr>
        <?php
            }
        ?>
    </table>
</div>

<script>
      $(document).ready(function(){
            $('#sc-new').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('scheduleclassform.php',function(data,status){
                    $('#change-scheduleclass').html(data);
                })
            });
            $('#sc-list').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('scheduleclasslist.php',function(data,status){
                    $('#change-scheduleclass').html(data);
                })
            });
        });
    </script>
</body>
</html>