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

/* micro_post/_post.html.twig */
class __TwigTemplate_55af050309dc346df28262e25f3e15d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post.html.twig"));

        // line 1
        yield "<div class=\"mb-4\">
    <div class=\"text-2xl\">
        <a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_show", ["post" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\">
            ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        yield "
        </a>
    </div>
    <div class=\"text-xl dark:text-gray-400\">
        ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8), "html", null, true);
        yield "
    </div>
    <div class=\"text-gray-500 dark:text-gray-400\">
        ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "created", [], "any", false, false, false, 11), "M j,Y"), "html", null, true);
        yield "
    </div>
    ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "likedBy", [], "any", false, false, false, 13), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)], "method", false, false, false, 13)) {
            // line 14
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unlike", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            yield "\">
      Unlike <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "likedBy", [], "any", false, false, false, 15), "count", [], "any", false, false, false, 15), "html", null, true);
            yield "</span>
    </a>
    ";
        } else {
            // line 18
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\">
      Like <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()), "likedBy", [], "any", false, false, false, 19), "count", [], "any", false, false, false, 19), "html", null, true);
            yield "</span>
    </a>
    ";
        }
        // line 22
        yield "    <div class=\"text-sm text-gray-500 dark:text-gray-400\">
        <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "author", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "author", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>
    </div>
    <div class=\"flex flex-col\">
        <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_edit", ["post" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"mr-2\">Edit</a>
        <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_comment", ["post" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\">Comment <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "comments", [], "any", false, false, false, 27), "count", [], "any", false, false, false, 27), "html", null, true);
        yield "</a>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "micro_post/_post.html.twig";
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
        return array (  109 => 27,  105 => 26,  97 => 23,  94 => 22,  88 => 19,  83 => 18,  77 => 15,  72 => 14,  70 => 13,  65 => 11,  59 => 8,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mb-4\">
    <div class=\"text-2xl\">
        <a href=\"{{ path('app_micro_post_show', {post: post.id}) }}\">
            {{ post.title }}
        </a>
    </div>
    <div class=\"text-xl dark:text-gray-400\">
        {{ post.text }}
    </div>
    <div class=\"text-gray-500 dark:text-gray-400\">
        {{ post.created | date(\"M j,Y\")}}
    </div>
    {% if post.likedBy.contains(app.user) %}
    <a href=\"{{ path('app_unlike', { id: post.id }) }}\">
      Unlike <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{ post.likedBy.count }}</span>
    </a>
    {% else %}
    <a href=\"{{ path('app_like', { id: post.id }) }}\">
      Like <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{ post.likedBy.count }}</span>
    </a>
    {% endif %}
    <div class=\"text-sm text-gray-500 dark:text-gray-400\">
        <a href=\"{{ path('app_profile', { id: post.author.id }) }}\">{{ post.author.email }}</a>
    </div>
    <div class=\"flex flex-col\">
        <a href=\"{{ path('app_micro_post_edit', {post: post.id}) }}\" class=\"mr-2\">Edit</a>
        <a href=\"{{ path('app_micro_post_comment', {post: post.id}) }}\">Comment <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{ post.comments.count }}</a>
    </div>
</div>", "micro_post/_post.html.twig", "/Users/josecorredor/jose/Symfony/social-media/templates/micro_post/_post.html.twig");
    }
}
