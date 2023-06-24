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
class __TwigTemplate_c562fb5127688cb3a218b8079acca0c1 extends Template
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
    \t<meta name=\"description\" content=\"Dressing virtuel et générateur de tenue au quotidien\">
\t\t<meta name=“keywords” content=“dressing, vetements, tenues, daltonisme, generateur de tenue, ambiance, humeur, gestion dressing”>
\t\t<title>
\t\t\t";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</title>

\t\t<link rel=\"shortcut icon\" type=\"svg\" href=\"assets/img/favicon.ico\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\"
        crossorigin=\"anonymous\" />
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Changa+One&family=Changa:wght@400;700;800&display=swap\" rel=\"stylesheet\">
\t\t<link
\t\trel=\"stylesheet\"
\t\thref=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\"
\t\t/>
\t\t";
        // line 26
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">

\t\t";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "\t</head>
\t<body>
\t\t<header>
\t\t\t<div id=\"navbar\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img src=\"/assets/img/Logo_final.svg\" alt=\"Dress Me Up logo\">
\t\t\t\t</a>
\t\t\t\t<div>
\t\t\t\t\t<i id=\"burger-menu\" class=\"fa-solid fa-bars\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/\">Accueil</a>
\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dressing");
        echo "\">Dressing</a>
\t\t\t\t\t<a href=\"https://dressmeup.alwaysdata.net/\">Blog</a>
\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">Concept</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"user-connect\">
\t\t\t\t\t<a href=\"/#anchor-mix\">Mix & Match</a>
\t\t\t\t\t";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51) == null)) {
            // line 52
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fa-solid fa-circle-user\"></i> Se Connecter</a>
\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            echo "\"><i class=\"fa-solid fa-circle-user\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "firstname", [], "any", false, false, false, 54), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56) != null)) {
            // line 57
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> Se déconnecter </a>
\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<main>
\t\t\t";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "\t\t</main>
\t\t<footer>
\t\t\t<div ";
        // line 66
        echo ">
\t\t\t\t<nav id=\"navbarfooter\" class=\"col-sm-12 justify-content-between\">
\t\t\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal");
        echo "\">Mentions légales</a>
\t\t\t\t\t<a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_join_us");
        echo "\">Nous rejoindre</a>
\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accessibility");
        echo "\">Accessibilité</a>
\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms_of_use");
        echo "\">CGU</a>
\t\t\t\t\t<a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_privacy");
        echo "\">Politique de confidentialité</a>
\t\t\t\t</nav>
\t\t\t\t<div>
\t\t\t\t\t<section id=\"newsletter\">
\t\t\t\t\t\t<form class=\"hide-submit\" action=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formulaire");
        echo "\">
\t\t\t\t\t\t\t<h4>Inscris toi à notre newsletter pour recevoir
\t\t                \tdes inspirations de style vestimentaire</h4>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"mail\" id=\"utilisateur\" class=\"form-field\" name=\"Email\" placeholder=\"Ton adresse email\" />
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" />
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</section>
\t\t\t\t\t<section id=\"networks\">
\t\t\t\t\t\t<h4>N'oublie pas de nous suivre sur les réseaux sociaux</h4>
\t\t\t\t\t\t<article id=\"networks-links\">
\t\t\t\t\t\t\t<a href=\"https://www.tiktok.com/fr/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/tiktok-normal.svg\" alt=\"tiktok\">
\t\t\t\t\t\t\t\t<p>Tiktok</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/?hl=fr\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/instagram-normal.svg\" alt=\"instagram\">
\t\t\t\t\t\t\t\t<p>Instagram</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.fr/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/pinterest-normal.svg\" alt=\"pinterest\">
\t\t\t\t\t\t\t\t<p>Pinterest</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/youtube-normal.svg\" alt=\"youtube\">
\t\t\t\t\t\t\t\t<p>Youtube</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</article>
\t\t          </section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
  </body>
  <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/navbar.js"), "html", null, true);
        echo "\"></script>
