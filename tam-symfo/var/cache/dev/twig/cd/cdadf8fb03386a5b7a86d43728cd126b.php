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

/* actions_benin/index.html.twig */
class __TwigTemplate_762bc87545a5af36d5edffa105afb830 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actions_benin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actions_benin/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Actions au Bénin";
        
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
            <section class=\"actions section\">
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["beninSections"]) || array_key_exists("beninSections", $context) ? $context["beninSections"] : (function () { throw new RuntimeError('Variable "beninSections" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["beninSection"]) {
            // line 20
            yield "                    <section class=\"subsection\">
                        ";
            // line 21
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "title", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "                            <h2
                                class=\"subsection__title ";
                // line 23
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "aside", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "aside", [], "any", false, false, false, 23))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                                ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "title", [], "any", false, false, false, 24), "html", null, true);
                yield "
                            </h2>
                        ";
            }
            // line 27
            yield "                        <div>
                        ";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "text", [], "any", false, false, false, 28);
            yield "
                        </div>
                        ";
            // line 30
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "aside", [], "any", false, false, false, 30))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "                            <aside class=\"subsection__quote  ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "left", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("left") : (""));
                yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beninSection"], "aside", [], "any", false, false, false, 33), "html", null, true);
                yield "\"</blockquote>
                            </aside>
                        ";
            }
            // line 36
            yield "                    </section>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['beninSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
                ";
        // line 94
        yield "                <!-- <p>En 2025 madame catherine Briand soutenue par le Pr Olivier Bouchaud a pu y démarrer la recherche « Art et résilience » grâce au financement de la FMSH et l’association TAM.</p> -->
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
        return "actions_benin/index.html.twig";
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
        return array (  183 => 94,  180 => 38,  173 => 36,  167 => 33,  161 => 31,  159 => 30,  154 => 28,  151 => 27,  145 => 24,  141 => 23,  138 => 22,  136 => 21,  133 => 20,  129 => 19,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Actions au Bénin{% endblock %}

{% block body %}
    <main>
        <div class=\"banner-container\">
        <div class=\"banner\"></div>
        <div class=\"banner__pusher\">
            <section class=\"actions section\">
                <section>
                    <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                    {% if rubricInfo.getGalleryImage is not empty %}
                    <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                    {% endif %}
                    {{ rubricInfo.text|raw }}
                </section>

                    {% for beninSection in beninSections %}
                    <section class=\"subsection\">
                        {% if beninSection.title is not empty %}
                            <h2
                                class=\"subsection__title {{ beninSection.aside|default ? 'subsection__title-grid' : '' }}\">
                                {{ beninSection.title }}
                            </h2>
                        {% endif %}
                        <div>
                        {{ beninSection.text|raw }}
                        </div>
                        {% if beninSection.aside is not empty %}
                            <aside class=\"subsection__quote  {{ beninSection.left ? 'left' : '' }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"{{ beninSection.aside }}\"</blockquote>
                            </aside>
                        {% endif %}
                    </section>
                    {% endfor %}

                {# <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Pourquoi le Bénin ?</h2>
                    <div>
                        <p class=\"actions__description\">Le Bénin est un territoire riche de savoirs thérapeutiques ancestraux, de traditions artistiques et de spiritualités vivantes.</p>
                        <p>Nos projets s’inscrivent dans la continuité de l’engagement à URACA   (2005- 2025) , association, cofondée par le Dr Moussa Maman Bello, médecin et thérapeute traditionnel. Ce dernier a profondément influencé la philosophie clinique de notre association TAM.</p>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Un premier voyage au Bénin en 2013 :</h2>
                    <div>
                        <p>grâce à la collaboration entre différents partenaires de santé,  Association URACA, Hôpital Avicennes, le service du professeur Olivier Bouchaud, les consultations d’ethno psychiatrie du CMP Ordener et du docteur Moussa Maman Bello, un colloque s’est tenu à Karimama agglomération d'environ 74000 habitants située au Nord Bénin. Son titre <strong>« Stratégies de prise en charge des patients africains de l’Afrique à la France »</strong>. Pour l’équipe de co-thérapeutes de la consultation d’ethno psy, le séjour a permis d’assister aux rituels traditionnels de « couvade ».</p>
                        <p>Ce séjour, a pu mettre en lumière certaines problématiques que l’on peut rencontrer en France lorsque l’on demande à un patient migrant d’être observant. Bien souvent, le fossé est grand, entre médication et compréhension même si la personne est en France depuis longtemps. L’origine du mal a besoin d’être identifié et de s’exprimer par l’intermédiaire de la culture, de se faire connaître au travers d’images qui « parlent » à la personne.</p>
                        <p>Le groupe de co-thérapeute et de médiateurs qui officient lors de ces consultations est contenant et l’alliance thérapeutique se fait « mosso, mosso » ( Petit à petit).</p>
                        <p>Dans ce dispositif les cothérapeutes s’immergent dans ce travail qui demande de lâcher pour un temps les croyances basées sur les savoirs  spécifiques ethno-centrés, de franchir cette frontière et de se laisser porter dans cet entre- deux. Entre la culture et la science, entre l’autre et soi, entre ici et là-bas. ( renvoie vers la consultation d’ethno psy)</p>
                        <p>Ce voyage effectué en Janvier 2013 nous permet d’approfondir ces connaissances, de renforcer ce travail spécifique et d’accompagner les patients atteints de troubles psychiques. Par ailleurs ces personnes ont bien souvent difficilement accès aux soins psychiatriques ou se trouvent face à des soignants qui ne comprennent pas leur mal être et ne peuvent les traiter car ils se sentent démunis.</p>
                        <p>Le second voyage de reconnaissance c’est déroulé au printemps 2024 afin de faire une première évaluation sur la mise en place de futures actions de santé mentale implantées cette fois -ci  à Cotonou.</p>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Recherche « Art et Résilience » et projet universitaire :</h2>
                    <p>Depuis janvier 2025, l’association TAM développe un <strong>axe fort au Bénin</strong>, grâce à la recherche</p>
                    <p><strong>« Art et Résilience », », l'Art au service de l'accompagnement des personnes atteintes du VIH au Bénin, Une démarche holistique et humaniste,</strong> en partenariat avec une artist , un chercheur, une équipe de thérapeutes sur place.</p>
                    <p>Cette recherche est menée par madame Catherine Briand artiste ethno thérapeute avec le soutien du Pr Olivier Bouchaud de l’hôpital Avicenne de Bobigny ( France) et est réalisée en partenariat avec des institutions universitaires, hospitalières et culturelles Béninoises.</p>
                    <p>C’est grâce au financement de la FMSH ( Fondation Maison et Sciences de l’Homme) que ce  projet a vu le jour.</p>
                    <p>D’une durée de deux années, elle accompagne des personnes atteintes du VIH.</p>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Objectifs de la recherche action</h2>
                    <ul>
                        <li>Explorer les liens entre création artistique, soin psychique et résilience.</li>
                        <li>Développer des outils thérapeutiques artistiques transculturels innovants.</li>
                        <li>Favoriser la coopération institutionnelle universitaire et hospitalière.</li>
                    </ul>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Nos lieux d’intervention :</h2>
                    <p>Clinique médicale de l’ONG Racines de Godomey à Cotonou.</p>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Partenariats</h2>
                    <ul>
                        <li>La Fondation Maison et sciences de l’Homme FMSH.</li>
                        <li>Partenariats universitaires Paris 13 France et Abomey Calavi Bénin.</li>
                        <li>Collaborations hospitalières Hôpital Avicenne France et CNHU- HKM Cotonou- Bénin.</li>
                        <li>L’ONG Racines sans les quartiers de Fidjrossé et Godomey à Cotonou.</li>
                        <li>Des Institutions culturelles- La fondation Zinssou et l’institut Français de Cotonou.</li>
                        <li>Réseaux artistiques et thérapeutiques.</li>
                    </ul>
                </section>
                <section>
                    <a class=\"section__link\" href=\"https://www.fmsh.fr/projet/art-et-resilience\">https://www.fmsh.fr/projet/art-et-resilience</a>
                    <br>
                    <a class=\"section__link\" href=\"https://www.canal-u.tv/chaines/fmsh/voix-laureates/art-et-resilience\">https://www.canal-u.tv/chaines/fmsh/voix-laureates/art-et-resilience</a>
                    <p>Références bibliographiques : Renaître en pays Dendi, Couvade et possession. 2017, éditions Grandevaux. Image de couverture</p>
                </section> #}
                <!-- <p>En 2025 madame catherine Briand soutenue par le Pr Olivier Bouchaud a pu y démarrer la recherche « Art et résilience » grâce au financement de la FMSH et l’association TAM.</p> -->
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "actions_benin/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/actions_benin/index.html.twig");
    }
}
