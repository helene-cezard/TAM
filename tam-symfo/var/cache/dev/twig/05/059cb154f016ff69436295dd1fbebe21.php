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
class __TwigTemplate_b6a69d1eaace3438ccf5fe750c95db2b extends Template
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
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Articles</h2>
                    <ul class=\"section__list\">
                        <li>Art et soin AIEP 2010</li>
                        <li>Colloque FFAT 2017 et 19</li>
                        <li>Journal Ivry ma ville</li>
                    </ul>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Vidéos</h2>
                        <ul class=\"resources__videos\">
                            <li>
                                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1vJBUHIuNjQ?si=j8CNEf4QdAYPyNvU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            </li>
                            <li>
                                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4Za_l8DzJ3U?si=p7Sr8W9UOBZe-PX2\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            </li>
                        </ul>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Podcasts</h2>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Galeries photos</h2>
                    <div class=\"resources__gallery\">

                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["galleryImages"]) || array_key_exists("galleryImages", $context) ? $context["galleryImages"] : (function () { throw new RuntimeError('Variable "galleryImages" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["galleryImage"]) {
            // line 45
            yield "
                        <img src=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["galleryImage"], "path", [], "any", false, false, false, 46)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["galleryImage"], "alt", [], "any", false, false, false, 46), "html", null, true);
            yield "\">

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['galleryImage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "
                    </div>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Rapports d’activités</h2>
                    <a class=\"section__link\" href=\"reports.html\">Voir nos rapports d'activité</a>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Supports visuels</h2>
                    <ul>
                        <li class=\"resources__visuals\">
                            Plaquette :
                            <a href=\"../docs/PLAQUETTE_TAM 2023.pdf\">
                                <img src=\"../images/docs-thumbnails/PLAQUETTE_TAM 2023.jpg\" alt=\"\">
                            </a>
                        </li>
                        <li>Mémoires d’histoire</li>
                        <li>Brochure les 10 ans</li>
                        <li>La recherche à l’ONG racines de Cotonou</li>
                    </ul>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Liens</h2>
                    <ul>
                        <li><a class=\"section__link\" href=\"#\">Facebook</a></li>
                        <li><a class=\"section__link\" href=\"#\">LinkedIn</a></li>
                    </ul>
                </section>
                <p>Ces ressources témoignent de notre travail de terrain, de notre démarche clinique et nos recherches.</p>
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
        return array (  172 => 49,  161 => 46,  158 => 45,  154 => 44,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <section>
                    <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                    {% if rubricInfo.getGalleryImage is not empty %}
                    <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                    {% endif %}
                    {{ rubricInfo.text|raw }}
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Articles</h2>
                    <ul class=\"section__list\">
                        <li>Art et soin AIEP 2010</li>
                        <li>Colloque FFAT 2017 et 19</li>
                        <li>Journal Ivry ma ville</li>
                    </ul>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Vidéos</h2>
                        <ul class=\"resources__videos\">
                            <li>
                                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1vJBUHIuNjQ?si=j8CNEf4QdAYPyNvU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            </li>
                            <li>
                                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4Za_l8DzJ3U?si=p7Sr8W9UOBZe-PX2\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                            </li>
                        </ul>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Podcasts</h2>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Galeries photos</h2>
                    <div class=\"resources__gallery\">

                    {% for galleryImage in galleryImages %}

                        <img src=\"{{ asset(galleryImage.path) }}\" alt=\"{{ galleryImage.alt }}\">

                    {% endfor %}

                    </div>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Rapports d’activités</h2>
                    <a class=\"section__link\" href=\"reports.html\">Voir nos rapports d'activité</a>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Supports visuels</h2>
                    <ul>
                        <li class=\"resources__visuals\">
                            Plaquette :
                            <a href=\"../docs/PLAQUETTE_TAM 2023.pdf\">
                                <img src=\"../images/docs-thumbnails/PLAQUETTE_TAM 2023.jpg\" alt=\"\">
                            </a>
                        </li>
                        <li>Mémoires d’histoire</li>
                        <li>Brochure les 10 ans</li>
                        <li>La recherche à l’ONG racines de Cotonou</li>
                    </ul>
                </section>
                <section>
                    <h2 class=\"subsection__title\">Liens</h2>
                    <ul>
                        <li><a class=\"section__link\" href=\"#\">Facebook</a></li>
                        <li><a class=\"section__link\" href=\"#\">LinkedIn</a></li>
                    </ul>
                </section>
                <p>Ces ressources témoignent de notre travail de terrain, de notre démarche clinique et nos recherches.</p>
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "resources/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/resources/index.html.twig");
    }
}
