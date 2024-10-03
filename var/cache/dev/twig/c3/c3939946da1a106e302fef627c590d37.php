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

/* dashboard/create_game.html.twig */
class __TwigTemplate_d9dcdf7cebb70a4d688a60b338592938 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bread' => [$this, 'block_bread'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/create_game.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/create_game.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/create_game.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Game → Create";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 6
        yield "→ <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_games");
        yield "\">Game</a> → Create
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "    <div class=\"flex items-center justify-center mt-7 bg-gray-50 dark:bg-gray-900\">
        <div class=\"w-full mx-auto\">
            <div class=\"bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 14
            yield "                    <div class=\"rounded-md p-2 border-red-300 bg-red-50 border dark:border-red-600 dark:bg-red-700 dark:text-white mb-4\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors');
        yield "

                ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        yield "
                <div class=\"text-xl\">
                    Create a game
                </div>
                <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
                    Complete the requested information
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                    <div>
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "tournament", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Tournament"]);
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "tournament", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "tournament", [], "any", false, false, false, 31), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "game_date", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Date"]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "game_date", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "game_date", [], "any", false, false, false, 37), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Status"]);
        yield "
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "game_type", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Type"]);
        yield "
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "game_type", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "game_type", [], "any", false, false, false, 49), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "round", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Round"]);
        yield "
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "round", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "round", [], "any", false, false, false, 55), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "table_number", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Table"]);
        yield "
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "table_number", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "table_number", [], "any", false, false, false, 61), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "team", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Team 1"]);
        yield "
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "team", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "team", [], "any", false, false, false, 67), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "team2", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Team 2"]);
        yield "
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "team2", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "team2", [], "any", false, false, false, 73), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "player_one", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Player 1 - Team 1"]);
        yield "
                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "player_one", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "player_one", [], "any", false, false, false, 79), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "player_two", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Player 2 - Team 2"]);
        yield "
                        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "player_two", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "player_two", [], "any", false, false, false, 85), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "player_three", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Player 3 - Team 1"]);
        yield "
                        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "player_three", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "player_three", [], "any", false, false, false, 91), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "player_four", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Player 4 - Team 2"]);
        yield "
                        ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "player_four", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "player_four", [], "any", false, false, false, 97), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "location", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Location"]);
        yield "
                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "location", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "location", [], "any", false, false, false, 103), 'errors');
        yield "
                    </div>

                    <div>
                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "division", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Division"]);
        yield "
                        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "division", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "division", [], "any", false, false, false, 109), 'errors');
        yield "
                    </div>

                </div>

                <div>
                    <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                        ";
        // line 116
        yield (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 116, $this->source); })())) ? ("Update") : ("Create"));
        yield "
                    </button>
                </div>
                ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        yield "
            </div>
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
        return "dashboard/create_game.html.twig";
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
        return array (  373 => 119,  367 => 116,  357 => 109,  353 => 108,  349 => 107,  342 => 103,  338 => 102,  334 => 101,  327 => 97,  323 => 96,  319 => 95,  312 => 91,  308 => 90,  304 => 89,  297 => 85,  293 => 84,  289 => 83,  282 => 79,  278 => 78,  274 => 77,  267 => 73,  263 => 72,  259 => 71,  252 => 67,  248 => 66,  244 => 65,  237 => 61,  233 => 60,  229 => 59,  222 => 55,  218 => 54,  214 => 53,  207 => 49,  203 => 48,  199 => 47,  192 => 43,  188 => 42,  184 => 41,  177 => 37,  173 => 36,  169 => 35,  162 => 31,  158 => 30,  154 => 29,  141 => 19,  136 => 17,  133 => 16,  124 => 14,  120 => 13,  115 => 10,  105 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Game → Create{% endblock %}

{% block bread %}
→ <a href=\"{{ path('app_dashboard_games') }}\">Game</a> → Create
{% endblock %}

{% block body %}
    <div class=\"flex items-center justify-center mt-7 bg-gray-50 dark:bg-gray-900\">
        <div class=\"w-full mx-auto\">
            <div class=\"bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md\">
                {% for flash_error in app.flashes('verify_email_error') %}
                    <div class=\"rounded-md p-2 border-red-300 bg-red-50 border dark:border-red-600 dark:bg-red-700 dark:text-white mb-4\" role=\"alert\">{{ flash_error }}</div>
                {% endfor %}

                {{ form_errors(form) }}

                {{ form_start(form) }}
                <div class=\"text-xl\">
                    Create a game
                </div>
                <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
                    Complete the requested information
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                    <div>
                        {{ form_label(form.tournament, 'Tournament', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.tournament, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.tournament) }}
                    </div>

                    <div>
                        {{ form_label(form.game_date, 'Date', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.game_date, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.game_date) }}
                    </div>

                    <div>
                        {{ form_label(form.status, 'Status', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.status, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.status) }}
                    </div>

                    <div>
                        {{ form_label(form.game_type, 'Type', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.game_type, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.game_type) }}
                    </div>

                    <div>
                        {{ form_label(form.round, 'Round', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.round, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.round) }}
                    </div>

                    <div>
                        {{ form_label(form.table_number, 'Table', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.table_number, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.table_number) }}
                    </div>

                    <div>
                        {{ form_label(form.team, 'Team 1', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.team, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.team) }}
                    </div>

                    <div>
                        {{ form_label(form.team2, 'Team 2', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.team2, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.team2) }}
                    </div>

                    <div>
                        {{ form_label(form.player_one, 'Player 1 - Team 1', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.player_one, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.player_one) }}
                    </div>

                    <div>
                        {{ form_label(form.player_two, 'Player 2 - Team 2', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.player_two, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.player_two) }}
                    </div>

                    <div>
                        {{ form_label(form.player_three, 'Player 3 - Team 1', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.player_three, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.player_three) }}
                    </div>

                    <div>
                        {{ form_label(form.player_four, 'Player 4 - Team 2', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.player_four, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.player_four) }}
                    </div>

                    <div>
                        {{ form_label(form.location, 'Location', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.location, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.location) }}
                    </div>

                    <div>
                        {{ form_label(form.division, 'Division', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                        {{ form_widget(form.division, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                        {{ form_errors(form.division) }}
                    </div>

                </div>

                <div>
                    <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                        {{ isEdit ? 'Update' : 'Create' }}
                    </button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "dashboard/create_game.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/create_game.html.twig");
    }
}
