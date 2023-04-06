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

/* user/index.html.twig */
class __TwigTemplate_662fc9298dac2799c9a127cb1302e8b4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Profil";
        
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

        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/profil.css"), "html", null, true);
        echo "\">
       
       
         
       


 <!-- PROFILE -->
   
      <div class=\"container\">
        <form id=\"user\">
          <div id=\"partieL\">
            <div id=\"avatar\">
              <img class=\"photo\" src=\"./assets/img/profile-picture.jpg\" alt=\"photo de profile\">
              <button type=\"submit\"> Modifier</button>
            </div>


            <label> Nom </label>
            <input type=\"text\" id=\"name\" value=\"Camille\"></input>

            <label> Bio </label>
            <textarea id=\"biographie\">Fan de jeux vidéos et de cinéma. J'aime sortir avec des amis pour découvrir des nouveaux restaurants et faire des apréros jeux de société. J'essaie de me maintenir en forme.</textarea>
          </div>

          <div id=\"partieR\">
            <h1> Bienvenue Camille </h1>
            <label> E-mail </label>
            <input type=\"text\" id=\"mail\" value=\"camillelelouche@yahoo.fr\"></input>

            <label> Date de naissance </label>
            <input type=\"date\" id=\"birthdate\" value=\"1990-07-03\"></input>

            <div id=\"genre\">
              <legend>Genre</legend>
              <div>
                <input type=\"radio\" id=\"il\" name=\"genre\" checked=\"checked\">
                <label>Il</label>
              </div>
              <div>
                <input type=\"radio\" id=\"elle\" name=\"genre\">
                <label>Elle</label>
              </div>
              <div>
                <input type=\"radio\" id=\"iel\" name=\"genre\">
                <label>Iel</label>
              </div>
            </div>

              <button id=\"valider\" type=\"submit\"> Sauvegarder </button>
          </div>
        </form>
      </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Profil{% endblock %}
 
{% block body %}


        <link rel=\"stylesheet\" href=\"{{asset('/assets/css/profil.css')}}\">
       
       
         
       


 <!-- PROFILE -->
   
      <div class=\"container\">
        <form id=\"user\">
          <div id=\"partieL\">
            <div id=\"avatar\">
              <img class=\"photo\" src=\"./assets/img/profile-picture.jpg\" alt=\"photo de profile\">
              <button type=\"submit\"> Modifier</button>
            </div>


            <label> Nom </label>
            <input type=\"text\" id=\"name\" value=\"Camille\"></input>

            <label> Bio </label>
            <textarea id=\"biographie\">Fan de jeux vidéos et de cinéma. J'aime sortir avec des amis pour découvrir des nouveaux restaurants et faire des apréros jeux de société. J'essaie de me maintenir en forme.</textarea>
          </div>

          <div id=\"partieR\">
            <h1> Bienvenue Camille </h1>
            <label> E-mail </label>
            <input type=\"text\" id=\"mail\" value=\"camillelelouche@yahoo.fr\"></input>

            <label> Date de naissance </label>
            <input type=\"date\" id=\"birthdate\" value=\"1990-07-03\"></input>

            <div id=\"genre\">
              <legend>Genre</legend>
              <div>
                <input type=\"radio\" id=\"il\" name=\"genre\" checked=\"checked\">
                <label>Il</label>
              </div>
              <div>
                <input type=\"radio\" id=\"elle\" name=\"genre\">
                <label>Elle</label>
              </div>
              <div>
                <input type=\"radio\" id=\"iel\" name=\"genre\">
                <label>Iel</label>
              </div>
            </div>

              <button id=\"valider\" type=\"submit\"> Sauvegarder </button>
          </div>
        </form>
      </div>
    
{% endblock %}
", "user/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\user\\index.html.twig");
    }
}
