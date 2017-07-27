<?php

	include("dbcredentials.php");
	include("dbconnect.php");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$sql = "INSERT INTO Messages (name, email, message) VALUES ('$name', '$email', '$message')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	include("header.php");
?>
	<h1>Form submitted successfully. Thank you for your input</h1>
	<p>You submitted:</p>
	<ul>
		<?php
			echo '<li>Name: '. $name . '</li>';
			echo '<li>Email: '. $email . '</li>';
			echo '<li>Message: '. $message . '<li>';
		?>
	</ul>

	<?php
		include("footer.php");
	?>