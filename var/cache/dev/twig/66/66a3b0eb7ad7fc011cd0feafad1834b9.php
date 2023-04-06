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

/* terms_of_use/index.html.twig */
class __TwigTemplate_219aac6d59ba9e4e8ca8077d20d152c7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms_of_use/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "terms_of_use/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TermsOfUseController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1><center>Conditions Générales d'Utilisation</center></h1>
<div class=\"container\">
<p>Le présent document a pour objet de définir les modalités et conditions dans lesquelles d’une part, Daily Outfitters, ci-après dénommé l’EDITEUR, met à la disposition de ses utilisateurs le site, et les services disponibles sur le site et d’autre part, la manière par laquelle l’utilisateur accède au site et utilise ses services. 
Toute connexion au site est subordonnée au respect des présentes conditions. 
Pour l’utilisateur, le simple accès au site de l’EDITEUR à l’adresse URL suivante https://www.dressmeup.fr  implique l’acceptation de l’ensemble des conditions décrites ci-après.</p> 

<h4>Propriété intellectuelle</h4>

<h5>Variante 1</h5> 

<p>La structure générale du site https://www.dressmeup.fr , ainsi que les textes, graphiques, images, sons et  vidéos la composant, sont la propriété de l'éditeur ou de ses partenaires. Toute représentation et/ou reproduction et/ou exploitation partielle ou totale des contenus et services proposés par le site https://www.dressmeup.fr , par quelque procédé que ce soit, sans l'autorisation préalable et par écrit de  Daily Outfitters  et/ou de ses partenaires est strictement interdite et serait susceptible de constituer une contrefaçon au sens des articles L 335-2 et suivants du Code de la propriété intellectuelle.

Les marques \"Daily Outfitters\", \"dressmeup\" sont des marques déposées par Daily Outfitters .Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de ces marques, de quelque nature que ce soit, est totalement prohibée.</p>

<h5>Variante 2</h5>

<p>Aucune reproduction, même partielle prévue à l’article L.122-5 du Code de la propriété intellectuelle, ne peut être faite de ce site sans l’autorisation du directeur de publication.</p>

<h5>Variante 3</h5>

<p>Tous les éléments de ce site, y compris les documents téléchargeables, sont libres de droit. A l’exception de l’iconographie, la reproduction des pages de ce site est autorisée à la condition d’y mentionner la source. Elles ne peuvent être utilisées à des fins commerciales et publicitaires.</p>

<h4>Liens hypertextes</h4>

<p>Le site https://www.dressmeup.fr peut contenir des liens hypertextes vers d’autres sites présents sur le réseau Internet. Les liens vers ces autres ressources vous font quitter le site https://www.dressmeup.fr .
Il est possible de créer un lien vers la page de présentation de ce site sans autorisation expresse de l’EDITEUR. Aucune autorisation ou demande d’information préalable ne peut être exigée par l’éditeur à l’égard d’un site qui souhaite établir un lien vers le site de l’éditeur. Il convient toutefois d’afficher ce site dans une nouvelle fenêtre du navigateur. Cependant, l’EDITEUR se réserve le droit de demander la suppression d’un lien qu’il estime non conforme à l’objet du site https://www.dressmeup.fr</p>

<h4>Responsabilité de l’éditeur</h4>

<p>Les informations et/ou documents figurant sur ce site et/ou accessibles par ce site proviennent de sources considérées comme étant fiables.
Toutefois, ces informations et/ou documents sont susceptibles de contenir des inexactitudes techniques et des erreurs typographiques. 
L’EDITEUR se réserve le droit de les corriger, dès que ces erreurs sont portées à sa connaissance. 
Il est fortement recommandé de vérifier l’exactitude et la pertinence des informations et/ou documents mis à disposition sur ce site. 
Les informations et/ou documents disponibles sur ce site sont susceptibles d’être modifiés à tout moment, et peuvent avoir fait l’objet de mises à jour. En particulier, ils peuvent avoir fait l’objet d’une mise à jour entre le moment de leur téléchargement et celui où l’utilisateur en prend connaissance. 
L’utilisation des informations et/ou documents disponibles sur ce site se fait sous l’entière et seule responsabilité de l’utilisateur, qui assume la totalité des conséquences pouvant en découler, sans que l’EDITEUR puisse être recherché à ce titre, et sans recours contre ce dernier. 
L’EDITEUR ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature qu’il soit résultant de l’interprétation ou de l’utilisation des informations et/ou documents disponibles sur ce site.</p>

<h4>Accès au site</h4>

<p>’éditeur s’efforce de permettre l’accès au site 24 heures sur 24, 7 jours sur 7, sauf en cas de force majeure ou d’un événement hors du contrôle de l’EDITEUR, et sous réserve des éventuelles pannes et interventions de maintenance nécessaires au bon fonctionnement du site et des services.
Par conséquent, l’EDITEUR ne peut garantir une disponibilité du site et/ou des services, une fiabilité des transmissions et des performances en terme de temps de réponse ou de qualité. Il n’est prévu aucune assistance technique vis à vis de l’utilisateur que ce soit par des moyens électronique ou téléphonique.

