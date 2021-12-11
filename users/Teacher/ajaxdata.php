<?php 
include 'connection.php';


if (isset($_POST['stream_id'])) {
	$query = "SELECT * FROM semesters where streams_id=".$_POST['stream_id'];
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result) > 0 ) {
			echo '<option selected disabled>Select Semester</option>';
		 while ($row = mysqli_fetch_assoc($result)) {
		 	echo '<option value='.$row['id'].'>'.$row['sem'].'</option>';
		 }
	}else{

		echo '<option>No Semester Found!</option>';
	}

}elseif (isset($_POST['semester_id'])) {
	 

	$query = "SELECT * FROM subjects where semesters_id=".$_POST['semester_id'];
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result) > 0 ) {
			echo '<option selected disabled>Select Subject</option>';
		 while ($row = mysqli_fetch_assoc($result)) {
		 	echo '<option value='.$row['id'].'>'.$row['subject'].'</option>';
		 }
	}else{

		echo '<option>No Subject Found!</option>';
	}

}elseif (isset($_POST['year_id'])) {
	if($_POST['year_id']==1){
		echo '<option value=11>ALL</option>';
	}
	else{
	$query = "SELECT * FROM years where stream_id=".$_POST['year_id'];
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result) > 0 ) {
			echo '<option selected disabled>Select Year</option>';
			while ($row = mysqli_fetch_assoc($result)) {
		 	echo '<option value='.$row['id'].'>'.$row['year'].'</option>';
		 }
	}else{

		echo '<option>Select Proper Stream</option>';
	}
	}

}


?>
