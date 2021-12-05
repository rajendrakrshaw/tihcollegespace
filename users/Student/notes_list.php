<?php
include 'connection.php';
$query = "SELECT * FROM upload_notes order by date";
$result = mysqli_query($conn,$query);
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
<div class="modal-header">
      <div class="title"><h2><strong>Notes</strong></h2></div>
      <button class="modal-close-btn" onclick="reloadpage()">&times;</button>
    </div>
    <div class="SC-form-container">
        <!-- BCA SEM1 Alpha Date Time View -->
        <table class="table table-hover">
            <tr>
                <th>Serial No</th>
                <th>Subject</th>
                <th>Faculty</th>
                <th>Topic</th>
                <th>Date</th>
                <!-- <th>Time</th> -->
                <!-- <th>View</th> -->
                <!-- <th>Delete</th> -->
            </tr>
            <?php
              if (mysqli_num_rows($result) > 0) {
                $sl=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sl++;
                  ?>
                    <tr data-role="view" data-id="<?php echo $row['id'];?>" style="cursor:pointer;">                    
                    <th><?php echo $sl; ?></th>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['faculty_name']; ?></td>
                    <td><?php echo $row['topic']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <!-- <td><button class="btn btn-outline-success"> View </button></td> -->
                    
                </tr>
                <?php
                }
              }
            ?> 
        </table>
        <?php
        
          if (mysqli_num_rows($result) == 0 ){
            ?>
              <p class="text-center">No Records Found.</p>
            <?php
          }
        ?>
    </div>
    <script>
      $(document).ready(function(){
            $(document).on('click','tr[data-role=view]',function(){
              // alert($(this).data('id'));
              var dataid=$(this).data('id');
              $.post('notes_view.php',{
                viewid : dataid },
                function(data,status){
                    $('#Notes').html(data);
                })
            });
        });
        function reloadpage(){
            location.reload();
          }
    </script>
</body>
</html>