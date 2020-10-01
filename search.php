<?php
	include('connect.php');
?>	
<html>
<head>


    <title>TRAINEES-Admin-Search Page</title>

    
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
                    <li><a class="active" href="about.php">ABOUT</a></li>
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
		<form action="search.php" method="post">
		<center>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				<li><a class="active" href="insert.php">ADD</a></li>
  		<li><a  href="delete.php">REMOVE</a></li>
  		<li><a href="update.php">UPDATE DETAILS</a></li>
  		<li><a href="search.php">FIND</a></li>
		<li><a href="reports.php">VIEW REPORTS</a></li>
		<li style="float:right"><a href="logout.php">LOGOUT</a></li>
		
                </ul>
            </div>		
			<div class="page-header">
		
		<h4>
		<font size="6" weight="bold">Enter the TRAIN NUMBER which you want to search!</font></h4><br>
		<label><h2>Train no. :  </h2></label><font size="5"><input type="text" name="train_no"></font><br><br>
		<button type="submit" class="btn btn-primary" name="sub3"><font size="5" wight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;   </font></button>
		</form><br><br>
		<?php
			if(isset($_POST['sub3']))
			{
				$train_no=(int)$_POST['train_no'];
				$cursor=$collection->find(array("train_no" => $train_no));
				if($cursor->getNext())
				{
					echo "<table style='width:1000px' border='1'>
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
					</tr>";
					$train_no=(int)$_POST['train_no'];
					$cursor=$collection->find(array("train_no" => $train_no));
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
					echo "</table>";
				}
				else 
				{
					echo "<label><h3><b><font weight='bold'>NO SUCH TRAIN PRESENT</font></h3></label></b>";
				}
			}
		?>
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
