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
<div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="updates-list" disabled>Updates</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="updates-new" >New Update</button>
      </div>
</div>
<div class="SC-form-container">
    <div class="change-table-updates">
    <table class="table table-hover">
        <tr>
            <th>Serial No</th>
            <th>Stream</th>
            <th>Year</th>
            <th>Title</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        <?php
            if (mysqli_num_rows($result) > 0 ) {
                $sl=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sl++;
                    ?>
                <tr data-role="view" data-id="<?php echo $row['id'];?>" style="cursor:pointer;">                    
                    <th><?php echo $sl; ?></th>
                    <td><?php echo $row['stream']; ?></td>
                    <td><?php echo $row['year']; ?></td>
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
</div>





<script>
      $(document).ready(function(){
            $('#updates-new').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('updatesform.php',function(data,status){
                    $('#change-updates').html(data);
                })
            });
            $(document).on('click','tr[data-role=view]',function(){
              // alert($(this).data('id'));
              var dataid=$(this).data('id');
              $.post('updatesview.php',{
                viewid : dataid },
                function(data,status){
                    $('#change-updates').html(data);
                })
            });
        });
    </script>

</body>
</html>