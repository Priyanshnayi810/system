<?php include("config1.php");
$id=$_GET['id'];
    $sql="SELECT * FROM xyz   where id='".$id."' ";
    $result=mysqli_query($conn,$sql);

    if($row=mysqli_fetch_assoc($result))
    {
        $Name=$row["Name"];
        $Fess=$row["Fess"];

    }


    $ss="select sum(amount) as paid from student_fees where sid ='".$id."'";
    $result1=mysqli_query($conn,$ss);

    while($row1=mysqli_fetch_assoc($result1))
    {
        //echo "</br>";
      $paid=$row1['paid'];
    }
    //die;
$due=$Fess-$paid;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">Fess System</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                     <li> 
                        <a href="table12.php" ><i class="fa fa-desktop "></i>Student </a>
                    </li>
                   

                    <li class="active-link">
                        <a href="fess_view.php"><i class="fa fa-desktop"></i>Fees</a>
                    </li>
                   

 
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
              
                <hr />
                <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                        <h4>Student fees System</h4>
                    
                    
                    <form method="post" action="student_fess_process.php" enctype="multipart/form-data"> 
                    
                        <label for="name">Name:</label><br>


                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                        <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" value="<?php echo $Name;?>" readonly name="Name"><br><br>
    
                        <label for="Amount due">Total fees:</label><br>
                        <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" value="<?php echo $row["Total Fees"];?>"readonly name="Amount due"><br><br>

                         <label for="Total">Amount Due:</label><br>
                        <input type="text"class="col-lg-12 col-md-12 col-sm-12 col-xs-12" readonly value="<?php echo $due; ?>" name="Total"><br><br>
                       
                        
                        <label for="Total">Amount to be paid:</label><br>
                        <input type="text"class="col-lg-12 col-md-12 col-sm-12 col-xs-12" name="Total" ><br><br>

                        <label for="file">Photo:</label><br>
                        <input type="file"  name="file" id="file"><br><br>
                        
                        <label for="discription">Discription:</label><br>
                        <input type="text"class="col-lg-12 col-md-12 col-sm-12 col-xs-12" name="discription"><br><br>
                        
                        
                       
                      
                        <input type="submit" name="submit" value="submit">
                    
                </form>
                </div>

                <!-- /. ROW  -->
                
               
                </div>
                <!-- /. ROW  -->
                </div>
        </div>


                
                    
        
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;   | Design by:  akshit <a href="#" style="color:#fff;"  target="_blank"></a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
