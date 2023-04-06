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

/* privacy/index.html.twig */
class __TwigTemplate_c6a37d8ca4c9be2a73f3036a4c540400 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privacy/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "privacy/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PrivacyController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1><center>Politique de confidentialité</center></h1>

    <p><center>https://www.dressmeup.fr</center></p>

    <h4><center>ARTICLE 1 : PRÉAMBULE</center></h4>

    <p>La présente politique de confidentialité a pour but d’informer les utilisateurs du site : <br>

    • Sur la manière dont sont collectées leurs données personnelles. Sont considérées comme des données personnelles, toute information permettant d’identifier un utilisateur. A ce titre, il peut s’agir : de ses noms et prénoms, de son âge, de son adresse postale ou email, de sa localisation ou encore de son adresse IP (liste non-exhaustive) ; <br>
    • Sur les droits dont ils disposent concernant ces données ; <br>
    • Sur la personne responsable du traitement des données à caractère personnel collectées et traitées ; <br>
    • Sur les destinataires de ces données personnelles ; <br>
    • Sur la politique du site en matière de cookies. <br>
Cette politique complète les mentions légales et les Conditions Générales d’Utilisation consultables par les utilisateurs aux adresses suivantes : <br>
<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal");
        echo "\">Mentions légales</a>
<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms_of_use");
        echo "\">CGU</a></p>

    <h4><center>ARTICLE 2 : PRINCIPES RELATIFS À LA COLLECTE ET AU TRAITEMENT DES DONNÉES PERSONNELLES</center></h4>

    <p>Conformément à l’article 5 du Règlement européen 2016/679, les données à caractère personnel sont : <br>
    • Traitées de manière licite, loyale et transparente au regard de la personne concernée  ; <br>
    • Collectées pour des finalités déterminées (cf. Article 3.1 des présentes), explicites et légitimes, et ne pas être traitées ultérieurement d'une manière incompatible avec ces finalités ; <br>
    • Adéquates, pertinentes et limitées à ce qui est nécessaire au regard des finalités pour lesquelles elles sont traitées ; <br>
    • Exactes et, si nécessaire, tenues à jour. Toutes les mesures raisonnables doivent être prises pour que les données à caractère personnel qui sont inexactes, eu égard aux finalités pour lesquelles elles sont traitées, soient effacées ou rectifiées sans tarder ; <br>
    • Conservées sous une forme permettant l'identification des personnes concernées pendant une durée n'excédant pas celle nécessaire au regard des finalités pour lesquelles elles sont traitées ; <br>
    • Traitées de façon à garantir une sécurité appropriée des données collectées, y compris la protection contre le traitement non autorisé ou illicite et contre la perte, la destruction ou les dégâts d'origine accidentelle, à l'aide de mesures techniques ou organisationnelles appropriées. <br>

    Le traitement n'est licite que si, et dans la mesure où, au moins une des conditions suivantes est remplie : <br>
    • La personne concernée a consenti au traitement de ses données à caractère personnel pour une ou plusieurs finalités spécifiques ; <br>
    • Le traitement est nécessaire à l'exécution d'un contrat auquel la personne concernée est partie ou à l'exécution de mesures précontractuelles prises à la demande de celle-ci ; <br>
    • Le traitement est nécessaire au respect d'une obligation légale à laquelle le responsable du traitement est soumis ; <br>
    • Le traitement est nécessaire à la sauvegarde des intérêts vitaux de la personne concernée ou d'une autre personne physique ; <br>
    • Le traitement est nécessaire à l'exécution d'une mission d'intérêt public ou relevant de l'exercice de l'autorité publique dont est investi le responsable du traitement ; <br>
    • Le traitement est nécessaire aux fins des intérêts légitimes poursuivis par le responsable du traitement ou par un tiers, à moins que ne prévalent les intérêts ou les libertés et droits fondamentaux de la personne concernée qui exigent une protection des données à caractère personnel, notamment lorsque la personne concernée est un enfant.</p>

    <h4><center>ARTICLE 3 : DONNÉES À CARACTÈRE PERSONNEL COLLECTÉES ET TRAITÉES DANS LE CADRE DE LA NAVIGATION SUR LE SITE</center></h4>

    <h5>Article 3.1 : Données collectées</h5>

    <p>Les données personnelles collectées dans le cadre de notre activité sont les suivantes : <br>
