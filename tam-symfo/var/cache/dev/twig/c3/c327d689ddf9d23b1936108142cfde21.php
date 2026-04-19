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
class __TwigTemplate_45b43965a3f7f1e24356ed9a6aa85aed extends Template
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
        yield "    <header id=\"header\" class=\"header\" role=\"banner\">
        <div class=\"header__logo\" id=\"toggleNavbar\">
            <img src=\"";
        // line 3
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
                    <a role=\"menuitem\" class=\"active\" aria-current=\"page\" href=\"index.html\">Accueil</a>
                </li>
                <li class=\"header__nav-links--blue parent__menu\">
                    <div class=\"shape spirale\"></div>
                    <button type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"who_submenu\" class=\"submenu__button\">Qui sommes-nous ?</button>
                    <ul role=\"menu\" id=\"who_submenu\" class=\"submenu\">
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/association.html\">L'association</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/team.html\">L'équipe</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/reports.html\">Rapports d'activité</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__nav-links--green parent__menu\">
                    <div class=\"shape spirale\"></div>
                    <button type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"actions_submenu\" class=\"submenu__button\">Actions</button>
                    <ul role=\"menu\" id=\"actions_submenu\" class=\"submenu\">
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/actions.html\">En France</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/actions.html\">Au Bénin</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__nav-links--orange\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/training.html\">Formation</a>
                </li>
                <li class=\"header__nav-links--turquoise\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/research.html\">Recherche</a>
                </li>
                <li class=\"header__nav-links--red\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/resources.html\">Ressources</a>
                </li>
                <li class=\"header__nav-links--yellow\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/support.html\">Nous soutenir</a>
                </li>
                <li class=\"header__nav-links--light-blue\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/contact.html\">Contact</a>
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
        return array (  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <header id=\"header\" class=\"header\" role=\"banner\">
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
                    <a role=\"menuitem\" class=\"active\" aria-current=\"page\" href=\"index.html\">Accueil</a>
                </li>
                <li class=\"header__nav-links--blue parent__menu\">
                    <div class=\"shape spirale\"></div>
                    <button type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"who_submenu\" class=\"submenu__button\">Qui sommes-nous ?</button>
                    <ul role=\"menu\" id=\"who_submenu\" class=\"submenu\">
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/association.html\">L'association</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/team.html\">L'équipe</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/reports.html\">Rapports d'activité</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__nav-links--green parent__menu\">
                    <div class=\"shape spirale\"></div>
                    <button type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"actions_submenu\" class=\"submenu__button\">Actions</button>
                    <ul role=\"menu\" id=\"actions_submenu\" class=\"submenu\">
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/actions.html\">En France</a>
                        </li>
                        <li class=\"submenu__item\">
                            <a role=\"menuitem\" href=\"html/actions.html\">Au Bénin</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header__nav-links--orange\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/training.html\">Formation</a>
                </li>
                <li class=\"header__nav-links--turquoise\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/research.html\">Recherche</a>
                </li>
                <li class=\"header__nav-links--red\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/resources.html\">Ressources</a>
                </li>
                <li class=\"header__nav-links--yellow\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/support.html\">Nous soutenir</a>
                </li>
                <li class=\"header__nav-links--light-blue\">
                    <div class=\"shape spirale\"></div>
                    <a role=\"menuitem\" href=\"html/contact.html\">Contact</a>
                </li>
            </ul>
        </nav>
    </header>", "partials/_header.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/partials/_header.html.twig");
    }
}
