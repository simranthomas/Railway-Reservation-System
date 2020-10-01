<?php
	include('connect.php');
	session_start();
?>
<html>
<head>

    <title>TRAINEES-Admin-Insert Page</title>

   
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
		<form action="add_train.php" method="post">
		<center>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				<li><a  href="insert.php">ADD</a></li>
  		<li><a  href="delete.php">REMOVE</a></li>
  		<li><a href="update.php">UPDATE DETAILS</a></li>
  		<li><a href="search.php">FIND</a></li>
		<li><a href="reports.php">VIEW REPORTS</a></li>
		<li style="float:right"><a href="logout.php">LOGOUT</a></li>
		
                </ul>
            </div>		
			<div class="page-header">
		<h4>
		<font size="6" weight="bold">Enter the information to add a new train record.</font></h4><br>
<table>
	<tr><td><label><h2>Train no. : </h2></label></td><td><font size="5"><input type="number" name="train_no"></font></td></tr>
		<tr><td><label><h2>Train name : </h2></label></td><td><font size="5"><input type="text" name="train_name"></font></td></tr>
		<tr><td><label><h2>Source : </h2></label></td><td><font size="5"><input type="text" name="src"> </font></td></tr>
		<tr><td><label><h2>Destination : </h2></label></td><td><font size="5"><input type="text" name="dest"></font></td></tr>
		<tr><td><label><h2>Departure : </h2></label></td><td><font size="5"><input type="text" name="departure"></font></td></tr>
		<tr><td><label><h2>Arrival :</h2></label></td><td><font size="5"> <input type="text" name="arrival"></font></td></tr>
		<tr><td><label><h2>Number of days : </h2></label></td><td><font size="5"><input type="number" name="days"</font></td></tr>
		<tr><td><label><h2>Duration : </h2></label></td><td><font size="5"><input type="number" name="duration"></font></td></tr>
		<tr><td><label><h2>Cost of Sleeper: </h2></label></td><td><font size="5"><input type="number" name="sl"></font></td></tr>
		<tr><td><label><h2>Cost of 3 AC: </h2></label></td><td><font size="5"><input type="number" name="ac3"></font></td></tr>
		<tr><td><label><h2>Cost of 2 AC: </h2></label></td><td><font size="5"><input type="number" name="ac2"></font></td></tr>
		<tr><td><label><h2>Cost of 1 AC: </h2></label></td><td><font size="5"><input type="number" name="ac1"></font></td></tr>
		<tr><td><label><h2>Day :</td><td><font size="5"><input type="checkbox" name="monday" value="monday"> Monday<br>
		<input type="checkbox" name="tuesday" value="tuesday">Tuesday<br>
		<input type="checkbox" name="wednesday" value="wednesday">Wednesday<br>
		<input type="checkbox" name="thursday" value="thursday">Thursday<br>
		<input type="checkbox" name="friday" value="friday">Friday<br>
		<input type="checkbox" name="saturday" value="saturday">Saturday<br>
		<input type="checkbox" name="sunday" value="sunday">Sunday</h2></label><font><br></td></tr></table><br><br>
		<button type="submit" class="btn btn-primary" name="sub"><font size="5" wight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;   </font></button>
			
		</form>
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
