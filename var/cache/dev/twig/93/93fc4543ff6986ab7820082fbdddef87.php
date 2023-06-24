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

/* colortest/index.html.twig */
class __TwigTemplate_d872a53f9af989f0ee242e503e64e085 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "colortest/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "colortest/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ColortestController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/Users/moussaillon/Desktop/DressMeUp/skeleton/src/Controller/ColortestController.php", 0), "html", null, true);
        echo "\">src/Controller/ColortestController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/Users/moussaillon/Desktop/DressMeUp/skeleton/templates/colortest/index.html.twig", 0), "html", null, true);
        echo "\">templates/colortest/index.html.twig</a></code></li>
    </ul>
</div>
<div>
    <table>
        <thead>
            <td>
                Random Color
            </td>
            <td>
                Delta
            </td>
            <td>
                Nom (BDD le plus proche)
            </td>
            <td>
                Couleur (BDD le plus proche)
            </td>
        </thead>
        <tbody>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["RandomColors"]) || array_key_exists("RandomColors", $context) ? $context["RandomColors"] : (function () { throw new RuntimeError('Variable "RandomColors" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 38
            echo "            <tr>
                <td style=\"background-color:";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "RandomColor", [], "array", false, false, false, 39), "html", null, true);
            echo "\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "RandomColor", [], "array", false, false, false, 40), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "delta", [], "array", false, false, false, 43), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "Nom", [], "array", false, false, false, 46), "html", null, true);
            echo "
                </td>
                <td style=\"background-color:";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "hex", [], "array", false, false, false, 48), "html", null, true);
            echo "\">
                    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "hex", [], "array", false, false, false, 49), "html", null, true);
            echo "
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "colortest/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  147 => 49,  143 => 48,  138 => 46,  132 => 43,  126 => 40,  122 => 39,  119 => 38,  115 => 37,  92 => 17,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ColortestController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/Users/moussaillon/Desktop/DressMeUp/skeleton/src/Controller/ColortestController.php'|file_link(0) }}\">src/Controller/ColortestController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/Users/moussaillon/Desktop/DressMeUp/skeleton/templates/colortest/index.html.twig'|file_link(0) }}\">templates/colortest/index.html.twig</a></code></li>
    </ul>
</div>
<div>
    <table>
        <thead>
            <td>
                Random Color
            </td>
            <td>
                Delta
            </td>
            <td>
                Nom (BDD le plus proche)
            </td>
            <td>
                Couleur (BDD le plus proche)
            </td>
        </thead>
        <tbody>
            {% for tab in RandomColors %}
            <tr>
                <td style=\"background-color:{{tab['RandomColor']}}\">
                    {{tab['RandomColor'] }}
                </td>
                <td>
                    {{tab['delta'] }}
                </td>
                <td>
                    {{tab['Nom'] }}
                </td>
                <td style=\"background-color:{{tab['hex']}}\">
                    {{tab['hex'] }}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "colortest/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\colortest\\index.html.twig");
    }
}
