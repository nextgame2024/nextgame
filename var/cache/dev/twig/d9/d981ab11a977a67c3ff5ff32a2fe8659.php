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

/* dashboard/_dashboard_tabs.html.twig */
class __TwigTemplate_3fe2a7f0d46aa143d6b2291b30593b44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        // line 1
        yield from         $this->loadTemplate("dashboard/_dashboard_tabs.html.twig", "dashboard/_dashboard_tabs.html.twig", 1, "1032912613")->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/_dashboard_tabs.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Dashboard 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_users', classes: 'ml-2' } %}
            {% block content %}
                | Users 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_users') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_tournament', classes: 'ml-2' } %}
            {% block content %}
                | Tournaments  
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_tournament') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_registration', classes: 'ml-2' } %}
            {% block content %}
                | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_registration') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_games', classes: 'ml-2' } %}
            {% block content %}
                | Games 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_games') }}
            {% endblock %}
        {% endembed %}

        {# {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked', classes: 'ml-2' } %}
            {% block content %}
                 | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %} #}

    {% endblock %}
{% endembed %}", "dashboard/_dashboard_tabs.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_dashboard_tabs.html.twig");
    }
}


/* dashboard/_dashboard_tabs.html.twig */
class __TwigTemplate_3fe2a7f0d46aa143d6b2291b30593b44___1032912613 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tabs' => [$this, 'block_tabs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "shared/_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tabs.html.twig", "dashboard/_dashboard_tabs.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        // line 3
        yield "        ";
        yield from         $this->loadTemplate("dashboard/_dashboard_tabs.html.twig", "dashboard/_dashboard_tabs.html.twig", 3, "66064876")->unwrap()->yield(CoreExtension::merge($context, ["route" => "app_micro_post"]));
        // line 11
        yield "
        ";
        // line 12
        yield from         $this->loadTemplate("dashboard/_dashboard_tabs.html.twig", "dashboard/_dashboard_tabs.html.twig", 12, "648350824")->unwrap()->yield(CoreExtension::merge($context, ["route" => "app_dashboard_users", "classes" => "ml-2"]));
        // line 20
        yield "
        ";
        // line 21
        yield from         $this->loadTemplate("dashboard/_dashboard_tabs.html.twig", "dashboard/_dashboard_tabs.html.twig", 21, "977221119")->unwrap()->yield(CoreExtension::merge($context, ["route" => "app_dashboard_tournament", "classes" => "ml-2"]));
        // line 29
        yield "
        ";
        // line 30
        yield from         $this->loadTemplate("dashboard/_dashboard_tabs.html.twig", "dashboard/_dashboard_tabs.html.twig", 30, "1485342828")->unwrap()->yield(CoreExtension::merge($context, ["route" => "app_dashboard_registration", "classes" => "ml-2"]));
        // line 38
        yield "
        ";
        // line 39
        yield from         $this->loadTemplate("dashboard/_dashboard_tabs.html.twig", "dashboard/_dashboard_tabs.html.twig", 39, "1314106910")->unwrap()->yield(CoreExtension::merge($context, ["route" => "app_dashboard_games", "classes" => "ml-2"]));
        // line 47
        yield "
        ";
        // line 56
        yield "
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
        return "dashboard/_dashboard_tabs.html.twig";
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
        return array (  212 => 56,  209 => 47,  207 => 39,  204 => 38,  202 => 30,  199 => 29,  197 => 21,  194 => 20,  192 => 12,  189 => 11,  186 => 3,  176 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Dashboard 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_users', classes: 'ml-2' } %}
            {% block content %}
                | Users 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_users') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_tournament', classes: 'ml-2' } %}
            {% block content %}
                | Tournaments  
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_tournament') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_registration', classes: 'ml-2' } %}
            {% block content %}
                | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_registration') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_games', classes: 'ml-2' } %}
            {% block content %}
                | Games 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_games') }}
            {% endblock %}
        {% endembed %}

        {# {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked', classes: 'ml-2' } %}
            {% block content %}
                 | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %} #}

    {% endblock %}
{% endembed %}", "dashboard/_dashboard_tabs.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_dashboard_tabs.html.twig");
    }
}


