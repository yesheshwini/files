<?php


		include 'conn.php';
		$s_name = $_POST['s_name'];
		$email = $_POST['email'];
		$regno = $_POST['regno'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$prev_qual = $_POST['prev_qual'];
		$class_id = $_POST['class_id'];
		$class_name = $_POST['class_name'];
        $t_id = $_POST['t_id'];
        $t_name = $_POST['t_name'];
		$query="INSERT INTO `students`(`s_name`,`email`,`regno`,`dob`,`address`,`prev_qual`,`class_id`,`class_name`,`t_id`,`t_name`) VALUES ('$s_name','$email','$regno','$dob'','$address','$prev_qual','$class_id','$class_name','$t_id','$t_name)";


		$result=mysqli_query($con,$query);
		if ($result) {
			echo "successfully added";
		}

		else{
			echo "error";
		}
		?>