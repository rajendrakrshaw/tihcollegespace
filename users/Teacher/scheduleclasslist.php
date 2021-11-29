<?php
include 'connection.php';
$query = "SELECT * FROM schedule_class";
$result = $db->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="sc-list" onclick="ScheduleList()" disabled>List of Classes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="sc-new" onclick="ScheduleNew()">New Class</button>
      </div>
</div>
    <div class="SC-form-container">
      <div class="sc-action">
      </div>
        <!-- BCA SEM1 Alpha Date Time View -->
        <table class="table table-hover">
            <tr>
                <th>Serial No</th>
                <th>Stream</th>
                <th>Semester</th>
                <th>Section</th>
                <th>Date</th>
                <th>Time</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
            <?php
              if ($result->num_rows > 0 ) {
                $sl=0;
                while ($row = $result->fetch_assoc()) {
                    $sl++;
                  ?>
                  <tr>
                    <th><?php echo $sl; ?></th>
                    <td><?php echo $row['stream']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><button class="btn btn-outline-success" id="sc-view" <?php $viewid=$row['id'];?>> View </button></td>
                    <td><a><button class="btn btn-outline-success" disabled> Delete </button> </a></td>

                </tr>
                <?php
                }
              }
            ?> 
        </table>
        <?php
        
          if ($result->num_rows == 0 ){
            ?>
              <p class="text-center">No Records Found.</p>
            <?php
          }
        ?>
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
            $('#sc-view').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('scheduleclassview.php',{
                    viewid : "<?php echo $viewid;?>"
                },function(data,status){
                    $('#change-scheduleclass').html(data);
                })
            });
        });
    </script>
</body>
</html>