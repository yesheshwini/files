<?php


		include 'conn.php';
		$class_name = $_POST['class_name'];


		$query="INSERT INTO `classes`(`class_name`) VALUES ('$class_name')";


		$result=mysqli_query($con,$query);
		if ($result) {
			echo "successfully added";
		}

		else{
			echo "error";
		}
		?>