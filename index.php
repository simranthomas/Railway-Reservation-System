<?php
	session_start();
?>
<html>
<head>


    <title>TRAINEES-Home Page</title>

   
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
		<h2>Welcome,Let's Start.</h2>
		<form action="search_source.php" method="post">
		<center>
		<label><h2>Source : </h2></label><font size="5"><input type="text" name="source"></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label><h2>Destination : </h2></label><font size="5"><input type="text" name="destination"></font><br><br>
		<label><h2>Date : </h2></label><font size="5"><input type="date" name="date"></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" class="btn btn-primary" name="go"><font size="5" wight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;   </font></button>
<button type="reset" class="btn btn-primary" name="reset"><font size="5" wight="bold">&nbsp;&nbsp;RESET&nbsp;&nbsp;</font></button>

</form>
<h3> OR </h3>


<form action="search_train_no.php" method="post">
<label><h2>Train no. :  </h2></label><font size="5"><input type="text" name="train_no"></font>
<label><h2>Date : </h2></label><font size="5"><input type="date" name="date"></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
<button type="submit" class="btn btn-primary" name="go1"><font size="5" wight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;   </font></button>

		<button type="reset" class="btn btn-primary" name="reset"><font size="5" wight="bold">&nbsp;&nbsp;RESET&nbsp;&nbsp;</font></button>
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
