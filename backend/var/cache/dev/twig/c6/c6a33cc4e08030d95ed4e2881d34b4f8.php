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

/* open_library/index.html.twig */
class __TwigTemplate_953fde743696cbe11726d4be004bac1e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "open_library/index.html.twig"));

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

        yield "Rechercher un livre - Kitab";
        
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
        yield "    <div class=\"row justify-content-center mb-4 mt-2\">
        <div class=\"col-12 col-lg-8\">
            <h2 class=\"fw-bold mb-3\" style=\"color: var(--primary-color);\">Découvrir</h2>

            ";
        // line 11
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_books");
        yield "\" method=\"get\" class=\"shadow-sm rounded-pill bg-white d-flex align-items-center p-1 border\">
                <input type=\"text\"
                       class=\"form-control border-0 bg-transparent ps-4 shadow-none\"
                       name=\"query\"
                       placeholder=\"Titre, auteur, ISBN...\"
                       value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", ["query"], "method", false, false, false, 16), "html", null, true);
        yield "\"
                       required>
                ";
        // line 19
        yield "                <button type=\"submit\" class=\"btn rounded-pill px-4\" style=\"background-color: var(--primary-color); color: white;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 1-1.414 1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    ";
        // line 29
        yield "    <div class=\"row g-3\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 31
            yield "            <div class=\"col-6 col-md-4 col-lg-3\">
                <div class=\"card h-100 border-0 shadow-sm overflow-hidden\" style=\"border-radius: 20px;\">

                    ";
            // line 35
            yield "                    <div class=\"position-relative\" style=\"aspect-ratio: 2/3; background-color: #f0f0f0;\">
                        ";
            // line 36
            $context["cover_url"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "cover_i", [], "any", true, true, false, 36)) ? ((("https://covers.openlibrary.org/b/id/" . CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["book"], "cover_i", [], "any", false, false, false, 37)) . "-L.jpg")) : ("/images/6940604.jpg"));
            // line 39
            yield "
                        <img src=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cover_url"]) || array_key_exists("cover_url", $context) ? $context["cover_url"] : (function () { throw new RuntimeError('Variable "cover_url" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\"
                             class=\"w-100 h-100\"
                             style=\"object-fit: cover;\"
                             alt=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 43), "html", null, true);
            yield "\"
                             onerror=\"this.src='/images/6940604.jpg';\">

                        ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, $context["book"], "first_publish_year", [], "any", true, true, false, 46)) {
                // line 47
                yield "                            <span class=\"position-absolute bottom-0 end-0 m-2 badge bg-dark opacity-75\">
                                ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "first_publish_year", [], "any", false, false, false, 48), "html", null, true);
                yield "
                            </span>
                        ";
            }
            // line 51
            yield "                    </div>

                    <div class=\"card-body d-flex flex-column p-2 px-3\">
                        <h6 class=\"card-title fw-bold mb-1 text-truncate\" title=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 54), "html", null, true);
            yield "\">
                            ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 55), "html", null, true);
            yield "
                        </h6>
                        <p class=\"card-text small text-muted mb-2 text-truncate\">
                            ";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author_name", [], "any", true, true, false, 58) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author_name", [], "any", false, false, false, 58)))) {
                // line 59
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author_name", [], "any", false, false, false, 59), ", "), "html", null, true);
                yield "
                            ";
            } else {
                // line 61
                yield "                                Auteur inconnu
                            ";
            }
            // line 63
            yield "                        </p>

                        ";
            // line 66
            yield "                        <form action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_book");
            yield "\" method=\"post\" class=\"mt-auto pb-1\">
                            <input type=\"hidden\" name=\"title\" value=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 67), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"authors\" value=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author_name", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author_name", [], "any", false, false, false, 68), [])) : ([])), ", "), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"openLibraryKey\" value=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "key", [], "any", false, false, false, 69), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"imageCover\" value=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cover_url"]) || array_key_exists("cover_url", $context) ? $context["cover_url"] : (function () { throw new RuntimeError('Variable "cover_url" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"isbn\" value=\"";
            // line 71
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "isbn", [], "any", true, true, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "isbn", [], "any", false, false, false, 71), 0, [], "array", false, false, false, 71), "html", null, true)) : (""));
            yield "\">

                            ";
            // line 74
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "subject", [], "any", true, true, false, 74) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "subject", [], "any", false, false, false, 74)))) {
                // line 75
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["book"], "subject", [], "any", false, false, false, 75), 0, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 76
                    yield "                                    <input type=\"hidden\" name=\"subjects[]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sub"], "html", null, true);
                    yield "\">
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                yield "                            ";
            }
            // line 79
            yield "
                            <button type=\"submit\" class=\"btn btn-sm w-100 rounded-pill fw-bold border-2 btn-outline-primary\">
                                + Ajouter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "query", [], "any", false, false, false, 88), "get", ["query"], "method", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "                <div class=\"col-12 text-center py-5\">
                    <img src=\"https://illustrations.popsy.co/amber/search-not-found.svg\" alt=\"Not found\" style=\"height: 150px;\">
                    <p class=\"text-muted mt-3\">Aucun livre trouvé pour cette recherche.</p>
                </div>
            ";
            }
            // line 94
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "open_library/index.html.twig";
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
        return array (  268 => 95,  262 => 94,  255 => 89,  252 => 88,  250 => 87,  238 => 79,  235 => 78,  226 => 76,  221 => 75,  218 => 74,  213 => 71,  209 => 70,  205 => 69,  201 => 68,  197 => 67,  192 => 66,  188 => 63,  184 => 61,  178 => 59,  176 => 58,  170 => 55,  166 => 54,  161 => 51,  155 => 48,  152 => 47,  150 => 46,  144 => 43,  138 => 40,  135 => 39,  133 => 37,  132 => 36,  129 => 35,  124 => 31,  119 => 30,  116 => 29,  105 => 19,  100 => 16,  91 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rechercher un livre - Kitab{% endblock %}

{% block body %}
    <div class=\"row justify-content-center mb-4 mt-2\">
        <div class=\"col-12 col-lg-8\">
            <h2 class=\"fw-bold mb-3\" style=\"color: var(--primary-color);\">Découvrir</h2>

            {# Barre de recherche style \"Pill\" #}
            <form action=\"{{ path('search_books') }}\" method=\"get\" class=\"shadow-sm rounded-pill bg-white d-flex align-items-center p-1 border\">
                <input type=\"text\"
                       class=\"form-control border-0 bg-transparent ps-4 shadow-none\"
                       name=\"query\"
                       placeholder=\"Titre, auteur, ISBN...\"
                       value=\"{{ app.request.query.get('query') }}\"
                       required>
                {# Le champ openLibraryKey a été supprimé d'ici car il n'a rien à faire dans la recherche globale #}
                <button type=\"submit\" class=\"btn rounded-pill px-4\" style=\"background-color: var(--primary-color); color: white;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                        <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 1-1.414 1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    {# Grille de livres #}
    <div class=\"row g-3\">
        {% for book in books %}
            <div class=\"col-6 col-md-4 col-lg-3\">
                <div class=\"card h-100 border-0 shadow-sm overflow-hidden\" style=\"border-radius: 20px;\">

                    {# Zone Image avec ratio constant #}
                    <div class=\"position-relative\" style=\"aspect-ratio: 2/3; background-color: #f0f0f0;\">
                        {% set cover_url = book.cover_i is defined
                            ? 'https://covers.openlibrary.org/b/id/' ~ book.cover_i ~ '-L.jpg'
                            : '/images/6940604.jpg' %}

                        <img src=\"{{ cover_url }}\"
                             class=\"w-100 h-100\"
                             style=\"object-fit: cover;\"
                             alt=\"{{ book.title }}\"
                             onerror=\"this.src='/images/6940604.jpg';\">

                        {% if book.first_publish_year is defined %}
                            <span class=\"position-absolute bottom-0 end-0 m-2 badge bg-dark opacity-75\">
                                {{ book.first_publish_year }}
                            </span>
                        {% endif %}
                    </div>

                    <div class=\"card-body d-flex flex-column p-2 px-3\">
                        <h6 class=\"card-title fw-bold mb-1 text-truncate\" title=\"{{ book.title }}\">
                            {{ book.title }}
                        </h6>
                        <p class=\"card-text small text-muted mb-2 text-truncate\">
                            {% if book.author_name is defined and book.author_name is iterable %}
                                {{ book.author_name|join(', ') }}
                            {% else %}
                                Auteur inconnu
                            {% endif %}
                        </p>

                        {# Formulaire d'ajout rapide enrichi #}
                        <form action=\"{{ path('add_book') }}\" method=\"post\" class=\"mt-auto pb-1\">
                            <input type=\"hidden\" name=\"title\" value=\"{{ book.title }}\">
                            <input type=\"hidden\" name=\"authors\" value=\"{{ book.author_name|default([])|join(', ') }}\">
                            <input type=\"hidden\" name=\"openLibraryKey\" value=\"{{ book.key }}\">
                            <input type=\"hidden\" name=\"imageCover\" value=\"{{ cover_url }}\">
                            <input type=\"hidden\" name=\"isbn\" value=\"{{ (book.isbn is defined) ? book.isbn[0] : '' }}\">

                            {# Les sujets sont passés ici pour aider le contrôleur #}
                            {% if book.subject is defined and book.subject is iterable %}
                                {% for sub in book.subject|slice(0, 5) %}
                                    <input type=\"hidden\" name=\"subjects[]\" value=\"{{ sub }}\">
                                {% endfor %}
                            {% endif %}

                            <button type=\"submit\" class=\"btn btn-sm w-100 rounded-pill fw-bold border-2 btn-outline-primary\">
                                + Ajouter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        {% else %}
            {% if app.request.query.get('query') %}
                <div class=\"col-12 text-center py-5\">
                    <img src=\"https://illustrations.popsy.co/amber/search-not-found.svg\" alt=\"Not found\" style=\"height: 150px;\">
                    <p class=\"text-muted mt-3\">Aucun livre trouvé pour cette recherche.</p>
                </div>
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}", "open_library/index.html.twig", "/var/www/html/backend/templates/open_library/index.html.twig");
    }
}
