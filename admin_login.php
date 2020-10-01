<?php
	include('login.php');
?>
<html>
<head>

    <title>TRAINEES-Admin Login</title>


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
                    <li><a href="index.php">HOME</a></li>
				  <li><a class="active" href="admin_login.php">ADMIN LOGIN</a></li>
				  <li><a href="about.php">ABOUT</a></li>
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
		
<form action="" method="POST">
<center>
<fieldset>
<legend><h1>LOGIN HERE</h1></legend>

<table align="center" cellpadding="5">
<tr>
<td><label><h2>Username :</h2></label></td>
<td><font size="5"><input type="text" name="username"/></font><br></td>
</tr>

<tr>
<td><label><h2>Password :</h2></label></td>
<td><font size="5"><input type="password" name="password"/></font><br></td>
</tr>
<br><br>
<tr>
<td></td>
<td><br><button type="submit" class="btn btn-primary" name="submit"><font size="5" wight="bold">Login</font></button>&emsp;
<span><?php echo "<br><br>".$error?></span>

</tr>


</table>
</fieldset></center>
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
