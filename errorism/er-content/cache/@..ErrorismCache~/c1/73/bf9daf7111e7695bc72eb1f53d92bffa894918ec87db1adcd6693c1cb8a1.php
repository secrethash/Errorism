<?php

/* Geometry/er403.ertpl */
class __TwigTemplate_c173bf9daf7111e7695bc72eb1f53d92bffa894918ec87db1adcd6693c1cb8a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
\t<head>
\t\t<title>Error ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["eroCode"]) ? $context["eroCode"] : null), "html", null, true);
        echo "! | ";
        echo twig_escape_filter($this->env, (isset($context["erSiteName"]) ? $context["erSiteName"] : null), "html", null, true);
        echo " | Errorism</title>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"img/favicon.ico\" />
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t\t<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" href=\"css/core.css\">
\t\t<link rel=\"stylesheet\" href=\"css/button.css\">
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
\t\t<script src=\"js/button.min.js\"></script>
\t\t<style type=\"text/css\">
\t\tbody{
\t\t\tfont-family: 'Capriola', sans-serif;
\t\t\tbackground:url('img/geometry(errorism).png') repeat;
\t\t}
\t\ta {
\t\t\tcolor: #FF6347;
\t\t\ttext-decoration: none; 
\t\t}
\t\t.links {
\t\t\tborder: solid 1px;
\t\t}
\t\t.links a:hover {
\t\t\topacitymask: 70%;
\t\t}
\t\t@font-face {
\t\t\tfont-family: errorism-paper;
\t\t\tsrc: url('fonts/funky_paper(errorism).ttf');
\t\t\t}
\t\t.errorism {
\t\t\tfont-family: 'errorism-paper';
\t\t\t}
\t\t.wrap{
\t\t\tmargin:0 auto;
\t\t\twidth:1000px;
\t\t}
\t\t.logo h1{
\t\t\tfont-size:240px;
\t\t\tcolor:#FF7A00;
\t\t\ttext-align:center;
\t\t\tmargin-bottom:1px;
\t\t\ttext-shadow:4px 4px 1px white;
\t\t}\t
\t\t.logo p{
\t\t\tcolor:#B1A18D;
\t\t\tfont-size:20px;
\t\t\tmargin-top:1px;
\t\t\ttext-align:center;
\t\t}\t
\t\t.logo p span{
\t\t\tcolor:lightgreen;
\t\t}\t
\t\t.sub a{
\t\t\tcolor:#ff7a00;
\t\t\ttext-decoration:none;
\t\t\tpadding:5px;
\t\t\tfont-size:13px;
\t\t\tfont-family: arial, serif;
\t\t\tfont-weight:bold;
\t\t}\t
\t\t.footer{
\t\t\tcolor:white;
\t\t\tposition:absolute;
\t\t\tright:10px;
\t\t\tbottom:10px;
\t\t}\t
\t\t.footer a{
\t\t\tcolor:#ff7a00;
\t\t}
\t\t.footerer{
\t\t\tcolor:white;
\t\t\tposition:absolute;
\t\t\tleft:10px;
\t\t\tbottom:10px;
\t\t}\t
\t\t.footerer a{
\t\t\tcolor:#ff7a00;
\t\t}\t
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"wrap\">
\t\t<span style=\"float:left;position:absolute;top:25px;\"><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["erHomeURI"]) ? $context["erHomeURI"] : null), "html", null, true);
        echo "\"><img src=\"img/logo.png\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["erSiteName"]) ? $context["erSiteName"] : null), "html", null, true);
        echo "\" /></a></span><span style=\"float:right;position:absolute;right:25px;top:30px;\"><font color=\"#FF6347\"><a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["erUserEmail"]) ? $context["erUserEmail"] : null), "html", null, true);
        echo "\" class=\"links\">Support: ";
        echo twig_escape_filter($this->env, (isset($context["erUserEmail"]) ? $context["erUserEmail"] : null), "html", null, true);
        echo "</a> | <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["erHomeURI"]) ? $context["erHomeURI"] : null), "html", null, true);
        echo "\" class=\"links\">Home</a> | <a href=\"https://sourceforge.net/projects/errorism/\" class=\"links\" target=\"_blank\">Errorsim</a> | <a href=\"http://shashwat.cf/\" class=\"links\" target=\"_blank\">Shashwat</a></font></span>
\t\t<br>
\t\t\t<center style=\"position:absolute;top:150px;left:50px;right:50px;\">
\t\t\t<p><font color=\"#1E90FF\">";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["eroMsg"]) ? $context["eroMsg"] : null), "html", null, true);
        echo "</font></p>
\t\t\t</center>
\t\t\t<div class=\"logo\">
\t\t\t
\t    <h1 class=\"errorism\">";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["eroCode"]) ? $context["eroCode"] : null), "html", null, true);
        echo "</h1>
\t\t\t\t<p> OOOPPSSS!! - ";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["eroHead"]) ? $context["eroHead"] : null), "html", null, true);
        echo "!</p>
\t\t\t\t\t\t<div class=\"sub\">
\t\t\t\t   
\t      <p><a href=\"javascript: history.go(-1)\" id=\"btnLink\"><font face=\"cursive, Orator Std\">Back to Previous Page</font></a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
\t\t\t<div class=\"footer\">
\t\t <font color=\"#FF6347\">&copy; Copyright <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["erHomeURI"]) ? $context["erHomeURI"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["erSiteName"]) ? $context["erSiteName"] : null), "html", null, true);
        echo "</a> - ";
        echo twig_escape_filter($this->env, (isset($context["erYearFunc"]) ? $context["erYearFunc"] : null), "html", null, true);
        echo "</font>
\t\t</div>
\t\t<div class=\"footerer\">
\t\t<font color=\"#FF6347\">Powered By: <a href=\"https://sourceforge.net/projects/errorism/\" target=\"_blank\">Errorism PHP Software</a></font>
\t\t</div>
\t\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$(\"#btnLink\").zinoButton();
\t\t});
\t\t</script>

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Geometry/er403.ertpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 102,  134 => 92,  130 => 91,  123 => 87,  109 => 84,  24 => 4,  19 => 1,);
    }
}
