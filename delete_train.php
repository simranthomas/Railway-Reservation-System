<?php
	include('connect.php');
	session_start();

	if(isset($_POST['del_button']))
	{
		$delete_train=(int)$_POST['delete_train'];
		$cursor=$collection->find(array("train_no" => $delete_train));
		if($cursor->getNext())
		{
			$collection->remove(array("train_no"=>$delete_train));
			header('location:train_details.php');
		}
		else
		{
			$error="NO SUCH TRAIN AVAILABLE<br><br>UNABLE TO REMOVE";
			$_SESSION['error']=$error;
			header('location:error.php');
		}
								
	}

	
?> 