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

/* chapters/classes.html.twig */
class __TwigTemplate_1df02bf8d55fc726eb8c026fd76422015bcfaffa8260b390492a586021c31cfc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/classes.html.twig"));

        // line 1
        echo "<h1>Classes and Objects</h1>
<hr/>

<p>Objects are an encapsulation of variables and functions into a single entity. Objects get their variables and functions from classes. Classes are essentially a template to create your objects.</p>
<p>A very basic class would look something like this:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")
                        </code>
                    </pre>
<p>We'll explain why you have to include that \"self\" as a parameter a little bit later.  First, to assign the above class(template) to an object you would do the following:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()
                        </code>
                    </pre>
<p>Now the variable \"myobjectx\" holds an object of the class \"MyClass\" that contains the variable and the function defined within the class called \"MyClass\".</p>
<h3>Accessing Object Variables</h3>
<p>To access the variable inside of the newly created object \"myobjectx\" you would do the following:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()

                        myobjectx.variable
                        </code>
                    </pre>
<p>So for instance the below would output the string \"blah\":</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()

                        print(myobjectx.variable)
                        </code>
                    </pre>
<p>You can create multiple different objects that are of the same class(have the same variables and functions defined).  However, each object contains independent copies of the variables defined in the class.  For instance, if we were to define another object with the \"MyClass\" class and then change the string in the variable above:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()
                        myobjecty = MyClass()

                        myobjecty.variable = \"yackity\"

                        # Then print out both values
                        print(myobjectx.variable)
                        print(myobjecty.variable)
                        </code>
                    </pre>
<h3>Accessing Object Functions</h3>
<p>To access a function inside of an object you use notation similar to accessing a variable:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()

                        myobjectx.function()
                        </code>
                    </pre>
<p>The above would print out the message, \"This is a message inside the class.\"</p>
<h2>Exercise</h2>
<p>We have a class defined for vehicles. Create two new vehicles called car1 and car2.
    Set car1 to be a red convertible worth \$60,000.00 with a name of Fer,
    and car2 to be a blue van named Jump worth \$10,000.00.</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/classes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Classes and Objects</h1>
<hr/>

<p>Objects are an encapsulation of variables and functions into a single entity. Objects get their variables and functions from classes. Classes are essentially a template to create your objects.</p>
<p>A very basic class would look something like this:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")
                        </code>
                    </pre>
<p>We'll explain why you have to include that \"self\" as a parameter a little bit later.  First, to assign the above class(template) to an object you would do the following:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()
                        </code>
                    </pre>
<p>Now the variable \"myobjectx\" holds an object of the class \"MyClass\" that contains the variable and the function defined within the class called \"MyClass\".</p>
<h3>Accessing Object Variables</h3>
<p>To access the variable inside of the newly created object \"myobjectx\" you would do the following:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()

                        myobjectx.variable
                        </code>
                    </pre>
<p>So for instance the below would output the string \"blah\":</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()

                        print(myobjectx.variable)
                        </code>
                    </pre>
<p>You can create multiple different objects that are of the same class(have the same variables and functions defined).  However, each object contains independent copies of the variables defined in the class.  For instance, if we were to define another object with the \"MyClass\" class and then change the string in the variable above:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()
                        myobjecty = MyClass()

                        myobjecty.variable = \"yackity\"

                        # Then print out both values
                        print(myobjectx.variable)
                        print(myobjecty.variable)
                        </code>
                    </pre>
<h3>Accessing Object Functions</h3>
<p>To access a function inside of an object you use notation similar to accessing a variable:</p>
<pre>
                        <code>class MyClass:
                            variable = \"blah\"

                            def function(self):
                                print(\"This is a message inside the class.\")

                        myobjectx = MyClass()

                        myobjectx.function()
                        </code>
                    </pre>
<p>The above would print out the message, \"This is a message inside the class.\"</p>
<h2>Exercise</h2>
<p>We have a class defined for vehicles. Create two new vehicles called car1 and car2.
    Set car1 to be a red convertible worth \$60,000.00 with a name of Fer,
    and car2 to be a blue van named Jump worth \$10,000.00.</p>", "chapters/classes.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/classes.html.twig");
    }
}
