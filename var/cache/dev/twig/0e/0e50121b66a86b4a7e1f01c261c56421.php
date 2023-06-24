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

/* about/index.html.twig */
class __TwigTemplate_9636665f8df86c4e4a42fdacb0f14125 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Concept";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<section id=\"about\" class=\"container\">
\t\t<article id=\"concept\">
\t\t\t<h1>Le concept</h1>
\t\t\t<p>
\t\t\t\tLe projet est parti d’une problématique quotidienne : la panne d’inspiration lors du choix de son
\t\t\t\tstyle vestimentaire de la journée.
\t\t\t\tAprès une étude approfondie, nous avons identifié 2 critères majeures qui interviennent lors de
\t\t\t\tnotre choix de vêtement : nos émotions et notre programme de la journée.

\t\t\t\tTon conseiller en image Dress MeUp est donc là pour te proposer ces idées de tenues selon ton humeur
\t\t\t\tde jour et l’ambiance de ta journée !
\t\t\t</p>
\t\t</article>
\t\t<article id=\"accessibility\">
\t\t\t<h2>Accessibilité</h2>
\t\t\t<p>
\t\t\t\tL’équipe de Dress MeUp est sensible à certaines problématiques en terme d’accessibilité et nous
\t\t\t\tavons fait le choix d’adresser notre interface aux personnes atteintes de daltonisme (deutéranopie,
\t\t\t\tprotanopie et tritanopie).
\t\t\t\tNous avons donc sélectionné une palette de couleur bien réfléchie pour éviter les teintes de
\t\t\t\tmarrons.
\t\t\t\tNous avons opté pour un style graphique franc et contrasté pour y permettre une meilleure lecture.
\t\t\t\tDans une future version de notre plateforme, nous souhaitons proposer une accessibilité pour les
\t\t\t\tpersonnes malvoyantes.
\t\t\t</p>
\t\t</article>
\t\t<article id=\"accessibility\">
\t\t\t<h2>Comment ça marche ?</h2>
\t\t\t<p>
\t\t\t\tNous avons voulu proposer un système simple. Après avoir rajouté les photos de tes vêtements dans ta
\t\t\t\tpage “Dressing”, nous t’aidons à les catégoriser et à les ranger.
\t\t\t\tEnsuite tu nous indiques, ou non, ton humeur et tes activités du jour et notre générateur se charge
\t\t\t\tde te proposer jusqu’à 3 styles vestimentaires différents !
\t\t\t\tNotre algorithme a été développé avec des professionnels de conseil en image et est régulièrement
\t\t\t\tamélioré pour te proposer des styles toujours plus adaptés.
\t\t\t</p>
\t\t</article>
\t\t<article id=\"team\">
\t\t\t<h2>Notre équipe</h2>
\t\t\t<div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Martin Harlaut</p>
\t\t\t\t\t<img src=\"assets/img/martin.jpg\" alt=\"Martin Harlaut, Lead Dév\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Nicolas Touchard</p>
\t\t\t\t\t<img src=\"assets/img/nicolas.jpg\" alt=\"Nicolas Touchard, Lead Back\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Julien Viain</p>
\t\t\t\t\t<img src=\"assets/img/julien.jpg\" alt=\"Julien Viain, Lead Front\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Nicolas Malherbe</p>
\t\t\t\t\t<img src=\"assets/img/nico.jpg\" alt=\"Nicolas Malherbe, Lead Javascript\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Christian Cirri</p>
\t\t\t\t\t<img src=\"assets/img/chris.jpg\" alt=\"Christian Cirri, Designer+ et Scrumaster\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Loïs Le Du</p>
\t\t\t\t\t<img src=\"assets/img/lois.jpg\" alt=\"Loïs Le Du, Lead UX et Intégration\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Lou-Mah Vavoda</p>
\t\t\t\t\t<img src=\"assets/img/lou-mah.jpg\" alt=\"Lou-Mah Vavoda, Lead UI\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Mira Koh</p>
\t\t\t\t\t<img src=\"assets/img/mira.jpg\" alt=\"Mira Koh, Designer+\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>

\t\t<!-- ******************** -->
\t\t<!-- Section EQUIPE Texte -->
\t\t<!-- ******************** -->

\t\t\t<article id=\"passion\" class=\"container\">
\t\t\t\t<p>
\t\t\t\t\tNous sommes une team de designers et développeurs passionnés. Nous avons décidé de créer ce beau
\t\t\t\t\tprojet ensemble en regroupant nos compétences diverses
\t\t\t\t</p>
\t\t\t</article>
\t\t</section>
\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Concept{% endblock %}

