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

/* partials/_footer.html.twig */
class __TwigTemplate_d65f479483197c54ce60fdb8655d178c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        yield "<footer class=\"site-footer\">
\t<div class=\"container\">

\t\t<div
\t\t\tclass=\"footer-content\">

\t\t\t";
        // line 8
        yield "\t\t\t<div class=\"footer-block\">
\t\t\t\t<h3>Thérapeute Gestalt</h3>
\t\t\t\t<p>
\t\t\t\t\tAccompagnement thérapeutique en Gestalt-thérapie<br>
\t\t\t\t\tà
\t\t\t\t\t";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("ville", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 13, $this->source); })()), "Blois")) : ("Blois")), "html", null, true);
        yield "
\t\t\t\t</p>
\t\t\t</div>

\t\t\t";
        // line 18
        yield "\t\t\t<div class=\"footer-block\">
\t\t\t\t<h3>Navigation</h3>
\t\t\t\t<ul class=\"footer-nav\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_pratique");
        yield "\">Infos pratiques</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
        // line 34
        yield "\t\t\t<div class=\"footer-block\">
\t\t\t\t<h3>Contact</h3>
\t\t\t\t<p>
\t\t\t\t\tEmail :
\t\t\t\t\t<a href=\"mailto:sebancamille@gmail.com\">sebancamille@gmail.com</a><br>
\t\t\t\t\t<a href=\"tel:0606723563\">06 61 20 85 21
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"footer-bottom\">
\t\t\t<p>
\t\t\t\t©
\t\t\t\t";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
\t\t\t\t– Thérapeute Gestalt<br>
\t\t\t\t<small>
\t\t\t\t\tSite à visée informative – ne remplace pas un suivi médical
\t\t\t\t</small>
\t\t\t</p>
\t\t</div>

\t</div>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_footer.html.twig";
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
        return array (  110 => 49,  93 => 34,  85 => 28,  79 => 25,  73 => 22,  67 => 18,  60 => 13,  53 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"site-footer\">
\t<div class=\"container\">

\t\t<div
\t\t\tclass=\"footer-content\">

\t\t\t{# Informations #}
\t\t\t<div class=\"footer-block\">
\t\t\t\t<h3>Thérapeute Gestalt</h3>
\t\t\t\t<p>
\t\t\t\t\tAccompagnement thérapeutique en Gestalt-thérapie<br>
\t\t\t\t\tà
\t\t\t\t\t{{ ville|default('Blois') }}
\t\t\t\t</p>
\t\t\t</div>

\t\t\t{# Navigation secondaire #}
\t\t\t<div class=\"footer-block\">
\t\t\t\t<h3>Navigation</h3>
\t\t\t\t<ul class=\"footer-nav\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('home') }}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('info_pratique') }}\">Infos pratiques</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('contact') }}\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t{# Contact #}
\t\t\t<div class=\"footer-block\">
\t\t\t\t<h3>Contact</h3>
\t\t\t\t<p>
\t\t\t\t\tEmail :
\t\t\t\t\t<a href=\"mailto:sebancamille@gmail.com\">sebancamille@gmail.com</a><br>
\t\t\t\t\t<a href=\"tel:0606723563\">06 61 20 85 21
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"footer-bottom\">
\t\t\t<p>
\t\t\t\t©
\t\t\t\t{{ \"now\"|date(\"Y\") }}
\t\t\t\t– Thérapeute Gestalt<br>
\t\t\t\t<small>
\t\t\t\t\tSite à visée informative – ne remplace pas un suivi médical
\t\t\t\t</small>
\t\t\t</p>
\t\t</div>

\t</div>
</footer>
", "partials/_footer.html.twig", "C:\\xampp\\htdocs\\gestalt_site\\templates\\partials\\_footer.html.twig");
    }
}
