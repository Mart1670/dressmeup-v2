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

/* @EasyAdmin/crud/field/country.html.twig */
class __TwigTemplate_ccea0d857f55d4c08914c5a42434a7f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/country.html.twig"));

        // line 6
        $context["show_flag"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "customOptions", [], "any", false, false, false, 6), "get", [0 => "showFlag"], "method", false, false, false, 6);
        // line 7
        $context["show_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "customOptions", [], "any", false, false, false, 7), "get", [0 => "showName"], "method", false, false, false, 7);
        // line 8
        echo "
";
        // line 9
        if (((isset($context["show_flag"]) || array_key_exists("show_flag", $context) ? $context["show_flag"] : (function () { throw new RuntimeError('Variable "show_flag" does not exist.', 9, $this->source); })()) &&  !(isset($context["show_name"]) || array_key_exists("show_name", $context) ? $context["show_name"] : (function () { throw new RuntimeError('Variable "show_name" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "formattedValue", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 11
                echo "        ";
                if ( !(null === $context["flag_code"])) {
                    // line 12
                    echo "            <img class=\"country-flag\" alt=\"";
                    echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 12, $this->source); })()), "assets", [], "any", false, false, false, 12), "defaultAssetPackageName", [], "any", false, false, false, 12)), "html", null, true);
                    echo "\">
        ";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((        // line 15
(isset($context["show_name"]) || array_key_exists("show_name", $context) ? $context["show_name"] : (function () { throw new RuntimeError('Variable "show_name" does not exist.', 15, $this->source); })()) &&  !(isset($context["show_flag"]) || array_key_exists("show_flag", $context) ? $context["show_flag"] : (function () { throw new RuntimeError('Variable "show_flag" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "formattedValue", [], "any", false, false, false, 16), ", "), "html", null, true);
            echo "
";
        } else {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "formattedValue", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["flag_code"] => $context["country_name"]) {
                // line 19
                echo "        <span>";
                // line 20
                if ((isset($context["show_flag"]) || array_key_exists("show_flag", $context) ? $context["show_flag"] : (function () { throw new RuntimeError('Variable "show_flag" does not exist.', 20, $this->source); })())) {
                    // line 21
                    if ( !(null === $context["flag_code"])) {
                        // line 22
                        echo "<img class=\"country-flag\" alt=\"";
                        echo twig_escape_filter($this->env, $context["country_name"], "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . $context["flag_code"]) . ".svg"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 22, $this->source); })()), "assets", [], "any", false, false, false, 22), "defaultAssetPackageName", [], "any", false, false, false, 22)), "html", null, true);
                        echo "\">";
                    }
                }
                // line 26
                if ((isset($context["show_name"]) || array_key_exists("show_name", $context) ? $context["show_name"] : (function () { throw new RuntimeError('Variable "show_name" does not exist.', 26, $this->source); })())) {
                    // line 27
                    (((array_key_exists("country_name", $context) &&  !(null === $context["country_name"]))) ? (print (twig_escape_filter($this->env, $context["country_name"], "html", null, true))) : (print ("")));
                }
                // line 29
                echo "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag_code'], $context['country_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  100 => 27,  98 => 26,  90 => 22,  88 => 21,  86 => 20,  84 => 19,  79 => 18,  73 => 16,  71 => 15,  65 => 14,  57 => 12,  54 => 11,  49 => 10,  47 => 9,  44 => 8,  42 => 7,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{# Regardless of the field options, country names are always stored
   in field.formattedValue as ['alpha2CountryCode' => 'countryName'] #}
{% set show_flag = field.customOptions.get('showFlag') %}
{% set show_name = field.customOptions.get('showName') %}

{% if show_flag and not show_name %}
    {% for flag_code, country_name in field.formattedValue %}
        {% if flag_code is not null %}
            <img class=\"country-flag\" alt=\"{{ country_name }}\" src=\"{{ asset('images/flags/' ~ flag_code ~ '.svg', ea.assets.defaultAssetPackageName) }}\">
        {% endif %}
    {% endfor %}
{% elseif show_name and not show_flag  %}
    {{ field.formattedValue|join(', ') }}
{% else %}
    {% for flag_code, country_name in field.formattedValue %}
        <span>
            {%- if show_flag -%}
                {%- if flag_code is not null -%}
                    <img class=\"country-flag\" alt=\"{{ country_name }}\" src=\"{{ asset('images/flags/' ~ flag_code ~ '.svg', ea.assets.defaultAssetPackageName) }}\">
                {%- endif -%}
            {%- endif -%}

            {%- if show_name -%}
                {{- country_name ?? '' -}}
            {%- endif -%}
        </span>
    {% endfor %}
{% endif %}
", "@EasyAdmin/crud/field/country.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\country.html.twig");
    }
}
