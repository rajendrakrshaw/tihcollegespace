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
        .notice{
            /* border:2px solid red; */
            margin:auto;
            margin-top:30px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column; 
            width:60%;
        }
        .notice h2{
            text-decoration-line: underline;
            text-decoration-style: double;
        }
        .notice p{
            margin-top:20px;
            text-align:center;
        }
        /* .notice  */
        @media only screen and (max-width: 800px) {
            .notice{
                width:80%;
            }
        }
        @media only screen and (max-width: 400px) {
            .notice{
                width:90%;
            }
        }
    </style>
</head>
<body>
    
    <div class="modal-header">
        <div class="title"><h2 data-role="classes"><strong>Updates</strong></h2></div>
        <button class="modal-close-btn" onclick="reloadpage()">&times;</button>
    </div>
    <div class="notice">
        <h2><?php echo $row['title']; ?></h2>
        <?php if($row['message']!=''){?>
        <p><?php echo $row['message']; ?></p>
        <?php } ?>
        <?php if($row['file']!=''){?>
        <p><a href="<?php echo '../Teacher/'.$row['file']; ?>" target="_blank"><button class="btn btn-success">Attached File</button></a></p>
        <?php } ?>
    </div>
        
        
        <script>
      $(document).ready(function(){
          $(document).on('click','h2[data-role=classes]',function(){
              // alert($(this).data('id'));
              $.post('updates.php',
              function(data,status){
                  $('#Updates').html(data);
                })
            });
        });
        function reloadpage(){
            location.reload();
          }
        </script>
</body>
</html>