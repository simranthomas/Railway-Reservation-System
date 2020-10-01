<?php session_start();
?>
<html>
<head>


    <title>TRAINEES-Booking Form</title>


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
		<h4>KINDLY FILL THE FOLLOWING DETAILS:</h4>
		<?php
		echo "<form action='add_passengers.php' method='post'>";
		
			
		$number=$_SESSION['number'];
					
		for($i=1;$i<=$number;$i++)
		{
		echo "<center>
		<label><h4>FIRST NAME: </h4></label><font size='2'><input type='text' name='fname$i'></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label><h4>LAST NAME : </h4></label><font size='2'><input type='text' name='lname$i'></font>
		<label><h4>AGE: </h4></label><font size='2'><input type='text' name='age$i'></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label><h4>GENDER:</h4></label><font size='3'>
		<select name='gender$i'>
		<option value='M'>MALE</option>
		<option value='F'>FEMALE</option>
		</select>
		<br>";
		}
			
		?>
	    <button type="submit" class="btn btn-primary" name="add"><font size="5" weight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;   </font></button>
<button type="reset" class="btn btn-primary" name="reset"><font size="5" weight="bold">&nbsp;&nbsp;RESET&nbsp;&nbsp;</font></button>
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

    </div>
	
	</body>
	
</html>
