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

/* front/who_association/index.html.twig */
class __TwigTemplate_d3d56d9319ab15bfaa7c4d73c767820f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/who_association/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/who_association/index.html.twig"));

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
                <section>
                    <h1 class=\"section__title\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                    ";
        // line 13
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 13, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                    <img  class=\"section__image\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 14, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 14, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 14), "alt", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
                    ";
        }
        // line 16
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 16, $this->source); })()), "text", [], "any", false, false, false, 16);
        yield "
                </section>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["associationSections"]) || array_key_exists("associationSections", $context) ? $context["associationSections"] : (function () { throw new RuntimeError('Variable "associationSections" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["associationSection"]) {
            // line 19
            yield "                <section class=\"subsection\">
                        ";
            // line 20
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "title", [], "any", false, false, false, 20))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "                            <h2
                                class=\"section__title ";
                // line 22
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "aside", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "aside", [], "any", false, false, false, 22))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                                ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "title", [], "any", false, false, false, 23), "html", null, true);
                yield "
                            </h2>
                        ";
            }
            // line 26
            yield "                        <div>
                        ";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "text", [], "any", false, false, false, 27);
            yield "
                        </div>
                        ";
            // line 29
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "aside", [], "any", false, false, false, 29))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "                            <aside class=\"subsection__quote ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "left", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("left") : (""));
                yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["associationSection"], "aside", [], "any", false, false, false, 32), "html", null, true);
                yield "\"</blockquote>
                            </aside>
                        ";
            }
            // line 35
            yield "                    </section>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['associationSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
                ";
        // line 82
        yield "            </section>
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
        return "front/who_association/index.html.twig";
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
        return array (  183 => 82,  180 => 38,  172 => 35,  166 => 32,  160 => 30,  158 => 29,  153 => 27,  150 => 26,  144 => 23,  140 => 22,  137 => 21,  135 => 20,  132 => 19,  128 => 18,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <section>
                    <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                    {% if rubricInfo.getGalleryImage is not empty %}
                    <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                    {% endif %}
                    {{ rubricInfo.text|raw }}
                </section>
                {% for associationSection in associationSections %}
                <section class=\"subsection\">
                        {% if associationSection.title is not empty %}
                            <h2
                                class=\"section__title {{ associationSection.aside|default ? 'subsection__title-grid' : '' }}\">
                                {{ associationSection.title }}
                            </h2>
                        {% endif %}
                        <div>
                        {{ associationSection.text|raw }}
                        </div>
                        {% if associationSection.aside is not empty %}
                            <aside class=\"subsection__quote {{ associationSection.left ? 'left' : '' }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"{{ associationSection.aside }}\"</blockquote>
                            </aside>
                        {% endif %}
                    </section>

                    {% endfor %}

                {# <section class=\"subsection\">
                    <h2 class=\"subsection__title subsection__title-grid\">Notre mission</h2>
                    <div class=\"subsection__quote\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                        <blockquote>\"La création est un acte de résistance et de résilience. Elle permet de transformer la douleur en beauté.\"</blockquote>
                    </div>
                    <p>Inspirée par la rencontre avec Dr Moussa Maman Bello et l’association URACA, TAM s’inscrit dans une démarche ethnopsychiatrique et transculturelle, respectueuse et attentive aux parcours migratoires singuliers, aux héritages culturels, aux histoires familiales et aux systèmes de représentation du monde.</p>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title subsection__title-grid\">L’association TAM œuvre pour</h2>
                    <ul class=\"section__list\">
                        <li>accompagner les personnes en souffrance psychique</li>
                        <li>déployer des pratiques thérapeutiques innovantes par l’art</li>
                        <li>favoriser l’accès au soin des publics vulnérables</li>
                        <li>former les professionnels de santé mentale</li>
                        <li>valoriser les savoirs culturels et thérapeutiques traditionnels</li>
                        <li>développer la recherche et la coopération internationale</li>
                    </ul>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title subsection__title-grid\">Nos valeurs</h2>
                    <ul class=\"section__list\">
                        <li><strong>Création</strong> : l’art comme levier de restauration et de transformation</li>
                        <li><strong>Éthique</strong> : respect, confidentialité, bienveillance, dignité</li>
                        <li><strong>Humanisme</strong> : chaque personne est unique et précieuse</li>
                        <li><strong>Humilité</strong> : écouter, agir</li>
                        <li><strong>Transculturalité</strong> : relier les cultures, favoriser la compréhension mutuelle</li>
                        <li>Refuser toute instrumentalisation</li>
                    </ul>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title subsection__title-grid\">Notre histoire</h2>
                    <div>
                        <p>Fondée en 2010, TAM intervient dans les quartiers prioritaires, auprès de personnes en situation d’exclusion, de précarité, d’isolement et de souffrance psychique.</p>
                        <p>Au fil des années, l’association a développé une expertise reconnue dans les domaines de :</p>
                        <ul class=\"section__list\">
                            <li>l’art-thérapie clinique</li>
                            <li>l’ethnopsychiatrie et la médiation transculturelle</li>
                            <li>l’accompagnement psychologique social et communautaire</li>
                        </ul>
                        <p>Depuis 2025, TAM développe un axe international structurant au Bénin, en soutenant la recherche « Art & Résilience » et propose un ambitieux projet de formation de thérapie par les arts qui s’adresse à des thérapeutes et des universitaires.</p>
                    </div>
                </section> #}
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "front/who_association/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/front/who_association/index.html.twig");
    }
}
