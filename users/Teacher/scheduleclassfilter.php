<?php
include 'connection.php';
$faculty_id=1;
$stream=$_POST['stream'];
$sem=$_POST['sem'];
$section=$_POST['section'];
$dateprint=$_POST['date'];
$fun=$_POST['fun'];
$week=date("Y-m-d");
$q="select * from schedule_class where stream='$stream' order by date";

if($stream=="all"){
  if($sem=="all"){
    if($section=="all"){
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and date<='$dateupto'";
      }
    }
    else{
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' and section='$section'  order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and section='$section' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and section='$section' and date<='$dateupto'";
      }
    }
  }
  else{
    if($section=="all"){
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' and sem='$sem' order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and sem='$sem' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and sem='$sem' and date<='$dateupto'";
      }
    }
    else{
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' and sem='$sem' and section='$section'  order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and sem='$sem' and section='$section' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and sem='$sem' and section='$section' and date<='$dateupto'";
      }
    }
  }
}
else{
  if($sem=="all"){
    if($section=="all"){
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' and stream='$stream' order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and date<='$dateupto'";
      }
    }
    else{
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' and stream='$stream' and section='$section'  order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and section='$section' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and section='$section' and date<='$dateupto'";
      }
    }
  }
  else{
    if($section=="all"){
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' and stream='$stream' and sem='$sem' order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and sem='$sem' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and sem='$sem' and date<='$dateupto'";
      }
    }
    else{
      if($dateprint=="all"){
        $q="select * from schedule_class where faculty_id='$faculty_id' and stream='$stream' and sem='$sem' and section='$section'  order by date";
      }
      else
      if($dateprint=="week"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("7 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and sem='$sem' and section='$section' and date<='$dateupto'";
      }
      else
      if($dateprint=="month"){
        $date=date_create(date("Y-m-d"));
        date_add($date,date_interval_create_from_date_string("30 days"));
        $dateupto=date_format($date,"Y-m-d");
        $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and sem='$sem' and section='$section' and date<='$dateupto'";
      }
    }
  }
}













// if($stream!="all"){
//   if($dateprint=="all"){
//       $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' order by date";
//   }
//   else
//   if($dateprint=="week"){
//       $today=date("Y-m-d");
//       $date=date_create(date("Y-m-d"));
//       date_add($date,date_interval_create_from_date_string("7 days"));
//       $week=date_format($date,"Y-m-d");
//       $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream'  and date<='$week'";
      
//   }
//   else
//   if($dateprint=="month"){
//       $today=date("Y-m-d");

//       $date=date_create(date("Y-m-d"));
//       date_add($date,date_interval_create_from_date_string("30 days"));
//       $week=date_format($date,"Y-m-d");
//       $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and stream='$stream' and date<='$week'";
//   }
// }
// else
// if($stream=="all"){
//   if($dateprint=="all"){
//     $q = "SELECT * FROM schedule_class WHERE faculty_id='$faculty_id' order by date";
//   }
//   else
//   if($dateprint=="week"){
//       $today=date("Y-m-d");
//       $date=date_create(date("Y-m-d"));
//       date_add($date,date_interval_create_from_date_string("7 days"));
//       $week=date_format($date,"Y-m-d");
//       $q = "SELECT * FROM schedule_class where faculty_id='$faculty_id' and date<='$week'";
      
//   }
//   else
//   if($dateprint=="month"){
//       $today=date("Y-m-d");

//       $date=date_create(date("Y-m-d"));
//       date_add($date,date_interval_create_from_date_string("30 days"));
//       $week=date_format($date,"Y-m-d");
//       $q = "SELECT * FROM schedule_class where date<='$week'";
//   }
// }
$res = mysqli_query($conn,$q);
echo $q.'<br>'.$stream.' '.$sem.' '.$section.' '.$dateprint;


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
<table class="table table-hover" >
            <tr>
                <th>Serial No</th>
                <th class="select">
                  <select name="" id="FilterStream" onchange="FilterStream(this.value)">
                      <option value="all" <?php if($stream=="all"){echo 'selected';} ?>><?php if($stream!="all") echo "All Stream"; else echo "Stream"; ?></option>
                      <option value="BCA" <?php if($stream=="BCA"){echo 'selected';} ?>>BCA</option>
                    <option value="BBA" <?php if($stream=="BBA"){echo 'selected';} ?>>BBA</option>
                    <option value="MCA" <?php if($stream=="MCA"){echo 'selected';} ?>>MCA</option>
                    <option value="MSC" <?php if($stream=="MSC"){echo 'selected';} ?>>MSC</option>
                  </select>
                </th>
                <th class="select">
                  <select name="" id="FilterSemester" onchange="FilterSemesterSC(this.value)">
                    <option value="all" <?php if($sem=="all"){echo 'selected';} ?>><?php if($sem!="all") echo "All Semester"; else echo "Semester"; ?></option>
                    <option value="SEM1" <?php if($sem=="SEM1"){echo 'selected';} ?>>SEM1</option>
                    <option value="SEM2" <?php if($sem=="SEM2"){echo 'selected';} ?>>SEM2</option>
                    <option value="SEM3" <?php if($sem=="SEM3"){echo 'selected';} ?>>SEM3</option>
                    <option value="SEM4" <?php if($sem=="SEM4"){echo 'selected';} ?>>SEM4</option>
                    <option value="SEM5" <?php if($sem=="SEM5"){echo 'selected';} ?>>SEM5</option>
                    <option value="SEM6" <?php if($sem=="SEM6"){echo 'selected';} ?>>SEM6</option>
                  </select>
                </th>
                <th class="select">
                <select name="" id="FilterSection" onchange="FilterSection(this.value)">
                    <option value="all" <?php if($section=="all"){echo 'selected';} ?>><?php if($section!="all") echo "All Section"; else echo "Section"; ?></option>
                    <option value="Alpha" <?php if($section=="Alpha"){echo 'selected';} ?>>Alpha</option>
                    <option value="Beta" <?php if($section=="Beta"){echo 'selected';} ?>>Beta</option>
                    <option value="Combined" <?php if($section=="Combined"){echo 'selected';} ?>>Combined</option>
                  </select>
                </th>
                <th class="select">
                <select name="" id="FilterDate" onchange="FilterDate(this.value)">
                    <option value="all" <?php if($dateprint=="all"){echo 'selected';} ?>><?php if($dateprint!="all") echo "All Date"; else echo "Date"; ?></option>
                    <option value="week" <?php if($dateprint=="week"){echo 'selected';} ?>>This Week</option>
                    <option value="month" <?php if($dateprint=="month"){echo 'selected';} ?>>This Month</option>
                  </select>
                </th>
                <th>Time</th>
            </tr>
            <?php
              if (mysqli_num_rows($res) > 0 ) {
                $sl=0;
                while ($row = mysqli_fetch_assoc($res)) {
                    $sl++;
                  ?>
                  <tr data-role="view" data-id="<?php echo $row['id'];?>" style="cursor:pointer;">                    

                    <th><?php echo $sl; ?></th>
                    <td><?php echo $row['stream']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                </tr>
                <?php
                }
              }
              else
            ?> 
        </table>
        <?php
        
          if (mysqli_num_rows($res) == 0 ){
            ?>
              <p class="text-center">No Records Found.</p>
            <?php
          }
        ?>
</body>
</html>

