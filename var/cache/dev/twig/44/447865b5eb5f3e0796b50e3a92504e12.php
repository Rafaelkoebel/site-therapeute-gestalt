<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* info_pratique/index.html.twig */
class __TwigTemplate_346e4a236c60b57b0c63c4d4823eb08e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "info_pratique/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Infos pratiques
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<section class=\"page-content\">
\t\t<div class=\"container page-note\">
\t\t\t<h1>Infos pratiques</h1>

\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<strong>
\t\t\t\t\t\tLieu :
\t\t\t\t\t</strong>
\t\t\t\t\t<a href=\"https://www.google.com/maps/place/5+Av.+du+Dr+Jean+Laigret,+41000+Blois/@47.5864382,1.3273941,18.5z/data=!4m6!3m5!1s0x47e4a81d7a59590d:0x720b37fa25555560!8m2!3d47.5866321!4d1.3276837!16s%2Fg%2F11cncl6ft3?authuser=0&entry=ttu&g_ep=EgoyMDI2MDIyNS4wIKXMDSoASAFQAw%3D%3D\" target=\"_blank\" style=\"text-decoration: underline;\">
\t\t\t\t\t\t";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 17, $this->source); })()), "lieu", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<strong>Durée :</strong>
\t\t\t\t\t";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 22, $this->source); })()), "duree", [], "any", false, false, false, 22), "html", null, true);
        yield "</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Tarif :</strong>
\t\t\t\t\t";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 25, $this->source); })()), "tarif", [], "any", false, false, false, 25), "html", null, true);
        yield "
\t\t\t\t\t€</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Rythme :</strong>
\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 29, $this->source); })()), "rythme", [], "any", false, false, false, 29), "html", null, true);
        yield "</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Paiement :</strong>
\t\t\t\t\t";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 32, $this->source); })()), "modalitesPaiement", [], "any", false, false, false, 32), "html", null, true);
        yield "</li>
\t\t\t</ul>

\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "info_pratique/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  125 => 32,  119 => 29,  112 => 25,  106 => 22,  98 => 17,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Infos pratiques
{% endblock %}

{% block body %}
\t<section class=\"page-content\">
\t\t<div class=\"container page-note\">
\t\t\t<h1>Infos pratiques</h1>

\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<strong>
\t\t\t\t\t\tLieu :
\t\t\t\t\t</strong>
\t\t\t\t\t<a href=\"https://www.google.com/maps/place/5+Av.+du+Dr+Jean+Laigret,+41000+Blois/@47.5864382,1.3273941,18.5z/data=!4m6!3m5!1s0x47e4a81d7a59590d:0x720b37fa25555560!8m2!3d47.5866321!4d1.3276837!16s%2Fg%2F11cncl6ft3?authuser=0&entry=ttu&g_ep=EgoyMDI2MDIyNS4wIKXMDSoASAFQAw%3D%3D\" target=\"_blank\" style=\"text-decoration: underline;\">
\t\t\t\t\t\t{{ info.lieu }}</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<strong>Durée :</strong>
\t\t\t\t\t{{ info.duree }}</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Tarif :</strong>
\t\t\t\t\t{{ info.tarif }}
\t\t\t\t\t€</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Rythme :</strong>
\t\t\t\t\t{{ info.rythme }}</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Paiement :</strong>
\t\t\t\t\t{{ info.modalitesPaiement }}</li>
\t\t\t</ul>

\t\t</div>
\t</div>
{% endblock %}
", "info_pratique/index.html.twig", "C:\\xampp\\htdocs\\gestalt_site\\templates\\info_pratique\\index.html.twig");
    }
}
