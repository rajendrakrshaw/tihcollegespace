<?php
include 'connection.php';
$query = "SELECT * FROM streams";
$result = mysqli_query($conn,$query);
?>
<html>
  <head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  </head>
<body>    
<div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="sc-list" onclick="ScheduleList()">List of Classes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block active" id="sc-new" onclick="ScheduleNew()" disabled>New Class</button>
      </div>
</div>
<div class="SC-form-container">
    <form name="scheduleclass-form" action="scheduleclassformdata.php"  method="post">
      <div class="form-row">
        <div class="form-half">
          <div class="form-half-left">
            <label for="">Stream</label>
          </div>
          <div class="form-half-right">
            <select name="streamSC" id="stream"  onchange="FetchSemester(this.value)"  required>
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
              <input type="date" name="dateSC" class="dateSC"  id="date_picker" required>
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
  $(function(){
          var dtToday = new Date();
          var month = dtToday.getMonth+1;
          var day = dtToday.getDate();
          var year = dtToday.getFullYear();
          if(month < 10){
          month = "0" + month.toString();
          }
          if(day < 10){
            day = "0" + day.toString();
          }
          var maxDate = year+'-'+month+'-'+day;
          $('#dateSC').attr('max',maxDate);
        })
      $(document).ready(function(){
        $(function(){
          var dtToday = new Date();
          var month = dtToday.getMonth+1;
          var day = dtToday.getDate();
          var year = dtToday.getFullYear();
          if(month < 10){
          month = "0" + month.toString();
          }
          if(day < 10){
            day = "0" + day.toString();
          }
          var maxDate = year+'-'+month+'-'+day;
          $('#dateSC').attr('max',maxDate);
        })

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
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
    </script>
    
  </body>
</html>