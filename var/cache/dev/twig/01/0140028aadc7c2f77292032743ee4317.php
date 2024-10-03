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

/* dashboard/_tournament_games_list.html.twig */
class __TwigTemplate_f836cdcc1f835f0f5d240ef4471774b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_tournament_games_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_tournament_games_list.html.twig"));

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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_games");
        yield "\" class=\"flex flex-col sm:flex-row w-full sm:w-auto items-start sm:items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-full sm:w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"ttournament_type_name\" ";
        // line 12
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 12, $this->source); })()) == "tournament_type_name")) ? ("selected") : (""));
        yield ">Tournament name</option>
                <option value=\"t.start_day\" ";
        // line 13
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 13, $this->source); })()) == "t.start_day")) ? ("selected") : (""));
        yield ">Start day</option>
                <option value=\"t.end_day\" ";
        // line 14
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 14, $this->source); })()) == "t.end_day")) ? ("selected") : (""));
        yield ">End day</option>
                <option value=\"g.game_date\" ";
        // line 15
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 15, $this->source); })()) == "g.game_date")) ? ("selected") : (""));
        yield ">Date</option>
                <option value=\"team1_name\" ";
        // line 16
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 16, $this->source); })()) == "team1_name")) ? ("selected") : (""));
        yield ">Team 1</option>
                <option value=\"team2_name\" ";
        // line 17
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 17, $this->source); })()) == "team2_name")) ? ("selected") : (""));
        yield ">Team 2</option>
                <option value=\"player_one_name\" ";
        // line 18
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 18, $this->source); })()) == "player_one_name")) ? ("selected") : (""));
        yield ">Player 1</option>
                <option value=\"player_two_name\" ";
        // line 19
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 19, $this->source); })()) == "player_two_name")) ? ("selected") : (""));
        yield ">Player 2</option>
                <option value=\"g.round\" ";
        // line 20
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 20, $this->source); })()) == "g.round")) ? ("selected") : (""));
        yield ">Round</option>
                <option value=\"division_name\" ";
        // line 21
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 21, $this->source); })()) == "division_name")) ? ("selected") : (""));
        yield ">Division</option>
                <option value=\"g.game_type\" ";
        // line 22
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 22, $this->source); })()) == "g.game_type")) ? ("selected") : (""));
        yield ">Type</option>
                <option value=\"table_name\" ";
        // line 23
        yield ((((isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 23, $this->source); })()) == "table_name")) ? ("selected") : (""));
        yield ">Table</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>

        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_create_game");
        yield "\" class=\"mt-2 sm:mt-0 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">Create</a>
    </div>
    <div class=\"space-y-2\">
    ";
        // line 32
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tournament_games"]) || array_key_exists("tournament_games", $context) ? $context["tournament_games"] : (function () { throw new RuntimeError('Variable "tournament_games" does not exist.', 32, $this->source); })())) > 0)) {
            // line 33
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournament_games"]) || array_key_exists("tournament_games", $context) ? $context["tournament_games"] : (function () { throw new RuntimeError('Variable "tournament_games" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["games"]) {
                // line 34
                yield "            <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[3%_10%_8%_8%_9%_9%_14%_14%_12%_6%] gap-3 items-center\">
                    <div>
                        <img src=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 37, $this->source); })()) . "trofeo.png"), "html", null, true);
                yield "\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                    </div>
                    <div>
                        <div class=\"font-semibold text-lg dark:text-white\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "tournament_type_name", [], "any", false, false, false, 40), "html", null, true);
                yield "</div>
                        <p><span class=\"font-medium\">Location:</span> ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "location_name", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "location_name", [], "any", false, false, false, 41), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Round:</span> ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "round", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "round", [], "any", false, false, false, 44), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Table:</span> ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "table_name", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "table_name", [], "any", false, false, false, 45), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Start:</span>
                            ";
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, $context["games"], "start_day", [], "any", false, false, false, 49)) {
                    // line 50
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "start_day", [], "any", false, false, false, 50), "Y-m-d"), "-"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 52
                    yield "                                -
                            ";
                }
                // line 54
                yield "                        </p>
                        <p><span class=\"font-medium\">Hour:</span> 
                            ";
                // line 56
                if (CoreExtension::getAttribute($this->env, $this->source, $context["games"], "hour", [], "any", false, false, false, 56)) {
                    // line 57
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "hour", [], "any", false, false, false, 57), "h:i a"), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 59
                    yield "                                -
                            ";
                }
                // line 61
                yield "                        </p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Team 1:</span> ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "team1_name", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "team1_name", [], "any", false, false, false, 64), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Team 2:</span> ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "team2_name", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "team2_name", [], "any", false, false, false, 65), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Type:</span> ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "game_type", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "game_type", [], "any", false, false, false, 68), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Division:</span> ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "division_name", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "division_name", [], "any", false, false, false, 69), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Player T1:</span> ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_one_name", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_one_name", [], "any", false, false, false, 72), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Player T2:</span> ";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_two_name", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_two_name", [], "any", false, false, false, 73), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Player T1:</span> ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_three_name", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_three_name", [], "any", false, false, false, 76), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Player T2:</span> ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_four_name", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "player_four_name", [], "any", false, false, false, 77), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Date:</span> ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "game_date", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "game_date", [], "any", false, false, false, 80), "-")) : ("-")), "html", null, true);
                yield "</p>
                        <p><span class=\"font-medium\">Status:</span> ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "status", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "status", [], "any", false, false, false, 81), "-")) : ("-")), "html", null, true);
                yield "</p>
                    </div>
                    <div class=\"col-span-1 sm:col-span-2 lg:col-span-1 flex items-center space-x-3 justify-end relative\">
                        <div>
                            <label for=\"team_";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 85), "html", null, true);
                yield "\" class=\"font-medium\">Payment:</label>
                            <select id=\"team_";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 86), "html", null, true);
                yield "\" name=\"team\" 
                                    class=\"form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500\"
                                    onchange=\"confirmTeamChange(";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield ", this.value)\">
                                ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 89, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["currentPayment"]) {
                    // line 90
                    yield "                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["currentPayment"], "html", null, true);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "is_paid", [], "any", false, false, false, 90) == $context["currentPayment"])) {
                        yield "selected";
                    }
                    yield ">
                                        ";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["currentPayment"], "html", null, true);
                    yield "
                                    </option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentPayment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                yield "                            </select>
                        </div>

                        <a href=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_edit_game", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"text-blue-500 text-2xl relative group\" onclick=\"showLoadingSpinner()\">
                            <i class=\"fas fa-pencil-alt\"></i>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                Edit
                            </div>
                        </a>
                        
                        ";
                // line 105
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["games"], "status", [], "any", false, false, false, 105) == "Open")) {
                    // line 106
                    yield "                            <button type=\"button\" class=\"text-yellow-500 text-2xl relative group\" data-modal-target=\"deleteModal-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 106), "html", null, true);
                    yield "\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                    style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                    Register here
                                </div>
                            </button>
                        ";
                } else {
                    // line 114
                    yield "                            <button type=\"button\" class=\"text-green-500 text-2xl relative group\" data-modal-target=\"deleteModal-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 114), "html", null, true);
                    yield "\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                    style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                    Leave the tournament
                                </div>
                            </button>
                        ";
                }
                // line 122
                yield "                    </div>
                </div>

                <!-- Modal -->
                <div id=\"deleteModal-";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 126), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to continue?</h2>
                            <p class=\"mb-6\">Please verify and confirm the action.</p>
                            <form method=\"post\" action=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_games", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 131), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 132))), "html", null, true);
                yield "\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"deleteBtn-";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded  mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('deleteModal-";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 135), "html", null, true);
                yield "')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 138), "html", null, true);
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
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 148), "html", null, true);
                yield "\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to change the team?</h2>
                            <p class=\"mb-6\">Please verify that all teams have been properly formed.</p>
                            <form method=\"post\" action=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_change_team", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 153)]), "html", null, true);
                yield "\" onsubmit=\"showLoadingSpinner('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 153), "html", null, true);
                yield "')\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("change-team" . CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 154))), "html", null, true);
                yield "\">
                                <input type=\"hidden\" id=\"new_team_id-";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 155), "html", null, true);
                yield "\" name=\"new_team_id\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('teamChangeModal-";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 158), "html", null, true);
                yield "')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["games"], "id", [], "any", false, false, false, 161), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['games'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            yield "    ";
        } else {
            // line 213
            yield "        <div class=\"text-center py-4\">There's nothing here yet!</div>
    ";
        }
        // line 215
        yield "</div>

