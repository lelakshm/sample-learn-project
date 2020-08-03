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

/* chapters/quiz.html.twig */
class __TwigTemplate_0b95386cd2f3c3b0795f3ec5b7d436b8920f644c9080debf0e4ee9c9a981c54b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/quiz.html.twig"));

        // line 1
        echo "<div>
    <p>This Quiz is for beginners who are new to Python Programming. This quiz provides Multiple Choice Questions to get familiar with Python. The quiz focuses on testing your basic skills on Python essential functions, string, operators, functions, set, and lists questions.</p>
    <p>
        Refer to 
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("root");
        echo "\">Python basics tutorials</a>
        to solve this Quiz. The quiz contains
        <strong>3 Questions</strong>
        . Solve
        <strong>2</strong>
        correct to pass the test.
    </p>


    <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("result");
        echo "\" method=\"post\">

        <div>
        1. What is the output of '33 == 33.0'? <br> <br>
        <input type=\"radio\" id=\"q1false\" name=\"q1\" value=\"False\">
        <label for=\"q1false\">False</label><br>
        <input type=\"radio\" id=\"q1true\" name=\"q1\" value=\"True\">
        <label for=\"q1true\">True</label><br>
        <input type=\"radio\" id=\"q133\" name=\"q1\" value=\"33\">
        <label for=\"q133\">33</label> <br>
        <input type=\"radio\" id=\"q1other\" name=\"q1\" value=\"None\">
        <label for=\"q1other\">None of the above</label> <br>
        <br>

        2. What is the output of the following code? <br> <br>
        var1 = 1 <br>
        var2 = 2 <br>
        var3 = \"3\" <br>
        print(var1 + var2 + var3) <br><br>

        <input type=\"radio\" id=\"q26\" name=\"q2\" value=\"6\">
        <label for=\"q26\">6</label><br>
        <input type=\"radio\" id=\"q23\" name=\"q2\" value=\"3\">
        <label for=\"q23\">3</label><br>
        <input type=\"radio\" id=\"q233\" name=\"q2\" value=\"33\">
        <label for=\"q233\">33</label> <br>
        <input type=\"radio\" id=\"q2error\" name=\"q2\" value=\"Error\">
        <label for=\"q2error\">Error. Mixing operators between numbers and strings are not supported</label> <br><br>

         5. A string is immutable in Python? <br><br>

         Every time when we modify the string, Python Always create a new String and assign a new string to that variable. <br>
         <input type=\"radio\" id=\"q3True\" name=\"q3\" value=\"True\">
         <label for=\"q3True\">True</label><br>
         <input type=\"radio\" id=\"q3False\" name=\"q3\" value=\"False\">
         <label for=\"q3False\">False</label><br>

        <button type=\"submit\">Submit</button> <br>
        </div>
    </form>

</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <p>This Quiz is for beginners who are new to Python Programming. This quiz provides Multiple Choice Questions to get familiar with Python. The quiz focuses on testing your basic skills on Python essential functions, string, operators, functions, set, and lists questions.</p>
    <p>
        Refer to 
        <a href=\"{{ path('root') }}\">Python basics tutorials</a>
        to solve this Quiz. The quiz contains
        <strong>3 Questions</strong>
        . Solve
        <strong>2</strong>
        correct to pass the test.
    </p>


    <form action=\"{{ path('result') }}\" method=\"post\">

        <div>
        1. What is the output of '33 == 33.0'? <br> <br>
        <input type=\"radio\" id=\"q1false\" name=\"q1\" value=\"False\">
        <label for=\"q1false\">False</label><br>
        <input type=\"radio\" id=\"q1true\" name=\"q1\" value=\"True\">
        <label for=\"q1true\">True</label><br>
        <input type=\"radio\" id=\"q133\" name=\"q1\" value=\"33\">
        <label for=\"q133\">33</label> <br>
        <input type=\"radio\" id=\"q1other\" name=\"q1\" value=\"None\">
        <label for=\"q1other\">None of the above</label> <br>
        <br>

        2. What is the output of the following code? <br> <br>
        var1 = 1 <br>
        var2 = 2 <br>
        var3 = \"3\" <br>
        print(var1 + var2 + var3) <br><br>

        <input type=\"radio\" id=\"q26\" name=\"q2\" value=\"6\">
        <label for=\"q26\">6</label><br>
        <input type=\"radio\" id=\"q23\" name=\"q2\" value=\"3\">
        <label for=\"q23\">3</label><br>
        <input type=\"radio\" id=\"q233\" name=\"q2\" value=\"33\">
        <label for=\"q233\">33</label> <br>
        <input type=\"radio\" id=\"q2error\" name=\"q2\" value=\"Error\">
        <label for=\"q2error\">Error. Mixing operators between numbers and strings are not supported</label> <br><br>

         5. A string is immutable in Python? <br><br>

         Every time when we modify the string, Python Always create a new String and assign a new string to that variable. <br>
         <input type=\"radio\" id=\"q3True\" name=\"q3\" value=\"True\">
         <label for=\"q3True\">True</label><br>
         <input type=\"radio\" id=\"q3False\" name=\"q3\" value=\"False\">
         <label for=\"q3False\">False</label><br>

        <button type=\"submit\">Submit</button> <br>
        </div>
    </form>

</div>", "chapters/quiz.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/quiz.html.twig");
    }
}
