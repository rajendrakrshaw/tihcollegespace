<?php
include 'connection.php';
$query = "SELECT * FROM schedule_class order by date";
$result = mysqli_query($conn,$query);
?>
<div class="modal-header">
    <div class="title"><h2><Strong>Classes</Strong></h2></div>
    <button class=" modal-close-btn" onclick="reloadpage()">&times;</button>
  </div>
    <div class="sc-action">

      </div>
        <!-- BCA SEM1 Alpha Date Time View -->
        <table class="table table-hover">
            <tr>
                <th>Serial No</th>
                <th>Subject</th>
                <th>Faculty</th>
                <!-- <th></th> -->
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
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['faculty_name']; ?></td>
                  
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                </tr>
                <?php
                }
              }
            ?> 
        </table>
        <?php
        
          if (mysqli_num_rows($result) == 0){
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
              $.post('classes_view.php',{
                viewid : dataid },
                function(data,status){
                    $('#Classes').html(data);
                })
            });
          });
          function reloadpage(){
            location.reload();
          }
    </script>