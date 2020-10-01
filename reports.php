<html>
<head>

    <title>View Reports</title>

   
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
		<font size="6" weight="bold">Click below for generating reports.</font></h4><br>

		<form action="report1.php" method="post">		
		<label><h2>1.List of trains arriving at </h2><font size="5"><select name="station">
  			<option value="Delhi">Delhi</option>
			<option value="Kolkata">Kolkata</option>
			<option value="Pune">Pune</option>	
			</select></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="go1"><font size="5">&nbsp;&nbsp;GO&nbsp;&nbsp;</font></button></label><br>
		</form>		

		<form action="report2.php" method="post">		
		<label><h2>2.List of trains departing from </h2><font size="5"><select name="stat">
  			<option value="Delhi">Delhi</option>
			<option value="Kolkata">Kolkata</option>
			<option value="Pune">Pune</option>	
			</select></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="go2"><font size="5">&nbsp;&nbsp;GO&nbsp;&nbsp;</font></button></label><br>
		</form>	

		<form action="report3.php" method="post">		
		<label><h2>3.Passangers who have booked  <font size="5"><select name="c_name">
  			<option value="SL">Sleeper</option>
			<option value="3AC">3AC</option>
			<option value="2AC">2AC</option>	
			<option value="1AC">1AC</option>
			</select></font>  class in <font size="5"><input type="text" name="t_no" size=5 placeholder="Train Number"></font> train for <font size="5"><input type="date" name="dt"></font>. </h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="go"><font size="5" wight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;</font></button></label><br>
		</form>	

		<form action="report4.php" method="post">		
		<label><h2>4.Availability of seats of <font size="5"><select name="c_name">
  			<option value="SL">Sleeper</option>
			<option value="3AC">3AC</option>
			<option value="2AC">2AC</option>	
			<option value="1AC">1AC</option>
			</select></font> class for <font size="5"><input type="text" name="t_no" size=5 placeholder="Train Number"></font> train for <font size="5"><input type="date" name="dt"></font>. </h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="go"><font size="5" wight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;</font></button></label><br>
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
