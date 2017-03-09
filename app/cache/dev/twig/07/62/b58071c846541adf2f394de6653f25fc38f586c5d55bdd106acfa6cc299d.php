<?php

/* SiteGsbMedGsbMedBundle:Famille:supprimer_famille.html.twig */
class __TwigTemplate_0762b58071c846541adf2f394de6653f25fc38f586c5d55bdd106acfa6cc299d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Suppression de la famille ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Suppression de la famille : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SiteGsbMedGsbMedBundle:Famille:supprimer_famille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }
}