La responsabilité de l’éditeur ne saurait être engagée en cas d’impossibilité d’accès à ce site et/ou d’utilisation des services. 

Par ailleurs, l’EDITEUR peut être amené à interrompre le site ou une partie des services, à tout moment sans préavis, le tout sans droit à indemnités. L’utilisateur reconnaît et accepte que l’EDITEUR ne soit pas responsable des interruptions, et des conséquences qui peuvent en découler pour l’utilisateur ou tout tiers.</p> 

<h4>Modification des conditions d’utilisation</h4>

<p>L’EDITEUR se réserve la possibilité de modifier, à tout moment et sans préavis, les présentes conditions d’utilisation afin de les adapter aux évolutions du site et/ou de son exploitation.</p>

<h4>Règles d'usage d'Internet</h4>

<p>L’utilisateur déclare accepter les caractéristiques et les limites d’Internet, et notamment reconnaît que : 
L’EDITEUR n’assume aucune responsabilité sur les services accessibles par Internet et n’exerce aucun contrôle de quelque forme que ce soit sur la nature et les caractéristiques des données qui pourraient transiter par l’intermédiaire de son centre serveur. 
L’utilisateur reconnaît que les données circulant sur Internet ne sont pas protégées notamment contre les détournements éventuels. La présence du logo dressmeup institue une présomption simple de validité. La communication de toute information jugée par l’utilisateur de nature sensible ou confidentielle se fait à ses risques et périls. 
L’utilisateur reconnaît que les données circulant sur Internet peuvent être réglementées en termes d’usage ou être protégées par un droit de propriété. 
L’utilisateur est seul responsable de l’usage des données qu’il consulte, interroge et transfère sur Internet. 
L’utilisateur reconnaît que l’EDITEUR ne dispose d’aucun moyen de contrôle sur le contenu des services accessibles sur Internet</p>

<h4>Droit applicable</h4>

<p>Tant le présent site que les modalités et conditions de son utilisation sont régis par le droit français, quel que soit le lieu d’utilisation. En cas de contestation éventuelle, et après l’échec de toute tentative de recherche d’une solution amiable, les tribunaux français seront seuls compétents pour connaître de ce litige.
Pour toute question relative aux présentes conditions d’utilisation du site, vous pouvez nous écrire à l’adresse suivante : 
contact_do@mail.com </p>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "terms_of_use/index.html.twig";
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

{% block title %}Hello TermsOfUseController!{% endblock %}

{% block body %}
<h1><center>Conditions Générales d'Utilisation</center></h1>
<div class=\"container\">
<p>Le présent document a pour objet de définir les modalités et conditions dans lesquelles d’une part, Daily Outfitters, ci-après dénommé l’EDITEUR, met à la disposition de ses utilisateurs le site, et les services disponibles sur le site et d’autre part, la manière par laquelle l’utilisateur accède au site et utilise ses services. 
Toute connexion au site est subordonnée au respect des présentes conditions. 
Pour l’utilisateur, le simple accès au site de l’EDITEUR à l’adresse URL suivante https://www.dressmeup.fr  implique l’acceptation de l’ensemble des conditions décrites ci-après.</p> 

<h4>Propriété intellectuelle</h4>

<h5>Variante 1</h5> 

<p>La structure générale du site https://www.dressmeup.fr , ainsi que les textes, graphiques, images, sons et  vidéos la composant, sont la propriété de l'éditeur ou de ses partenaires. Toute représentation et/ou reproduction et/ou exploitation partielle ou totale des contenus et services proposés par le site https://www.dressmeup.fr , par quelque procédé que ce soit, sans l'autorisation préalable et par écrit de  Daily Outfitters  et/ou de ses partenaires est strictement interdite et serait susceptible de constituer une contrefaçon au sens des articles L 335-2 et suivants du Code de la propriété intellectuelle.

Les marques \"Daily Outfitters\", \"dressmeup\" sont des marques déposées par Daily Outfitters .Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de ces marques, de quelque nature que ce soit, est totalement prohibée.</p>

<h5>Variante 2</h5>

<p>Aucune reproduction, même partielle prévue à l’article L.122-5 du Code de la propriété intellectuelle, ne peut être faite de ce site sans l’autorisation du directeur de publication.</p>

<h5>Variante 3</h5>

<p>Tous les éléments de ce site, y compris les documents téléchargeables, sont libres de droit. A l’exception de l’iconographie, la reproduction des pages de ce site est autorisée à la condition d’y mentionner la source. Elles ne peuvent être utilisées à des fins commerciales et publicitaires.</p>

<h4>Liens hypertextes</h4>

