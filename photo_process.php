<?php include "config1.php";
	 $name=$_POST["name"];
	 $imagename=$_FILES["file"]["name"];

	//$imagedata=addslashes(file_get_contents($_FILES['file']['tmp_name']));
	move_uploaded_file($_FILES["file"]["tmp_name"],"image/".$_FILES["file"]["name"]);
	
	
	echo $sql="insert into photo(name,imagename) values ('".$name."','".$imagename."')";
	$query=mysqli_query($conn,$sql);

header("location:photo.php?status=success");

 
?>