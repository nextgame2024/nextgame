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

/* dashboard/_registration_list.html.twig */
class __TwigTemplate_85a64cd440e9d3135f7530a309fda338 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_registration_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_registration_list.html.twig"));

        // line 1
        yield "<div id=\"loading-spinner\" class=\"fixed inset-0 flex items-center justify-center bg-gray-100 bg-opacity-50 dark:bg-gray-900 dark:bg-opacity-50 z-50\" style=\"display: none;\">
    <svg class=\"w-16 h-16 text-gray-500 animate-spin\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
        <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
        <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
    </svg>
</div>

<div class=\"overflow-x-auto\">
    <div class=\"mt-2 mb-3 flex flex-col sm:flex-row justify-between items-start sm:items-center\">
        <form method=\"GET\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users");
        yield "\" class=\"flex flex-col sm:flex-row w-full sm:w-auto items-start sm:items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-full sm:w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
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
        yield "\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>

        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user");
        yield "\" class=\"mt-2 sm:mt-0 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">New User</a>
    </div>
    <div class=\"space-y-2\">
    ";
        // line 26
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 26, $this->source); })())) > 0)) {
            // line 27
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 28
                yield "           <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 items-center\">
                <div>
                    <img src=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 31, $this->source); })()) . "trofeo.png"), "html", null, true);
                yield "\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                </div>
                <div>
                    <div class=\"font-semibold text-lg dark:text-white\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 34), "html", null, true);
                yield "</div>
                    <p><span class=\"font-medium\">Name:</span> ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 35), "name", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 35), "name", [], "any", false, false, false, 35), "-")) : ("-")), "html", null, true);
                yield "</p>
                </div>
                <div>
                    <p><span class=\"font-medium\">Phone:</span> ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 38), "phone", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 38), "phone", [], "any", false, false, false, 38), "-")) : ("-")), "html", null, true);
                yield "</p>
                    <p><span class=\"font-medium\">DoB:</span> 
                        ";
                // line 40
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 40)) {
                    // line 41
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, false, false, 41), "dateOfBirth", [], "any", false, false, false, 41), "Y-m-d"), "-"), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 43
                    yield "                            -
                        ";
                }
                // line 45
                yield "                    </p>
                </div>
                <div>
                    <p><span class=\"font-medium\">Rating:</span> ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 48), "rating", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 48), "rating", [], "any", false, false, false, 48), "-")) : ("-")), "html", null, true);
                yield "</p>
                    <p><span class=\"font-medium\">Division:</span> ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 49), "division", [], "any", false, true, false, 49), "name", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userProfile", [], "any", false, true, false, 49), "division", [], "any", false, true, false, 49), "name", [], "any", false, false, false, 49), "-")) : ("-")), "html", null, true);
                yield "</p>
                </div>
                <div class=\"flex items-center space-x-3 justify-end\">
                    <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" class=\"text-blue-500\" onclick=\"showLoadingSpinner()\">
                        <i class=\"fas fa-pencil-alt\"></i>
                    </a>
                    <button type=\"button\" class=\"text-red-500\" data-modal-target=\"deleteModal-";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55), "html", null, true);
                yield "\">
                        <i class=\"fas fa-trash-alt\"></i>
                    </button>
                </div>
            </div>


                <!-- Modal -->
                <div id=\"deleteModal-";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to delete this user?</h2>
                            <p class=\"mb-6\">This action cannot be undone.</p>
                            <form method=\"post\" action=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69))), "html", null, true);
                yield "\">
                                <div class=\"flex justify-center\">
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded mr-2\" onclick=\"closeModal('deleteModal-";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 71), "html", null, true);
                yield "')\">Cancel</button>
                                    <button type=\"submit\" id=\"deleteBtn-";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 72), "html", null, true);
                yield "\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded\">Delete</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75), "html", null, true);
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
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "    ";
        } else {
            // line 108
            yield "        <div class=\"text-center py-4\">There's nothing here yet!</div>
    ";
        }
        // line 110
        yield "</div>

</div>

