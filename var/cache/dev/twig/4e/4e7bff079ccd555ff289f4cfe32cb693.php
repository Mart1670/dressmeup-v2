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
class __TwigTemplate_74b0497fcadfef84c38c3cf4e3a7b9ee extends Template
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
\t\t<section id=\"creation-compte\">
\t\t\t<h1>Créer un compte</h1>
\t\t
\t\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["id" => "registration-form"]]);
        echo "
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "plainPassword", [], "any", false, false, false, 15), 'row', ["label" => "Password", "attr" => ["class" => "form-field"]]);
        // line 18
        echo "
\t\t\t<div style=\"display:none\">
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "sexe", [], "any", false, false, false, 20), 'row');
        echo "
\t\t\t</div>
\t\t\t<div id=\"genre\">
\t\t\t\t<legend>Genre</legend>
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"radio\" id=\"il\" name=\"genre\" value=\"il\">
\t\t\t\t\t\t<label class=\"button-tags\" data-index=\"0\">Il</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"radio\" id=\"elle\" name=\"genre\" value=\"elle\">
\t\t\t\t\t\t<label class=\"button-tags\" data-index=\"1\">Elle</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "birthdate", [], "any", false, false, false, 35), 'row');
        echo "
\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "handicap", [], "any", false, false, false, 36), 'row');
        echo "
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "bio", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-field"]]);
        echo "
\t\t\t<div id=\"form-avatar\">
\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "avatar", [], "any", false, false, false, 39), 'row');
        echo "
\t\t\t</div>
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "agreeTerms", [], "any", false, false, false, 41), 'row');
        echo "
\t\t\t<div id=\"submit-button\">
\t\t\t\t<button id=\"valider\" type=\"submit\" class=\"btn button-tags\">Créer un compte</button>
\t\t\t</div>
\t\t\t";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
\t\t</section>
\t</div>
\t<script src=\"";
        // line 48
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
        return array (  151 => 48,  145 => 45,  138 => 41,  133 => 39,  128 => 37,  124 => 36,  120 => 35,  102 => 20,  98 => 18,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Inscription{% endblock %}

{% block body %}

\t<div class=\"container\">
\t\t<section id=\"creation-compte\">
\t\t\t<h1>Créer un compte</h1>
\t\t
\t\t\t{{ form_start(registrationForm, {'attr': {'id': 'registration-form'}}) }}
\t\t\t{{ form_row(registrationForm.name, {'attr': {'class': 'form-field'}}) }}
\t\t\t{{ form_row(registrationForm.firstname, {'attr': {'class': 'form-field'}}) }}
\t\t\t{{ form_row(registrationForm.email, {'attr': {'class': 'form-field'}}) }}
\t\t\t{{ form_row(registrationForm.plainPassword, {
\t\t\t\t\tlabel: 'Password',
\t\t\t\t\tattr: {'class': 'form-field'}
\t\t\t\t}) }}
\t\t\t<div style=\"display:none\">
\t\t\t\t{{ form_row(registrationForm.sexe) }}
\t\t\t</div>
\t\t\t<div id=\"genre\">
\t\t\t\t<legend>Genre</legend>
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"radio\" id=\"il\" name=\"genre\" value=\"il\">
\t\t\t\t\t\t<label class=\"button-tags\" data-index=\"0\">Il</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"radio\" id=\"elle\" name=\"genre\" value=\"elle\">
\t\t\t\t\t\t<label class=\"button-tags\" data-index=\"1\">Elle</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ form_row(registrationForm.birthdate) }}
\t\t\t{{ form_row(registrationForm.handicap) }}
\t\t\t{{ form_row(registrationForm.bio, {'attr': {'class': 'form-field'}}) }}
\t\t\t<div id=\"form-avatar\">
\t\t\t\t{{ form_row(registrationForm.avatar) }}
\t\t\t</div>
\t\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t\t<div id=\"submit-button\">
\t\t\t\t<button id=\"valider\" type=\"submit\" class=\"btn button-tags\">Créer un compte</button>
\t\t\t</div>
\t\t\t{{ form_end(registrationForm) }}
\t\t</section>
\t</div>
\t<script src=\"{{ asset('assets/js/registrationFormAuto.js') }}\"></script>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\registration\\register.html.twig");
    }
}
