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

/* base.html.twig */
class __TwigTemplate_bcb3be971ab2d2b0987be05fda8d4264 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

                <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
                <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap\" rel=\"stylesheet\">

                <style>
                    :root {
                        --primary-color: #634832; /* Un marron livre ancien élégant */
                        --accent-color: #d4a373;
                        --bg-light: #fefae0;
                    }

                    body {
                        font-family: 'Inter', sans-serif;
                        background-color: #f8f9fa;
                        padding-top: 70px; /* Espace pour la navbar haute */
                        padding-bottom: 80px; /* Espace pour la navbar basse */
                        color: #333;
                    }

                    /* Navbar du haut */
                    .navbar-top {
                        background: white !important;
                        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
                        border-bottom: 1px solid #eee;
                    }

                    .navbar-brand {
                        font-weight: 700;
                        color: var(--primary-color) !important;
                        letter-spacing: -0.5px;
                    }

                    /* Navbar du bas (Style Application Mobile) */
                    .navbar-bottom {
                        background: rgba(255, 255, 255, 0.9) !important;
                        backdrop-filter: blur(10px);
                        border-top: 1px solid #eee;
                        padding: 10px 0;
                    }

                    .nav-link-custom {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        text-decoration: none;
                        color: #666;
                        transition: 0.3s;
                    }

                    .nav-link-custom:hover, .nav-link-custom.active {
                        color: var(--primary-color);
                    }

                    .nav-icon {
                        font-size: 1.4rem;
                        margin-bottom: 2px;
                    }

                    /* Amélioration des cards (à utiliser dans tes autres templates) */
                    .card {
                        border: none;
                        border-radius: 15px;
                        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
                        transition: transform 0.2s;
                    }

                    .card:hover {
                        transform: translateY(-5px);
                    }
                </style>

                ";
        // line 78
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 79
        yield "                </head>
                <body>

                <nav class=\"navbar navbar-top fixed-top\">
                    <div class=\"container\">
                        <a class=\"navbar-brand d-flex align-items-center\" href=\"/books\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-book-half me-2\" viewBox=\"0 0 16 16\">
                                <path d=\"M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783\"/>
                            </svg>
                            Signet
                        </a>
                        <div class=\"ms-auto\">
                            <span class=\"badge rounded-pill bg-light text-dark border\">Ma Collection</span>
                        </div>
                    </div>
                </nav>

                <main class=\"container\">
                    ";
        // line 97
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 98
        yield "                </main>

                <nav class=\"navbar navbar-bottom fixed-bottom\">
                    <div class=\"container d-flex justify-content-around\">
                        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_books_index");
        yield "\" class=\"nav-link-custom ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, false, 102), "get", ["_route"], "method", false, false, false, 102) == "app_books_index")) ? ("active") : (""));
        yield "\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"currentColor\" class=\"bi bi-bookmarks\" viewBox=\"0 0 16 16\">
                                <path d=\"M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L8 13.101l-3.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z\"/>
                            </svg>
                            <small style=\"font-size: 0.7rem;\">Mes Livres</small>
                        </a>

                        <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_books");
        yield "\" class=\"nav-link-custom ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "request", [], "any", false, false, false, 109), "get", ["_route"], "method", false, false, false, 109) == "search_books")) ? ("active") : (""));
        yield "\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"currentColor\" class=\"bi bi-plus-circle-fill text-primary\" viewBox=\"0 0 16 16\" style=\"font-size: 1.8rem;\">
                                <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z\"/>
                            </svg>
                            <small style=\"font-size: 0.7rem;\">Ajouter</small>
                        </a>

                        <a href=\"#\" class=\"nav-link-custom\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                            </svg>
                            <small style=\"font-size: 0.7rem;\">Profile</small>
                        </a>
                    </div>
                </nav>

                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

                ";
        // line 126
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 127
        yield "
                </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Signet - Ma Bibliothèque";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  256 => 126,  240 => 97,  224 => 78,  207 => 6,  197 => 127,  195 => 126,  173 => 109,  161 => 102,  155 => 98,  153 => 97,  133 => 79,  131 => 78,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                <title>{% block title %}Signet - Ma Bibliothèque{% endblock %}</title>

                <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
                <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap\" rel=\"stylesheet\">

                <style>
                    :root {
                        --primary-color: #634832; /* Un marron livre ancien élégant */
                        --accent-color: #d4a373;
                        --bg-light: #fefae0;
                    }

                    body {
                        font-family: 'Inter', sans-serif;
                        background-color: #f8f9fa;
                        padding-top: 70px; /* Espace pour la navbar haute */
                        padding-bottom: 80px; /* Espace pour la navbar basse */
                        color: #333;
                    }

                    /* Navbar du haut */
                    .navbar-top {
                        background: white !important;
                        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
                        border-bottom: 1px solid #eee;
                    }

                    .navbar-brand {
                        font-weight: 700;
                        color: var(--primary-color) !important;
                        letter-spacing: -0.5px;
                    }

                    /* Navbar du bas (Style Application Mobile) */
                    .navbar-bottom {
                        background: rgba(255, 255, 255, 0.9) !important;
                        backdrop-filter: blur(10px);
                        border-top: 1px solid #eee;
                        padding: 10px 0;
                    }

                    .nav-link-custom {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        text-decoration: none;
                        color: #666;
                        transition: 0.3s;
                    }

                    .nav-link-custom:hover, .nav-link-custom.active {
                        color: var(--primary-color);
                    }

                    .nav-icon {
                        font-size: 1.4rem;
                        margin-bottom: 2px;
                    }

                    /* Amélioration des cards (à utiliser dans tes autres templates) */
                    .card {
                        border: none;
                        border-radius: 15px;
                        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
                        transition: transform 0.2s;
                    }

                    .card:hover {
                        transform: translateY(-5px);
                    }
                </style>

                {% block stylesheets %}{% endblock %}
                </head>
                <body>

                <nav class=\"navbar navbar-top fixed-top\">
                    <div class=\"container\">
                        <a class=\"navbar-brand d-flex align-items-center\" href=\"/books\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-book-half me-2\" viewBox=\"0 0 16 16\">
                                <path d=\"M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783\"/>
                            </svg>
                            Signet
                        </a>
                        <div class=\"ms-auto\">
                            <span class=\"badge rounded-pill bg-light text-dark border\">Ma Collection</span>
                        </div>
                    </div>
                </nav>

                <main class=\"container\">
                    {% block body %}{% endblock %}
                </main>

                <nav class=\"navbar navbar-bottom fixed-bottom\">
                    <div class=\"container d-flex justify-content-around\">
                        <a href=\"{{ path('app_books_index') }}\" class=\"nav-link-custom {{ app.request.get('_route') == 'app_books_index' ? 'active' : '' }}\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"currentColor\" class=\"bi bi-bookmarks\" viewBox=\"0 0 16 16\">
                                <path d=\"M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L8 13.101l-3.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z\"/>
                            </svg>
                            <small style=\"font-size: 0.7rem;\">Mes Livres</small>
                        </a>

                        <a href=\"{{ path('search_books') }}\" class=\"nav-link-custom {{ app.request.get('_route') == 'search_books' ? 'active' : '' }}\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"currentColor\" class=\"bi bi-plus-circle-fill text-primary\" viewBox=\"0 0 16 16\" style=\"font-size: 1.8rem;\">
                                <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z\"/>
                            </svg>
                            <small style=\"font-size: 0.7rem;\">Ajouter</small>
                        </a>

                        <a href=\"#\" class=\"nav-link-custom\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" fill=\"currentColor\" class=\"bi bi-person-circle\" viewBox=\"0 0 16 16\">
                            </svg>
                            <small style=\"font-size: 0.7rem;\">Profile</small>
                        </a>
                    </div>
                </nav>

                <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

                {% block javascripts %}{% endblock %}

                </body>
</html>", "base.html.twig", "/var/www/html/backend/templates/base.html.twig");
    }
}
