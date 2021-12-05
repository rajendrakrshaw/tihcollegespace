<?php
// include 'connection.php';
// $query = "SELECT * FROM schedule_class order by date";
// $result = $db->query($query);
// 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Question_Paper</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
    </style>
</head>

<body>
    <div class="qp_heading">
        <div class="qp_heading_part mb-3">
            <button type="text" class="btn btn-success btn-lg btn-block">Question Paper</button>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row py-2">
                <!-- <div class="col-md-10 bg-light mt-2 rounded"> -->
             <form name="formName" method="post">
                <font color="red">*</font>Course name:
                <select name="course" size="1" onchange="setOptions(document.formName.course.options[document.formName.course.selectedIndex].value);">
                    <option value="">--- Select ---</option>
                    <option value="MCA">MCA </option>
                    <option value="BBA">BBA </option>
                    <option value="BCA">BCA </option>
                </select><!-- <br /> -->
                <font color="red">*</font>Semster: <select name="sem">
                    <option value="">--- Select ---</option>
                    <option value="Sem-1"> Sem-1 </option>
                    <option value="Sem-2"> Sem-2 </option>
                    <option value="Sem-3"> Sem-3 </option>
                    <option value="Sem-4"> Sem-4 </option>
                    <option value="Sem-5"> Sem-5 </option>
                    <option value="Sem-6"> Sem-6 </option>
                </select>

                <!-- Paper Code: <input type="text" name="P_Codes"> -->
                Year:
                <select name="year">
                    <option value="">--- Select ---</option>
                    <option value="2020">2020 </option>
                    <option value="2019">2019 </option>
                    <option value="2018">2018 </option>
                    <option value="2017">2017 </option>
                    <option value="2016">2016 </option>
                    <option value="2015">2015 </option>
                    <option value="2014">2014 </option>
                    <option value="2013">2013 </option>
                    <option value="2012">2012 </option>
                    <option value="2011">2011 </option>
                    <option value="2010">2010 </option>
                    <option value="2009">2009 </option>
                </select>

                <div action="upload.php" method="post" enctype="multipart/form-data">
                    Select file to upload:
                    <input class="form-control-lg border-primary rounded-2 " type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Upload file" name="submit">
                </div>
            </form>
            <!-- Paper name: <input type="text" name="P_Name"> -->
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          
        </div>
    </div>
    <hr>
    <?php
    include 'condb.php';
    $stmt = $conn->prepare("SELECT * FROM q_paper");
    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <div class="qp_container">
        <div class="qp_action">
        </div>
        <!-- BCA SEM1 Alpha Date Time View -->
        <table class="table table-hover table-light table-striped" id="table_data">
            <tr>
                <th>Serial No</th>
                <th>Course</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Year</th>
                <th>View</th>
                <th>Download</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                $sl = 0;
                while ($row = $result->fetch_assoc()) {
                    $sl++;
            ?>
                    <tr>
                        <th><?php echo $sl; ?></th>
                        <td><?php echo $row['course']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><button class="btn btn-outline-success" data-role="view" data-id="<?php echo $row['id']; ?>"> View </button></td>
                        <td><a href=".php?viewid=<?php echo $row['id']; ?>"><button class="btn btn-outline-success"> Download </button> </a></td>

                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <?php

        if ($result->num_rows == 0) {
        ?>
            <p class="text-center">No Records Found.</p>
        <?php
        }
        ?>
    </div>
    <!-- <script>
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
            $(document).on('click','button[data-role=view]',function(){
              // alert($(this).data('id'));
              var dataid=$(this).data('id');
              $.post('scheduleclassview.php',{
                viewid : dataid },
                function(data,status){
                    $('#change-scheduleclass').html(data);
                })
            });
        });
    </script> -->
</body>

</html>