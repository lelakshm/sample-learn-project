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

/* chapters/operators.html.twig */
class __TwigTemplate_6a1c09614851d06d7d9897311157e7d700af6c6290ce0683f833f48708964a99 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/operators.html.twig"));

        // line 1
        echo "<h1>Basic Operators</h1>
<hr/>

<p>This section explains how to use basic operators in Python.</p>
<h3>Arithmetic Operators</h3>
<p>
    Just as any other programming languages, the addition, subtraction, multiplication, and division operators can be used with numbers.
    <br>
</p>
<pre>
                        <code>number = 1 + 2 * 3 / 4.0
                        print(number)
                        </code>
                    </pre>
<p>Try to predict what the answer will be.  Does python follow order of operations?</p>
<p>Another operator available is the modulo (%) operator, which returns the integer remainder of the division. dividend % divisor = remainder.</p>
<pre>
                        <code>remainder = 11 % 3
                        print(remainder)
                        </code>
                    </pre>
<p>Using two multiplication symbols makes a power relationship.</p>
<pre>
                        <code>squared = 7 ** 2
                        cubed = 2 ** 3
                        print(squared)
                        print(cubed)
                        </code>
                    </pre>
<h3>Using Operators with Strings</h3>
<p>Python supports concatenating strings using the addition operator:</p>
<pre>
                        <code>helloworld = \"hello\" + \" \" + \"world\"
                        print(helloworld)
                        </code>
                    </pre>
<p>Python also supports multiplying strings to form a string with a repeating sequence:</p>
<pre>
                        <code>lotsofhellos = \"hello\" * 10
                        print(lotsofhellos)
                        </code>
                    </pre>
<h3>Using Operators with Lists</h3>
<p>Lists can be joined with the addition operators:</p>
<pre>
                        <code>even_numbers = [2,4,6,8]
                        odd_numbers = [1,3,5,7]
                        all_numbers = odd_numbers + even_numbers
                        print(all_numbers)
                        </code>
                    </pre>
<p>Just as in strings, Python supports forming new lists with a repeating sequence using the multiplication operator:</p>
<pre>
                        <code>print([1,2,3] * 3)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>
    The target of this exercise is to create two lists called
    <code>x_list</code>
    and
    <code>y_list</code>
    ,
    which contain 10 instances of the variables
    <code>x</code>
    and
    <code>y</code>
    , respectively.
    You are also required to create a list called
    <code>big_list</code>
    , which contains
    the variables
    <code>x</code>
    and
    <code>y</code>
    , 10 times each, by concatenating the two lists you have created.
</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/operators.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Basic Operators</h1>
<hr/>

<p>This section explains how to use basic operators in Python.</p>
<h3>Arithmetic Operators</h3>
<p>
    Just as any other programming languages, the addition, subtraction, multiplication, and division operators can be used with numbers.
    <br>
</p>
<pre>
                        <code>number = 1 + 2 * 3 / 4.0
                        print(number)
                        </code>
                    </pre>
<p>Try to predict what the answer will be.  Does python follow order of operations?</p>
<p>Another operator available is the modulo (%) operator, which returns the integer remainder of the division. dividend % divisor = remainder.</p>
<pre>
                        <code>remainder = 11 % 3
                        print(remainder)
                        </code>
                    </pre>
<p>Using two multiplication symbols makes a power relationship.</p>
<pre>
                        <code>squared = 7 ** 2
                        cubed = 2 ** 3
                        print(squared)
                        print(cubed)
                        </code>
                    </pre>
<h3>Using Operators with Strings</h3>
<p>Python supports concatenating strings using the addition operator:</p>
<pre>
                        <code>helloworld = \"hello\" + \" \" + \"world\"
                        print(helloworld)
                        </code>
                    </pre>
<p>Python also supports multiplying strings to form a string with a repeating sequence:</p>
<pre>
                        <code>lotsofhellos = \"hello\" * 10
                        print(lotsofhellos)
                        </code>
                    </pre>
<h3>Using Operators with Lists</h3>
<p>Lists can be joined with the addition operators:</p>
<pre>
                        <code>even_numbers = [2,4,6,8]
                        odd_numbers = [1,3,5,7]
                        all_numbers = odd_numbers + even_numbers
                        print(all_numbers)
                        </code>
                    </pre>
<p>Just as in strings, Python supports forming new lists with a repeating sequence using the multiplication operator:</p>
<pre>
                        <code>print([1,2,3] * 3)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>
    The target of this exercise is to create two lists called
    <code>x_list</code>
    and
    <code>y_list</code>
    ,
    which contain 10 instances of the variables
    <code>x</code>
    and
    <code>y</code>
    , respectively.
    You are also required to create a list called
    <code>big_list</code>
    , which contains
    the variables
    <code>x</code>
    and
    <code>y</code>
    , 10 times each, by concatenating the two lists you have created.
</p>", "chapters/operators.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/operators.html.twig");
    }
}
