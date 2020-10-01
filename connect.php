<?php
	$mongo = new MongoClient();

	$db = $mongo->project;

	$collection = $db->train;
?>