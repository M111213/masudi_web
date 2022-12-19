<?php
     if (isset($_POST['submit']))
     {
     		$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$date_of_birth=$_POST['date_of_birth'];
	$date_of_filling=$_POST['date_of_filling'];
	$gender=$_POST['gender'];
	$region=$_POST['region'];
	$district=$_POST['district'];
	$email=$_POST['email'];	
	$phone=$_POST['phone'];
	$comment=$_POST['comment'];

	$conn=mysqli_connect('localhost','masudi','mfaume','reg') or die('Unable to connect');
	$query="INSERT INTO table3(fname,lname,date_of_birth,date_of_filling,gender,region,district,email,phone,comment)
	 VALUES('$fname','$lname','$date_of_birth','$date_of_filling','$gender','$region','$district','$email','$phone','$comment')";
	mysqli_query($conn,$query) or die('Unable to query');
	mysqli_close($conn);

     }

	?>