";
        // line 114
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

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
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
        return array (  273 => 115,  266 => 114,  254 => 63,  244 => 29,  237 => 28,  230 => 12,  223 => 11,  216 => 114,  212 => 113,  172 => 76,  165 => 72,  161 => 71,  157 => 70,  153 => 69,  149 => 68,  145 => 66,  141 => 64,  139 => 63,  133 => 59,  127 => 57,  124 => 56,  116 => 54,  110 => 52,  108 => 51,  101 => 47,  96 => 45,  80 => 31,  78 => 28,  72 => 26,  58 => 13,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    \t<meta name=\"description\" content=\"Dressing virtuel et générateur de tenue au quotidien\">
\t\t<meta name=“keywords” content=“dressing, vetements, tenues, daltonisme, generateur de tenue, ambiance, humeur, gestion dressing”>
\t\t<title>
\t\t\t{% block title %}
\t\t\t{% endblock %}
\t\t</title>

\t\t<link rel=\"shortcut icon\" type=\"svg\" href=\"assets/img/favicon.ico\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\"
        crossorigin=\"anonymous\" />
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Changa+One&family=Changa:wght@400;700;800&display=swap\" rel=\"stylesheet\">
\t\t<link
\t\trel=\"stylesheet\"
\t\thref=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\"
\t\t/>
\t\t{# <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\"> #}
\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/style.css')}}\">

\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<header>
\t\t\t<div id=\"navbar\">
\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img src=\"/assets/img/Logo_final.svg\" alt=\"Dress Me Up logo\">
\t\t\t\t</a>
\t\t\t\t<div>
\t\t\t\t\t<i id=\"burger-menu\" class=\"fa-solid fa-bars\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/\">Accueil</a>
\t\t\t\t\t<a href=\"{{ path('app_dressing')}}\">Dressing</a>
\t\t\t\t\t<a href=\"https://dressmeup.alwaysdata.net/\">Blog</a>
\t\t\t\t\t<a href=\"{{ path('app_about')}}\">Concept</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"user-connect\">
\t\t\t\t\t<a href=\"/#anchor-mix\">Mix & Match</a>
\t\t\t\t\t{% if (app.user == null) %}
\t\t\t\t\t\t<a href=\"{{ path('app_login')}}\"><i class=\"fa-solid fa-circle-user\"></i> Se Connecter</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('app_user')}}\"><i class=\"fa-solid fa-circle-user\"></i> {{ app.user.firstname }}{#  {{ app.user.name }} #}</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if (app.user != null) %}
\t\t\t\t\t\t<a href=\"{{ path('app_logout')}}\"> Se déconnecter </a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<main>
\t\t\t{% block body %}{% endblock %}
\t\t</main>
\t\t<footer>
\t\t\t<div {# class=\"container\" #}>
\t\t\t\t<nav id=\"navbarfooter\" class=\"col-sm-12 justify-content-between\">
\t\t\t\t\t<a href=\"{{ path('app_legal')}}\">Mentions légales</a>
\t\t\t\t\t<a href=\"{{ path('app_join_us')}}\">Nous rejoindre</a>
\t\t\t\t\t<a href=\"{{ path('app_accessibility')}}\">Accessibilité</a>
\t\t\t\t\t<a href=\"{{ path('app_terms_of_use')}}\">CGU</a>
\t\t\t\t\t<a href=\"{{ path('app_privacy')}}\">Politique de confidentialité</a>
\t\t\t\t</nav>
\t\t\t\t<div>
\t\t\t\t\t<section id=\"newsletter\">
\t\t\t\t\t\t<form class=\"hide-submit\" action=\"{{ path('app_formulaire')}}\">
\t\t\t\t\t\t\t<h4>Inscris toi à notre newsletter pour recevoir
\t\t                \tdes inspirations de style vestimentaire</h4>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"mail\" id=\"utilisateur\" class=\"form-field\" name=\"Email\" placeholder=\"Ton adresse email\" />
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" />
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</section>
\t\t\t\t\t<section id=\"networks\">
\t\t\t\t\t\t<h4>N'oublie pas de nous suivre sur les réseaux sociaux</h4>
\t\t\t\t\t\t<article id=\"networks-links\">
\t\t\t\t\t\t\t<a href=\"https://www.tiktok.com/fr/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/tiktok-normal.svg\" alt=\"tiktok\">
\t\t\t\t\t\t\t\t<p>Tiktok</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/?hl=fr\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/instagram-normal.svg\" alt=\"instagram\">
\t\t\t\t\t\t\t\t<p>Instagram</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.fr/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/pinterest-normal.svg\" alt=\"pinterest\">
\t\t\t\t\t\t\t\t<p>Pinterest</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/youtube-normal.svg\" alt=\"youtube\">
\t\t\t\t\t\t\t\t<p>Youtube</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</article>
\t\t          </section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
  </body>
  <script src=\"{{ asset('assets/js/navbar.js') }}\"></script>
{% block javascripts %}
    {{ encore_entry_script_tags('app') }}

{% endblock %}
", "base.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\base.html.twig");
    }
}
