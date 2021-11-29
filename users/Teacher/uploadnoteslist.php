<?php
include 'connection.php';
$query = "SELECT * FROM upload_notes";
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
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-list" onclick="ScheduleList()" disabled>List of Classes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-new" onclick="ScheduleNew()">New Class</button>
      </div>
</div>
    <div class="SC-form-container">
        <!-- BCA SEM1 Alpha Date Time View -->
        <table class="table table-hover">
            <tr>
                <th>Serial No</th>
                <th>Stream</th>
                <th>Semester</th>
                <th>Section</th>
                <th>Date</th>
                <th>Topic</th>
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
                    <td><?php echo $row['topic']; ?></td>
                    <td><a href="ViewScheduleClass.php?id=<?php echo $row['id']; ?>"><button class="btn btn-outline-success"> View </button> </a></td>
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
        $('#un-new').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('uploadnotesform.php',function(data,status){
                    $('#change-uploadnotes').html(data);
                })
            });
            $('#un-list').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('uploadnoteslist.php',function(data,status){
                    $('#change-uploadnotes').html(data);
                })
            });
        });
    </script>
</body>
</html>