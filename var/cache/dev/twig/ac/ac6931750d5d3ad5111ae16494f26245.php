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

/* dashboard/_tournament_list.html.twig */
class __TwigTemplate_e7c2ab71c26762cdf6f82bd629249ba4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_tournament_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_tournament_list.html.twig"));

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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_tournament");
        yield "\" class=\"flex flex-col sm:flex-row w-full sm:w-auto items-start sm:items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-full sm:w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"tournament_type\" ";
        // line 12
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 12, $this->source); })()) == "tournament_type")) ? ("selected") : (""));
        yield ">Tournament name</option>
                <option value=\"t.start_day\" ";
        // line 13
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 13, $this->source); })()) == "t.start_day")) ? ("selected") : (""));
        yield ">Start day</option>
                <option value=\"t.end_day\" ";
        // line 14
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 14, $this->source); })()) == "t.end_day")) ? ("selected") : (""));
        yield ">End day</option>
                <option value=\"t.status\" ";
        // line 15
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 15, $this->source); })()) == "t.status")) ? ("selected") : (""));
        yield ">Status</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>

        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_create_tournament");
        yield "\" class=\"mt-2 sm:mt-0 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">Create</a>
    </div>
    <div class=\"space-y-2\">
    ";
        // line 24
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournament_registration"]) || array_key_exists("tournament_registration", $context) ? $context["tournament_registration"] : (function () { throw new RuntimeError('Variable "tournament_registration" does not exist.', 24, $this->source); })())) > 0)) {
            // line 25
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournament_registration"]) || array_key_exists("tournament_registration", $context) ? $context["tournament_registration"] : (function () { throw new RuntimeError('Variable "tournament_registration" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
                // line 26
                yield "            <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 items-center\">
                    <div class=\"col-span-1 lg:col-span-1\">
                        <img src=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 29, $this->source); })()) . "trofeo.png"), "html", null, true);
                yield "\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                    </div>
                    <div class=\"col-span-1 sm:col-span-1 lg:col-span-1\">
                        <div class=\"font-semibold text-lg dark:text-white\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_type", [], "any", false, false, false, 32), "html", null, true);
                yield "</div>
                        <p><span class=\"font-medium\">Location:</span> ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "location", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "location", [], "any", false, false, false, 33), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div class=\"col-span-1 sm:col-span-1 lg:col-span-1\">
                        <p><span class=\"font-medium\">Hour:</span> 
                            ";
                // line 37
                if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "hour", [], "any", false, false, false, 37)) {
                    // line 38
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "hour", [], "any", false, false, false, 38), "h:i a"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 40
                    yield "                                -
                            ";
                }
                // line 42
                yield "                        </p>
                        <p><span class=\"font-medium\">Status:</span> ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 43), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div class=\"col-span-1 sm:col-span-1 lg:col-span-1\">
                        <p><span class=\"font-medium\">Start:</span>
                            ";
                // line 47
                if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "start_day", [], "any", false, false, false, 47)) {
                    // line 48
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "start_day", [], "any", false, false, false, 48), "Y-m-d"), "-"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 50
                    yield "                                -
                            ";
                }
                // line 52
                yield "                        </p>
                        <p><span class=\"font-medium\">End:</span>
                            ";
                // line 54
                if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "end_day", [], "any", false, false, false, 54)) {
                    // line 55
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "end_day", [], "any", false, false, false, 55), "Y-m-d"), "-"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 57
                    yield "                                -
                            ";
                }
                // line 59
                yield "                        </p>
                    </div>
                    <div class=\"flex items-center space-x-3 justify-end\">
                        <!-- Registered User Button -->
                        ";
                // line 63
                if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "registeredUser", [], "any", false, false, false, 63)) {
                    // line 64
                    yield "                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-green-500 text-2xl\" data-modal-target=\"registrationModal-";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" disabled>
                                    <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Registered
                                </div>
                            </div>
                        ";
                } else {
                    // line 73
                    yield "                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-yellow-500 text-2xl\" data-modal-target=\"registrationModal-";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 74), "html", null, true);
                    yield "\">
                                    <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Register here
                                </div>
                            </div>
                        ";
                }
                // line 82
                yield "
                        <!-- Create Games Button -->
                        ";
                // line 84
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 84) == "Games created")) {
                    // line 85
                    yield "                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-green-500 text-2xl\" data-modal-target=\"createGamesModal-";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 86), "html", null, true);
                    yield "\" disabled>
                                    <i class=\"fa-duotone fa-solid fa-table-tennis-paddle-ball\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Games created
                                </div>
                            </div>
                        ";
                } else {
                    // line 94
                    yield "                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-yellow-500 text-2xl\" data-modal-target=\"createGamesModal-";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 95), "html", null, true);
                    yield "\">
                                    <i class=\"fa-duotone fa-solid fa-table-tennis-paddle-ball\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Create Games
                                </div>
                            </div>
                        ";
                }
                // line 103
                yield "
                        <!-- Delete Button -->
                        <div class=\"relative group\">
                            <button type=\"button\" class=\"text-red-500 text-2xl\" data-modal-target=\"deleteModal-";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 106), "html", null, true);
                yield "\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                Delete
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Modal -->
                <div id=\"registrationModal-";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 118), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Do you want to join this tournament?</h2>
                            <p class=\"mb-6\">Please verify and confirm the action.</p>
                            <form method=\"post\" action=\"";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 123), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"tournament_id\" value=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 124), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"players\" value=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "players", [], "any", false, false, false, 125), "html", null, true);
                yield "\">
                                
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"registerBtn-";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 128), "html", null, true);
                yield "\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('registrationModal-";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 129), "html", null, true);
                yield "')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 132), "html", null, true);
                yield "\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Games Modal -->
                <div id=\"createGamesModal-";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 143), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to create the games?</h2>
                            <p class=\"mb-6\">This action may take a few minutes and cannot be undone.</p>
                            <form method=\"post\" action=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_create_games", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 148), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"tournament_id\" value=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 149), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"players\" value=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "players", [], "any", false, false, false, 150), "html", null, true);
                yield "\">
                                
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"createGamesBtn-";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 153), "html", null, true);
                yield "\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('createGamesModal-";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 154), "html", null, true);
                yield "')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 157), "html", null, true);
                yield "\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div id=\"deleteModal-";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 168), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to delete this tournament?</h2>
                            <p class=\"mb-6\">This action cannot be undone.</p>
                            <form method=\"post\" action=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_tournament_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 173), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 174))), "html", null, true);
                yield "\">
                                <div class=\"flex justify-center\">
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded mr-2\" onclick=\"closeModal('deleteModal-";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 176), "html", null, true);
                yield "')\">Cancel</button>
                                    <button type=\"submit\" id=\"deleteBtn-";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 177), "html", null, true);
                yield "\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded\">Delete</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 180), "html", null, true);
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

                    function showLoadingSpinner(user_profile_id) {
                        const modalContent = document.querySelector('#createGamesModal-' + user_profile_id + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + user_profile_id);
                        spinner.classList.remove('hidden');
                        const modal = document.getElementById('createGamesModal-' + user_profile_id);
                        modal.classList.add('hidden');
                    }
                </script>
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

                    function showLoadingSpinner(user_profile_id) {
                        const modalContent = document.querySelector('#registrationModal-' + user_profile_id + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + user_profile_id);
                        spinner.classList.remove('hidden');
                        const modal = document.getElementById('registrationModal-' + user_profile_id);
                        modal.classList.add('hidden');
                    }
                </script>
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

                    function showLoadingSpinner(tournamentId) {
                        const modalContent = document.querySelector('#deleteModal-' + tournamentId + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + tournamentId);
                        spinner.classList.remove('hidden');
                        const modal = document.getElementById('deleteModal-' + tournamentId);
                        modal.classList.add('hidden');
                    }
                </script>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            yield "    ";
        } else {
            // line 256
            yield "        <div class=\"text-center py-4\">There's nothing here yet!</div>
    ";
        }
        // line 258
        yield "</div>

