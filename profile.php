 <?php
	require 'connection.php';
	$id=($_GET['id']);
	$sql = "SELECT * FROM speaker where id = '".$id."'";
	$result = mysqli_query($conn,$sql);

    while($ans=mysqli_fetch_assoc($result)) {
    	echo $ans['id'];
    	echo $ans['name'];
    	echo $ans['topic'];
    	echo $ans['details'];
    	echo $ans['boi'];
    	echo $ans['picture'];
    }
	
	$conn->close();
?> 