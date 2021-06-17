<?php include("config1.php");?>
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
                        <img src="assets/img/logo1.png" height="70" width="70" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">Fees System</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                     <li class="active-link"> 
                        <a href="table12.php" ><i class="fa fa-desktop "></i>Student</a>
                    </li>
                   

                    <li >
                        <a href="fess_view.php"><i class="fa fa-desktop  "></i>Fees</a>
                    </li>
                  

 
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
               
                <hr />
                   
                    

                
                <!-- /. ROW  -->
                
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Student Fees Display</h5>
                        <h5 style="text-align: right;"><a href="form12.php">Enter New Student</a></h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>University</th>
                                    <th>Course</th>
                                    <th>Session</th>
                                    <th style="color:red">Total Fees</th>
                                    <th style="color:green">Due Fees</th>
                                    <th>Date</th>
                                    <th>Pay fees</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php  

                              {
                            
                            $id=$_GET['id'];

                            $sql="SELECT * FROM xyz  ";
            
                                }   


                              $result=mysqli_query($conn,$sql);
                        
                            while($row=mysqli_fetch_assoc($result))
                            { 
                            ?>


                            <tr>
                                <td><?php echo $row["id"];?></td>
                                <td><?php echo $row["Name"];?></td>
                                <td><?php echo $row["Univercity"];?></td>
                                <td><?php echo $row["Course"];?></td>
                                <td><?php echo $row["Session"];?></td>
                                <td style="color:red"><?php echo $row["Total Fees"];?></td>
                                <td style="color:green"><?php echo $due;?></td>
                                <td><?php echo $row["Date"];?></td>
                                <td><a href="fess12.php?id=<?php echo $row["id"];?>">Pay Fees</a></td>
                            </tr>

                            <?php
                        }?>
                            </tbody>
                        </table>
                    </div>
                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                </div>
        </div>


                
                    
        
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;   | Design by: priyansh <a href="#" style="color:#fff;"  target="_blank"></a>
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
