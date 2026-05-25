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

/* contact/index.html.twig */
class __TwigTemplate_6c6c9556ce802ac90714bd2bb97bc67f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Contact";
        
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
            <section class=\"contact section\">
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
                <section class=\"contact__info\">
                ";
        if ($this->env->isDebug()) {
            // line 19
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 19, $this->source); })()));
        }
        // line 20
        yield "                    <div>
                        Mail : ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 21, $this->source); })()), "getEMail", [], "any", false, false, false, 21), "html", null, true);
        yield "<br>
                        Téléphone : <a href=\"tel:";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 22, $this->source); })()), "getPhone", [], "any", false, false, false, 22), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 22, $this->source); })()), "getPhone", [], "any", false, false, false, 22), "html", null, true);
        yield "</a><br>
                        Adresse : <a href=\"https://www.google.com/maps?q=";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 23, $this->source); })()), "getStreet", [], "any", false, false, false, 23), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 23, $this->source); })()), "getPostalCode", [], "any", false, false, false, 23), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 23, $this->source); })()), "getCity", [], "any", false, false, false, 23), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 23, $this->source); })()), "getStreet", [], "any", false, false, false, 23), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 23, $this->source); })()), "getPostalCode", [], "any", false, false, false, 23), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 23, $this->source); })()), "getCity", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>
                    </div>
                    <iframe src=\"https://www.google.com/maps?q=";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 25, $this->source); })()), "getStreet", [], "any", false, false, false, 25), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 25, $this->source); })()), "getPostalCode", [], "any", false, false, false, 25), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactInfo"]) || array_key_exists("contactInfo", $context) ? $context["contactInfo"] : (function () { throw new RuntimeError('Variable "contactInfo" does not exist.', 25, $this->source); })()), "getCity", [], "any", false, false, false, 25), "html", null, true);
        yield "&output=embed\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </section>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contactSections"]) || array_key_exists("contactSections", $context) ? $context["contactSections"] : (function () { throw new RuntimeError('Variable "contactSections" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contactSection"]) {
            // line 28
            yield "                    <section class=\"subsection\">
                        ";
            // line 29
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "title", [], "any", false, false, false, 29))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "                            <h2
                                class=\"subsection__title ";
                // line 31
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "aside", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "aside", [], "any", false, false, false, 31))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                                ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "title", [], "any", false, false, false, 32), "html", null, true);
                yield "
                            </h2>
                        ";
            }
            // line 35
            yield "                        <div>
                        ";
            // line 36
            yield CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "text", [], "any", false, false, false, 36);
            yield "
                        </div>
                        ";
            // line 38
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "aside", [], "any", false, false, false, 38))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "                            <aside class=\"subsection__quote ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "left", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("left") : (""));
                yield "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contactSection"], "aside", [], "any", false, false, false, 41), "html", null, true);
                yield "\"</blockquote>
                            </aside>
                        ";
            }
            // line 44
            yield "                    </section>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contactSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                ";
        // line 57
        yield "                <section class=\"contact__form\">
                    <h2 class=\"subsection__title\">Nous contacter :</h2>
                    <p>
                        Une question, une envie de nous rejoindre, un projet de partenariat, une candidature à la formation ?
                        <br>
                        N’hésitez pas à nous contacter via notre formulaire ou par mail.
                    </p>
                    <form action=\"\" method=\"POST\">
                        <label for=\"name\">Nom complet :</label>
                        <input type=\"text\" id=\"name\" name=\"name\" required>

                        <label for=\"email\">Email :</label>
                        <input type=\"email\" id=\"email\" name=\"_replyto\" required>

                        <label for=\"object\">Objet :</label>
                        <input type=\"text\" id=\"object\" name=\"object\" required>

                        <label for=\"message\">Message :</label>
                        <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>

                        <button type=\"submit\">Envoyer</button>
                    </form>
                </section>
            </section>
            ";
        // line 118
        yield "        </div>
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
        return "contact/index.html.twig";
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
        return array (  250 => 118,  224 => 57,  222 => 47,  214 => 44,  208 => 41,  202 => 39,  200 => 38,  195 => 36,  192 => 35,  186 => 32,  182 => 31,  179 => 30,  177 => 29,  174 => 28,  170 => 27,  161 => 25,  146 => 23,  140 => 22,  136 => 21,  133 => 20,  130 => 19,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Contact{% endblock %}

{% block body %}
    <main>
      <div class=\"banner-container\">
        <div class=\"banner\"></div>
        <div class=\"banner__pusher\">
            <section class=\"contact section\">
                <section>
                    <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                    {% if rubricInfo.getGalleryImage is not empty %}
                    <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                    {% endif %}
                    {{ rubricInfo.text|raw }}
                </section>
                <section class=\"contact__info\">
                {% dump contactInfo %}
                    <div>
                        Mail : {{ contactInfo.getEMail }}<br>
                        Téléphone : <a href=\"tel:{{ contactInfo.getPhone }}\">{{ contactInfo.getPhone }}</a><br>
                        Adresse : <a href=\"https://www.google.com/maps?q={{ contactInfo.getStreet }}, {{ contactInfo.getPostalCode}} {{ contactInfo.getCity }}\" target=\"_blank\">{{ contactInfo.getStreet }}, {{ contactInfo.getPostalCode }} {{ contactInfo.getCity }}</a>
                    </div>
                    <iframe src=\"https://www.google.com/maps?q={{ contactInfo.getStreet }}, {{ contactInfo.getPostalCode}} {{ contactInfo.getCity }}&output=embed\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </section>
                {% for contactSection in contactSections %}
                    <section class=\"subsection\">
                        {% if contactSection.title is not empty %}
                            <h2
                                class=\"subsection__title {{ contactSection.aside|default ? 'subsection__title-grid' : '' }}\">
                                {{ contactSection.title }}
                            </h2>
                        {% endif %}
                        <div>
                        {{ contactSection.text|raw }}
                        </div>
                        {% if contactSection.aside is not empty %}
                            <aside class=\"subsection__quote {{ contactSection.left ? 'left' : '' }}\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewbox=\"0 -960 960 960\" width=\"24px\" fill=\"currentColor\"><path d=\"m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm457-560 21-89-71-59 94-8 36-84 36 84 94 8-71 59 21 89-80-47-80 47ZM480-481Z\"/></svg>
                                <blockquote>\"{{ contactSection.aside }}\"</blockquote>
                            </aside>
                        {% endif %}
                    </section>

                    {% endfor %}
                {# <section class=\"support__content\">
                    <h2 class=\"subsection__title\">Soutenir TAM, c’est agir concrètement pour la santé mentale.</h2>
                    <p>Votre soutien permet :</p>
                    <ul class=\"section__list\">
                        <li>La prise en charge thérapeutique de personnes vulnérables</li>
                        <li>La formation de professionnels</li>
                        <li>Le développement et le soutien de projets locaux</li>
                        <li>La recherche et la coopération internationale</li>
                    </ul>
                </section> #}
                <section class=\"contact__form\">
                    <h2 class=\"subsection__title\">Nous contacter :</h2>
                    <p>
                        Une question, une envie de nous rejoindre, un projet de partenariat, une candidature à la formation ?
                        <br>
                        N’hésitez pas à nous contacter via notre formulaire ou par mail.
                    </p>
                    <form action=\"\" method=\"POST\">
                        <label for=\"name\">Nom complet :</label>
                        <input type=\"text\" id=\"name\" name=\"name\" required>

                        <label for=\"email\">Email :</label>
                        <input type=\"email\" id=\"email\" name=\"_replyto\" required>

                        <label for=\"object\">Objet :</label>
                        <input type=\"text\" id=\"object\" name=\"object\" required>

                        <label for=\"message\">Message :</label>
                        <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>

                        <button type=\"submit\">Envoyer</button>
                    </form>
                </section>
            </section>
            {# <section class=\"contact section\">
                <div class=\"contact__header\">
                    <h2 class=\"section__title\">Contact</h2>
                    <p>Rejoindre TAM, c’est devenir acteur du changement et œuvrer pour une société plus humaine.</p>
                </div>
                <div class=\"contact__info\">
                    <div>
                        Mail : association.tam94@gmail.com<br>
                        Téléphone : <a href=\"tel:+33645186240\">06 45 18 62 40</a><br>
                        Adresse : <a href=\"https://www.google.com/maps?q=27%20Rue%20Jean%20Jaurès,%20Paris,%20FR%2094800\" target=\"_blank\">10 rue de la Paix, 75002 Paris</a>
                    </div>
                    <iframe src=\"https://www.google.com/maps?q=27%20Rue%20Jean%20Jaurès,%20Paris,%20FR%2094800&output=embed\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                </div>
                <div class=\"contact__form\">
                    <h3 class=\"subsection__title\">Nous contacter :</h3>
                    <p>
                        Une question, une envie de nous rejoindre, un projet de partenariat, une candidature à la formation ?
                        <br>
                        N’hésitez pas à nous contacter via notre formulaire ou par mail.
                    </p>
                    <form action=\"\" method=\"POST\">
                        <label for=\"name\">Nom complet :</label>
                        <input type=\"text\" id=\"name\" name=\"name\" required>

                        <label for=\"email\">Email :</label>
                        <input type=\"email\" id=\"email\" name=\"_replyto\" required>

                        <label for=\"object\">Objet :</label>
                        <input type=\"text\" id=\"object\" name=\"object\" required>

                        <label for=\"message\">Message :</label>
                        <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>

                        <button type=\"submit\">Envoyer</button>
                    </form>
                </div>
            </section> #}
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "contact/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/contact/index.html.twig");
    }
}
