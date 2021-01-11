

<?php 

function AffAccueil ($x) 
{
	switch ($x) {

		case 'a':
			require 'vues/Accueil_Admin.php';
			break;
		
		case 'p':
			require 'vues/Accueil_Pilote.php';
			break;

		case 'm':
			require 'vues/Accueil_Mng.php';
			break;
	}
}