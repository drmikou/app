<?php
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=app', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
?>