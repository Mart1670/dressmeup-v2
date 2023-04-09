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
class __TwigTemplate_d3bcf89137a934529ccaefbc939a67e2 extends Template
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
        echo "\t";
        // line 18
        echo "
\t

\t<body>
\t\t<!-- *************** -->
\t\t<!-- section CONCEPT -->
\t\t<!-- *************** -->

\t\t\t<section class=\"concept container-fluid border-bottom border-3 border-dark px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-end border-2 border-dark text_bloc grey_square\">
\t\t\t\t\t<h1>Le concept</h1>
\t\t\t\t\t<p>
\t\t\t\t\t\tLe projet est parti d’une problématique quotidienne : la panne d’inspiration lors du choix de son
\t\t\t\t\t\t                    style vestimentaire de la journée.
\t\t\t\t\t\t                    Après une étude approfondie, nous avons identifié 2 critères majeures qui interviennent lors de
\t\t\t\t\t\t                    notre choix de vêtement : nos émotions et notre programme de la journée.
\t\t\t\t\t\t
\t\t\t\t\t\t                    Ton conseiller en image Dress MeUp est donc là pour te proposer ces idées de tenues selon ton humeur
\t\t\t\t\t\t                    de jour et l’ambiance de ta journée !
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-sm-6 border-start border-2 border-dark yellow_square\">
\t\t\t\t\t<img class=\"img-fluid square_img\" src=\"assets/img/DO_logoconcept.svg\" alt=\"Illustration de notre concept avec plein de petits pictos\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- ********************* -->
\t\t<!-- section ACCESSIBILITE -->
\t\t<!-- ********************* -->

\t\t\t<section class=\"concept container-fluid border-bottom border-3 border-dark px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-end border-2 border-dark blue_square\">
\t\t\t\t\t<img class=\"img-fluid square_img\" src=\"assets/img/DO_accessibility_eyes.svg\" alt=\"Illustration avec plein de petits smileys colorés pour exprimer l'accessibilité visuelle\">


\t\t\t\t</div>
\t\t\t\t<div  id=\"anchor-access\" class=\"col-12 col-sm-6 border-start border-2 border-dark text_bloc grey_square\">
\t\t\t\t\t<h1>Accessibilité</h1>
\t\t\t\t\t<p>
\t\t\t\t\t\tL’équipe de Dress MeUp est sensible à certaines problématiques en terme d’accessibilité et nous
\t\t\t\t\t\t                    avons fait le choix d’adresser notre interface aux personnes atteintes de daltonisme (deutéranopie,
\t\t\t\t\t\t                    protanopie et tritanopie).
\t\t\t\t\t\t                    Nous avons donc sélectionné une palette de couleur bien réfléchie pour éviter les teintes de
\t\t\t\t\t\t                    marrons.
\t\t\t\t\t\t                    Nous avons opté pour un style graphique franc et contrasté pour y permettre une meilleure lecture.
\t\t\t\t\t\t                    Dans une future version de notre plateforme, nous souhaitons proposer une accessibilité pour les
\t\t\t\t\t\t                    personnes malvoyantes.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- ************************* -->
\t\t<!-- section COMMENT ÇA MARCHE -->
\t\t<!-- ************************* -->

\t\t\t<section class=\"concept container-fluid border-bottom border-3 border-dark px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-end border-2 border-dark text_bloc grey_square\">
\t\t\t\t\t<h1>Comment ça marche ?</h1>
\t\t\t\t\t<p>
\t\t\t\t\t\tNous avons voulu proposer un système simple. Après avoir rajouté les photos de tes vêtements dans ta
\t\t\t\t\t\t                    page “Dressing”, nous t’aidons à les catégoriser et à les ranger.
\t\t\t\t\t\t                    Ensuite tu nous indiques, ou non, ton humeur et tes activités du jour et notre générateur se charge
\t\t\t\t\t\t                    de te proposer jusqu’à 3 styles vestimentaires différents !
\t\t\t\t\t\t                    Notre algorithme a été développé avec des professionnels de conseil en image et est régulièrement
\t\t\t\t\t\t                    amélioré pour te proposer des styles toujours plus adaptés.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-sm-6 border-start border-2 border-dark rose_square\">
\t\t\t\t\t<img class=\"img-fluid square_img\" src=\"assets/img/DO_slotmachine.svg\" alt=\"Illustration avec plein de petits smileys colorés pour exprimer l'accessibilité visuelle\">

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

\t\t<!-- ****************** -->
\t\t<!-- section MON EQUIPE -->
\t\t<!-- ****************** -->

