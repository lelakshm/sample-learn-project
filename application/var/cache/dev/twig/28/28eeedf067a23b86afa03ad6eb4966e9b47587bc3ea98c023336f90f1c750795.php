<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* root/index.html.twig */
class __TwigTemplate_987395adb79d457f8bd6f6e66f2b85e94ffffd9f462b5f63873a52561bcd068e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "root/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello RootController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <br><br>
    <h2> Welcome to  ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["course_name"]) || array_key_exists("course_name", $context) ? $context["course_name"] : (function () { throw new RuntimeError('Variable "course_name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " course</h2>

    <br>
    <ol>
        <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "welcome"]);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "variables"]);
        echo "\">Variables & Types</a></li>
        <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "lists"]);
        echo "\">Lists</a></li>
        <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "operators"]);
        echo "\">Basic Operators</a></li>
        <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "string_formatting"]);
        echo "\">String Formatting</a></li>
        <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "string_operations"]);
        echo "\">Basic String Operations</a></li>
        <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "conditions"]);
        echo "\">Conditions</a></li>
        <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "loops"]);
        echo "\">Loops</a></li>
        <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "functions"]);
        echo "\">Functions</a></li>
        <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "classes"]);
        echo "\">Classes</a></li>
        <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "dictionaries"]);
        echo "\">Dictionaries</a></li>
        <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "modules"]);
        echo "\">Modules and Packages</a></li>
        <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("python", ["chapter" => "quiz"]);
        echo "\">Quiz</a></li>
    </ol>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "root/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 29,  133 => 28,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  89 => 17,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello RootController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <br><br>
    <h2> Welcome to  {{ course_name }} course</h2>

    <br>
    <ol>
        <li><a href=\"{{ path('python', {'chapter' : 'welcome'}) }}\">Hello World</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'variables'}) }}\">Variables & Types</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'lists'}) }}\">Lists</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'operators'}) }}\">Basic Operators</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'string_formatting'}) }}\">String Formatting</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'string_operations'}) }}\">Basic String Operations</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'conditions'}) }}\">Conditions</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'loops'}) }}\">Loops</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'functions'}) }}\">Functions</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'classes'}) }}\">Classes</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'dictionaries'}) }}\">Dictionaries</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'modules'}) }}\">Modules and Packages</a></li>
        <li><a href=\"{{ path('python', {'chapter' : 'quiz'}) }}\">Quiz</a></li>
    </ol>

</div>
{% endblock %}
", "root/index.html.twig", "/Applications/MAMP/htdocs/learn/templates/root/index.html.twig");
    }
}
