<?php include("config1.php");

	 $sid=$_POST["id"];
	 $amount=$_POST["Total"];
	 $discription=$_POST["discription"];
	 //$Fess=$_POST["Fess"];
    //$Session=$_POST["Session"];
    
date_default_timezone_set("Asia/Kolkata");
$datee=date('Y/m/d');
$ord="SM".date('dmYHis');

$time=date('H:i:s');

	$imagename=$_FILES["file"]["name"];

	move_uploaded_file($_FILES["file"]["tmp_name"],"image/".$_FILES["file"]["name"]);





	
	echo $sql="insert into student_fees(sid,amount,date,time,imagename,discription) values ('".$sid."','".$amount."','".$datee."','".$time."','".$imagename."','".$discription."')";
	$query=mysqli_query($conn,$sql);

header("location:fess_view.php?status=success");


?>