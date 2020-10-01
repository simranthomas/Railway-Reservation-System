<?php
	include('connect.php');
	session_start();
	$mongo = new MongoClient();

	$db = $mongo->project;

	$collection = $db->availability;
?>
<html>
<head>


    <title>Proceed</title>

    
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



<form method="post" action="">
<label><h2>Enter the number of number of passengers: </h2></label>
<font size="5"><input type="number" name="number"></font><br><br>
<label><h2>Select the class: </h2></label>
<font size="5"><select name="class">
<option name="sleeper" value="SL">Sleeper</option>
<option name="3ac" value="3AC">3 AC</option>
<option name="2ac" value="2AC">2 AC</option>
<option name="1ac" value="1AC">1 AC</option>
</select></font>
<br><br>
<button type="submit" class="btn btn-primary" name="sub"><font size="5">&nbsp;&nbsp;GO&nbsp;&nbsp;   </font></button>
</form>


<?php
	if(isset($_POST['sub']))
	{
		$traino=(int)$_SESSION['book_train'];
		$cursor=$collection->find(array("train_no" => $traino));
		$class=$_POST['class'];
		$_SESSION['class']=$class;
		$number=$_POST['number'];
		foreach ($cursor as $document)
		{
			$res=$document[$class];
			echo $res;
			if($number <= $res)
			{
				$_SESSION['number']=$_POST['number'];
				header("location:booking_form.php");
			}
			else
			{
				echo "<br><br><h3>CLASS NOT AVAILABLE. PLEASE SELECT ANOTHER CLASS</h3>";
			}
		}
	}

?>
  </div>
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
    
</body>

</html>