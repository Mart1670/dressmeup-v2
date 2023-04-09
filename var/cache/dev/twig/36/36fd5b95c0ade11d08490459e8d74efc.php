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

/* dressing/index.html.twig */
class __TwigTemplate_02f4b22a327ab196402afa66e20b5aa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dressing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dressing/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Dressing";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
        <h1>Mon dressing</h1>
        <h4>Sélectionne ta catégorie</h4>
        <div id=\"type-selection\">
                <input type=\"radio\" name=\"type\" id=\"haut\" autocomplete=\"off\" list>
                <label for=\"haut\">Haut</label>
                <input type=\"radio\" name=\"type\" id=\"bas\" autocomplete=\"off\">
                <label for=\"bas\">Bas</label>
        </div>
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dressing_add");
        echo "\">
            <div class=\"add\">
                <img src=\"/assets/img/add-icon.svg\" alt=\"Ajouter un vêtement\" srcset=\"\">
            </div>
        </a>
        <section id=\"dressing-content\" data-type=\"Haut\">
            
        </section>
        
        
       ";
        // line 31
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"assets/js/loadDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/switchDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/deleteOneCloth.js\" type=\"text/javascript\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dressing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  121 => 35,  111 => 31,  98 => 20,  87 => 11,  80 => 10,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Dressing{% endblock %}

{% block stylesheets %}
{#     <link rel=\"stylesheet\" href=\"/assets/css/modal.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/canvas.css\"> #}
{% endblock %}

{% block body %}

        <h1>Mon dressing</h1>
        <h4>Sélectionne ta catégorie</h4>
        <div id=\"type-selection\">
                <input type=\"radio\" name=\"type\" id=\"haut\" autocomplete=\"off\" list>
                <label for=\"haut\">Haut</label>
                <input type=\"radio\" name=\"type\" id=\"bas\" autocomplete=\"off\">
                <label for=\"bas\">Bas</label>
        </div>
        <a href=\"{{ path('app_dressing_add')}}\">
            <div class=\"add\">
                <img src=\"/assets/img/add-icon.svg\" alt=\"Ajouter un vêtement\" srcset=\"\">
            </div>
        </a>
        <section id=\"dressing-content\" data-type=\"Haut\">
            
        </section>
        
        
       {#  {{ include('/modals/modal-dressing.html.twig') }} #}



{% endblock %}
{% block javascripts %}
    <script src=\"assets/js/loadDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/switchDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/deleteOneCloth.js\" type=\"text/javascript\"></script>
{% endblock %}
", "dressing/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\dressing\\index.html.twig");
    }
}
