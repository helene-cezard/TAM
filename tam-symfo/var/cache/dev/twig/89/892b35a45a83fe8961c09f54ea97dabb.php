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

/* front/who_team/index.html.twig */
class __TwigTemplate_13dfebfa0d63c6de5e0b76638578bc74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/who_team/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/who_team/index.html.twig"));

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
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new RuntimeError('Variable "teamMembers" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 32
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "role", [], "any", false, false, false, 32) === "board")) {
                // line 33
                yield "                        <div class=\"team__card\">
                        ";
                // line 34
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "image", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "image", [], "any", false, false, false, 35)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 35), "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 37
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/default-user-picture.png"), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 37), "html", null, true);
                    yield "\">
                        ";
                }
                // line 39
                yield "                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 40), "html", null, true);
                yield "</h2>
                                <p class=\"team__card__bio\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "presentation", [], "any", false, false, false, 41), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    ";
            }
            // line 45
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['teamMember'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "
                        ";
        // line 68
        yield "                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les intervenants</h2>
                    <div class=\"team__container\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new RuntimeError('Variable "teamMembers" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 74
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "role", [], "any", false, false, false, 74) === "contributors")) {
                // line 75
                yield "                        <div class=\"team__card\">
                            ";
                // line 76
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "image", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 77
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "image", [], "any", false, false, false, 77)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 77), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 79
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/default-user-picture.png"), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 79), "html", null, true);
                    yield "\">
                            ";
                }
                // line 81
                yield "                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 82), "html", null, true);
                yield "</h2>
                                <p class=\"team__card__bio\">";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "presentation", [], "any", false, false, false, 83), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    ";
            }
            // line 87
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['teamMember'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                        ";
        // line 116
        yield "                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les experts</h2>
                    <div class=\"team__container\">
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teamMembers"]) || array_key_exists("teamMembers", $context) ? $context["teamMembers"] : (function () { throw new RuntimeError('Variable "teamMembers" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamMember"]) {
            // line 122
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "role", [], "any", false, false, false, 122) === "experts")) {
                // line 123
                yield "                        <div class=\"team__card\">
                            ";
                // line 124
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "image", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 125
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "image", [], "any", false, false, false, 125)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 125), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 127
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/default-user-picture.png"), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 127), "html", null, true);
                    yield "\">
                            ";
                }
                // line 129
                yield "                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "name", [], "any", false, false, false, 130), "html", null, true);
                yield "</h2>
                                <p class=\"team__card__bio\">";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamMember"], "presentation", [], "any", false, false, false, 131), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    ";
            }
            // line 135
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['teamMember'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                        ";
        // line 157
        yield "                    </div>
                </section>
                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teamSections"]) || array_key_exists("teamSections", $context) ? $context["teamSections"] : (function () { throw new RuntimeError('Variable "teamSections" does not exist.', 159, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["teamSection"]) {
            // line 160
            yield "
                <section class=\"subsection\">
                    ";
            // line 162
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "title", [], "any", false, false, false, 162))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                        <h2
                            class=\"subsection__title ";
                // line 164
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", false, false, false, 164))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                            ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "title", [], "any", false, false, false, 165), "html", null, true);
                yield "
                        </h2>
                    ";
            }
            // line 168
            yield "                    <div>
                    ";
            // line 169
            yield CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "text", [], "any", false, false, false, 169);
            yield "
                    </div>
                    ";
            // line 171
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", false, false, false, 171))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 172
                yield "                        <aside class=\"subsection__quote ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "left", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("left") : (""));
                yield "\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                            <blockquote>\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["teamSection"], "aside", [], "any", false, false, false, 174), "html", null, true);
                yield "\"</blockquote>
                        </aside>
                    ";
            }
            // line 177
            yield "                </section>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['teamSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "                ";
        // line 208
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
        return "front/who_team/index.html.twig";
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
        return array (  371 => 208,  369 => 180,  361 => 177,  355 => 174,  349 => 172,  347 => 171,  342 => 169,  339 => 168,  333 => 165,  329 => 164,  326 => 163,  324 => 162,  320 => 160,  316 => 159,  312 => 157,  310 => 136,  304 => 135,  297 => 131,  293 => 130,  290 => 129,  282 => 127,  274 => 125,  272 => 124,  269 => 123,  266 => 122,  262 => 121,  255 => 116,  253 => 88,  247 => 87,  240 => 83,  236 => 82,  233 => 81,  225 => 79,  217 => 77,  215 => 76,  212 => 75,  209 => 74,  205 => 73,  198 => 68,  195 => 46,  189 => 45,  182 => 41,  178 => 40,  175 => 39,  167 => 37,  159 => 35,  157 => 34,  154 => 33,  151 => 32,  147 => 31,  134 => 21,  130 => 20,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                    {% for teamMember in teamMembers %}
                    {% if teamMember.role === 'board' %}
                        <div class=\"team__card\">
                        {% if teamMember.image %}
                            <img src=\"{{ asset(teamMember.image) }}\" alt=\"{{ teamMember.name }}\">
                        {% else %}
                            <img src=\"{{ asset('images/team/default-user-picture.png') }}\" alt=\"{{ teamMember.name }}\">
                        {% endif %}
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">{{ teamMember.name }}</h2>
                                <p class=\"team__card__bio\">{{ teamMember.presentation }}</p>
                            </div>
                        </div>
                    {% endif %}
                    {% endfor %}

                        {# <div class=\"team__card\">
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
                        </div> #}
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les intervenants</h2>
                    <div class=\"team__container\">
                    {% for teamMember in teamMembers %}
                    {% if teamMember.role === 'contributors' %}
                        <div class=\"team__card\">
                            {% if teamMember.image %}
                                <img src=\"{{ asset(teamMember.image) }}\" alt=\"{{ teamMember.name }}\">
                            {% else %}
                                <img src=\"{{ asset('images/team/default-user-picture.png') }}\" alt=\"{{ teamMember.name }}\">
                            {% endif %}
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">{{ teamMember.name }}</h2>
                                <p class=\"team__card__bio\">{{ teamMember.presentation }}</p>
                            </div>
                        </div>
                    {% endif %}
                    {% endfor %}
                        {# <div class=\"team__card\">
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
                        </div> #}
                    </div>
                </section>
                <section class=\"subsection\">
                    <h2 class=\"subsection__title\">Les experts</h2>
                    <div class=\"team__container\">
                    {% for teamMember in teamMembers %}
                    {% if teamMember.role === 'experts' %}
                        <div class=\"team__card\">
                            {% if teamMember.image %}
                                <img src=\"{{ asset(teamMember.image) }}\" alt=\"{{ teamMember.name }}\">
                            {% else %}
                                <img src=\"{{ asset('images/team/default-user-picture.png') }}\" alt=\"{{ teamMember.name }}\">
                            {% endif %}
                            <div class=\"team__card__text\">
                                <h2 class=\"team__card__name\">{{ teamMember.name }}</h2>
                                <p class=\"team__card__bio\">{{ teamMember.presentation }}</p>
                            </div>
                        </div>
                    {% endif %}
                    {% endfor %}
                        {# <div class=\"team__card\">
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
                        </div> #}
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
                        <aside class=\"subsection__quote {{ teamSection.left ? 'left' : '' }}\">
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
", "front/who_team/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/front/who_team/index.html.twig");
    }
}
