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

/* testpalette/index.html.twig */
class __TwigTemplate_2088ef49c86a169651c9e4c728b3c433 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "testpalette/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "testpalette/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TestpaletteController!";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/Users/moussaillon/Desktop/DressMeUp/skeleton/src/Controller/TestpaletteController.php", 0), "html", null, true);
        echo "\">src/Controller/TestpaletteController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/Users/moussaillon/Desktop/DressMeUp/skeleton/templates/testpalette/index.html.twig", 0), "html", null, true);
        echo "\">templates/testpalette/index.html.twig</a></code></li>
    </ul>
</div>
    <main>
        <h1>Upload de fichiers via drag and drop</h1>
        <form id=\"form1\" name=\"monForm\" method=\"post\" action=\"upload.php\" enctype=\"multipart/form-data\">
            <div class=\"bloc\">
                <label>Choisissez vos images :</label>
            </div>
                <input type=\"file\" name=\"monFichier\" id=\"file\" accept=\"image/*\" required multiple style=\"display:none\" />
            </div>
            <div>
                <input type=\"file\" name=\"monFichier\" id=\"choisir\">
            </div>
        </form>
        <br>
        <div>
            <button id=\"BtnPipette\" type=\"button\">Pipette</button>
        </div>
        <div id=\"boxcolor\">
            <div id=\"couleur1\"></div>
            <span id=\"nomCouleur1\"></span>
        </div>
        <br>
        ";
        // line 44
        echo "        <div id=\"divcanvas\">
            <canvas id=\"canvas\" width=\"800px\" height=\"800px\"></canvas>
        </div>
       
    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <script src=\"/assets/js/dragAndDrop.js\"></script>
    <script src=\"/assets/js/pipette.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "testpalette/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 53,  133 => 52,  120 => 44,  93 => 17,  89 => 16,  82 => 12,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TestpaletteController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/Users/moussaillon/Desktop/DressMeUp/skeleton/src/Controller/TestpaletteController.php'|file_link(0) }}\">src/Controller/TestpaletteController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/Users/moussaillon/Desktop/DressMeUp/skeleton/templates/testpalette/index.html.twig'|file_link(0) }}\">templates/testpalette/index.html.twig</a></code></li>
    </ul>
</div>
    <main>
        <h1>Upload de fichiers via drag and drop</h1>
        <form id=\"form1\" name=\"monForm\" method=\"post\" action=\"upload.php\" enctype=\"multipart/form-data\">
            <div class=\"bloc\">
                <label>Choisissez vos images :</label>
            </div>
                <input type=\"file\" name=\"monFichier\" id=\"file\" accept=\"image/*\" required multiple style=\"display:none\" />
            </div>
            <div>
                <input type=\"file\" name=\"monFichier\" id=\"choisir\">
            </div>
        </form>
        <br>
        <div>
            <button id=\"BtnPipette\" type=\"button\">Pipette</button>
        </div>
        <div id=\"boxcolor\">
            <div id=\"couleur1\"></div>
            <span id=\"nomCouleur1\"></span>
        </div>
        <br>
        {# <div id=\"text\">
            <p>Cliquer ou glisser pour ajouter un fichier</p>
        </div> #}
        <div id=\"divcanvas\">
            <canvas id=\"canvas\" width=\"800px\" height=\"800px\"></canvas>
        </div>
       
    </main>

{% endblock %}

{% block javascripts %}
    <script src=\"/assets/js/dragAndDrop.js\"></script>
    <script src=\"/assets/js/pipette.js\"></script>
{% endblock %}
", "testpalette/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\testpalette\\index.html.twig");
    }
}
