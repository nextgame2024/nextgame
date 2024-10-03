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

/* login/index.html.twig */
class __TwigTemplate_f07f3d8e5837463c40a9eb371d853674 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"flex items-center justify-center mt-[10%] bg-gray-50 dark:bg-gray-900\">
    <div class=\"w-full md:w-[60%] lg:w-[40%] mx-auto\">
        <form action=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"POST\" class=\"bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md\">
            <div class=\"text-center\">
                <label class=\"block text-3xl text-gray-700 dark:text-gray-300 font-medium\">Login</label>
                <label class=\"block text-sm text-gray-700 dark:text-gray-300 font-medium mt-4 mb-5\">Welcome to your Next Game</label>
            </div>
            <div>
                <label class=\"block text-sm text-gray-700 dark:text-gray-300 font-medium\">Email</label>
                <input type=\"text\" name=\"_username\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\" />
            </div>
            <div>
                <label class=\"block text-sm text-gray-700 dark:text-gray-300 font-medium\">Password</label>
                <input type=\"password\" name=\"_password\" class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\"/>
            </div>

            <input type=\"hidden\" name=\"_target_path\" value=\"/dashboard\" />

            <div class=\"mt-10\">
                <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Login</button>
            </div>

            <div class=\"mt-2 text-center text-gray-600 dark:text-gray-400\">
                Don't have an account? <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Register here</a>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  100 => 27,  83 => 13,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"flex items-center justify-center mt-[10%] bg-gray-50 dark:bg-gray-900\">
    <div class=\"w-full md:w-[60%] lg:w-[40%] mx-auto\">
        <form action=\"{{ path('app_login') }}\" method=\"POST\" class=\"bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md\">
            <div class=\"text-center\">
                <label class=\"block text-3xl text-gray-700 dark:text-gray-300 font-medium\">Login</label>
                <label class=\"block text-sm text-gray-700 dark:text-gray-300 font-medium mt-4 mb-5\">Welcome to your Next Game</label>
            </div>
            <div>
                <label class=\"block text-sm text-gray-700 dark:text-gray-300 font-medium\">Email</label>
                <input type=\"text\" name=\"_username\" value=\"{{ lastUsername }}\" class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\" />
            </div>
            <div>
                <label class=\"block text-sm text-gray-700 dark:text-gray-300 font-medium\">Password</label>
                <input type=\"password\" name=\"_password\" class=\"block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2\"/>
            </div>

            <input type=\"hidden\" name=\"_target_path\" value=\"/dashboard\" />

            <div class=\"mt-10\">
                <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Login</button>
            </div>

            <div class=\"mt-2 text-center text-gray-600 dark:text-gray-400\">
                Don't have an account? <a href=\"{{ path('app_register') }}\">Register here</a>
            </div>
        </form>
    </div>
</div>
{% endblock %}
", "login/index.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/login/index.html.twig");
    }
}
