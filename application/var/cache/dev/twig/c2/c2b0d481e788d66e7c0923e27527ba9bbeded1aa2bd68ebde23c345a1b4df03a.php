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

/* chapters/string_operations.html.twig */
class __TwigTemplate_5d3c18ecd1c5e21d70370e02509edf16f8f0be30a747d73374e8f1432c8654c4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/string_operations.html.twig"));

        // line 1
        echo "<h1>Basic String Operations</h1>
<hr/>

<p>Strings are bits of text. They can be defined as anything between quotes:</p>
<pre>
                        <code>astring = \"Hello world!\"
                        astring2 = 'Hello world!'
                        </code>
                    </pre>
<p>As you can see, the first thing you learned was printing a simple sentence. This sentence was stored by Python as a string. However, instead of immediately printing strings out, we will explore the various things you can do to them.
    You can also use single quotes to assign a string. However, you will face problems if the value to be assigned itself contains single quotes.For example to assign the string in these bracket(single quotes are ' ') you need to use double quotes only like this</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(\"single quotes are ' '\")

                        print(len(astring))
                        </code>
                    </pre>
<p>That prints out 12, because \"Hello world!\" is 12 characters long, including punctuation and spaces.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.index(\"o\"))
                        </code>
                    </pre>
<p>That prints out 4, because the location of the first occurrence of the letter \"o\" is 4 characters away from the first character. Notice how there are actually two o's in the phrase - this method only recognizes the first.</p>
<p>But why didn't it print out 5? Isn't \"o\" the fifth character in the string? To make things more simple, Python (and most other programming languages) start things at 0 instead of 1. So the index of \"o\" is 4.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.count(\"l\"))
                        </code>
                    </pre>
<p>For those of you using silly fonts, that is a lowercase L, not a number one. This counts the number of l's in the string. Therefore, it should print 3.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[3:7])
                        </code>
                    </pre>
<p>This prints a slice of the string, starting at index 3, and ending at index 6. But why 6 and not 7? Again, most programming languages do this - it makes doing math inside those brackets easier.</p>
<p>If you just have one number in the brackets, it will give you the single character at that index. If you leave out the first number but keep the colon, it will give you a slice from the start to the number you left in. If you leave out the second number, it will give you a slice from the first number to the end.</p>
<p>You can even put negative numbers inside the brackets. They are an easy way of starting at the end of the string instead of the beginning. This way, -3 means \"3rd character from the end\".</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[3:7:2])
                        </code>
                    </pre>
<p>This prints the characters of string from 3 to 7 skipping one character. This is extended slice syntax. The general form is [start:stop:step].</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[3:7])
                        print(astring[3:7:1])
                        </code>
                    </pre>
<p>Note that both of them produce same output</p>
<p>There is no function like strrev in C to reverse a string. But with the above mentioned type of slice syntax you can easily reverse a string like this</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[::-1])
                        </code>
                    </pre>
<p>This</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.upper())
                        print(astring.lower())
                        </code>
                    </pre>
<p>These make a new string with all letters converted to uppercase and lowercase, respectively.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.startswith(\"Hello\"))
                        print(astring.endswith(\"asdfasdfasdf\"))
                        </code>
                    </pre>
<p>This is used to determine whether the string starts with something or ends with something, respectively. The first one will print True, as the string starts with \"Hello\". The second one will print False, as the string certainly does not end with \"asdfasdfasdf\".</p>
<pre>
                        <code>astring = \"Hello world!\"
                        afewwords = astring.split(\" \")
                        </code>
                    </pre>
<p>This splits the string into a bunch of strings grouped together in a list. Since this example splits at a space, the first item in the list will be \"Hello\", and the second will be \"world!\".</p>
<h2>Exercise</h2>
<p>Try to fix the code to print out the correct information by changing the string.</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/string_operations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Basic String Operations</h1>
<hr/>

<p>Strings are bits of text. They can be defined as anything between quotes:</p>
<pre>
                        <code>astring = \"Hello world!\"
                        astring2 = 'Hello world!'
                        </code>
                    </pre>
<p>As you can see, the first thing you learned was printing a simple sentence. This sentence was stored by Python as a string. However, instead of immediately printing strings out, we will explore the various things you can do to them.
    You can also use single quotes to assign a string. However, you will face problems if the value to be assigned itself contains single quotes.For example to assign the string in these bracket(single quotes are ' ') you need to use double quotes only like this</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(\"single quotes are ' '\")

                        print(len(astring))
                        </code>
                    </pre>
<p>That prints out 12, because \"Hello world!\" is 12 characters long, including punctuation and spaces.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.index(\"o\"))
                        </code>
                    </pre>
<p>That prints out 4, because the location of the first occurrence of the letter \"o\" is 4 characters away from the first character. Notice how there are actually two o's in the phrase - this method only recognizes the first.</p>
<p>But why didn't it print out 5? Isn't \"o\" the fifth character in the string? To make things more simple, Python (and most other programming languages) start things at 0 instead of 1. So the index of \"o\" is 4.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.count(\"l\"))
                        </code>
                    </pre>
<p>For those of you using silly fonts, that is a lowercase L, not a number one. This counts the number of l's in the string. Therefore, it should print 3.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[3:7])
                        </code>
                    </pre>
<p>This prints a slice of the string, starting at index 3, and ending at index 6. But why 6 and not 7? Again, most programming languages do this - it makes doing math inside those brackets easier.</p>
<p>If you just have one number in the brackets, it will give you the single character at that index. If you leave out the first number but keep the colon, it will give you a slice from the start to the number you left in. If you leave out the second number, it will give you a slice from the first number to the end.</p>
<p>You can even put negative numbers inside the brackets. They are an easy way of starting at the end of the string instead of the beginning. This way, -3 means \"3rd character from the end\".</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[3:7:2])
                        </code>
                    </pre>
<p>This prints the characters of string from 3 to 7 skipping one character. This is extended slice syntax. The general form is [start:stop:step].</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[3:7])
                        print(astring[3:7:1])
                        </code>
                    </pre>
<p>Note that both of them produce same output</p>
<p>There is no function like strrev in C to reverse a string. But with the above mentioned type of slice syntax you can easily reverse a string like this</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring[::-1])
                        </code>
                    </pre>
<p>This</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.upper())
                        print(astring.lower())
                        </code>
                    </pre>
<p>These make a new string with all letters converted to uppercase and lowercase, respectively.</p>
<pre>
                        <code>astring = \"Hello world!\"
                        print(astring.startswith(\"Hello\"))
                        print(astring.endswith(\"asdfasdfasdf\"))
                        </code>
                    </pre>
<p>This is used to determine whether the string starts with something or ends with something, respectively. The first one will print True, as the string starts with \"Hello\". The second one will print False, as the string certainly does not end with \"asdfasdfasdf\".</p>
<pre>
                        <code>astring = \"Hello world!\"
                        afewwords = astring.split(\" \")
                        </code>
                    </pre>
<p>This splits the string into a bunch of strings grouped together in a list. Since this example splits at a space, the first item in the list will be \"Hello\", and the second will be \"world!\".</p>
<h2>Exercise</h2>
<p>Try to fix the code to print out the correct information by changing the string.</p>", "chapters/string_operations.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/string_operations.html.twig");
    }
}
