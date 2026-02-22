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

/* books/edit.html.twig */
class __TwigTemplate_e254270a6c483b4bd7d8813662f6b951 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/edit.html.twig"));

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

        yield "Modifier ";
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

                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <div class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn btn-light rounded-circle shadow-sm me-3\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-left\" viewBox=\"0 0 16 16\">
                                <path fill-rule=\"evenodd\" d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8\"/>
                            </svg>
                        </a>
                        <h1 class=\"h3 fw-bold mb-0\" style=\"color: var(--primary-color);\">Modifier</h1>
                    </div>

                    ";
        // line 21
        yield "                    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"text-muted small text-decoration-none\">Annuler</a>
                </div>

                ";
        // line 25
        yield "                <div class=\"card border-0 shadow-sm p-4 mb-4\" style=\"border-radius: 25px;\">
                    <div class=\"d-flex align-items-center mb-4 pb-3 border-bottom\">
                        <div class=\"flex-shrink-0\">
                            <img src=\"";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 28, $this->source); })()), "imageCover", [], "any", false, false, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 28, $this->source); })()), "imageCover", [], "any", false, false, false, 28), "html", null, true)) : ("/images/6940546.jpg"));
        yield "\" class=\"rounded shadow-sm\" style=\"width: 50px; height: 75px; object-fit: cover;\" alt=\"Aperçu\">
                        </div>
                        <div class=\"ms-3\">
                            <h6 class=\"fw-bold mb-0\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        yield "</h6>
                            <span class=\"badge rounded-pill bg-light text-dark border fw-normal\" style=\"font-size: 0.7rem;\">ID #";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>
                        </div>
                    </div>

                    ";
        // line 37
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "books/_form.html.twig", ["button_label" => "Enregistrer les modifications"]);
        yield "
                </div>

                ";
        // line 41
        yield "                <div class=\"card border-0 bg-danger-subtle p-3\" style=\"border-radius: 20px;\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div>
                            <small class=\"text-danger opacity-75\">Supprimer définitivement ce livre</small>
                        </div>
                        ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "books/_delete_form.html.twig");
        yield "
                    </div>
                </div>

            </div>
        </div>
        <div style=\"height: 60px;\"></div>
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
        return "books/edit.html.twig";
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
        return array (  149 => 46,  142 => 41,  135 => 37,  128 => 32,  124 => 31,  118 => 28,  113 => 25,  106 => 21,  95 => 12,  87 => 6,  77 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier {{ book.title }} - Kitab{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-8 col-lg-6\">

                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <div class=\"d-flex align-items-center\">
                        <a href=\"{{ path('app_books_show', {'id': book.id}) }}\" class=\"btn btn-light rounded-circle shadow-sm me-3\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-left\" viewBox=\"0 0 16 16\">
                                <path fill-rule=\"evenodd\" d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8\"/>
                            </svg>
                        </a>
                        <h1 class=\"h3 fw-bold mb-0\" style=\"color: var(--primary-color);\">Modifier</h1>
                    </div>

                    {# Lien vers la vue détails pour annuler #}
                    <a href=\"{{ path('app_books_show', {'id': book.id}) }}\" class=\"text-muted small text-decoration-none\">Annuler</a>
                </div>

                {# Card principale #}
                <div class=\"card border-0 shadow-sm p-4 mb-4\" style=\"border-radius: 25px;\">
                    <div class=\"d-flex align-items-center mb-4 pb-3 border-bottom\">
                        <div class=\"flex-shrink-0\">
                            <img src=\"{{ book.imageCover ?: '/images/6940546.jpg' }}\" class=\"rounded shadow-sm\" style=\"width: 50px; height: 75px; object-fit: cover;\" alt=\"Aperçu\">
                        </div>
                        <div class=\"ms-3\">
                            <h6 class=\"fw-bold mb-0\">{{ book.title }}</h6>
                            <span class=\"badge rounded-pill bg-light text-dark border fw-normal\" style=\"font-size: 0.7rem;\">ID #{{ book.id }}</span>
                        </div>
                    </div>

                    {# Inclusion du formulaire avec label personnalisé #}
                    {{ include('books/_form.html.twig', {'button_label': 'Enregistrer les modifications'}) }}
                </div>

                {# Suppression #}
                <div class=\"card border-0 bg-danger-subtle p-3\" style=\"border-radius: 20px;\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div>
                            <small class=\"text-danger opacity-75\">Supprimer définitivement ce livre</small>
                        </div>
                        {{ include('books/_delete_form.html.twig') }}
                    </div>
                </div>

            </div>
        </div>
        <div style=\"height: 60px;\"></div>
    </div>
{% endblock %}", "books/edit.html.twig", "/var/www/html/backend/templates/books/edit.html.twig");
    }
}
