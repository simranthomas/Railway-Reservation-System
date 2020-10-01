<?php
	session_start();
?>
<html>
<head>

    <title>Report</title>

   
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
	$collection=$db->passenger_details;
	$class=$_POST['c_name'];
	$train=(int)$_POST['t_no'];
	$dt=$_POST['dt'];
	
	echo "<h3>List of passengers in ".$class." in train ".$train." for ".$dt."</h3>";
	
	echo "<tr>
    <th><font size='4'>FIRST NAME</th>
    <th><font size='4'>LAST NAME</th> 
    <th><font size='4'>AGE</th>;
	<th><font size='4'>GENDER</th>";
	$cursor=$collection->find(array("class" => $class,"train_no" => $train,"date" =>$dt));
	foreach ($cursor as $document)
	{
		
		echo "<tr>";
		echo "<td><font size='4'><b>".$document["first_name"]."</td>";
		echo "<td><font size='4'><b>".$document["last_name"]."</td>";
		echo "<td><font size='4'><b>".$document["age"]."</td>";
		$gender=$document["gender"];
		if($gender=="M")
			echo "<td><font size='4'><b>Male</td>";
		else
			echo "<td><font size='4'><b>Female</td>";
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


