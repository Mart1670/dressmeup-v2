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
class __TwigTemplate_64f2f4b49416a92aa18ac3d6d4ff6b2d extends Template
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
        echo " <!-- PROFILE -->
   
      <section class=\"container\">
        ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9) != null)) {
            // line 10
            echo "        <h1> Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
            echo "</h1>
        <form id=\"user\">
            <div>
              <div id=\"avatar\">
                <img class=\"photo\" src=\"./assets/user_avatar/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "avatar", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=\"photo de profile\">
                ";
            // line 16
            echo "              </div>
  
              <div class=\"user-data\">
                <label> Nom </label>
                <input type=\"text\" id=\"name\" class=\"form-field\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "firstname", [], "any", false, false, false, 20), "html", null, true);
            echo "\"></input>
              </div>
  
              <div class=\"user-data\">
                <label> E-mail </label>
                <input type=\"text\" id=\"mail\" class=\"form-field\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
            echo "\"></input>
              </div>
            </div>

            <div>
              <div class=\"user-data\">
                <label> Date de naissance </label>
                ";
            // line 33
            echo "                <input type=\"date\" id=\"birthdate\" class=\"form-field\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "birthdate", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true);
            echo "\"></input>
              </div>
  
              <div id=\"genre\">
                <legend>Genre</legend>
                <div>
                  <div>
                    <input type=\"radio\" id=\"il\" name=\"genre\" ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "sexe", [], "any", false, false, false, 40) == "Il")) {
                echo " checked=\"checked\" ";
            }
            echo ">
                    <label class=\"button-tags\" for=\"il\">Il</label>
                  </div>
                  <div>
                    <input type=\"radio\" id=\"elle\" name=\"genre\" ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "sexe", [], "any", false, false, false, 44) == "Elle")) {
                echo " checked=\"checked\" ";
            }
            echo ">
                    <label class=\"button-tags\" for=\"elle\">Elle</label>
                  </div>
                </div>
              </div>
  
              <div  class=\"user-data\">
                <label> Bio </label>
                <textarea id=\"biographie\" class=\"form-field\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "bio", [], "any", false, false, false, 52), "html", null, true);
            echo "</textarea>
              </div>
  
              <div id=\"submit-button\">
                <button class=\"button-tags\" id=\"valider\" type=\"submit\"> Enregistrer </button>
              </div>
            </div>
        </form>
        ";
        } else {
            // line 61
            echo "          
        ";
        }
        // line 63
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
        return array (  165 => 63,  161 => 61,  149 => 52,  136 => 44,  127 => 40,  116 => 33,  106 => 25,  98 => 20,  92 => 16,  88 => 14,  80 => 10,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Profil{% endblock %}
 
{% block body %}
 <!-- PROFILE -->
   
      <section class=\"container\">
        {% if(app.user != null)  %}
        <h1> Bienvenue {{ app.user.firstname }}</h1>
        <form id=\"user\">
            <div>
              <div id=\"avatar\">
                <img class=\"photo\" src=\"./assets/user_avatar/{{ app.user.avatar }}\" alt=\"photo de profile\">
                {# <button type=\"submit\"> Modifier</button> #}
              </div>
  
              <div class=\"user-data\">
                <label> Nom </label>
                <input type=\"text\" id=\"name\" class=\"form-field\" value=\"{{ app.user.firstname }}\"></input>
              </div>
  
              <div class=\"user-data\">
                <label> E-mail </label>
                <input type=\"text\" id=\"mail\" class=\"form-field\" value=\"{{ app.user.email }}\"></input>
              </div>
            </div>

            <div>
              <div class=\"user-data\">
                <label> Date de naissance </label>
                {# {{ app.user.birthdate }} #}
                <input type=\"date\" id=\"birthdate\" class=\"form-field\" value=\"{{ app.user.birthdate|date('Y-m-d') }}\"></input>
              </div>
  
              <div id=\"genre\">
                <legend>Genre</legend>
                <div>
                  <div>
                    <input type=\"radio\" id=\"il\" name=\"genre\" {% if (app.user.sexe == \"Il\")%} checked=\"checked\" {% endif %}>
                    <label class=\"button-tags\" for=\"il\">Il</label>
                  </div>
                  <div>
                    <input type=\"radio\" id=\"elle\" name=\"genre\" {% if (app.user.sexe == \"Elle\")%} checked=\"checked\" {% endif %}>
                    <label class=\"button-tags\" for=\"elle\">Elle</label>
                  </div>
                </div>
              </div>
  
              <div  class=\"user-data\">
                <label> Bio </label>
                <textarea id=\"biographie\" class=\"form-field\">{{ app.user.bio }}</textarea>
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
