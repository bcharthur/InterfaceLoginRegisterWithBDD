<?php

//PHP --> MySQL
//Paramètres de la BdD (hôte,nom de la BdD, nom de la table à afficher)
	$host='localhost';
	$DB='acfusers';
	$port='3306';
	
//Définition du nom de la source de données (Data Source Name dsn)
	$dsn = 'mysql:host='.$host.';port ='.$port.';dbname='.$DB.';charset=utf8';

//Définition du logueur
	$login = 'root';
	$mdp = '';

//Définition des options de PHP Data Objects (PDO)
	$pdo_options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);