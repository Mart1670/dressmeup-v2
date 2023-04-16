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

/* vetement/index.html.twig */
class __TwigTemplate_7dc30d62494915ee90d5c37babe94305 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vetement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vetement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Ajouter un vêtement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
        <h1>Ajoutes un vêtement</h1>
        <div class=\"container\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["id" => "form_vetement"]]);
        echo "
            <section id=\"add-cloth\">
                <div class=\"cards\">
                    <div id=\"BtnPipette\">
                        <img src=\"/assets/img/pipette-icon.svg\" alt=\"Supprimer un vêtement\" srcset=\"\">
                    </div>
                    <div class=\"cards-style\">
                        <div id=\"pic-area\">
                            <p>Sélectionner la photo du vêtement à ajouter</p>
                            <div id=\"divcanvas\">
                                <canvas id=\"canvas\"></canvas>
                            </div>
                        </div>
                        <div class=\"info-vetement\">
                            <div>
                                <div>
                                    <p id=\"tag_vet\" class=\"card-type card-data\">Type de vêtement</p>
                                </div>
                                <div>
                                <div id=\"colorName1\">
                                    <p class=\"card-color card-data\">Couleur 1</p><span id=\"color1\" class=\"card-data\"></span>
                                </div>
                                <div id=\"colorName2\">
                                    <p class=\"card-color card-data\">Couleur 2</p><span id=\"color2\" class=\"card-data\"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "newColor", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nameColor", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "color", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                <h4>Sélectionne ta catégorie</h4>
                <div id=\"type-selection\" class=\"button-list\">
                    <input type=\"radio\" name=\"categorie\" id=\"categorie1\" class=\"btn-check\" autocomplete=\"off\" list>
                    <label for=\"categorie1\" class=\"catBtn\">Haut</label>
                    <input type=\"radio\" name=\"categorie\" id=\"categorie2\" class=\"btn-check\"autocomplete=\"off\">
                    <label for=\"categorie2\" class=\"catBtn\">Bas</label>
                </div>
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "

                <h4>Choisis le type de vêtement</h4>
                <div id=\"type-vetements\" class=\"button-list\">
                  <input type=\"radio\" class=\"btn-check mt-2\" name=\"type\" id=\"type-tee-shirt\" autocomplete=\"off\" list>
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-tee-shirt\">Tee-shirt</label>

                  <input type=\"radio\" class=\"btn-check\" name=\"type\" id=\"type-sweat\" autocomplete=\"off\">
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-sweat\">Sweat-shirt</label>

                  <input type=\"radio\" class=\"btn-check mt-2\" name=\"type\" id=\"type-maille\" autocomplete=\"off\" list>
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-maille\">Maille</label>

                  <input type=\"radio\" class=\"btn-check\" name=\"type\" id=\"type-chemise\" autocomplete=\"off\">
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-chemise\">Chemise</label>

                  <input type=\"radio\" class=\"btn-check mt-2\" name=\"type\" id=\"type-gilet\" autocomplete=\"off\" list>
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-gilet\">Gilet</label>

                  <input type=\"radio\" class=\"btn-check\" name=\"type\" id=\"type-veste\" autocomplete=\"off\">
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-veste\">Veste</label>

                </div>
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "style", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "

                <h4>Pour quelle occasion portes-tu ce vêtement ?</h4>

                <div id=\"ambiance-vetements\" class=\"button-list\">
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-sortie\" autocomplete=\"off\">
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-sortie\" data-index=\"0\">Sortie entre amis</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-travail\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-travail\" data-index=\"1\">Travail</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-sport\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-sport\" data-index=\"2\">Sport</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-detente\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-detente\" data-index=\"3\">Détente</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-romantique\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-romantique\" data-index=\"4\">Rendez-vous Romantique</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-rien\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-rien\" data-index=\"5\">Rien de prévu</label>

                </div>
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "tagAmbiances", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                <div id=\"form-control\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "valider", [], "any", false, false, false, 101), 'widget', ["label" => "Valider"]);
        echo "
                    <button id=\"btnCancel\" type=\"button\" class=\"btn btn-secondary btn-close-modal\" data-bs-dismiss=\"modal\">Annuler</button>
                </div>
                ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
            </section>
        </div>
        
       ";
        // line 109
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "    <script src=\"assets/js/pipette.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/dragAndDrop.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/kmeans.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/colorName.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/formAuto.js\" type=\"text/javascript\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "vetement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 114,  228 => 113,  218 => 109,  211 => 104,  205 => 101,  200 => 99,  173 => 75,  147 => 52,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  92 => 12,  87 => 9,  80 => 8,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Ajouter un vêtement{% endblock %}

{% block stylesheets %}
{% endblock %}

