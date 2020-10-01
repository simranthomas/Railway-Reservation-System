<html>
<head>

    <title>TRAINEES-Admin-Delete Page</title>

 
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
		<form action="delete_train.php" method="post">
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
		<font size="6" weight="bold">Enter the TRAIN NUMBER which you want to remove!</font></h4><br>
		<label><h2>Train no. :  </h2></label><font size="5"><input type="text" name="delete_train"></font><br><br>
		<button type="submit" class="btn btn-primary" name="del_button"><font size="5" wight="bold">&nbsp;&nbsp;GO&nbsp;&nbsp;   </font></button>
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
