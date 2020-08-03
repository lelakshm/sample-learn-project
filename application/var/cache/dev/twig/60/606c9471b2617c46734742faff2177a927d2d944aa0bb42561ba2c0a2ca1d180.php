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

/* chapters/functions.html.twig */
class __TwigTemplate_8d0022f64c5048c9c8b5813deb0fd1d6d650f1a428112de4f03aa4c3f19c009a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/functions.html.twig"));

        // line 1
        echo "<h1>Functions</h1>
<hr/>

<h3>What are Functions?</h3>
<p>Functions are a convenient way to divide your code into useful blocks, allowing us to order our code, make it more readable, reuse it and save some time. Also functions are a key way to define interfaces so programmers can share their code.</p>
<h3>How do you write functions in Python?</h3>
<p>As we have seen on previous tutorials, Python makes use of blocks.</p>
<p>A block is a area of code of written in the format of:</p>
<pre>
                        <code>block_head:
                            1st block line
                            2nd block line
                            ...
                        </code>
                    </pre>
<p>Where a block line is more Python code (even another block), and the block head is of the following format:
    block_keyword block_name(argument1,argument2, ...)
    Block keywords you already know are \"if\", \"for\", and \"while\".</p>
<p>Functions in python are defined using the block keyword \"def\", followed with the function's name as the block's name.
    For example:</p>
<pre>
                        <code>def my_function():
                            print(\"Hello From My Function!\")
                        </code>
                    </pre>
<p>Functions may also receive arguments (variables passed from the caller to the function).
    For example:</p>
<pre>
                        <code>def my_function_with_args(username, greeting):
                            print(\"Hello, %s , From My Function!, I wish you %s\"%(username, greeting))
                        </code>
                    </pre>
<p>Functions may return a value to the caller, using the keyword- 'return' .
    For example:</p>
<pre>
                        <code>def sum_two_numbers(a, b):
                            return a + b
                        </code>
                    </pre>
<h3>How do you call functions in Python?</h3>
<p>Simply write the function's name followed by (), placing any required arguments within the brackets.
    For example, lets call the functions written above (in the previous example):</p>
<pre>
                        <code># Define our 3 functions
                        def my_function():
                            print(\"Hello From My Function!\")

                        def my_function_with_args(username, greeting):
                            print(\"Hello, %s , From My Function!, I wish you %s\"%(username, greeting))

                        def sum_two_numbers(a, b):
                            return a + b

                        # print(a simple greeting)
                        my_function()

                        #prints - \"Hello, John Doe, From My Function!, I wish you a great year!\"
                        my_function_with_args(\"John Doe\", \"a great year!\")

                        # after this line x will hold the value 3!
                        x = sum_two_numbers(1,2)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>In this exercise you'll use an existing function, and while adding your own to create a fully functional program.</p>
<ol>
    <li>
        <p>
            Add a function named
            <code>list_benefits()</code>
            that returns the following list of strings: \"More organized code\", \"More readable code\", \"Easier code reuse\", \"Allowing programmers to share and connect code together\"
        </p>
    </li>
    <li>
        <p>
            Add a function named
            <code>build_sentence(info)</code>
            which receives a single argument containing a string and returns a sentence starting with the given string and ending with the string \" is a benefit of functions!\"
        </p>
    </li>
    <li>
        <p>Run and see all the functions work together!</p>
    </li>
</ol>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/functions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Functions</h1>
<hr/>

<h3>What are Functions?</h3>
<p>Functions are a convenient way to divide your code into useful blocks, allowing us to order our code, make it more readable, reuse it and save some time. Also functions are a key way to define interfaces so programmers can share their code.</p>
<h3>How do you write functions in Python?</h3>
<p>As we have seen on previous tutorials, Python makes use of blocks.</p>
<p>A block is a area of code of written in the format of:</p>
<pre>
                        <code>block_head:
                            1st block line
                            2nd block line
                            ...
                        </code>
                    </pre>
<p>Where a block line is more Python code (even another block), and the block head is of the following format:
    block_keyword block_name(argument1,argument2, ...)
    Block keywords you already know are \"if\", \"for\", and \"while\".</p>
<p>Functions in python are defined using the block keyword \"def\", followed with the function's name as the block's name.
    For example:</p>
<pre>
                        <code>def my_function():
                            print(\"Hello From My Function!\")
                        </code>
                    </pre>
<p>Functions may also receive arguments (variables passed from the caller to the function).
    For example:</p>
<pre>
                        <code>def my_function_with_args(username, greeting):
                            print(\"Hello, %s , From My Function!, I wish you %s\"%(username, greeting))
                        </code>
                    </pre>
<p>Functions may return a value to the caller, using the keyword- 'return' .
    For example:</p>
<pre>
                        <code>def sum_two_numbers(a, b):
                            return a + b
                        </code>
                    </pre>
<h3>How do you call functions in Python?</h3>
<p>Simply write the function's name followed by (), placing any required arguments within the brackets.
    For example, lets call the functions written above (in the previous example):</p>
<pre>
                        <code># Define our 3 functions
                        def my_function():
                            print(\"Hello From My Function!\")

                        def my_function_with_args(username, greeting):
                            print(\"Hello, %s , From My Function!, I wish you %s\"%(username, greeting))

                        def sum_two_numbers(a, b):
                            return a + b

                        # print(a simple greeting)
                        my_function()

                        #prints - \"Hello, John Doe, From My Function!, I wish you a great year!\"
                        my_function_with_args(\"John Doe\", \"a great year!\")

                        # after this line x will hold the value 3!
                        x = sum_two_numbers(1,2)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>In this exercise you'll use an existing function, and while adding your own to create a fully functional program.</p>
<ol>
    <li>
        <p>
            Add a function named
            <code>list_benefits()</code>
            that returns the following list of strings: \"More organized code\", \"More readable code\", \"Easier code reuse\", \"Allowing programmers to share and connect code together\"
        </p>
    </li>
    <li>
        <p>
            Add a function named
            <code>build_sentence(info)</code>
            which receives a single argument containing a string and returns a sentence starting with the given string and ending with the string \" is a benefit of functions!\"
        </p>
    </li>
    <li>
        <p>Run and see all the functions work together!</p>
    </li>
</ol>", "chapters/functions.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/functions.html.twig");
    }
}
