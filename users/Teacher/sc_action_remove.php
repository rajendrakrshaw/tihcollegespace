<?php
$viewid=$_POST['viewid'];
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
    <button type="button" class="btn btn-success" data-role="action" data-id="<?php echo $viewid; ?>" id="sc-action">Action</button>
    <script>
        $(document).ready(function(){
            // $('#sc-action').click(function(){
            //     // $.get('get.html',function(data,status){
            //     //     $('#changehere').html(data);
            //     //     alert(status);
            //     // });
            //     $.post('sc_action.php',function(data,status){
            //         $('#sc-action-change').html(data);
            //     })
            // });
            $(document).on('click','button[data-role=action]',function(){
              // alert($(this).data('id'));
            //   var dataid=$(this).data('id');
              var dataid=<?php echo $viewid;?>;
              $.post('sc_action.php',{
                viewid : dataid },
                function(data,status){
                    $('#sc-action-change').html(data);
                })
            });
        });
    </script>
</body>
</html>