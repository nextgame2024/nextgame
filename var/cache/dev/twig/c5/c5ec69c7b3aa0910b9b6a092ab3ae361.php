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

/* base.html.twig */
class __TwigTemplate_97452ce25db35bbfc113f1ddb0935a67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'bread' => [$this, 'block_bread'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html class=\"";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "cookies", [], "any", false, false, false, 2), "get", ["theme"], "method", false, false, false, 2) == "dark")) {
            yield "dark";
        }
        yield "\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/tailwind.css"), "html", null, true);
        yield "\">

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 53
        yield "</head>
<body class=\"bg-gray-50 text-gray-800 m-5 dark:bg-gray-900 dark:text-white flex flex-col min-h-screen\">
    <div class=\"w-full md:w-9/10 mx-auto mb-4 flex justify-between items-center\">
        <div class=\"text-2xl\">
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 57, $this->source); })()) . "NextGame.png"), "html", null, true);
        yield "\" class=\"inline-block\" /></a>
            ";
        // line 58
        yield from $this->unwrap()->yieldBlock('bread', $context, $blocks);
        // line 60
        yield "        </div>

        <div class=\"text-right\">
            <div class=\"text-sm text-gray-500 dark:text-gray-500 flex\">
                <div class=\"\">
                    <button id=\"theme-toggle\" class=\"px-4 bg-transparent dark:bg-transparent rounded\">🌙</button>
                </div>
                ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 68
            yield "                ";
            // line 71
            yield "                <div class=\"ml-3\">
                    <a href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_profile");
            yield "\">Profile |</a>
                </div>
                <div class=\"ml-3\">
                    <a href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                </div>
                ";
        } else {
            // line 78
            yield "                <div>
                    <a href=\"";
            // line 79
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login | </a>
                </div>
                <div class=\"ml-3\">
                    <a href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
                </div>
                ";
        }
        // line 85
        yield "            </div>
        </div>
    </div>

    <div class=\"w-full md:w-9/10 mx-auto flex-grow\">
    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 91
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 92
                yield "            <div class=\"rounded-md p-2 mb-4 
                ";
                // line 93
                if (($context["type"] == "success")) {
                    // line 94
                    yield "                    border-green-300 bg-green-50 dark:border-green-600 dark:bg-green-700 dark:text-white
                ";
                } elseif ((                // line 95
$context["type"] == "danger")) {
                    // line 96
                    yield "                    border-red-400 bg-red-50 dark:border-red-600 dark:bg-red-700 dark:text-white
                ";
                }
                // line 97
                yield "\"
            >
                ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "    
    ";
        // line 104
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 105
        yield "</div>

    <!-- Footer -->
    <footer class=\"bg-gray-50 text-gray-800 m-5 dark:bg-gray-900 dark:text-white py-4\">
        <div class=\"w-full md:w-9/10 mx-auto text-center\">
            <p>&copy; ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " NextGame. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "NextGame";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/runtime.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/turbo.js"), "html", null, true);
        yield "\"></script>
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 15
        yield "        <script>
            // Ensure the DOM is fully loaded or Turbo is ready
            function initializeThemeToggle() {
                const toggleButton = document.getElementById('theme-toggle');
                if (!toggleButton) return; // Exit if toggle button is not found
                const htmlElement = document.documentElement;
                const currentTheme = localStorage.getItem('theme');

                // Function to update the icon based on the theme
                function updateIcon(theme) {
                    toggleButton.innerHTML = theme === 'dark' ? '☀️' : '🌙';
                    toggleButton.style.color = theme === 'dark' ? '#000' : '#FFF'; // Set color for icon
                }

                // Apply the saved theme and icon from localStorage
                if (currentTheme === 'dark') {
                    htmlElement.classList.add('dark');
                    updateIcon('dark');
                } else {
                    htmlElement.classList.remove('dark');
                    updateIcon('light');
                }

                // Toggle the theme and icon on button click
                toggleButton.addEventListener('click', function () {
                    htmlElement.classList.toggle('dark');
                    const theme = htmlElement.classList.contains('dark') ? 'dark' : 'light';
                    localStorage.setItem('theme', theme);
                    document.cookie = \"theme=\" + theme + \"; path=/\";
                    updateIcon(theme);
                });
            }

            // Use Turbo's load event if Turbo is active, otherwise fallback to DOMContentLoaded
            document.addEventListener('turbo:load', initializeThemeToggle);
            document.addEventListener('DOMContentLoaded', initializeThemeToggle); 
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 14
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 58
    public function block_bread($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bread"));

        // line 59
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  339 => 104,  328 => 59,  318 => 58,  298 => 14,  250 => 15,  248 => 14,  244 => 13,  239 => 12,  229 => 11,  209 => 5,  192 => 110,  185 => 105,  183 => 104,  180 => 103,  174 => 102,  165 => 99,  161 => 97,  157 => 96,  155 => 95,  152 => 94,  150 => 93,  147 => 92,  142 => 91,  138 => 90,  131 => 85,  125 => 82,  119 => 79,  116 => 78,  110 => 75,  104 => 72,  101 => 71,  99 => 68,  97 => 67,  88 => 60,  86 => 58,  80 => 57,  74 => 53,  72 => 11,  67 => 9,  60 => 5,  52 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"{% if app.request.cookies.get('theme') == 'dark' %}dark{% endif %}\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}NextGame{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('build/tailwind.css') }}\">

    {% block javascripts %}
        <script src=\"{{ asset('build/runtime.js') }}\"></script>
        <script src=\"{{ asset('build/turbo.js') }}\"></script>
        {% block importmap %}{{ importmap('app') }}{% endblock %}
        <script>
            // Ensure the DOM is fully loaded or Turbo is ready
            function initializeThemeToggle() {
                const toggleButton = document.getElementById('theme-toggle');
                if (!toggleButton) return; // Exit if toggle button is not found
                const htmlElement = document.documentElement;
                const currentTheme = localStorage.getItem('theme');

                // Function to update the icon based on the theme
                function updateIcon(theme) {
                    toggleButton.innerHTML = theme === 'dark' ? '☀️' : '🌙';
                    toggleButton.style.color = theme === 'dark' ? '#000' : '#FFF'; // Set color for icon
                }

                // Apply the saved theme and icon from localStorage
                if (currentTheme === 'dark') {
                    htmlElement.classList.add('dark');
                    updateIcon('dark');
                } else {
                    htmlElement.classList.remove('dark');
                    updateIcon('light');
                }

                // Toggle the theme and icon on button click
                toggleButton.addEventListener('click', function () {
                    htmlElement.classList.toggle('dark');
                    const theme = htmlElement.classList.contains('dark') ? 'dark' : 'light';
                    localStorage.setItem('theme', theme);
                    document.cookie = \"theme=\" + theme + \"; path=/\";
                    updateIcon(theme);
                });
            }

            // Use Turbo's load event if Turbo is active, otherwise fallback to DOMContentLoaded
            document.addEventListener('turbo:load', initializeThemeToggle);
            document.addEventListener('DOMContentLoaded', initializeThemeToggle); 
        </script>
    {% endblock %}
</head>
<body class=\"bg-gray-50 text-gray-800 m-5 dark:bg-gray-900 dark:text-white flex flex-col min-h-screen\">
    <div class=\"w-full md:w-9/10 mx-auto mb-4 flex justify-between items-center\">
        <div class=\"text-2xl\">
            <a href=\"{{ path('app_dashboard') }}\"><img src=\"{{ profiles ~ 'NextGame.png' }}\" class=\"inline-block\" /></a>
            {% block bread %}
            {% endblock %}
        </div>

        <div class=\"text-right\">
            <div class=\"text-sm text-gray-500 dark:text-gray-500 flex\">
                <div class=\"\">
                    <button id=\"theme-toggle\" class=\"px-4 bg-transparent dark:bg-transparent rounded\">🌙</button>
                </div>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {# <div>
                    <a href=\"{{ path('app_micro_post_add') }}\">Add new |</a>
                </div> #}
                <div class=\"ml-3\">
                    <a href=\"{{ path('app_settings_profile') }}\">Profile |</a>
                </div>
                <div class=\"ml-3\">
                    <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
                {% else %}
                <div>
                    <a href=\"{{ path('app_login') }}\">Login | </a>
                </div>
                <div class=\"ml-3\">
                    <a href=\"{{ path('app_register') }}\">Register</a>
                </div>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"w-full md:w-9/10 mx-auto flex-grow\">
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"rounded-md p-2 mb-4 
                {% if type == 'success' %}
                    border-green-300 bg-green-50 dark:border-green-600 dark:bg-green-700 dark:text-white
                {% elseif type == 'danger' %}
                    border-red-400 bg-red-50 dark:border-red-600 dark:bg-red-700 dark:text-white
                {% endif %}\"
            >
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
    
    {% block body %}{% endblock %}
</div>

    <!-- Footer -->
    <footer class=\"bg-gray-50 text-gray-800 m-5 dark:bg-gray-900 dark:text-white py-4\">
        <div class=\"w-full md:w-9/10 mx-auto text-center\">
            <p>&copy; {{ \"now\"|date(\"Y\") }} NextGame. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
", "base.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/base.html.twig");
    }
}
