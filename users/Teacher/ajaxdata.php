<?php 
include 'connection.php';

if (isset($_POST['stream_id'])) {
	$query = "SELECT * FROM semesters where streams_id=".$_POST['stream_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option selected disabled>Select Semester</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['sem'].'</option>';
		 }
	}else{

		echo '<option>No Semester Found!</option>';
	}

}elseif (isset($_POST['semester_id'])) {
	 

	$query = "SELECT * FROM subjects where semesters_id=".$_POST['semester_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option selected disabled>Select Subject</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['subject'].'</option>';
		 }
	}else{

		echo '<option>No Subject Found!</option>';
	}

}


?>
