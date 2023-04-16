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

/* registration/register.html.twig */
class __TwigTemplate_4fff17c3233019bfffa49e5ef791849a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Inscription";
        
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
\t<div class=\"container\">
\t\t<h1>Créer un compte</h1>
\t
\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["id" => "registration-form"]]);
        echo "
\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "firstname", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "plainPassword", [], "any", false, false, false, 14), 'row', ["label" => "Password", "attr" => ["class" => "form-field"]]);
        // line 17
        echo "
\t\t<div style=\"display:none\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "sexe", [], "any", false, false, false, 19), 'row');
        echo "
\t\t</div>
\t\t<div id=\"genre\">
\t\t\t<legend>Genre</legend>
\t\t\t<div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"il\" name=\"genre\" value=\"il\">
\t\t\t\t\t<label data-index=\"0\">Il</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"elle\" name=\"genre\" value=\"elle\">
\t\t\t\t\t<label data-index=\"1\">Elle</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "birthdate", [], "any", false, false, false, 34), 'row');
        echo "
\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "handicap", [], "any", false, false, false, 35), 'row');
        echo "
\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "bio", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t<div id=\"form-avatar\">
\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "avatar", [], "any", false, false, false, 38), 'row');
        echo "
\t\t</div>
\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "agreeTerms", [], "any", false, false, false, 40), 'row');
        echo "
\t\t<div id=\"submit-button\">
\t\t\t<button id=\"valider\" type=\"submit\" class=\"btn\">Créer un compte</button>
\t\t</div>
\t\t";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
\t</div>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/registrationFormAuto.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  144 => 44,  137 => 40,  132 => 38,  127 => 36,  123 => 35,  119 => 34,  101 => 19,  97 => 17,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Inscription{% endblock %}

{% block body %}

\t<div class=\"container\">
\t\t<h1>Créer un compte</h1>
\t
\t\t{{ form_start(registrationForm, {'attr': {'id': 'registration-form'}}) }}
\t\t{{ form_row(registrationForm.name, {'attr': {'class': 'form-field'}}) }}
\t\t{{ form_row(registrationForm.firstname, {'attr': {'class': 'form-field'}}) }}
\t\t{{ form_row(registrationForm.email, {'attr': {'class': 'form-field'}}) }}
\t\t{{ form_row(registrationForm.plainPassword, {
\t            label: 'Password',
\t\t\t\tattr: {'class': 'form-field'}
\t        }) }}
\t\t<div style=\"display:none\">
\t\t\t{{ form_row(registrationForm.sexe) }}
\t\t</div>
\t\t<div id=\"genre\">
\t\t\t<legend>Genre</legend>
\t\t\t<div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"il\" name=\"genre\" value=\"il\">
\t\t\t\t\t<label data-index=\"0\">Il</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"radio\" id=\"elle\" name=\"genre\" value=\"elle\">
\t\t\t\t\t<label data-index=\"1\">Elle</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{{ form_row(registrationForm.birthdate) }}
\t\t{{ form_row(registrationForm.handicap) }}
\t\t{{ form_row(registrationForm.bio, {'attr': {'class': 'form-field'}}) }}
\t\t<div id=\"form-avatar\">
\t\t\t{{ form_row(registrationForm.avatar) }}
\t\t</div>
\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t<div id=\"submit-button\">
\t\t\t<button id=\"valider\" type=\"submit\" class=\"btn\">Créer un compte</button>
\t\t</div>
\t\t{{ form_end(registrationForm) }}
\t</div>
\t<script src=\"{{ asset('assets/js/registrationFormAuto.js') }}\"></script>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\registration\\register.html.twig");
    }
}
