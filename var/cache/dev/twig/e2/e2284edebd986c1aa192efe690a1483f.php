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

/* home/index.html.twig */
class __TwigTemplate_7d82efd577fea7356bcb69d57ee23266 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t <!-- SECTION BIENVENUE -->
      <section class=\"container\">
        <div class=\"bulle \">
          <h1 id=\"titreh1\">Bienvenue !</h1>
          <p>
            Je suis Alfred, ton conseiller en image. Je suis là pour te proposer des idées de styles vestimentaires.<br>Laisse-toi guider !
          </p>
        </div>
      </section>
      <!-- FIN SECTION BIENVENUE -->

      <!-- RADIO // Sélection humeur du jour -->
      <section id=\"humeur\" class=\"container\">
        <h2>Pour commencer, sélectionne ton humeur du jour</h2>
        <div class=\"tag\" id=\"tagHumeur\">
          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur1\" autocomplete=\"off\" list>
          <label for=\"tagHumeur1\">Joyeux</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur2\" autocomplete=\"off\">
          <label for=\"tagHumeur2\">Excité</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur3\" autocomplete=\"off\">
          <label for=\"tagHumeur3\">Fatigué</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur4\" autocomplete=\"off\">
          <label for=\"tagHumeur4\">Festif</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur5\" autocomplete=\"off\">
          <label for=\"tagHumeur5\">Casual friday</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur6\" autocomplete=\"off\">
          <label for=\"tagHumeur6\">Décontracté</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur8\" autocomplete=\"off\">
          <label for=\"tagHumeur8\">Comme un lundi</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur9\" autocomplete=\"off\">
          <label for=\"tagHumeur9\">Je ne sais pas</label>
        </div>
      </section>


      <!-- SECTION (Bouton radio) : Programme de la journée -->
      <section id=\"ambiance\" class=\"container\">
        <h2>Et maintenant choisis l’ambiance de la journée</h2>
        <div class=\"tag\"id=\"tagAmbiance\">

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance1\" autocomplete=\"off\">
          <label for=\"TagAmbiance1\">Sortie entre amis</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance2\" autocomplete=\"off\">
          <label for=\"TagAmbiance2\">Travail</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance3\" autocomplete=\"off\">
          <label for=\"TagAmbiance3\">Sport</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance4\" autocomplete=\"off\">
          <label for=\"TagAmbiance4\">Détente</label>

          <input type=\"radio\" class=name=\"optionsA\" id=\"TagAmbiance5\" autocomplete=\"off\">
          <label for=\"TagAmbiance5\">Rendez-vous Romantique</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance6\" autocomplete=\"off\">
          <label for=\"TagAmbiance6\">Rien de prévu</label>
            
        </div>
      </section>
      <!-- SECTION (Bouton radio) : Programme de la journée -->

<!-- ----------------------------------------------- -->
      <!-- SECTION : GENERATEUR -->
