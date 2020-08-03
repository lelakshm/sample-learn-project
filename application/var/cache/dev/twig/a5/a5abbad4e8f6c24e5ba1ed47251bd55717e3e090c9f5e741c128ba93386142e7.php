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

/* chapters/welcome.html.twig */
class __TwigTemplate_36156668a276f7e2b49c32d841a67afd68524f06ae0477612a4f9bfca5ec0545 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/welcome.html.twig"));

        // line 1
        echo "<h1>Hello, World!</h1>
<hr/>

<p>Python is a very simple language, and has a very straightforward syntax.
    It encourages programmers to program without boilerplate (prepared) code.
    The simplest directive in Python is the \"print\" directive -
    it simply prints out a line (and also includes a newline, unlike in C).</p>
<p>There are two major Python versions, Python 2 and Python 3. Python 2 and 3 are quite different.
    This tutorial uses Python 3, because it more semantically correct and supports newer features.</p>
<p>
    For example, one difference between Python 2 and 3 is the
    <code>print</code>
    statement.
    In Python 2, the \"print\" statement is not a function, and therefore it is
    invoked without parentheses. However, in Python 3, it is a function, and must be invoked
    with parentheses.
</p>
<p>To print a string in Python 3, just write:</p>
<pre>
                        <code>print(\"This line will be printed.\")
                        </code>
                    </pre>
<h3>Indentation</h3>
<p>Python uses indentation for blocks, instead of curly braces. Both tabs and spaces are supported, but the standard
    indentation requires standard Python code to use four spaces. For example:</p>
<pre>
                        <code>x = 1
                        if x == 1:
                            # indented four spaces
                            print(\"x is 1.\")
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Use the \"print\" command to print the line \"Hello, World!\".</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/welcome.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Hello, World!</h1>
<hr/>

<p>Python is a very simple language, and has a very straightforward syntax.
    It encourages programmers to program without boilerplate (prepared) code.
    The simplest directive in Python is the \"print\" directive -
    it simply prints out a line (and also includes a newline, unlike in C).</p>
<p>There are two major Python versions, Python 2 and Python 3. Python 2 and 3 are quite different.
    This tutorial uses Python 3, because it more semantically correct and supports newer features.</p>
<p>
    For example, one difference between Python 2 and 3 is the
    <code>print</code>
    statement.
    In Python 2, the \"print\" statement is not a function, and therefore it is
    invoked without parentheses. However, in Python 3, it is a function, and must be invoked
    with parentheses.
</p>
<p>To print a string in Python 3, just write:</p>
<pre>
                        <code>print(\"This line will be printed.\")
                        </code>
                    </pre>
<h3>Indentation</h3>
<p>Python uses indentation for blocks, instead of curly braces. Both tabs and spaces are supported, but the standard
    indentation requires standard Python code to use four spaces. For example:</p>
<pre>
                        <code>x = 1
                        if x == 1:
                            # indented four spaces
                            print(\"x is 1.\")
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Use the \"print\" command to print the line \"Hello, World!\".</p>", "chapters/welcome.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/welcome.html.twig");
    }
}
