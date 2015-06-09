<?php
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=g6c', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
?>