<!-- ----------------------------------------------- -->

      <section id=\"generateur\" class=\"container\">
          <div class=\"titrestyle\">
            <h2 id=\"anchor-mix\">Découvre mes idées de style pour toi</h2>
          </div>
              
            <div>
                <div>
                  <!-- BOUTON GÉNÉRATEUR -->
                  ";
        // line 87
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87) != null) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "vetements", [], "any", false, false, false, 87)) > 0))) {
            // line 88
            echo "                    <button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\">Mix and Match</button>
                  ";
        } else {
            // line 90
            echo "                    <button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\" data-bs-toggle=\"modal\"
                      data-bs-target=\"#exampleModal\">Mix and Match</button>
                  ";
        }
        // line 93
        echo "                   
                  <div>
                    <div id=\"hautGenerator1\" class=\"main-generator bg-haut\"></div>
                    <div id=\"basGenerator1\" class=\"main-generator bg-bas\"></div>
                  </div>  

                  <!-- ----------------------------------------------- -->
                  <!-- MODALE PREMIER LANCEMENT GENERATEUR -->
                  <!-- ----------------------------------------------- -->

                  ";
        // line 104
        echo "                  

                  <!-- FIN MODALE PREMIER LANCEMENT GENERATEUR -->

                  <p>Sélection:</p>
                  <div class=\"tag-selected text-center\">
                    <ul>
                      <li id=\"oneTagHumeur\">Excité</li>
                      <li id=\"oneTagAmbiance\">Travail</li>
                    </ul>
                  </div>
                  <!-- javascript ou php ? Étiquette humeur et programme journée, choisis au préalable -->
                  <button id=\"reset\" type=\"button\" class=\"dressinglink\">Réinitialiser</button>
                  <button type=\"button\" class=\"dressinglink\"><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dressing");
        echo "\">Aller sur mon dressing</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FIN SECTION : GENERATEUR -->

      <!-- SECTION : Cards 3 styles vestimentaires (bootstrap) -->
      <section class=\"container\">
        <div class=\"slider\">
          <!-- SECTION : CARD 1 -->
          <div class=\"cards-style\">
            <div class=\"card-header\">
              <h5>Mix and Match</h5>
            </div>
            <div id=\"cardHaut1\" class=\"main-generator bg-haut\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"cardBas1\" class=\"main-generator bg-bas\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN SECTION : CARD 1 -->

          <!-- SECTION : CARD 2 -->
          <div class=\"cards-style\" style=\"display:none\">
            <div class=\"card-header\">
              <h5 id=\"doute\">Tu as un doute ?</h5>
            </div>
            <div id=\"cardHaut2\" class=\"main-generator bg-haut\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"cardBas2\" class=\"main-generator bg-bas\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN SECTION : CARD 2 -->

          <!-- SECTION : CARD 3 -->
          <div class=\"cards-style\" style=\"display:none\">
            <div class=\"card-header\">
              <h5 id=\"chance\">Dernière chance</h5>
            </div>
            <div id=\"cardHaut3\" class=\"main-generator bg-haut\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"cardBas3\" class=\"main-generator bg-bas\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN SECTION : CARD 3 -->
        </div>
        <div id=\"dot-list\">
          <span class=\"dot active\" data-index=\"0\"></span> 
          <span class=\"dot\" data-index=\"1\"></span> 
          <span class=\"dot\" data-index=\"2\"></span> 
        </div>
      </section>
      <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slide.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mix&match.js"), "html", null, true);
        echo "\"></script>

    <!-- FIN SECTION : Cards 3 styles vestimentaires (bootstrap) -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 263,  342 => 262,  194 => 117,  179 => 104,  167 => 93,  162 => 90,  158 => 88,  156 => 87,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Accueil{% endblock %}

{% block body %}
\t <!-- SECTION BIENVENUE -->
      <section class=\"container\">
        <div class=\"bulle \">
          <h1 id=\"titreh1\">Bienvenue !</h1>
          <p>
            Je suis Alfred, ton conseiller en image. Je suis là pour te proposer des idées de styles vestimentaires.<br>Laisse-toi guider !
          </p>
        </div>
      </section>
      <!-- FIN SECTION BIENVENUE -->

      <!-- RADIO // Sélection humeur du jour -->
      <section id=\"humeur\" class=\"container\">
        <h2>Pour commencer, sélectionne ton humeur du jour</h2>
        <div class=\"tag\" id=\"tagHumeur\">
          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur1\" autocomplete=\"off\" list>
          <label for=\"tagHumeur1\">Joyeux</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur2\" autocomplete=\"off\">
          <label for=\"tagHumeur2\">Excité</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur3\" autocomplete=\"off\">
          <label for=\"tagHumeur3\">Fatigué</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur4\" autocomplete=\"off\">
          <label for=\"tagHumeur4\">Festif</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur5\" autocomplete=\"off\">
          <label for=\"tagHumeur5\">Casual friday</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur6\" autocomplete=\"off\">
          <label for=\"tagHumeur6\">Décontracté</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur8\" autocomplete=\"off\">
          <label for=\"tagHumeur8\">Comme un lundi</label>

          <input type=\"radio\" name=\"optionsH\" id=\"tagHumeur9\" autocomplete=\"off\">
          <label for=\"tagHumeur9\">Je ne sais pas</label>
        </div>
      </section>


      <!-- SECTION (Bouton radio) : Programme de la journée -->
      <section id=\"ambiance\" class=\"container\">
        <h2>Et maintenant choisis l’ambiance de la journée</h2>
        <div class=\"tag\"id=\"tagAmbiance\">

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance1\" autocomplete=\"off\">
          <label for=\"TagAmbiance1\">Sortie entre amis</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance2\" autocomplete=\"off\">
          <label for=\"TagAmbiance2\">Travail</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance3\" autocomplete=\"off\">
          <label for=\"TagAmbiance3\">Sport</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance4\" autocomplete=\"off\">
          <label for=\"TagAmbiance4\">Détente</label>

          <input type=\"radio\" class=name=\"optionsA\" id=\"TagAmbiance5\" autocomplete=\"off\">
          <label for=\"TagAmbiance5\">Rendez-vous Romantique</label>

          <input type=\"radio\" name=\"optionsA\" id=\"TagAmbiance6\" autocomplete=\"off\">
          <label for=\"TagAmbiance6\">Rien de prévu</label>
            
        </div>
      </section>
      <!-- SECTION (Bouton radio) : Programme de la journée -->

