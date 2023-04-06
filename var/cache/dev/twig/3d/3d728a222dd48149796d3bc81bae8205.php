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

/* legal/index.html.twig */
class __TwigTemplate_8c06340862f550c3de816722449bad67 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "legal/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DressMeUp - Mentions légales";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 id=\"mentions\"><center>Mentions légales</center></h1>

    <div class=\"container\">

        <h4>1-Édition du site</h4>

        <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet http://www.dressmeup.fr l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
        
        Propriétaire du site :
        Daily Outfitters

        Contact :
        contact_do@mail.com
        Téléphone : +33 1 55 66 77 88
        6 bis rue du cadran, 75010 Paris.

        Directeur de la publication
        Daily Outfitters :
        dir-pub_do@mail.com

        Hébergeur
        Gandi
        63-65 Boulevard Masséna
        75013 Paris
        Téléphone : +33 1 70 37 76 61

        Délégué à la protection des données
        Daily Outfitters :dpo_do@mail.com</p>


        <h4>2-Propriété intellectuelle et contrefaçons</h4>


        <p>Daily Outfitters est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.

        Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Daily Outfitters.

        Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>


        <h4>3-Limitations de responsabilité</h4>


        <p>Daily Outfitters ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://www.dressmeup.fr.
        Daily Outfitters décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://www.dressmeup.fr.

        Daily Outfitters s’engage à sécuriser au mieux le site https://www.dressmeup.fr, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.

        Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. Daily Outfitters se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.

        Le cas échéant, Daily Outfitters se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>
        

        <h4>4-CNIL et gestion des données personnelles</h4>


        <p>Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site https://www.dressmeup.fr dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : dpo_do - dpo_do@mail.com.

        Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...), lisez notre https://www.dressmeup.fr/confidentialite/.</p>
        

        <h4>5-Liens hypertextes et cookies</h4>


        <p>Le site https://www.dressmeup.fr contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers https://www.dressmeup.fr.

        La navigation sur le site https://www.dressmeup.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.

        Un \"cookie\" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.

        Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.
        Les cookies sont enregistrés pour une durée maximale de 1 mois.

        Pour plus d'informations sur la façon dont nous faisons usage des cookies, lisez notre politique de cookies : https://www.dressmeup.fr/confidentialite.</p>
        

        <h4>6-Droit applicable et attribution de juridiction</h4>


        <p>Tout litige en relation avec l’utilisation du site https://www.dressmeup.fr est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>        
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "legal/index.html.twig";
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

{% block title %}DressMeUp - Mentions légales{% endblock %}

{% block body %}
<h1 id=\"mentions\"><center>Mentions légales</center></h1>

    <div class=\"container\">

        <h4>1-Édition du site</h4>

        <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet http://www.dressmeup.fr l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
        
        Propriétaire du site :
        Daily Outfitters

        Contact :
        contact_do@mail.com
        Téléphone : +33 1 55 66 77 88
        6 bis rue du cadran, 75010 Paris.

        Directeur de la publication
        Daily Outfitters :
        dir-pub_do@mail.com

        Hébergeur
        Gandi
        63-65 Boulevard Masséna
        75013 Paris
        Téléphone : +33 1 70 37 76 61

        Délégué à la protection des données
        Daily Outfitters :dpo_do@mail.com</p>


        <h4>2-Propriété intellectuelle et contrefaçons</h4>


        <p>Daily Outfitters est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.

        Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Daily Outfitters.

        Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>


        <h4>3-Limitations de responsabilité</h4>


        <p>Daily Outfitters ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://www.dressmeup.fr.
        Daily Outfitters décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://www.dressmeup.fr.

        Daily Outfitters s’engage à sécuriser au mieux le site https://www.dressmeup.fr, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.

        Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. Daily Outfitters se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.

        Le cas échéant, Daily Outfitters se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>
        

        <h4>4-CNIL et gestion des données personnelles</h4>


        <p>Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site https://www.dressmeup.fr dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : dpo_do - dpo_do@mail.com.

        Pour plus d'informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire...), lisez notre https://www.dressmeup.fr/confidentialite/.</p>
        

        <h4>5-Liens hypertextes et cookies</h4>


        <p>Le site https://www.dressmeup.fr contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers https://www.dressmeup.fr.

        La navigation sur le site https://www.dressmeup.fr est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.

        Un \"cookie\" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d'obtenir des mesures de fréquentation, par exemple.

        Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.
        Les cookies sont enregistrés pour une durée maximale de 1 mois.

        Pour plus d'informations sur la façon dont nous faisons usage des cookies, lisez notre politique de cookies : https://www.dressmeup.fr/confidentialite.</p>
        

        <h4>6-Droit applicable et attribution de juridiction</h4>


        <p>Tout litige en relation avec l’utilisation du site https://www.dressmeup.fr est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>        
    </div>
{% endblock %}
", "legal/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\legal\\index.html.twig");
    }
}