[Listez les données collectées lors de l’utilisation du site] 
La collecte et le traitement de ces données répond à la (aux) finalité(s) suivante(s) : <br>
[Préciser la/les raison(s) pour laquelle/lesquelles la collecte de données personnelles est nécessaire dans le cadre de votre activité] 
exemple : gestion de contrat, gestion de l’espace client, suivi de la qualité des services, envoi de newsletter, etc.</p>

    <h5>Article 3.2 : Mode de collecte des données</h5>

    <p>Lorsque vous utilisez notre site, sont automatiquement collectées les données suivantes : <br>
[Liste des données automatiquement collectées lors de la simple visite de l’utilisateur sur le site] <br>
D’autres données personnelles sont collectées lorsque vous effectuez les opérations suivantes sur la plateforme : <br>
[Lister les données personnelles collectées, et préciser la finalité de la collecte] <br>
Elles sont conservées par le responsable du traitement dans des conditions raisonnables de sécurité, pour une durée de : <br>
[Indiquer la durée de conservation prévue] <br>
La société est susceptible de conserver certaines données à caractère personnel au-delà des délais annoncés ci-dessus afin de remplir ses obligations légales ou réglementaires. </p>

    <h5>Article 3.3 : Hébergement des données</h5>

    <p>Le site [nom du site web] est hébergé par : 
[Dénomination sociale de l’entreprise <br>
Adresse du siège social <br>
Contact (adresse email et/ou numéro de téléphone)] <br>

[Dans le cas ou les données personnelles collectées par l’entreprise seraient partagées avec des tiers, insérer une clause “Article 3.4 : Transmission des données à des tiers” : 
“Les données peuvent être transmises à nos partenaires, ci-après énumérés :”] <br>

[Si le site est concerné par l’utilisation de cookies, préciser leur utilisation dans <b>un Article 3.5 : Politique en matière de “cookies”]</b></p>

    <h4><center>ARTICLE 4 : RESPONSABLE DU TRAITEMENT DES DONNÉES ET DÉLÉGUÉ À LA PROTECTION DES DONNÉES<center></h4>

    <h5>Article 4.1 : Le responsable du traitement des données</h5>

    <p>Les données à caractère personnelles sont collectées par [raison ou dénomination sociale de l’entreprise], [forme juridique] au capital de [montant du capital social], dont le numéro d’immatriculation est le [indiquez votre numéro RCS]. <br>
Le responsable du traitement des données à caractère personnel peut être contacté de la manière suivante : <br>
Par courrier à l’adresse : [indiquez l’adresse du siège social] ; <br>
Par téléphone, au [numéro de téléphone] ; <br>
Par mail : [email du responsable du traitement des données].</p>

    <h5>Article 4.2 : Le délégué à la protection des données</h5>

    <p>Le délégué à la protection des données de l’entreprise ou du responsable est : <br>

[Indiquez l’identité, l’adresse, le numéro de téléphone et/ou l’adresse email du DPO] <br>

Si vous estimez, après nous avoir contactés, que vos droits “Informatique et Libertés”, ne sont pas respectés, vous pouvez adresser une information à la CNIL. </p>

    <h4><center>ARTICLE 5 : LES DROITS DE L’UTILISATEUR EN MATIÈRE DE COLLECTE ET DE TRAITEMENT DES DONNÉES</center></h4>

    <p>Tout utilisateur concerné par le traitement de ses données personnelles peut se prévaloir des droits suivants, en application du règlement européen 2016/679 et de la Loi Informatique et Liberté (Loi 78-17 du 6 janvier 1978) : <br>
    • Droit d’accès, de rectification et droit à l’effacement des données (posés respectivement aux articles 15, 16 et 17 du RGPD) ; <br>

    • Droit à la portabilité des données (article 20 du RGPD) ; <br>

    • Droit à la limitation (article 18 du RGPD) et à l’opposition du traitement des données (article 21 du RGPD) ; <br>

    • Droit de ne pas faire l’objet d’une décision fondée exclusivement sur un procédé automatisé ; <br>

    • Droit de déterminer le sort des données après la mort ; <br>

    • Droit de saisir l’autorité de contrôle compétente (article 77 du RGPD). <br>