</div>

<div class=\"mt-4\">
    <nav>
        <ul class=\"inline-flex -space-x-px\">
            ";
        // line 222
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 222, $this->source); })()) > 1)) {
            // line 223
            yield "                <li>
                    <a href=\"";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_games", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 224, $this->source); })()) - 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 224, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 224, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 224, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 224, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            ";
        } else {
            // line 227
            yield "                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            ";
        }
        // line 231
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 231, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 232
            yield "                <li>
                    <a href=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_games", ["page" => $context["page"], "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 233, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 233, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 233, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 233, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight ";
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 233, $this->source); })()) == $context["page"])) ? ("bg-gray-200 dark:bg-gray-500 dark:border-gray-500") : ("bg-white dark:bg-gray-800 dark:border-gray-500"));
            yield " border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        yield "            ";
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 236, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 236, $this->source); })()))) {
            // line 237
            yield "                <li>
                    <a href=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_games", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 238, $this->source); })()) + 1), "sort_by" => (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 238, $this->source); })()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 238, $this->source); })()), "search_by" => (isset($context["search_by"]) || array_key_exists("search_by", $context) ? $context["search_by"] : (function () { throw new RuntimeError('Variable "search_by" does not exist.', 238, $this->source); })()), "search_value" => (isset($context["search_value"]) || array_key_exists("search_value", $context) ? $context["search_value"] : (function () { throw new RuntimeError('Variable "search_value" does not exist.', 238, $this->source); })())]), "html", null, true);
            yield "\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
                </li>
            ";
        } else {
            // line 241
            yield "                <li>
                    <span class=\"px-3 py-2 leading-tight text-gray-300 bg-white border border-gray-300 rounded-r-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Next</span>
                </li>
            ";
        }
        // line 245
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
        return "dashboard/_tournament_games_list.html.twig";
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
        return array (  529 => 245,  523 => 241,  517 => 238,  514 => 237,  511 => 236,  498 => 233,  495 => 232,  490 => 231,  484 => 227,  478 => 224,  475 => 223,  473 => 222,  464 => 215,  460 => 213,  457 => 212,  400 => 161,  394 => 158,  388 => 155,  384 => 154,  378 => 153,  370 => 148,  357 => 138,  351 => 135,  347 => 134,  342 => 132,  336 => 131,  328 => 126,  322 => 122,  310 => 114,  298 => 106,  296 => 105,  285 => 97,  280 => 94,  271 => 91,  262 => 90,  258 => 89,  254 => 88,  249 => 86,  245 => 85,  238 => 81,  234 => 80,  228 => 77,  224 => 76,  218 => 73,  214 => 72,  208 => 69,  204 => 68,  198 => 65,  194 => 64,  189 => 61,  185 => 59,  179 => 57,  177 => 56,  173 => 54,  169 => 52,  163 => 50,  161 => 49,  154 => 45,  150 => 44,  144 => 41,  140 => 40,  134 => 37,  129 => 34,  124 => 33,  122 => 32,  116 => 29,  109 => 25,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  44 => 1,);
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
        <form method=\"GET\" action=\"{{ path('app_dashboard_games') }}\" class=\"flex flex-col sm:flex-row w-full sm:w-auto items-start sm:items-center\">
            <select name=\"search_by\" class=\"border border-gray-300 rounded px-2 py-1 h-10 w-full sm:w-80 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
                <option value=\"ttournament_type_name\" {{ search_by == 'tournament_type_name' ? 'selected' : '' }}>Tournament name</option>
                <option value=\"t.start_day\" {{ search_by == 't.start_day' ? 'selected' : '' }}>Start day</option>
                <option value=\"t.end_day\" {{ search_by == 't.end_day' ? 'selected' : '' }}>End day</option>
                <option value=\"g.game_date\" {{ search_by == 'g.game_date' ? 'selected' : '' }}>Date</option>
                <option value=\"team1_name\" {{ search_by == 'team1_name' ? 'selected' : '' }}>Team 1</option>
                <option value=\"team2_name\" {{ search_by == 'team2_name' ? 'selected' : '' }}>Team 2</option>
                <option value=\"player_one_name\" {{ search_by == 'player_one_name' ? 'selected' : '' }}>Player 1</option>
                <option value=\"player_two_name\" {{ search_by == 'player_two_name' ? 'selected' : '' }}>Player 2</option>
                <option value=\"g.round\" {{ search_by == 'g.round' ? 'selected' : '' }}>Round</option>
                <option value=\"division_name\" {{ search_by == 'division_name' ? 'selected' : '' }}>Division</option>
                <option value=\"g.game_type\" {{ search_by == 'g.game_type' ? 'selected' : '' }}>Type</option>
                <option value=\"table_name\" {{ search_by == 'table_name' ? 'selected' : '' }}>Table</option>
            </select>
            <input type=\"text\" name=\"search_value\" value=\"{{ search_value }}\" placeholder=\"Search\" class=\"mt-2 sm:mt-0 sm:ml-2 w-full sm:w-80 border border-gray-300 rounded px-2 py-1 h-10 dark:bg-gray-700 dark:text-white dark:border-gray-600\">
            <button type=\"submit\" class=\"mt-2 sm:mt-0 sm:ml-2 bg-blue-500 text-white py-2 px-4 rounded h-10 hover:bg-blue-600\" onclick=\"showLoadingSpinner()\">Search</button>
        </form>

        <a href=\"{{ path('app_dashboard_create_game') }}\" class=\"mt-2 sm:mt-0 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600\" onclick=\"showLoadingSpinner()\">Create</a>
    </div>
    <div class=\"space-y-2\">
    {% if tournament_games|length > 0 %}
        {% for games in tournament_games %}
            <div class=\"bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-4 shadow-md w-full\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[3%_10%_8%_8%_9%_9%_14%_14%_12%_6%] gap-3 items-center\">
                    <div>
                        <img src=\"{{ profiles ~ 'trofeo.png' }}\" class=\"inline-block h-[50px] w-[50px] rounded-full ring-2 ring-white dark:ring-gray\" />
                    </div>
                    <div>
                        <div class=\"font-semibold text-lg dark:text-white\">{{ games.tournament_type_name }}</div>
                        <p><span class=\"font-medium\">Location:</span> {{ games.location_name | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Round:</span> {{ games.round | default('-') }}</p>
                        <p><span class=\"font-medium\">Table:</span> {{ games.table_name | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Start:</span>
                            {% if games.start_day %}
                                {{ games.start_day|date('Y-m-d') | default('-') }}
                            {% else %}
                                -
                            {% endif %}
                        </p>
                        <p><span class=\"font-medium\">Hour:</span> 
                            {% if games.hour %}
                                {{ games.hour|date('h:i a') }}
                            {% else %}
                                -
                            {% endif %}
                        </p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Team 1:</span> {{ games.team1_name | default('-') }}</p>
                        <p><span class=\"font-medium\">Team 2:</span> {{ games.team2_name | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Type:</span> {{ games.game_type | default('-') }}</p>
                        <p><span class=\"font-medium\">Division:</span> {{ games.division_name | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Player T1:</span> {{ games.player_one_name | default('-') }}</p>
                        <p><span class=\"font-medium\">Player T2:</span> {{ games.player_two_name | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Player T1:</span> {{ games.player_three_name | default('-') }}</p>
                        <p><span class=\"font-medium\">Player T2:</span> {{ games.player_four_name | default('-') }}</p>
                    </div>
                    <div>
                        <p><span class=\"font-medium\">Date:</span> {{ games.game_date | default('-') }}</p>
                        <p><span class=\"font-medium\">Status:</span> {{ games.status | default('-') }}</p>
                    </div>
                    <div class=\"col-span-1 sm:col-span-2 lg:col-span-1 flex items-center space-x-3 justify-end relative\">
                        <div>
                            <label for=\"team_{{ games.id }}\" class=\"font-medium\">Payment:</label>
                            <select id=\"team_{{ games.id}}\" name=\"team\" 
                                    class=\"form-select mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500\"
                                    onchange=\"confirmTeamChange({{ games.id }}, this.value)\">
                                {% for currentPayment in payment %}
                                    <option value=\"{{ currentPayment }}\" {% if games.is_paid == currentPayment %}selected{% endif %}>
                                        {{ currentPayment }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>

                        <a href=\"{{ path('app_dashboard_edit_game', {id: games.id}) }}\" class=\"text-blue-500 text-2xl relative group\" onclick=\"showLoadingSpinner()\">
                            <i class=\"fas fa-pencil-alt\"></i>
                            <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                Edit
                            </div>
                        </a>
                        
                        {% if games.status == 'Open' %}
                            <button type=\"button\" class=\"text-yellow-500 text-2xl relative group\" data-modal-target=\"deleteModal-{{ games.id }}\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                    style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                    Register here
                                </div>
                            </button>
                        {% else %}
                            <button type=\"button\" class=\"text-green-500 text-2xl relative group\" data-modal-target=\"deleteModal-{{ games.id }}\">
                                <i class=\"fa-duotone fa-solid fa-user-check\"></i>
                                <div class=\"absolute bottom-full mb-1 hidden group-hover:block bg-gray-700 text-white text-sm rounded py-1 px-2\"
                                    style=\"left: 50%; transform: translateX(-50%) translateX(-3px);\">
                                    Leave the tournament
                                </div>
                            </button>
                        {% endif %}
                    </div>
                </div>

                <!-- Modal -->
                <div id=\"deleteModal-{{ games.id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to continue?</h2>
                            <p class=\"mb-6\">Please verify and confirm the action.</p>
                            <form method=\"post\" action=\"{{ path('app_dashboard_games', {id: games.id}) }}\" onsubmit=\"showLoadingSpinner('{{ games.id }}')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ games.id) }}\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" id=\"deleteBtn-{{ games.id }}\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded  mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('deleteModal-{{ games.id }}')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-{{ games.id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
                                <svg class=\"animate-spin h-5 w-5 text-red-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\">
                                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- teamChangeModal -->
                <div id=\"teamChangeModal-{{ games.id }}\" class=\"hidden fixed z-10 inset-0 overflow-y-auto\">
                    <div class=\"flex items-center justify-center min-h-screen px-4 text-center\">
                        <div class=\"bg-white rounded-lg p-8 max-w-lg w-full shadow-xl relative dark:bg-gray-700\">
                            <h2 class=\"text-lg font-semibold mb-4\">Are you sure you want to change the team?</h2>
                            <p class=\"mb-6\">Please verify that all teams have been properly formed.</p>
                            <form method=\"post\" action=\"{{ path('app_dashboard_change_team', {id: games.id}) }}\" onsubmit=\"showLoadingSpinner('{{ games.id }}')\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('change-team' ~ games.id) }}\">
                                <input type=\"hidden\" id=\"new_team_id-{{ games.id }}\" name=\"new_team_id\">
                                <div class=\"flex justify-center\">
                                    <button type=\"submit\" class=\"bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mr-2\">Submit</button>
                                    <button type=\"button\" class=\"bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded\" onclick=\"closeModal('teamChangeModal-{{ games.id }}')\">Cancel</button>
                                </div>
                            </form>
                            <div id=\"spinner-{{ games.id }}\" class=\"hidden absolute inset-0 flex items-center justify-center z-20 bg-white bg-opacity-75\">
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
                    <a href=\"{{ path('app_dashboard_games', {page: current_page - 1, sort_by: sort_by, order: order, search_by: search_by, search_value: search_value}) }}\" class=\"px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Previous</a>
                </li>
            {% else %}
                <li>
                    <span class=\"px-3 py-2 ml-0 leading-tight text-gray-300 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-500 dark:text-gray-500\">Previous</span>
                </li>
            {% endif %}
            {% for page in 1..total_pages %}
                <li>
                    <a href=\"{{ path('app_dashboard_games', {page: page, sort_by: sort_by, order: order, search_by: search_by, search_value: search_value}) }}\" class=\"px-3 py-2 leading-tight {{ current_page == page ? 'bg-gray-200 dark:bg-gray-500 dark:border-gray-500' : 'bg-white dark:bg-gray-800 dark:border-gray-500' }} border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:hover:text-white dark:hover:bg-gray-400\" onclick=\"showLoadingSpinner()\">{{ page }}</a>
                </li>
            {% endfor %}
            {% if current_page < total_pages %}
                <li>
                    <a href=\"{{ path('app_dashboard_games', {page: current_page + 1, sort_by: sort_by, order: order, search_by: search_by, search_value: search_value}) }}\" class=\"px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-500 dark:text-white dark:hover:bg-gray-700\" onclick=\"showLoadingSpinner()\">Next</a>
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
", "dashboard/_tournament_games_list.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_tournament_games_list.html.twig");
    }
}
