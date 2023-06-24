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
class __TwigTemplate_ce76c294d8504c3c5767d53c7b53cdca extends Template
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
        <div id=\"bulle\">
          <h1 id=\"titreh1\">Bienvenue !</h1>
          <img src=\"../assets/img/DO_alfredo.svg\" alt=\"Alfredo\" srcset=\"\">
          <p>
            Je suis Alfredo, ton conseiller en image. Je suis là pour te proposer des idées de styles vestimentaires.<br>Laisse-toi guider !
          </p>
        </div>
      </section>
      <!-- FIN SECTION BIENVENUE -->

      <!-- RADIO // Sélection humeur du jour -->
      <section id=\"humeur\" class=\"container\">
        <h2>Pour commencer, sélectionne ton humeur du jour</h2>
        <div class=\"tag\" id=\"tagHumeur\">
          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur1\" autocomplete=\"off\" list>
          <label class=\"button-tags\" for=\"tagHumeur1\" data-index=\"1\">Joyeux</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur2\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur2\" data-index=\"2\">Excité</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur3\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur3\" data-index=\"3\">Fatigué</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur4\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur4\" data-index=\"4\">Festif</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur5\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur5\" data-index=\"5\">Casual friday</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur6\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur6\" data-index=\"6\">Décontracté</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur7\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur7\" data-index=\"7\">Comme un lundi</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur8\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur8\" data-index=\"8\">Je ne sais pas</label>
        </div>
      </section>


      <!-- SECTION (Bouton radio) : Programme de la journée -->
      <section id=\"ambiance\" class=\"container\">
        <h2>Et maintenant choisis l’ambiance de la journée</h2>
        <div class=\"tag\"id=\"tagAmbiance\">

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance1\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance1\" data-index=\"1\">Sortie entre amis</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance2\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance2\" data-index=\"2\">Travail</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance3\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance3\" data-index=\"3\">Sport</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance4\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance4\" data-index=\"4\">Détente</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance5\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance5\" data-index=\"5\">Rendez-vous Romantique</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance6\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance6\" data-index=\"6\">Rien de prévu</label>
            
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
              <!-- BOUTON GÉNÉRATEUR -->
              ";
        // line 86
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86) != null) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "vetements", [], "any", false, false, false, 86)) > 0))) {
            // line 87
            echo "                <button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\">Mix & Match</button>
              ";
        } else {
            // line 89
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vetement");
            echo "\"><button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\" >Mix & Match</button></a>
              ";
        }
        // line 91
        echo "            </div>
          <div id=\"display-generator\"> 
            <div class=\"tag-selected\">
              <p>Sélection:</p>
              <div";
        // line 95
        echo ">
                <ul>
                  <li class=\"button-tags\" id=\"oneTagHumeur\" data-index=\"2\">Excité</li>
                  <li class=\"button-tags\" id=\"oneTagAmbiance\" data-index=\"2\">Travail</li>
                </ul>
              </div>
            </div>
            <div id=\"hautGenerator1\" class=\"main-generator bg-haut\"></div>
            <div id=\"basGenerator1\" class=\"main-generator bg-bas\"></div> 
            <div>
              <button id=\"reset\" type=\"button\" class=\"dressinglink button-tags\">Réinitialiser</button>
              <button type=\"button\" class=\"dressinglink button-tags\"><a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dressing");
        echo "\">Aller sur mon dressing</a></button>
            </div>
          </div>
      </section>

      <!-- FIN SECTION : GENERATEUR -->

      <!-- SECTION : Cards 3 styles vestimentaires (bootstrap) -->
      <section id=\"card-generator\" class=\"container\">
        ";
        // line 116
        echo "        ";
        // line 117
        echo "          <!-- Slider main container -->
          <div class=\"swiper\">
            <!-- Additional required wrapper -->
            <div class=\"swiper-wrapper\">
              <!-- Slides -->
              <div class=\"swiper-slide\">
                <!-- SECTION : CARD 1 -->
                <div class=\"cards-style\">
                  <div class=\"card-header\">
                    <h5>Mix and Match</h5>
                  </div>
                  <div class=\"card-content\">
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
                  </div>
                  <div class=\"card-content\">
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
                </div>
                <!-- FIN SECTION : CARD 1 -->
              </div>
              <div class=\"swiper-slide\">
                <!-- SECTION : CARD 2 -->
                <div class=\"cards-style\">
                  <div class=\"card-header\">
                    <h5 id=\"doute\">Tu as un doute ?</h5>
                  </div>
                  <div class=\"card-content\">
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
                  </div>
                  <div class=\"card-content\">
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
                </div>
                <!-- FIN SECTION : CARD 2 -->
              </div>
              <div class=\"swiper-slide\">
                <!-- SECTION : CARD 3 -->
                <div class=\"cards-style\">
                  <div class=\"card-header\">
                    <h5 id=\"chance\">Dernière chance</h5>
                  </div>
                  <div class=\"card-content\">
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
                  </div>
                  <div class=\"card-content\">
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
                </div>
                <!-- FIN SECTION : CARD 3 -->
              </div>
            </div>
            <!-- If we need pagination -->
            <div class=\"swiper-pagination\"></div>
        
          ";
        // line 268
        echo "          ";
        // line 273
        echo "          ";
        // line 274
        echo "        ";
        // line 275
        echo "      </section>
      <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/generateur.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>
      <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/swiper.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 280
        echo "      <script src=\"";
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
        return array (  370 => 280,  366 => 278,  361 => 276,  358 => 275,  356 => 274,  354 => 273,  352 => 268,  200 => 117,  198 => 116,  186 => 106,  173 => 95,  167 => 91,  161 => 89,  157 => 87,  155 => 86,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Accueil{% endblock %}

{% block body %}
\t <!-- SECTION BIENVENUE -->
      <section class=\"container\">
        <div id=\"bulle\">
          <h1 id=\"titreh1\">Bienvenue !</h1>
          <img src=\"../assets/img/DO_alfredo.svg\" alt=\"Alfredo\" srcset=\"\">
          <p>
            Je suis Alfredo, ton conseiller en image. Je suis là pour te proposer des idées de styles vestimentaires.<br>Laisse-toi guider !
          </p>
        </div>
      </section>
      <!-- FIN SECTION BIENVENUE -->

      <!-- RADIO // Sélection humeur du jour -->
      <section id=\"humeur\" class=\"container\">
        <h2>Pour commencer, sélectionne ton humeur du jour</h2>
        <div class=\"tag\" id=\"tagHumeur\">
          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur1\" autocomplete=\"off\" list>
          <label class=\"button-tags\" for=\"tagHumeur1\" data-index=\"1\">Joyeux</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur2\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur2\" data-index=\"2\">Excité</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur3\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur3\" data-index=\"3\">Fatigué</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur4\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur4\" data-index=\"4\">Festif</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur5\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur5\" data-index=\"5\">Casual friday</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur6\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur6\" data-index=\"6\">Décontracté</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur7\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur7\" data-index=\"7\">Comme un lundi</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsH\" id=\"tagHumeur8\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"tagHumeur8\" data-index=\"8\">Je ne sais pas</label>
        </div>
      </section>


      <!-- SECTION (Bouton radio) : Programme de la journée -->
      <section id=\"ambiance\" class=\"container\">
        <h2>Et maintenant choisis l’ambiance de la journée</h2>
        <div class=\"tag\"id=\"tagAmbiance\">

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance1\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance1\" data-index=\"1\">Sortie entre amis</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance2\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance2\" data-index=\"2\">Travail</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance3\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance3\" data-index=\"3\">Sport</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance4\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance4\" data-index=\"4\">Détente</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance5\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance5\" data-index=\"5\">Rendez-vous Romantique</label>

          <input class=\"button-tags\" type=\"radio\" name=\"optionsA\" id=\"TagAmbiance6\" autocomplete=\"off\">
          <label class=\"button-tags\" for=\"TagAmbiance6\" data-index=\"6\">Rien de prévu</label>
            
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
              <!-- BOUTON GÉNÉRATEUR -->
              {% if(app.user != null and app.user.vetements|length > 0) %}
                <button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\">Mix & Match</button>
              {% else %}
                <a href=\"{{ path('app_vetement')}}\"><button id=\"mixmatch\" type=\"button\" class=\"cta-mixandmatch\" >Mix & Match</button></a>
              {% endif %}
            </div>
          <div id=\"display-generator\"> 
            <div class=\"tag-selected\">
              <p>Sélection:</p>
              <div{#  class=\"tag-selected\" #}>
                <ul>
                  <li class=\"button-tags\" id=\"oneTagHumeur\" data-index=\"2\">Excité</li>
                  <li class=\"button-tags\" id=\"oneTagAmbiance\" data-index=\"2\">Travail</li>
                </ul>
              </div>
            </div>
            <div id=\"hautGenerator1\" class=\"main-generator bg-haut\"></div>
            <div id=\"basGenerator1\" class=\"main-generator bg-bas\"></div> 
            <div>
              <button id=\"reset\" type=\"button\" class=\"dressinglink button-tags\">Réinitialiser</button>
              <button type=\"button\" class=\"dressinglink button-tags\"><a href=\"{{ path('app_dressing')}}\">Aller sur mon dressing</a></button>
            </div>
          </div>
      </section>

      <!-- FIN SECTION : GENERATEUR -->

      <!-- SECTION : Cards 3 styles vestimentaires (bootstrap) -->
      <section id=\"card-generator\" class=\"container\">
        {# <div class=\"slider\"> #}
        {# <div id=\"card-generator-container\"> #}
          <!-- Slider main container -->
          <div class=\"swiper\">
            <!-- Additional required wrapper -->
            <div class=\"swiper-wrapper\">
              <!-- Slides -->
              <div class=\"swiper-slide\">
                <!-- SECTION : CARD 1 -->
                <div class=\"cards-style\">
                  <div class=\"card-header\">
                    <h5>Mix and Match</h5>
                  </div>
                  <div class=\"card-content\">
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
                  </div>
                  <div class=\"card-content\">
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
                </div>
                <!-- FIN SECTION : CARD 1 -->
              </div>
              <div class=\"swiper-slide\">
                <!-- SECTION : CARD 2 -->
                <div class=\"cards-style\">
                  <div class=\"card-header\">
                    <h5 id=\"doute\">Tu as un doute ?</h5>
                  </div>
                  <div class=\"card-content\">
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
                  </div>
                  <div class=\"card-content\">
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
                </div>
                <!-- FIN SECTION : CARD 2 -->
              </div>
              <div class=\"swiper-slide\">
                <!-- SECTION : CARD 3 -->
                <div class=\"cards-style\">
                  <div class=\"card-header\">
                    <h5 id=\"chance\">Dernière chance</h5>
                  </div>
                  <div class=\"card-content\">
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
                  </div>
                  <div class=\"card-content\">
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
                </div>
                <!-- FIN SECTION : CARD 3 -->
              </div>
            </div>
            <!-- If we need pagination -->
            <div class=\"swiper-pagination\"></div>
        
          {# </div> #}
          {# <div id=\"dot-list\" style=\"display:none\">
              <span class=\"dot active\" data-index=\"0\"></span> 
              <span class=\"dot\" data-index=\"1\"></span> 
              <span class=\"dot\" data-index=\"2\"></span> 
            </div> #}
          {# </div> #}
        {# </div> #}
      </section>
      <script src=\"{{ asset('assets/js/generateur.js') }}\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>
      <script src=\"{{ asset('assets/js/swiper.js') }}\"></script>
      {# <script src=\"{{ asset('assets/js/slide.js') }}\"></script> #}
      <script src=\"{{ asset('assets/js/mix&match.js') }}\"></script>

    <!-- FIN SECTION : Cards 3 styles vestimentaires (bootstrap) -->
{% endblock %}
", "home/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\home\\index.html.twig");
    }
}
