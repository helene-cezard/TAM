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

/* partials/_header.html.twig */
class __TwigTemplate_a9b6b36504c0ac90c295174795e8e5a6 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        yield "    ";
        $context["currentRoute"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1);
        // line 2
        yield "
<header id=\"header\" class=\"header\" role=\"banner\">
    <div class=\"header__logo\" id=\"toggleNavbar\">
        <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-transparent-bg.png"), "html", null, true);
        yield "\" alt=\"Logo de l'association TAM\">
    </div>
    <button type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"nav\" id=\"icons\" class=\"header__buttons\" aria-label=\"Ouvrir ou fermer le menu de navigation\">
        <span class=\"sr-only\">Menu</span>
    </button>
    <nav id=\"nav\" role=\"navigation\" class=\"header__navbar\">
        <ul role=\"menubar\" class=\"header__nav-links\">
            <li class=\"header__nav-links--yellow\">
                <div class=\"shape lines\"></div>
                <a ";
        // line 14
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 14, $this->source); })()) == "app_main")) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " role=\"menuitem\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\">Accueil</a>
            </li>
            <li class=\"header__nav-links--blue parent__menu\">
                <div class=\"shape spirale\"></div>
                <button ";
        // line 18
        yield ((CoreExtension::inFilter("app_who", (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 18, $this->source); })()))) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"who_submenu\" class=\"submenu__button\">Qui sommes-nous ?</button>
                <ul role=\"menu\" id=\"who_submenu\" class=\"submenu\">
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_who_association");
        yield "\">L'association</a>
                    </li>
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_who_team");
        yield "\">L'équipe</a>
                    </li>
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_who_reports");
        yield "\">Rapports d'activité</a>
                    </li>
                </ul>
            </li>
            <li class=\"header__nav-links--green parent__menu\">
                <div class=\"shape spirale\"></div>
                <button ";
        // line 33
        yield ((CoreExtension::inFilter("app_actions", (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 33, $this->source); })()))) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"actions_submenu\" class=\"submenu__button\">Actions</button>
                <ul role=\"menu\" id=\"actions_submenu\" class=\"submenu\">
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_france");
        yield "\">En France</a>
                    </li>
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_benin");
        yield "\">Au Bénin</a>
                    </li>
                </ul>
            </li>
            <li class=\"header__nav-links--orange\">
                <div class=\"shape spirale\"></div>
                <a ";
        // line 45
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 45, $this->source); })()) == "app_training")) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " role=\"menuitem\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training");
        yield "\">Formation</a>
            </li>
            <li class=\"header__nav-links--turquoise\">
                <div class=\"shape spirale\"></div>
                <a role=\"menuitem\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resources");
        yield "\">Ressources</a>
            </li>
            <li class=\"header__nav-links--light-blue\">
                <div class=\"shape spirale\"></div>
                <a ";
        // line 53
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 53, $this->source); })()) == "app_contact")) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " role=\"menuitem\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a>
            </li>
        </ul>
    </nav>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_header.html.twig";
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
        return array (  141 => 53,  134 => 49,  125 => 45,  116 => 39,  110 => 36,  104 => 33,  95 => 27,  89 => 24,  83 => 21,  77 => 18,  68 => 14,  56 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    {% set currentRoute = app.request.attributes.get('_route') %}

<header id=\"header\" class=\"header\" role=\"banner\">
    <div class=\"header__logo\" id=\"toggleNavbar\">
        <img src=\"{{ asset('images/logo-transparent-bg.png') }}\" alt=\"Logo de l'association TAM\">
    </div>
    <button type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"nav\" id=\"icons\" class=\"header__buttons\" aria-label=\"Ouvrir ou fermer le menu de navigation\">
        <span class=\"sr-only\">Menu</span>
    </button>
    <nav id=\"nav\" role=\"navigation\" class=\"header__navbar\">
        <ul role=\"menubar\" class=\"header__nav-links\">
            <li class=\"header__nav-links--yellow\">
                <div class=\"shape lines\"></div>
                <a {{ currentRoute == 'app_main' ? 'class=\"active\" aria-current=\"page\"':'' }} role=\"menuitem\" href=\"{{ path('app_main') }}\">Accueil</a>
            </li>
            <li class=\"header__nav-links--blue parent__menu\">
                <div class=\"shape spirale\"></div>
                <button {{ 'app_who' in currentRoute ? 'class=\"active\" aria-current=\"page\"':'' }} type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"who_submenu\" class=\"submenu__button\">Qui sommes-nous ?</button>
                <ul role=\"menu\" id=\"who_submenu\" class=\"submenu\">
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"{{ path('app_who_association') }}\">L'association</a>
                    </li>
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"{{ path('app_who_team') }}\">L'équipe</a>
                    </li>
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"{{ path('app_who_reports') }}\">Rapports d'activité</a>
                    </li>
                </ul>
            </li>
            <li class=\"header__nav-links--green parent__menu\">
                <div class=\"shape spirale\"></div>
                <button {{ 'app_actions' in currentRoute ? 'class=\"active\" aria-current=\"page\"':'' }} type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"actions_submenu\" class=\"submenu__button\">Actions</button>
                <ul role=\"menu\" id=\"actions_submenu\" class=\"submenu\">
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"{{ path('app_actions_france') }}\">En France</a>
                    </li>
                    <li class=\"submenu__item\">
                        <a role=\"menuitem\" href=\"{{ path('app_actions_benin') }}\">Au Bénin</a>
                    </li>
                </ul>
            </li>
            <li class=\"header__nav-links--orange\">
                <div class=\"shape spirale\"></div>
                <a {{ currentRoute == 'app_training' ? 'class=\"active\" aria-current=\"page\"':'' }} role=\"menuitem\" href=\"{{ path('app_training') }}\">Formation</a>
            </li>
            <li class=\"header__nav-links--turquoise\">
                <div class=\"shape spirale\"></div>
                <a role=\"menuitem\" href=\"{{ path('app_resources') }}\">Ressources</a>
            </li>
            <li class=\"header__nav-links--light-blue\">
                <div class=\"shape spirale\"></div>
                <a {{ currentRoute == 'app_contact' ? 'class=\"active\" aria-current=\"page\"':'' }} role=\"menuitem\" href=\"{{ path('app_contact') }}\">Contact</a>
            </li>
        </ul>
    </nav>
</header>", "partials/_header.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/partials/_header.html.twig");
    }
}
