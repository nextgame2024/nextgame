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

/* dashboard/_users_list.html copy.twig */
class __TwigTemplate_2a170254736db8eb592a2368cbdab279 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_users_list.html copy.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_users_list.html copy.twig"));

        // line 1
        yield "<div id=\"loading-spinner\" class=\"fixed inset-0 flex items-center justify-center bg-gray-100 bg-opacity-50 dark:bg-gray-900 dark:bg-opacity-50 z-50\" style=\"display: none;\">
    <svg class=\"w-16 h-16 text-gray-500 animate-spin\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
        <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
        <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
    </svg>
</div>

<div class=\"overflow-x-auto\">
    <div class=\"mt-2 mb-3 flex justify-between\">
        <form method=\"GET\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users");
        yield "\" class=\"flex items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"u.email\" ";
        // line 12
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 12, $this->source); })()) == "u.email")) ? ("selected") : (""));
        yield ">Username</option>
                <option value=\"p.name\" ";
        // line 13
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 13, $this->source); })()) == "p.name")) ? ("selected") : (""));
        yield ">Name</option>
                <option value=\"p.phone\" ";
        // line 14
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 14, $this->source); })()) == "p.phone")) ? ("selected") : (""));
        yield ">Phone</option>
                <option value=\"p.dateOfBirth\" ";
        // line 15
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 15, $this->source); })()) == "p.dateOfBirth")) ? ("selected") : (""));
        yield ">DoB</option>
                <option value=\"p.rating\" ";
        // line 16
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 16, $this->source); })()) == "p.rating")) ? ("selected") : (""));
        yield ">Rating</option>
                <option value=\"d.name\" ";
        // line 17
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 17, $this->source); })()) == "d.name")) ? ("selected") : (""));
        yield ">Division</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search\" class=\"ml-2 w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>
        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user");
        yield "\" class=\"bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">Create New User</a>
    </div>
    <table class=\"min-w-full bg-white border border-gray-300 dark:bg-gray-900 dark:text-white dark:border-gray-900\">
        <thead class=\"bg-gray-50 dark:bg-gray-700 dark:text-white\">
            <tr>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["sort_by" => "u.email", "order" => ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Username
                        ";
        // line 30
        if (((isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 30, $this->source); })()) == "u.email")) {
            // line 31
            yield "                            ";
            if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })()) == "ASC")) {
                // line 32
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            ";
            } else {
                // line 34
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            ";
            }
            // line 36
            yield "                        ";
        }
        // line 37
        yield "                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["sort_by" => "p.name", "order" => ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Name
                        ";
        // line 42
        if (((isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 42, $this->source); })()) == "p.name")) {
            // line 43
            yield "                            ";
            if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 43, $this->source); })()) == "ASC")) {
                // line 44
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            ";
            } else {
                // line 46
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            ";
            }
            // line 48
            yield "                        ";
        }
        // line 49
        yield "                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["sort_by" => "p.phone", "order" => ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 52, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Phone
                        ";
        // line 54
        if (((isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 54, $this->source); })()) == "p.phone")) {
            // line 55
            yield "                            ";
            if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()) == "ASC")) {
                // line 56
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            ";
            } else {
                // line 58
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            ";
            }
            // line 60
            yield "                        ";
        }
        // line 61
        yield "                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["sort_by" => "p.dateOfBirth", "order" => ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 64, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        DoB
                        ";
        // line 66
        if (((isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 66, $this->source); })()) == "p.dateOfBirth")) {
            // line 67
            yield "                            ";
            if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()) == "ASC")) {
                // line 68
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            ";
            } else {
                // line 70
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            ";
            }
            // line 72
            yield "                        ";
        }
        // line 73
        yield "                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["sort_by" => "p.rating", "order" => ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 76, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Rating
                        ";
        // line 78
        if (((isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 78, $this->source); })()) == "p.rating")) {
            // line 79
            yield "                            ";
            if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 79, $this->source); })()) == "ASC")) {
                // line 80
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            ";
            } else {
                // line 82
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            ";
            }
            // line 84
            yield "                        ";
        }
        // line 85
        yield "                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">
                    <a href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["sort_by" => "d.name", "order" => ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 88, $this->source); })()) == "ASC")) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" class=\"flex items-center justify-center\" onclick=\"showLoadingSpinner()\">
                        Division
                        ";
        // line 90
        if (((isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 90, $this->source); })()) == "d.name")) {
            // line 91
            yield "                            ";
            if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 91, $this->source); })()) == "ASC")) {
                // line 92
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            ";
            } else {
                // line 94
                yield "                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            ";
            }
            // line 96
            yield "                        ";
        }
        // line 97
        yield "                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 103
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 103, $this->source); })())) > 0)) {
            // line 104
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 105
                yield "                    <tr>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 106), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 107), "name", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 107), "name", [], "any", false, false, false, 107), "-")) : ("-")), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 108), "phone", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 108), "phone", [], "any", false, false, false, 108), "-")) : ("-")), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">
                            ";
                // line 110
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 110)) {
                    // line 111
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 111), "dateOfBirth", [], "any", false, false, false, 111), "Y-m-d"), "-"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 113
                    yield "                                -
                            ";
                }
                // line 115
                yield "                        </td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 116), "rating", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 116), "rating", [], "any", false, false, false, 116), "-")) : ("-")), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 117), "division", [], "any", false, true, false, 117), "name", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 117), "division", [], "any", false, true, false, 117), "name", [], "any", false, false, false, 117), "-")) : ("-")), "html", null, true);
                yield "</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">
                            <a href=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\" class=\"text-blue-500\" onclick=\"showLoadingSpinner()\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </a>
                            <button type=\"button\" class=\"text-red-500 ml-3\" data-modal-target=\"deleteModal-";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 122), "html", null, true);
                yield "\">
                            <i class=\"fas fa-trash-alt\"></i>
                            </button>
                            <!-- Modal -->
                            <div id=\"deleteModal-";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 126), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                                <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                                    <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative\">
                                        <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to delete this user?</h2>
                                        <p class=\"mb-6\">This action cannot be undone.</p>
                                        <form method=\"post\" action=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 131), "html", null, true);
                yield "')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 132))), "html", null, true);
                yield "\">
                                            <div class=\"flex justify-center\">
                                                <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded mr-2\" onclick=\"closeModal('deleteModal-";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "')\">Cancel</button>
                                                <button type=\"submit\" id=\"deleteBtn-";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 135), "html", null, true);
                yield "\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded\">Delete</button>
                                            </div>
                                        </form>
                                        <div id=\"spinner-";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 138), "html", null, true);
                yield "\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                            <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                                <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                                <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.querySelectorAll('[data-modal-target]').forEach(button => {
                                    button.addEventListener('click', function() {
                                        const modal = document.getElementById(this.getAttribute('data-modal-target'));
                                        modal.classList.remove('hidden');
                                    });
                                });

                                function closeModal(modalId) {
                                    document.getElementById(modalId).classList.add('hidden');
                                }

                                function showLoadingSpinner(userId) {
                                    const modalContent = document.querySelector('#deleteModal-' + userId + ' > .flex > .relative');
                                    modalContent.classList.add('hidden');
                                    const spinner = document.getElementById('spinner-' + userId);
                                    spinner.classList.remove('hidden');
                                    const modal = document.getElementById('deleteModal-' + userId);
                                    modal.classList.add('hidden');
                                }
                            </script>
                        </td>

                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "            ";
        } else {
            // line 173
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-center py-4\">There's nothing here yet!</td>
                </tr>
            ";
        }
        // line 177
        yield "        </tbody>
    </table>
