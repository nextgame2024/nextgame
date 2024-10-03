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

/* registration/register.html.twig */
class __TwigTemplate_7d8cd5209f065c28c7964b0255f38666 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        yield "→ Register
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'errors');
        yield "
    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
        <div class=\"text-xl\">
            Basic Information
        </div>
        <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
            Enter your credentials
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
            <div>
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Username (Email)"]);
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'errors');
        yield "
            </div>
            <div>
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "plainPassword", [], "any", false, false, false, 33), "first", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Password"]);
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "plainPassword", [], "any", false, false, false, 34), "first", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), "first", [], "any", false, false, false, 35), 'errors');
        yield "
            </div>
            <div>
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), "second", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Repeated password"]);
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), "second", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), "second", [], "any", false, false, false, 40), 'errors');
        yield "
            </div>
            ";
        // line 47
        yield "        </div>

        ";
        // line 53
        yield "
        <div class=\"border-b border-gray-300 mt-5\"></div>

        <div class=\"text-xl mt-5\">
            Your Profile
        </div>
        <div class=\"text-gray-500 mb-5 pb-4 border-b border-gray-300\">
            Enter more (optional) details about yourself.
        </div>

        ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/settings_profile/_profile_form.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "userProfile", [], "any", false, false, false, 63)]);
        yield "

        <div class=\"flex justify-center mt-5\">
            <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                Register
            </button>
        </div>

    ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), 'form_end');
        yield "
    <div class=\"mt-2 text-center text-gray-600 dark:text-gray-400\">
        Already have an account? <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login here</a>
    </div>
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
        return "registration/register.html.twig";
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
        return array (  224 => 73,  219 => 71,  208 => 63,  196 => 53,  192 => 47,  187 => 40,  183 => 39,  179 => 38,  173 => 35,  169 => 34,  165 => 33,  159 => 30,  155 => 29,  151 => 28,  138 => 18,  134 => 17,  131 => 16,  122 => 14,  118 => 13,  113 => 10,  103 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block bread %}
→ Register
{% endblock %}

{% block body %}
    <div class=\"flex items-center justify-center mt-7 bg-gray-50 dark:bg-gray-900\">
    <div class=\"w-full mx-auto\">
    <div class=\"bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md\">
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"rounded-md p-2 border-red-300 bg-red-50 border dark:border-red-600 dark:bg-red-700 dark:text-white mb-4\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    {{ form_errors(registrationForm) }}
    {{ form_start(registrationForm) }}
        <div class=\"text-xl\">
            Basic Information
        </div>
        <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
            Enter your credentials
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
            <div>
                {{ form_label(registrationForm.email, 'Username (Email)', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {{ form_errors(registrationForm.email) }}
            </div>
            <div>
                {{ form_label(registrationForm.plainPassword.first, 'Password', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {{ form_errors(registrationForm.plainPassword.first) }}
            </div>
            <div>
                {{ form_label(registrationForm.plainPassword.second, 'Repeated password', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {{ form_errors(registrationForm.plainPassword.second) }}
            </div>
            {# <div>
                {{ form_label(registrationForm.active, 'Active', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
                {{ form_widget(registrationForm.active, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
                {{ form_errors(registrationForm.active) }}
            </div> #}
        </div>

        {# <div class=\"flex items-center mt-4 mb-4\">
            {{ form_widget(registrationForm.agreeTerms, {'attr': { 'class': 'h-4 w-4 rounded border-gray border text-indigo-300 mr-2' }}) }}
            {{ form_label(registrationForm.agreeTerms, 'Agree to terms', {'label_attr': {'class':'text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        </div> #}

        <div class=\"border-b border-gray-300 mt-5\"></div>

        <div class=\"text-xl mt-5\">
            Your Profile
        </div>
        <div class=\"text-gray-500 mb-5 pb-4 border-b border-gray-300\">
            Enter more (optional) details about yourself.
        </div>

        {{ include('/settings_profile/_profile_form.html.twig', {form: registrationForm.userProfile}) }}

        <div class=\"flex justify-center mt-5\">
            <button type=\"submit\" class=\"block w-full shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">
                Register
            </button>
        </div>

    {{ form_end(registrationForm) }}
    <div class=\"mt-2 text-center text-gray-600 dark:text-gray-400\">
        Already have an account? <a href=\"{{ path('app_login') }}\">Login here</a>
    </div>
    </div>
            </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/registration/register.html.twig");
    }
}
