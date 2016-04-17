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
* Errorism Integrated File
* File to protect your classes folder from public direct access.
* Running on Errorism Based Engine.
* File: Errorism->er-core->classes->index.php
*/

// @autoload Function to load your classes file.

function __autoload($className)
{
	include_once "class.$className.php";
}

// Starting @Errorism DEV Engine and triggering @@forbidden object.
// @@forbidden object triggered to make the directory forbidden to public access.

$errorism = new Errorism;
$error = new Forbidden;

/**
* $error->customError("403","Access Forbidden!","Sorry, the access to this particular directory is forbidden for public.");
*	A Sample code for custom error creator	
*	Creates custom error codes with header and function
*/

// Default Custom Template based page
echo "<div style='padding:140px;'>";
echo "<center><h1>(". $error->ecode .") ". $error->ehead ."</h1></center>";
echo "<p><center>". $error->emsg ."</center></p>";
echo "</div>";

// End Of File Errorism DEV Engine Integrated File.

?>