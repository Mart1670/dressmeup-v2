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

/* base.html.twig */
class __TwigTemplate_246bec4396cb6d73e87aca57294fcac9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    \t<meta name=\"description\" content=\"\">
\t\t
\t\t<title>
\t\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</title>

\t\t<link rel=\"shortcut icon\" type=\"svg\" href=\"assets/img/favicon.ico\"/>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">

\t\t";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "\t</head>
\t<body>
\t\t<!-- LOGO TOP -->
\t\t<section id=\"logo\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"/assets/img/Logo_final.svg\" alt=\"Dress Me Up logo\" width=\"140\" height=\"100\">
\t\t\t</a>
\t\t</section>
\t\t<!-- FIN LOGO TOP -->

\t\t<section id=\"page\">
";
        // line 34
        echo "\t\t\t<!-- SECTION NAVBAR STICKY -->

\t\t\t
\t\t\t\t<nav id=\"navbar\" class=\"navbar navbar-expand-lg sticky-top justify-content-between\"> <div class=\"container-fluid gx-0\">

\t\t\t\t\t<a class=\"navbar-brand ms-5\" href=\"/\"><img class=\"logo\" src=\"/assets/img/Logo_final.svg\" alt=\"logo site web\"></a>

\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-lg-0 list-unstyled d-flex\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dressing");
        echo "\">Dressing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://dressmeup.alwaysdata.net/blog/\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">Concept</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul id=\"profilename\" class=\"navbar-nav navbar-right d-flex\">
\t\t\t\t\t\t\t<li id=\"camille\" class=\"nav-item d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a class=\"nav-link nav-profil\" href=\"/user\">
\t\t\t\t\t\t\t\t\t<img id=\"profileicone\" class=\"profil_icn\" src=\"/assets/img/icone_profil.svg\" alt=\"icone profil\">Camille</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li id=\"mixandmatch\" class=\"nav-item mix_match d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"/#anchor-mix\">Mix and Match</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<main>
\t\t\t\t";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "\t\t\t</main>

\t\t\t<!-- FIN SECTION : Cards 3 styles vestimentaires (bootstrap) -->


  </section> <!-- FIN SECTION NAV STICKY -->

  <footer>
     <nav id=\"navbarfooter\" class=\"col-sm-12 justify-content-between\">
      <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal");
        echo "\">Mentions légales</a>
      <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_join_us");
        echo "\">Nous rejoindre</a>
      <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accessibility");
        echo "\">Accessibilité</a>
      <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms_of_use");
        echo "\">CGU</a>
      <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_privacy");
        echo "\">Politique de confidentialité</a>
    </nav>

    <section id=\"newsletter\" class=\"container-fluid\">
      <div class=\"container\">
        <div class=\"row\">


          <div class=\"col-12 col-sm-6\">
            <form class=\"hide-submit\" action=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formulaire");
        echo "\">
              <h4>Inscris toi à notre newsletter pour recevoir
                des inspirations de style vestimentaire</h4>
\t\t\t\t<div id=\"formShadow\">
\t\t\t\t\t<input class=\"col-6\" type=\"mail\" id=\"Utilisateur\" name=\"Email\" placeholder=\"Ton adresse email\" />
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"submit\" />
\t\t\t\t\t\t<img id=\"soumettre\" src=\"/assets/img/fleche_newsletter.svg\" alt=\"envoyer mon email\">
\t\t\t\t\t</label>
\t\t\t  </div>
            </form>

          </div>
          <div class=\"col-12 col-sm-6 container text-center\">
            <h4>N'oublie pas de nous suivre sur les réseaux sociaux</h4>
            <div id=\"test\" class=\"row\">
              <div class=\"col-6 col-sm-6 text-center\">
                <a href=\"https://www.tiktok.com/fr/\" target=\"_blank\"><img src=\"/assets/img/tiktok-normal.svg\" alt=\"tiktok\">
                <p>Tiktok</p></a>
              </div>
              <div class=\"col-6 text-center\">
                <a href=\"https://www.instagram.com/?hl=fr\" target=\"_blank\"><img src=\"/assets/img/instagram-normal.svg\" alt=\"instagram\">
                <p>Instagram</p></a>
              </div>
              <div class=\"col-6 text-center\">
                <a href=\"https://www.pinterest.fr/\" target=\"_blank\"><img src=\"/assets/img/pinterest-normal.svg\" alt=\"pinterest\">
                <p>Pinterest</p></a>
              </div>
              <div class=\"col-6 text-center\">
                <a href=\"https://www.youtube.com/\" target=\"_blank\"><img src=\"/assets/img/youtube-normal.svg\" alt=\"youtube\">
                <p>Youtube</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\"
    crossorigin=\"anonymous\"></script>
  <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scroll.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/generateur.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 143
        echo "  </body>
";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 145,  283 => 144,  271 => 74,  261 => 20,  254 => 19,  247 => 12,  240 => 11,  233 => 144,  230 => 143,  226 => 141,  222 => 140,  176 => 97,  164 => 88,  160 => 87,  156 => 86,  152 => 85,  148 => 84,  137 => 75,  135 => 74,  114 => 56,  105 => 50,  99 => 47,  84 => 34,  71 => 22,  69 => 19,  64 => 17,  58 => 13,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    \t<meta name=\"description\" content=\"\">
\t\t
\t\t<title>
\t\t\t{% block title %}
\t\t\t{% endblock %}
\t\t</title>

