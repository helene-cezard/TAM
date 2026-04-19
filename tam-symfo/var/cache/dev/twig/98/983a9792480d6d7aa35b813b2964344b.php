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

/* resources/index.html.twig */
class __TwigTemplate_b01fc673fb6ab51988295782717fed3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resources/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resources/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Ressources";
        
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
            <section class=\"resources section\">
                <section class=\"resources__header\">
                    <h2 class=\"section__title\">Publications, vidéos et outils pédagogiques</h2>
                </section>
                <section class=\"resources__content\">
                    <p>Vous trouverez ici :</p>
                    <ul>
                        <li>Articles :Art et soin AIEP 2010, Colloque FFAT 2017 et 19  et journal Ivry ma ville.</li>
                        <li>Vidéos : <br>
                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1vJBUHIuNjQ?si=j8CNEf4QdAYPyNvU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4Za_l8DzJ3U?si=p7Sr8W9UOBZe-PX2\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            <!-- <a href=\"https://youtu.be/1vJBUHIuNjQ\"><img src=\"https://i2.ytimg.com/vi/1vJBUHIuNjQ/mqdefault.jpg\" alt=\"aperçu video youtube\"></a>
                            <a href=\"https://youtu.be/4Za_l8DzJ3U\"><img src=\"https://i2.ytimg.com/vi/4Za_l8DzJ3U/mqdefault.jpg\" alt=\"aperçu video youtube\"></a> -->
                        </li>
                        <li>Podcasts</li>
                        <li>Galeries photos</li>
                        <li><a class=\"resources__link\" href=\"reports.html\">Rapports d’activités</a></li>
                        <li>Supports visuels : Plaquette, Mémoires d’histoire, Brochure les 10 ans… La recherche à l’ONG racines de Cotonou</li>
                        <li>Liens : <a href=\"#\">Facebook</a> et <a href=\"#\">LinkedIn</a></li>
                    </ul>
                    <p>Ces ressources témoignent de notre travail de terrain, de notre démarche clinique et nos recherches.</p>
                </section>
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
        return "resources/index.html.twig";
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

{% block title %}Association TAM : Thérapies, Arts & Médiations - Ressources{% endblock %}

{% block body %}
    <main>
      <div class=\"banner-container\">
        <div class=\"banner\"></div>
        <div class=\"banner__pusher\">
            <section class=\"resources section\">
                <section class=\"resources__header\">
                    <h2 class=\"section__title\">Publications, vidéos et outils pédagogiques</h2>
                </section>
                <section class=\"resources__content\">
                    <p>Vous trouverez ici :</p>
                    <ul>
                        <li>Articles :Art et soin AIEP 2010, Colloque FFAT 2017 et 19  et journal Ivry ma ville.</li>
                        <li>Vidéos : <br>
                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1vJBUHIuNjQ?si=j8CNEf4QdAYPyNvU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4Za_l8DzJ3U?si=p7Sr8W9UOBZe-PX2\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            <!-- <a href=\"https://youtu.be/1vJBUHIuNjQ\"><img src=\"https://i2.ytimg.com/vi/1vJBUHIuNjQ/mqdefault.jpg\" alt=\"aperçu video youtube\"></a>
                            <a href=\"https://youtu.be/4Za_l8DzJ3U\"><img src=\"https://i2.ytimg.com/vi/4Za_l8DzJ3U/mqdefault.jpg\" alt=\"aperçu video youtube\"></a> -->
                        </li>
                        <li>Podcasts</li>
                        <li>Galeries photos</li>
                        <li><a class=\"resources__link\" href=\"reports.html\">Rapports d’activités</a></li>
                        <li>Supports visuels : Plaquette, Mémoires d’histoire, Brochure les 10 ans… La recherche à l’ONG racines de Cotonou</li>
                        <li>Liens : <a href=\"#\">Facebook</a> et <a href=\"#\">LinkedIn</a></li>
                    </ul>
                    <p>Ces ressources témoignent de notre travail de terrain, de notre démarche clinique et nos recherches.</p>
                </section>
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "resources/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/resources/index.html.twig");
    }
}
