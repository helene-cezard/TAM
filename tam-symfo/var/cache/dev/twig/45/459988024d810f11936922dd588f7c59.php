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

/* training/index.html.twig */
class __TwigTemplate_458d8c3c359f4717048eb0281159006c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "training/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Formation";
        
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
                <section class=\"training section\">
                    <section class=\"training__header subsection\">
                        <h2 class=\"section__title section__side-title\">Formation en art-thérapie transculturelle</h2>
                        <div class=\"training__presentation\">
                            <h3 class=\"section__small-title\">Une formation innovante, scientifique et humaniste</h3>
                            <p>Dans le prolongement de son travail clinique en s’appuyant sur la recherche <strong>« art & résilience »</strong>, L'Art au service de l'accompagnement des personnes atteintes du VIH au Bénin, TAM Internationale développe un programme de formation universitaire en thérapie par les arts, à destination des professionnels de la santé mentale au Bénin.</p>
                            <a class=\"training__link\" href=\"https://www.fmsh.fr/parutions/lart-au-service-de-laccompagnement-des-personnes-atteintes-du-vih-au-benin\">L’Art au service de l’accompagnement des personnes atteintes du VIH au Bénin</a>
                            <ul class=\"section__list\">
                                <li>Des partenariats universitaires Paris 13 France et Abomey Calavi Bénin.</li>
                                <li>Des collaborations hospitalières Hôpital Avicenne France et CNHU- HKM Cotonou- Bénin.</li>
                                <li>Des réseaux cliniques et artistiques, en lien avec le SFAT et l’école Puzzle, d’art-thérapie pluriexpressionnelle de Lille, le MAC VAL de Vitry sur Seine France et la Fondation Zinsou Cotonou et Ouidah Bénin.</li>
                            </ul>
                        </div>
                        <div class=\"section__image section__side left\">
                            <img src=\"../images/sections/patchwork.JPG\" alt=\"Personnes\">
                        </div>
                    </section>
                    <section class=\"training__experts\">
                        <h3 class=\"section__small-title\">Nos Formateurs EXPERTS :</h3>
                        <p>Des liens avec des Thérapeutes et artistes internationaux –Geneviève Bartoli, Catherine Briand, Irina Katz Mazilu, Jolanta Wilczek Pauwels, Francis Debrabandère, Etienne Kouadio et  Louis Oké Agbo.</p>
                    </section>
                    <section class=\"training__audience\">
                        <h3 class=\"section__small-title\">Public concerné</h3>
                        <ul class=\"section__list\">
                            <li>Psychiatres</li>
                            <li>Psychologues</li>
                            <li>Psychothérapeutes</li>
                            <li>Art-thérapeutes</li>
                            <li>Universitaires</li>
                            <li>Chefs de service hospitaliers</li>
                        </ul>
                    </section>
                    <section class=\"training__goals\">
                        <h3 class=\"section__small-title\">Objectifs pédagogiques</h3>
                        <p>Former des praticiens Béninois, experts capables de :</p>
                        <ul class=\"section__list\">
                            <li>Utiliser l’art comme médiation thérapeutique.</li>
                            <li>Intégrer les dimensions culturelles et transculturelles.</li>
                            <li>Développer une posture clinique éthique.</li>
                            <li>Transmettre ces savoirs à leur tour dans un cadre universitaire.</li>
                            <li>Construire des ponts entre clinique occidentale et connaissances traditionnelles africaines.</li>
                        </ul>
                    </section>
                    <section class=\"training__axes\">
                        <h3 class=\"section__small-title\">Axes de formation</h3>
                        <ul class=\"section__list\">
                            <li>Art-thérapie clinique</li>
                            <li>Psychiatrie transculturelle</li>
                            <li>Ethnopsychiatrie</li>
                            <li>Médiations artistiques</li>
                            <li>Savoirs thérapeutiques traditionnels</li>
                            <li>Dispositifs communautaires</li>
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
        return "training/index.html.twig";
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

{% block title %}Association TAM : Thérapies, Arts & Médiations - Formation{% endblock %}

