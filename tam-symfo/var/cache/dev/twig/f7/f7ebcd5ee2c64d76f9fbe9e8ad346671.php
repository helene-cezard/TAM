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

/* association/index.html.twig */
class __TwigTemplate_9f447f8a2bdb74bc5082a6660b2a80e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "association/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "association/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - L'association";
        
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
            <section class=\"who section\">
                <section class=\"section__header subsection\">
                    <h2 class=\"section__title section__side-title\">Qui sommes-nous ?</h2>
                    <p>TAM – Thérapies, Arts & Médiations est une association loi 1901 fondée en 2010. Elle est née de la rencontre entre des professionnels du soin, de l’art et du champ social, désireux de proposer des approches thérapeutiques innovantes, sensibles et profondément humaines. Alors que des besoins importants se faisaient sentir afin d’accompagner des migrants qui habitaient des foyers et des résidences sociales, situés dans des quartiers Politiques de la Ville du Val de Marne.</p>
                    <div class=\"section__image section__side left\">
                        <img src=\"../images/sections/who.JPG\" alt=\"Enfants qui peignent en extérieur sous la surveillance d'un adulte\">
                    </div>
                </section>
                <section class=\"mission subsection\">
                    <h3 class=\"section__small-title section__side-title\">Notre mission</h3>
                    <div class=\"section__content\">
                        <p class=\"mission__text\">Inspirée par la rencontre avec Dr Moussa Maman Bello et l’association URACA, TAM s’inscrit dans une démarche ethnopsychiatrique et transculturelle, respectueuse et attentive aux parcours migratoires singuliers, aux héritages culturels, aux histoires familiales et aux systèmes de représentation du monde.</p>
                    </div>
                    <div class=\"section__quote section__side\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                        <blockquote>\"La création est un acte de résistance et de résilience. Elle permet de transformer la douleur en beauté.\"</blockquote>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h3 class=\"section__small-title section__side-title\">L’association TAM œuvre pour</h3>
                    <div class=\"section__content\">
                        <ul class=\"section__list\">
                            <li>accompagner les personnes en souffrance psychique</li>
                            <li>déployer des pratiques thérapeutiques innovantes par l’art</li>
                            <li>favoriser l’accès au soin des publics vulnérables</li>
                            <li>former les professionnels de santé mentale</li>
                            <li>valoriser les savoirs culturels et thérapeutiques traditionnels</li>
                            <li>développer la recherche et la coopération internationale</li>
                        </ul>
                    </div>
                </section>
                <section class=\"values subsection\">
                    <h3 class=\"section__small-title section__side-title\">Nos valeurs</h3>
                    <section class=\"section__content\">
                        <ul class=\"section__list\">
                            <li><strong>Création</strong> : l’art comme levier de restauration et de transformation</li>
                            <li><strong>Éthique</strong> : respect, confidentialité, bienveillance, dignité</li>
                            <li><strong>Humanisme</strong> : chaque personne est unique et précieuse</li>
                            <li><strong>Humilité</strong> : écouter, agir</li>
                            <li><strong>Transculturalité</strong> : relier les cultures, favoriser la compréhension mutuelle</li>
                            <li>Refuser toute instrumentalisation</li>
                        </ul>
                    </section>
                </section>
                <section class=\"history subsection\">
                    <h3 class=\"section__small-title section__side-title\">Notre histoire</h3>
                    <section class=\"section__header\">
                        <p>Fondée en 2010, TAM intervient dans les quartiers prioritaires, auprès de personnes en situation d’exclusion, de précarité, d’isolement et de souffrance psychique.</p>
                        <p>Au fil des années, l’association a développé une expertise reconnue dans les domaines de :</p>
                        <ul class=\"section__list\">
                            <li>l’art-thérapie clinique</li>
                            <li>l’ethnopsychiatrie et la médiation transculturelle</li>
                            <li>l’accompagnement psychologique social et communautaire</li>
                        </ul>
                        <p>Depuis 2025, TAM développe un axe international structurant au Bénin, en soutenant la recherche « Art & Résilience » et propose un ambitieux projet de formation de thérapie par les arts qui s’adresse à des thérapeutes et des universitaires.</p>
                    </section>
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
        return "association/index.html.twig";
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