/* dashboard/_dashboard_tabs.html.twig */
class __TwigTemplate_3fe2a7f0d46aa143d6b2291b30593b44___66064876 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "dashboard/_dashboard_tabs.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "                Dashboard 
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 8
        yield "            ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post");
        yield "
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
        return "dashboard/_dashboard_tabs.html.twig";
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
        return array (  387 => 8,  377 => 7,  365 => 5,  355 => 4,  332 => 3,  212 => 56,  209 => 47,  207 => 39,  204 => 38,  202 => 30,  199 => 29,  197 => 21,  194 => 20,  192 => 12,  189 => 11,  186 => 3,  176 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Dashboard 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_users', classes: 'ml-2' } %}
            {% block content %}
                | Users 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_users') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_tournament', classes: 'ml-2' } %}
            {% block content %}
                | Tournaments  
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_tournament') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_registration', classes: 'ml-2' } %}
            {% block content %}
                | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_registration') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_games', classes: 'ml-2' } %}
            {% block content %}
                | Games 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_games') }}
            {% endblock %}
        {% endembed %}

        {# {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked', classes: 'ml-2' } %}
            {% block content %}
                 | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %} #}

    {% endblock %}
{% endembed %}", "dashboard/_dashboard_tabs.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_dashboard_tabs.html.twig");
    }
}


/* dashboard/_dashboard_tabs.html.twig */
class __TwigTemplate_3fe2a7f0d46aa143d6b2291b30593b44___648350824 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "dashboard/_dashboard_tabs.html.twig", 12);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        yield "                | Users 
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 17
        yield "            ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users");
        yield "
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
        return "dashboard/_dashboard_tabs.html.twig";
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
        return array (  564 => 17,  554 => 16,  542 => 14,  532 => 13,  509 => 12,  387 => 8,  377 => 7,  365 => 5,  355 => 4,  332 => 3,  212 => 56,  209 => 47,  207 => 39,  204 => 38,  202 => 30,  199 => 29,  197 => 21,  194 => 20,  192 => 12,  189 => 11,  186 => 3,  176 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Dashboard 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_users', classes: 'ml-2' } %}
            {% block content %}
                | Users 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_users') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_tournament', classes: 'ml-2' } %}
            {% block content %}
                | Tournaments  
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_tournament') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_registration', classes: 'ml-2' } %}
            {% block content %}
                | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_registration') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_games', classes: 'ml-2' } %}
            {% block content %}
                | Games 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_games') }}
            {% endblock %}
        {% endembed %}

        {# {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked', classes: 'ml-2' } %}
            {% block content %}
                 | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %} #}

    {% endblock %}
{% endembed %}", "dashboard/_dashboard_tabs.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_dashboard_tabs.html.twig");
    }
}


/* dashboard/_dashboard_tabs.html.twig */
class __TwigTemplate_3fe2a7f0d46aa143d6b2291b30593b44___977221119 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "dashboard/_dashboard_tabs.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        yield "                | Tournaments  
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 25
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 26
        yield "            ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_tournament");
        yield "
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
        return "dashboard/_dashboard_tabs.html.twig";
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
        return array (  741 => 26,  731 => 25,  719 => 23,  709 => 22,  686 => 21,  564 => 17,  554 => 16,  542 => 14,  532 => 13,  509 => 12,  387 => 8,  377 => 7,  365 => 5,  355 => 4,  332 => 3,  212 => 56,  209 => 47,  207 => 39,  204 => 38,  202 => 30,  199 => 29,  197 => 21,  194 => 20,  192 => 12,  189 => 11,  186 => 3,  176 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Dashboard 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_users', classes: 'ml-2' } %}
            {% block content %}
                | Users 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_users') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_tournament', classes: 'ml-2' } %}
            {% block content %}
                | Tournaments  
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_tournament') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_registration', classes: 'ml-2' } %}
            {% block content %}
                | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_registration') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_games', classes: 'ml-2' } %}
            {% block content %}
                | Games 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_games') }}
            {% endblock %}
        {% endembed %}

        {# {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked', classes: 'ml-2' } %}
            {% block content %}
                 | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %} #}

    {% endblock %}
{% endembed %}", "dashboard/_dashboard_tabs.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_dashboard_tabs.html.twig");
    }
}


