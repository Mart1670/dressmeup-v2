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
class __TwigTemplate_77b9a72b581e9265d4e1d9bf1d79b4e2 extends Template
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
   
      <section class=\"container\">
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18) != null)) {
            // line 19
            echo "        <h1> Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "firstname", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>
        <form id=\"user\">
            <div>
              <div id=\"avatar\">
                <img class=\"photo\" src=\"./assets/user_avatar/profile-picture.jpg\" alt=\"photo de profile\">
                ";
            // line 25
            echo "              </div>
  
              <div class=\"user-data\">
                <label> Nom </label>
                <input type=\"text\" id=\"name\" class=\"form-field\" value=\"Camille\"></input>
              </div>
  
              <div class=\"user-data\">
                <label> E-mail </label>
                <input type=\"text\" id=\"mail\" class=\"form-field\" value=\"camillelelouche@yahoo.fr\"></input>
              </div>
            </div>

            <div>
              <div class=\"user-data\">
                <label> Date de naissance </label>
                <input type=\"date\" id=\"birthdate\" class=\"form-field\" value=\"1990-07-03\"></input>
              </div>
  
              <div id=\"genre\">
                <legend>Genre</legend>
                <div>
                  <div>
                    <input type=\"radio\" id=\"il\" name=\"genre\" checked=\"checked\">
                    <label class=\"button-tags\" for=\"il\">Il</label>
                  </div>
                  <div>
                    <input type=\"radio\" id=\"elle\" name=\"genre\">
                    <label class=\"button-tags\" for=\"elle\">Elle</label>
                  </div>
                </div>
              </div>
  
              <div  class=\"user-data\">
                <label> Bio </label>
                <textarea id=\"biographie\" class=\"form-field\">Fan de jeux vidéos et de cinéma. J'aime sortir avec des amis pour découvrir des nouveaux restaurants et faire des apréros jeux de société. J'essaie de me maintenir en forme.</textarea>
              </div>
  
              <div id=\"submit-button\">
                <button class=\"button-tags\" id=\"valider\" type=\"submit\"> Enregistrer </button>
              </div>
            </div>
        </form>
        ";
        } else {
            // line 69
            echo "          
        ";
        }
        // line 71
        echo "      </div>
    
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
        return array (  151 => 71,  147 => 69,  101 => 25,  92 => 19,  90 => 18,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Profil{% endblock %}
 
{% block body %}


        <link rel=\"stylesheet\" href=\"{{asset('/assets/css/profil.css')}}\">
       
       
         
       


 <!-- PROFILE -->
   
      <section class=\"container\">
        {% if(app.user != null)  %}
        <h1> Bienvenue {{ app.user.firstname }}</h1>
        <form id=\"user\">
            <div>
              <div id=\"avatar\">
                <img class=\"photo\" src=\"./assets/user_avatar/profile-picture.jpg\" alt=\"photo de profile\">
                {# <button type=\"submit\"> Modifier</button> #}
              </div>
  
              <div class=\"user-data\">
                <label> Nom </label>
                <input type=\"text\" id=\"name\" class=\"form-field\" value=\"Camille\"></input>
              </div>
  
              <div class=\"user-data\">
                <label> E-mail </label>
                <input type=\"text\" id=\"mail\" class=\"form-field\" value=\"camillelelouche@yahoo.fr\"></input>
              </div>
            </div>

            <div>
              <div class=\"user-data\">
                <label> Date de naissance </label>
                <input type=\"date\" id=\"birthdate\" class=\"form-field\" value=\"1990-07-03\"></input>
              </div>
  
              <div id=\"genre\">
                <legend>Genre</legend>
                <div>
                  <div>
                    <input type=\"radio\" id=\"il\" name=\"genre\" checked=\"checked\">
                    <label class=\"button-tags\" for=\"il\">Il</label>
                  </div>
                  <div>
                    <input type=\"radio\" id=\"elle\" name=\"genre\">
                    <label class=\"button-tags\" for=\"elle\">Elle</label>
                  </div>
                </div>
              </div>
  
              <div  class=\"user-data\">
                <label> Bio </label>
                <textarea id=\"biographie\" class=\"form-field\">Fan de jeux vidéos et de cinéma. J'aime sortir avec des amis pour découvrir des nouveaux restaurants et faire des apréros jeux de société. J'essaie de me maintenir en forme.</textarea>
              </div>
  
              <div id=\"submit-button\">
                <button class=\"button-tags\" id=\"valider\" type=\"submit\"> Enregistrer </button>
              </div>
            </div>
        </form>
        {% else %}
          
        {% endif %}
      </div>
    
{% endblock %}
", "user/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\user\\index.html.twig");
    }
}
