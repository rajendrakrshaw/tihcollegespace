<?php
include 'connection.php';
$query = "SELECT * FROM updates order by date desc";
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
<div class="modal-header">
      <div class="title"><h3><strong>Updates</strong></h3></div>
      <button class="modal-close-btn" onclick="reloadpage()">&times;</button>
</div>
<div class="SC-form-container">
    <table class="table table-hover">
        <tr>
            <th>Serial No</th>
            <th>Title</th>
            <th>Date</th>
            <th>Time</th>
            <!-- <th>View</th> -->
        </tr>
        <?php
            if (mysqli_num_rows($result) > 0) {
                $sl=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sl++;
                    ?>
                  <tr data-role="view" data-id="<?php echo $row['id'];?>" style="cursor:pointer;">
                    <th><?php echo $sl; ?></th>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
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
              $.post('updates_view.php',{
                viewid : dataid },
                function(data,status){
                    $('#Updates').html(data);
                })
            });
        });
        function reloadpage(){
            location.reload();
          }
    </script>

</body>
</html>