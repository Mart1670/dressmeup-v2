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

/* dressing/index.html.twig */
class __TwigTemplate_a9db937addbd73a47b3f8d3b58489df0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dressing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dressing/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Dressing";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/modal.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/canvas.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
 <header>
        <h1 class=\"text-center dressing_title mt-5\">Mon dressing</h1>
        </header>

        <h4 class=\"text-center\">Sélectionne ta catégorie</h4>

        <!-- ------------------------------ -->
        <!-- TOGGLE -->
        <!-- ------------------------------ -->

        <section class=\"container text-center toggle_box\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-4\">
                    <img class=\"fiche_vet img-fluid\" src=\"./assets/img/tee-shirt-square.svg\" alt=\"pictogramme de tee-shirt\">
                    <p class=\"fiche_vet\">Haut</p>
                </div>

                <div class=\"col-12 col-sm-4 form-check form-switch toggle_pos\">
                    <input type=\"checkbox\" class=\"toggle-switch\" role=\"switch\" id=\"flexSwitchCheckChecked\">
                    <label for=\"flexSwitchCheckChecked\"></label>
                </div>

                <div class=\"col-12 col-sm-4\">
                    <img class=\"fiche_vet img-fluid\" src=\"./assets/img/pants_square.svg\" alt=\"pictogramme de pantalon\">
                    <p>Bas</p>
                </div>

            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- DRESSING TAGS ET AJOUT DE PHOTO -->
        <!-- ------------------------------- -->

        <!-- TAGS DRESSING -->

        <section class=\"container-fluid border-top border-bottom border-2 border-dark 2px\">
            <div class=\"row\">

                <div class=\"col-12 col-sm-6 p-3 border-end border-2 border-dark grey_square\">
                    <ul id=\"styleVetements\" class=\"d-inline-flex flex-wrap vetement_form_type\">
                        <li class=\"tag_vet me-3 btn\">Tee-shirt</li>
                        <li class=\"tag_vet me-3 btn\">Sweat-shirt</li>
                        <li class=\"tag_vet me-3 btn\">Maille</li>
                        <li class=\"tag_vet me-3 btn\">Chemise</li>
                        <li class=\"tag_vet me-3 btn\">Gilet</li>
                        <li class=\"tag_vet me-3 btn\">Veste</li>
                    </ul>
                </div>

                <!-- ---------------- -->
                <!-- TAGS AJOUT PHOTO -->
                <!-- ---------------- -->


                <div class=\"col-12 col-sm-6 p-3 text-center yellow_square\" >
                    <h3>Ajoute ton vêtement ici</h3>
                    <img id=\"addCloth\"data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" class=\"mb-3 the_shadow\" src=\"./assets/img/icon_add.svg\" alt=\"image bouton pour ajouter un vêtement\">
                    <p>Glisse ta photo ici pour l'importer</p>
                </div>
                 
            </div>
        </section>


        <!-- ---------------- -->
        <!-- CARDS DRESSING -->
        <!-- ---------------- -->

        <section class=\"container\">
            <div id=\"dressingContent\" class=\"row\" data-type=\"Haut\">
                
                 <!-- CARD 1 -->

                 <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_orange.jpg\" alt=\"tee-shirt orange\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                

                <!-- CARD 2 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_bleu.jpg\" alt=\"tee shirt bleu\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                </div>
                <!-- CARD 3 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_marron.jpg\" alt=\"tee-shirt marron\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                </div>
                <!-- CARD 4 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_orange.jpg\" alt=\"tee shirt teeshirt_orange\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                </div>

                <!-- CARD 5 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_rouge.jpg\" alt=\"tee shirt rouge\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        ";
        // line 179
        echo twig_include($this->env, $context, "/modals/modal-dressing.html.twig");
        echo "



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "    <script src=\"assets/js/loadDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/pipette.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/dragAndDrop.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/switchDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/deleteOneCloth.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/modal.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/formAuto.js\" type=\"text/javascript\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dressing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 185,  273 => 184,  261 => 179,  91 => 11,  84 => 10,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Dressing{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/assets/css/modal.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/canvas.css\">
{% endblock %}

