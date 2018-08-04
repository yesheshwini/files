<?php


		include 'conn.php';
		$u_name = $_POST['u_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$role = $_POST['role'];


		$query="INSERT INTO `users`(`u_name`,`email`,`password`,`role`) VALUES ('$u_name','$email','$password','$role')";
		
        $result=mysqli_query($con,$query);
		if ($result) {
			echo "successfully added";
		}

		else{
			echo "error";
		}
		?>