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

/* books/index.html.twig */
class __TwigTemplate_1e008411a636d22293dd35cb6823aff3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Ma Collection - Kitab";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container py-4\">
        ";
        // line 8
        yield "        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h1 class=\"fw-bold h2 mb-0\" style=\"color: var(--primary-color);\">Ma Collection</h1>
                <p class=\"text-muted small mb-0\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 11, $this->source); })())), "html", null, true);
        yield " livres enregistrés</p>
            </div>
            <a class=\"btn shadow-sm rounded-circle d-flex align-items-center justify-content-center\"
               href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_new");
        yield "\"
               style=\"background-color: var(--primary-color); color: white; width: 45px; height: 45px;\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2\"/>
                </svg>
            </a>
        </div>

        <div class=\"row g-3\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 24
            yield "                <div class=\"col-6 col-md-4 col-lg-3\">
                    <div class=\"card h-100 border-0 shadow-sm position-relative overflow-hidden\" style=\"border-radius: 18px;\">

                        ";
            // line 28
            yield "                        <div class=\"position-absolute top-0 start-0 m-2 z-3\">
                            ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "readingStatus", [], "any", false, false, false, 29) == "reading")) {
                // line 30
                yield "                                <span class=\"badge rounded-pill bg-primary shadow-sm\">En cours</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["book"], "readingStatus", [], "any", false, false, false, 31) == "finished")) {
                // line 32
                yield "                                <span class=\"badge rounded-pill bg-success shadow-sm\">Terminé</span>
                            ";
            } else {
                // line 34
                yield "                                <span class=\"badge rounded-pill bg-secondary shadow-sm\">À lire</span>
                            ";
            }
            // line 36
            yield "                        </div>

                        ";
            // line 39
            yield "                        <div style=\"aspect-ratio: 2/3; background-color: #f8f9fa;\">
                            <img src=\"";
            // line 40
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "imageCover", [], "any", false, false, false, 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "imageCover", [], "any", false, false, false, 40), "html", null, true)) : ("/images/6940546.jpg"));
            yield "\"
                                 class=\"w-100 h-100\"
                                 style=\"object-fit: cover;\"
                                 alt=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                        </div>

                        <div class=\"card-body p-2 px-3\">
                            <h6 class=\"fw-bold mb-0 text-truncate\" style=\"font-size: 0.9rem;\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 47), "html", null, true);
            yield "</h6>
                            <p class=\"text-muted small mb-2 text-truncate\" style=\"font-size: 0.75rem;\">
                                ";
            // line 49
            yield ((Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "authors", [], "any", false, false, false, 49), ", ")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "authors", [], "any", false, false, false, 49), ", "), "html", null, true)) : ("Auteur inconnu"));
            yield "
                            </p>

                            ";
            // line 53
            yield "                            <div class=\"d-flex justify-content-between align-items-center mt-auto\">
                                ";
            // line 54
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["book"], "saga", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "                                    <span class=\"badge bg-light text-dark border-0 small fw-normal\" style=\"font-size: 0.65rem;\">
                                    ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "saga", [], "any", false, false, false, 56), "html", null, true);
                yield " ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["book"], "number", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "number", [], "any", false, false, false, 56), "html", null, true);
                }
                // line 57
                yield "                                </span>
                                ";
            }
            // line 59
            yield "
                                ";
            // line 60
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["book"], "rating", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "                                    <span class=\"text-warning small\" style=\"font-size: 0.7rem;\">
                                    ★ ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "rating", [], "any", false, false, false, 62), "html", null, true);
                yield "
                                </span>
                                ";
            }
            // line 65
            yield "                            </div>

                            ";
            // line 68
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"stretched-link\"></a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 72
        if (!$context['_iterated']) {
            // line 73
            yield "                <div class=\"col-12 text-center py-5\">
                    <div class=\"mb-3\">📚</div>
                    <p class=\"text-muted\">Votre bibliothèque est vide.</p>
                    <a href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_books");
            yield "\" class=\"btn btn-sm btn-outline-primary rounded-pill\">Rechercher un livre</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "books/index.html.twig";
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
        return array (  233 => 79,  224 => 76,  219 => 73,  217 => 72,  207 => 68,  203 => 65,  197 => 62,  194 => 61,  192 => 60,  189 => 59,  185 => 57,  178 => 56,  175 => 55,  173 => 54,  170 => 53,  164 => 49,  159 => 47,  152 => 43,  146 => 40,  143 => 39,  139 => 36,  135 => 34,  131 => 32,  129 => 31,  126 => 30,  124 => 29,  121 => 28,  116 => 24,  111 => 23,  99 => 14,  93 => 11,  88 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma Collection - Kitab{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        {# En-tête avec titre et bouton d'ajout #}
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h1 class=\"fw-bold h2 mb-0\" style=\"color: var(--primary-color);\">Ma Collection</h1>
                <p class=\"text-muted small mb-0\">{{ books|length }} livres enregistrés</p>
            </div>
            <a class=\"btn shadow-sm rounded-circle d-flex align-items-center justify-content-center\"
               href=\"{{ path('app_books_new') }}\"
               style=\"background-color: var(--primary-color); color: white; width: 45px; height: 45px;\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2\"/>
                </svg>
            </a>
        </div>

        <div class=\"row g-3\">
            {% for book in books %}
                <div class=\"col-6 col-md-4 col-lg-3\">
                    <div class=\"card h-100 border-0 shadow-sm position-relative overflow-hidden\" style=\"border-radius: 18px;\">

                        {# Badge de Statut Workflow #}
                        <div class=\"position-absolute top-0 start-0 m-2 z-3\">
                            {% if book.readingStatus == 'reading' %}
                                <span class=\"badge rounded-pill bg-primary shadow-sm\">En cours</span>
                            {% elseif book.readingStatus == 'finished' %}
                                <span class=\"badge rounded-pill bg-success shadow-sm\">Terminé</span>
                            {% else %}
                                <span class=\"badge rounded-pill bg-secondary shadow-sm\">À lire</span>
                            {% endif %}
                        </div>

                        {# Image de couverture #}
                        <div style=\"aspect-ratio: 2/3; background-color: #f8f9fa;\">
                            <img src=\"{{ book.imageCover ?: '/images/6940546.jpg' }}\"
                                 class=\"w-100 h-100\"
                                 style=\"object-fit: cover;\"
                                 alt=\"{{ book.title }}\">
                        </div>

                        <div class=\"card-body p-2 px-3\">
                            <h6 class=\"fw-bold mb-0 text-truncate\" style=\"font-size: 0.9rem;\">{{ book.title }}</h6>
                            <p class=\"text-muted small mb-2 text-truncate\" style=\"font-size: 0.75rem;\">
                                {{ book.authors|join(', ') ?: 'Auteur inconnu' }}
                            </p>

                            {# Tags Saga et Note #}
                            <div class=\"d-flex justify-content-between align-items-center mt-auto\">
                                {% if book.saga %}
                                    <span class=\"badge bg-light text-dark border-0 small fw-normal\" style=\"font-size: 0.65rem;\">
                                    {{ book.saga }} {% if book.number %}#{{ book.number }}{% endif %}
                                </span>
                                {% endif %}

                                {% if book.rating %}
                                    <span class=\"text-warning small\" style=\"font-size: 0.7rem;\">
                                    ★ {{ book.rating }}
                                </span>
                                {% endif %}
                            </div>

                            {# Actions rapides invisibles sur mobile, visibles au clic ou via lien sur toute la carte #}
                            <a href=\"{{ path('app_books_show', {'id': book.id}) }}\" class=\"stretched-link\"></a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12 text-center py-5\">
                    <div class=\"mb-3\">📚</div>
                    <p class=\"text-muted\">Votre bibliothèque est vide.</p>
                    <a href=\"{{ path('search_books') }}\" class=\"btn btn-sm btn-outline-primary rounded-pill\">Rechercher un livre</a>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "books/index.html.twig", "/var/www/html/backend/templates/books/index.html.twig");
    }
}
