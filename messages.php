<?php
	include("header.php");
	include("dbcredentials.php");
	include("dbconnect.php");
	
$sql = "SELECT id, name, email, message FROM Messages";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
		
		$id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $message = $row["message"];

    echo "Message Number: " . $id . "<br/>";
    echo "Name: " . $name . "<br/>";
    echo "Email Address: " . $email . "<br/>";
    echo "Message: " . $message . "<br/><br/><br/>";
 }

} else {

	echo "You have no messages.";
}

	include("footer.php");
?>
