
<?php
/*	This file submits the contact form data to the database for a resume webiste created for CSS 405 Advanced Internet,
	USM Summer 2017
	Code copied from Lindy Nelson
	Edited by Courtney Kirkham
	Edited on: 27 July 2017 */

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