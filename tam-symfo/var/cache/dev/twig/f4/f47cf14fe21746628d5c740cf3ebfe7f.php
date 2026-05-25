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

/* actions_france/index.html.twig */
class __TwigTemplate_c21a7b53d4856b78f489f3c3c5ed52c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actions_france/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actions_france/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Actions en France";
        
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
                <section class=\"actions__list\">
                    <div class=\"actions__list__header\">
                        <h2 class=\"subsection__title\">Nos principaux dispositifs :</h2>
                        <p>Découvrez nos différents accompagnements développés en partenariats avec les acteurs locaux.</p>
                    </div>

                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 25
            yield "                    ";
            if ($this->env->isDebug()) {
                \Symfony\Component\VarDumper\VarDumper::dump(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "getHtmlId", [], "any", false, false, false, 25));
            }
            // line 26
            yield "                    <div ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "getHtmlId", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("id=") : (""));
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "getHtmlId", [], "any", false, false, false, 26), "html", null, true);
            yield "\" class=\"actions__item subsection\">
                        ";
            // line 27
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 27))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "                            <h3  class=\"actions__title ";
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "aside", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "aside", [], "any", false, false, false, 28))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                                ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 29), "html", null, true);
                yield "
                            </h3>
                        ";
            }
            // line 32
            yield "                        <div>
                        ";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["action"], "text", [], "any", false, false, false, 33);
            yield "
                        </div>
                        ";
            // line 35
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "aside", [], "any", false, false, false, 35))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "                            <aside class=\"subsection__quote ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "left", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("left") : (""));
                yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "aside", [], "any", false, false, false, 38), "html", null, true);
                yield "\"</blockquote>
                            </aside>
                        ";
            }
            // line 41
            yield "                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                    ";
        // line 89
        yield "                </section>

                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["franceSections"]) || array_key_exists("franceSections", $context) ? $context["franceSections"] : (function () { throw new RuntimeError('Variable "franceSections" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["franceSection"]) {
            // line 92
            yield "                    <section class=\"subsection\">
                        ";
            // line 93
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "title", [], "any", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "                            <h2
                                class=\"subsection__title ";
                // line 95
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "aside", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "aside", [], "any", false, false, false, 95))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                                ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "title", [], "any", false, false, false, 96), "html", null, true);
                yield "
                            </h2>
                        ";
            }
            // line 99
            yield "                        <div>
                        ";
            // line 100
            yield CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "text", [], "any", false, false, false, 100);
            yield "
                        </div>
                        ";
            // line 102
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "aside", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "                            <aside class=\"subsection__quote ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "left", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("left") : (""));
                yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["franceSection"], "aside", [], "any", false, false, false, 105), "html", null, true);
                yield "\"</blockquote>
                            </aside>
                        ";
            }
            // line 108
            yield "                    </section>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['franceSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "
                ";
        // line 132
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
        return "actions_france/index.html.twig";
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
        return array (  253 => 132,  250 => 110,  243 => 108,  237 => 105,  231 => 103,  229 => 102,  224 => 100,  221 => 99,  215 => 96,  211 => 95,  208 => 94,  206 => 93,  203 => 92,  199 => 91,  195 => 89,  193 => 44,  185 => 41,  179 => 38,  173 => 36,  171 => 35,  166 => 33,  163 => 32,  157 => 29,  152 => 28,  150 => 27,  143 => 26,  138 => 25,  134 => 24,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Actions en France{% endblock %}

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
                <section class=\"actions__list\">
                    <div class=\"actions__list__header\">
                        <h2 class=\"subsection__title\">Nos principaux dispositifs :</h2>
                        <p>Découvrez nos différents accompagnements développés en partenariats avec les acteurs locaux.</p>
                    </div>

                    {% for action in actions %}
                    {% dump action.getHtmlId %}
                    <div {{ action.getHtmlId ? 'id=' : '' }}\"{{ action.getHtmlId }}\" class=\"actions__item subsection\">
                        {% if action.title is not empty %}
                            <h3  class=\"actions__title {{ action.aside|default ? 'subsection__title-grid' : '' }}\">
                                {{ action.title }}
                            </h3>
                        {% endif %}
                        <div>
                        {{ action.text|raw }}
                        </div>
                        {% if action.aside is not empty %}
                            <aside class=\"subsection__quote {{ action.left ? 'left' : '' }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"{{ action.aside }}\"</blockquote>
                            </aside>
                        {% endif %}
                    </div>

                    {% endfor %}
                    {# <div id=\"soin-psychique\" class=\"actions__item subsection\">
                        <h3  class=\"actions__title subsection__title-grid\">Permanences d’écoute et groupes de parole</h3>
                        <p>
                            Dans les quartiers dits sensibles, notre équipe propose des espaces d’écoute et de parole inspirés de l’ethnopsychiatrie.
                            <br>
                            Ces dispositifs favorisent l’expression des souffrances, la mise en mots de l’histoire personnelle et la restauration du lien social.
                        </p>
                        <p>La parole :</p>
                        <ul class=\"actions__speech__list\">
                            <li>Individuelle</li>
                            <li>En groupe</li>
                        </ul>
                    </div>
                    <div id=\"creation-artistique\" class=\"actions__item subsection\">
                        <h3  class=\"actions__title subsection__title-grid\">Ateliers d’art-thérapie</h3>
                        <div>
                            <p>L’art-thérapie permet une expression non verbale à travers la création à l’aide de médiums artistiques : peinture, modelage, musique, danse, écriture, photographie, tissage etc…</p>
                            <p>La création comme levier devient alors un espace de transformation, de réparation symbolique et de reconstruction singulière. L’art permet de renouer avec le plaisir, la créativité et renforce l’estime de soi.</p>
                            <p>Le processus artistique représente un outil original et porteur, au service de la personne qu’il sollicite sur tous les plans physique, psychique et émotionnel.</p>
                            <p><strong>Les ateliers d’art thérapie se déroulent lors de séances individuelles ou groupales.</strong></p>
                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1vJBUHIuNjQ?si=mAYivXzs8LW3wKBS\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                        <div class=\"subsection__quote\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                            <blocquote>
                            \"La création oblige un être à faire un retour sur lui-même, c’est un pouvoir initiatique, une ouverture au monde qui permet à chacun de d’exprimer « L’indicible »\".
                            </blocquote>
                        </div>

                    </div>
                    <div id=\"transculturalite\" class=\"actions__item subsection\">
                        <h3 class=\"actions__title subsection__title-grid\">Médiation transculturelle</h3>
                        <p>La médiation transculturelle rend possible la rencontre et s’offre comme une passerelle entre les mondes ici et ailleurs. Elle permet de mieux comprendre les blocages psychiques, relationnels et culturels, d’ouvrir des espaces de dialogue afin d’accompagner les personnes vers une prise en charge adaptée.</p>
                    </div>
                    <div class=\"actions__item subsection\">
                        <h3  class=\"actions__title subsection__title-grid\">Sorties culturelles et projets artistiques</h3>
                        <div>
                            <p>Les visites de musées et la mise en place de restitution de projets collectifs, d’expositions, de spectacles favorisent l’ouverture culturelle, la valorisation personnelle et le renforcement du lien social. Initiés par l’association T.A.M aux côtés des équipes de terrain des structures d’accueil.</p>
                            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4Za_l8DzJ3U?si=jAnaefwiEfpGcQNp\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class=\"actions__item subsection\">
                        <h3  class=\"actions__title subsection__title-grid\">Participations aux colloques et aux journées à thèmes</h3>
                        <p>Colloques de URACA et de la FFAT, journée santé mentale à Ville Evrard, Journées migrant hôpital Avicenne, service de psychiatrie des hôpitaux CHU Kremlin Bicêtre, Paul Brousse, Paul Guiraud, Ville Evrard, Réseaux DEPSUD et addictions, RAVMO Villejuif…</p>
                    </div> #}
                </section>

                    {% for franceSection in franceSections %}
                    <section class=\"subsection\">
                        {% if franceSection.title is not empty %}
                            <h2
                                class=\"subsection__title {{ franceSection.aside|default ? 'subsection__title-grid' : '' }}\">
                                {{ franceSection.title }}
                            </h2>
                        {% endif %}
                        <div>
                        {{ franceSection.text|raw }}
                        </div>
                        {% if franceSection.aside is not empty %}
                            <aside class=\"subsection__quote {{ franceSection.left ? 'left' : '' }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"{{ franceSection.aside }}\"</blockquote>
                            </aside>
                        {% endif %}
                    </section>
                    {% endfor %}

                {# <section class=\"actions__places\">
                    <h2 class=\"subsection__title\">Nos lieux d’intervention</h2>
                    <p>Les foyers, résidences sociales, CADA (Centre d’Accueil pour demandeurs d’Asile), maisons de quartiers, centre sociaux, hôpitaux de jour, cliniques, EHPAD et associations.</p>
                </section>
                <section class=\"actions__partners\">
                    <h2 class=\"subsection__title\">Nos partenaires</h2>
                    <p>À retrouver dans <a class=\"section__link\" href=\"reports.html\">les rapports d’activités.</a></p>
                    <ul class=\"actions__partners__list\">
                        <li><strong>Les Institutions</strong> : ARS, L’ Agence Régionale de Santé, DDCS, Direction Départementale de la Cohésion Sociale. Département du Val de Marne Ile de France, Egalités de chances. Grand Orly.-Seine Bièvre.</li>
                        <li><strong>Les villes</strong> : Antony, Bobigny, Choisy le Roi, Créteil, Ivry sur Seine, Valenton, Vitry sur Seine.</li>
                        <li><stong>Les bailleurs sociaux</stong> : ADEF, Coallia, Philia.</li>
                        <li><strong>Les hôpitaux</strong> : Avicenne- Bobigny, Paul Brousse et Paul Guiraud Villejuif, Kremlin Bicêtre, Henri Mondor et la PASS dentaire de Créteil Albert Chenevier Créteil, Charles Foix Ivry sur Seine.</li>
                        <li><strong>Les associations</strong> : URACA/ Basilliade, France Alzheimer ADB, ABEJ Diaconie, l’AFSI d’Ivry sur Seine, Centre d’hébergement d’urgence de La Croix Rouge Française à Fontenay sous-bois, Créations omnivores, Les petits frères des pauvres, Maison Alfort, Solidarité internationale Vitry, La petite main tendue. Instruction et partage Choisy le Roi, Ne rougissez pas, Vie Libre,..</li>
                        <li><strong>Les centres médicalisés et EHPAD</strong> : PMI des Francs-moisin à Saint Denis, EHPAD Amarilys d’Aulnay - sous- bois. La résidence Chanterelle à Choisy le Roi.</li>
                        <li><strong>Accueil de jour GEM</strong> : Social Club Choisy le Roi.</li>
                        <li><strong>Les CADA</strong> : Choisy le Roi et La Hay les Roses.</li>
                        <li><strong>Les centres sociaux et maisons de quartier</strong> : Centre du Noyer doré à Antony, Centre social d’accueil de Bobigny, L’espace Langevin à Choisy le Roi, centre social et culturel des bleuets à Créteil, les Maisons de quartier Monmousseau et Pierre et Marie Curie à Ivry sur Seine</li>
                        <li><strong>Et aussi</strong> : les médecins les assistantes sociales des villes, EDS et CMP de Villeneuve saint Georges, Créteil, Choisy le ROI CCAS de Valenton, CMS d’Ivry sur Seine, le Centre Henri Duchesne de Choisy le Roi, le centre Minkovska à Paris.</li>
                        <li><strong>Les musées</strong> : l’Institut du monde Arabe, le Mac Val, Musées de l’Homme, d’Orsay, du quai Branly et Rodin. La cathédrale Notre Dame de Paris.</li>
                    </ul>
                </section> #}
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "actions_france/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/actions_france/index.html.twig");
    }
}
