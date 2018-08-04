<?php


		include 'conn.php';
		$bill_id = $_POST['bill_id'];
		$bill_name = $_POST['bill_name'];
		$class_id = $_POST['class_id'];
		$class_name = $_POST['class_name'];
		$student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
		$amt_paid = $_POST['amt_paid'];


		$query="INSERT INTO `bill_details`(`bill_id`,`bill_name`,`class_id`,`class_name`,`student_id`,`student_name`,`amt_paid`) VALUES ('$bill_id','$bill_name','$class_id','$class_name','$student_id','$student_name','$amt_paid')";


		$result=mysqli_query($con,$query);
		if ($result) {
			echo "successfully added";
		}

		else{
			echo "error";
		}
		?>