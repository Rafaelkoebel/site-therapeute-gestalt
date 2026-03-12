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

/* partials/_contact_box.html.twig */
class __TwigTemplate_842b809ccfe9d1f6fc3e6f333a8cb890 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_contact_box.html.twig"));

        // line 1
        yield "<div id=\"contact\">
\t<section class=\"contact-box\" aria-labelledby=\"contact-box-title\">
\t\t<div class=\"container\">

\t\t\t<h2 id=\"contact-box-title\" class=\"contact-box-title\">
\t\t\t\tPrendre contact
\t\t\t</h2>

\t\t\t<div class=\"contact-box-actions\">
\t\t\t\t<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"btn-primary\">
\t\t\t\t\tMe contacter
\t\t\t\t</a>
\t\t\t</div>

\t\t</div>
\t</section>
\t";
        // line 18
        yield "\t<div class=\"contact-sticky-mobile\">
\t\t<a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"contact-sticky-btn\">
\t\t\tPrendre rendez-vous
\t\t</a>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_contact_box.html.twig";
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
        return array (  69 => 19,  66 => 18,  56 => 10,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"contact\">
\t<section class=\"contact-box\" aria-labelledby=\"contact-box-title\">
\t\t<div class=\"container\">

\t\t\t<h2 id=\"contact-box-title\" class=\"contact-box-title\">
\t\t\t\tPrendre contact
\t\t\t</h2>

\t\t\t<div class=\"contact-box-actions\">
\t\t\t\t<a href=\"{{ path('contact') }}\" class=\"btn-primary\">
\t\t\t\t\tMe contacter
\t\t\t\t</a>
\t\t\t</div>

\t\t</div>
\t</section>
\t{# Contact sticky mobile #}
\t<div class=\"contact-sticky-mobile\">
\t\t<a href=\"{{ path('contact') }}\" class=\"contact-sticky-btn\">
\t\t\tPrendre rendez-vous
\t\t</a>
\t</div>
</div>
", "partials/_contact_box.html.twig", "C:\\xampp\\htdocs\\gestalt_site\\templates\\partials\\_contact_box.html.twig");
    }
}
