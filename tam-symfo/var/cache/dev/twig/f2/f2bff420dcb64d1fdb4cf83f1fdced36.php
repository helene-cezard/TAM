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

/* who_team/index.html.twig */
class __TwigTemplate_50e8de42db63a90db5236d46995e5879 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "who_team/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "who_team/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Équipe";
        
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
            <section class=\"team section\">
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
                <section class=\"subsection team__container president\">
                    <h2 class=\"subsection__title\">Président d'honneur</h2>
                    <a class=\"team__card\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eulogy");
        yield "\">
                        <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/Président d'honneur Moussa NB F.jpg"), "html", null, true);
        yield "\" alt=\"Dr Moussa Maman Bello\">
                        <div class=\"team__card__text\">
                            <h2 class=\"team__card__name\">Dr Moussa Maman Bello</h2>
                            <p>Ethno médecin <br> Thérapeute traditionnel</p>
                        </div>
                    </a>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les membres du bureau</h2>
                    <div class=\"team__container\">
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Jean Marc Leblanc</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Elisabeth Collin</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Sonia Ould Ami</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les intervenants</h2>
                    <div class=\"team__container\">
                        <div class=\"team__card\">
                            <img src=\"../images/team/Chargée de mission Catherine NB F.jpg\" alt=\"Catherine Briand\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Catherine Briand</h2>
                                <p>Art-thérapeutes<br>Artiste ethno-psy</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/default-user-picture.png\" alt=\"\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Nom Prénom</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Elisabeth Collin</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Sonia Ould Ami</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les experts</h2>
                    <div class=\"team__container\">
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Jean Marc Leblanc</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Elisabeth Collin</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Sonia Ould Ami</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div>
                </section>
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teamSections"]) || array_key_exists("teamSections", $context) ? $context["teamSections"] : (function () { throw new RuntimeError('Variable "teamSections" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamSection"]) {
            // line 114
            yield "
                <section class=\"subsection\">
                    ";
            // line 116
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "title", [], "any", false, false, false, 116))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                        <h2
                            class=\"subsection__title ";
                // line 118
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", false, false, false, 118))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                            ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "title", [], "any", false, false, false, 119), "html", null, true);
                yield "
                        </h2>
                    ";
            }
            // line 122
            yield "                    <div>
                    ";
            // line 123
            yield CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "text", [], "any", false, false, false, 123);
            yield "
                    </div>
                    ";
            // line 125
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", false, false, false, 125))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "                        <aside class=\"subsection__quote left\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                            <blockquote>\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", false, false, false, 128), "html", null, true);
                yield "\"</blockquote>
                        </aside>
                    ";
            }
            // line 131
            yield "                </section>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['teamSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                ";
        // line 162
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
        return "who_team/index.html.twig";
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
        return array (  282 => 162,  280 => 134,  272 => 131,  266 => 128,  262 => 126,  260 => 125,  255 => 123,  252 => 122,  246 => 119,  242 => 118,  239 => 117,  237 => 116,  233 => 114,  229 => 113,  134 => 21,  130 => 20,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Équipe{% endblock %}

{% block body %}
    <main>
      <div class=\"banner-container\">
        <div class=\"banner\"></div>
        <div class=\"banner__pusher\">
            <section class=\"team section\">
                <section>
                    <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                    {% if rubricInfo.getGalleryImage is not empty %}
                    <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                    {% endif %}
                    {{ rubricInfo.text|raw }}
                </section>
                <section class=\"subsection team__container president\">
                    <h2 class=\"subsection__title\">Président d'honneur</h2>
                    <a class=\"team__card\" href=\"{{ path('app_eulogy') }}\">
                        <img src=\"{{ asset('images/team/Président d\\'honneur Moussa NB F.jpg') }}\" alt=\"Dr Moussa Maman Bello\">
                        <div class=\"team__card__text\">
                            <h2 class=\"team__card__name\">Dr Moussa Maman Bello</h2>
                            <p>Ethno médecin <br> Thérapeute traditionnel</p>
                        </div>
                    </a>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les membres du bureau</h2>
                    <div class=\"team__container\">
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Jean Marc Leblanc</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Elisabeth Collin</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Sonia Ould Ami</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les intervenants</h2>
                    <div class=\"team__container\">
                        <div class=\"team__card\">
                            <img src=\"../images/team/Chargée de mission Catherine NB F.jpg\" alt=\"Catherine Briand\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Catherine Briand</h2>
                                <p>Art-thérapeutes<br>Artiste ethno-psy</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/default-user-picture.png\" alt=\"\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Nom Prénom</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Elisabeth Collin</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Sonia Ould Ami</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les experts</h2>
                    <div class=\"team__container\">
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Jean Marc Leblanc</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Elisabeth Collin</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                        <div class=\"team__card\">
                            <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">Sonia Ould Ami</h2>
                                <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div>
                </section>
                {% for teamSection in teamSections %}

                <section class=\"subsection\">
                    {% if teamSection.title is not empty %}
                        <h2
                            class=\"subsection__title {{ teamSection.aside|default ? 'subsection__title-grid' : '' }}\">
                            {{ teamSection.title }}
                        </h2>
                    {% endif %}
                    <div>
                    {{ teamSection.text|raw }}
                    </div>
                    {% if teamSection.aside is not empty %}
                        <aside class=\"subsection__quote left\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                            <blockquote>\"{{ teamSection.aside }}\"</blockquote>
                        </aside>
                    {% endif %}
                </section>

                {% endfor %}
                {# <section class=\"team__volunteers\">
                    <h2 class=\"section__small-title\">À retrouver à nos côtés dans nos rapports d’activité :</h2>
                    <ul class=\"section__list\">
                        <li><strong>Les stagiaires :</strong> , Anouk, Christine, Danielle, Karine, Léane. Marie, Mélanie.</li>
                        <li><strong>Les jeunes Services civiques :</strong> Romane</li>
                        <li><strong>Les bénévoles :</strong> Anaïs, Arthur, Christine, Diaty, Fatima, Hélène, Marilo, Marie, France, Mathilde, Safi, Youssouf.</li>
                    </ul>
                </section>
                <section class=\"team__parters\">
                    <h2 class=\"section__small-title\">Nos partenariats :</h2>
                    <ul>
                        <li>
                            <strong>Les Institutions :</strong> ARS, Agence Régionale de Santé, DDCS, Direction Départementale de la Cohésion Sociale. Département du Val de Marne Ile de France, Egalités des chances, EPT Grand Orly.-Seine Bièvre.
                        </li>
                        <li>
                            <strong>Les villes :</strong> Antony, Bobigny, Choisy le Roi, Créteil, Ivry sur Seine, Valenton
                        </li>
                        <li>
                            <strong>Les bailleurs sociaux :</strong> ADEF, Coallia, Philia.
                        </li>
                        <li>
                            <strong>Les fondations :</strong> FMS, Fondation Maison et Sciences de l’Homme.
                        </li>
                        <li>
                            <strong>Les associations :</strong> France Alzheimer.
                        </li>
                    </ul>
                </section> #}
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "who_team/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/who_team/index.html.twig");
    }
}
