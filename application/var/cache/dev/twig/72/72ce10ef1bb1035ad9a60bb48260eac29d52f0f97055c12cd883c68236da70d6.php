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

/* chapters/variables.html.twig */
class __TwigTemplate_e8b404e0e2375a432214328cb8aceb89ccfc61657c92dd424f1ddef305f96c56 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/variables.html.twig"));

        // line 1
        echo "<h1>Variables and Types</h1>
<hr/>

<p>Python is completely object oriented, and not \"statically typed\". You do not need to declare variables before using them, or declare their type. Every variable in Python is an object.</p>
<p>This tutorial will go over a few basic types of variables.</p>
<h3>Numbers</h3>
<p>Python supports two types of numbers - integers and floating point numbers. (It also supports complex numbers, which will not be explained in this tutorial).</p>
<p>To define an integer, use the following syntax:</p>
<pre>
                        <code>myint = 7
                        print(myint)
                        </code>
                    </pre>
<p>To define a floating point number, you may use one of the following notations:</p>
<pre>
                        <code>myfloat = 7.0
                        print(myfloat)
                        myfloat = float(7)
                        print(myfloat)
                        </code>
                    </pre>
<h3>Strings</h3>
<p>Strings are defined either with a single quote or a double quotes.</p>
<pre>
                        <code>mystring = 'hello'
                        print(mystring)
                        mystring = \"hello\"
                        print(mystring)
                        </code>
                    </pre>
<p>The difference between the two is that using double quotes makes it easy to include apostrophes (whereas these would terminate the string if using single quotes)</p>
<pre>
                        <code>mystring = \"Don't worry about apostrophes\"
                        print(mystring)
                        </code>
                    </pre>
<p>
    There are additional variations on defining strings that make it easier to include things such as carriage returns, backslashes and Unicode characters. These are beyond the scope of this tutorial, but are covered in the
    <a href=\"https://docs.python.org/tutorial/introduction.html#strings\" title=\"Strings in Python Tutorial\">Python documentation</a>
    .
</p>
<p>Simple operators can be executed on numbers and strings:</p>
<pre>
                        <code>one = 1
                        two = 2
                        three = one + two
                        print(three)

                        hello = \"hello\"
                        world = \"world\"
                        helloworld = hello + \" \" + world
                        print(helloworld)
                        </code>
                    </pre>
<p>Assignments can be done on more than one variable \"simultaneously\" on the same line like this</p>
<pre>
                        <code>a, b = 3, 4
                        print(a,b)
                        </code>
                    </pre>
<p>Mixing operators between numbers and strings is not supported:</p>
<pre>
                        <code># This will not work!
                        one = 1
                        two = 2
                        hello = \"hello\"

                        print(one + two + hello)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>
    The target of this exercise is to create a string, an integer, and a floating point number. The string should be named
    <code>mystring</code>
    and should contain the word \"hello\". The floating point number should be named
    <code>myfloat</code>
    and should contain the number 10.0, and the integer should be named
    <code>myint</code>
    and should contain the number 20.
</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/variables.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Variables and Types</h1>
<hr/>

<p>Python is completely object oriented, and not \"statically typed\". You do not need to declare variables before using them, or declare their type. Every variable in Python is an object.</p>
<p>This tutorial will go over a few basic types of variables.</p>
<h3>Numbers</h3>
<p>Python supports two types of numbers - integers and floating point numbers. (It also supports complex numbers, which will not be explained in this tutorial).</p>
<p>To define an integer, use the following syntax:</p>
<pre>
                        <code>myint = 7
                        print(myint)
                        </code>
                    </pre>
<p>To define a floating point number, you may use one of the following notations:</p>
<pre>
                        <code>myfloat = 7.0
                        print(myfloat)
                        myfloat = float(7)
                        print(myfloat)
                        </code>
                    </pre>
<h3>Strings</h3>
<p>Strings are defined either with a single quote or a double quotes.</p>
<pre>
                        <code>mystring = 'hello'
                        print(mystring)
                        mystring = \"hello\"
                        print(mystring)
                        </code>
                    </pre>
<p>The difference between the two is that using double quotes makes it easy to include apostrophes (whereas these would terminate the string if using single quotes)</p>
<pre>
                        <code>mystring = \"Don't worry about apostrophes\"
                        print(mystring)
                        </code>
                    </pre>
<p>
    There are additional variations on defining strings that make it easier to include things such as carriage returns, backslashes and Unicode characters. These are beyond the scope of this tutorial, but are covered in the
    <a href=\"https://docs.python.org/tutorial/introduction.html#strings\" title=\"Strings in Python Tutorial\">Python documentation</a>
    .
</p>
<p>Simple operators can be executed on numbers and strings:</p>
<pre>
                        <code>one = 1
                        two = 2
                        three = one + two
                        print(three)

                        hello = \"hello\"
                        world = \"world\"
                        helloworld = hello + \" \" + world
                        print(helloworld)
                        </code>
                    </pre>
<p>Assignments can be done on more than one variable \"simultaneously\" on the same line like this</p>
<pre>
                        <code>a, b = 3, 4
                        print(a,b)
                        </code>
                    </pre>
<p>Mixing operators between numbers and strings is not supported:</p>
<pre>
                        <code># This will not work!
                        one = 1
                        two = 2
                        hello = \"hello\"

                        print(one + two + hello)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>
    The target of this exercise is to create a string, an integer, and a floating point number. The string should be named
    <code>mystring</code>
    and should contain the word \"hello\". The floating point number should be named
    <code>myfloat</code>
    and should contain the number 10.0, and the integer should be named
    <code>myint</code>
    and should contain the number 20.
</p>", "chapters/variables.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/variables.html.twig");
    }
}
