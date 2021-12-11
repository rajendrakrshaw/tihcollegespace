<?php
   if($_SESSION['login'] && $_SESSION['teacher']){
    ?>
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
    <button type="button" class="btn btn-success" data-role="edit" data-id="<?php echo $viewid; ?>" id="sc-edit">Edit</button>
    <a href="scheduleclass_deleteclass.php?viewid=<?php echo $viewid;?>"><button type="button" class="btn btn-success" data-role="delete" data-id="<?php echo $viewid; ?>" id="sc-delete">Delete</button></a>
    <?php
    }
    else{
    header("location:../../index.html");
    }
    ?>
    <script>
        $(document).ready(function(){
            var dataid = <?php echo $viewid;?>;
            // $('#sc-action').click(function(){
            //     $.post('sc_action_remove.php',function(data,status){
            //         $('#sc-action-change').html(data);
            //     })
            // });
            $(document).on('click','button[data-role=action]',function(){
              // alert($(this).data('id'));
            //   var dataid=$(this).data('id');
              $.post('sc_action_remove.php',{
                viewid : dataid },
                function(data,status){
                    $('#sc-action-change').html(data);
                })
            });
            // $('#sc-edit').click(function(){
                $(document).on('click','button[data-role=edit]',function(){
                
                $.post('scheduleclass_edit.php',{
                viewid : dataid },function(data,status){
                    $('#change-scheduleclass').html(data);
                })
            });
            // $('#sc-delete').click(function(){
                //     $(document).on('click','button[data-role=delete]',function(){
                //     $.post('scheduleclass_delete.php',{
                //     viewid : dataid },function(data,status){
                //     })
                // });
        });
    </script>
</body>
</html>