{% block title %}Association TAM : Thérapies, Arts & Médiations - L'association{% endblock %}

{% block body %}
    <main>
      <div class=\"banner-container\">
        <div class=\"banner\"></div>
        <div class=\"banner__pusher\">
            <section class=\"who section\">
                <section class=\"section__header subsection\">
                    <h2 class=\"section__title section__side-title\">Qui sommes-nous ?</h2>
                    <p>TAM – Thérapies, Arts & Médiations est une association loi 1901 fondée en 2010. Elle est née de la rencontre entre des professionnels du soin, de l’art et du champ social, désireux de proposer des approches thérapeutiques innovantes, sensibles et profondément humaines. Alors que des besoins importants se faisaient sentir afin d’accompagner des migrants qui habitaient des foyers et des résidences sociales, situés dans des quartiers Politiques de la Ville du Val de Marne.</p>
                    <div class=\"section__image section__side left\">
                        <img src=\"../images/sections/who.JPG\" alt=\"Enfants qui peignent en extérieur sous la surveillance d'un adulte\">
                    </div>
                </section>
                <section class=\"mission subsection\">
                    <h3 class=\"section__small-title section__side-title\">Notre mission</h3>
                    <div class=\"section__content\">
                        <p class=\"mission__text\">Inspirée par la rencontre avec Dr Moussa Maman Bello et l’association URACA, TAM s’inscrit dans une démarche ethnopsychiatrique et transculturelle, respectueuse et attentive aux parcours migratoires singuliers, aux héritages culturels, aux histoires familiales et aux systèmes de représentation du monde.</p>
                    </div>
                    <div class=\"section__quote section__side\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                        <blockquote>\"La création est un acte de résistance et de résilience. Elle permet de transformer la douleur en beauté.\"</blockquote>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h3 class=\"section__small-title section__side-title\">L’association TAM œuvre pour</h3>
                    <div class=\"section__content\">
                        <ul class=\"section__list\">
                            <li>accompagner les personnes en souffrance psychique</li>
                            <li>déployer des pratiques thérapeutiques innovantes par l’art</li>
                            <li>favoriser l’accès au soin des publics vulnérables</li>
                            <li>former les professionnels de santé mentale</li>
                            <li>valoriser les savoirs culturels et thérapeutiques traditionnels</li>
                            <li>développer la recherche et la coopération internationale</li>
                        </ul>
                    </div>
                </section>
                <section class=\"values subsection\">
                    <h3 class=\"section__small-title section__side-title\">Nos valeurs</h3>
                    <section class=\"section__content\">
                        <ul class=\"section__list\">
                            <li><strong>Création</strong> : l’art comme levier de restauration et de transformation</li>
                            <li><strong>Éthique</strong> : respect, confidentialité, bienveillance, dignité</li>
                            <li><strong>Humanisme</strong> : chaque personne est unique et précieuse</li>
                            <li><strong>Humilité</strong> : écouter, agir</li>
                            <li><strong>Transculturalité</strong> : relier les cultures, favoriser la compréhension mutuelle</li>
                            <li>Refuser toute instrumentalisation</li>
                        </ul>
                    </section>
                </section>
                <section class=\"history subsection\">
                    <h3 class=\"section__small-title section__side-title\">Notre histoire</h3>
                    <section class=\"section__header\">
                        <p>Fondée en 2010, TAM intervient dans les quartiers prioritaires, auprès de personnes en situation d’exclusion, de précarité, d’isolement et de souffrance psychique.</p>
                        <p>Au fil des années, l’association a développé une expertise reconnue dans les domaines de :</p>
                        <ul class=\"section__list\">
                            <li>l’art-thérapie clinique</li>
                            <li>l’ethnopsychiatrie et la médiation transculturelle</li>
                            <li>l’accompagnement psychologique social et communautaire</li>
                        </ul>
                        <p>Depuis 2025, TAM développe un axe international structurant au Bénin, en soutenant la recherche « Art & Résilience » et propose un ambitieux projet de formation de thérapie par les arts qui s’adresse à des thérapeutes et des universitaires.</p>
                    </section>
                </section>
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "association/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/association/index.html.twig");
    }
}
