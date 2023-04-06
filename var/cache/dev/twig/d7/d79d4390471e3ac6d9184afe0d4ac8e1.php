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

/* home/test-generator.html.twig */
class __TwigTemplate_771846831b4ff5094289a8401343dff4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/test-generator.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
\ttable, thead, td, tbody, tr{ 
\t\tborder : 2px solid black;
\t}
\ttable{
\t\tdisplay : inline-block;
\t\tmargin : 0px 50px;
\t}
</style>

";
        // line 108
        echo "
<table>
\t<thead>
\t\t<td>
\t\t\tCombinaison N°
\t\t</td>
\t\t<td>
\t\t\tCombinaison
\t\t</td>
\t\t<td>
\t\t\tId Haut
\t\t</td>
\t\t<td>
\t\t\tCouleur Haut
\t\t</td>
\t\t<td>
\t\t\tNom Couleur Haut
\t\t</td>
\t\t<td>
\t\t\tImage Haut
\t\t</td>
\t\t<td>
\t\t\tAlt Haut
\t\t</td>
\t\t<td>
\t\t\tId Bas
\t\t</td>
\t\t<td>
\t\t\tCouleur Bas
\t\t</td>
\t\t<td>
\t\t\tNom Couleur Bas
\t\t</td>
\t\t<td>
\t\t\tImage Bas
\t\t</td>
\t\t<td>
\t\t\tAlt Bas
\t\t</td>
\t\t<td>
\t\t\tId Palette
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 1
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 1
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 2
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 2
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 3
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 3
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 4
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 4
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 5
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 5
\t\t</td>
\t</thead>
\t<tbody>
\t\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["combinaisons"]) || array_key_exists("combinaisons", $context) ? $context["combinaisons"] : (function () { throw new RuntimeError('Variable "combinaisons" does not exist.', 182, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 183
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "index", [], "array", false, false, false, 185), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "combinaison", [], "array", false, false, false, 188), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "idHaut", [], "array", false, false, false, 191), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorHaut", [], "array", false, false, false, 193), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorHaut", [], "array", false, false, false, 194), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorNameHaut", [], "array", false, false, false, 197), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "imageHaut", [], "array", false, false, false, 200), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "altHaut", [], "array", false, false, false, 203), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "idBas", [], "array", false, false, false, 206), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorBas", [], "array", false, false, false, 208), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorBas", [], "array", false, false, false, 209), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorNameBas", [], "array", false, false, false, 212), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "imageBas", [], "array", false, false, false, 215), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "altBas", [], "array", false, false, false, 218), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "idPalette", [], "array", false, false, false, 221), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color1", [], "array", false, false, false, 223), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color1", [], "array", false, false, false, 224), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor1", [], "array", false, false, false, 227), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color2", [], "array", false, false, false, 229), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color2", [], "array", false, false, false, 230), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor2", [], "array", false, false, false, 233), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color3", [], "array", false, false, false, 235), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color3", [], "array", false, false, false, 236), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor3", [], "array", false, false, false, 239), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color4", [], "array", false, false, false, 241), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color4", [], "array", false, false, false, 242), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor4", [], "array", false, false, false, 245), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color5", [], "array", false, false, false, 247), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color5", [], "array", false, false, false, 248), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor5", [], "array", false, false, false, 251), "html", null, true);
            echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "\t</tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/test-generator.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  319 => 255,  309 => 251,  303 => 248,  299 => 247,  294 => 245,  288 => 242,  284 => 241,  279 => 239,  273 => 236,  269 => 235,  264 => 233,  258 => 230,  254 => 229,  249 => 227,  243 => 224,  239 => 223,  234 => 221,  228 => 218,  222 => 215,  216 => 212,  210 => 209,  206 => 208,  201 => 206,  195 => 203,  189 => 200,  183 => 197,  177 => 194,  173 => 193,  168 => 191,  162 => 188,  156 => 185,  152 => 183,  148 => 182,  72 => 108,  60 => 6,  47 => 5,  44 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}

