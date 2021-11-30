<?php
include 'connection.php';
$query="SELECT * FROM streams";
$result=$db->query($query);
// $row=$result->fetch_assoc();
$viewid=$_POST['viewid'];
// $viewid=1;
$a = "SELECT * FROM schedule_class WHERE id='$viewid'";
// $a=" select * from schedule_class where id='$viewid'";
$b = $db->query($a);
$res = $b->fetch_assoc();
?>
<html>
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
    <form method="post">
      <div class="form-row">
        <div class="form-half">
          <div class="form-half-left">
            <label for="">Stream</label>
          </div>
          <div class="form-half-right">
            <select name="streamSC" id="stream"  onchange="FetchSemester(this.value)"  required>
              <option selected><?php echo $res['stream']; ?></option>
            <?php
              if ($result->num_rows > 0 ) {
                while ($row = $result->fetch_assoc()) {
                  echo '<option value='.$row['id'].'>'.$row['stream'].'</option>';
              }
              }
            ?> 
            </select>
          </div>
        </div>
        <div class="form-half">
          <div class="form-half-left">
            <label>Semester</label>
          </div>
          <div class="form-half-right">
            <select name="semesterSC" id="semester"  onchange="FetchSubject(this.value)"  required>
              <option selected disabled>Select Semester</option>
            </select>
          </div>
        </div>
        </div>
        <div class="form-row">
        <div class="form-half">
          <div class="form-half-left">
            <label>Section</label>
          </div>
          <div class="form-half-right">
            <select name="sectionSC" id="section"  required>
              <option selected disabled>Select Section</option>
              <option value="Alpha">Alpha</option>
              <option value="Beta">Beta</option>
              <option value="Combined">Combined</option>
            </select>
            </div>
        </div>

        <div class="form-half">
          <div class="form-half-left">
            <label>Subject</label>
          </div>
          <div class="form-half-right">
            <select name="subjectSC" id="subject"  required>
              <option selected disabled>Select Subject</option>
            </select>
          </div>
        </div>
        </div>
        <div class="form-row">
          <div class="form-half">
            <div class="form-half-left">
              <label>Date of the Class</label>
            </div>
            <div class="form-half-right">
              <input type="date" name="dateSC"  id="date" value="<?php echo $res['date']; ?>" required>
            </div>
          </div>
          
          <div class="form-half">
            <div class="form-half-left">
              <label>Timing of the Class</label>
            </div>
            <div class="form-half-right">
              <input type="time" name="timeSC"  id="time" value="<?php echo $res['time']; ?>" required>
            </div>
          </div>
        </div>
        <div class="form-row">
        <div class="form-full">
          <div class="form-full-left">
            <label>Topic Name</label>
          </div>
          <div class="form-full-right">
            <input type="text" name="topicSC"  id="topic" placeholder="Write the Topics" value="<?php echo $res['topic']; ?>" required>
          </div>
        </div>
        </div>
        <div class="form-row">
          <div class="form-full">
            <div class="form-full-left">
              <label>Class Link</label>
            </div>
            <div class="form-full-right">
              <input type="url" name="classlinkSC"  id="classlink" placeholder="Enter a valid url" value="<?php echo $res['classlink']; ?>">
            </div>
          </div>
        </div>
          <div class="form-row">
            <div class="form-half">
              <div class="form-half-btn">  
                <input class="btn btn-success" type="submit" value="Update">
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
function FetchSemester(id){
    $('#semester').html('');
    $('#subject').html('<option>Select Subject</option>');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { stream_id : id},
      success : function(data){
         $('#semester').html(data);
      }

    })
  }

  function FetchSubject(id){ 
    $('#subject').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { semester_id : id},
      success : function(data){
         $('#subject').html(data);
      }

    })
  }
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