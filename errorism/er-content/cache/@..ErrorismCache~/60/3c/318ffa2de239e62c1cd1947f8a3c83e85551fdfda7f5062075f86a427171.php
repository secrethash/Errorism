<?php

/* Geometry/erCustom.ertpl */
class __TwigTemplate_603c318ffa2de239e62c1cd1947f8a3c83e85551fdfda7f5062075f86a427171 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>Error ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["eroCode"]) ? $context["eroCode"] : null), "html", null, true);
        echo "! | ";
        echo twig_escape_filter($this->env, (isset($context["erSiteTitle"]) ? $context["erSiteTitle"] : null), "html", null, true);
        echo " | Errorism</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t</head>
\t<body>
\t\t<div style='padding:140px;'>
\t\t<center><h1>(";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["eroCode"]) ? $context["eroCode"] : null), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (isset($context["eroHead"]) ? $context["eroHead"] : null), "html", null, true);
        echo "</h1></center>
\t\t<p><center>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["eroMsg"]) ? $context["eroMsg"] : null), "html", null, true);
        echo "</center></p>
\t\t<p>
\t\t\t<center>
\t\t\t\t<footer>
\t\t\t\t\t<code>
\t\t\t\t\t\tPowered By: <a href=\"https://sf.net/p/errorism/\" target=\"_blank\">Errorism PHP Script</a> | 
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["erHomeURI"]) ? $context["erHomeURI"] : null), "html", null, true);
        echo "\">Home</a> | 
\t\t\t\t\t\t<a href=\"mailto:";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["erUserEmail"]) ? $context["erUserEmail"] : null), "html", null, true);
        echo "\">Support: ";
        echo twig_escape_filter($this->env, (isset($context["erUserEmail"]) ? $context["erUserEmail"] : null), "html", null, true);
        echo "</a> | 
\t\t\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["erContactPage"]) ? $context["erContactPage"] : null), "html", null, true);
        echo "\">Contact Us</a>
\t\t\t\t\t</code>
\t\t\t\t</footer>
\t\t\t</center>
\t\t</p>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Geometry/erCustom.ertpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  53 => 17,  49 => 16,  40 => 10,  34 => 9,  24 => 4,  19 => 1,);
    }
}
