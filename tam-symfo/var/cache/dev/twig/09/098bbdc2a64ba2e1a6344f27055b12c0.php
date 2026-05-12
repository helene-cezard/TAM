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

/* who_reports/index.html.twig */
class __TwigTemplate_e349812d8a8dc828fbe5de5283163063 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "who_reports/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "who_reports/index.html.twig"));

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
                    <div class=\"reports__header\">
                        <h2 class=\"section__title\">Des temps forts…</h2>
                        <p>Découvrez nos rapports d'activité annuels pour en savoir plus sur nos actions, nos réalisations et notre impact. Ces rapports détaillent les projets que nous avons menés, les résultats obtenus et les perspectives pour l'avenir. Ils sont une source précieuse d'informations pour nos partenaires, nos donateurs et tous ceux qui souhaitent suivre notre travail de près.</p>
                    </div>
                    <ul class=\"reports__list\">
                        <div class=\"line\"></div>
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
                        </li>
                        <li class=\"reports__list-item\">
                            <div class=\"reports__list-bullet\"></div>
                            <div class=\"reports__list-text\">
                                <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                            </div>
                        </li>
                        <div class=\"white-line\"></div>
                    </ul>
                    <div>
                        <h3 class=\"section__small-title\">De petits chiffres de grandes actions…</h3>
                        <p>Si les chiffres ne sont pas spectaculaires ils sont toutefois éloquents. Ce sont autant de fils de vie renforcés d’espoir et de joie retrouvé de liens consolidés. </p>
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
        return "who_reports/index.html.twig";
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

{% block title %}Association TAM : Thérapies, Arts & Médiations - Rapports d'activité{% endblock %}

{% block body %}
    <main>
        <div class=\"banner-container\">
            <div class=\"banner\"></div>
            <div class=\"banner__pusher\">
                <section class=\"reports section\">
                    <div class=\"reports__header\">
                        <h2 class=\"section__title\">Des temps forts…</h2>
                        <p>Découvrez nos rapports d'activité annuels pour en savoir plus sur nos actions, nos réalisations et notre impact. Ces rapports détaillent les projets que nous avons menés, les résultats obtenus et les perspectives pour l'avenir. Ils sont une source précieuse d'informations pour nos partenaires, nos donateurs et tous ceux qui souhaitent suivre notre travail de près.</p>
                    </div>
                    <ul class=\"reports__list\">
                        <div class=\"line\"></div>
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
                        </li>
                        <li class=\"reports__list-item\">
                            <div class=\"reports__list-bullet\"></div>
                            <div class=\"reports__list-text\">
                                <a href=\"../reports/Rapport d'activité _Association TAM 2022 FINAL signé AH SVC.pdf\"><img src=\"../images/Reports-thumbnails/thumbnail.jpg\" alt=\"\"></a>
                                <p>2011 … première année d’activité… nos actions dans les oyers de Créteil vert de maison et résidence ADEF de Choisy le Roi... Vivre en « marge »  des villes</p>
                            </div>
                        </li>
                        <div class=\"white-line\"></div>
                    </ul>
                    <div>
                        <h3 class=\"section__small-title\">De petits chiffres de grandes actions…</h3>
                        <p>Si les chiffres ne sont pas spectaculaires ils sont toutefois éloquents. Ce sont autant de fils de vie renforcés d’espoir et de joie retrouvé de liens consolidés. </p>
                    </div>
                </section>
            </div>
            <div class=\"banner banner--right\"></div>
        </div>
    </main>
{% endblock %}
", "who_reports/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/who_reports/index.html.twig");
    }
}
