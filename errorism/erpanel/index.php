<?php
// Errors Script by Shashwat Mishra
// Contact Me [at] contact@shashwat.cf
// Get your site professionally designed.
// Contact Shashwat

/*
1) Don't remove error_reporting function.
2) Name: Custom Error Script
3) Developed by: Shashwat Mishra
4) Website: www.shashwat.cf
5) Version: 1.6.0(beta)
*/

//VARIABLES
$app_name = 'errorism';
$app_sh = '6609';
$app_ver = '1.6.0b';

//REQUIRED FILES
require_once('login.php');

//INCLUDED FILES
include '../ercnfg.php';
include 'erphead.php';
include 'vars.php';

// if ($theme=='simple')
// {
// echo '<center><h1>Errorism Script Control Panel</h1><br/><a href="index.php" target="_blank">Home</a> | <a href="login.php?logout" target="_blank">Logout</a></center>
// <hr/>
// <p><b><center>Update Alerts =&raquo;<br></b><iframe src="http://labs.shashwat.cf/updates?secrethash='.$app_sh.'&soft='.$app_name.'&version='.$app_ver.'&appear='.$theme.'" width="500px" height="500px" scrolling="no" frameborder="0"></iframe></center></p>';
// }
// elseif ($theme=='geometry')
// {
echo '
	<div class="wrap">
	<span style="float:left;position:absolute;top:25px;"><a href="index.php"><img src="img/logo.png" alt="' . $sitename . '" /></a></span>' . $menu['erp'] . '
	<br>
		<center style="position:absolute;top:120px;left:50px;right:50px;">
		<p><font color="#1E90FF"><iframe src="http://labs.shashwat.cf/updates?secrethash='.$app_sh.'&soft='.$app_name.'&version='.$app_ver.'&appear=geometry" width="500px" height="200px" scrolling="no" frameborder="0"></iframe></font></p>
		</center>
		<div class="logo">
				
				<br><br><br><br><br><br><br><br><br><br>
				<h1>Updates</h1>
			<p>See if any Updates are available. If yes, Update it to the latest version today.<br/>
			You need a working connection if running on Localhost.<br>
			<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Errorism</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.shashwat.cf/" property="cc:attributionName" rel="cc:attributionURL">Shashwat Mishra</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://labs.shashwat.cf/thebuggenie/errorism" rel="dct:source">http://labs.shashwat.cf/thebuggenie/errorism</a>.</p>
			<div class="sub">
			   
      <p><a href="login.php?logout" id="btnLink"><font face="cursive, Orator Std">Okay, Logout!</font></a></p>
			</div>
		</div>
	</div>
	<div class="footer">
	 <font color="#FF6347">Powered by - </font><a href="http://labs.shashwat.cf/">Shashwat\'s Labs</a>
	</div>
<script type="text/javascript">
$(function () {
	$("#btnLink").zinoButton();
});
</script>';

// }	


?>