 <?php
	$servername = "localhost";
	$username = "";
	$password = "";
    $dbname = "profile_speaker";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		echo "Error";
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";

?> 