\t\t\t<div class=\"container-fluid border-bottom border-3 border-dark px-0\"> <h2 class=\"section_title\">Notre équipe</h2>
\t\t</div>

\t\t<section class=\"container\">
\t\t\t<div class=\"row g-0\">


\t\t\t\t<div class=\"col-sm-6 col-lg-3 \">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-martin\">Martin Harlaut</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/martin.jpg\" alt=\"Martin Harlaut, Lead Dév\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-nicolas\">Nicolas Touchard</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/nicolas.jpg\" alt=\"Nicolas Touchard, Lead Back\">
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-julien\">Julien Viain</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/julien.jpg\" alt=\"Julien Viain, Lead Front\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-nico\">Nicolas Malherbe</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/nico.jpg\" alt=\"Nicolas Malherbe, Lead Javascript\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-chris\">Christian Cirri</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/chris.jpg\" alt=\"Christian Cirri, Designer+ et Scrumaster\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-lois\">Loïs Le Du</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/lois.jpg\" alt=\"Loïs Le Du, Lead UX et Intégration\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-lou-mah\">Lou-Mah Vavoda</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/lou mah.jpg\" alt=\"Lou-Mah Vavoda, Lead UI\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-mira\">Mira Koh</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/mira.jpg\" alt=\"Mira Koh, Designer+\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

\t\t<!-- ******************** -->
\t\t<!-- Section EQUIPE Texte -->
\t\t<!-- ******************** -->

\t\t\t<section class=\"container-fluid border-bottom border-top border-3 border-dark grey_square px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-2 border-dark text_bloc\">
\t\t\t\t\t<p>
\t\t\t\t\t\tNous sommes une team de designers et développeurs passionnés. Nous avons décidé de créer ce beau
\t\t\t\t\t\t                    projet ensemble en regroupant nos compétences diverses
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-sm-6 border-2 border-dark\">
\t\t\t\t\t<img class=\"img-fluid schema_concept\" src=\"assets/img/DO_schema_concept.svg\" alt=\"Illustration qui représente un beau schéma\">

\t\t\t\t</div>

