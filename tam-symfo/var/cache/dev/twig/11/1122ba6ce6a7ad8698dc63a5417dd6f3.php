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

/* front/main/index.html.twig */
class __TwigTemplate_dd16cb7fc1ef323d8a7c9bf640f30500 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Accueil";
        
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
        <section class=\"hero\">
            <h1 class=\"hero__title\">
                Thérapies, Arts
                <br class=\"line-break\">
                & Médiations
                <br>
                <span class=\"hero__title--small\">T.A.M.</span>
            </h1>
            <p class=\"hero__text\">
                Accompagner par l’art, restaurer le lien, tisser les cultures
            </p>
            <div id=\"carousel\" class=\"carousel\" role=\"group\" aria-label=\"Carrousel décoratif\" aria-roledescription=\"carrousel\" >
                <ul class=\"carousel__slides\" aria-atomic=\"false\" aria-live=\"off\">

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carouselImages"]) || array_key_exists("carouselImages", $context) ? $context["carouselImages"] : (function () { throw new RuntimeError('Variable "carouselImages" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carouselImage"]) {
            // line 22
            yield "                    <li class=\"carousel__slide\" role=\"group\" aria-label=\"1 of 6\" aria-roledescription=\"slide\">
                        <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carouselImage"], "getGalleryId", [], "any", false, false, false, 23), "path", [], "any", false, false, false, 23), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carouselImage"], "getGalleryId", [], "any", false, false, false, 23), "alt", [], "any", false, false, false, 23), "html", null, true);
            yield "\">
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carouselImage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
                    ";
        // line 45
        yield "                </ul>
            </div>
        </section>
        <div class=\"banner-container\">
            <div class=\"banner\"></div>
            <div class=\"banner__pusher\">
                <section class=\"home section\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["homeSections"]) || array_key_exists("homeSections", $context) ? $context["homeSections"] : (function () { throw new RuntimeError('Variable "homeSections" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["homeSection"]) {
            // line 53
            yield "                    <section class=\"subsection\">
                        ";
            // line 54
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "title", [], "any", false, false, false, 54))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "                            <h2
                                class=\"section__title ";
                // line 56
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "aside", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "aside", [], "any", false, false, false, 56))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                                ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "title", [], "any", false, false, false, 57), "html", null, true);
                yield "
                            </h2>
                        ";
            }
            // line 60
            yield "                        <div>
                        ";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "text", [], "any", false, false, false, 61);
            yield "
                        </div>
                        ";
            // line 63
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "aside", [], "any", false, false, false, 63))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                            <aside class=\"subsection__quote ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "leftSide", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("left") : (""));
                yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["homeSection"], "aside", [], "any", false, false, false, 66), "html", null, true);
                yield "\"</blockquote>
                            </aside>
                        ";
            }
            // line 69
            yield "                    </section>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['homeSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                        ";
        // line 86
        yield "
                    <section class=\"home__pilars\">
                        <h2 class=\"section__title\">Trois piliers</h2>
                        <ul class=\"home__pilars__list\">
                            <li class=\"home__pilars__card\">
                                <a  class=\"home__pilars__link\"  href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_france");
        yield "#soin-psychique\">
                                    <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M240-80v-172q-57-52-88.5-121.5T120-520q0-150 105-255t255-105q125 0 221.5 73.5T827-615l52 205q5 19-7 34.5T840-360h-80v120q0 33-23.5 56.5T680-160h-80v80h-80v-160h160v-200h108l-38-155q-23-91-98-148t-172-57q-116 0-198 81t-82 197q0 60 24.5 114t69.5 96l26 24v208h-80Zm254-360Zm-54 80h80l6-50q8-3 14.5-7t11.5-9l46 20 40-68-40-30q2-8 2-16t-2-16l40-30-40-68-46 20q-5-5-11.5-9t-14.5-7l-6-50h-80l-6 50q-8 3-14.5 7t-11.5 9l-46-20-40 68 40 30q-2 8-2 16t2 16l-40 30 40 68 46-20q5 5 11.5 9t14.5 7l6 50Zm-2.5-117.5Q420-495 420-520t17.5-42.5Q455-580 480-580t42.5 17.5Q540-545 540-520t-17.5 42.5Q505-460 480-460t-42.5-17.5Z\"/></svg>
                                    <p>Soin psychique</p>
                                </a>
                            </li>
                            <li class=\"home__pilars__card\">
                                <a class=\"home__pilars__link\" href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_france");
        yield "#creation-artistique\">
                                    <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 32.5-156t88-127Q256-817 330-848.5T488-880q80 0 151 27.5t124.5 76q53.5 48.5 85 115T880-518q0 115-70 176.5T640-280h-74q-9 0-12.5 5t-3.5 11q0 12 15 34.5t15 51.5q0 50-27.5 74T480-80Zm0-400Zm-177 23q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm120-160q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm200 0q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm120 160q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17ZM480-160q9 0 14.5-5t5.5-13q0-14-15-33t-15-57q0-42 29-67t71-25h70q66 0 113-38.5T800-518q0-121-92.5-201.5T488-800q-136 0-232 93t-96 227q0 133 93.5 226.5T480-160Z\"/></svg>
                                    <p>Création artistique</p>
                                </a>
                            </li>
                            <li class=\"home__pilars__card\">
                                <a class=\"home__pilars__link\" href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_france");
        yield "#transculturalite\">
                                    <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-7-.5-14.5T799-507q-5 29-27 48t-52 19h-80q-33 0-56.5-23.5T560-520v-40H400v-80q0-33 23.5-56.5T480-720h40q0-23 12.5-40.5T563-789q-20-5-40.5-8t-42.5-3q-134 0-227 93t-93 227h200q66 0 113 47t47 113v40H400v110q20 5 39.5 7.5T480-160Z\"/></svg>
                                    <p>Transculturalité</p>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class=\"home__axes\">
                        <h2 class=\"section__title\">Deux axes fondateurs</h2>
                        <ul class=\"home__axes__list\">
                            <li class=\"home__axes__card\">
                                <a class=\"home__axes__link\" href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_france");
        yield "\">
                                    En France
                                    <!-- https://flagicons.lipis.dev/ -->
                                    <span class=\"fi fi-fr\"></span>
                                    <p>15 années d’accompagnement clinique et social en banlieue parisienne.</p>
                                </a>
                            </li>
                            <li class=\"home__axes__card\">
                                <a class=\"home__axes__link\" href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_benin");
        yield "\">
                                    Au Bénin
                                    <!-- https://flagicons.lipis.dev/ -->
                                    <span class=\"fi fi-bj\"></span>
                                    <p>Recherche « Art & Résilience » et développement d’une formation universitaire en art-thérapie transculturelle.</p>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class=\"home__counter\">
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">15</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Années d'expérience</p>
                        </div>
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M40-160v-160q0-34 23.5-57t56.5-23h131q20 0 38 10t29 27q29 39 71.5 61t90.5 22q49 0 91.5-22t70.5-61q13-17 30.5-27t36.5-10h131q34 0 57 23t23 57v160H640v-91q-35 25-75.5 38T480-200q-43 0-84-13.5T320-252v92H40Zm440-160q-38 0-72-17.5T351-386q-17-25-42.5-39.5T253-440q22-37 93-58.5T480-520q63 0 134 21.5t93 58.5q-29 0-55 14.5T609-386q-22 32-56 49t-73 17ZM160-440q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T280-560q0 50-34.5 85T160-440Zm640 0q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T920-560q0 50-34.5 85T800-440ZM480-560q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-680q0 50-34.5 85T480-560Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">3000</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Personnes accompagnées</p>
                        </div>
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M160-80q-33 0-56.5-23.5T80-160v-480q0-33 23.5-56.5T160-720h160l160-160 160 160h160q33 0 56.5 23.5T880-640v480q0 33-23.5 56.5T800-80H160Zm0-80h640v-480H160v480Zm80-80h480L570-440 450-280l-90-120-120 160Zm502.5-217.5Q760-475 760-500t-17.5-42.5Q725-560 700-560t-42.5 17.5Q640-525 640-500t17.5 42.5Q675-440 700-440t42.5-17.5ZM404-720h152l-76-76-76 76ZM160-160v-480 480Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">2000</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Ateliers réalisés</p>
                        </div>
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M120-120v-560h240v-80l120-120 120 120v240h240v400H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">10</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Communes couvertes</p>
                        </div>
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
        return "front/main/index.html.twig";
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
        return array (  251 => 122,  240 => 114,  226 => 103,  217 => 97,  208 => 91,  201 => 86,  199 => 72,  191 => 69,  185 => 66,  179 => 64,  177 => 63,  172 => 61,  169 => 60,  163 => 57,  159 => 56,  156 => 55,  154 => 54,  151 => 53,  147 => 52,  138 => 45,  135 => 26,  124 => 23,  121 => 22,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Accueil{% endblock %}

{% block body %}
    <main>
        <section class=\"hero\">
            <h1 class=\"hero__title\">
                Thérapies, Arts
                <br class=\"line-break\">
                & Médiations
                <br>
                <span class=\"hero__title--small\">T.A.M.</span>
            </h1>
            <p class=\"hero__text\">
                Accompagner par l’art, restaurer le lien, tisser les cultures
            </p>
            <div id=\"carousel\" class=\"carousel\" role=\"group\" aria-label=\"Carrousel décoratif\" aria-roledescription=\"carrousel\" >
                <ul class=\"carousel__slides\" aria-atomic=\"false\" aria-live=\"off\">

                {% for carouselImage in carouselImages %}
                    <li class=\"carousel__slide\" role=\"group\" aria-label=\"1 of 6\" aria-roledescription=\"slide\">
                        <img src=\"{{ carouselImage.getGalleryId.path }}\" alt=\"{{ carouselImage.getGalleryId.alt }}\">
                    </li>
                {% endfor %}

                    {# <li class=\"carousel__slide carousel-active\" role=\"group\" aria-label=\"1 of 6\" aria-roledescription=\"slide\">
                        <img src=\"{{ asset('images/carousel/Bandeau mains 2.jpg') }}\" alt=\"mains qui font du collage de papiers colorés\">
                    </li>
                    <li class=\"carousel__slide\" role=\"group\" aria-label=\"2 of 6\" aria-roledescription=\"slide\">
                        <img src=\"{{ asset('images/carousel/bande mains.JPG') }}\" alt=\"collines rocheuses et arborées\">
                    </li>
                    <li class=\"carousel__slide\" role=\"group\" aria-label=\"3 of 6\" aria-roledescription=\"slide\">
                        <img src=\"{{ asset('images/carousel/fierté.JPG') }}\" alt=\"coucher de soleil dans un paysage vallonné\">
                    </li>
                    <li class=\"carousel__slide\" role=\"group\" aria-label=\"4 of 6\" aria-roledescription=\"slide\">
                        <img src=\"{{ asset('images/carousel/sea.jpg') }}\" alt=\"image carousel\">
                    </li>
                    <li class=\"carousel__slide\" role=\"group\" aria-label=\"5 of 6\" aria-roledescription=\"slide\">
                        <img src=\"{{ asset('images/carousel/fshhf.jpeg') }}\" alt=\"image carousel\">
                    </li>
                    <li class=\"carousel__slide\" role=\"group\" aria-label=\"6 of 6\" aria-roledescription=\"slide\">
                        <img src=\"{{ asset('images/carousel/sunset.jpg') }}\" alt=\"image carousel\">
                    </li> #}
                </ul>
            </div>
        </section>
        <div class=\"banner-container\">
            <div class=\"banner\"></div>
            <div class=\"banner__pusher\">
                <section class=\"home section\">
                    {% for homeSection in homeSections %}
                    <section class=\"subsection\">
                        {% if homeSection.title is not empty %}
                            <h2
                                class=\"section__title {{ homeSection.aside|default ? 'subsection__title-grid' : '' }}\">
                                {{ homeSection.title }}
                            </h2>
                        {% endif %}
                        <div>
                        {{ homeSection.text|raw }}
                        </div>
                        {% if homeSection.aside is not empty %}
                            <aside class=\"subsection__quote {{ homeSection.leftSide ? 'left' : '' }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"{{ homeSection.aside }}\"</blockquote>
                            </aside>
                        {% endif %}
                    </section>

                    {% endfor %}
                        {# <h2 class=\"home__title sr-only\">Présentation</h2>
                        <p>
                            L’association TAM – Thérapies, Arts & Médiations est engagée depuis 2010 dans l’accompagnement des personnes en souffrance psychique.
                        </p>
                        <p>
                            À travers la médiation artistique, la clinique transculturelle et l’écoute thérapeutique, nous développons des dispositifs innovants favorisant la restauration du lien à soi, aux autres et au monde.
                        </p>
                        <p>
                            En langue peule, <strong>TAM signifie « tiens avec la main »</strong>.
                        </p>
                        <p>
                            Une image forte qui incarne notre philosophie : avancer ensemble, soutenir, accompagner avec humanité, dans le respect de chaque histoire et de chaque culture.
                        </p>
                        <a class=\"section__link\" href=\"html/association.html\">En savoir plus sur notre association</a> #}

                    <section class=\"home__pilars\">
                        <h2 class=\"section__title\">Trois piliers</h2>
                        <ul class=\"home__pilars__list\">
                            <li class=\"home__pilars__card\">
                                <a  class=\"home__pilars__link\"  href=\"{{ path('app_actions_france') }}#soin-psychique\">
                                    <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M240-80v-172q-57-52-88.5-121.5T120-520q0-150 105-255t255-105q125 0 221.5 73.5T827-615l52 205q5 19-7 34.5T840-360h-80v120q0 33-23.5 56.5T680-160h-80v80h-80v-160h160v-200h108l-38-155q-23-91-98-148t-172-57q-116 0-198 81t-82 197q0 60 24.5 114t69.5 96l26 24v208h-80Zm254-360Zm-54 80h80l6-50q8-3 14.5-7t11.5-9l46 20 40-68-40-30q2-8 2-16t-2-16l40-30-40-68-46 20q-5-5-11.5-9t-14.5-7l-6-50h-80l-6 50q-8 3-14.5 7t-11.5 9l-46-20-40 68 40 30q-2 8-2 16t2 16l-40 30 40 68 46-20q5 5 11.5 9t14.5 7l6 50Zm-2.5-117.5Q420-495 420-520t17.5-42.5Q455-580 480-580t42.5 17.5Q540-545 540-520t-17.5 42.5Q505-460 480-460t-42.5-17.5Z\"/></svg>
                                    <p>Soin psychique</p>
                                </a>
                            </li>
                            <li class=\"home__pilars__card\">
                                <a class=\"home__pilars__link\" href=\"{{ path('app_actions_france') }}#creation-artistique\">
                                    <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 32.5-156t88-127Q256-817 330-848.5T488-880q80 0 151 27.5t124.5 76q53.5 48.5 85 115T880-518q0 115-70 176.5T640-280h-74q-9 0-12.5 5t-3.5 11q0 12 15 34.5t15 51.5q0 50-27.5 74T480-80Zm0-400Zm-177 23q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm120-160q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm200 0q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17Zm120 160q17-17 17-43t-17-43q-17-17-43-17t-43 17q-17 17-17 43t17 43q17 17 43 17t43-17ZM480-160q9 0 14.5-5t5.5-13q0-14-15-33t-15-57q0-42 29-67t71-25h70q66 0 113-38.5T800-518q0-121-92.5-201.5T488-800q-136 0-232 93t-96 227q0 133 93.5 226.5T480-160Z\"/></svg>
                                    <p>Création artistique</p>
                                </a>
                            </li>
                            <li class=\"home__pilars__card\">
                                <a class=\"home__pilars__link\" href=\"{{ path('app_actions_france') }}#transculturalite\">
                                    <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-7-.5-14.5T799-507q-5 29-27 48t-52 19h-80q-33 0-56.5-23.5T560-520v-40H400v-80q0-33 23.5-56.5T480-720h40q0-23 12.5-40.5T563-789q-20-5-40.5-8t-42.5-3q-134 0-227 93t-93 227h200q66 0 113 47t47 113v40H400v110q20 5 39.5 7.5T480-160Z\"/></svg>
                                    <p>Transculturalité</p>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class=\"home__axes\">
                        <h2 class=\"section__title\">Deux axes fondateurs</h2>
                        <ul class=\"home__axes__list\">
                            <li class=\"home__axes__card\">
                                <a class=\"home__axes__link\" href=\"{{ path('app_actions_france') }}\">
                                    En France
                                    <!-- https://flagicons.lipis.dev/ -->
                                    <span class=\"fi fi-fr\"></span>
                                    <p>15 années d’accompagnement clinique et social en banlieue parisienne.</p>
                                </a>
                            </li>
                            <li class=\"home__axes__card\">
                                <a class=\"home__axes__link\" href=\"{{ path('app_actions_benin') }}\">
                                    Au Bénin
                                    <!-- https://flagicons.lipis.dev/ -->
                                    <span class=\"fi fi-bj\"></span>
                                    <p>Recherche « Art & Résilience » et développement d’une formation universitaire en art-thérapie transculturelle.</p>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section class=\"home__counter\">
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">15</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Années d'expérience</p>
                        </div>
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M40-160v-160q0-34 23.5-57t56.5-23h131q20 0 38 10t29 27q29 39 71.5 61t90.5 22q49 0 91.5-22t70.5-61q13-17 30.5-27t36.5-10h131q34 0 57 23t23 57v160H640v-91q-35 25-75.5 38T480-200q-43 0-84-13.5T320-252v92H40Zm440-160q-38 0-72-17.5T351-386q-17-25-42.5-39.5T253-440q22-37 93-58.5T480-520q63 0 134 21.5t93 58.5q-29 0-55 14.5T609-386q-22 32-56 49t-73 17ZM160-440q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T280-560q0 50-34.5 85T160-440Zm640 0q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T920-560q0 50-34.5 85T800-440ZM480-560q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-680q0 50-34.5 85T480-560Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">3000</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Personnes accompagnées</p>
                        </div>
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M160-80q-33 0-56.5-23.5T80-160v-480q0-33 23.5-56.5T160-720h160l160-160 160 160h160q33 0 56.5 23.5T880-640v480q0 33-23.5 56.5T800-80H160Zm0-80h640v-480H160v480Zm80-80h480L570-440 450-280l-90-120-120 160Zm502.5-217.5Q760-475 760-500t-17.5-42.5Q725-560 700-560t-42.5 17.5Q640-525 640-500t17.5 42.5Q675-440 700-440t42.5-17.5ZM404-720h152l-76-76-76 76ZM160-160v-480 480Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">2000</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Ateliers réalisés</p>
                        </div>
                        <div class=\"home__counter__item\">
                            <div class=\"home__counter__icon\">
                                <svg role=\"img\" alt=\"\" xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"M120-120v-560h240v-80l120-120 120 120v240h240v400H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z\"/></svg>
                            </div>
                            <p><span class=\"home__counter__number\">10</span><span class=\"home__counter__plus\">+</span></p>
                            <p class=\"home__counter__text\">Communes couvertes</p>
                        </div>
                    </section>
                </section>
            </div>
            <div class=\"banner banner--right\"></div>
        </div>
    </main>
{% endblock %}
", "front/main/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/front/main/index.html.twig");
    }
}
