<html>
<body>
	

<?php
	if(isset($_POST['submit'])){
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$msg=$_POST['message'];

		$to='allenmwita21@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}	
?>
</body>
	</html>