<div class=\"mt-4\">
    <nav>
        <ul class=\"inline-flex -space-x-px\">
            ";
        // line 117
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 117, $this->source); })()) > 1)) {
            // line 118
            yield "                <li>
                    <a href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 119, $this->source); })()) - 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 119, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 119, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            ";
        } else {
            // line 122
            yield "                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            ";
        }
        // line 126
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 126, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 127
            yield "                <li>
                    <a href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["page" => $context["page"], "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 128, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 128, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight ";
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 128, $this->source); })()) == $context["page"])) ? ("bg-gray-200 dark:bg-gray-500 dark:border-gray-500") : ("bg-white dark:bg-gray-800 dark:border-gray-500"));
            yield " border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "            ";
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 131, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 131, $this->source); })()))) {
            // line 132
            yield "                <li>
                    <a href=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 133, $this->source); })()) + 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 133, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 133, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
                </li>
            ";
        } else {
            // line 136
            yield "                <li>
                    <span class=\"px-3 py-2 leading-tight text-gray-300 bg-white border border-gray-300 rounded-r-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Next</span>
                </li>
            ";
        }
        // line 140
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
        return "dashboard/_registration_list.html.twig";
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
        return array (  314 => 140,  308 => 136,  302 => 133,  299 => 132,  296 => 131,  283 => 128,  280 => 127,  275 => 126,  269 => 122,  263 => 119,  260 => 118,  258 => 117,  249 => 110,  245 => 108,  242 => 107,  204 => 75,  198 => 72,  194 => 71,  189 => 69,  183 => 68,  175 => 63,  164 => 55,  158 => 52,  152 => 49,  148 => 48,  143 => 45,  139 => 43,  133 => 41,  131 => 40,  126 => 38,  120 => 35,  116 => 34,  110 => 31,  105 => 28,  100 => 27,  98 => 26,  92 => 23,  85 => 19,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  44 => 1,);
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
    <div class=\"mt-2 mb-3 flex flex-col sm:flex-row justify-between items-start sm:items-center\">
        <form method=\"GET\" action=\"{{ path('app_dashboard_users') }}\" class=\"flex flex-col sm:flex-row w-full sm:w-auto items-start sm:items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-full sm:w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"u.email\" {{ search_by == 'u.email' ? 'selected' : '' }}>Username</option>
                <option value=\"p.name\" {{ search_by == 'p.name' ? 'selected' : '' }}>Name</option>
                <option value=\"p.phone\" {{ search_by == 'p.phone' ? 'selected' : '' }}>Phone</option>
                <option value=\"p.dateOfBirth\" {{ search_by == 'p.dateOfBirth' ? 'selected' : '' }}>DoB</option>
                <option value=\"p.rating\" {{ search_by == 'p.rating' ? 'selected' : '' }}>Rating</option>
                <option value=\"d.name\" {{ search_by == 'd.name' ? 'selected' : '' }}>Division</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"{{ search_value }}\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>

        <a href=\"{{ path('app_dashboard_user') }}\" class=\"mt-2 sm:mt-0 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">New User</a>
    </div>
    <div class=\"space-y-2\">
    {% if users|length > 0 %}
        {% for user in users %}
           <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 items-center\">
                <div>
                    <img src=\"{{ profiles ~ 'trofeo.png' }}\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                </div>
                <div>
                    <div class=\"font-semibold text-lg dark:text-white\">{{ user.email }}</div>
                    <p><span class=\"font-medium\">Name:</span> {{ user.userProfile.name | default('-') }}</p>
                </div>
                <div>
                    <p><span class=\"font-medium\">Phone:</span> {{ user.userProfile.phone | default('-') }}</p>
                    <p><span class=\"font-medium\">DoB:</span> 
                        {% if user.userProfile %}
                            {{ user.userProfile.dateOfBirth|date('Y-m-d') | default('-') }}
                        {% else %}
                            -
                        {% endif %}
                    </p>
                </div>
                <div>
                    <p><span class=\"font-medium\">Rating:</span> {{ user.userProfile.rating | default('-') }}</p>
                    <p><span class=\"font-medium\">Division:</span> {{ user.userProfile.division.name | default('-') }}</p>
                </div>
                <div class=\"flex items-center space-x-3 justify-end\">
                    <a href=\"{{ path('app_dashboard_user_edit', {id: user.id}) }}\" class=\"text-blue-500\" onclick=\"showLoadingSpinner()\">
                        <i class=\"fas fa-pencil-alt\"></i>
                    </a>
                    <button type=\"button\" class=\"text-red-500\" data-modal-target=\"deleteModal-{{ user.id }}\">
                        <i class=\"fas fa-trash-alt\"></i>
                    </button>
                </div>
            </div>


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
            </div>
        {% endfor %}
    {% else %}
        <div class=\"text-center py-4\">There's nothing here yet!</div>
    {% endif %}
</div>

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
", "dashboard/_registration_list.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_registration_list.html.twig");
    }
}
