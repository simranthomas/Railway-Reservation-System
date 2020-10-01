<?php
	session_start();
?>
<html>
<head>

    <title>Reports</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
 
    <link href="css/3-col-portfolio.css" rel="stylesheet">

     
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">TRAINEES</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li><a href="admin_login.php">ADMIN LOGIN</a></li>
                    <li><a  href="about.php">ABOUT</a></li>
		  <li><a href="help.php">HELP</a></li>
                </ul>
            </div>
           
        </div>
       
    </nav>


    <div class="container">

     
        <div class="row">
            <div class="col-lg-12">
		<div class="page-header">
		
                <h3>TRAINEES
                    <small>Making Lives Better...</small>
                </h3></div>
		<div class="transbox">
			<div class="page-header">
<center>


<table align="center" cellpadding="5" style="width:800px" height="50px" border="2" border-radius="5px">


	
	
  
  <?php
		$mongo=new MongoClient();
	$db=$mongo->project;
	$collection=$db->availability;
   
	$cl=$_POST['c_name'];
	$train=(int)$_POST['t_no'];
	$dt=$_POST['dt'];
	
	echo "<h3>Availability of seats in train ".$train." for ".$dt."</h3>";
	echo "  <tr>
    <th><font size='4'><b>TRAIN NO</th>
    <th><font size='4'><b>DATE</th>";
	echo "<th><font size='4'>$cl</th>";
	$cursor=$collection->find(array("train_no" =>$train , "date" =>$dt));
	foreach ($cursor as $document)
	{
		
		echo "<tr>";
		echo "<td><font size='4'><b>".$document["train_no"]."</td>";
		echo "<td><font size='4'><b>".$document["date"]."</td>";
		echo "<td><font size='4'><b>".$document[$cl]."</td>";
		echo "<br>";
		echo "</tr>";
	}
	
	
	
?>
</table>
  

</div>
</div>
</div>
</div>
</div>
</div>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; TRAINEES Company 2016.</p>
                </div>
            </div>
          
        </footer>

    </div>
 
</body>

</html>





<?php
 	
?>
