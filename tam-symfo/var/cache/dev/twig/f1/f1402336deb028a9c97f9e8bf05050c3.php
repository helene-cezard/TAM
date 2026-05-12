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

/* research/index.html.twig */
class __TwigTemplate_6abc409a47db1e03f29630db3a25722b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "research/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "research/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Recherche";
        
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
            <section class=\"research section\">
                <section class=\"research__header subsection\">
                    <h2 class=\"section__title section__side-title\">Recherche & coopération international</h2>
                    <div class=\"research__presentation\">
                        <h3 class=\"section__small-title\">Au Bénin – Soutien de la Recherche « Art & Résilience » et projet universitaire</h3>
                        <p>Depuis 2025, TAM développe un <strong>axe international fort au Bénin</strong>, en soutenant la recherche <strong>« Art et Résilience », L'Art au service de l'accompagnement des personnes atteintes du VIH au Bénin, une démarche holistique et humaniste</strong> menée en partenariat avec un chercheur, une artiste une équipe de thérapeutes, des institutions universitaires, hospitalières et culturelles.</p>
                    </div>
                </section>
                <section class=\"research__benin subsection\">
                    <h3 class=\"section__small-title section__side-title\">Pourquoi le Bénin ?</h3>
                    <div>
                        <p>
                            Le Bénin est un territoire riche de savoirs thérapeutiques ancestraux, de traditions artistiques et de spiritualités vivantes.
                            <br>
                            Ce projet s’inscrit dans la continuité des enseignements du Dr Moussa Maman Bello, un des principaux fondateurs de l'association U.R.A.C.A. en 1985., médecin ethno psychiatre et thérapeute traditionnel. Il y a dirigé des consultations d’ethnomédecine pendant 35 ans. Par sa double position, il nous a éclairé sur les ressorts cachés des comportements et des pensées des patients migrants. <strong>Dr Moussa Maman Bello</strong>, a profondément influencé la philosophie clinique de TAM.
                            <br>
                            <a class=\"section__link\" href=\"https://uraca-basiliade.org/wp-content/uploads/2016/12/Uraca_sida_mythes_realites.pdf\">Communautés africaines et SIDA - Mythes et réalités</a>
                        </p>
                        <a class=\"section__link\" href=\"eulogy.html\">Hommage au Dr Moussa Maman Bello</a>
                    </div>
                </section>
                <section class=\"research__goals subsection\">
                    <h3 class=\"section__small-title section__side-title\">Objectifs de la recherche action</h3>
                    <ul class=\"section__list\">
                        <li>Explorer les liens entre <strong>création artistique, soin psychique et résilience</strong></li>
                        <li>Développer des outils thérapeutiques artistiques transculturels innovants</li>
                        <li>Favoriser la coopération institutionnelle universitaire et hospitalière</li>
                    </ul>
                </section>
                <section class=\"research__places subsection\">
                    <h3 class=\"section__small-title section__side-title\">Nos lieux d’intervention :</h3>
                    <p>Clinique médicale de l’ONG Racines de Godomey à Cotonou.</p>
                </section>
                <section class=\"research__partners subsection\">
                    <h3 class=\"section__small-title section__side-title\">Partenariats</h3>
                    <ul class=\"section__list\">
                        <li>La Fondation Maison et sciences de l’Homme FMSH.</li>
                        <li>dPartenariats universitaires Paris 13 France et Abomey Calavi Bénin.</li>
                        <li>Collaborations hospitalières Hôpital Avicenne France et CNHU- HKM Cotonou- Bénin.</li>
                        <li>L’ONG Racines sans les quartiers de Fidjrossé et Godomey à Cotonou.</li>
                        <li>Des Institutions culturelles- La fondation Zinssou et l’institut Français de Cotonou.</li>
                        <li>Réseaux artistiques et thérapeutiques</li>
                    </ul>
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
        return "research/index.html.twig";
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

{% block title %}Association TAM : Thérapies, Arts & Médiations - Recherche{% endblock %}

{% block body %}
    <main>
      <div class=\"banner-container\">
        <div class=\"banner\"></div>
        <div class=\"banner__pusher\">
            <section class=\"research section\">
                <section class=\"research__header subsection\">
                    <h2 class=\"section__title section__side-title\">Recherche & coopération international</h2>
                    <div class=\"research__presentation\">
                        <h3 class=\"section__small-title\">Au Bénin – Soutien de la Recherche « Art & Résilience » et projet universitaire</h3>
                        <p>Depuis 2025, TAM développe un <strong>axe international fort au Bénin</strong>, en soutenant la recherche <strong>« Art et Résilience », L'Art au service de l'accompagnement des personnes atteintes du VIH au Bénin, une démarche holistique et humaniste</strong> menée en partenariat avec un chercheur, une artiste une équipe de thérapeutes, des institutions universitaires, hospitalières et culturelles.</p>
                    </div>
                </section>
                <section class=\"research__benin subsection\">
                    <h3 class=\"section__small-title section__side-title\">Pourquoi le Bénin ?</h3>
                    <div>
                        <p>
                            Le Bénin est un territoire riche de savoirs thérapeutiques ancestraux, de traditions artistiques et de spiritualités vivantes.
                            <br>
                            Ce projet s’inscrit dans la continuité des enseignements du Dr Moussa Maman Bello, un des principaux fondateurs de l'association U.R.A.C.A. en 1985., médecin ethno psychiatre et thérapeute traditionnel. Il y a dirigé des consultations d’ethnomédecine pendant 35 ans. Par sa double position, il nous a éclairé sur les ressorts cachés des comportements et des pensées des patients migrants. <strong>Dr Moussa Maman Bello</strong>, a profondément influencé la philosophie clinique de TAM.
                            <br>
                            <a class=\"section__link\" href=\"https://uraca-basiliade.org/wp-content/uploads/2016/12/Uraca_sida_mythes_realites.pdf\">Communautés africaines et SIDA - Mythes et réalités</a>
                        </p>
                        <a class=\"section__link\" href=\"eulogy.html\">Hommage au Dr Moussa Maman Bello</a>
                    </div>
                </section>
                <section class=\"research__goals subsection\">
                    <h3 class=\"section__small-title section__side-title\">Objectifs de la recherche action</h3>
                    <ul class=\"section__list\">
                        <li>Explorer les liens entre <strong>création artistique, soin psychique et résilience</strong></li>
                        <li>Développer des outils thérapeutiques artistiques transculturels innovants</li>
                        <li>Favoriser la coopération institutionnelle universitaire et hospitalière</li>
                    </ul>
                </section>
                <section class=\"research__places subsection\">
                    <h3 class=\"section__small-title section__side-title\">Nos lieux d’intervention :</h3>
                    <p>Clinique médicale de l’ONG Racines de Godomey à Cotonou.</p>
                </section>
                <section class=\"research__partners subsection\">
                    <h3 class=\"section__small-title section__side-title\">Partenariats</h3>
                    <ul class=\"section__list\">
                        <li>La Fondation Maison et sciences de l’Homme FMSH.</li>
                        <li>dPartenariats universitaires Paris 13 France et Abomey Calavi Bénin.</li>
                        <li>Collaborations hospitalières Hôpital Avicenne France et CNHU- HKM Cotonou- Bénin.</li>
                        <li>L’ONG Racines sans les quartiers de Fidjrossé et Godomey à Cotonou.</li>
                        <li>Des Institutions culturelles- La fondation Zinssou et l’institut Français de Cotonou.</li>
                        <li>Réseaux artistiques et thérapeutiques</li>
                    </ul>
                </section>
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "research/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/research/index.html.twig");
    }
}