{% block body %}

 <header>
        <h1 class=\"text-center dressing_title mt-5\">Mon dressing</h1>
        </header>

        <h4 class=\"text-center\">Sélectionne ta catégorie</h4>

        <!-- ------------------------------ -->
        <!-- TOGGLE -->
        <!-- ------------------------------ -->

        <section class=\"container text-center toggle_box\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-4\">
                    <img class=\"fiche_vet img-fluid\" src=\"./assets/img/tee-shirt-square.svg\" alt=\"pictogramme de tee-shirt\">
                    <p class=\"fiche_vet\">Haut</p>
                </div>

                <div class=\"col-12 col-sm-4 form-check form-switch toggle_pos\">
                    <input type=\"checkbox\" class=\"toggle-switch\" role=\"switch\" id=\"flexSwitchCheckChecked\">
                    <label for=\"flexSwitchCheckChecked\"></label>
                </div>

                <div class=\"col-12 col-sm-4\">
                    <img class=\"fiche_vet img-fluid\" src=\"./assets/img/pants_square.svg\" alt=\"pictogramme de pantalon\">
                    <p>Bas</p>
                </div>

            </div>
        </section>

        <!-- ------------------------------- -->
        <!-- DRESSING TAGS ET AJOUT DE PHOTO -->
        <!-- ------------------------------- -->

        <!-- TAGS DRESSING -->

        <section class=\"container-fluid border-top border-bottom border-2 border-dark 2px\">
            <div class=\"row\">

                <div class=\"col-12 col-sm-6 p-3 border-end border-2 border-dark grey_square\">
                    <ul id=\"styleVetements\" class=\"d-inline-flex flex-wrap vetement_form_type\">
                        <li class=\"tag_vet me-3 btn\">Tee-shirt</li>
                        <li class=\"tag_vet me-3 btn\">Sweat-shirt</li>
                        <li class=\"tag_vet me-3 btn\">Maille</li>
                        <li class=\"tag_vet me-3 btn\">Chemise</li>
                        <li class=\"tag_vet me-3 btn\">Gilet</li>
                        <li class=\"tag_vet me-3 btn\">Veste</li>
                    </ul>
                </div>

                <!-- ---------------- -->
                <!-- TAGS AJOUT PHOTO -->
                <!-- ---------------- -->


                <div class=\"col-12 col-sm-6 p-3 text-center yellow_square\" >
                    <h3>Ajoute ton vêtement ici</h3>
                    <img id=\"addCloth\"data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" class=\"mb-3 the_shadow\" src=\"./assets/img/icon_add.svg\" alt=\"image bouton pour ajouter un vêtement\">
                    <p>Glisse ta photo ici pour l'importer</p>
                </div>
                 
            </div>
        </section>


        <!-- ---------------- -->
        <!-- CARDS DRESSING -->
        <!-- ---------------- -->

        <section class=\"container\">
            <div id=\"dressingContent\" class=\"row\" data-type=\"Haut\">
                
                 <!-- CARD 1 -->

                 <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_orange.jpg\" alt=\"tee-shirt orange\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                

                <!-- CARD 2 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_bleu.jpg\" alt=\"tee shirt bleu\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                </div>
                <!-- CARD 3 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_marron.jpg\" alt=\"tee-shirt marron\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                </div>
                <!-- CARD 4 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_orange.jpg\" alt=\"tee shirt teeshirt_orange\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                    </div>

                </div>

                <!-- CARD 5 -->

                <div class=\"card col p-0 m-0 card-dress\">
                    <div>
                        <img class=\"card-img-top photo_cloth img-fluid border-bottom border-2 border-dark\" src=\"./assets/img/teeshirt_rouge.jpg\" alt=\"tee shirt rouge\">
                    </div>
                    <div class=\"col-10 mt-3\">
                        <ul class=\"tag-vetement card-dress \">
                            <li class=\"\">Tee-shirt</li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                            </li>
                            <li class=\"d-flex justify-content-between align-items-stretch\">Green Yellow<span
                                    class=\"color-mark\" style=\"background-color:#00FA9A\"></span></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{ include('/modals/modal-dressing.html.twig') }}



{% endblock %}
{% block javascripts %}
    <script src=\"assets/js/loadDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/pipette.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/dragAndDrop.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/switchDressing.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/deleteOneCloth.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/modal.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/formAuto.js\" type=\"text/javascript\"></script>
{% endblock %}
", "dressing/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\dressing\\index.html.twig");
    }
}
