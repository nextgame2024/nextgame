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

/* settings_profile/_user_extraInfo_form.html.twig */
class __TwigTemplate_29c105ba91339c59cac68473a97bfcef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_user_extraInfo_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_profile/_user_extraInfo_form.html.twig"));

        // line 1
        yield "<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Name"]);
        yield "
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "
    </div>

    <div>
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "location", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Location"]);
        yield "
        <div class=\"relative\">
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "location", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "block w-full text-white shadow-sm border-gray-300 dark:border-transparent dark:text-white rounded-md border p-2 mt-1 mb-2"]]);
        yield "

            <select name=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "location", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "full_name", [], "any", false, false, false, 12), "html", null, true);
        yield "\" 
                    class=\"absolute inset-0 block w-full shadow-sm bg-white border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-0 mb-2 dark:bg-slate-950\"
                    id=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "location", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "\"
                    style=\"height: calc(1.875rem + 9px);\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "location", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "choices", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 17
            yield "                    <option value=\"0\" ";
            if ( !(isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 17, $this->source); })())) {
                yield "selected";
            }
            yield ">Select an option</option>
                    ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 18) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18))) {
                // line 19
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 19), "html", null, true);
                yield "\" ";
                if ((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 19, $this->source); })())) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 20), "html", null, true);
                yield "
                        </option>
                    ";
            }
            // line 23
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "            </select>
        </div>
    </div>

</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "phone", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Phone"]);
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "phone", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "  
    </div>

    <div>
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Date of birth"]);
        yield "
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 bg-white rounded-md border p-2 mt-1 mb-2"]]);
        yield "
    </div>
</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "rating", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Rating"]);
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "rating", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 bg-white rounded-md border p-2 mt-1 mb-2"]]);
        yield "
    </div>

    <div>
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "division", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "block text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Division"]);
        yield "
        <div class=\"relative\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "division", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        yield "  
            <select name=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "division", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "full_name", [], "any", false, false, false, 52), "html", null, true);
        yield "\" 
                    class=\"absolute inset-0 block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-0 mb-2\"
                    id=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "division", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        yield "\"
                    style=\"height: calc(1.875rem + 9px);\">
                
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "division", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "choices", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 58
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["division"]) || array_key_exists("division", $context) ? $context["division"] : (function () { throw new RuntimeError('Variable "division" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["divisions"]) {
                // line 59
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 59) == CoreExtension::getAttribute($this->env, $this->source, $context["divisions"], "name", [], "any", false, false, false, 59))) {
                    // line 60
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 60), "html", null, true);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 60) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "division", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "value", [], "any", false, false, false, 60))) {
                        yield "selected";
                    }
                    yield ">
                                ";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 61), "html", null, true);
                    yield "
                            </option>
                        ";
                }
                // line 64
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divisions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "            </select>
        </div>
    </div>
</div>
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
        return "settings_profile/_user_extraInfo_form.html.twig";
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
        return array (  217 => 66,  211 => 65,  205 => 64,  199 => 61,  190 => 60,  187 => 59,  182 => 58,  178 => 57,  172 => 54,  167 => 52,  163 => 51,  158 => 49,  151 => 45,  147 => 44,  138 => 38,  134 => 37,  127 => 33,  123 => 32,  113 => 24,  107 => 23,  101 => 20,  92 => 19,  90 => 18,  83 => 17,  79 => 16,  74 => 14,  69 => 12,  64 => 10,  59 => 8,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        {{ form_label(form.name, 'Name', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        {{ form_widget(form.name, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}
    </div>

    <div>
        {{ form_label(form.location, 'Location', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        <div class=\"relative\">
            {{ form_widget(form.location, {'attr': {'class': 'block w-full text-white shadow-sm border-gray-300 dark:border-transparent dark:text-white rounded-md border p-2 mt-1 mb-2'}}) }}

            <select name=\"{{ form.location.vars.full_name }}\" 
                    class=\"absolute inset-0 block w-full shadow-sm bg-white border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-0 mb-2 dark:bg-slate-950\"
                    id=\"{{ form.location.vars.id }}\"
                    style=\"height: calc(1.875rem + 9px);\">
                {% for choice in form.location.vars.choices %}
                    <option value=\"0\" {% if not isEdit %}selected{% endif %}>Select an option</option>
                    {% if choice.label == location.name %}
                        <option value=\"{{ choice.value }}\" {% if isEdit %}selected{% endif %}>
                            {{ choice.label }}
                        </option>
                    {% endif %}
                {% endfor %}
            </select>
        </div>
    </div>

</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        {{ form_label(form.phone, 'Phone', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        {{ form_widget(form.phone, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}  
    </div>

    <div>
        {{ form_label(form.dateOfBirth, 'Date of birth', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        {{ form_widget(form.dateOfBirth, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 bg-white rounded-md border p-2 mt-1 mb-2'}}) }}
    </div>
</div>

<div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div>
        {{ form_label(form.rating, 'Rating', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        {{ form_widget(form.rating, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 bg-white rounded-md border p-2 mt-1 mb-2'}}) }}
    </div>

    <div>
        {{ form_label(form.division, 'Division', {'label_attr': {'class': 'block text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
        <div class=\"relative\">
            {{ form_widget(form.division, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}}) }}  
            <select name=\"{{ form.division.vars.full_name }}\" 
                    class=\"absolute inset-0 block w-full shadow-sm border-gray-300 dark:border-transparent dark:text-gray-800 rounded-md border p-2 mt-0 mb-2\"
                    id=\"{{ form.division.vars.id }}\"
                    style=\"height: calc(1.875rem + 9px);\">
                
                {% for choice in form.division.vars.choices %}
                    {% for divisions in division %}
                        {% if choice.label == divisions.name %}
                            <option value=\"{{ choice.value }}\" {% if choice.value == form.division.vars.value %}selected{% endif %}>
                                {{ choice.label }}
                            </option>
                        {% endif %}
                    {% endfor %}
                {% endfor %}
            </select>
        </div>
    </div>
</div>
", "settings_profile/_user_extraInfo_form.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/settings_profile/_user_extraInfo_form.html.twig");
    }
}