</div>

<div class=\"mt-4\">
    <nav>
        <ul class=\"inline-flex -space-x-px\">
            ";
        // line 265
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 265, $this->source); })()) > 1)) {
            // line 266
            yield "                <li>
                    <a href=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 267, $this->source); })()) - 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 267, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 267, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 267, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 267, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            ";
        } else {
            // line 270
            yield "                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            ";
        }
        // line 274
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 274, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 275
            yield "                <li>
                    <a href=\"";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration", ["page" => $context["page"], "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 276, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 276, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 276, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 276, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight ";
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 276, $this->source); })()) == $context["page"])) ? ("bg-gray-200 dark:bg-gray-500 dark:border-gray-500") : ("bg-white dark:bg-gray-800 dark:border-gray-500"));
            yield " border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        yield "            ";
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 279, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 279, $this->source); })()))) {
            // line 280
            yield "                <li>
                    <a href=\"";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 281, $this->source); })()) + 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 281, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 281, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 281, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 281, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
                </li>
            ";
        } else {
            // line 284
            yield "                <li>
                    <span class=\"px-3 py-2 leading-tight text-gray-300 bg-white border border-gray-300 rounded-r-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Next</span>
                </li>
            ";
        }
        // line 288
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
        return "dashboard/_tournament_list.html.twig";
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
        return array (  537 => 288,  531 => 284,  525 => 281,  522 => 280,  519 => 279,  506 => 276,  503 => 275,  498 => 274,  492 => 270,  486 => 267,  483 => 266,  481 => 265,  472 => 258,  468 => 256,  465 => 255,  384 => 180,  378 => 177,  374 => 176,  369 => 174,  363 => 173,  355 => 168,  341 => 157,  335 => 154,  331 => 153,  325 => 150,  321 => 149,  315 => 148,  307 => 143,  293 => 132,  287 => 129,  283 => 128,  277 => 125,  273 => 124,  267 => 123,  259 => 118,  244 => 106,  239 => 103,  228 => 95,  225 => 94,  214 => 86,  211 => 85,  209 => 84,  205 => 82,  194 => 74,  191 => 73,  180 => 65,  177 => 64,  175 => 63,  169 => 59,  165 => 57,  159 => 55,  157 => 54,  153 => 52,  149 => 50,  143 => 48,  141 => 47,  134 => 43,  131 => 42,  127 => 40,  121 => 38,  119 => 37,  112 => 33,  108 => 32,  102 => 29,  97 => 26,  92 => 25,  90 => 24,  84 => 21,  77 => 17,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  44 => 1,);
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
        <form method=\"GET\" action=\"{{ path('app_dashboard_tournament') }}\" class=\"flex flex-col sm:flex-row w-full sm:w-auto items-start sm:items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-full sm:w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"tournament_type\" {{ search_by == 'tournament_type' ? 'selected' : '' }}>Tournament name</option>
                <option value=\"t.start_day\" {{ search_by == 't.start_day' ? 'selected' : '' }}>Start day</option>
                <option value=\"t.end_day\" {{ search_by == 't.end_day' ? 'selected' : '' }}>End day</option>
                <option value=\"t.status\" {{ search_by == 't.status' ? 'selected' : '' }}>Status</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"{{ search_value }}\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>

        <a href=\"{{ path('app_dashboard_create_tournament') }}\" class=\"mt-2 sm:mt-0 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">Create</a>
    </div>
    <div class=\"space-y-2\">
    {% if tournament_registration|length > 0 %}
        {% for registration in tournament_registration %}
            <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 items-center\">
                    <div class=\"col-span-1 lg:col-span-1\">
                        <img src=\"{{ profiles ~ 'trofeo.png' }}\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                    </div>
                    <div class=\"col-span-1 sm:col-span-1 lg:col-span-1\">
                        <div class=\"font-semibold text-lg dark:text-white\">{{ registration.tournament_type }}</div>
                        <p><span class=\"font-medium\">Location:</span> {{ registration.location | default('-') }}</p>
                    </div>
                    <div class=\"col-span-1 sm:col-span-1 lg:col-span-1\">
                        <p><span class=\"font-medium\">Hour:</span> 
                            {% if registration.hour %}
                                {{ registration.hour|date('h:i a') }}
                            {% else %}
                                -
                            {% endif %}
                        </p>
                        <p><span class=\"font-medium\">Status:</span> {{ registration.status | default('-') }}</p>
                    </div>
                    <div class=\"col-span-1 sm:col-span-1 lg:col-span-1\">
                        <p><span class=\"font-medium\">Start:</span>
                            {% if registration.start_day %}
                                {{ registration.start_day|date('Y-m-d') | default('-') }}
                            {% else %}
                                -
                            {% endif %}
                        </p>
                        <p><span class=\"font-medium\">End:</span>
                            {% if registration.end_day %}
                                {{ registration.end_day|date('Y-m-d') | default('-') }}
                            {% else %}
                                -
                            {% endif %}
                        </p>
                    </div>
                    <div class=\"flex items-center space-x-3 justify-end\">
                        <!-- Registered User Button -->
                        {% if registration.registeredUser %}
                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-green-500 text-2xl\" data-modal-target=\"registrationModal-{{ registration.id }}\" disabled>
                                    <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Registered
                                </div>
                            </div>
                        {% else %}
                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-yellow-500 text-2xl\" data-modal-target=\"registrationModal-{{ registration.id }}\">
                                    <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Register here
                                </div>
                            </div>
                        {% endif %}

                        <!-- Create Games Button -->
                        {% if registration.status == 'Games created' %}
                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-green-500 text-2xl\" data-modal-target=\"createGamesModal-{{ registration.id }}\" disabled>
                                    <i class=\"fa-duotone fa-solid fa-table-tennis-paddle-ball\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Games created
                                </div>
                            </div>
                        {% else %}
                            <div class=\"relative group\">
                                <button type=\"button\" class=\"text-yellow-500 text-2xl\" data-modal-target=\"createGamesModal-{{ registration.id }}\">
                                    <i class=\"fa-duotone fa-solid fa-table-tennis-paddle-ball\"></i>
                                </button>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                    Create Games
                                </div>
                            </div>
                        {% endif %}

                        <!-- Delete Button -->
                        <div class=\"relative group\">
                            <button type=\"button\" class=\"text-red-500 text-2xl\" data-modal-target=\"deleteModal-{{ registration.id }}\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                Delete
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Modal -->
                <div id=\"registrationModal-{{ registration.id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Do you want to join this tournament?</h2>
                            <p class=\"mb-6\">Please verify and confirm the action.</p>
                            <form method=\"post\" action=\"{{ path('app_dashboard_registration_user', {id: registration.id}) }}\" onsubmit=\"showLoadingSpinner('{{ registration.id }}')\">
                                <input type=\"hidden\" name=\"tournament_id\" value=\"{{ registration.id }}\">
                                <input type=\"hidden\" name=\"players\" value=\"{{ registration.players }}\">
                                
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"registerBtn-{{ registration.id }}\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('registrationModal-{{ registration.id }}')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-{{ registration.id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create Games Modal -->
                <div id=\"createGamesModal-{{ registration.id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to create the games?</h2>
                            <p class=\"mb-6\">This action may take a few minutes and cannot be undone.</p>
                            <form method=\"post\" action=\"{{ path('app_dashboard_create_games', {id: registration.id}) }}\" onsubmit=\"showLoadingSpinner('{{ registration.id }}')\">
                                <input type=\"hidden\" name=\"tournament_id\" value=\"{{ registration.id }}\">
                                <input type=\"hidden\" name=\"players\" value=\"{{ registration.players }}\">
                                
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"createGamesBtn-{{ registration.id }}\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('createGamesModal-{{ registration.id }}')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-{{ registration.id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div id=\"deleteModal-{{ registration.id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to delete this tournament?</h2>
                            <p class=\"mb-6\">This action cannot be undone.</p>
                            <form method=\"post\" action=\"{{ path('app_dashboard_tournament_delete', {id: registration.id}) }}\" onsubmit=\"showLoadingSpinner('{{ registration.id }}')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ registration.id) }}\">
                                <div class=\"flex justify-center\">
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded mr-2\" onclick=\"closeModal('deleteModal-{{ registration.id }}')\">Cancel</button>
                                    <button type=\"submit\" id=\"deleteBtn-{{ registration.id }}\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded\">Delete</button>
                                </div>
                            </form>
                            <div id=\"spinner-{{ registration.id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
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

                    function showLoadingSpinner(user_profile_id) {
                        const modalContent = document.querySelector('#createGamesModal-' + user_profile_id + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + user_profile_id);
                        spinner.classList.remove('hidden');
                        const modal = document.getElementById('createGamesModal-' + user_profile_id);
                        modal.classList.add('hidden');
                    }
                </script>
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

                    function showLoadingSpinner(user_profile_id) {
                        const modalContent = document.querySelector('#registrationModal-' + user_profile_id + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + user_profile_id);
                        spinner.classList.remove('hidden');
                        const modal = document.getElementById('registrationModal-' + user_profile_id);
                        modal.classList.add('hidden');
                    }
                </script>
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

                    function showLoadingSpinner(tournamentId) {
                        const modalContent = document.querySelector('#deleteModal-' + tournamentId + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + tournamentId);
                        spinner.classList.remove('hidden');
                        const modal = document.getElementById('deleteModal-' + tournamentId);
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
                    <a href=\"{{ path('app_dashboard_registration', {page: current_page - 1, sort_by: sort_by, order: order, search_by: search_by, search_value: search_value}) }}\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            {% else %}
                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            {% endif %}
            {% for page in 1..total_pages %}
                <li>
                    <a href=\"{{ path('app_dashboard_registration', {page: page, sort_by: sort_by, order: order, search_by: search_by, search_value: search_value}) }}\" class=\"px-3 py-2 leading-tight {{ current_page == page ? 'bg-gray-200 dark:bg-gray-500 dark:border-gray-500' : 'bg-white dark:bg-gray-800 dark:border-gray-500' }} border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">{{ page }}</a>
                </li>
            {% endfor %}
            {% if current_page < total_pages %}
                <li>
                    <a href=\"{{ path('app_dashboard_registration', {page: current_page + 1, sort_by: sort_by, order: order, search_by: search_by, search_value: search_value}) }}\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
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
", "dashboard/_tournament_list.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_tournament_list.html.twig");
    }
}
