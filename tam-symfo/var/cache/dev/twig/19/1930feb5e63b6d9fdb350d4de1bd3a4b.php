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
        yield "    ";
        if ($this->env->isDebug()) {
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 2, $this->source); })()));
        }
        // line 3
        yield "
    <header id=\"header\" class=\"header\" role=\"banner\">
        <div class=\"header__logo\" id=\"toggleNavbar\">
            <img src=\"";
        // line 6
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
        // line 15
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 15, $this->source); })()) == "app_main")) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " role=\"menuitem\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\">Accueil</a>
                </li>
                <li class=\"header__nav-links--blue parent__menu\">
                    <div class=\"shape spirale\"></div>
                    <button ";
        // line 19
        yield ((CoreExtension::inFilter("app_who", (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 19, $this->source); })()))) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"who_submenu\" class=\"submenu__button\">Qui sommes-nous ?</button>
                    <ul role=\"menu\" id=\"who_submenu\" class=\"submenu\">
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_who_association");
        yield "\">L'association</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_who_team");
        yield "\">L'équipe</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_who_reports");
        yield "\">Rapports d'activité</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__nav-links--green parent__menu\">
                    <div class=\"shape spirale\"></div>
                    <button ";
        // line 34
        yield ((CoreExtension::inFilter("app_actions", (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 34, $this->source); })()))) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"actions_submenu\" class=\"submenu__button\">Actions</button>
                    <ul role=\"menu\" id=\"actions_submenu\" class=\"submenu\">
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_france");
        yield "\">En France</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actions_benin");
        yield "\">Au Bénin</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__nav-links--orange\">
                    <div class=\"shape spirale\"></div>
                    <a ";
        // line 46
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 46, $this->source); })()) == "app_training")) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " role=\"menuitem\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training");
        yield "\">Formation</a>
                </li>
                <li class=\"header__nav-links--turquoise\">
                    <div class=\"shape spirale\"></div>
                    <a ";
        // line 50
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 50, $this->source); })()) == "app_research")) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " role=\"menuitem\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_research");
        yield "\">Recherche</a>
                </li>
                <li class=\"header__nav-links--red\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resources");
        yield "\">Ressources</a>
                </li>
                <li class=\"header__nav-links--yellow\">
                    <div class=\"shape spirale\"></div>
                    <a ";
        // line 58
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 58, $this->source); })()) == "app_support")) ? ("class=\"active\" aria-current=\"page\"") : (""));
        yield " role=\"menuitem\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support");
        yield "\">Nous soutenir</a>
                </li>
                <li class=\"header__nav-links--light-blue\">
                    <div class=\"shape spirale\"></div>
                    <a ";
        // line 62
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 62, $this->source); })()) == "app_contact")) ? ("class=\"active\" aria-current=\"page\"") : (""));
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
        return array (  164 => 62,  155 => 58,  148 => 54,  139 => 50,  130 => 46,  121 => 40,  115 => 37,  109 => 34,  100 => 28,  94 => 25,  88 => 22,  82 => 19,  73 => 15,  61 => 6,  56 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    {% set currentRoute = app.request.attributes.get('_route') %}
    {% dump currentRoute %}

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
                    <a {{ currentRoute == 'app_research' ? 'class=\"active\" aria-current=\"page\"':'' }} role=\"menuitem\" href=\"{{ path('app_research') }}\">Recherche</a>
                </li>
                <li class=\"header__nav-links--red\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"{{ path('app_resources') }}\">Ressources</a>
                </li>
                <li class=\"header__nav-links--yellow\">
                    <div class=\"shape spirale\"></div>
                    <a {{ currentRoute == 'app_support' ? 'class=\"active\" aria-current=\"page\"':'' }} role=\"menuitem\" href=\"{{ path('app_support') }}\">Nous soutenir</a>
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
