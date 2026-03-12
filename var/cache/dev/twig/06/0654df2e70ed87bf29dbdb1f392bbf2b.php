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

/* partials/_header.html.twig */
class __TwigTemplate_606e5b9c640a78e2d841a28fa84a97b6 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        yield "<header class=\"site-header\">
\t<div class=\"container\">

\t\t<div
\t\t\tclass=\"header-inner\">
\t\t\t";
        // line 7
        yield "\t\t\t<div class=\"site-branding\">
\t\t\t\t<a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"site-title\">
\t\t\t\t\tThérapeute Gestalt
\t\t\t\t</a>
\t\t\t</div>

\t\t\t";
        // line 14
        yield "\t\t\t<nav class=\"main-navigation\" aria-label=\"Navigation principale\">
\t\t\t\t<ul class=\"nav-list\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-btn\" href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "titre", [], "any", false, false, false, 19), "html", null, true);
            yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-btn\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_pratique");
        yield "\">
\t\t\t\t\t\t\tInfos pratiques
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-contact\">
\t\t\t\t\t\t<a class=\"nav-btn\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn-contact\">
\t\t\t\t\t\t\tPrendre rendez-vous
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t";
        // line 37
        yield "\t\t\t<button class=\"menu-toggle\" aria-label=\"Ouvrir le menu\" aria-expanded=\"false\">
\t\t\t\t☰
\t\t\t</button>
\t\t</div>

\t</div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_header.html.twig";
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
        return array (  109 => 37,  99 => 29,  91 => 24,  88 => 23,  78 => 19,  74 => 18,  71 => 17,  67 => 16,  63 => 14,  55 => 8,  52 => 7,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"site-header\">
\t<div class=\"container\">

\t\t<div
\t\t\tclass=\"header-inner\">
\t\t\t{# Logo / Nom #}
\t\t\t<div class=\"site-branding\">
\t\t\t\t<a href=\"{{ path('home') }}\" class=\"site-title\">
\t\t\t\t\tThérapeute Gestalt
\t\t\t\t</a>
\t\t\t</div>

\t\t\t{# Navigation principale #}
\t\t\t<nav class=\"main-navigation\" aria-label=\"Navigation principale\">
\t\t\t\t<ul class=\"nav-list\">
\t\t\t\t\t{% for page in pages %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-btn\" href=\"{{ path('page_show', { slug: page.slug }) }}\">
\t\t\t\t\t\t\t\t{{ page.titre }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"nav-btn\" href=\"{{ path('info_pratique') }}\">
\t\t\t\t\t\t\tInfos pratiques
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-contact\">
\t\t\t\t\t\t<a class=\"nav-btn\" href=\"{{ path('contact') }}\" class=\"btn-contact\">
\t\t\t\t\t\t\tPrendre rendez-vous
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t{# Bouton menu mobile #}
\t\t\t<button class=\"menu-toggle\" aria-label=\"Ouvrir le menu\" aria-expanded=\"false\">
\t\t\t\t☰
\t\t\t</button>
\t\t</div>

\t</div>
</header>
", "partials/_header.html.twig", "C:\\xampp\\htdocs\\gestalt_site\\templates\\partials\\_header.html.twig");
    }
}
