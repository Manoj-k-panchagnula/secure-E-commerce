<?php
try{
	session_start();
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$hostname="student-db.cse.unt.edu";
	$user="ks0593";
	$pwd="ks0593";
		
	if($conn=mysql_connect($hostname,$user,$pwd))
	{
		$conn2=mysql_select_db("ks0593");
	
	$sql=mysql_query("select * from signup where email='$Email' and password='$Password'");
	
	while($count = mysql_num_rows($sql))
		$count++;
		
		
		if($count>0)
		{
		
		$_SESSION["emailid"]=$var_Email; 
        		header("Location:index.html");
				
			}
			else{
				
				$_SESSION['errors']=array("Your Email id or Password was incorrect. Please try again");
				header("Location:login.php");
				
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
