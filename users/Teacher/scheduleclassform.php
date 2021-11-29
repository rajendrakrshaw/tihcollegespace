<?php
include 'connection.php';
$query = "SELECT * FROM streams";
$result = $db->query($query);
?>
<html>
<body>    
<div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="sc-list" onclick="ScheduleList()">List of Classes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="sc-new" onclick="ScheduleNew()" disabled>New Class</button>
      </div>
</div>
<div class="SC-form-container">
    <form action="scheduleclass.php" method="post">
      <div class="form-row">
        <div class="form-half">
          <div class="form-half-left">
            <label for="">Stream</label>
          </div>
          <div class="form-half-right">
            <select name="streamSC" id="stream"  onchange="FetchSemester(this.value)"  required>
              <option selected disabled>Select Stream</option>
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
              <input type="date" name="dateSC"  id="date" required>
            </div>
          </div>
          
          <div class="form-half">
            <div class="form-half-left">
              <label>Timing of the Class</label>
            </div>
            <div class="form-half-right">
              <input type="time" name="timeSC"  id="time" required>
            </div>
          </div>
        </div>
        <div class="form-row">
        <div class="form-full">
          <div class="form-full-left">
            <label>Topic Name</label>
          </div>
          <div class="form-full-right">
            <input type="text" name="topicSC"  id="topic" placeholder="Write the Topics" required>
          </div>
        </div>
        </div>
        <div class="form-row">
          <div class="form-full">
            <div class="form-full-left">
              <label>Class Link</label>
            </div>
            <div class="form-full-right">
              <input type="url" name="classlinkSC"  id="classlink" placeholder="Enter a valid url">
            </div>
          </div>
        </div>
          <div class="form-row">
            <div class="form-half">
              <div class="form-half-btn">  
                <input class="btn btn-success" type="submit" value="Schedule Class">
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