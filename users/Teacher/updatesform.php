<?php

include 'connection.php';

$sql="select * from update_streams";
$result=mysqli_query($conn,$sql);

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
        <button type="button" class="btn btn-success btn-lg btn-block" id="updates-list">Updates</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="updates-new" disabled >New Update</button>
      </div>
</div>

<div class="updates-form-container">
<form action="updatesformdata.php" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-half">
          <div class="form-half-left">
            <label for="">Stream</label>
          </div>
          <div class="form-half-right">
            <select name="stream" id="stream"  onchange="FetchYear(this.value)"  required>
              <option selected disabled>Select Stream</option>
            <?php
              if (mysqli_num_rows($result) > 0 ) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value='.$row['id'].'>'.$row['stream'].'</option>';
                }
              }
            ?> 
            </select>
          </div>
        </div>
        <div class="form-half">
          <div class="form-half-left">
            <label>Year</label>
          </div>
          <div class="form-half-right">
            <select name="year" id="year" required>
              <option selected disabled>Select Year</option>
            </select>
          </div>
        </div>
        </div>
        <div class="form-row">
        <div class="form-full">
          <div class="form-full-left">
            <label>Title</label>
          </div>
          <div class="form-full-right">
            <input type="text" name="title"  id="title" placeholder="Write the Title" required>
          </div>
        </div>
        </div>
        <div class="form-row">
          <div class="form-full">
            <div class="form-full-left">
              <label>Message</label>
            </div>
            <div class="form-full-right">
              <!-- <input type="url" name="classlinkSC"  id="classlink" placeholder="Enter a valid url"> -->
              <textarea name="message" id="message"></textarea>
            </div>
          </div>
        </div>
        <div class="form-row">
        <div class="form-full">
          <div class="form-full-left">
            <label>Document</label>
          </div>
          <div class="form-full-right-file">
            <input type="file" name="documentname"  id="document">
          </div>
        </div>
        </div>
          <div class="form-row">
            <div class="form-half">
              <div class="form-half-btn">  
                <input type="submit"  class="btn btn-success"  value="Update">
              </div>
            </div>
            <div class="form-half">
              <div class="form-half-btn">  
                <input class="btn btn-success" type="reset" value="Clear Entries">
              </div>
          </div>
        </div>

      </form>
</div>




<script>
    $(document).ready(function(){
        $('#updates-list').click(function(){
            // $.get('get.html',function(data,status){
            //     $('#changehere').html(data);
            //     alert(status);
            // });
            $.post('updateslist.php',function(data,status){
                $('#change-updates').html(data);
            })
        });
    });

    function FetchYear(id){
        $('#year').html('');
        $.ajax({
        type:'post',
        url: 'ajaxdata.php',
        data : { year_id : id},
        success : function(data){
            $('#year').html(data);
        }

        });
    }

</script>

</body>
</html>