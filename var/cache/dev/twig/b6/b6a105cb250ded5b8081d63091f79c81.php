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
class __TwigTemplate_4a481ad51a091bf1dfda29f9a950a40a extends Template
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
\t
\ttable{
\t\tdisplay : inline-block;
\t\tmargin : 0px 50px;
\t}
</style>

";
        // line 109
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
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["combinaisons"]) || array_key_exists("combinaisons", $context) ? $context["combinaisons"] : (function () { throw new RuntimeError('Variable "combinaisons" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 184
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "index", [], "array", false, false, false, 186), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "combinaison", [], "array", false, false, false, 189), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "idHaut", [], "array", false, false, false, 192), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorHaut", [], "array", false, false, false, 194), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorHaut", [], "array", false, false, false, 195), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorNameHaut", [], "array", false, false, false, 198), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "imageHaut", [], "array", false, false, false, 201), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "altHaut", [], "array", false, false, false, 204), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "idBas", [], "array", false, false, false, 207), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorBas", [], "array", false, false, false, 209), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorBas", [], "array", false, false, false, 210), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "colorNameBas", [], "array", false, false, false, 213), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "imageBas", [], "array", false, false, false, 216), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "altBas", [], "array", false, false, false, 219), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "idPalette", [], "array", false, false, false, 222), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color1", [], "array", false, false, false, 224), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color1", [], "array", false, false, false, 225), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor1", [], "array", false, false, false, 228), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color2", [], "array", false, false, false, 230), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color2", [], "array", false, false, false, 231), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor2", [], "array", false, false, false, 234), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color3", [], "array", false, false, false, 236), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color3", [], "array", false, false, false, 237), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor3", [], "array", false, false, false, 240), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color4", [], "array", false, false, false, 242), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color4", [], "array", false, false, false, 243), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor4", [], "array", false, false, false, 246), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td style=\"background-color:";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color5", [], "array", false, false, false, 248), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "color5", [], "array", false, false, false, 249), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "deltaColor5", [], "array", false, false, false, 252), "html", null, true);
            echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
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
        return array (  320 => 256,  310 => 252,  304 => 249,  300 => 248,  295 => 246,  289 => 243,  285 => 242,  280 => 240,  274 => 237,  270 => 236,  265 => 234,  259 => 231,  255 => 230,  250 => 228,  244 => 225,  240 => 224,  235 => 222,  229 => 219,  223 => 216,  217 => 213,  211 => 210,  207 => 209,  202 => 207,  196 => 204,  190 => 201,  184 => 198,  178 => 195,  174 => 194,  169 => 192,  163 => 189,  157 => 186,  153 => 184,  149 => 183,  73 => 109,  60 => 6,  47 => 5,  44 => 4,  41 => 2,);
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
\t
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

{% endblock %}", "home/test-generator.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\home\\test-generator.html.twig");
    }
}