\t\t\t</div>
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
        return array (  75 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DressMeUp - Concept{% endblock %}

{% block body %}
\t{# <style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style> #}

\t

\t<body>
\t\t<!-- *************** -->
\t\t<!-- section CONCEPT -->
\t\t<!-- *************** -->

\t\t\t<section class=\"concept container-fluid border-bottom border-3 border-dark px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-end border-2 border-dark text_bloc grey_square\">
\t\t\t\t\t<h1>Le concept</h1>
\t\t\t\t\t<p>
\t\t\t\t\t\tLe projet est parti d’une problématique quotidienne : la panne d’inspiration lors du choix de son
\t\t\t\t\t\t                    style vestimentaire de la journée.
\t\t\t\t\t\t                    Après une étude approfondie, nous avons identifié 2 critères majeures qui interviennent lors de
\t\t\t\t\t\t                    notre choix de vêtement : nos émotions et notre programme de la journée.
\t\t\t\t\t\t
\t\t\t\t\t\t                    Ton conseiller en image Dress MeUp est donc là pour te proposer ces idées de tenues selon ton humeur
\t\t\t\t\t\t                    de jour et l’ambiance de ta journée !
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-sm-6 border-start border-2 border-dark yellow_square\">
\t\t\t\t\t<img class=\"img-fluid square_img\" src=\"assets/img/DO_logoconcept.svg\" alt=\"Illustration de notre concept avec plein de petits pictos\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- ********************* -->
\t\t<!-- section ACCESSIBILITE -->
\t\t<!-- ********************* -->

\t\t\t<section class=\"concept container-fluid border-bottom border-3 border-dark px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-end border-2 border-dark blue_square\">
\t\t\t\t\t<img class=\"img-fluid square_img\" src=\"assets/img/DO_accessibility_eyes.svg\" alt=\"Illustration avec plein de petits smileys colorés pour exprimer l'accessibilité visuelle\">


\t\t\t\t</div>
\t\t\t\t<div  id=\"anchor-access\" class=\"col-12 col-sm-6 border-start border-2 border-dark text_bloc grey_square\">
\t\t\t\t\t<h1>Accessibilité</h1>
\t\t\t\t\t<p>
\t\t\t\t\t\tL’équipe de Dress MeUp est sensible à certaines problématiques en terme d’accessibilité et nous
\t\t\t\t\t\t                    avons fait le choix d’adresser notre interface aux personnes atteintes de daltonisme (deutéranopie,
\t\t\t\t\t\t                    protanopie et tritanopie).
\t\t\t\t\t\t                    Nous avons donc sélectionné une palette de couleur bien réfléchie pour éviter les teintes de
\t\t\t\t\t\t                    marrons.
\t\t\t\t\t\t                    Nous avons opté pour un style graphique franc et contrasté pour y permettre une meilleure lecture.
\t\t\t\t\t\t                    Dans une future version de notre plateforme, nous souhaitons proposer une accessibilité pour les
\t\t\t\t\t\t                    personnes malvoyantes.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- ************************* -->
\t\t<!-- section COMMENT ÇA MARCHE -->
\t\t<!-- ************************* -->

\t\t\t<section class=\"concept container-fluid border-bottom border-3 border-dark px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-end border-2 border-dark text_bloc grey_square\">
\t\t\t\t\t<h1>Comment ça marche ?</h1>
\t\t\t\t\t<p>
\t\t\t\t\t\tNous avons voulu proposer un système simple. Après avoir rajouté les photos de tes vêtements dans ta
\t\t\t\t\t\t                    page “Dressing”, nous t’aidons à les catégoriser et à les ranger.
\t\t\t\t\t\t                    Ensuite tu nous indiques, ou non, ton humeur et tes activités du jour et notre générateur se charge
\t\t\t\t\t\t                    de te proposer jusqu’à 3 styles vestimentaires différents !
\t\t\t\t\t\t                    Notre algorithme a été développé avec des professionnels de conseil en image et est régulièrement
\t\t\t\t\t\t                    amélioré pour te proposer des styles toujours plus adaptés.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-sm-6 border-start border-2 border-dark rose_square\">
\t\t\t\t\t<img class=\"img-fluid square_img\" src=\"assets/img/DO_slotmachine.svg\" alt=\"Illustration avec plein de petits smileys colorés pour exprimer l'accessibilité visuelle\">

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

\t\t<!-- ****************** -->
\t\t<!-- section MON EQUIPE -->
\t\t<!-- ****************** -->

\t\t\t<div class=\"container-fluid border-bottom border-3 border-dark px-0\"> <h2 class=\"section_title\">Notre équipe</h2>
\t\t</div>

\t\t<section class=\"container\">
\t\t\t<div class=\"row g-0\">


\t\t\t\t<div class=\"col-sm-6 col-lg-3 \">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-martin\">Martin Harlaut</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/martin.jpg\" alt=\"Martin Harlaut, Lead Dév\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-nicolas\">Nicolas Touchard</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/nicolas.jpg\" alt=\"Nicolas Touchard, Lead Back\">
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-julien\">Julien Viain</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/julien.jpg\" alt=\"Julien Viain, Lead Front\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-nico\">Nicolas Malherbe</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/nico.jpg\" alt=\"Nicolas Malherbe, Lead Javascript\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-chris\">Christian Cirri</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/chris.jpg\" alt=\"Christian Cirri, Designer+ et Scrumaster\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-lois\">Loïs Le Du</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/lois.jpg\" alt=\"Loïs Le Du, Lead UX et Intégration\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-lou-mah\">Lou-Mah Vavoda</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/lou mah.jpg\" alt=\"Lou-Mah Vavoda, Lead UI\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t<div class=\"team\">
\t\t\t\t\t\t<p class=\"name_pill team-mira\">Mira Koh</p>
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"assets/img/mira.jpg\" alt=\"Mira Koh, Designer+\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

\t\t<!-- ******************** -->
\t\t<!-- Section EQUIPE Texte -->
\t\t<!-- ******************** -->

\t\t\t<section class=\"container-fluid border-bottom border-top border-3 border-dark grey_square px-0\"> <div class=\"row g-0\">

\t\t\t\t<div class=\"col-12 col-sm-6 border-2 border-dark text_bloc\">
\t\t\t\t\t<p>
\t\t\t\t\t\tNous sommes une team de designers et développeurs passionnés. Nous avons décidé de créer ce beau
\t\t\t\t\t\t                    projet ensemble en regroupant nos compétences diverses
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-sm-6 border-2 border-dark\">
\t\t\t\t\t<img class=\"img-fluid schema_concept\" src=\"assets/img/DO_schema_concept.svg\" alt=\"Illustration qui représente un beau schéma\">

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t</body>
{% endblock %}
", "about/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup-v2\\templates\\about\\index.html.twig");
    }
}
