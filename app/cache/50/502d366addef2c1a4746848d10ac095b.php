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

/* front/register.twig */
class __TwigTemplate_b658e3a4e5d533e5c93921b6980ced14 extends Template
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
    <title>Register</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\">
</head>
<body class=\"bg-gray-100 flex items-center justify-center h-screen\">
    <div class=\"w-full max-w-md bg-white p-8 rounded-lg shadow-md\">
        <h2 class=\"text-2xl font-bold text-center text-indigo-600 mb-6\">Register</h2>
        
        <form action=\"#\" method=\"POST\" class=\"space-y-4\">
            <div>
                <label class=\"block text-gray-700\">Full Name</label>
                <input type=\"text\" name=\"name\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500\">
            </div>
            <div>
                <label class=\"block text-gray-700\">Email</label>
                <input type=\"email\" name=\"email\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500\">
            </div>
            <div>
                <label class=\"block text-gray-700\">Password</label>
                <input type=\"password\" name=\"password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500\">
            </div>
            <button type=\"submit\" class=\"w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700\">Register</button>
        </form>
        
        <p class=\"mt-4 text-center text-gray-600\">Already have an account? <a href=\"login.twig\" class=\"text-indigo-600\">Login</a></p>
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
        return "front/register.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\">
</head>
<body class=\"bg-gray-100 flex items-center justify-center h-screen\">
    <div class=\"w-full max-w-md bg-white p-8 rounded-lg shadow-md\">
        <h2 class=\"text-2xl font-bold text-center text-indigo-600 mb-6\">Register</h2>
        
        <form action=\"#\" method=\"POST\" class=\"space-y-4\">
            <div>
                <label class=\"block text-gray-700\">Full Name</label>
                <input type=\"text\" name=\"name\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500\">
            </div>
            <div>
                <label class=\"block text-gray-700\">Email</label>
                <input type=\"email\" name=\"email\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500\">
            </div>
            <div>
                <label class=\"block text-gray-700\">Password</label>
                <input type=\"password\" name=\"password\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500\">
            </div>
            <button type=\"submit\" class=\"w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700\">Register</button>
        </form>
        
        <p class=\"mt-4 text-center text-gray-600\">Already have an account? <a href=\"login.twig\" class=\"text-indigo-600\">Login</a></p>
    </div>
</body>
</html>
", "front/register.twig", "C:\\laragon\\www\\D-veloppement-d-une-architecture-MVC-moderne-avec-PHP-et-PostgreSQL\\app\\view\\front\\register.twig");
    }
}
