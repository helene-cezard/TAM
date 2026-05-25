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

/* support/index.html.twig */
class __TwigTemplate_1dfcd499dae0047cbf50c0e280aa6beb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "support/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "support/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Association TAM : Thérapies, Arts & Médiations - Nous soutenir";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <main>
        <div class=\"banner-container\">
            <div class=\"banner\"></div>
            <div class=\"banner__pusher\">
                <section class=\"support section\">
                    <div class=\"support__header\">
                        <h2 class=\"section__title\">Nous soutenir</h2>
                    </div>
                    <div class=\"support__content\">
                        <h3 class=\"section__small-title\">Soutenir TAM, c’est agir concrètement pour la santé mentale.</h3>
                        <p>Votre soutien permet :</p>
                        <ul class=\"section__list\">
                            <li>La prise en charge thérapeutique de personnes vulnérables</li>
                            <li>La formation de professionnels</li>
                            <li>Le développement et le soutien de projets locaux</li>
                            <li>La recherche et la coopération internationale</li>
                        </ul>
                    </div>
                    <div class=\"support__links\">
                        <a class=\"section__link\" href=\"\">Faire un don</a>
                        <a class=\"section__link\" href=\"\">Devenir partenaire</a>
                        <a class=\"section__link\" href=\"\">Soutenir nos projets</a>
                    </div>
                </section>
            </div>
            <div class=\"banner banner--right\"></div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "support/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Nous soutenir{% endblock %}

{% block body %}
    <main>
        <div class=\"banner-container\">
            <div class=\"banner\"></div>
            <div class=\"banner__pusher\">
                <section class=\"support section\">
                    <div class=\"support__header\">
                        <h2 class=\"section__title\">Nous soutenir</h2>
                    </div>
                    <div class=\"support__content\">
                        <h3 class=\"section__small-title\">Soutenir TAM, c’est agir concrètement pour la santé mentale.</h3>
                        <p>Votre soutien permet :</p>
                        <ul class=\"section__list\">
                            <li>La prise en charge thérapeutique de personnes vulnérables</li>
                            <li>La formation de professionnels</li>
                            <li>Le développement et le soutien de projets locaux</li>
                            <li>La recherche et la coopération internationale</li>
                        </ul>
                    </div>
                    <div class=\"support__links\">
                        <a class=\"section__link\" href=\"\">Faire un don</a>
                        <a class=\"section__link\" href=\"\">Devenir partenaire</a>
                        <a class=\"section__link\" href=\"\">Soutenir nos projets</a>
                    </div>
                </section>
            </div>
            <div class=\"banner banner--right\"></div>
        </div>
    </main>
{% endblock %}
", "support/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/support/index.html.twig");
    }
}
