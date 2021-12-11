<?php
include 'connection.php';
$viewid=$_POST['viewid'];
$query = "SELECT * FROM updates WHERE id='$viewid'";
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
<div class="SC-form-container">
    <div class="sc-action d-block mr-0 ml-auto" id="update-delete">
    <a href="updates_delete.php?viewid=<?php echo $viewid;?>"><button type="button" class="btn btn-success" data-role="delete" data-id="<?php echo $viewid; ?>" id="update-delete">Delete</button></a>

    </div>
    <div>
    <table class="table table-bordered">
        <tr>
            <th>Stream</th>
            <td><?php echo $row['stream'];?></td>
        </tr>
        <tr>
            <th>Year</th>
            <td><?php echo $row['year'];?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?php echo $row['title'];?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo $row['date'];?></td>
        </tr>
        <tr>
            <th>Time</th>
            <td><?php echo $row['time'];?></td>
        </tr>
        <?php
            if($row['message']==''||$row['message']==NULL){
            ?>
        <tr>
            <th colspan="2" class="text-center"></th>
        </tr>
        <?php
            }
            else{
        ?>
        <tr>
            <th>Notice</th>
            <td><?php echo $row['message'];?></td>        
        </tr>
        <?php
            }
        ?>
        <?php
            if($row['file']==''||$row['file']==NULL){
            ?>
        <tr>
            <th colspan="2" class="text-center"></th>
        </tr>
        <?php
            }
            else{
        ?>
        <tr>
            <th>Document</th>
            <td class="text-center"><a href="<?php echo $row['file'];?>" target="_blank"><button class="btn btn-outline-success" >Open</button></a></th>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</div>

<script>
      $(document).ready(function(){
            $('#updates-new').click(function(){
                // $.get('get.html',function(data,status){
                //     $('#changehere').html(data);
                //     alert(status);
                // });
                $.post('updatesform.php',function(data,status){
                    $('#change-updates').html(data);
                })
            });
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
    </script>
</body>
</html>