<?php
        include 'connection.php';
        $query = "SELECT * FROM streams";
        $result = $db->query($query);
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
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-list">See Notes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-new" disabled>New Note</button>
      </div>
</div>
<div class="SC-form-container">
    <form action="uploadnotes.php" method="post" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-half">
          <div class="form-half-left">
            <label for="">Stream</label>
          </div>
          <div class="form-half-right">
            <select name="streamUN" id="streamUN"  onchange="FetchSemesterUN(this.value)"  required>
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
            <select name="semesterUN" id="semesterUN"  onchange="FetchSubjectUN(this.value)"  required>
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
            <select name="sectionUN" id="sectionUN"  required>
              <option selected disabled>Select Section</option>
              <option value="alpha">Alpha</option>
              <option value="beta">Beta</option>
              <option value="combined">Combined</option>
            </select>
            </div>
        </div>

        <div class="form-half">
          <div class="form-half-left">
            <label>Subject</label>
          </div>
          <div class="form-half-right">
            <select name="subjectUN" id="subjectUN"  required>
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
              <input type="date" name="dateUN"  id="dateUN" required>
            </div>
          </div>
          
          <div class="form-half">
            <div class="form-half-left">
              <label>Study Material</label>
            </div>
            <div class="form-half-right">
            <input type="file" name="fileUN" id="fileUN" >
            </div>
          </div>
        </div>
        <div class="form-row">
        <div class="form-full">
          <div class="form-full-left">
            <label>Topic Name</label>
          </div>
          <div class="form-full-right">
            <input type="text" name="topicUN"  id="topicUN" placeholder="Write the Topics" required>
          </div>
        </div>
        </div>
        <div class="form-row">
          <div class="form-full">
            <div class="form-full-left">
              <label>Class Recording Link</label>
            </div>
            <div class="form-full-right">
              <input type="url" name="classlinkUN"  id="classlinkUN" placeholder="Enter a valid url">
            </div>
          </div>
        </div>
          <div class="form-row">
            <div class="form-half">
              <div class="form-half-btn">  
                <input class="btn btn-success" type="submit" value="Upload Notes">
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
        function FetchSemesterUN(id){
    $('#semesterUN').html('');
    $('#subjectUN').html('<option>Select Subject</option>');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { stream_id : id},
      success : function(data){
         $('#semesterUN').html(data);
      }

    })
  }

  function FetchSubjectUN(id){ 
    $('#subjectUN').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { semester_id : id},
      success : function(data){
         $('#subjectUN').html(data);
      }

    })
  }
  updateList = function() {
    var input = document.getElementById('file');
    var output = document.getElementById('fileList');
    var children = "";
    for (var i = 0; i < input.files.length; ++i) {
        children += '<li>' + input.files.item(i).name + '</li>';
    }
    output.innerHTML = '<ul>'+children+'</ul>';
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
        });
    </script>
</body>
</html>