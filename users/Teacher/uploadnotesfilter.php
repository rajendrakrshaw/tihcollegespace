<?php
include 'connection.php';
$stream=$_POST['stream'];
// $stream="SEM3";
$dateprint=$_POST['date'];
$week=date("Y-m-d");
if($stream!="all"){
  if($dateprint=="all"){
      $query = "SELECT * FROM upload_notes where stream='$stream' order by date";
  }
  else
  if($dateprint=="week"){
      $today=date("Y-m-d");
      $date=date_create(date("Y-m-d"));
      date_add($date,date_interval_create_from_date_string("-7 days"));
      $week=date_format($date,"Y-m-d");
      $query = "SELECT * FROM upload_notes where stream='$stream' and date>='$week'";
      
  }
  else
  if($dateprint=="month"){
      $today=date("Y-m-d");

      $date=date_create(date("Y-m-d"));
      date_add($date,date_interval_create_from_date_string("-30 days"));
      $week=date_format($date,"Y-m-d");
      $query = "SELECT * FROM upload_notes where stream='$stream' and date>='$week'";
  }
}
else
if($stream=="all"){
  if($dateprint=="all"){
    $query = "SELECT * FROM upload_notes order by date";
  }
  else
  if($dateprint=="week"){
      $today=date("Y-m-d");
      $date=date_create(date("Y-m-d"));
      date_add($date,date_interval_create_from_date_string("-7 days"));
      $week=date_format($date,"Y-m-d");
      $query = "SELECT * FROM upload_notes where date>='$week'";
      
  }
  else
  if($dateprint=="month"){
      $today=date("Y-m-d");

      $date=date_create(date("Y-m-d"));
      date_add($date,date_interval_create_from_date_string("-30 days"));
      $week=date_format($date,"Y-m-d");
      $query = "SELECT * FROM upload_notes where date>='$week'";
  }
}
$result = mysqli_query($conn,$query);
echo $query;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .select select{
        background:transparent;
        width:110px;
        border:none;
        font-weight: bold;
      }
    </style>
</head>
<body>

    <div class="SC-form-container">
      <div id="change-table-UN">
        <!-- BCA SEM1 Alpha Date Time View -->
        <table class="table table-hover" >
            <tr>
                <th>Serial No</th>
                <th class="select">
                  <select name="" id="FilterStreamUN" onchange="FilterStreamUN(this.value)">
                      <option value="all" <?php if($stream=="all"){echo 'selected';} ?>>All Stream</option>
                      <option value="BCA" <?php if($stream=="BCA"){echo 'selected';} ?>>BCA</option>
                    <option value="BBA" <?php if($stream=="BBA"){echo 'selected';} ?>>BBA</option>
                    <option value="MCA" <?php if($stream=="MCA"){echo 'selected';} ?>>MCA</option>
                    <option value="MSC" <?php if($stream=="MSC"){echo 'selected';} ?>>MSC</option>
                  </select>
                </th>
                <th>Semester</th>
                <th>Section</th>
                <th class="select">
                <select name="" id="FilterDateUN" onchange="FilterDateUN(this.value)">
                    <option value="all" <?php if($dateprint=="all"){echo 'selected';} ?>>Date</option>
                    <option value="week" <?php if($dateprint=="week"){echo 'selected';} ?>>This Week</option>
                    <option value="month" <?php if($dateprint=="month"){echo 'selected';} ?>>This Month</option>
                  </select>
                </th>
                <th>Topic</th>
            </tr>
            <?php
              if (mysqli_num_row($results > 0 ) {
                $sl=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sl++;
                  ?>
                  <tr data-role="view" data-id="<?php echo $row['id'];?>" style="cursor:pointer;">                    

                    <th><?php echo $sl; ?></th>
                    <td><?php echo $row['stream']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['topic']; ?></td>
                </tr>
                <?php
                }
              }
            ?> 
        </table>
        <?php
        
          if (mysqli_num_rows($result) == 0 ){
            ?>
              <p class="text-center">No Records Found.</p>
            <?php
          }
        ?>
      </div>
    </div>

    
</body>
</html>