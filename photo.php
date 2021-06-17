<?php include "config1.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	 <form method="post" action="photo_process.php" enctype="multipart/form-data"> 
                    
                        <label for="name">Name:</label><br>
                        <input type="text"    name="name"><br><br>
    
                        <label for="file">Photo:</label><br>
                        <input type="file"  name="file" id="file"><br><br>
                        <input type="submit" name="submit" value="submit"><br><br>


                        <table border="1px">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>PhotoName</th>
                                </tr>
                          </thead>
                          <tbody>
                         <?php  

                              {
                            
                            $id=$_GET['id'];

                            $sql="SELECT * FROM photo";
            
                                }   


                              $result=mysqli_query($conn,$sql);
                        
                            while($row=mysqli_fetch_assoc($result))
                            { 
                            ?>
                            

                            	 <tr>
                                <td><?php echo $row["id"];?></td>
                                <td><?php echo $row["name"];?></td>
                                <td><?php echo $row["imagename"];?></td>
                            </tr>
                             <?php
                        }?>
                    </tbody>
                </table>
</body>
</html>