{# {% block title %}DressMeUp - Accueil{% endblock %} #}

{% block body %}
<style>
\ttable, thead, td, tbody, tr{ 
\t\tborder : 2px solid black;
\t}
\ttable{
\t\tdisplay : inline-block;
\t\tmargin : 0px 50px;
\t}
</style>

{# <table>
\t<thead>
\t\t<td>
\t\t\tType
\t\t</td>
\t\t<td>
\t\t\tCouleur
\t\t</td>
\t\t<td>
\t\t\tNom couleur
\t\t</td>
\t</thead>
\t<tbody>
\t\t{% for tab in hauts %}
\t\t<tr>
\t\t\t<td>
\t\t\t\t{{tab['type']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color'][0]}}\">
\t\t\t\t{{tab['color'][0]}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['colorName'][0]}}
\t\t\t</td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>

<table>
\t<thead>
\t\t<td>
\t\t\tType
\t\t</td>
\t\t<td>
\t\t\tCouleur
\t\t</td>
\t\t<td>
\t\t\tNom couleur
\t\t</td>
\t</thead>
\t<tbody>
\t\t{% for tab in bas %}
\t\t<tr>
\t\t\t<td>
\t\t\t\t{{tab['type']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color'][0]}}\">
\t\t\t\t{{tab['color'][0]}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['colorName'][0]}}
\t\t\t</td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>

<table>
\t<thead>
\t\t<td>
\t\t\tPalette N°
\t\t</td>
\t\t<td colspan=5>
\t\t\tCouleurs
\t\t</td>
\t</thead>
\t<tbody>
\t\t{% for tab in palettes %}
\t\t<tr>
\t\t\t<td>
\t\t\t\t{{tab['id']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color1']}}\">
\t\t\t\t{{tab['color1']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color2']}}\">
\t\t\t\t{{tab['color2']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color3']}}\">
\t\t\t\t{{tab['color3']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color4']}}\">
\t\t\t\t{{tab['color4']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color5']}}\">
\t\t\t\t{{tab['color4']}}
\t\t\t</td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table> #}

<table>
\t<thead>
\t\t<td>
\t\t\tCombinaison N°
\t\t</td>
\t\t<td>
\t\t\tCombinaison
\t\t</td>
\t\t<td>
\t\t\tId Haut
\t\t</td>
\t\t<td>
\t\t\tCouleur Haut
\t\t</td>
\t\t<td>
\t\t\tNom Couleur Haut
\t\t</td>
\t\t<td>
\t\t\tImage Haut
\t\t</td>
\t\t<td>
\t\t\tAlt Haut
\t\t</td>
\t\t<td>
\t\t\tId Bas
\t\t</td>
\t\t<td>
\t\t\tCouleur Bas
\t\t</td>
\t\t<td>
\t\t\tNom Couleur Bas
\t\t</td>
\t\t<td>
\t\t\tImage Bas
\t\t</td>
\t\t<td>
\t\t\tAlt Bas
\t\t</td>
\t\t<td>
\t\t\tId Palette
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 1
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 1
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 2
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 2
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 3
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 3
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 4
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 4
\t\t</td>
\t\t<td>
\t\t\tCouleur Palette 5
\t\t</td>
\t\t<td>
\t\t\tDelta Couleur Palette 5
\t\t</td>
\t</thead>
\t<tbody>
\t\t{% for tab in combinaisons %}
\t\t<tr>
\t\t\t<td>
\t\t\t\t{{tab['index']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['combinaison']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['idHaut']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['colorHaut']}}\">
\t\t\t\t{{tab['colorHaut']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['colorNameHaut']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['imageHaut']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['altHaut']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['idBas']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['colorBas']}}\">
\t\t\t\t{{tab['colorBas']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['colorNameBas']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['imageBas']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['altBas']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['idPalette']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color1']}}\">
\t\t\t\t{{tab['color1']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['deltaColor1']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color2']}}\">
\t\t\t\t{{tab['color2']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['deltaColor2']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color3']}}\">
\t\t\t\t{{tab['color3']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['deltaColor3']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color4']}}\">
\t\t\t\t{{tab['color4']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['deltaColor4']}}
\t\t\t</td>
\t\t\t<td style=\"background-color:{{tab['color5']}}\">
\t\t\t\t{{tab['color5']}}
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{tab['deltaColor5']}}
\t\t\t</td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>

{% endblock %}", "home/test-generator.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\home\\test-generator.html.twig");
    }
}