{% block body %}

        <h1>Ajoutes un vêtement</h1>
        <div class=\"container\">
            {{ form_start(form, {'attr': {'id': 'form_vetement'}}) }}
            <section id=\"add-cloth\">
                <div class=\"cards\">
                    <div id=\"BtnPipette\">
                        <img src=\"/assets/img/pipette-icon.svg\" alt=\"Supprimer un vêtement\" srcset=\"\">
                    </div>
                    <div class=\"cards-style\">
                        <div id=\"pic-area\">
                            <p>Sélectionner la photo du vêtement à ajouter</p>
                            <div id=\"divcanvas\">
                                <canvas id=\"canvas\"></canvas>
                            </div>
                        </div>
                        <div class=\"info-vetement\">
                            <div>
                                <div>
                                    <p id=\"tag_vet\" class=\"card-type card-data\">Type de vêtement</p>
                                </div>
                                <div>
                                <div id=\"colorName1\">
                                    <p class=\"card-color card-data\">Couleur 1</p><span id=\"color1\" class=\"card-data\"></span>
                                </div>
                                <div id=\"colorName2\">
                                    <p class=\"card-color card-data\">Couleur 2</p><span id=\"color2\" class=\"card-data\"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ form_widget(form.newColor, {'attr': {'class': 'hidden-form-field'}}) }}
                {{ form_widget(form.nameColor, {'attr': {'class': 'hidden-form-field'}}) }}
                {{ form_widget(form.image, {'attr': {'class': 'hidden-form-field'}}) }}
                {{ form_widget(form.color, {'attr': {'class': 'hidden-form-field'}}) }}
                <h4>Sélectionne ta catégorie</h4>
                <div id=\"type-selection\" class=\"button-list\">
                    <input type=\"radio\" name=\"categorie\" id=\"categorie1\" class=\"btn-check\" autocomplete=\"off\" list>
                    <label for=\"categorie1\" class=\"catBtn\">Haut</label>
                    <input type=\"radio\" name=\"categorie\" id=\"categorie2\" class=\"btn-check\"autocomplete=\"off\">
                    <label for=\"categorie2\" class=\"catBtn\">Bas</label>
                </div>
                {{ form_widget(form.type, {'attr': {'class': 'hidden-form-field'}}) }}

                <h4>Choisis le type de vêtement</h4>
                <div id=\"type-vetements\" class=\"button-list\">
                  <input type=\"radio\" class=\"btn-check mt-2\" name=\"type\" id=\"type-tee-shirt\" autocomplete=\"off\" list>
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-tee-shirt\">Tee-shirt</label>

                  <input type=\"radio\" class=\"btn-check\" name=\"type\" id=\"type-sweat\" autocomplete=\"off\">
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-sweat\">Sweat-shirt</label>

                  <input type=\"radio\" class=\"btn-check mt-2\" name=\"type\" id=\"type-maille\" autocomplete=\"off\" list>
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-maille\">Maille</label>

                  <input type=\"radio\" class=\"btn-check\" name=\"type\" id=\"type-chemise\" autocomplete=\"off\">
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-chemise\">Chemise</label>

                  <input type=\"radio\" class=\"btn-check mt-2\" name=\"type\" id=\"type-gilet\" autocomplete=\"off\" list>
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-gilet\">Gilet</label>

                  <input type=\"radio\" class=\"btn-check\" name=\"type\" id=\"type-veste\" autocomplete=\"off\">
                  <label class=\"btn btn-secondary typeBtn\" for=\"type-veste\">Veste</label>

                </div>
                {{ form_widget(form.style, {'attr': {'class': 'hidden-form-field'}}) }}

                <h4>Pour quelle occasion portes-tu ce vêtement ?</h4>

                <div id=\"ambiance-vetements\" class=\"button-list\">
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-sortie\" autocomplete=\"off\">
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-sortie\" data-index=\"0\">Sortie entre amis</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-travail\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-travail\" data-index=\"1\">Travail</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-sport\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-sport\" data-index=\"2\">Sport</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-detente\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-detente\" data-index=\"3\">Détente</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-romantique\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-romantique\" data-index=\"4\">Rendez-vous Romantique</label>
        
                    <input type=\"radio\" class=\"btn-check\" name=\"ambiance\" id=\"ambiance-rien\" autocomplete=\"off\" >
                    <label class=\"btn btn-secondary ambBtn\" for=\"ambiance-rien\" data-index=\"5\">Rien de prévu</label>

                </div>
                {{ form_widget(form.tagAmbiances, {'attr': {'class': 'hidden-form-field'}}) }}
                <div id=\"form-control\">
                    {{ form_widget(form.valider, { 'label': 'Valider'}) }}
                    <button id=\"btnCancel\" type=\"button\" class=\"btn btn-secondary btn-close-modal\" data-bs-dismiss=\"modal\">Annuler</button>
                </div>
                {{ form_end(form) }}
            </section>
        </div>
        
       {#  {{ include('/modals/modal-dressing.html.twig') }} #}



{% endblock %}
{% block javascripts %}
    <script src=\"assets/js/pipette.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/dragAndDrop.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/kmeans.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/colorName.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/formAuto.js\" type=\"text/javascript\"></script>
{% endblock %}", "vetement/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\vetement\\index.html.twig");
    }
}
