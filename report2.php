<?php
	include('connect.php');
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

<?php

 	$source=$_POST['stat'];
	
	echo "<h2><b>Trains Departing from ".$source."</h2></b>";
?>
 


<table align="center" cellpadding="5" style="width:1000px" height="50px" border="2" border-radius="5px">

  <tr>
    <th><font size='4'>TRAIN NO</th>
    <th><font size='4'>NAME</th> 
    <th><font size='4'>SOURCE</th>
    <th><font size='4'>DESTINATION</th>
    <th><font size='4'>ARRIVAL</th>
    <th><font size='4'>DEPARTURE</th>
	<th><font size='4'>DURATION IN MINS</th>
	<th><font size='4'>COST of SL</th>
	<th><font size='4'>COST of 3AC</th>
	<th><font size='4'>COST of 2AC</th>
	<th><font size='4'>COST of 1AC</th>
	<th><font size='4'>RUNNING DAYS</th>
  
  <?php
  
	
 	$source=$_POST['stat'];
	
	$cursor=$collection->find(array("source" => $source));
	foreach ($cursor as $document)
	{
		
		echo "<tr>";
		echo "<td><font size='4'><b>".$document["train_no"]."</td>";
		echo "<td><font size='4'><b>".$document["train_name"]."</td>";
		echo "<td><font size='4'><b>".$document["source"]."</td>";
		echo "<td><font size='4'><b>".$document["destination"]."</td>";
		echo "<td><font size='4'><b>".$document["arrival"]."</td>";
		echo "<td><font size='4'><b>".$document["departure"]."</td>";
		echo "<td><font size='4'><b>".$document["duration"]."</td>";
		echo "<td><font size='4'><b>".$document["SL"]."</td>";
		echo "<td><font size='4'><b>".$document["3AC"]."</td>";
		echo "<td><font size='4'><b>".$document["2AC"]."</td>";
		echo "<td><font size='4'><b>".$document["1AC"]."</td>";
				echo "<td><font size='4'><b>";
		$c=$document["days"];
		foreach($c as $f => $value)
		{
			if($value == "sunday")
				echo "S ";
			if($value == "monday")
				echo " M ";
			if($value == "tuesday")
				echo " T ";
			if($value == "wednesday")
				echo " W ";
			if($value == "thursday")
				echo " T ";
			if($value == "friday")
				echo " F ";
			if($value == "saturday")
				echo " S ";
			if($value == NULL)
				echo " - ";
		}
		echo "</td>";
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

