<?php
	include('connect.php');
	session_start();
	if(isset($_POST['sub']))
	{
		$trainno=(int)$_POST['train_no'];
		$cursor=$collection->find(array("train_no" => $trainno));
		if(!$cursor->getNext())
		{
			
			$train_name=$_POST['train_name'];
			$src=$_POST['src'];
			$dest=$_POST['dest'];
			$departure=$_POST['departure'];
			$arrival=$_POST['arrival'];
			$n_days=(int)$_POST['days'];
			$duration=(int)$_POST['duration'];
			$sl=(int)$_POST['sl'];
			$ac3=(int)$_POST['ac3'];
			$ac2=(int)$_POST['ac2'];
			$ac1=(int)$_POST['ac1'];
			$monday=NULL;
			$tuesday=NULL;
			$wednesday=NULL;
			$thursday=NULL;
			$friday=NULL;
			$saturday=NULL;
			$sunday=NULL;
			if(isset($_POST['monday']))
				$monday=$_POST['monday'];
			if(isset($_POST['tuesday']))
				$tuesday=$_POST['tuesday'];
			if(isset($_POST['wednesday']))
				$wednesday=$_POST['wednesday'];
			if(isset($_POST['thursday']))
				$thursday=$_POST['thursday'];
			if(isset($_POST['friday']))
				$friday=$_POST['friday'];
			if(isset($_POST['saturday']))
				$saturday=$_POST['saturday'];
			if(isset($_POST['sunday']))
				$sunday=$_POST['sunday'];
					
				$document = array( 
		  "train_no" => $trainno, 
		  "train_name" => $train_name, 
		  "source" => $src,
		  "destination" => $dest,
		  "departure" => $departure,
		  "arrival" => $arrival,
		  "no_of_days" => $n_days,
		  "duration" => $duration,
		"SL" =>$sl,
		"3AC" =>$ac3,
		"2AC" =>$ac2,
		"1AC" =>$ac1,
		  "days" => array($sunday,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday)
		  );
		
			$collection->insert($document);
			header('location:train_details.php');
		}	
		else
		{
			$error="TRAIN EXISTING<br><br>UNABLE TO ADD";
			$_SESSION['error']=$error;
			header('location:error.php');
		}
	}
	
		
	

	
	
?> 