Pour exercer vos droits, veuillez adresser votre courrier à [Nom et adresse de l’entreprise] ou par mail à [Insérer l’adresse e-mail du Délégué à la protection des données] <br>
Afin que le responsable du traitement des données puisse faire droit à sa demande, l’utilisateur peut être tenu de lui communiquer certaines informations telles que : ses noms et prénoms, son adresse e-mail ainsi que son numéro de compte, d’espace personnel ou d’abonné. <br>
Consultez le site cnil.fr pour plus d’informations sur vos droits. </p>

    <h4><center>ARTICLE 6 : CONDITIONS DE MODIFICATION DE LA POLITIQUE DE CONFIDENTIALITÉ</center></h4>

    <p>L’éditeur du site [Nom du site] se réserve le droit de pouvoir modifier la présente Politique à tout moment afin d’assurer aux utilisateurs du site sa conformité avec le droit en vigueur. <br>
Les éventuelles modifications ne sauraient avoir d’incidence sur les achats antérieurement effectués sur le site, lesquels restent soumis à la Politique en vigueur au moment de l’achat et telle qu’acceptée par l’utilisateur lors de la validation de l’achat. <br>
L’utilisateur est invité à prendre connaissance de cette Politique à chaque fois qu’il utilise nos services, sans qu’il soit nécessaire de l’en prévenir formellement. <br>
La présente politique, éditée le [date de mise en ligne], a été mise à jour le [date de modification de la politique].</p>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "privacy/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  95 => 26,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PrivacyController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1><center>Politique de confidentialité</center></h1>

    <p><center>https://www.dressmeup.fr</center></p>

    <h4><center>ARTICLE 1 : PRÉAMBULE</center></h4>

    <p>La présente politique de confidentialité a pour but d’informer les utilisateurs du site : <br>

    • Sur la manière dont sont collectées leurs données personnelles. Sont considérées comme des données personnelles, toute information permettant d’identifier un utilisateur. A ce titre, il peut s’agir : de ses noms et prénoms, de son âge, de son adresse postale ou email, de sa localisation ou encore de son adresse IP (liste non-exhaustive) ; <br>
    • Sur les droits dont ils disposent concernant ces données ; <br>
    • Sur la personne responsable du traitement des données à caractère personnel collectées et traitées ; <br>
    • Sur les destinataires de ces données personnelles ; <br>
    • Sur la politique du site en matière de cookies. <br>
