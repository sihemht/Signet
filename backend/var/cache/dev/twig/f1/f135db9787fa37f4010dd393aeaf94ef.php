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

/* books/show.html.twig */
class __TwigTemplate_5f74be2ecda67dee9f05e6eba7fbc4f3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " - Kitab";
        
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
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8 col-lg-6\">

                ";
        // line 11
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_index");
        yield "\" class=\"text-decoration-none text-muted small mb-3 d-inline-block\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-chevron-left\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\" d=\"M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0\"/>
                    </svg> Retour à la liste
                </a>

                ";
        // line 18
        yield "                <div class=\"card border-0 shadow-sm overflow-hidden\" style=\"border-radius: 25px;\">
                    ";
        // line 20
        yield "                    <div class=\"text-center p-4 bg-light\">
                        ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 21, $this->source); })()), "imageCover", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 22, $this->source); })()), "imageCover", [], "any", false, false, false, 22), "html", null, true);
            yield "\" class=\"shadow-lg rounded-3 mb-3\" style=\"width: 150px; height: 220px; object-fit: cover;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
                        ";
        } else {
            // line 24
            yield "                            <div class=\"bg-secondary-subtle mx-auto d-flex align-items-center justify-content-center rounded-3 shadow-sm mb-3\" style=\"width: 150px; height: 220px;\">
                                <span class=\"text-muted small px-2\">Pas de couverture</span>
                            </div>
                        ";
        }
        // line 28
        yield "
                        <h1 class=\"h3 fw-bold mb-1\" style=\"color: var(--primary-color);\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
        yield "</h1>
                        <p class=\"text-muted mb-2\">
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 31, $this->source); })()), "authors", [], "any", false, false, false, 31));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 32
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["author"], "html", null, true);
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 33
            yield "                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                                Auteur inconnu
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['author'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        </p>

                        ";
        // line 39
        yield "                        ";
        $context["statusClass"] = "bg-secondary";
        // line 40
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 40, $this->source); })()), "readingStatus", [], "any", false, false, false, 40) == "reading")) {
            $context["statusClass"] = "bg-primary";
            // line 41
            yield "                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 41, $this->source); })()), "readingStatus", [], "any", false, false, false, 41) == "finished")) {
            $context["statusClass"] = "bg-success";
        }
        // line 42
        yield "
                        <span class=\"badge rounded-pill ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 43, $this->source); })()), "html", null, true);
        yield " px-3 py-2\">
                        ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 44, $this->source); })()), "readingStatus", [], "any", false, false, false, 44), ["_" => " "])), "html", null, true);
        yield "
                    </span>
                    </div>

                    <div class=\"card-body px-4\">
                        ";
        // line 50
        yield "                        <div class=\"text-center mb-4\">
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            yield "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"";
            yield ((($context["i"] <= ((CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "rating", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 52, $this->source); })()), "rating", [], "any", false, false, false, 52), 0)) : (0)))) ? ("#ffc107") : ("#dee2e6"));
            yield "\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3.612 15.443c-.387.197-.859-.141-.741-.557l.794-2.825-2.057-2.003c-.306-.298-.138-.813.298-.876l2.875-.415 1.285-2.603a.523.523 0 0 1 .925 0l1.285 2.603 2.875.415c.436.063.604.578.298.876l-2.057 2.003.794 2.825c.119.416-.354.754-.741.557l-2.528-1.328-2.528 1.328z\"/>
                                </svg>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                        </div>

                        <div class=\"row g-3\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Saga</small>
                                <span class=\"small\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "saga", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 61, $this->source); })()), "saga", [], "any", false, false, false, 61), "-")) : ("-")), "html", null, true);
        yield " ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 61, $this->source); })()), "number", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "(T.";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 61, $this->source); })()), "number", [], "any", false, false, false, 61), "html", null, true);
            yield ")";
        }
        yield "</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Pages</small>
                                <span class=\"small\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "numberOfPage", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 65, $this->source); })()), "numberOfPage", [], "any", false, false, false, 65), "Non précisé")) : ("Non précisé")), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Achat</small>
                                <span class=\"small\">";
        // line 69
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 69, $this->source); })()), "monthOfPurchase", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 69, $this->source); })()), "monthOfPurchase", [], "any", false, false, false, 69), "M Y"), "html", null, true)) : ("-"));
        yield "</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Genres</small>
                                <div class=\"d-flex flex-wrap gap-1 mt-1\">
                                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 74, $this->source); })()), "genres", [], "any", false, false, false, 74));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 75
            yield "                                        <span class=\"badge bg-light text-dark border fw-normal\" style=\"font-size: 0.7rem;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["genre"], "html", null, true);
            yield "</span>
                                    ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "                                        <span class=\"text-muted small\">Aucun genre</span>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                </div>
                            </div>
                        </div>

                        <hr class=\"my-4 opacity-50\">

                        ";
        // line 86
        yield "                        <div class=\"d-grid gap-2 mb-2\">
                            <a href=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
        yield "\" class=\"btn btn-primary rounded-pill py-2\" style=\"background-color: var(--primary-color); border: none;\">
                                Modifier les informations
                            </a>
                            <div class=\"text-center mt-2\">
                                ";
        // line 91
        yield Twig\Extension\CoreExtension::include($this->env, $context, "books/_delete_form.html.twig");
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 99
        yield "        <div style=\"height: 40px;\"></div>
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
        return "books/show.html.twig";
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
        return array (  309 => 99,  299 => 91,  292 => 87,  289 => 86,  281 => 79,  274 => 77,  272 => 76,  265 => 75,  260 => 74,  252 => 69,  245 => 65,  232 => 61,  225 => 56,  214 => 52,  210 => 51,  207 => 50,  199 => 44,  195 => 43,  192 => 42,  187 => 41,  183 => 40,  180 => 39,  176 => 36,  169 => 34,  156 => 33,  150 => 32,  132 => 31,  127 => 29,  124 => 28,  118 => 24,  110 => 22,  108 => 21,  105 => 20,  102 => 18,  92 => 11,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ book.title }} - Kitab{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8 col-lg-6\">

                {# Bouton retour discret #}
                <a href=\"{{ path('app_books_index') }}\" class=\"text-decoration-none text-muted small mb-3 d-inline-block\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-chevron-left\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\" d=\"M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0\"/>
                    </svg> Retour à la liste
                </a>

                {# Fiche Livre #}
                <div class=\"card border-0 shadow-sm overflow-hidden\" style=\"border-radius: 25px;\">
                    {# En-tête avec Image de couverture #}
                    <div class=\"text-center p-4 bg-light\">
                        {% if book.imageCover %}
                            <img src=\"{{ book.imageCover }}\" class=\"shadow-lg rounded-3 mb-3\" style=\"width: 150px; height: 220px; object-fit: cover;\" alt=\"{{ book.title }}\">
                        {% else %}
                            <div class=\"bg-secondary-subtle mx-auto d-flex align-items-center justify-content-center rounded-3 shadow-sm mb-3\" style=\"width: 150px; height: 220px;\">
                                <span class=\"text-muted small px-2\">Pas de couverture</span>
                            </div>
                        {% endif %}

                        <h1 class=\"h3 fw-bold mb-1\" style=\"color: var(--primary-color);\">{{ book.title }}</h1>
                        <p class=\"text-muted mb-2\">
                            {% for author in book.authors %}
                                {{ author }}{% if not loop.last %}, {% endif %}
                            {% else %}
                                Auteur inconnu
                            {% endfor %}
                        </p>

                        {# Affichage du Workflow/Status avec couleurs dynamiques #}
                        {% set statusClass = 'bg-secondary' %}
                        {% if book.readingStatus == 'reading' %}{% set statusClass = 'bg-primary' %}
                        {% elseif book.readingStatus == 'finished' %}{% set statusClass = 'bg-success' %}{% endif %}

                        <span class=\"badge rounded-pill {{ statusClass }} px-3 py-2\">
                        {{ book.readingStatus|replace({'_': ' '})|capitalize }}
                    </span>
                    </div>

                    <div class=\"card-body px-4\">
                        {# Rating avec étoiles #}
                        <div class=\"text-center mb-4\">
                            {% for i in 1..5 %}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"{{ i <= book.rating|default(0) ? '#ffc107' : '#dee2e6' }}\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3.612 15.443c-.387.197-.859-.141-.741-.557l.794-2.825-2.057-2.003c-.306-.298-.138-.813.298-.876l2.875-.415 1.285-2.603a.523.523 0 0 1 .925 0l1.285 2.603 2.875.415c.436.063.604.578.298.876l-2.057 2.003.794 2.825c.119.416-.354.754-.741.557l-2.528-1.328-2.528 1.328z\"/>
                                </svg>
                            {% endfor %}
                        </div>

                        <div class=\"row g-3\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Saga</small>
                                <span class=\"small\">{{ book.saga|default('-') }} {% if book.number %}(T.{{ book.number }}){% endif %}</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Pages</small>
                                <span class=\"small\">{{ book.numberOfPage|default('Non précisé') }}</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Achat</small>
                                <span class=\"small\">{{ book.monthOfPurchase ? book.monthOfPurchase|date('M Y') : '-' }}</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\">Genres</small>
                                <div class=\"d-flex flex-wrap gap-1 mt-1\">
                                    {% for genre in book.genres %}
                                        <span class=\"badge bg-light text-dark border fw-normal\" style=\"font-size: 0.7rem;\">{{ genre }}</span>
                                    {% else %}
                                        <span class=\"text-muted small\">Aucun genre</span>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>

                        <hr class=\"my-4 opacity-50\">

                        {# Actions #}
                        <div class=\"d-grid gap-2 mb-2\">
                            <a href=\"{{ path('app_books_edit', {'id': book.id}) }}\" class=\"btn btn-primary rounded-pill py-2\" style=\"background-color: var(--primary-color); border: none;\">
                                Modifier les informations
                            </a>
                            <div class=\"text-center mt-2\">
                                {{ include('books/_delete_form.html.twig') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {# Petit espace pour ne pas coller à la navbar basse #}
        <div style=\"height: 40px;\"></div>
    </div>
{% endblock %}", "books/show.html.twig", "/var/www/html/backend/templates/books/show.html.twig");
    }
}
