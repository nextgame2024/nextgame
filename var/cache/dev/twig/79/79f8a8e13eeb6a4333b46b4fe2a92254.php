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

/* dashboard/_tournament_registration_list.html.twig */
class __TwigTemplate_a9b4b8ab6843aa96955d876f6b00d502 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_tournament_registration_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_tournament_registration_list.html.twig"));

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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration");
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
                <option value=\"u.name\" ";
        // line 15
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 15, $this->source); })()) == "u.name")) ? ("selected") : (""));
        yield ">Name</option>
                <option value=\"u.rating\" ";
        // line 16
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 16, $this->source); })()) == "u.rating")) ? ("selected") : (""));
        yield ">Rating</option>
                <option value=\"d.name\" ";
        // line 17
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 17, $this->source); })()) == "d.name")) ? ("selected") : (""));
        yield ">Division</option>
                <option value=\"tr.status\" ";
        // line 18
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 18, $this->source); })()) == "tr.status")) ? ("selected") : (""));
        yield ">Status</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>
    </div>
    <div class=\"space-y-2\">
    ";
        // line 25
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournament_registration"]) || array_key_exists("tournament_registration", $context) ? $context["tournament_registration"] : (function () { throw new RuntimeError('Variable "tournament_registration" does not exist.', 25, $this->source); })())) > 0)) {
            // line 26
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournament_registration"]) || array_key_exists("tournament_registration", $context) ? $context["tournament_registration"] : (function () { throw new RuntimeError('Variable "tournament_registration" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
                // line 27
                yield "            <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-8 gap-2 items-center\">
                    <div>
                        <img src=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 30, $this->source); })()) . "trofeo.png"), "html", null, true);
                yield "\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                    </div>
                    <div>
                        <div class=\"font-semibold text-lg dark:text-white\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_type", [], "any", false, false, false, 33), "html", null, true);
                yield "</div>
                        <p><span class=\"font-medium\">Location:</span> ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "location", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "location", [], "any", false, false, false, 34), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Hour:</span> 
                            ";
                // line 38
                if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "hour", [], "any", false, false, false, 38)) {
                    // line 39
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "hour", [], "any", false, false, false, 39), "h:i a"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 41
                    yield "                                -
                            ";
                }
                // line 43
                yield "                        </p>
                        <p><span class=\"font-medium\">Status:</span> ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_status", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_status", [], "any", false, false, false, 44), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Start:</span>
                            ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "start_day", [], "any", false, false, false, 48)) {
                    // line 49
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "start_day", [], "any", false, false, false, 49), "Y-m-d"), "-"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 51
                    yield "                                -
                            ";
                }
                // line 53
                yield "                        </p>
                        <p><span class=\"font-medium\">End:</span>
                            ";
                // line 55
                if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "end_day", [], "any", false, false, false, 55)) {
                    // line 56
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "end_day", [], "any", false, false, false, 56), "Y-m-d"), "-"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 58
                    yield "                                -
                            ";
                }
                // line 60
                yield "                        </p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Name:</span> ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "name", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "name", [], "any", false, false, false, 63), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Phone:</span> ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "phone", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "phone", [], "any", false, false, false, 64), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Rating:</span> ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "rating", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "rating", [], "any", false, false, false, 67), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Division:</span> ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "division", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "division", [], "any", false, false, false, 68), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <label for=\"team_";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 71), "html", null, true);
                yield "\" class=\"font-medium\">Team:</label>
                        <select id=\"team_";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 72), "html", null, true);
                yield "\" name=\"team\" 
                                class=\"form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500\"
                                onchange=\"confirmTeamChange(";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 74), "html", null, true);
                yield ", this.value)\">
                            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "teams", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 76
                    yield "                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 76), "html", null, true);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 76) == CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "team_id", [], "any", false, false, false, 76))) {
                        yield "selected";
                    }
                    yield ">
                                    ";
                    // line 77
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 77), "html", null, true);
                    yield "
                                </option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                yield "                        </select>
                    </div>
                    <div class=\"col-span-1 sm:col-span-2 lg:col-span-1 flex items-center space-x-3 justify-end relative group\">
                        ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_status", [], "any", false, false, false, 83) == "Open")) {
                    // line 84
                    yield "                            <button type=\"button\" class=\"text-yellow-500 text-2xl\" data-modal-target=\"deleteModal-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 84), "html", null, true);
                    yield "\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                            </button>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                Register here
                            </div>
                        ";
                } else {
                    // line 91
                    yield "                            <button type=\"button\" class=\"text-green-500 text-2xl\" data-modal-target=\"deleteModal-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 91), "html", null, true);
                    yield "\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                            </button>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                Leave the tournament
                            </div>
                        ";
                }
                // line 98
                yield "                    </div>
                </div>

                <!-- Modal -->
                <div id=\"deleteModal-";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 102), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to continue?</h2>
                            <p class=\"mb-6\">Please verify and confirm the action.</p>
                            <form method=\"post\" action=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 107)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 107), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 108))), "html", null, true);
                yield "\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"deleteBtn-";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 110), "html", null, true);
                yield "\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded  mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('deleteModal-";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 111), "html", null, true);
                yield "')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 114), "html", null, true);
                yield "\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- teamChangeModal -->
                <div id=\"teamChangeModal-";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 124), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to change the team?</h2>
                            <p class=\"mb-6\">Please verify that all teams have been properly formed.</p>
                            <form method=\"post\" action=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_change_team", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 129)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 129), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("change-team" . CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 130))), "html", null, true);
                yield "\">
                                <input type=\"hidden\" id=\"new_team_id-";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 131), "html", null, true);
                yield "\" name=\"new_team_id\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('teamChangeModal-";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 134), "html", null, true);
                yield "')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "tournament_registration_id", [], "any", false, false, false, 137), "html", null, true);
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
                    function confirmTeamChange(tournamentId, newTeamId) {
                        document.getElementById('new_team_id-' + tournamentId).value = newTeamId;
                        const modal = document.getElementById('teamChangeModal-' + tournamentId);
                        modal.classList.remove('hidden');
                    }

                    function closeModal(modalId) {
                        document.getElementById(modalId).classList.add('hidden');
                    }

                    function showLoadingSpinner(tournamentId) {
                        const modalContent = document.querySelector('#teamChangeModal-' + tournamentId + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + tournamentId);
                        spinner.classList.remove('hidden');
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            yield "    ";
        } else {
            // line 189
            yield "        <div class=\"text-center py-4\">There's nothing here yet!</div>
    ";
        }
        // line 191
        yield "</div>