<!-- ----------------------------------------------- -->
      <!-- SECTION : GENERATEUR -->
<!-- ----------------------------------------------- -->

      <section id=\"generateur\" class=\"container\">
          <div class=\"titrestyle\">
            <h2 id=\"anchor-mix\">Découvre mes idées de style pour toi</h2>
          </div>
              
            <div>
                <div>
                  <!-- BOUTON GÉNÉRATEUR -->
                  {% if(app.user != null and app.user.vetements|length > 0) %}
                    <button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\">Mix and Match</button>
                  {% else %}
                    <button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\" data-bs-toggle=\"modal\"
                      data-bs-target=\"#exampleModal\">Mix and Match</button>
                  {% endif %}
                   
                  <div>
                    <div id=\"hautGenerator1\" class=\"main-generator bg-haut\"></div>
                    <div id=\"basGenerator1\" class=\"main-generator bg-bas\"></div>
                  </div>  

                  <!-- ----------------------------------------------- -->
                  <!-- MODALE PREMIER LANCEMENT GENERATEUR -->
                  <!-- ----------------------------------------------- -->

                  {# {{ include('modals/modal-home.html.twig') }} #}
                  

                  <!-- FIN MODALE PREMIER LANCEMENT GENERATEUR -->

                  <p>Sélection:</p>
                  <div class=\"tag-selected text-center\">
                    <ul>
                      <li id=\"oneTagHumeur\">Excité</li>
                      <li id=\"oneTagAmbiance\">Travail</li>
                    </ul>
                  </div>
                  <!-- javascript ou php ? Étiquette humeur et programme journée, choisis au préalable -->
                  <button id=\"reset\" type=\"button\" class=\"dressinglink\">Réinitialiser</button>
                  <button type=\"button\" class=\"dressinglink\"><a href=\"{{ path('app_dressing')}}\">Aller sur mon dressing</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FIN SECTION : GENERATEUR -->

      <!-- SECTION : Cards 3 styles vestimentaires (bootstrap) -->
      <section class=\"container\">
        <div class=\"slider\">
          <!-- SECTION : CARD 1 -->
          <div class=\"cards-style\">
            <div class=\"card-header\">
              <h5>Mix and Match</h5>
            </div>
            <div id=\"cardHaut1\" class=\"main-generator bg-haut\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"cardBas1\" class=\"main-generator bg-bas\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN SECTION : CARD 1 -->

          <!-- SECTION : CARD 2 -->
          <div class=\"cards-style\" style=\"display:none\">
            <div class=\"card-header\">
              <h5 id=\"doute\">Tu as un doute ?</h5>
            </div>
            <div id=\"cardHaut2\" class=\"main-generator bg-haut\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"cardBas2\" class=\"main-generator bg-bas\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN SECTION : CARD 2 -->

          <!-- SECTION : CARD 3 -->
          <div class=\"cards-style\" style=\"display:none\">
            <div class=\"card-header\">
              <h5 id=\"chance\">Dernière chance</h5>
            </div>
            <div id=\"cardHaut3\" class=\"main-generator bg-haut\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"cardBas3\" class=\"main-generator bg-bas\">
            </div>
            <div class=\"info-vetement\">
              <div>
                <div>
                  <p class=\"card-type card-data\">Type de vêtement</p>
                </div>
                <div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 1</p><span class=\"span-color1 card-data\"></span>
                  </div>
                  <div>
                    <p class=\"card-color card-data\">Couleur 2</p><span class=\"span-color2 card-data\"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN SECTION : CARD 3 -->
        </div>
        <div id=\"dot-list\">
          <span class=\"dot active\" data-index=\"0\"></span> 
          <span class=\"dot\" data-index=\"1\"></span> 
          <span class=\"dot\" data-index=\"2\"></span> 
        </div>
      </section>
      <script src=\"{{ asset('assets/js/slide.js') }}\"></script>
      <script src=\"{{ asset('assets/js/mix&match.js') }}\"></script>

    <!-- FIN SECTION : Cards 3 styles vestimentaires (bootstrap) -->
{% endblock %}
", "home/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\home\\index.html.twig");
    }
}
