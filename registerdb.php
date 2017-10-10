<?php
try
{
	

	$FirstName=$_POST["FirstName"];
	$LastName=$_POST["LastName"];
	

	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	//$mobile=$_POST["mobile"];
	$hostname="student-db.cse.unt.edu";
	$user="ks0593";
	$pwd="ks0593";
	
	if($conn1=mysql_connect($hostname,$user,$pwd))
	{
	$conn2=mysql_select_db("ks0593");
   $result = mysql_query("insert into signup(firstName,lastname,email,password) values('$FirstName','$LastName','$Email','$Password')");
   if($result)
   { header("location:login.php");}
  else {
    echo "Error: " . $sql . "<br>"  . mysql_error($conn);
}
}
else{
			throw new exception("Please enter a valid Username and Password");
		}
	
}
catch(Exception $ex)
{
	echo $ex->getmessage();
}

mysql_close($conn);

?>