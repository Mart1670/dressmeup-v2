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
            <div ";
        // line 12
        echo ">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["id" => "form_vetement"]]);
        echo "
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_end');
        echo "
            </div>
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
                <h4>Sélectionne ta catégorie</h4>
                <div id=\"type-selection\" class=\"button-list\">
                    <input type=\"radio\" name=\"categorie\" id=\"categorie1\" class=\"btn-check\" autocomplete=\"off\" list>
                    <label for=\"categorie1\" class=\"catBtn\">Haut</label>
                    <input type=\"radio\" name=\"categorie\" id=\"categorie2\" class=\"btn-check\"autocomplete=\"off\">
                    <label for=\"categorie2\" class=\"catBtn\">Bas</label>
                </div>

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
                <div id=\"form-control\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"btnSubmitVetementForm\">Valider</button>
                    <button id=\"btnCancel\" type=\"button\" class=\"btn btn-secondary btn-close-modal\" data-bs-dismiss=\"modal\">Annuler</button>
                </div>
            </section>
        </div>
        
       ";
        // line 102
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
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
        return array (  206 => 107,  199 => 106,  189 => 102,  99 => 14,  95 => 13,  92 => 12,  87 => 9,  80 => 8,  68 => 5,  55 => 3,  38 => 1,);
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
            <div {# style=\"display:none;\" #}>
                {{ form_start(form, {'attr': {'id': 'form_vetement'}}) }}
                {{ form_end(form) }}
            </div>
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
                <h4>Sélectionne ta catégorie</h4>
                <div id=\"type-selection\" class=\"button-list\">
                    <input type=\"radio\" name=\"categorie\" id=\"categorie1\" class=\"btn-check\" autocomplete=\"off\" list>
                    <label for=\"categorie1\" class=\"catBtn\">Haut</label>
                    <input type=\"radio\" name=\"categorie\" id=\"categorie2\" class=\"btn-check\"autocomplete=\"off\">
                    <label for=\"categorie2\" class=\"catBtn\">Bas</label>
                </div>

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
                <div id=\"form-control\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"btnSubmitVetementForm\">Valider</button>
                    <button id=\"btnCancel\" type=\"button\" class=\"btn btn-secondary btn-close-modal\" data-bs-dismiss=\"modal\">Annuler</button>
                </div>
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
