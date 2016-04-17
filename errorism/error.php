<?php

////////////////////////////////////////////////////////////////
/**
*# Errorism Open Source Software
*# Developed By Shashwat Mishra
*# Find Shashwat: www.shashwat.cf
*# Work: works.shashwat.cf
*# Based on PHP 5.2.4+
*# Queries: contact@shashwat.cf
*# OR
*# Queries: support@shashwat.cf
*# Software Home: http://labs.shashwat.cf/p/errorism
*# Credits: - Shashwat Mishra
*# 			- Errorism DEV Engine
*#			- Chilihost.cf
*#			- CodeThief.cf
*#			- Twig Engine
*# Documentation: http://labs.shashwat.cf/p/wiki/errorism:Doc
*/
////////////////////////////////////////////////////////////////

/**
* Errorism Engine File
* File to run the Errorism DEV Engine.
* Error Management Running on Errorism Based Engine.
* File: Errorism->error.php
*/

// Triggering the Twig @engine.

// @autoload Function to load your classes file.

function __autoload($className)
{
	include_once "er-core/classes/class.$className.php";
}


$errorism = new Errorism;


	// Extras - Other than Classes
	require_once "/er-core/Twig/Autoloader.php";
	require "ercnfg.php";
	include 'er-content/themes/'.$theme.'/themeconfig.php';
/**
* Read our documentation for help.
* You can read Errorism related Documentation at
* [http://labs.shashwat.cf/p/wiki/errorism:Doc]
* ->Twig Engine Configuration<-
* For More Help related Errorism, Please contact me.
*/
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('er-content/themes');
if ($tempCache == true)	{
	$twig = new Twig_Environment($loader, array('cache' => $erCacheDir.'/@@..!ErrorismCache~~~~'));
}
	else	{
		$twig = new Twig_Environment($loader);
	}
	if(isset($_GET['code']) && !empty($_GET['code']))	{
		$ecode = $_GET['code'];
	}

	if(isset($_GET['type']) && !empty($_GET['type']))	{
		$etype = $_GET['type'];
	}

	if(isset($_GET['msg']) && !empty($_GET['msg']))	{
		$emsg = $_GET['msg'];
	}

	if ($ecode=="404")	{
		$template = $twig->loadTemplate( $theme.'/er404.ertpl');

		$error = new NotFound;
	}
	elseif ($ecode=="403")	{

		$template = $twig->loadTemplate( $theme.'/er403.ertpl');

		$error = new Forbidden;
	}
	elseif ($ecode=="401")	{

		$template = $twig->loadTemplate( $theme.'/er401.ertpl');

		$error = new UnAuth;
	}
	elseif ($ecode=="500")	{
		
		$template = $twig->loadTemplate( $theme.'/er500.ertpl');

		$error = new ServerError;
	}
	else	{
			/**
			* Saves from displaying only @codes, if @message and @type are not declared
			*/
		if (!empty($ecode && $emsg && $etype))	{
		$template = $twig->loadTemplate( $theme.'/erCustom.ertpl');
		
		$error = new CustomError($ecode,$etype,$emsg);	}
	}


		// Properties/Parameters for the Template Development Division
		// Special Properties defined for the template developers
		// Defined parameters for Template Developers
			$erParam = array( 
				'TempName' => $TempName, 
				'TempDev' => $TempDev, 
				'TempDevURI' => $TempDevURI, 
				'TempHomeURI' => $TempHomeURI, 
				'TempVR' => $TempVR, 
				'erSiteName' => $sitename, 
				'erHomeURI' => $homeurl, 
				'erContactPage' => $contactPage, 
				'erUserEmail' => $email, 
				'erYearFunc' => $dateFunc, 
				'erTimeFunc' => $timeFunc, 
				'eroCode' => $error->ecode, 
				'eroHead' => $error->ehead, 
				'eroMsg' => $error->emsg 
				);
			$template->display($erParam);

/////////////////////////////////////////////
///// Ended Setting up the error.php ///////
///////////////////////////////////////////

 //--->>>> Unsetting the Vars to release Memory. 
 unset($ecode);
 unset($etype);
 unset($emsg);
 unset($TempHomeURI);
 unset($TempName);
 unset($TempVR);
 unset($TempDev);
 unset($TempDevURI);
 unset($dateFunc);
 unset($timeFunc);
 unset($sitename);
 unset($homeurl);
 unset($contactPage);
 unset($email);
 unset($erCacheDir);
 unset($tempCache);
 unset($theme);
 unset($twig);
 unset($loader);
 unset($errorism);
 //----->>>> The Destructor will be called Now to save the memory for faster loading.

/**
*############################################
* End of main Error Index File
* Go to the Documentation section for Help.
* You can read Errorism related Documentation at
* [http://labs.shashwat.cf/p/wiki/errorism:Doc]
*############################################
*/

?>