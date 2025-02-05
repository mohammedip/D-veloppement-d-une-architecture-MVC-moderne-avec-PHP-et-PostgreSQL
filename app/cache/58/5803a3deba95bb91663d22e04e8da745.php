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

/* front/home.twig */
class __TwigTemplate_1c4b9d4ea04e9c7e1ad137d16b54cbc2 extends Template
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
    <title>Articles</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\">
</head>
<body class=\"bg-gray-100\">
    <nav class=\"bg-gray-600 p-4 text-white flex justify-between items-center\">
        <div class=\"text-xl font-bold ml-4\">mvcArticle</div>
        <div class=\"space-x-4 mr-4\">
            <a href=\"/login\" class=\"hover:underline\">Login</a>
            <a href=\"/register\" class=\"hover:underline\">Register</a>
        </div>
    </nav>
    <div class=\"max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 mb-16\">
        <h1 class=\"text-4xl font-extrabold text-center  mb-6\">All Articles</h1>

       ";
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["articles"] ?? null))) {
            // line 21
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 22
                yield "                <div class=\"mb-6\">
                    <a href=\"article/";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 23), "html", null, true);
                yield "\"<h2 class=\"text-2xl font-semibold text-indigo-600 mb-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 23), "html", null, true);
                yield "</h2></a>
                    
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "        ";
        } else {
            // line 28
            yield "            <p>No articles found.</p>
        ";
        }
        // line 30
        yield "
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
        return "front/home.twig";
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
        return array (  92 => 30,  88 => 28,  85 => 27,  73 => 23,  70 => 22,  65 => 21,  63 => 20,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Articles</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\">
</head>
<body class=\"bg-gray-100\">
    <nav class=\"bg-gray-600 p-4 text-white flex justify-between items-center\">
        <div class=\"text-xl font-bold ml-4\">mvcArticle</div>
        <div class=\"space-x-4 mr-4\">
            <a href=\"/login\" class=\"hover:underline\">Login</a>
            <a href=\"/register\" class=\"hover:underline\">Register</a>
        </div>
    </nav>
    <div class=\"max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 mb-16\">
        <h1 class=\"text-4xl font-extrabold text-center  mb-6\">All Articles</h1>

       {% if articles is not empty %}
            {% for article in articles %}
                <div class=\"mb-6\">
                    <a href=\"article/{{ article.id }}\"<h2 class=\"text-2xl font-semibold text-indigo-600 mb-2\">{{ article.title }}</h2></a>
                    
                </div>
            {% endfor %}
        {% else %}
            <p>No articles found.</p>
        {% endif %}

    </div>
</body>
</html>
", "front/home.twig", "C:\\laragon\\www\\D-veloppement-d-une-architecture-MVC-moderne-avec-PHP-et-PostgreSQL\\app\\view\\front\\home.twig");
    }
}
