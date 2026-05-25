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

/* front/who_reports/index.html.twig */
class __TwigTemplate_072d83171cc941dfeac61976309918c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/who_reports/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/who_reports/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Rapports d'activité";
        
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
                <section class=\"reports section\">
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
                    <section>
                        <ul class=\"reports__list\">
                            <div class=\"line\"></div>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 22
            yield "                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "path", [], "any", false, false, false, 25)), "html", null, true);
            yield "\">
                                        <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "image", [], "any", false, false, false, 26)), "html", null, true);
            yield "\" alt=\"\">
                                        </a>
                                    <p>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "description", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                            ";
        // line 90
        yield "                            <div class=\"white-line\"></div>
                        </ul>
                    </section>
                    <section>
                        <h2 class=\"section__small-title\">De petits chiffres de grandes actions…</h2>
                        <p>Si les chiffres ne sont pas spectaculaires ils sont toutefois éloquents. Ce sont autant de fils de vie renforcés d’espoir et de joie retrouvé de liens consolidés. </p>
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
        return "front/who_reports/index.html.twig";
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
        return array (  161 => 90,  159 => 32,  149 => 28,  144 => 26,  140 => 25,  135 => 22,  131 => 21,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Rapports d'activité{% endblock %}

{% block body %}
    <main>
        <div class=\"banner-container\">
            <div class=\"banner\"></div>
            <div class=\"banner__pusher\">
                <section class=\"reports section\">
                    <section>
                        <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                        {% if rubricInfo.getGalleryImage is not empty %}
                        <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                        {% endif %}
                        {{ rubricInfo.text|raw }}
                    </section>
                    <section>
                        <ul class=\"reports__list\">
                            <div class=\"line\"></div>
                            {% for report in reports %}
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"{{ asset(report.path) }}\">
                                        <img src=\"{{ asset(report.image) }}\" alt=\"\">
                                        </a>
                                    <p>{{ report.description }}</p>
                                </div>
                            </li>
                            {% endfor %}
                            {# <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"{{ asset('reports/RA_AssociationTAM2022.pdf') }}\">
                                        <img src=\"{{ asset('images/Reports-thumbnails/thumbnail.jpg') }}\" alt=\"\">
                                        </a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li>
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li>
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li>
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li>
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li>
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li>
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li>
                            <li class=\"reports__list-item\">
                                <div class=\"reports__list-bullet\"></div>
                                <div class=\"reports__list-text\">
                                    <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                    <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                                </div>
                            </li> #}
                            <div class=\"white-line\"></div>
                        </ul>
                    </section>
                    <section>
                        <h2 class=\"section__small-title\">De petits chiffres de grandes actions…</h2>
                        <p>Si les chiffres ne sont pas spectaculaires ils sont toutefois éloquents. Ce sont autant de fils de vie renforcés d’espoir et de joie retrouvé de liens consolidés. </p>
                    </section>
                </section>
            </div>
            <div class=\"banner banner--right\"></div>
        </div>
    </main>
{% endblock %}
", "front/who_reports/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/front/who_reports/index.html.twig");
    }
}
