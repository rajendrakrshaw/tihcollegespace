<?php
include 'connection.php';
$query = "SELECT * FROM upload_notes";
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
<div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-list" onclick="ScheduleList()" disabled>Uploaded Notes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-new" onclick="ScheduleNew()">New Notes</button>
      </div>
</div>
<div class="SC-form-container">
  <div id="change-table-UN">
    <table class="table table-hover">
        <tr>
          <th>Serial No</th>
          <th class="select">
            <select name="" id="FilterStreamUN" onchange="FilterStreamUN(this.value)">
              <option value="all" selected>All Stream</option>
              <?php
                $sql="select * from streams";
                $q1=mysqli_query($conn,$sql);
                if (mysqli_num_rows($q1) > 0 ) {
                  while ($row = mysqli_fetch_assoc($q1)) {
                    echo '<option value='.$row['stream'].'>'.$row['stream'].'</option>';
                  }
                }

              ?>
            </select>
          </th>
          <th>Semester</th>
          <th>Section</th>
          <th class="select">
            <select name="" id="FilterDateUN" onchange="FilterDateUN(this.value)">
              <option value="all" selected>Date</option>
              <option value="week">This Week</option>
              <option value="month">This Month</option>
            </select>
          </th>
          <th>Topic</th>
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
                <td><?php echo $row['sem']; ?></td>
                <td><?php echo $row['section']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['topic']; ?></td>
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
  function FilterStreamUN(getstream){
        // getstream=document.getElementById("FilterStream");
        // console.log(getstream);
        dateget=$("#FilterDateUN").val();
        $.ajax({
          type:'post',
          url: 'uploadnotesfilter.php',
          data : { stream : getstream, date : dateget},
          success : function(data){
            $('#change-table-UN').html(data);
          }

        })
      }
      function FilterDateUN(dateget){
        // getstream=document.getElementById("FilterStream");
        // console.log(getstream);
        getstream=$("#FilterStreamUN").val();
        $.ajax({
          type:'post',
          url: 'uploadnotesfilter.php',
          data : { stream : getstream, date : dateget},
          success : function(data){
            $('#change-table-UN').html(data);
          }

        })
      }
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
        $(document).on('click','tr[data-role=view]',function(){
          // alert($(this).data('id'));
          var dataid=$(this).data('id');
          $.post('uploadnotesview.php',{
            viewid : dataid },
            function(data,status){
                $('#change-uploadnotes').html(data);
            })
        });
    });
</script>
</body>
</html>