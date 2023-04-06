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

/* home/modal-home.html.twig */
class __TwigTemplate_e4e27fe505967d436e0b02db0f9a182a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/modal-home.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
                    aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                      <div class=\"modal-content-home\">
  
                          <div class=\"modal-header-home border-bottom-0 text-center\">
                          <button type=\"button\" class=\"btn-close btn-close-modal\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div id=\"modalbackground\" class=\"container\">
                          <div class=\"row\">
                          <div class=\"modal-body col-6\">
                          <h3>OUPS !</h3>
                          <p>Tu n’as pas encore ajouté de vêtements dans ton dressing</p>
                          <button type=\"button\" class=\"btn-dressing btn-secondary\">Aller sur mon dressing</button>
                          </div>
                          <div class=\"modal-footer border-top-0\">
                          </div>
                          </div>
                          </div>
                      </div>
                    </div>
                  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/modal-home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
                    aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                      <div class=\"modal-content-home\">
  
                          <div class=\"modal-header-home border-bottom-0 text-center\">
                          <button type=\"button\" class=\"btn-close btn-close-modal\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div id=\"modalbackground\" class=\"container\">
                          <div class=\"row\">
                          <div class=\"modal-body col-6\">
                          <h3>OUPS !</h3>
                          <p>Tu n’as pas encore ajouté de vêtements dans ton dressing</p>
                          <button type=\"button\" class=\"btn-dressing btn-secondary\">Aller sur mon dressing</button>
                          </div>
                          <div class=\"modal-footer border-top-0\">
                          </div>
                          </div>
                          </div>
                      </div>
                    </div>
                  </div>
", "home/modal-home.html.twig", "C:\\Users\\mart1\\Documents\\GitHub\\dressmeup\\templates\\home\\modal-home.html.twig");
    }
}
