<?php
	session_start();
	include('connect.php');
?>
<html>
<head>


    <title>TRAINEES-Ticket</title>

   
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
			
<center>

<h2><b>RAILWAY RESERVATION TICKET</b></h2>
<h4><b>DATE OF TRAVEL: <?php
	$date=$_SESSION['date'];
	echo $date;

?></b><h4>
<table align="center" cellpadding="5" style="width:800px" height="50px" border="2" border-radius="5px">
<h4><b>TRAIN DETAILS</b></h4>
	<tr>
		<th>TRAIN NO</th>
		<th>NAME</th> 
		<th>FROM</th>
		<th>TO</th>
		<th>DEPARTURE</th>
		<th>ARRIVAL</th>
		
	</tr>
<?php
	
		$traino=(int)$_SESSION['book_train'];
		$cursor=$collection->find(array("train_no" => $traino));
	    foreach ($cursor as $document)
		{
		
		echo "<tr>";
		echo "<td><font size='4'><b>".$document["train_no"]."</td>";
		echo "<td><font size='4'><b>".$document["train_name"]."</td>";
		echo "<td><font size='4'><b>".$document["source"]."</td>";
		echo "<td><font size='4'><b>".$document["destination"]."</td>";
		echo "<td><font size='4'><b>".$document["departure"]."</td>";
		echo "<td><font size='4'><b>".$document["arrival"]."</td>";	
		echo "</tr>";
	    }
	
?>
</table>
<table align="center" cellpadding="5" style="width:600px" height="50px" border="2" border-radius="5px">
<h4><b>PASSENGER DETAILS</b></h4>
	<tr>
		<th>SR.NO.</th>
		<th>FIRST NAME</th>
		<th>LAST NAME</th>
		<th>AGE</th>
		<th>GENDER</th>
	</tr>
<?php
		$number=$_SESSION['number'];
		for($i=1;$i<=$number;$i++)
		{
			$fname=$_SESSION["fname$i"];
			$lname=$_SESSION["lname$i"];
			$age=$_SESSION["age$i"];
			$gender=$_SESSION["gender$i"];
			echo "<tr>";
			echo "<td><font size='4'><b>".$i."</td>";
			echo "<td><font size='4'><b>".$fname."</td>";
			echo "<td><font size='4'><b>".$lname."</td>";
			echo "<td><font size='4'><b>".$age."</td>";
			if($gender=="M")
				echo "<td><font size='4'><b>MALE</td>";
			else
				echo "<td><font size='4'><b>FEMALE</td>";
			echo "</tr>";
		}

?>
 </table>
<table align="center" cellpadding="5" style="width:600px" height="50px" border="2" border-radius="5px">
<h4><b>TICKET DETAILS</b></h4>
	<tr>
		<th>CLASS</th>
		<th>TICKET RATE</th>
		<th>NUMBER OF PASSENGERS</th>
		<th>TOTAL AMOUNT DUE</th>
	</tr>  
 <?php
		$class=$_SESSION['class'];
		$traino=(int)$_SESSION['book_train'];
		$number=(int)$_SESSION['number'];
		$cursor=$collection->find(array("train_no" => $traino));
		 foreach ($cursor as $document)
		{
		
			echo "<tr>";
			echo "<td><font size='4'><b>".$class."</td>";
			$rate=(int)$document[$class];
			echo "<td><font size='4'><b>".$rate."</td>";
			echo "<td><font size='4'><b>".$number."</td>";
			$total=$rate*$number;
			echo "<td><font size='4'><b>".$total."</td>";
			echo "</tr>";
	    }

?>
</table>
<h3><b>THANK YOU FOR BOOKING WITH US</b></h3>
<form method="post" action="index.php">
<button type="submit" class="btn btn-primary" name="redirect"><font size="5" wight="bold">&nbsp;&nbsp;BOOK ANOTHER TRAIN&nbsp;&nbsp;   </font></button>
</form>
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