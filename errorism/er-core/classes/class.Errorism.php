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
* File: Errorism->er-core->classes->class.Errorism.php
*/

class Errorism {

		public $emsg;
		public $ehead;
		public $ecode;

// - Custom Error Creator -
	//- Enables the user to triger custom error pages.
	//- Not all errors are currently available at Errorism.
// - For more, read the errorism 'Documentation'.


	public function getEcode()
	{
		return $this->ecode;
	}
	public function getEhead()
	{
		return $this->ehead;
	}
	public function getEmsg()
	{
		return $this->emsg;
	}
	public function __destruct()
	{
		// The code Destroyer.
		echo "<!-- Error Management Done/Performed by Errorism v2.5.1
					Visit https://sf.net/p/errorism
					www.shashwat.cf -->";
	}
}

/**
* Custom Error Constructor
*/
class CustomError extends Errorism
{
	
		public function __construct($ec,$eh,$em)
	{
		$this->ecode = $ec;
		$this->ehead = $eh;
		$this->emsg = $em;
	}
}

/**
* Class for Forbidden Errors, Error 403
*/

class Forbidden extends Errorism
{
		public $emsg = "Sorry, the access to this particular directory is forbidden for public.";
		public $ehead = "Access Forbidden!";
		public $ecode = "403";
}
/**
* Class for Not Found Errors, Errors 404
*/
class NotFound extends Errorism
{

		public $emsg = "Sorry, the file your are looking for is not here! You might have clicked a Blank Link or have forgotten the link ;).";
		public $ehead = "Nothing Found Here!";
		public $ecode = "404";

}
/**
* Class For Internal Server Error, Error 500
*/
class ServerError extends Errorism
{
	
		public $emsg = "Sorry, Internal Server Error. Our Engineers & Developers are working on it.";
		public $ehead = "Internal Server Error!";
		public $ecode = "500";

}

/**
* Class for Unauthorized Access, Error 401
*/
class UnAuth extends Errorism
{
		public $emsg = "The Web server (running the Web site) thinks that the HTTP data stream sent by the client (e.g. your Web browser or our robot) was correct, but access to the URL resource requires user authentication <em>1)</em> which has not yet been provided or <em>2)</em> which has been provided but failed authorization tests. This is commonly known as &quot;HTTP Basic Authentication&quot;. The actual authentication request expected from the client is defined in the HTTP protocol as the WWW-Authenticate header field.";
		public $ehead = "Unauthorized Access!";
		public $ecode = "401";
}

// End of Errorism DEV Engine Configuration
//Errorism DEV Engine Developed by Shashwat Mishra
//Errorism DEV Engine Related queries can be held at contact@shashwat.cf
//Visit the Errorism DEV Engine Home: www.codethief.cf/Errorism

?>