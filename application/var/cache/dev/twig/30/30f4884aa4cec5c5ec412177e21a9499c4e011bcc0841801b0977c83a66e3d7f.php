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

/* chapters/conditions.html.twig */
class __TwigTemplate_39e3a5caf7f7e5f3fcddcf0a8d08919f00a620f016859df03b8fcb521d3e011a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/conditions.html.twig"));

        // line 1
        echo "<h1>Conditions</h1>
<hr/>

<p>Python uses boolean variables to evaluate conditions. The boolean values True and False are returned when an expression is compared or evaluated. For example:</p>
<pre>
                        <code>x = 2
                        print(x == 2) # prints out True
                        print(x == 3) # prints out False
                        print(x &lt; 3) # prints out True
                        </code>
                    </pre>
<p>Notice that variable assignment is done using a single equals operator \"=\", whereas comparison between two variables is done using the double equals operator \"==\". The \"not equals\" operator is marked as \"!=\".</p>
<h3>Boolean operators</h3>
<p>The \"and\" and \"or\" boolean operators allow building complex boolean expressions, for example:</p>
<pre>
                        <code>name = \"John\"
                        age = 23
                        if name == \"John\" and age == 23:
                            print(\"Your name is John, and you are also 23 years old.\")

                        if name == \"John\" or name == \"Rick\":
                            print(\"Your name is either John or Rick.\")
                        </code>
                    </pre>
<h3>The \"in\" operator</h3>
<p>The \"in\" operator could be used to check if a specified object exists within an iterable object container, such as a list:</p>
<pre>
                        <code>name = \"John\"
                        if name in [\"John\", \"Rick\"]:
                            print(\"Your name is either John or Rick.\")
                        </code>
                    </pre>
<p>Python uses indentation to define code blocks, instead of brackets. The standard Python indentation is 4 spaces, although tabs and any other space size will work, as long as it is consistent. Notice that code blocks do not need any termination.</p>
<p>Here is an example for using Python's \"if\" statement using code blocks:</p>
<pre>
                        <code>statement = False
                        another_statement = True
                        if statement is True:
                            # do something
                            pass
                        elif another_statement is True: # else if
                            # do something else
                            pass
                        else:
                            # do another thing
                            pass
                        </code>
                    </pre>
<p>For example:</p>
<pre>
                        <code>x = 2
                        if x == 2:
                            print(\"x equals two!\")
                        else:
                            print(\"x does not equal to two.\")
                        </code>
                    </pre>
<p>A statement is evaulated as true if one of the following is correct:
    1. The \"True\" boolean variable is given, or calculated using an expression, such as an arithmetic comparison.
    2. An object which is not considered \"empty\" is passed.</p>
<p>Here are some examples for objects which are considered as empty:
    1. An empty string: \"\"
    2. An empty list: []
    3. The number zero: 0
    4. The false boolean variable: False</p>
<h3>The 'is' operator</h3>
<p>Unlike the double equals operator \"==\", the \"is\" operator does not match the values of the variables, but the instances themselves. For example:</p>
<pre>
                        <code>x = [1,2,3]
                        y = [1,2,3]
                        print(x == y) # Prints out True
                        print(x is y) # Prints out False
                        </code>
                    </pre>
<h3>The \"not\" operator</h3>
<p>Using \"not\" before a boolean expression inverts it:</p>
<pre>
                        <code>print(not False) # Prints out True
                        print((not False) == (False)) # Prints out False
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Change the variables in the first section, so that each if statement resolves as True.</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/conditions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Conditions</h1>
<hr/>

<p>Python uses boolean variables to evaluate conditions. The boolean values True and False are returned when an expression is compared or evaluated. For example:</p>
<pre>
                        <code>x = 2
                        print(x == 2) # prints out True
                        print(x == 3) # prints out False
                        print(x &lt; 3) # prints out True
                        </code>
                    </pre>
<p>Notice that variable assignment is done using a single equals operator \"=\", whereas comparison between two variables is done using the double equals operator \"==\". The \"not equals\" operator is marked as \"!=\".</p>
<h3>Boolean operators</h3>
<p>The \"and\" and \"or\" boolean operators allow building complex boolean expressions, for example:</p>
<pre>
                        <code>name = \"John\"
                        age = 23
                        if name == \"John\" and age == 23:
                            print(\"Your name is John, and you are also 23 years old.\")

                        if name == \"John\" or name == \"Rick\":
                            print(\"Your name is either John or Rick.\")
                        </code>
                    </pre>
<h3>The \"in\" operator</h3>
<p>The \"in\" operator could be used to check if a specified object exists within an iterable object container, such as a list:</p>
<pre>
                        <code>name = \"John\"
                        if name in [\"John\", \"Rick\"]:
                            print(\"Your name is either John or Rick.\")
                        </code>
                    </pre>
<p>Python uses indentation to define code blocks, instead of brackets. The standard Python indentation is 4 spaces, although tabs and any other space size will work, as long as it is consistent. Notice that code blocks do not need any termination.</p>
<p>Here is an example for using Python's \"if\" statement using code blocks:</p>
<pre>
                        <code>statement = False
                        another_statement = True
                        if statement is True:
                            # do something
                            pass
                        elif another_statement is True: # else if
                            # do something else
                            pass
                        else:
                            # do another thing
                            pass
                        </code>
                    </pre>
<p>For example:</p>
<pre>
                        <code>x = 2
                        if x == 2:
                            print(\"x equals two!\")
                        else:
                            print(\"x does not equal to two.\")
                        </code>
                    </pre>
<p>A statement is evaulated as true if one of the following is correct:
    1. The \"True\" boolean variable is given, or calculated using an expression, such as an arithmetic comparison.
    2. An object which is not considered \"empty\" is passed.</p>
<p>Here are some examples for objects which are considered as empty:
    1. An empty string: \"\"
    2. An empty list: []
    3. The number zero: 0
    4. The false boolean variable: False</p>
<h3>The 'is' operator</h3>
<p>Unlike the double equals operator \"==\", the \"is\" operator does not match the values of the variables, but the instances themselves. For example:</p>
<pre>
                        <code>x = [1,2,3]
                        y = [1,2,3]
                        print(x == y) # Prints out True
                        print(x is y) # Prints out False
                        </code>
                    </pre>
<h3>The \"not\" operator</h3>
<p>Using \"not\" before a boolean expression inverts it:</p>
<pre>
                        <code>print(not False) # Prints out True
                        print((not False) == (False)) # Prints out False
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Change the variables in the first section, so that each if statement resolves as True.</p>", "chapters/conditions.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/conditions.html.twig");
    }
}
