<?php
<<<<<<< HEAD
	return array(
		'db'=>array(
			'driver' => 'Pdo_Mysql',
			'dsn' => 'mysql:dbname=zfdb;host=localhost',
		),
	);
=======
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
/*
La connexion à la base de donnée ce fait dans ce fichier en PDO, il ne faut pas oublier de préciser que l'on récupère
ou envoie tout les résultat en UTF8
*/
return array(

 );
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
