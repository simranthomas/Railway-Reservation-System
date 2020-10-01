<?php 
session_start();
	$mongo = new MongoClient();

	$db = $mongo->project;

	$collection = $db->passenger_details;

	
	if(isset($_POST['add']))
	{
		$number=$_SESSION['number'];
		$traino=(int)$_SESSION['book_train'];
		$class=$_SESSION['class'];
		for($i=1;$i<=$number;$i++)
		{
			
			$fname="fname$i";
			$lname="lname$i";
			$age="age$i";
			$gender="gender$i";
			$date=$_SESSION['date'];
			$_SESSION["fname$i"]=$_POST[$fname];
			$_SESSION["lname$i"]=$_POST[$lname];
			$_SESSION["age$i"]=$_POST[$age];
			$_SESSION["gender$i"]=$_POST[$gender];
			$fname=$_POST[$fname];
			$lname=$_POST[$lname];
			$age=(int)$_POST[$age];
			$gender=$_POST[$gender];
			$document = array( 
		  "train_no" => $traino, 
		  "first_name" => $fname, 
		  "last_name" => $lname,
		  "age" => $age,
		  "gender" =>$gender,
		  "date" => $date,
		  "class" =>$class
		  );
		
			$collection->insert($document);
			
		}
		$class=$_SESSION['class'];
		$number=$_SESSION['number'];
		$mongo = new MongoClient();

		$db = $mongo->project;

		$collection = $db->availability;
		$traino=(int)$_SESSION['book_train'];
		$date=$_SESSION['date'];
		$cursor=$collection->find(array("train_no" => $traino ));
		foreach ($cursor as $document)
		{
			$res=$document[$class];
			$result=$res-$number;
			$collection->update(array("train_no"=>$traino,"date"=>$date),array('$set'=>array("$class" => $result)));
		
		}
		
	}
?>


<html>
<head>


    <title>SUCCESS</title>

 
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
                        <a class="active" href="index.php">HOME</a>
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
		<h3>TRAIN HAS BEEN BOOKED SUCCESSFULLY!!</h3>
		
<form method="post" action="ticket.php">
<button type="submit" class="btn btn-primary" name="sb"><font size="5" wight="bold">&nbsp;&nbsp;VIEW TICKET&nbsp;&nbsp;   </font></button>
</form>
	</center>	
	    
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

