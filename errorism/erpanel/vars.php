<?php

//Includes
include '../ercnfg.php';


//Variables

$ecode = $_GET['code'];
$etype = $_GET['type'];


$style_er = "
<style type=\"text/css\">
body{
	font-family: 'Capriola', sans-serif;
	background:url('img/geometry(errorism).png') repeat;
}
a {
	color: #FF6347;
	text-decoration: none; 
}
.links {
	border: solid 1px;
}
.links a:hover {
	opacitymask: 70%;
}
@font-face {
	font-family: errorism-paper;
	src: url('fonts/funky_paper(errorism).ttf');
	}
.errorism {
	font-family: 'errorism-paper';
	}
.wrap{
	margin:0 auto;
	width:1000px;
}
.logo h1{
	font-size:150px;
	color:#FF7A00;
	text-align:center;
	margin-bottom:2px;
	text-shadow:4px 4px 1px white;
}	
.logo p{
	color:#B1A18D;;
	font-size:20px;
	margin-top:1px;
	text-align:center;
}	
.logo p span{
	color:lightgreen;
}	
.sub a{
	color:#ff7a00;
	text-decoration:none;
	padding:5px;
	font-size:13px;
	font-family: arial, serif;
	font-weight:bold;
}	
.footer{
	color:white;
	position:absolute;
	right:10px;
	bottom:10px;
}	
.footer a{
	color:#ff7a00;
}
.footerer{
	color:white;
	position:absolute;
	left:10px;
	bottom:10px;
}	
.footerer a{
	color:#ff7a00;
}	
</style>";

$menu = array('er'=>'<span style="float:right;position:absolute;right:25px;top:30px;"><font color="#FF6347"><a href="mailto:' . $email . '" class="links">Support: ' . $email . '</a> | <a href="' . $homeurl . '" class="links">Home</a> | <a href="https://sourceforge.net/projects/errorism/" class="links" target="_blank">Errorsim</a> | <a href="http://shashwat.cf/" class="links" target="_blank">Shashwat</a></font></span>', 'erp'=>'<span style="float:right;position:absolute;right:25px;top:30px;"><font color="#FF6347"><a href="index.php" class="links">Home</a> | <a href="login.php?logout" class="links">Logout</a> | <a href="https://sf.net/p/errorism/" class="links" target="_blank">Errorsim</a> | <a href="http://shashwat.cf/" class="links" target="_blank">Shashwat</a></font></span>');



?>

