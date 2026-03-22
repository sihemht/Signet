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
        yield " ";
        
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

                <div class=\"card border-0 shadow-sm overflow-hidden\" style=\"border-radius: 25px;\">
                    ";
        // line 19
        yield "                    <div class=\"p-4 bg-light text-center\">
                        ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 20, $this->source); })()), "imageCover", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 21, $this->source); })()), "imageCover", [], "any", false, false, false, 21), "html", null, true);
            yield "\" class=\"shadow-lg rounded-3 mb-3\" style=\"width: 150px; height: 220px; object-fit: cover;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
                        ";
        } else {
            // line 23
            yield "                            <div class=\"bg-secondary-subtle mx-auto d-flex align-items-center justify-content-center rounded-3 shadow-sm mb-3\" style=\"width: 150px; height: 220px;\">
                                <span class=\"text-muted small px-2\">Pas de couverture</span>
                            </div>
                        ";
        }
        // line 27
        yield "
                        ";
        // line 29
        yield "                        <div class=\"mb-2\">
                            ";
        // line 30
        $context["statusClass"] = "bg-secondary";
        // line 31
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 31, $this->source); })()), "readingStatus", [], "any", false, false, false, 31) == "reading")) {
            $context["statusClass"] = "bg-primary";
            // line 32
            yield "                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 32, $this->source); })()), "readingStatus", [], "any", false, false, false, 32) == "finished")) {
            $context["statusClass"] = "bg-success";
        }
        // line 33
        yield "                            <span class=\"badge rounded-pill ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 33, $this->source); })()), "html", null, true);
        yield " px-3 py-2 shadow-sm\" style=\"font-size: 0.7rem;\">
                                ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 34, $this->source); })()), "readingStatus", [], "any", false, false, false, 34), ["_" => " "])), "html", null, true);
        yield "
                            </span>
                        </div>

                        <h1 class=\"h3 fw-bold mb-1\" style=\"color: var(--primary-color);\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), "html", null, true);
        yield "</h1>
                        <p class=\"text-muted mb-0\">
                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 40, $this->source); })()), "authors", [], "any", false, false, false, 40));
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
            // line 41
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["author"], "html", null, true);
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 42
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
            // line 43
            yield "                                Auteur inconnu
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['author'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                        </p>
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
            yield "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" fill=\"";
            yield ((($context["i"] <= ((CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "rating", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 52, $this->source); })()), "rating", [], "any", false, false, false, 52), 0)) : (0)))) ? ("#ffc107") : ("#dee2e6"));
            yield "\" class=\"bi bi-star-fill mx-1\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3.612 15.443c-.387.197-.859-.141-.741-.557l.794-2.825-2.057-2.003c-.306-.298-.138-.813.298-.876l2.875-.415 1.285-2.603a.523.523 0 0 1 .925 0l1.285 2.603 2.875.415c.436.063.604.578.298.876l-2.057 2.003.794 2.825c.119.416-.354.754-.741.557l-2.528-1.328-2.528 1.328z\"/>
                                </svg>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                        </div>

                        ";
        // line 59
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                            <div class=\"mb-4\">
                                <h6 class=\"fw-bold border-start border-4 ps-2\" style=\"border-color: var(--primary-color) !important;\">Résumé</h6>
                                <p class=\"text-muted small text-start\" style=\"line-height: 1.6;\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), "html", null, true);
            yield "</p>
                            </div>
                        ";
        }
        // line 65
        yield "
                        ";
        // line 67
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 67, $this->source); })()), "subjects", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "                            <div class=\"mb-4 d-flex flex-wrap gap-1\">
                                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 69, $this->source); })()), "subjects", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 70
                yield "                                    <span class=\"badge rounded-pill bg-white text-dark border fw-normal\" style=\"font-size: 0.65rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subject"], "html", null, true);
                yield "</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subject'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                            </div>
                        ";
        }
        // line 74
        yield "
                        <div class=\"row g-3 py-3 border-top border-bottom bg-light bg-opacity-50 rounded-4\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Saga</small>
                                <span class=\"small\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "saga", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 78, $this->source); })()), "saga", [], "any", false, false, false, 78), "-")) : ("-")), "html", null, true);
        yield " ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 78, $this->source); })()), "number", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "(T.";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 78, $this->source); })()), "number", [], "any", false, false, false, 78), "html", null, true);
            yield ")";
        }
        yield "</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Pages</small>
                                <span class=\"small\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "numberOfPage", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 82, $this->source); })()), "numberOfPage", [], "any", false, false, false, 82), "Non précisé")) : ("Non précisé")), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Identifiant ISBN</small>
                                <span class=\"small text-truncate d-block\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["book"] ?? null), "isbn", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 86, $this->source); })()), "isbn", [], "any", false, false, false, 86), "-")) : ("-")), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Achat</small>
                                <span class=\"small\">";
        // line 90
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 90, $this->source); })()), "monthOfPurchase", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 90, $this->source); })()), "monthOfPurchase", [], "any", false, false, false, 90), "M Y"), "html", null, true)) : ("-"));
        yield "</span>
                            </div>
                        </div>

                        ";
        // line 95
        yield "                        <div class=\"d-grid gap-2 mt-4\">
                            <a href=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        yield "\" class=\"btn btn-primary rounded-pill py-2\" style=\"background-color: var(--primary-color); border: none;\">
                                Modifier les informations
                            </a>
                            <div class=\"text-center mt-2\">
                                ";
        // line 100
        yield Twig\Extension\CoreExtension::include($this->env, $context, "books/_delete_form.html.twig");
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"height: 40px;\"></div>
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
        return array (  317 => 100,  310 => 96,  307 => 95,  300 => 90,  293 => 86,  286 => 82,  273 => 78,  267 => 74,  263 => 72,  254 => 70,  250 => 69,  247 => 68,  244 => 67,  241 => 65,  235 => 62,  231 => 60,  228 => 59,  224 => 56,  213 => 52,  209 => 51,  206 => 50,  200 => 45,  193 => 43,  180 => 42,  174 => 41,  156 => 40,  151 => 38,  144 => 34,  139 => 33,  134 => 32,  130 => 31,  128 => 30,  125 => 29,  122 => 27,  116 => 23,  108 => 21,  106 => 20,  103 => 19,  92 => 11,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ book.title }} {% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8 col-lg-6\">

                {# Bouton retour #}
                <a href=\"{{ path('app_books_index') }}\" class=\"text-decoration-none text-muted small mb-3 d-inline-block\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-chevron-left\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\" d=\"M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0\"/>
                    </svg> Retour à la liste
                </a>

                <div class=\"card border-0 shadow-sm overflow-hidden\" style=\"border-radius: 25px;\">
                    {# En-tête #}
                    <div class=\"p-4 bg-light text-center\">
                        {% if book.imageCover %}
                            <img src=\"{{ book.imageCover }}\" class=\"shadow-lg rounded-3 mb-3\" style=\"width: 150px; height: 220px; object-fit: cover;\" alt=\"{{ book.title }}\">
                        {% else %}
                            <div class=\"bg-secondary-subtle mx-auto d-flex align-items-center justify-content-center rounded-3 shadow-sm mb-3\" style=\"width: 150px; height: 220px;\">
                                <span class=\"text-muted small px-2\">Pas de couverture</span>
                            </div>
                        {% endif %}

                        {# Statut déplacé en haut pour une meilleure visibilité #}
                        <div class=\"mb-2\">
                            {% set statusClass = 'bg-secondary' %}
                            {% if book.readingStatus == 'reading' %}{% set statusClass = 'bg-primary' %}
                            {% elseif book.readingStatus == 'finished' %}{% set statusClass = 'bg-success' %}{% endif %}
                            <span class=\"badge rounded-pill {{ statusClass }} px-3 py-2 shadow-sm\" style=\"font-size: 0.7rem;\">
                                {{ book.readingStatus|replace({'_': ' '})|capitalize }}
                            </span>
                        </div>

                        <h1 class=\"h3 fw-bold mb-1\" style=\"color: var(--primary-color);\">{{ book.title }}</h1>
                        <p class=\"text-muted mb-0\">
                            {% for author in book.authors %}
                                {{ author }}{% if not loop.last %}, {% endif %}
                            {% else %}
                                Auteur inconnu
                            {% endfor %}
                        </p>
                    </div>

                    <div class=\"card-body px-4\">
                        {# Rating #}
                        <div class=\"text-center mb-4\">
                            {% for i in 1..5 %}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" fill=\"{{ i <= book.rating|default(0) ? '#ffc107' : '#dee2e6' }}\" class=\"bi bi-star-fill mx-1\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3.612 15.443c-.387.197-.859-.141-.741-.557l.794-2.825-2.057-2.003c-.306-.298-.138-.813.298-.876l2.875-.415 1.285-2.603a.523.523 0 0 1 .925 0l1.285 2.603 2.875.415c.436.063.604.578.298.876l-2.057 2.003.794 2.825c.119.416-.354.754-.741.557l-2.528-1.328-2.528 1.328z\"/>
                                </svg>
                            {% endfor %}
                        </div>

                        {# Résumé (Aligné à gauche pour la lecture) #}
                        {% if book.description %}
                            <div class=\"mb-4\">
                                <h6 class=\"fw-bold border-start border-4 ps-2\" style=\"border-color: var(--primary-color) !important;\">Résumé</h6>
                                <p class=\"text-muted small text-start\" style=\"line-height: 1.6;\">{{ book.description }}</p>
                            </div>
                        {% endif %}

                        {# Tags #}
                        {% if book.subjects %}
                            <div class=\"mb-4 d-flex flex-wrap gap-1\">
                                {% for subject in book.subjects %}
                                    <span class=\"badge rounded-pill bg-white text-dark border fw-normal\" style=\"font-size: 0.65rem;\">{{ subject }}</span>
                                {% endfor %}
                            </div>
                        {% endif %}

                        <div class=\"row g-3 py-3 border-top border-bottom bg-light bg-opacity-50 rounded-4\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Saga</small>
                                <span class=\"small\">{{ book.saga|default('-') }} {% if book.number %}(T.{{ book.number }}){% endif %}</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Pages</small>
                                <span class=\"small\">{{ book.numberOfPage|default('Non précisé') }}</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Identifiant ISBN</small>
                                <span class=\"small text-truncate d-block\">{{ book.isbn|default('-') }}</span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block small fw-bold text-uppercase\" style=\"font-size: 0.6rem;\">Achat</small>
                                <span class=\"small\">{{ book.monthOfPurchase ? book.monthOfPurchase|date('M Y') : '-' }}</span>
                            </div>
                        </div>

                        {# Actions #}
                        <div class=\"d-grid gap-2 mt-4\">
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
        <div style=\"height: 40px;\"></div>
    </div>
{% endblock %}", "books/show.html.twig", "/var/www/html/backend/templates/books/show.html.twig");
    }
}
