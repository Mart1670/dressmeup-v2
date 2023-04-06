<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* join_us/index.html.twig */
class __TwigTemplate_511e88876e56ee979b5239e260b0ebb4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "join_us/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "join_us/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Rejoignez-nous !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"d-flex justify-content-around\" style=\"background-color: rgb(235, 234, 237); padding-top:20px;\">

    <img src=\"/assets/img/constructionfinal_2.svg\" alt=\"En construction\">
    <div class=\"d-flex justify-content-center align-items-center flex-column\">
        <h1 class= text-align: center>Coming soon!</h1>
        <p class=\"text-center\">Nous sommes désolés, cette page en cours<br>de construction ! Elle sera disponible dans la<br>prochaine version. Revenez bientôt.</p>
        <a id=\"btnGoto\" class=\"button cta-mixandmatch\" href='";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "#anchor-mix'>Aller sur le générateur de style</a> 
    </div>

    ";
        // line 31
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "join_us/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Rejoignez-nous !{% endblock %}

{% block body %}

<div class=\"d-flex justify-content-around\" style=\"background-color: rgb(235, 234, 237); padding-top:20px;\">

    <img src=\"/assets/img/constructionfinal_2.svg\" alt=\"En construction\">
    <div class=\"d-flex justify-content-center align-items-center flex-column\">
        <h1 class= text-align: center>Coming soon!</h1>
        <p class=\"text-center\">Nous sommes désolés, cette page en cours<br>de construction ! Elle sera disponible dans la<br>prochaine version. Revenez bientôt.</p>
        <a id=\"btnGoto\" class=\"button cta-mixandmatch\" href='{{ path('app_home')}}#anchor-mix'>Aller sur le générateur de style</a> 
    </div>

    {# Annonce en attente
    <h1><center>Rejoignez-nous!</center></h1>

    <p>Souhaitez-vous rejoindre les \"Daily Outfitters\", notre team de designers et développeurs passionnés ?</p>
    <ul>
        <li><h4>Administrateur de messagerie (H/F)</h4>
        <p>Afin de mettre en place un serveur de messagerie et pour l'inscription de nos abonnés à notre newsletter, nous recherchons un Administrateur Réseaux de messagerie (H/F).<br>
        La maîtrise d'un service de messagerie supporté est exigée.<br>
        Localité : Paris 10è.<br>
        35 Heures par semaine.<br>
        Salaire selon profil et expérience + Titres restaurant.<br>
        Une tenue accordée est appréciée 😉<br>
        Télétravail à définir.<br>
        Envoyez-nous votre candidature à recrutement_do@mail.com</p></li>
    </ul>#}
</div>
{% endblock %}
", "join_us/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\join_us\\index.html.twig");
    }
}
