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
                <section class=\"team__header\">
                    <h2 class=\"section__title\">Notre équipe</h2>
                    <p>Elle est composée de professionnels : Médecins, psychothérapeutes, art-thérapeutes, artistes, médiateurs sociaux, ethno cliniciens, juristes… Avec la participation des intervenants et le soutiens des bénévoles et des stagiaires.</p>
                </section>
                <section class=\"team__content\">
                    <section class=\"team__container president\">
                        <h3 class=\"section__small-title\">Président d'honneur</h3>
                        <a class=\"team__card\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eulogy");
        yield "\">
                            <img src=\"../images/team/Président d'honneur Moussa NB F.jpg\" alt=\"Dr Moussa Maman Bello\">
                            <div class=\"team__card__text\">
                                <h3 class=\"team__card__name\">Dr Moussa Maman Bello</h3>
                                <p>Ethno médecin <br> Thérapeute traditionnel</p>
                            </div>
                        </a>
                    </section>
                    <section class=\"team__board\">
                        <h3 class=\"section__small-title\">Les membres du bureau</h3>
                        <div class=\"team__container\">
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Jean Marc Leblanc</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Elisabeth Collin</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Sonia Ould Ami</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"team__lecturers\">
                        <h3 class=\"section__small-title\">Les intervenants</h3>
                        <div class=\"team__container\">
                            <div class=\"team__card\">
                                <img src=\"../images/team/Chargée de mission Catherine NB F.jpg\" alt=\"Catherine Briand\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Catherine Briand</h3>
                                    <p>Art-thérapeutes<br>Artiste ethno-psy</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/default-user-picture.png\" alt=\"\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Nom Prénom</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Elisabeth Collin</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Sonia Ould Ami</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"team__experts\">
                        <h3 class=\"section__small-title\">Les experts</h3>
                        <div class=\"team__container\">
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Jean Marc Leblanc</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Elisabeth Collin</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Sonia Ould Ami</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class=\"team__volunteers\">
                    <h3 class=\"section__small-title\">À retrouver à nos côtés dans nos rapports d’activité :</h3>
                    <ul class=\"section__list\">
                        <li><strong>Les stagiaires :</strong> , Anouk, Christine, Danielle, Karine, Léane. Marie, Mélanie.</li>
                        <li><strong>Les jeunes Services civiques :</strong> Romane</li>
                        <li><strong>Les bénévoles :</strong> Anaïs, Arthur, Christine, Diaty, Fatima, Hélène, Marilo, Marie, France, Mathilde, Safi, Youssouf.</li>
                    </ul>
                </section>
                <section class=\"team__parters\">
                    <h3 class=\"section__small-title\">Nos partenariats :</h3>
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
        return array (  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <section class=\"team__header\">
                    <h2 class=\"section__title\">Notre équipe</h2>
                    <p>Elle est composée de professionnels : Médecins, psychothérapeutes, art-thérapeutes, artistes, médiateurs sociaux, ethno cliniciens, juristes… Avec la participation des intervenants et le soutiens des bénévoles et des stagiaires.</p>
                </section>
                <section class=\"team__content\">
                    <section class=\"team__container president\">
                        <h3 class=\"section__small-title\">Président d'honneur</h3>
                        <a class=\"team__card\" href=\"{{ path('app_eulogy') }}\">
                            <img src=\"../images/team/Président d'honneur Moussa NB F.jpg\" alt=\"Dr Moussa Maman Bello\">
                            <div class=\"team__card__text\">
                                <h3 class=\"team__card__name\">Dr Moussa Maman Bello</h3>
                                <p>Ethno médecin <br> Thérapeute traditionnel</p>
                            </div>
                        </a>
                    </section>
                    <section class=\"team__board\">
                        <h3 class=\"section__small-title\">Les membres du bureau</h3>
                        <div class=\"team__container\">
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Jean Marc Leblanc</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Elisabeth Collin</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Sonia Ould Ami</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"team__lecturers\">
                        <h3 class=\"section__small-title\">Les intervenants</h3>
                        <div class=\"team__container\">
                            <div class=\"team__card\">
                                <img src=\"../images/team/Chargée de mission Catherine NB F.jpg\" alt=\"Catherine Briand\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Catherine Briand</h3>
                                    <p>Art-thérapeutes<br>Artiste ethno-psy</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/default-user-picture.png\" alt=\"\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Nom Prénom</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Elisabeth Collin</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Sonia Ould Ami</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"team__experts\">
                        <h3 class=\"section__small-title\">Les experts</h3>
                        <div class=\"team__container\">
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Jean Marc NB F.jpg\" alt=\"\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Jean Marc Leblanc</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/EXPERT Elisabeth NB F.jpg\" alt=\"Elisabeth Collin\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Elisabeth Collin</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                            <div class=\"team__card\">
                                <img src=\"../images/team/Psychologue Sonia NB F.jpg\" alt=\"Sonia Ould Ami\">
                                <div class=\"team__card__text\">
                                    <h3 class=\"team__card__name\">Sonia Ould Ami</h3>
                                    <p class=\"team__card__bio\">Lorem ipsum dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class=\"team__volunteers\">
                    <h3 class=\"section__small-title\">À retrouver à nos côtés dans nos rapports d’activité :</h3>
                    <ul class=\"section__list\">
                        <li><strong>Les stagiaires :</strong> , Anouk, Christine, Danielle, Karine, Léane. Marie, Mélanie.</li>
                        <li><strong>Les jeunes Services civiques :</strong> Romane</li>
                        <li><strong>Les bénévoles :</strong> Anaïs, Arthur, Christine, Diaty, Fatima, Hélène, Marilo, Marie, France, Mathilde, Safi, Youssouf.</li>
                    </ul>
                </section>
                <section class=\"team__parters\">
                    <h3 class=\"section__small-title\">Nos partenariats :</h3>
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
                </section>
            </section>
        </div>
        <div class=\"banner banner--right\"></div>
      </div>
    </main>
{% endblock %}
", "who_team/index.html.twig", "/var/www/html/Benevolat/TAM/tam-symfo/templates/who_team/index.html.twig");
    }
}
