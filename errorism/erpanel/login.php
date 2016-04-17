<?php

/// NOTE: DO NOT EDIT ANY THING ON THIS PAGE! THE PANEL MIGHT NOT WORK OR COME UP WITH AN ERROR!


////////////////////////////////////////////////////|||
//////////	Designed & Coded By: Shashwat Mishra	|||
/////////	Copyright: (c) Shashwat Mishra			|||
////////	Website: www.shashwat.cf				|||
///////		Web-lab: labs.shashwat.cf				|||
//////		Email(1): contact@shashwat.cf			|||
/////		Email(2): shashwat9630@gmail.com		|||
////		File Name: erpanel/login.php			|||
///			Workplace: works.shashwat.cf			|||
//			Web-Hosting: ww1.chilihost.cf			|||
////////////////////////////////////////////////////|||

/*

			  _________________________________________
			|	///////////////		||||||||||||||		|
			|	//					|||			||		|
			|	//					|||			||		|	
			|	//					|||			||		|
			|	//					|||			||		|
			|	///////////			||||||||||||||		|
			|	//					|||\\\\				|
			|	//					||| \\\\			|
			|	//					|||  \\\\			|
			|	//					|||   \\\\			|
			|	//////////////		|||    \\\\			|
			| _________________________________________ |
*/

/*----------------------------FILE-INCLUDES----------------------------*/
include '../ercnfg.php';

/*---------------------------ADMIN-CREDENTIALS------------------------*/
$adminuser = $erp['user'];
$adminpass = $erp['pass'];
$days = 14; // days to save cookie

function loginpage($error) {
	echo "<html>\n<head>\n<title>Errorism Control panel - Please login | Errorism PHP Script</title>\n";
	echo "</head>\n<body>\n";
	echo "<table style='width:100%;height:100%;'>\n<tr>\n<td align='center'>\n";
	echo "<form action='" . $_SERVER['REQUEST_URI'] . "' method='post'>\n";
	echo "<table border='1' width='300' cellspacing='0' cellpadding='4'><tr>\n";
	$formtitle = "Errorism Control panel - Please login &raquo;<br/> Errorism PHP Script";
	if($error) $formtitle = "Wrong credentials!";
	echo "<th colspan='2'>" . $formtitle . "</th>\n";
	echo "</tr><tr>\n";
	echo "<td><p><b><label for='username'>Username:</label></b></p></td>\n";
	echo "<td><input type='text' name='username' id='username' size='30'></td>\n";
	echo "</tr><tr>\n";
	echo "<td><p><b><label for='password'>Password:</label></b></p></td>\n";
	echo "<td><input type='password' name='password' id='password' size='30'></td>\n";
	echo "</tr><tr>\n";
	echo "<td><b>Login:</b></td>\n";
	echo "<td><input type='submit' value=' Login &raquo; ' name='login'></td></tr></table></form>\n";
	echo "</td>\n</tr>\n</table>\n</body>\n</html>";
	exit;
}
	echo "<center><a href='index.php'>Admin Home</a></center>";

$username = $_POST['username'];
$password = $_POST['password'];
$login    = $_POST['login'];


if($_SERVER['QUERY_STRING'] == "logout") {
	setcookie("authuser", "");
	header("Location: " . $_SERVER['PHP_SELF']);
	exit;
}
if($_COOKIE["authuser"] != $adminuser) {
	if(!$login) {
		loginpage(false);
	}
	elseif(($username != $adminuser) || ($password != $adminpass)) {
		loginpage(true);
	}
	else {
		if($days) $expire = time()+60*60*24*$days;
		setcookie("authuser", $adminuser, $expire);
		header("Location: " . $_SERVER['REQUEST_URI']);
	}
}
// else we enter the restricted area

?>