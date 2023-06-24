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
class __TwigTemplate_0d01d01ffc9be6fff2cd75a4c8f26923 extends Template
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
                    <div id=\"BtnPipette\" data-active=\"false\">
                        <img src=\"/assets/img/pipette-icon.svg\" alt=\"Supprimer un vêtement\" srcset=\"\">
                    </div>
                    <div class=\"cards-style\">
                        <div id=\"pic-area\" class=\"empty-add\">
                            ";
        // line 21
        echo "                            <div id=\"divcanvas\">
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
                </div>
                <div>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "newColor", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nameColor", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "image", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "color", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                    <h4>Sélectionne ta catégorie</h4>
                    <div id=\"cat-selection\" class=\"button-list\">
                        <input type=\"radio\" name=\"categorie\" id=\"categorie1\" class=\"button-tags\" autocomplete=\"off\" list>
                        <label for=\"categorie1\" class=\"catBtn button-tags\">Haut</label>
                        <input type=\"radio\" name=\"categorie\" id=\"categorie2\" class=\"button-tags\" autocomplete=\"off\">
                        <label for=\"categorie2\" class=\"catBtn button-tags\">Bas</label>
                    </div>
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
    
                    <h4>Choisis le type de vêtement</h4>
                    <div id=\"type-vetements\" class=\"button-list\">
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-tee-shirt\" autocomplete=\"off\" list>
                      <label class=\"button-tags typeBtn\" for=\"type-tee-shirt\">Tee-shirt</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-sweat\" autocomplete=\"off\">
                      <label class=\"button-tags typeBtn\" for=\"type-sweat\">Sweat-shirt</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-maille\" autocomplete=\"off\" list>
                      <label class=\"button-tags typeBtn\" for=\"type-maille\">Maille</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-chemise\" autocomplete=\"off\">
                      <label class=\"button-tags typeBtn\" for=\"type-chemise\">Chemise</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-gilet\" autocomplete=\"off\" list>
                      <label class=\"button-tags typeBtn\" for=\"type-gilet\">Gilet</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-veste\" autocomplete=\"off\">
                      <label class=\"button-tags typeBtn\" for=\"type-veste\">Veste</label>
    
                    </div>
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "style", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
    
                    <h4>Pour quelle occasion portes-tu ce vêtement ?</h4>
    
                    <div id=\"ambiance-vetements\" class=\"button-list\">
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-sortie\" autocomplete=\"off\">
                        <label class=\"button-tags ambBtn\" for=\"ambiance-sortie\" data-index=\"0\">Sortie entre amis</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-travail\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-travail\" data-index=\"1\">Travail</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-sport\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-sport\" data-index=\"2\">Sport</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-detente\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-detente\" data-index=\"3\">Détente</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-romantique\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-romantique\" data-index=\"4\">Rendez-vous Romantique</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-rien\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-rien\" data-index=\"5\">Rien de prévu</label>
    
                    </div>
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "tagAmbiances", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "hidden-form-field"]]);
        echo "
                    ";
        // line 103
        echo "                    <div id=\"form-control\">
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "valider", [], "any", false, false, false, 104), 'widget', ["label" => "Valider", "attr" => ["class" => "button-tags"]]);
        echo "
                        <a  href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dressing");
        echo "\"><button id=\"btnCancel\" type=\"button\" class=\"button-tags\">Annuler</button></a>
                    </div>
                </div>
                ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        echo "
            </section>
        </div>
        
       ";
        // line 113
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
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
        return array (  244 => 118,  237 => 117,  227 => 113,  220 => 108,  214 => 105,  210 => 104,  207 => 103,  203 => 101,  176 => 77,  150 => 54,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  103 => 21,  92 => 12,  87 => 9,  80 => 8,  68 => 5,  55 => 3,  38 => 1,);
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
                    <div id=\"BtnPipette\" data-active=\"false\">
                        <img src=\"/assets/img/pipette-icon.svg\" alt=\"Supprimer un vêtement\" srcset=\"\">
                    </div>
                    <div class=\"cards-style\">
                        <div id=\"pic-area\" class=\"empty-add\">
                            {# <p>Sélectionner la photo du vêtement à ajouter</p> #}
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
                </div>
                <div>
                    {{ form_widget(form.newColor, {'attr': {'class': 'hidden-form-field'}}) }}
                    {{ form_widget(form.nameColor, {'attr': {'class': 'hidden-form-field'}}) }}
                    {{ form_widget(form.image, {'attr': {'class': 'hidden-form-field'}}) }}
                    {{ form_widget(form.color, {'attr': {'class': 'hidden-form-field'}}) }}
                    <h4>Sélectionne ta catégorie</h4>
                    <div id=\"cat-selection\" class=\"button-list\">
                        <input type=\"radio\" name=\"categorie\" id=\"categorie1\" class=\"button-tags\" autocomplete=\"off\" list>
                        <label for=\"categorie1\" class=\"catBtn button-tags\">Haut</label>
                        <input type=\"radio\" name=\"categorie\" id=\"categorie2\" class=\"button-tags\" autocomplete=\"off\">
                        <label for=\"categorie2\" class=\"catBtn button-tags\">Bas</label>
                    </div>
                    {{ form_widget(form.type, {'attr': {'class': 'hidden-form-field'}}) }}
    
                    <h4>Choisis le type de vêtement</h4>
                    <div id=\"type-vetements\" class=\"button-list\">
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-tee-shirt\" autocomplete=\"off\" list>
                      <label class=\"button-tags typeBtn\" for=\"type-tee-shirt\">Tee-shirt</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-sweat\" autocomplete=\"off\">
                      <label class=\"button-tags typeBtn\" for=\"type-sweat\">Sweat-shirt</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-maille\" autocomplete=\"off\" list>
                      <label class=\"button-tags typeBtn\" for=\"type-maille\">Maille</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-chemise\" autocomplete=\"off\">
                      <label class=\"button-tags typeBtn\" for=\"type-chemise\">Chemise</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-gilet\" autocomplete=\"off\" list>
                      <label class=\"button-tags typeBtn\" for=\"type-gilet\">Gilet</label>
    
                      <input type=\"radio\" class=\"button-tags\" name=\"type\" id=\"type-veste\" autocomplete=\"off\">
                      <label class=\"button-tags typeBtn\" for=\"type-veste\">Veste</label>
    
                    </div>
                    {{ form_widget(form.style, {'attr': {'class': 'hidden-form-field'}}) }}
    
                    <h4>Pour quelle occasion portes-tu ce vêtement ?</h4>
    
                    <div id=\"ambiance-vetements\" class=\"button-list\">
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-sortie\" autocomplete=\"off\">
                        <label class=\"button-tags ambBtn\" for=\"ambiance-sortie\" data-index=\"0\">Sortie entre amis</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-travail\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-travail\" data-index=\"1\">Travail</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-sport\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-sport\" data-index=\"2\">Sport</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-detente\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-detente\" data-index=\"3\">Détente</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-romantique\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-romantique\" data-index=\"4\">Rendez-vous Romantique</label>
            
                        <input type=\"checkbox\" class=\"button-tags\" name=\"ambiance\" id=\"ambiance-rien\" autocomplete=\"off\" >
                        <label class=\"button-tags ambBtn\" for=\"ambiance-rien\" data-index=\"5\">Rien de prévu</label>
    
                    </div>
                    {{ form_widget(form.tagAmbiances, {'attr': {'class': 'hidden-form-field'}}) }}
                    {# {{ form_widget(form.tagAmbiances) }} #}
                    <div id=\"form-control\">
                        {{ form_widget(form.valider, { 'label': 'Valider', 'attr': {'class': 'button-tags'}}) }}
                        <a  href=\"{{ path('app_dressing') }}\"><button id=\"btnCancel\" type=\"button\" class=\"button-tags\">Annuler</button></a>
                    </div>
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
