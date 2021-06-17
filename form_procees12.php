<?php include "config1.php";
	 $Name=$_POST["Name"];
	 $University=$_POST["Univercity"];
	 $Course=$_POST["Course"];
	 $Fess=$_POST["Fess"];
    $Session=$_POST["Session"];
    
date_default_timezone_set("Asia/Kolkata");
$datee=date('Y/m/d');



	
	echo $sql="insert into xyz(Name,Univercity,Course,Fess,date,Session) values ('".$Name."','".$University."','".$Course."','".$Fess."','".$datee."','".$Session."')";
	$query=mysqli_query($conn,$sql);

header("location:form12.php?status=success");


?>