</div>

<div class=\"mt-4\">
    <nav>
        <ul class=\"inline-flex -space-x-px\">
            ";
        // line 184
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 184, $this->source); })()) > 1)) {
            // line 185
            yield "                <li>
                    <a href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 186, $this->source); })()) - 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 186, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            ";
        } else {
            // line 189
            yield "                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            ";
        }
        // line 193
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 193, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 194
            yield "                <li>
                    <a href=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["page" => $context["page"], "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 195, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 195, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight ";
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 195, $this->source); })()) == $context["page"])) ? ("bg-gray-200 dark:bg-gray-500 dark:border-gray-500") : ("bg-white dark:bg-gray-800 dark:border-gray-500"));
            yield " border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "            ";
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 198, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 198, $this->source); })()))) {
            // line 199
            yield "                <li>
                    <a href=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 200, $this->source); })()) + 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 200, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 200, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
                </li>
            ";
        } else {
            // line 203
            yield "                <li>
                    <span class=\"px-3 py-2 leading-tight text-gray-300 bg-white border border-gray-300 rounded-r-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Next</span>
                </li>
            ";
        }
        // line 207
        yield "        </ul>
    </nav>
</div>

<!-- Loading -->
<script>
    function showLoadingSpinner() {
        document.getElementById('loading-spinner').style.display = 'flex';
    }

    window.addEventListener('pageshow', function() {
        document.getElementById('loading-spinner').style.display = 'none';
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/_users_list.html copy.twig";
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
        return array (  462 => 207,  456 => 203,  450 => 200,  447 => 199,  444 => 198,  431 => 195,  428 => 194,  423 => 193,  417 => 189,  411 => 186,  408 => 185,  406 => 184,  397 => 177,  391 => 173,  388 => 172,  348 => 138,  342 => 135,  338 => 134,  333 => 132,  327 => 131,  319 => 126,  312 => 122,  306 => 119,  301 => 117,  297 => 116,  294 => 115,  290 => 113,  284 => 111,  282 => 110,  277 => 108,  273 => 107,  269 => 106,  266 => 105,  261 => 104,  259 => 103,  251 => 97,  248 => 96,  244 => 94,  240 => 92,  237 => 91,  235 => 90,  230 => 88,  225 => 85,  222 => 84,  218 => 82,  214 => 80,  211 => 79,  209 => 78,  204 => 76,  199 => 73,  196 => 72,  192 => 70,  188 => 68,  185 => 67,  183 => 66,  178 => 64,  173 => 61,  170 => 60,  166 => 58,  162 => 56,  159 => 55,  157 => 54,  152 => 52,  147 => 49,  144 => 48,  140 => 46,  136 => 44,  133 => 43,  131 => 42,  126 => 40,  121 => 37,  118 => 36,  114 => 34,  110 => 32,  107 => 31,  105 => 30,  100 => 28,  91 => 22,  85 => 19,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"loading-spinner\" class=\"fixed inset-0 flex items-center justify-center bg-gray-100 bg-opacity-50 dark:bg-gray-900 dark:bg-opacity-50 z-50\" style=\"display: none;\">
    <svg class=\"w-16 h-16 text-gray-500 animate-spin\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
        <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
        <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
    </svg>
</div>

<div class=\"overflow-x-auto\">
    <div class=\"mt-2 mb-3 flex justify-between\">
        <form method=\"GET\" action=\"{{ path('app_dashboard_users') }}\" class=\"flex items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"u.email\" {{ search_by == 'u.email' ? 'selected' : '' }}>Username</option>
                <option value=\"p.name\" {{ search_by == 'p.name' ? 'selected' : '' }}>Name</option>
                <option value=\"p.phone\" {{ search_by == 'p.phone' ? 'selected' : '' }}>Phone</option>
                <option value=\"p.dateOfBirth\" {{ search_by == 'p.dateOfBirth' ? 'selected' : '' }}>DoB</option>
                <option value=\"p.rating\" {{ search_by == 'p.rating' ? 'selected' : '' }}>Rating</option>
                <option value=\"d.name\" {{ search_by == 'd.name' ? 'selected' : '' }}>Division</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"{{ search_value }}\" placeholder=\"Search\" class=\"ml-2 w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>
        <a href=\"{{ path('app_dashboard_user') }}\" class=\"bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">Create New User</a>
    </div>
    <table class=\"min-w-full bg-white border border-gray-300 dark:bg-gray-900 dark:text-white dark:border-gray-900\">
        <thead class=\"bg-gray-50 dark:bg-gray-700 dark:text-white\">
            <tr>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"{{ path('app_dashboard_users', {sort_by: 'u.email', order: order == 'ASC' ? 'DESC' : 'ASC'}) }}\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Username
                        {% if sort_by == 'u.email' %}
                            {% if order == 'ASC' %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            {% else %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            {% endif %}
                        {% endif %}
                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"{{ path('app_dashboard_users', {sort_by: 'p.name', order: order == 'ASC' ? 'DESC' : 'ASC'}) }}\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Name
                        {% if sort_by == 'p.name' %}
                            {% if order == 'ASC' %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            {% else %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            {% endif %}
                        {% endif %}
                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"{{ path('app_dashboard_users', {sort_by: 'p.phone', order: order == 'ASC' ? 'DESC' : 'ASC'}) }}\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Phone
                        {% if sort_by == 'p.phone' %}
                            {% if order == 'ASC' %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            {% else %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            {% endif %}
                        {% endif %}
                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"{{ path('app_dashboard_users', {sort_by: 'p.dateOfBirth', order: order == 'ASC' ? 'DESC' : 'ASC'}) }}\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        DoB
                        {% if sort_by == 'p.dateOfBirth' %}
                            {% if order == 'ASC' %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            {% else %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            {% endif %}
                        {% endif %}
                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600\">
                    <a href=\"{{ path('app_dashboard_users', {sort_by: 'p.rating', order: order == 'ASC' ? 'DESC' : 'ASC'}) }}\" class=\"flex items-center\" onclick=\"showLoadingSpinner()\">
                        Rating
                        {% if sort_by == 'p.rating' %}
                            {% if order == 'ASC' %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            {% else %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            {% endif %}
                        {% endif %}
                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">
                    <a href=\"{{ path('app_dashboard_users', {sort_by: 'd.name', order: order == 'ASC' ? 'DESC' : 'ASC'}) }}\" class=\"flex items-center justify-center\" onclick=\"showLoadingSpinner()\">
                        Division
                        {% if sort_by == 'd.name' %}
                            {% if order == 'ASC' %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 16l-6-6h12l-6 6z\"/></svg>
                            {% else %}
                                <svg class=\"w-5 h-5 ml-1 fill-current\" viewBox=\"0 0 24 24\"><path d=\"M12 8l6 6H6l6-6z\"/></svg>
                            {% endif %}
                        {% endif %}
                    </a>
                </th>
                <th class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% if users|length > 0 %}
                {% for user in users %}
                    <tr>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">{{ user.email }}</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">{{ user.userProfile.name | default('-') }}</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">{{ user.userProfile.phone | default('-') }}</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">
                            {% if user.userProfile %}
                                {{ user.userProfile.dateOfBirth|date('Y-m-d') | default('-') }}
                            {% else %}
                                -
                            {% endif %}
                        </td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600\">{{ user.userProfile.rating | default('-') }}</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">{{ user.userProfile.division.name | default('-') }}</td>
                        <td class=\"py-2 px-4 border-b dark:border-gray-600 text-center\">
                            <a href=\"{{ path('app_dashboard_user_edit', {id: user.id}) }}\" class=\"text-blue-500\" onclick=\"showLoadingSpinner()\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </a>
                            <button type=\"button\" class=\"text-red-500 ml-3\" data-modal-target=\"deleteModal-{{ user.id }}\">
                            <i class=\"fas fa-trash-alt\"></i>
                            </button>
                            <!-- Modal -->
                            <div id=\"deleteModal-{{ user.id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                                <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                                    <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative\">
                                        <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to delete this user?</h2>
                                        <p class=\"mb-6\">This action cannot be undone.</p>
                                        <form method=\"post\" action=\"{{ path('app_dashboard_users_delete', {id: user.id}) }}\" onsubmit=\"showLoadingSpinner('{{ user.id }}')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                            <div class=\"flex justify-center\">
                                                <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded mr-2\" onclick=\"closeModal('deleteModal-{{ user.id }}')\">Cancel</button>
                                                <button type=\"submit\" id=\"deleteBtn-{{ user.id }}\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded\">Delete</button>
                                            </div>
                                        </form>
                                        <div id=\"spinner-{{ user.id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                            <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                                <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                                <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.querySelectorAll('[data-modal-target]').forEach(button => {
                                    button.addEventListener('click', function() {
                                        const modal = document.getElementById(this.getAttribute('data-modal-target'));
                                        modal.classList.remove('hidden');
                                    });
                                });

                                function closeModal(modalId) {
                                    document.getElementById(modalId).classList.add('hidden');
                                }

                                function showLoadingSpinner(userId) {
                                    const modalContent = document.querySelector('#deleteModal-' + userId + ' > .flex > .relative');
                                    modalContent.classList.add('hidden');
                                    const spinner = document.getElementById('spinner-' + userId);
                                    spinner.classList.remove('hidden');
                                    const modal = document.getElementById('deleteModal-' + userId);
                                    modal.classList.add('hidden');
                                }
                            </script>
                        </td>

                    </tr>
                {% endfor %}
            {% else %}
                <tr>
                    <td colspan=\"7\" class=\"text-center py-4\">There's nothing here yet!</td>
                </tr>
            {% endif %}
        </tbody>
    </table>
</div>

<div class=\"mt-4\">
    <nav>
        <ul class=\"inline-flex -space-x-px\">
            {% if current_page > 1 %}
                <li>
                    <a href=\"{{ path('app_dashboard_users', {page: current_page - 1, sort_by: sort_by, order: order}) }}\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            {% else %}
                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            {% endif %}
            {% for page in 1..total_pages %}
                <li>
                    <a href=\"{{ path('app_dashboard_users', {page: page, sort_by: sort_by, order: order}) }}\" class=\"px-3 py-2 leading-tight {{ current_page == page ? 'bg-gray-200 dark:bg-gray-500 dark:border-gray-500' : 'bg-white dark:bg-gray-800 dark:border-gray-500' }} border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">{{ page }}</a>
                </li>
            {% endfor %}
            {% if current_page < total_pages %}
                <li>
                    <a href=\"{{ path('app_dashboard_users', {page: current_page + 1, sort_by: sort_by, order: order}) }}\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
                </li>
            {% else %}
                <li>
                    <span class=\"px-3 py-2 leading-tight text-gray-300 bg-white border border-gray-300 rounded-r-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Next</span>
                </li>
            {% endif %}
        </ul>
    </nav>
</div>

<!-- Loading -->
<script>
    function showLoadingSpinner() {
        document.getElementById('loading-spinner').style.display = 'flex';
    }

    window.addEventListener('pageshow', function() {
        document.getElementById('loading-spinner').style.display = 'none';
    });
</script>
", "dashboard/_users_list.html copy.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_users_list.html copy.twig");
    }
}
