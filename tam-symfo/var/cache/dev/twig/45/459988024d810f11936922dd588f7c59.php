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
                <section class=\"section\">
                    <section>
                        <h1 class=\"section__title\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                        ";
        // line 13
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 13, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                        <img  class=\"section__image\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 14, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 14, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 14), "alt", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
                        ";
        }
        // line 16
        yield "                        ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 16, $this->source); })()), "text", [], "any", false, false, false, 16);
        yield "
                    </section>

                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trainingSections"]) || array_key_exists("trainingSections", $context) ? $context["trainingSections"] : (function () { throw new RuntimeError('Variable "trainingSections" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trainingSection"]) {
            // line 20
            yield "                    <section class=\"subsection\">
                        ";
            // line 21
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trainingSection"], "title", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "                            <h2
                                class=\"subsection__title ";
                // line 23
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["trainingSection"], "aside", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trainingSection"], "aside", [], "any", false, false, false, 23))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                                ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainingSection"], "title", [], "any", false, false, false, 24), "html", null, true);
                yield "
                            </h2>
                        ";
            }
            // line 27
            yield "                        <div>
                        ";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["trainingSection"], "text", [], "any", false, false, false, 28);
            yield "
                        </div>
                        ";
            // line 30
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trainingSection"], "aside", [], "any", false, false, false, 30))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "                            <aside class=\"subsection__quote left\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainingSection"], "aside", [], "any", false, false, false, 33), "html", null, true);
                yield "\"</blockquote>
                            </aside>
                        ";
            }
            // line 36
            yield "                    </section>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trainingSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
                    ";
        // line 91
        yield "                </section>
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
        return array (  182 => 91,  179 => 39,  171 => 36,  165 => 33,  161 => 31,  159 => 30,  154 => 28,  151 => 27,  145 => 24,  141 => 23,  138 => 22,  136 => 21,  133 => 20,  129 => 19,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <section class=\"section\">
                    <section>
                        <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                        {% if rubricInfo.getGalleryImage is not empty %}
                        <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                        {% endif %}
                        {{ rubricInfo.text|raw }}
                    </section>

                    {% for trainingSection in trainingSections %}
                    <section class=\"subsection\">
                        {% if trainingSection.title is not empty %}
                            <h2
                                class=\"subsection__title {{ trainingSection.aside|default ? 'subsection__title-grid' : '' }}\">
                                {{ trainingSection.title }}
                            </h2>
                        {% endif %}
                        <div>
                        {{ trainingSection.text|raw }}
                        </div>
                        {% if trainingSection.aside is not empty %}
                            <aside class=\"subsection__quote left\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"{{ trainingSection.aside }}\"</blockquote>
                            </aside>
                        {% endif %}
                    </section>

                    {% endfor %}

                    {# <section class=\"subsection\">
                        <h2 class=\"subsection__title\">Une formation innovante, scientifique et humaniste</h2>
                        <div class=\"subsection__content\">
                            <p>Dans le prolongement de son travail clinique en s’appuyant sur la recherche <strong>« art & résilience »</strong>, L'Art au service de l'accompagnement des personnes atteintes du VIH au Bénin, TAM Internationale développe un programme de formation universitaire en thérapie par les arts, à destination des professionnels de la santé mentale au Bénin.</p>
                            <a class=\"training__link\" href=\"https://www.fmsh.fr/parutions/lart-au-service-de-laccompagnement-des-personnes-atteintes-du-vih-au-benin\">L’Art au service de l’accompagnement des personnes atteintes du VIH au Bénin</a>
                            <ul class=\"section__list\">
                                <li>Des partenariats universitaires Paris 13 France et Abomey Calavi Bénin.</li>
                                <li>Des collaborations hospitalières Hôpital Avicenne France et CNHU- HKM Cotonou- Bénin.</li>
                                <li>Des réseaux cliniques et artistiques, en lien avec le SFAT et l’école Puzzle, d’art-thérapie pluriexpressionnelle de Lille, le MAC VAL de Vitry sur Seine France et la Fondation Zinsou Cotonou et Ouidah Bénin.</li>
                            </ul>
                        </div>
                    </section>
                    <section class=\"subsection\">
                        <h2 class=\"subsection__title\">Nos Formateurs EXPERTS :</h2>
                        <p>Des liens avec des Thérapeutes et artistes internationaux –Geneviève Bartoli, Catherine Briand, Irina Katz Mazilu, Jolanta Wilczek Pauwels, Francis Debrabandère, Etienne Kouadio et  Louis Oké Agbo.</p>
                    </section>
                    <section class=\"subsection\">
                        <h2 class=\"subsection__title\">Public concerné</h2>
                        <ul class=\"section__list\">
                            <li>Psychiatres</li>
                            <li>Psychologues</li>
                            <li>Psychothérapeutes</li>
                            <li>Art-thérapeutes</li>
                            <li>Universitaires</li>
                            <li>Chefs de service hospitaliers</li>
                        </ul>
                    </section>
                    <section class=\"subsection\">
                        <h2 class=\"subsection__title\">Objectifs pédagogiques</h2>
                        <div>
                            <p>Former des praticiens Béninois, experts capables de :</p>
                            <ul class=\"section__list\">
                                <li>Utiliser l’art comme médiation thérapeutique.</li>
                                <li>Intégrer les dimensions culturelles et transculturelles.</li>
                                <li>Développer une posture clinique éthique.</li>
                                <li>Transmettre ces savoirs à leur tour dans un cadre universitaire.</li>
                                <li>Construire des ponts entre clinique occidentale et connaissances traditionnelles africaines.</li>
                            </ul>
                        </div>
                    </section>
                    <section class=\"subsection\">
                        <h2 class=\"subsection__title\">Axes de formation</h2>
                        <ul class=\"section__list\">
                            <li>Art-thérapie clinique</li>
                            <li>Psychiatrie transculturelle</li>
                            <li>Ethnopsychiatrie</li>
                            <li>Médiations artistiques</li>
                            <li>Savoirs thérapeutiques traditionnels</li>
                            <li>Dispositifs communautaires</li>
                        </ul>
                    </section> #}
                </section>
            </div>
            <div class=\"banner banner--right\"></div>
        </div>
    </main>
{% endblock %}
", "training/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/training/index.html.twig");
    }
}
