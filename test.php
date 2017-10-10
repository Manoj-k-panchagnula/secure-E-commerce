<?php
	
	//$mobile=$_POST["mobile"];
	$hostname="localhost";
	$user="keerthana";
	$pwd="";
	$db="mydb";	
	$conn=mysqli_connect($hostname,$user,$pwd,$db);
	if(!$conn)
	{
	die("Connection failed:". mysqli_connect_error());	
	}
	echo "Connected successfully";
	$sql = "select * from product";
	$result=mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo $row->firstname;
		echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " " . $row["Price"]. "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);

?>