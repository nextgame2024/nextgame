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

/* dashboard/user.html.twig */
class __TwigTemplate_14d6164418ad2c809b6ed11f876e2147 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/user.html.twig", 1);
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

        yield "Users → Users";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users");
        yield "\">Users</a> → User
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
            yield "        <div class=\"rounded-md p-2 border-red-300 bg-red-50 border dark:border-red-600 dark:bg-red-700 dark:text-white mb-4\" role=\"alert\">";
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
            Basic Information
        </div>
        <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
            Enter your credentials
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
            <div>
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Username (Email)"]);
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        yield "
            </div>
            <div>
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "active", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Active"]);
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "active", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "active", [], "any", false, false, false, 36), 'errors');
        yield "
            </div>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mb-3\">
            <div>
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Password"]);
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), "first", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                ";
        // line 44
        if ((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "                    <small>* If you want to change the password, enter a new one. Leave it blank to keep the current password.</small> 
                ";
        }
        // line 47
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), "first", [], "any", false, false, false, 47), 'errors');
        yield "
            </div>
            <div>
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), "second", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Repeated password"]);
        yield "
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "plainPassword", [], "any", false, false, false, 51), "second", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "plainPassword", [], "any", false, false, false, 52), "second", [], "any", false, false, false, 52), 'errors');
        yield "
            </div>
        </div>

        ";
        // line 60
        yield "
        <div class=\"border-b border-gray-300\"></div>

        <div class=\"text-xl mt-4\">
            Your Profile
        </div>
        <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
            Enter more (optional) details about yourself.
        </div>

        ";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/settings_profile/_user_extraInfo_form.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "userProfile", [], "any", false, false, false, 70), "location" => (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 70, $this->source); })()), "division" => (isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 70, $this->source); })()), "isEdit" => (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 70, $this->source); })())]);
        yield "

        <div>
            <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                ";
        // line 74
        yield (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 74, $this->source); })())) ? ("Update") : ("Create"));
        yield "
            </button>
        </div>
    ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
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
        return "dashboard/user.html.twig";
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
        return array (  246 => 77,  240 => 74,  233 => 70,  221 => 60,  214 => 52,  210 => 51,  206 => 50,  199 => 47,  195 => 45,  193 => 44,  189 => 43,  185 => 42,  176 => 36,  172 => 35,  168 => 34,  162 => 31,  158 => 30,  154 => 29,  141 => 19,  136 => 17,  133 => 16,  124 => 14,  120 => 13,  115 => 10,  105 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Users → Users{% endblock %}

{% block bread %}
→ <a href=\"{{ path('app_dashboard_users') }}\">Users</a> → User
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
            Basic Information
        </div>
        <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
            Enter your credentials
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
            <div>
                {{ form_label(form.email, 'Username (Email)', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(form.email, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {{ form_errors(form.email) }}
            </div>
            <div>
                {{ form_label(form.active, 'Active', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(form.active, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {{ form_errors(form.active) }}
            </div>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 mb-3\">
            <div>
                {{ form_label(form.plainPassword.first, 'Password', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(form.plainPassword.first, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {% if isEdit %}
                    <small>* If you want to change the password, enter a new one. Leave it blank to keep the current password.</small> 
                {% endif %}
                {{ form_errors(form.plainPassword.first) }}
            </div>
            <div>
                {{ form_label(form.plainPassword.second, 'Repeated password', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(form.plainPassword.second, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {{ form_errors(form.plainPassword.second) }}
            </div>
        </div>

        {# <div class=\"flex items-center mt-4 mb-4\">
            {{ form_widget(form.agreeTerms, {'attr': { 'class': 'h-4 w-4 rounded border-gray border text-indigo-300 mr-2' }}) }}
            {{ form_label(form.agreeTerms, 'Agree to terms', {'label_attr': {'class':'text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        </div> #}

        <div class=\"border-b border-gray-300\"></div>

        <div class=\"text-xl mt-4\">
            Your Profile
        </div>
        <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
            Enter more (optional) details about yourself.
        </div>

        {{ include('/settings_profile/_user_extraInfo_form.html.twig', {form: form.userProfile, location: location, division: division, isEdit: isEdit}) }}

        <div>
            <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                {{ isEdit ? 'Update' : 'Create' }}
            </button>
        </div>
    {{ form_end(form) }}
    </div>
    </div>
    </div>
{% endblock %}", "dashboard/user.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/dashboard/user.html.twig");
    }
}
