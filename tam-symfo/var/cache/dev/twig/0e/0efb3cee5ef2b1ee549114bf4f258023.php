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

/* eulogy/index.html.twig */
class __TwigTemplate_2c91bf4d96db2a3dbaaeb8efba82207a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eulogy/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eulogy/index.html.twig"));

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

        yield "Association TAM : Thérapies, Arts & Médiations - Hommage au Dr Maman Bello";
        
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
          <section class=\"eulogy section\">
            <section>
                <h1 class=\"section__title\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
                ";
        // line 13
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 13, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                <img  class=\"section__image\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 14, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 14, $this->source); })()), "getGalleryImage", [], "any", false, false, false, 14), "alt", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
                ";
        }
        // line 16
        yield "                ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["rubricInfo"]) || array_key_exists("rubricInfo", $context) ? $context["rubricInfo"] : (function () { throw new RuntimeError('Variable "rubricInfo" does not exist.', 16, $this->source); })()), "text", [], "any", false, false, false, 16);
        yield "
            </section>

            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eulogySections"]) || array_key_exists("eulogySections", $context) ? $context["eulogySections"] : (function () { throw new RuntimeError('Variable "eulogySections" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eulogySection"]) {
            // line 20
            yield "
                <section class=\"subsection\">
                    ";
            // line 22
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["eulogySection"], "title", [], "any", false, false, false, 22))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "                        <h2
                            class=\"subsection__title ";
                // line 24
                yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["eulogySection"], "aside", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["eulogySection"], "aside", [], "any", false, false, false, 24))) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("subsection__title-grid") : (""));
                yield "\">
                            ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["eulogySection"], "title", [], "any", false, false, false, 25), "html", null, true);
                yield "
                        </h2>
                    ";
            }
            // line 28
            yield "                    <div>
                    ";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["eulogySection"], "text", [], "any", false, false, false, 29);
            yield "
                    </div>
                    ";
            // line 31
            if (($context["eulogySection"] === CoreExtension::getAttribute($this->env, $this->source, (isset($context["eulogySections"]) || array_key_exists("eulogySections", $context) ? $context["eulogySections"] : (function () { throw new RuntimeError('Variable "eulogySections" does not exist.', 31, $this->source); })()), 0, [], "array", false, false, false, 31))) {
                // line 32
                yield "                        <img class=\"eulogy__image left\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/Président d'honneur Moussa NB F.jpg"), "html", null, true);
                yield "\" alt=\"Dr Moussa Maman Bello\">
                    ";
            }
            // line 34
            yield "                </section>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['eulogySection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            ";
        // line 92
        yield "          </section>
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
        return "eulogy/index.html.twig";
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
        return array (  178 => 92,  176 => 37,  168 => 34,  162 => 32,  160 => 31,  155 => 29,  152 => 28,  146 => 25,  142 => 24,  139 => 23,  137 => 22,  133 => 20,  129 => 19,  122 => 16,  114 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association TAM : Thérapies, Arts & Médiations - Hommage au Dr Maman Bello{% endblock %}

{% block body %}
    <main>
      <div class=\"banner-container\">
        <div class=\"banner\"></div>
        <div class=\"banner__pusher\">
          <section class=\"eulogy section\">
            <section>
                <h1 class=\"section__title\">{{ rubricInfo.title }}</h1>
                {% if rubricInfo.getGalleryImage is not empty %}
                <img  class=\"section__image\" src=\"{{ asset(rubricInfo.getGalleryImage.path) }}\" alt=\"{{ rubricInfo.getGalleryImage.alt }}\">
                {% endif %}
                {{ rubricInfo.text|raw }}
            </section>

            {% for eulogySection in eulogySections %}

                <section class=\"subsection\">
                    {% if eulogySection.title is not empty %}
                        <h2
                            class=\"subsection__title {{ eulogySection.aside|default ? 'subsection__title-grid' : '' }}\">
                            {{ eulogySection.title }}
                        </h2>
                    {% endif %}
                    <div>
                    {{ eulogySection.text|raw }}
                    </div>
                    {% if eulogySection === eulogySections[0] %}
                        <img class=\"eulogy__image left\" src=\"{{ asset('images/team/Président d\\'honneur Moussa NB F.jpg') }}\" alt=\"Dr Moussa Maman Bello\">
                    {% endif %}
                </section>

                {% endfor %}
            {# <section class=\"subsection\">
              <h2 class=\"section__small-title section__side-title\">Dr Moussa Maman Bello, Un homme hors du commun</h2>
              <div>
                <p>Il parlait doucement, pesait chaque mot, mais son message était clair : « On ne soigne pas une âme exilée comme un corps blessé. » Le Dr Moussa Maman Bello, médecin ethnopsychiatre, tradipraticien et fondateur de l’URACA (Unité de Réflexion et d’Action des Communautés Africaines), est décédé au Bénin le lundi 7 juillet 2025. Il avait consacré sa vie à faire dialoguer la médecine occidentale et les traditions thérapeutiques africaines, à tendre l’oreille à ceux que le système de santé ne savait pas toujours entendre.</p>
              </div>
              <div class=\"section__image section__side left\">
                <img src=\"../images/team/Président d'honneur Moussa NB F.jpg\" alt=\"Dr Moussa Maman Bello\">
              </div>
            </section>
            <section class=\"subsection\">
              <h2 class=\"section__small-title section__side-title\">De Bello Tounga à Paris : un chemin entre deux mondes</h2>
              <p>Moussa Maman Bello a grandi dans une famille marquée par la transmission orale, la spiritualité, le respect des anciens et la pratique de la médecine traditionnelle. Après des études de médecine au Sénégal, il part en France. Il s’oriente vers l’ethnopsychiatrie, une spécialité alors peu investie, peu connue à l’époque.</p>
            </section>
            <section class=\"subsection\">
              <h2 class=\"section__small-title section__side-title\">URACA : une clinique pas comme les autres</h2>
              <div>
                <p>En 1985, alors que l’épidémie de Sida prend de l’ampleur, il fonde à Paris l’URACA, une association destinée à offrir aux familles africaines un espace d’accueil et de soin respectueux de leurs langues, de leurs histoires et de leurs repères culturels. Dans le 18ème arrondissement de Paris, les patients y trouvent une écoute attentive, loin des diagnostics standardisés et des traitements systématiques. Ici, on parle wolof, bambara, dioula, soninké, lingala, etc... On y évoque les ancêtres, les conflits générationnels, les sortilèges, la maladie et les douleurs non dites.</p>
                <p>L’équipe pluridisciplinaire, est composée de psychologues, médiateurs culturels, travailleurs sociaux. Cette alliance entre médecine moderne et savoirs traditionnels, longtemps négligée, devient peu à peu un modèle reconnu dans le champ de la santé mentale interculturelle.</p>
                <p>En 2015, il confie le projet URACA à l’association BASILIADE qui depuis continue à développer les actions sur le terrain en France dans le respect de cet héritage.</p>
              </div>
            </section>
            <section class=\"subsection\">
              <h2 class=\"section__small-title section__side-title\">Un engagement intellectuel et militant</h2>
              <div>
                <p>La démarche de recherche action dans la santé communautaire a permis de développer les pôles d’actions de l’association avec une antenne de soins au nord Bénin pour les patients séropositifs. La drépanocytose a été également une autre de ses préoccupations. La lutte contre le VIH sera un des axes majeurs de l’association qui fêtera le 2 décembre 2025 ses 40 ans.</p>
              </div>
            </section>
            <section class=\"subsection\">
              <h2 class=\"section__small-title section__side-title\">Une figure tutélaire pour des générations</h2>
              <div>
                <p>Au fil des décennies, Moussa Maman Bello est devenu une référence dans les milieux médicaux, et sociaux. Il a formé plusieurs générations de professionnels, inspiré des chercheurs, soutenu des familles, et a continué de consulter, malgré les années. Son bureau de consultation à l’URACA était devenu un lieu de passage, de conseil et de mémoire.</p>
                <p>Il a eu l'audace et la générosité d'accueillir à plusieurs reprises des équipes soignantes dans son village au Nord Bénin, au bord du fleuve Niger : une immersion dans des cérémonies traditionnelles hors du commun, les danses de possession, qui a permis aux soignants d'entrevoir in situ ce monde de l'Invisible si présent pour bon nombre de patients. Ainsi, il créait des passerelles entre les mondes, les cultures.</p>
                <p>Son apport aux équipes hospitalières par les consultations d’ethnomédecine dans les hôpitaux a été reconnu et récompensé par le 2ème prix Hélioscope en 2000, remis cette année-là au Palais de l’Élysée.</p>
                <p>Discret, il ne mettait jamais en avant sa propre personne, mais œuvrait à aider sans relâche les familles, les patients et les soignants. Ceux qui l’ont croisé retiendront un regard calme et apaisant, une capacité rare à écouter sans juger, et un engagement profond pour la dignité humaine. Il laisse derrière lui une œuvre immense, une institution vivante, et une communauté de pensée qui continue de faire école.</p>
                <a class=\"section__link\" href=\"https://uraca-basiliade.org/\">https://uraca-basiliade.org/</a>
              </div>
            </section>
            <section class=\"subsection\">
              <h2 class=\"section__small-title section__side-title\">Publication :</h2>
              <div>
                <p>Renaître en pays dendi - Couvade et possession au nord Bénin. Moussa Maman Bello et Agnès Giannotti - Éditions Grandvaux (2017)
                  « Réputés dans toute l’Afrique de l’Ouest pour leur savoir-faire dans la prise en charge des maladies mentales, les Dendis sont inséparables du fleuve. Cette proximité avec l’esprit de l’eau, la déesse-mère Harakoye, leur confère une place particulière à la jonction du religieux et du soin. Je vous convie ici à un rituel thérapeutique de renaissance, une couvade appelée Danfou littéralement ‘’mettre dans la case’’. » Moussa Maman Bello</p>
                  <p>Les cahiers de URACA dont <a href=\"chrome-extension://oemmndcbldboiebfnladdacbdfmadadm/https://uraca-basiliade.org/wp-content/uploads/2016/12/Uraca_sida_mythes_realites.pdf\">Uraca_sida_mythes_realites.pdf</a> étude effectuée entre 1989 et 1993.</p>
              </div>
            </section>
            <section class=\"subsection\">
              <h2 class=\"section__small-title section__side-title\">Films réalisés sur son travail :</h2>
              <div>
                <ul class=\"section__list\">
                  <li>Le syndrome du guérisseur. F-X. Demanche et T.V. de Lestrade (2006)</li>
                  <li>Fièvre. Arianne Doublet (2009)</li>
                  <li>De l'autre côté du fleuve. Jean-Marc Taieb (2006)</li>
                </ul>
              </div>
            </section> #}
          </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "eulogy/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/eulogy/index.html.twig");
    }
}
