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

/* chapters/string_formatting.html.twig */
class __TwigTemplate_0bb00983492c7d6d155dfb4e4b8c5788a15a594bf96feaa94325522e752d80c2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/string_formatting.html.twig"));

        // line 1
        echo "<h1>String Formatting</h1>
<hr/>

<p>Python uses C-style string formatting to create new, formatted strings. The \"%\" operator is used to format a set of variables enclosed in a \"tuple\" (a fixed size list), together with a format string, which contains normal text together with \"argument specifiers\", special symbols like \"%s\" and \"%d\".</p>
<p>Let's say you have a variable called \"name\" with your user name in it, and you would then like to print(out a greeting to that user.)</p>
<pre>
                        <code># This prints out \"Hello, John!\"
                        name = \"John\"
                        print(\"Hello, %s!\" % name)
                        </code>
                    </pre>
<p>To use two or more argument specifiers, use a tuple (parentheses):</p>
<pre>
                        <code># This prints out \"John is 23 years old.\"
                        name = \"John\"
                        age = 23
                        print(\"%s is %d years old.\" % (name, age))
                        </code>
                    </pre>
<p>Any object which is not a string can be formatted using the %s operator as well. The string which returns from the \"repr\" method of that object is formatted as the string. For example:</p>
<pre>
                        <code># This prints out: A list: [1, 2, 3]
                        mylist = [1,2,3]
                        print(\"A list: %s\" % mylist)
                        </code>
                    </pre>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/string_formatting.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>String Formatting</h1>
<hr/>

<p>Python uses C-style string formatting to create new, formatted strings. The \"%\" operator is used to format a set of variables enclosed in a \"tuple\" (a fixed size list), together with a format string, which contains normal text together with \"argument specifiers\", special symbols like \"%s\" and \"%d\".</p>
<p>Let's say you have a variable called \"name\" with your user name in it, and you would then like to print(out a greeting to that user.)</p>
<pre>
                        <code># This prints out \"Hello, John!\"
                        name = \"John\"
                        print(\"Hello, %s!\" % name)
                        </code>
                    </pre>
<p>To use two or more argument specifiers, use a tuple (parentheses):</p>
<pre>
                        <code># This prints out \"John is 23 years old.\"
                        name = \"John\"
                        age = 23
                        print(\"%s is %d years old.\" % (name, age))
                        </code>
                    </pre>
<p>Any object which is not a string can be formatted using the %s operator as well. The string which returns from the \"repr\" method of that object is formatted as the string. For example:</p>
<pre>
                        <code># This prints out: A list: [1, 2, 3]
                        mylist = [1,2,3]
                        print(\"A list: %s\" % mylist)
                        </code>
                    </pre>", "chapters/string_formatting.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/string_formatting.html.twig");
    }
}