{% block body %}
\t<section id=\"about\" class=\"container\">
\t\t<article id=\"concept\">
\t\t\t<h1>Le concept</h1>
\t\t\t<p>
\t\t\t\tLe projet est parti d’une problématique quotidienne : la panne d’inspiration lors du choix de son
\t\t\t\tstyle vestimentaire de la journée.
\t\t\t\tAprès une étude approfondie, nous avons identifié 2 critères majeures qui interviennent lors de
\t\t\t\tnotre choix de vêtement : nos émotions et notre programme de la journée.

\t\t\t\tTon conseiller en image Dress MeUp est donc là pour te proposer ces idées de tenues selon ton humeur
\t\t\t\tde jour et l’ambiance de ta journée !
\t\t\t</p>
\t\t</article>
\t\t<article id=\"accessibility\">
\t\t\t<h2>Accessibilité</h2>
\t\t\t<p>
\t\t\t\tL’équipe de Dress MeUp est sensible à certaines problématiques en terme d’accessibilité et nous
\t\t\t\tavons fait le choix d’adresser notre interface aux personnes atteintes de daltonisme (deutéranopie,
\t\t\t\tprotanopie et tritanopie).
\t\t\t\tNous avons donc sélectionné une palette de couleur bien réfléchie pour éviter les teintes de
\t\t\t\tmarrons.
\t\t\t\tNous avons opté pour un style graphique franc et contrasté pour y permettre une meilleure lecture.
\t\t\t\tDans une future version de notre plateforme, nous souhaitons proposer une accessibilité pour les
\t\t\t\tpersonnes malvoyantes.
\t\t\t</p>
\t\t</article>
\t\t<article id=\"accessibility\">
\t\t\t<h2>Comment ça marche ?</h2>
\t\t\t<p>
\t\t\t\tNous avons voulu proposer un système simple. Après avoir rajouté les photos de tes vêtements dans ta
\t\t\t\tpage “Dressing”, nous t’aidons à les catégoriser et à les ranger.
\t\t\t\tEnsuite tu nous indiques, ou non, ton humeur et tes activités du jour et notre générateur se charge
\t\t\t\tde te proposer jusqu’à 3 styles vestimentaires différents !
\t\t\t\tNotre algorithme a été développé avec des professionnels de conseil en image et est régulièrement
\t\t\t\tamélioré pour te proposer des styles toujours plus adaptés.
\t\t\t</p>
\t\t</article>
\t\t<article id=\"team\">
\t\t\t<h2>Notre équipe</h2>
\t\t\t<div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Martin Harlaut</p>
\t\t\t\t\t<img src=\"assets/img/martin.jpg\" alt=\"Martin Harlaut, Lead Dév\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Nicolas Touchard</p>
\t\t\t\t\t<img src=\"assets/img/nicolas.jpg\" alt=\"Nicolas Touchard, Lead Back\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Julien Viain</p>
\t\t\t\t\t<img src=\"assets/img/julien.jpg\" alt=\"Julien Viain, Lead Front\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Nicolas Malherbe</p>
\t\t\t\t\t<img src=\"assets/img/nico.jpg\" alt=\"Nicolas Malherbe, Lead Javascript\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Christian Cirri</p>
\t\t\t\t\t<img src=\"assets/img/chris.jpg\" alt=\"Christian Cirri, Designer+ et Scrumaster\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Loïs Le Du</p>
\t\t\t\t\t<img src=\"assets/img/lois.jpg\" alt=\"Loïs Le Du, Lead UX et Intégration\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Lou-Mah Vavoda</p>
\t\t\t\t\t<img src=\"assets/img/lou-mah.jpg\" alt=\"Lou-Mah Vavoda, Lead UI\">
\t\t\t\t</div>
\t\t\t\t<div class=\"team\">
\t\t\t\t\t<p>Mira Koh</p>
\t\t\t\t\t<img src=\"assets/img/mira.jpg\" alt=\"Mira Koh, Designer+\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>

\t\t<!-- ******************** -->
\t\t<!-- Section EQUIPE Texte -->
\t\t<!-- ******************** -->

\t\t\t<article id=\"passion\" class=\"container\">
\t\t\t\t<p>
\t\t\t\t\tNous sommes une team de designers et développeurs passionnés. Nous avons décidé de créer ce beau
\t\t\t\t\tprojet ensemble en regroupant nos compétences diverses
\t\t\t\t</p>
\t\t\t</article>
\t\t</section>
\t</body>
{% endblock %}
", "about/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\about\\index.html.twig");
    }
}
