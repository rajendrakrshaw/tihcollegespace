
        <h4 class="teh"><strong>Testing</strong></h4>
        <div id="change-scheduleclass">
        <?php include 'scheduleclasslist.php'; ?>
        </div>
<script type="text/javascript">
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
        $(document).on('click','a[data-role=ScheduleClass]',function(){
          $.post('test.php',
            function(data,status){
                $('#dashboard').html(data);
            })
          });
          $('#sc-new').click(function(){
            $.post('scheduleclassform.php',function(data,status){
                $('#change-scheduleclass').html(data);
            })
          });
          $('#sc-list').click(function(){
            $.post('scheduleclasslist.php',function(data,status){
                $('#change-scheduleclass').html(data);
            })
          });
        $('#un-new').click(function(){
          $.post('uploadnotesform.php',function(data,status){
              $('#change-uploadnotes').html(data);
          })
        });
        $('#un-list').click(function(){
          $.post('uploadnoteslist.php',function(data,status){
              $('#change-uploadnotes').html(data);
          })
        });
      });
  
    </script>