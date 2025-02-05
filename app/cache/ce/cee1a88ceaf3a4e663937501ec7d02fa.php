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

/* front/article.twig */
class __TwigTemplate_844161f170bd1867dbf8b956ac9e96ee extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Article - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\">
</head>
<body class=\"bg-gray-100\">
    <nav class=\"bg-gray-600 p-4 text-white flex justify-between items-center\">
        <div class=\"text-xl font-bold ml-4\">mvcArticle</div>
        <div class=\"space-x-4 mr-4\">
            <a href=\"/login\" class=\"hover:underline\">Login</a>
            <a href=\"/register\" class=\"hover:underline\">Register</a>
            <a href=\"/home\" class=\"hover:underline\">ALL Articles</a>
        </div>
    </nav>
    <div class=\"max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 mb-16\">
        <!-- Article Title -->
        <h1 class=\"text-4xl font-extrabold text-center text-indigo-600 mb-6\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        yield "</h1>

        <!-- Article Content -->
        <div class=\"prose max-w-none text-gray-700\">
            <p>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
        </div>
    </div>
</body>
</html>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/article.twig";
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
        return array (  73 => 24,  66 => 20,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Article - {{ article.title }}</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\">
</head>
<body class=\"bg-gray-100\">
    <nav class=\"bg-gray-600 p-4 text-white flex justify-between items-center\">
        <div class=\"text-xl font-bold ml-4\">mvcArticle</div>
        <div class=\"space-x-4 mr-4\">
            <a href=\"/login\" class=\"hover:underline\">Login</a>
            <a href=\"/register\" class=\"hover:underline\">Register</a>
            <a href=\"/home\" class=\"hover:underline\">ALL Articles</a>
        </div>
    </nav>
    <div class=\"max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 mb-16\">
        <!-- Article Title -->
        <h1 class=\"text-4xl font-extrabold text-center text-indigo-600 mb-6\">{{ article.title }}</h1>

        <!-- Article Content -->
        <div class=\"prose max-w-none text-gray-700\">
            <p>{{ article.content }}</p>
        </div>
    </div>
</body>
</html>

", "front/article.twig", "C:\\laragon\\www\\D-veloppement-d-une-architecture-MVC-moderne-avec-PHP-et-PostgreSQL\\app\\view\\front\\article.twig");
    }
}