{% block body %}
    <main>
        <div class=\"banner-container\">
            <div class=\"banner\"></div>
            <div class=\"banner__pusher\">
                <section class=\"training section\">
                    <section class=\"training__header subsection\">
                        <h2 class=\"section__title section__side-title\">Formation en art-thérapie transculturelle</h2>
                        <div class=\"training__presentation\">
                            <h3 class=\"section__small-title\">Une formation innovante, scientifique et humaniste</h3>
                            <p>Dans le prolongement de son travail clinique en s’appuyant sur la recherche <strong>« art & résilience »</strong>, L'Art au service de l'accompagnement des personnes atteintes du VIH au Bénin, TAM Internationale développe un programme de formation universitaire en thérapie par les arts, à destination des professionnels de la santé mentale au Bénin.</p>
                            <a class=\"training__link\" href=\"https://www.fmsh.fr/parutions/lart-au-service-de-laccompagnement-des-personnes-atteintes-du-vih-au-benin\">L’Art au service de l’accompagnement des personnes atteintes du VIH au Bénin</a>
                            <ul class=\"section__list\">
                                <li>Des partenariats universitaires Paris 13 France et Abomey Calavi Bénin.</li>
                                <li>Des collaborations hospitalières Hôpital Avicenne France et CNHU- HKM Cotonou- Bénin.</li>
                                <li>Des réseaux cliniques et artistiques, en lien avec le SFAT et l’école Puzzle, d’art-thérapie pluriexpressionnelle de Lille, le MAC VAL de Vitry sur Seine France et la Fondation Zinsou Cotonou et Ouidah Bénin.</li>
                            </ul>
                        </div>
                        <div class=\"section__image section__side left\">
                            <img src=\"../images/sections/patchwork.JPG\" alt=\"Personnes\">
                        </div>
                    </section>
                    <section class=\"training__experts\">
                        <h3 class=\"section__small-title\">Nos Formateurs EXPERTS :</h3>
                        <p>Des liens avec des Thérapeutes et artistes internationaux –Geneviève Bartoli, Catherine Briand, Irina Katz Mazilu, Jolanta Wilczek Pauwels, Francis Debrabandère, Etienne Kouadio et  Louis Oké Agbo.</p>
                    </section>
                    <section class=\"training__audience\">
                        <h3 class=\"section__small-title\">Public concerné</h3>
                        <ul class=\"section__list\">
                            <li>Psychiatres</li>
                            <li>Psychologues</li>
                            <li>Psychothérapeutes</li>
                            <li>Art-thérapeutes</li>
                            <li>Universitaires</li>
                            <li>Chefs de service hospitaliers</li>
                        </ul>
                    </section>
                    <section class=\"training__goals\">
                        <h3 class=\"section__small-title\">Objectifs pédagogiques</h3>
                        <p>Former des praticiens Béninois, experts capables de :</p>
                        <ul class=\"section__list\">
                            <li>Utiliser l’art comme médiation thérapeutique.</li>
                            <li>Intégrer les dimensions culturelles et transculturelles.</li>
                            <li>Développer une posture clinique éthique.</li>
                            <li>Transmettre ces savoirs à leur tour dans un cadre universitaire.</li>
                            <li>Construire des ponts entre clinique occidentale et connaissances traditionnelles africaines.</li>
                        </ul>
                    </section>
                    <section class=\"training__axes\">
                        <h3 class=\"section__small-title\">Axes de formation</h3>
                        <ul class=\"section__list\">
                            <li>Art-thérapie clinique</li>
                            <li>Psychiatrie transculturelle</li>
                            <li>Ethnopsychiatrie</li>
                            <li>Médiations artistiques</li>
                            <li>Savoirs thérapeutiques traditionnels</li>
                            <li>Dispositifs communautaires</li>
                        </ul>
                    </section>
                </section>
            </div>
            <div class=\"banner banner--right\"></div>
        </div>
    </main>
{% endblock %}
", "training/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/training/index.html.twig");
    }
}
