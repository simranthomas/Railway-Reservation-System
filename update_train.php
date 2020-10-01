<?php
	include('connect.php');
	session_start();

	if(isset($_POST['sub1']))
	{
		$trainno=(int)$_POST['train_no'];
		$cursor=$collection->find(array("train_no" => $trainno));
		if($cursor->getNext())
		{
			$train_name=$_POST['train_name'];
			$src=$_POST['src'];
			$dest=$_POST['dest'];
			$departure=$_POST['departure'];
			$arrival=$_POST['arrival'];
			$n_days=(int)$_POST['days'];
			$duration=(int)$_POST['duration'];
			$cost=(int)$_POST['cost'];
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
					echo $trainno;
				 $collection->update(array("train_no"=>$trainno), 
				array('$set'=>array( 
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
		  "days" => array($sunday,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday))));
		 
			
			header('location:train_details.php');
							
			
		}
		else
		{
			$error="NO SUCH TRAIN AVAILABLE<br><br>UNABLE TO UPDATE";
			$_SESSION['error']=$error;
			header('location:error.php');
		}

	}
	
?> 