Cette politique complète les mentions légales et les Conditions Générales d’Utilisation consultables par les utilisateurs aux adresses suivantes : <br>
<a href=\"{{ path('app_legal')}}\">Mentions légales</a>
<a href=\"{{ path('app_terms_of_use')}}\">CGU</a></p>

    <h4><center>ARTICLE 2 : PRINCIPES RELATIFS À LA COLLECTE ET AU TRAITEMENT DES DONNÉES PERSONNELLES</center></h4>

    <p>Conformément à l’article 5 du Règlement européen 2016/679, les données à caractère personnel sont : <br>
    • Traitées de manière licite, loyale et transparente au regard de la personne concernée  ; <br>
    • Collectées pour des finalités déterminées (cf. Article 3.1 des présentes), explicites et légitimes, et ne pas être traitées ultérieurement d'une manière incompatible avec ces finalités ; <br>
    • Adéquates, pertinentes et limitées à ce qui est nécessaire au regard des finalités pour lesquelles elles sont traitées ; <br>
    • Exactes et, si nécessaire, tenues à jour. Toutes les mesures raisonnables doivent être prises pour que les données à caractère personnel qui sont inexactes, eu égard aux finalités pour lesquelles elles sont traitées, soient effacées ou rectifiées sans tarder ; <br>
    • Conservées sous une forme permettant l'identification des personnes concernées pendant une durée n'excédant pas celle nécessaire au regard des finalités pour lesquelles elles sont traitées ; <br>
    • Traitées de façon à garantir une sécurité appropriée des données collectées, y compris la protection contre le traitement non autorisé ou illicite et contre la perte, la destruction ou les dégâts d'origine accidentelle, à l'aide de mesures techniques ou organisationnelles appropriées. <br>

    Le traitement n'est licite que si, et dans la mesure où, au moins une des conditions suivantes est remplie : <br>
    • La personne concernée a consenti au traitement de ses données à caractère personnel pour une ou plusieurs finalités spécifiques ; <br>
    • Le traitement est nécessaire à l'exécution d'un contrat auquel la personne concernée est partie ou à l'exécution de mesures précontractuelles prises à la demande de celle-ci ; <br>
    • Le traitement est nécessaire au respect d'une obligation légale à laquelle le responsable du traitement est soumis ; <br>
    • Le traitement est nécessaire à la sauvegarde des intérêts vitaux de la personne concernée ou d'une autre personne physique ; <br>
    • Le traitement est nécessaire à l'exécution d'une mission d'intérêt public ou relevant de l'exercice de l'autorité publique dont est investi le responsable du traitement ; <br>
    • Le traitement est nécessaire aux fins des intérêts légitimes poursuivis par le responsable du traitement ou par un tiers, à moins que ne prévalent les intérêts ou les libertés et droits fondamentaux de la personne concernée qui exigent une protection des données à caractère personnel, notamment lorsque la personne concernée est un enfant.</p>

    <h4><center>ARTICLE 3 : DONNÉES À CARACTÈRE PERSONNEL COLLECTÉES ET TRAITÉES DANS LE CADRE DE LA NAVIGATION SUR LE SITE</center></h4>

    <h5>Article 3.1 : Données collectées</h5>

    <p>Les données personnelles collectées dans le cadre de notre activité sont les suivantes : <br>
[Listez les données collectées lors de l’utilisation du site] 
La collecte et le traitement de ces données répond à la (aux) finalité(s) suivante(s) : <br>
[Préciser la/les raison(s) pour laquelle/lesquelles la collecte de données personnelles est nécessaire dans le cadre de votre activité] 
exemple : gestion de contrat, gestion de l’espace client, suivi de la qualité des services, envoi de newsletter, etc.</p>

    <h5>Article 3.2 : Mode de collecte des données</h5>

    <p>Lorsque vous utilisez notre site, sont automatiquement collectées les données suivantes : <br>
[Liste des données automatiquement collectées lors de la simple visite de l’utilisateur sur le site] <br>
D’autres données personnelles sont collectées lorsque vous effectuez les opérations suivantes sur la plateforme : <br>
[Lister les données personnelles collectées, et préciser la finalité de la collecte] <br>
Elles sont conservées par le responsable du traitement dans des conditions raisonnables de sécurité, pour une durée de : <br>
[Indiquer la durée de conservation prévue] <br>
La société est susceptible de conserver certaines données à caractère personnel au-delà des délais annoncés ci-dessus afin de remplir ses obligations légales ou réglementaires. </p>

    <h5>Article 3.3 : Hébergement des données</h5>

    <p>Le site [nom du site web] est hébergé par : 
[Dénomination sociale de l’entreprise <br>
Adresse du siège social <br>
Contact (adresse email et/ou numéro de téléphone)] <br>

[Dans le cas ou les données personnelles collectées par l’entreprise seraient partagées avec des tiers, insérer une clause “Article 3.4 : Transmission des données à des tiers” : 
“Les données peuvent être transmises à nos partenaires, ci-après énumérés :”] <br>

