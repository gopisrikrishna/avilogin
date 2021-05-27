<?php
$server="remotemysql.com";
$user="UJNAAH8tRr";
$password="ubrLmUOSaY";
$dname="ubrLmUOSaY";
/*
Server: remotemysql.com
Name: UJNAAH8tRr
Username: UJNAAH8tRr
Password: ubrLmUOSaY
Port number: 3306
  */  
$con=new mysqli($server,$user,$password,$dname);
$user=$_POST["user"];
$pass=$_POST["pass"];
$h=0;
//insert into mydb(user,pass) values('a','a1');
$sql="insert into mydb(user,pass) values('$user1','$pass')";
	//$sql="select * from mydb where number='$phone' and password='$p' ";
$res=$con->query($sql);
/*
while($r=$res->fetch_assoc())
{
	if($r["number"]==$phone && $r["password"]==$p)
	{
		echo "LOGIN DONE :)";
		session_start();
		$_SESSION["phone"]=$phone;
		$_SESSION["email"]=$r["email"];
		$_SESSION["name"]=$r["fname"].$r["lname"];
		$_SESSION["type"]=$r["type"];
		header("Location : ./guest.php");
		$h=1;		
	}	
}
if($h==0)
	{
		//echo "FAILED WRONG TRY AGAIN";
		header("Location : ./login.php");
	}
        */
$con->close();
?>