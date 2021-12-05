<?php
include 'connection.php';
$viewid=$_POST['viewid'];
$query = "SELECT * FROM upload_notes WHERE id='$viewid'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            width: 400px;
            margin:auto;
            margin-top:5px;
        }
        
        .SC-form-container{
            display:flex;
            flex-direction:column;
            /* justify-content:center;
            align-items:center; */
        }
        .sc-action button{ 
            float: right;
            margin:10px;
        }
        .faculty-details{
            margin:auto;
            margin-top: -20px;
            margin-bottom: 20px;
        }
        .faculty{
            display : flex;
            justify-content:center;
            align-items:center;
        }
        .faculty-left{
            width:150px;
            font-weight: bold;
        }
        .faculty-right{
            width:150px;
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>
<div class="sc-heading">
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-list" onclick="ScheduleList()">Uploaded Notes</button>
      </div>
      <div class="sc-heading-part">
        <button type="button" class="btn btn-success btn-lg btn-block" id="un-new" onclick="ScheduleNew()">New Notes</button>
      </div>
</div>
<div class="SC-form-container">
    <div class="sc-action d-block mr-0 ml-auto" id="sc-action-change">
    <a href="uploadnotes_delete.php?viewid=<?php echo $viewid;?>"><button type="button" class="btn btn-success" data-role="delete" data-id="<?php echo $viewid; ?>" id="sc-delete">Delete</button></a>
    </div>
    
    <div>
    <table class="table table-bordered">
        <tr>
            <th>Stream</th>
            <td><?php echo $row['stream'];?></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><?php echo $row['sem'];?></td>
        </tr>
        <tr>
            <th>Section</th>
            <td><?php echo $row['section'];?></td>
        </tr>
        <tr>
            <th>Subject</th>
            <td><?php echo $row['subject'];?></td>
        </tr>
        <tr>
            <th>Topic</th>
            <td><?php echo $row['topic'];?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo $row['date'];?></td>
        </tr>
        <?php
            if($row['file']==''||$row['file']==NULL){
            ?>
        <?php
            }
            else{
                $array=explode(",",$row['file']);
        ?>
        <tr>
            <th>Study Material</th>
            <td class="text-center">
                <?php
                $i=0;
                    foreach($array as $file){
                        $i=$i+1;
                        if($file=='')
                        {
                            break;
                        }
                ?>
                <a href="<?php 

                echo $file;

                ?>" target="_blank">
                <button class="btn btn-outline-success" >
                    <?php 
                        $filename=explode("/",$file);
                        foreach($filename as $notes){
                            if($notes=='')
                            {
                                break;
                            }
                            else
                                $seenote=$notes;
                        }
                        echo $seenote; 
                    ?>
                </button>
            </a>
            <?php
                    }
                    ?>
            </td>
        </tr>
        <?php
            }
        ?>
        <?php
            if($row['recordinglink']==''||$row['recordinglink']==NULL){
            ?>
        <tr>
            <th colspan="2" class="text-center">No Recordings Available</th>
        </tr>
        <?php
            }
            else{
        ?>
        <tr>
            <td colspan="2" class="text-center"><a href="<?php echo $row['recordinglink'];?>" target="_blank"><button class="btn btn-outline-success" >Recording Link</button></a></th>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</div>

<script>
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
            $('#sc-action').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('sc_action.php',function(data,status){
                    $('#sc-action-change').html(data);
                })
            });
        });
    </script>
</body>
</html>