[Si le site est concerné par l’utilisation de cookies, préciser leur utilisation dans <b>un Article 3.5 : Politique en matière de “cookies”]</b></p>

    <h4><center>ARTICLE 4 : RESPONSABLE DU TRAITEMENT DES DONNÉES ET DÉLÉGUÉ À LA PROTECTION DES DONNÉES<center></h4>

    <h5>Article 4.1 : Le responsable du traitement des données</h5>

    <p>Les données à caractère personnelles sont collectées par [raison ou dénomination sociale de l’entreprise], [forme juridique] au capital de [montant du capital social], dont le numéro d’immatriculation est le [indiquez votre numéro RCS]. <br>
Le responsable du traitement des données à caractère personnel peut être contacté de la manière suivante : <br>
Par courrier à l’adresse : [indiquez l’adresse du siège social] ; <br>
Par téléphone, au [numéro de téléphone] ; <br>
Par mail : [email du responsable du traitement des données].</p>

    <h5>Article 4.2 : Le délégué à la protection des données</h5>

    <p>Le délégué à la protection des données de l’entreprise ou du responsable est : <br>

[Indiquez l’identité, l’adresse, le numéro de téléphone et/ou l’adresse email du DPO] <br>

Si vous estimez, après nous avoir contactés, que vos droits “Informatique et Libertés”, ne sont pas respectés, vous pouvez adresser une information à la CNIL. </p>

    <h4><center>ARTICLE 5 : LES DROITS DE L’UTILISATEUR EN MATIÈRE DE COLLECTE ET DE TRAITEMENT DES DONNÉES</center></h4>

    <p>Tout utilisateur concerné par le traitement de ses données personnelles peut se prévaloir des droits suivants, en application du règlement européen 2016/679 et de la Loi Informatique et Liberté (Loi 78-17 du 6 janvier 1978) : <br>
    • Droit d’accès, de rectification et droit à l’effacement des données (posés respectivement aux articles 15, 16 et 17 du RGPD) ; <br>

    • Droit à la portabilité des données (article 20 du RGPD) ; <br>

    • Droit à la limitation (article 18 du RGPD) et à l’opposition du traitement des données (article 21 du RGPD) ; <br>

    • Droit de ne pas faire l’objet d’une décision fondée exclusivement sur un procédé automatisé ; <br>

    • Droit de déterminer le sort des données après la mort ; <br>

    • Droit de saisir l’autorité de contrôle compétente (article 77 du RGPD). <br>
Pour exercer vos droits, veuillez adresser votre courrier à [Nom et adresse de l’entreprise] ou par mail à [Insérer l’adresse e-mail du Délégué à la protection des données] <br>
Afin que le responsable du traitement des données puisse faire droit à sa demande, l’utilisateur peut être tenu de lui communiquer certaines informations telles que : ses noms et prénoms, son adresse e-mail ainsi que son numéro de compte, d’espace personnel ou d’abonné. <br>
Consultez le site cnil.fr pour plus d’informations sur vos droits. </p>

    <h4><center>ARTICLE 6 : CONDITIONS DE MODIFICATION DE LA POLITIQUE DE CONFIDENTIALITÉ</center></h4>

    <p>L’éditeur du site [Nom du site] se réserve le droit de pouvoir modifier la présente Politique à tout moment afin d’assurer aux utilisateurs du site sa conformité avec le droit en vigueur. <br>
Les éventuelles modifications ne sauraient avoir d’incidence sur les achats antérieurement effectués sur le site, lesquels restent soumis à la Politique en vigueur au moment de l’achat et telle qu’acceptée par l’utilisateur lors de la validation de l’achat. <br>
L’utilisateur est invité à prendre connaissance de cette Politique à chaque fois qu’il utilise nos services, sans qu’il soit nécessaire de l’en prévenir formellement. <br>
La présente politique, éditée le [date de mise en ligne], a été mise à jour le [date de modification de la politique].</p>

</div>
{% endblock %}
", "privacy/index.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\privacy\\index.html.twig");
    }
}