<p>Le site https://www.dressmeup.fr peut contenir des liens hypertextes vers d’autres sites présents sur le réseau Internet. Les liens vers ces autres ressources vous font quitter le site https://www.dressmeup.fr .
Il est possible de créer un lien vers la page de présentation de ce site sans autorisation expresse de l’EDITEUR. Aucune autorisation ou demande d’information préalable ne peut être exigée par l’éditeur à l’égard d’un site qui souhaite établir un lien vers le site de l’éditeur. Il convient toutefois d’afficher ce site dans une nouvelle fenêtre du navigateur. Cependant, l’EDITEUR se réserve le droit de demander la suppression d’un lien qu’il estime non conforme à l’objet du site https://www.dressmeup.fr</p>

<h4>Responsabilité de l’éditeur</h4>

<p>Les informations et/ou documents figurant sur ce site et/ou accessibles par ce site proviennent de sources considérées comme étant fiables.
Toutefois, ces informations et/ou documents sont susceptibles de contenir des inexactitudes techniques et des erreurs typographiques. 
L’EDITEUR se réserve le droit de les corriger, dès que ces erreurs sont portées à sa connaissance. 
Il est fortement recommandé de vérifier l’exactitude et la pertinence des informations et/ou documents mis à disposition sur ce site. 
Les informations et/ou documents disponibles sur ce site sont susceptibles d’être modifiés à tout moment, et peuvent avoir fait l’objet de mises à jour. En particulier, ils peuvent avoir fait l’objet d’une mise à jour entre le moment de leur téléchargement et celui où l’utilisateur en prend connaissance. 
L’utilisation des informations et/ou documents disponibles sur ce site se fait sous l’entière et seule responsabilité de l’utilisateur, qui assume la totalité des conséquences pouvant en découler, sans que l’EDITEUR puisse être recherché à ce titre, et sans recours contre ce dernier. 
L’EDITEUR ne pourra en aucun cas être tenu responsable de tout dommage de quelque nature qu’il soit résultant de l’interprétation ou de l’utilisation des informations et/ou documents disponibles sur ce site.</p>

<h4>Accès au site</h4>

<p>’éditeur s’efforce de permettre l’accès au site 24 heures sur 24, 7 jours sur 7, sauf en cas de force majeure ou d’un événement hors du contrôle de l’EDITEUR, et sous réserve des éventuelles pannes et interventions de maintenance nécessaires au bon fonctionnement du site et des services.
Par conséquent, l’EDITEUR ne peut garantir une disponibilité du site et/ou des services, une fiabilité des transmissions et des performances en terme de temps de réponse ou de qualité. Il n’est prévu aucune assistance technique vis à vis de l’utilisateur que ce soit par des moyens électronique ou téléphonique.

La responsabilité de l’éditeur ne saurait être engagée en cas d’impossibilité d’accès à ce site et/ou d’utilisation des services. 

Par ailleurs, l’EDITEUR peut être amené à interrompre le site ou une partie des services, à tout moment sans préavis, le tout sans droit à indemnités. L’utilisateur reconnaît et accepte que l’EDITEUR ne soit pas responsable des interruptions, et des conséquences qui peuvent en découler pour l’utilisateur ou tout tiers.</p> 

<h4>Modification des conditions d’utilisation</h4>

<p>L’EDITEUR se réserve la possibilité de modifier, à tout moment et sans préavis, les présentes conditions d’utilisation afin de les adapter aux évolutions du site et/ou de son exploitation.</p>

<h4>Règles d'usage d'Internet</h4>

<p>L’utilisateur déclare accepter les caractéristiques et les limites d’Internet, et notamment reconnaît que : 
L’EDITEUR n’assume aucune responsabilité sur les services accessibles par Internet et n’exerce aucun contrôle de quelque forme que ce soit sur la nature et les caractéristiques des données qui pourraient transiter par l’intermédiaire de son centre serveur. 
L’utilisateur reconnaît que les données circulant sur Internet ne sont pas protégées notamment contre les détournements éventuels. La présence du logo dressmeup institue une présomption simple de validité. La communication de toute information jugée par l’utilisateur de nature sensible ou confidentielle se fait à ses risques et périls. 
L’utilisateur reconnaît que les données circulant sur Internet peuvent être réglementées en termes d’usage ou être protégées par un droit de propriété. 
L’utilisateur est seul responsable de l’usage des données qu’il consulte, interroge et transfère sur Internet. 
L’utilisateur reconnaît que l’EDITEUR ne dispose d’aucun moyen de contrôle sur le contenu des services accessibles sur Internet</p>

<h4>Droit applicable</h4>

<p>Tant le présent site que les modalités et conditions de son utilisation sont régis par le droit français, quel que soit le lieu d’utilisation. En cas de contestation éventuelle, et après l’échec de toute tentative de recherche d’une solution amiable, les tribunaux français seront seuls compétents pour connaître de ce litige.
Pour toute question relative aux présentes conditions d’utilisation du site, vous pouvez nous écrire à l’adresse suivante : 
contact_do@mail.com </p>
</div>
{% endblock %}
", "terms_of_use/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\terms_of_use\\index.html.twig");
    }
}
