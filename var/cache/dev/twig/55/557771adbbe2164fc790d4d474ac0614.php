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

/* base.html.twig */
class __TwigTemplate_b847982c4a43059645d5632ce4fd862e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    \t<meta name=\"description\" content=\"\">
\t\t
\t\t<title>
\t\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</title>

\t\t<link rel=\"shortcut icon\" type=\"svg\" href=\"assets/img/favicon.ico\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\"
        crossorigin=\"anonymous\" />
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Changa+One&family=Changa:wght@400;700;800&display=swap\" rel=\"stylesheet\">
\t\t";
        // line 22
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">

\t\t";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "\t</head>
\t<body>
\t\t<header>
\t\t\t<div id=\"navbar\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img src=\"/assets/img/Logo_final.svg\" alt=\"Dress Me Up logo\" width=\"80\" height=\"50\">
\t\t\t\t</a>
\t\t\t\t<div>
\t\t\t\t\t<i class=\"fa-solid fa-bars\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<a href=\"/\">Accueil</a>
\t\t\t\t<a href=\"/\">Dressing</a>
\t\t\t\t<a href=\"/\">Blog</a>
\t\t\t\t<a href=\"/\">Concept</a>
\t\t\t\t<div id=\"user-connect\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-user\"></i><a href=\"/\">Se Connecter</a>
\t\t\t\t</div>
\t\t\t\t<a href=\"/\">Mix & Match</a>
\t\t\t</nav>
\t\t</header>
\t\t<main>
\t\t\t";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "\t\t</main>
\t\t<footer>
\t\t</footer>
  </body>
";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 56,  159 => 55,  147 => 50,  137 => 25,  130 => 24,  123 => 12,  116 => 11,  109 => 55,  103 => 51,  101 => 50,  76 => 27,  74 => 24,  68 => 22,  58 => 13,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    \t<meta name=\"description\" content=\"\">
\t\t
\t\t<title>
\t\t\t{% block title %}
\t\t\t{% endblock %}
\t\t</title>

\t\t<link rel=\"shortcut icon\" type=\"svg\" href=\"assets/img/favicon.ico\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\"
        crossorigin=\"anonymous\" />
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Changa+One&family=Changa:wght@400;700;800&display=swap\" rel=\"stylesheet\">
\t\t{# <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\"> #}
\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/style.css')}}\">

\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<header>
\t\t\t<div id=\"navbar\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img src=\"/assets/img/Logo_final.svg\" alt=\"Dress Me Up logo\" width=\"80\" height=\"50\">
\t\t\t\t</a>
\t\t\t\t<div>
\t\t\t\t\t<i class=\"fa-solid fa-bars\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<a href=\"/\">Accueil</a>
\t\t\t\t<a href=\"/\">Dressing</a>
\t\t\t\t<a href=\"/\">Blog</a>
\t\t\t\t<a href=\"/\">Concept</a>
\t\t\t\t<div id=\"user-connect\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-user\"></i><a href=\"/\">Se Connecter</a>
\t\t\t\t</div>
\t\t\t\t<a href=\"/\">Mix & Match</a>
\t\t\t</nav>
\t\t</header>
\t\t<main>
\t\t\t{% block body %}{% endblock %}
\t\t</main>
\t\t<footer>
\t\t</footer>
  </body>
{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
{% endblock %}
", "base.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\base.html.twig");
    }
}
