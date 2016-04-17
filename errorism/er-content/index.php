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
* File to protect folder from public direct access.
* Running on Errorism Based Engine.
* File: Errorism->er-content->index.php
*/

// @autoload Function to load your classes file.

function __autoload($className)
{
	include_once "../er-core/classes/class.$className.php";
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
echo "<div style='padding:140px;'><center>";
echo "<h1>(". $error->ecode .") ". $error->ehead ."</h1>";
echo "<p>". $error->emsg ."</p>";
echo "(c) Copyright <a href='http://labs.shashwat.cf/p/errorism' target='_blank'>Errorism PHP Software</a> - " . date('Y') . " | Coded in <code>&lt;?php__?&gt;</code> by: <a href='http://www.shashwat.cf/' target='_blank'>Shashwat Mishra</a> | <b>Since 2012</b>";
echo "</center></div>";

// End Of File Errorism DEV Engine Integrated File.

?>