</div>

<div class=\"mt-4\">
    <nav>
        <ul class=\"inline-flex -space-x-px\">
            ";
        // line 198
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 198, $this->source); })()) > 1)) {
            // line 199
            yield "                <li>
                    <a href=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 200, $this->source); })()) - 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 200, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 200, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 200, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 200, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            ";
        } else {
            // line 203
            yield "                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            ";
        }
        // line 207
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 207, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 208
            yield "                <li>
                    <a href=\"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration", ["page" => $context["page"], "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 209, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 209, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 209, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 209, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight ";
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 209, $this->source); })()) == $context["page"])) ? ("bg-gray-200 dark:bg-gray-500 dark:border-gray-500") : ("bg-white dark:bg-gray-800 dark:border-gray-500"));
            yield " border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "            ";
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 212, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 212, $this->source); })()))) {
            // line 213
            yield "                <li>
                    <a href=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 214, $this->source); })()) + 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 214, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 214, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 214, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 214, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
                </li>
            ";
        } else {
            // line 217
            yield "                <li>
                    <span class=\"px-3 py-2 leading-tight text-gray-300 bg-white border border-gray-300 rounded-r-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Next</span>
                </li>
            ";
        }
        // line 221
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
        return "dashboard/_tournament_registration_list.html.twig";
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
        return array (  472 => 221,  466 => 217,  460 => 214,  457 => 213,  454 => 212,  441 => 209,  438 => 208,  433 => 207,  427 => 203,  421 => 200,  418 => 199,  416 => 198,  407 => 191,  403 => 189,  400 => 188,  343 => 137,  337 => 134,  331 => 131,  327 => 130,  321 => 129,  313 => 124,  300 => 114,  294 => 111,  290 => 110,  285 => 108,  279 => 107,  271 => 102,  265 => 98,  254 => 91,  243 => 84,  241 => 83,  236 => 80,  227 => 77,  218 => 76,  214 => 75,  210 => 74,  205 => 72,  201 => 71,  195 => 68,  191 => 67,  185 => 64,  181 => 63,  176 => 60,  172 => 58,  166 => 56,  164 => 55,  160 => 53,  156 => 51,  150 => 49,  148 => 48,  141 => 44,  138 => 43,  134 => 41,  128 => 39,  126 => 38,  119 => 34,  115 => 33,  109 => 30,  104 => 27,  99 => 26,  97 => 25,  89 => 20,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  44 => 1,);
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
        <form method=\"GET\" action=\"{{ path('app_dashboard_registration') }}\" class=\"flex flex-col sm:flex-row w-full sm:w-auto items-start sm:items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-full sm:w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"tournament_type\" {{ search_by == 'tournament_type' ? 'selected' : '' }}>Tournament name</option>
                <option value=\"t.start_day\" {{ search_by == 't.start_day' ? 'selected' : '' }}>Start day</option>
                <option value=\"t.end_day\" {{ search_by == 't.end_day' ? 'selected' : '' }}>End day</option>
                <option value=\"u.name\" {{ search_by == 'u.name' ? 'selected' : '' }}>Name</option>
                <option value=\"u.rating\" {{ search_by == 'u.rating' ? 'selected' : '' }}>Rating</option>
                <option value=\"d.name\" {{ search_by == 'd.name' ? 'selected' : '' }}>Division</option>
                <option value=\"tr.status\" {{ search_by == 'tr.status' ? 'selected' : '' }}>Status</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"{{ search_value }}\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>
    </div>
    <div class=\"space-y-2\">
    {% if tournament_registration|length > 0 %}
        {% for registration in tournament_registration %}
            <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-8 gap-2 items-center\">
                    <div>
                        <img src=\"{{ profiles ~ 'trofeo.png' }}\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                    </div>
                    <div>
                        <div class=\"font-semibold text-lg dark:text-white\">{{ registration.tournament_type }}</div>
                        <p><span class=\"font-medium\">Location:</span> {{ registration.location | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Hour:</span> 
                            {% if registration.hour %}
                                {{ registration.hour|date('h:i a') }}
                            {% else %}
                                -
                            {% endif %}
                        </p>
                        <p><span class=\"font-medium\">Status:</span> {{ registration.tournament_status | default('-') }}</p>
                    </div>
                    <div>
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
                    <div>
                        <p><span class=\"font-medium\">Name:</span> {{ registration.name | default('-') }}</p>
                        <p><span class=\"font-medium\">Phone:</span> {{ registration.phone | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Rating:</span> {{ registration.rating | default('-') }}</p>
                        <p><span class=\"font-medium\">Division:</span> {{ registration.division | default('-') }}</p>
                    </div>
                    <div>
                        <label for=\"team_{{ registration.tournament_registration_id }}\" class=\"font-medium\">Team:</label>
                        <select id=\"team_{{ registration.tournament_registration_id }}\" name=\"team\" 
                                class=\"form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500\"
                                onchange=\"confirmTeamChange({{ registration.tournament_registration_id }}, this.value)\">
                            {% for team in registration.teams %}
                                <option value=\"{{ team.id }}\" {% if team.id == registration.team_id %}selected{% endif %}>
                                    {{ team.name }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-span-1 sm:col-span-2 lg:col-span-1 flex items-center space-x-3 justify-end relative group\">
                        {% if registration.tournament_status == 'Open' %}
                            <button type=\"button\" class=\"text-yellow-500 text-2xl\" data-modal-target=\"deleteModal-{{ registration.tournament_registration_id }}\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                            </button>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                Register here
                            </div>
                        {% else %}
                            <button type=\"button\" class=\"text-green-500 text-2xl\" data-modal-target=\"deleteModal-{{ registration.tournament_registration_id }}\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                            </button>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\">
                                Leave the tournament
                            </div>
                        {% endif %}
                    </div>
                </div>

                <!-- Modal -->
                <div id=\"deleteModal-{{ registration.tournament_registration_id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to continue?</h2>
                            <p class=\"mb-6\">Please verify and confirm the action.</p>
                            <form method=\"post\" action=\"{{ path('app_dashboard_registration_status', {id: registration.tournament_registration_id}) }}\" onsubmit=\"showLoadingSpinner('{{ registration.tournament_registration_id }}')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ registration.tournament_registration_id) }}\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"deleteBtn-{{ registration.tournament_registration_id }}\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded  mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('deleteModal-{{ registration.tournament_registration_id }}')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-{{ registration.tournament_registration_id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- teamChangeModal -->
                <div id=\"teamChangeModal-{{ registration.tournament_registration_id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to change the team?</h2>
                            <p class=\"mb-6\">Please verify that all teams have been properly formed.</p>
                            <form method=\"post\" action=\"{{ path('app_dashboard_change_team', {id: registration.tournament_registration_id}) }}\" onsubmit=\"showLoadingSpinner('{{ registration.tournament_registration_id }}')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('change-team' ~ registration.tournament_registration_id) }}\">
                                <input type=\"hidden\" id=\"new_team_id-{{ registration.tournament_registration_id }}\" name=\"new_team_id\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('teamChangeModal-{{ registration.tournament_registration_id }}')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-{{ registration.tournament_registration_id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function confirmTeamChange(tournamentId, newTeamId) {
                        document.getElementById('new_team_id-' + tournamentId).value = newTeamId;
                        const modal = document.getElementById('teamChangeModal-' + tournamentId);
                        modal.classList.remove('hidden');
                    }

                    function closeModal(modalId) {
                        document.getElementById(modalId).classList.add('hidden');
                    }

                    function showLoadingSpinner(tournamentId) {
                        const modalContent = document.querySelector('#teamChangeModal-' + tournamentId + ' > .flex > .relative');
                        modalContent.classList.add('hidden');
                        const spinner = document.getElementById('spinner-' + tournamentId);
                        spinner.classList.remove('hidden');
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
", "dashboard/_tournament_registration_list.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_tournament_registration_list.html.twig");
    }
}
