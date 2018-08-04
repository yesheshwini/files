<?php


		include 'conn.php';
		$t_name = $_POST['t_name'];
		$email = $_POST['email'];
		$id_no = $_POST['id_no'];
		$address = $_POST['address'];
		$class_id = $_POST['class_id'];
		$class_name = $_POST['class_name'];




		$query="INSERT INTO `teacher`(`t_name`,`email`,`id_no`,`address`,`class_id`,`class_name`) VALUES ('$t_name','$email','$id_no','$address','$class_id','$class_name')";
		
        $result=mysqli_query($con,$query);
		if ($result) {
			echo "successfully added";
		}

		else{
			echo "error";
		}
		?>