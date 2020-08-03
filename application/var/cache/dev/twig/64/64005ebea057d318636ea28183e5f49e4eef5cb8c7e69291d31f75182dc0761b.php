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

/* chapters/lists.html.twig */
class __TwigTemplate_e6c0a1268508dfae11589b5419efcd14651509bd4525ba75696963d1b3f53711 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/lists.html.twig"));

        // line 1
        echo "<h1>Lists</h1>
<hr/>

<p>Lists are very similar to arrays. They can contain any type of variable, and they can contain as many variables as you wish. Lists can also be iterated over in a very simple manner. Here is an example of how to build a list.</p>
<pre>
                        <code>mylist = []
                        mylist.append(1)
                        mylist.append(2)
                        mylist.append(3)
                        print(mylist[0]) # prints 1
                        print(mylist[1]) # prints 2
                        print(mylist[2]) # prints 3

                        # prints out 1,2,3
                        for x in mylist:
                            print(x)
                        </code>
                    </pre>
<p>Accessing an index which does not exist generates an exception (an error).</p>
<pre>
                        <code>mylist = [1,2,3]
                        print(mylist[10])
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>In this exercise, you will need to add numbers and strings to the correct lists using the \"append\" list method. You must add the numbers 1,2, and 3 to the \"numbers\" list, and the words 'hello' and 'world' to the strings variable.</p>
<p>
    You will also have to fill in the variable second_name with the second name in the names list, using the brackets operator
    <code>[]</code>
    . Note that the index is zero-based, so if you want to access the second item in the list, its index will be 1.
</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/lists.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Lists</h1>
<hr/>

<p>Lists are very similar to arrays. They can contain any type of variable, and they can contain as many variables as you wish. Lists can also be iterated over in a very simple manner. Here is an example of how to build a list.</p>
<pre>
                        <code>mylist = []
                        mylist.append(1)
                        mylist.append(2)
                        mylist.append(3)
                        print(mylist[0]) # prints 1
                        print(mylist[1]) # prints 2
                        print(mylist[2]) # prints 3

                        # prints out 1,2,3
                        for x in mylist:
                            print(x)
                        </code>
                    </pre>
<p>Accessing an index which does not exist generates an exception (an error).</p>
<pre>
                        <code>mylist = [1,2,3]
                        print(mylist[10])
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>In this exercise, you will need to add numbers and strings to the correct lists using the \"append\" list method. You must add the numbers 1,2, and 3 to the \"numbers\" list, and the words 'hello' and 'world' to the strings variable.</p>
<p>
    You will also have to fill in the variable second_name with the second name in the names list, using the brackets operator
    <code>[]</code>
    . Note that the index is zero-based, so if you want to access the second item in the list, its index will be 1.
</p>", "chapters/lists.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/lists.html.twig");
    }
}