/* dashboard/_dashboard_tabs.html.twig */
class __TwigTemplate_3fe2a7f0d46aa143d6b2291b30593b44___1485342828 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "dashboard/_dashboard_tabs.html.twig", 30);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        yield "                | Registration 
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 34
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 35
        yield "            ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_registration");
        yield "
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
        return "dashboard/_dashboard_tabs.html.twig";
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
        return array (  918 => 35,  908 => 34,  896 => 32,  886 => 31,  863 => 30,  741 => 26,  731 => 25,  719 => 23,  709 => 22,  686 => 21,  564 => 17,  554 => 16,  542 => 14,  532 => 13,  509 => 12,  387 => 8,  377 => 7,  365 => 5,  355 => 4,  332 => 3,  212 => 56,  209 => 47,  207 => 39,  204 => 38,  202 => 30,  199 => 29,  197 => 21,  194 => 20,  192 => 12,  189 => 11,  186 => 3,  176 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Dashboard 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_users', classes: 'ml-2' } %}
            {% block content %}
                | Users 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_users') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_tournament', classes: 'ml-2' } %}
            {% block content %}
                | Tournaments  
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_tournament') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_registration', classes: 'ml-2' } %}
            {% block content %}
                | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_registration') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_games', classes: 'ml-2' } %}
            {% block content %}
                | Games 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_games') }}
            {% endblock %}
        {% endembed %}

        {# {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked', classes: 'ml-2' } %}
            {% block content %}
                 | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %} #}

    {% endblock %}
{% endembed %}", "dashboard/_dashboard_tabs.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_dashboard_tabs.html.twig");
    }
}


/* dashboard/_dashboard_tabs.html.twig */
class __TwigTemplate_3fe2a7f0d46aa143d6b2291b30593b44___1314106910 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'path' => [$this, 'block_path'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 39
        return "shared/_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_dashboard_tabs.html.twig"));

        $this->parent = $this->loadTemplate("shared/_tab.html.twig", "dashboard/_dashboard_tabs.html.twig", 39);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 41
        yield "                | Games 
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 43
    public function block_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "path"));

        // line 44
        yield "            ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_games");
        yield "
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
        return "dashboard/_dashboard_tabs.html.twig";
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
        return array (  1095 => 44,  1085 => 43,  1073 => 41,  1063 => 40,  1040 => 39,  918 => 35,  908 => 34,  896 => 32,  886 => 31,  863 => 30,  741 => 26,  731 => 25,  719 => 23,  709 => 22,  686 => 21,  564 => 17,  554 => 16,  542 => 14,  532 => 13,  509 => 12,  387 => 8,  377 => 7,  365 => 5,  355 => 4,  332 => 3,  212 => 56,  209 => 47,  207 => 39,  204 => 38,  202 => 30,  199 => 29,  197 => 21,  194 => 20,  192 => 12,  189 => 11,  186 => 3,  176 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'shared/_tabs.html.twig' %}
    {% block tabs %}
        {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post' } %}
            {% block content %}
                Dashboard 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_users', classes: 'ml-2' } %}
            {% block content %}
                | Users 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_users') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_tournament', classes: 'ml-2' } %}
            {% block content %}
                | Tournaments  
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_tournament') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_registration', classes: 'ml-2' } %}
            {% block content %}
                | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_registration') }}
            {% endblock %}
        {% endembed %}

        {% embed 'shared/_tab.html.twig' with { route: 'app_dashboard_games', classes: 'ml-2' } %}
            {% block content %}
                | Games 
            {% endblock %}
            {% block path %}
            {{ path('app_dashboard_games') }}
            {% endblock %}
        {% endembed %}

        {# {% embed 'shared/_tab.html.twig' with { route: 'app_micro_post_topliked', classes: 'ml-2' } %}
            {% block content %}
                 | Registration 
            {% endblock %}
            {% block path %}
            {{ path('app_micro_post_topliked') }}
            {% endblock %}
        {% endembed %} #}

    {% endblock %}
{% endembed %}", "dashboard/_dashboard_tabs.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/_dashboard_tabs.html.twig");
    }
}