\t\t<link rel=\"shortcut icon\" type=\"svg\" href=\"assets/img/favicon.ico\"/>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/style.css')}}\">

\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<!-- LOGO TOP -->
\t\t<section id=\"logo\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"/assets/img/Logo_final.svg\" alt=\"Dress Me Up logo\" width=\"140\" height=\"100\">
\t\t\t</a>
\t\t</section>
\t\t<!-- FIN LOGO TOP -->

\t\t<section id=\"page\">
{# Appel Navabar sur toute les pages #}
\t\t\t<!-- SECTION NAVBAR STICKY -->

\t\t\t
\t\t\t\t<nav id=\"navbar\" class=\"navbar navbar-expand-lg sticky-top justify-content-between\"> <div class=\"container-fluid gx-0\">

\t\t\t\t\t<a class=\"navbar-brand ms-5\" href=\"/\"><img class=\"logo\" src=\"/assets/img/Logo_final.svg\" alt=\"logo site web\"></a>

\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-lg-0 list-unstyled d-flex\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_home') }}\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_dressing') }}\">Dressing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://dressmeup.alwaysdata.net/blog/\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_about') }}\">Concept</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul id=\"profilename\" class=\"navbar-nav navbar-right d-flex\">
\t\t\t\t\t\t\t<li id=\"camille\" class=\"nav-item d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a class=\"nav-link nav-profil\" href=\"/user\">
\t\t\t\t\t\t\t\t\t<img id=\"profileicone\" class=\"profil_icn\" src=\"/assets/img/icone_profil.svg\" alt=\"icone profil\">Camille</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li id=\"mixandmatch\" class=\"nav-item mix_match d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"/#anchor-mix\">Mix and Match</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<main>
\t\t\t\t{% block body %}{% endblock %}
\t\t\t</main>

\t\t\t<!-- FIN SECTION : Cards 3 styles vestimentaires (bootstrap) -->


  </section> <!-- FIN SECTION NAV STICKY -->

  <footer>
     <nav id=\"navbarfooter\" class=\"col-sm-12 justify-content-between\">
      <a href=\"{{ path('app_legal')}}\">Mentions légales</a>
      <a href=\"{{ path('app_join_us')}}\">Nous rejoindre</a>
      <a href=\"{{ path('app_accessibility')}}\">Accessibilité</a>
      <a href=\"{{ path('app_terms_of_use')}}\">CGU</a>
      <a href=\"{{ path('app_privacy')}}\">Politique de confidentialité</a>
    </nav>

    <section id=\"newsletter\" class=\"container-fluid\">
      <div class=\"container\">
        <div class=\"row\">


          <div class=\"col-12 col-sm-6\">
            <form class=\"hide-submit\" action=\"{{ path('app_formulaire')}}\">
              <h4>Inscris toi à notre newsletter pour recevoir
                des inspirations de style vestimentaire</h4>
\t\t\t\t<div id=\"formShadow\">
\t\t\t\t\t<input class=\"col-6\" type=\"mail\" id=\"Utilisateur\" name=\"Email\" placeholder=\"Ton adresse email\" />
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"submit\" />
\t\t\t\t\t\t<img id=\"soumettre\" src=\"/assets/img/fleche_newsletter.svg\" alt=\"envoyer mon email\">
\t\t\t\t\t</label>
\t\t\t  </div>
            </form>

          </div>
          <div class=\"col-12 col-sm-6 container text-center\">
            <h4>N'oublie pas de nous suivre sur les réseaux sociaux</h4>
            <div id=\"test\" class=\"row\">
              <div class=\"col-6 col-sm-6 text-center\">
                <a href=\"https://www.tiktok.com/fr/\" target=\"_blank\"><img src=\"/assets/img/tiktok-normal.svg\" alt=\"tiktok\">
                <p>Tiktok</p></a>
              </div>
              <div class=\"col-6 text-center\">
                <a href=\"https://www.instagram.com/?hl=fr\" target=\"_blank\"><img src=\"/assets/img/instagram-normal.svg\" alt=\"instagram\">
                <p>Instagram</p></a>
              </div>
              <div class=\"col-6 text-center\">
                <a href=\"https://www.pinterest.fr/\" target=\"_blank\"><img src=\"/assets/img/pinterest-normal.svg\" alt=\"pinterest\">
                <p>Pinterest</p></a>
              </div>
              <div class=\"col-6 text-center\">
                <a href=\"https://www.youtube.com/\" target=\"_blank\"><img src=\"/assets/img/youtube-normal.svg\" alt=\"youtube\">
                <p>Youtube</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\"
    crossorigin=\"anonymous\"></script>
  <script src=\"{{ asset('assets/js/scroll.js') }}\"></script>
  <script src=\"{{ asset('assets/js/generateur.js') }}\"></script>
  {# <script src=\"{{ asset('assets/js/mix&match.js') }}\"></script> #}
  </body>
{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
{% endblock %}
", "base.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\base.html.twig");
    }
}
