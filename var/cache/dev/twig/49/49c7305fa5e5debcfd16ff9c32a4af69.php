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

/* /modals/modal-dressing.html.twig */
class __TwigTemplate_fa05591c13ac4b34d94245bd6d2751be extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/modals/modal-dressing.html.twig"));

        // line 1
        echo "
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
        <div id=\"modalbackground\" class=\"container\">
          <div class=\"row\">
            
            <div id=\"modal-dressing\" class=\"\">
            <img src=\"assets/img/croixnormal.svg\" type=\"button\" class=\"btn-close-modal float-right croix\" data-bs-dismiss=\"modal\" alt=\"\">
              <div style=\"display:none;\">
              ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["id" => "form_vetement"]]);
        echo "
              ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
              </div>
              
              <div id=\"boxcolor\">
                <div id=\"couleur1\"></div>
                <span id=\"nomCouleur1\"></span>
              </div>
            <div class=\"modal-footer border-top-0\">
            </div>
          </div>
          <div class=\"row\">
          <!-- ---------------------- COL VETEMENT ---------->

            <div class=\"col-4 mt-3\">
              <span id=\"BtnPipette\" type=\"button\">Pipette</span>
              <div id=\"divcanvas\">
                <canvas id=\"canvas\" width=\"800px\" height=\"800px\"></canvas>
              </div>
              <div>
                <h4>Couleurs</h4>
              </div>
              <div class=\"tag_content_size\">
                <ul class=\"tag-vetement card-dress p-0\">
                  <li id= \"tag_vet\" class=\"tag_vet\">Choisis le type de vêtement</li>
                  <li id=\"colorName1\" class=\"d-flex justify-content-between align-items-stretch colorName\">
                    Couleur 1
                    <span id=\"color1\" class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                  </li>
                  <li id=\"colorName2\" class=\"d-flex justify-content-between align-items-stretch colorName\" style=\"opacity:25%;\">
                    Couleur 2
                    <span id=\"color2\" class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ---------------------- COL TAGS ---------->
            <div class=\"col-8 mt-3\">
              <div>
                <h4>Choisis ta catégorie</h4>
                <input type=\"radio\" class=\"btn-check mt-2 \" name=\"categorie\" id=\"categorie1\" autocomplete=\"off\" list value=\"Haut\">
                <label class=\"btn btn-secondary catBtn\" for=\"categorie1\">Haut</label>

                <input type=\"radio\" class=\"btn-check \" name=\"categorie\" id=\"categorie2\" autocomplete=\"off\" value=\"Bas\">
                <label class=\"btn btn-secondary catBtn\" for=\"categorie2\">Bas</label>
              </div>
              <div>
                <h4 class=\"mt-4\">Choisis le type de vêtement</h4>
                <div id=\"type-vetements\">
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
              </div>
              <div>
                <h4 class=\"mt-4\">Pour quelle occasion portes-tu ce vêtement ?</h4>
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
              <div class=\"d-flex flex-row justify-content-lg-end m-5\">
                <img class=\"fleche_valider\" src=\"assets/img/picto_fleche.svg\" alt=\"picto de flèche indiquant le bouton valider\">
                <button type=\"button\" class=\"btn btn-primary\" id=\"btnSubmitVetementForm\">Valider</button>
                <button id=\"btnCancel\" type=\"button\" class=\"btn btn-secondary btn-close-modal\" data-bs-dismiss=\"modal\">Annuler</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/modals/modal-dressing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
        <div id=\"modalbackground\" class=\"container\">
          <div class=\"row\">
            
            <div id=\"modal-dressing\" class=\"\">
            <img src=\"assets/img/croixnormal.svg\" type=\"button\" class=\"btn-close-modal float-right croix\" data-bs-dismiss=\"modal\" alt=\"\">
              <div style=\"display:none;\">
              {{ form_start(form, {'attr': {'id': 'form_vetement'}}) }}
              {{ form_end(form) }}
              </div>
              
              <div id=\"boxcolor\">
                <div id=\"couleur1\"></div>
                <span id=\"nomCouleur1\"></span>
              </div>
            <div class=\"modal-footer border-top-0\">
            </div>
          </div>
          <div class=\"row\">
          <!-- ---------------------- COL VETEMENT ---------->

            <div class=\"col-4 mt-3\">
              <span id=\"BtnPipette\" type=\"button\">Pipette</span>
              <div id=\"divcanvas\">
                <canvas id=\"canvas\" width=\"800px\" height=\"800px\"></canvas>
              </div>
              <div>
                <h4>Couleurs</h4>
              </div>
              <div class=\"tag_content_size\">
                <ul class=\"tag-vetement card-dress p-0\">
                  <li id= \"tag_vet\" class=\"tag_vet\">Choisis le type de vêtement</li>
                  <li id=\"colorName1\" class=\"d-flex justify-content-between align-items-stretch colorName\">
                    Couleur 1
                    <span id=\"color1\" class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                  </li>
                  <li id=\"colorName2\" class=\"d-flex justify-content-between align-items-stretch colorName\" style=\"opacity:25%;\">
                    Couleur 2
                    <span id=\"color2\" class=\"color-mark\" style=\"background-color:#00FA9A\"></span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ---------------------- COL TAGS ---------->
            <div class=\"col-8 mt-3\">
              <div>
                <h4>Choisis ta catégorie</h4>
                <input type=\"radio\" class=\"btn-check mt-2 \" name=\"categorie\" id=\"categorie1\" autocomplete=\"off\" list value=\"Haut\">
                <label class=\"btn btn-secondary catBtn\" for=\"categorie1\">Haut</label>

                <input type=\"radio\" class=\"btn-check \" name=\"categorie\" id=\"categorie2\" autocomplete=\"off\" value=\"Bas\">
                <label class=\"btn btn-secondary catBtn\" for=\"categorie2\">Bas</label>
              </div>
              <div>
                <h4 class=\"mt-4\">Choisis le type de vêtement</h4>
                <div id=\"type-vetements\">
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
              </div>
              <div>
                <h4 class=\"mt-4\">Pour quelle occasion portes-tu ce vêtement ?</h4>
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
              <div class=\"d-flex flex-row justify-content-lg-end m-5\">
                <img class=\"fleche_valider\" src=\"assets/img/picto_fleche.svg\" alt=\"picto de flèche indiquant le bouton valider\">
                <button type=\"button\" class=\"btn btn-primary\" id=\"btnSubmitVetementForm\">Valider</button>
                <button id=\"btnCancel\" type=\"button\" class=\"btn btn-secondary btn-close-modal\" data-bs-dismiss=\"modal\">Annuler</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "/modals/modal-dressing.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\modals\\modal-dressing.html.twig");
    }
}
