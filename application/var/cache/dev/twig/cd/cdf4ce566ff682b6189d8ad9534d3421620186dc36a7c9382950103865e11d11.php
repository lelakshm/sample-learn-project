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

/* chapters/dictionaries.html.twig */
class __TwigTemplate_e11e276d985f906b4a56e1e497c5dafdf0a2da7d46ba7ebc26ceae07ba795208 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/dictionaries.html.twig"));

        // line 1
        echo "<h1>Dictionaries</h1>
<hr/>

<p>A dictionary is a data type similar to arrays, but works with keys and values instead of indexes. Each value stored in a dictionary can be accessed using a key, which is any type of object (a string, a number, a list, etc.) instead of using its index to address it.</p>
<p>For example, a database of phone numbers could be stored using a dictionary like this:</p>
<pre>
                        <code>phonebook = {}
                        phonebook[\"John\"] = 938477566
                        phonebook[\"Jack\"] = 938377264
                        phonebook[\"Jill\"] = 947662781
                        print(phonebook)
                        </code>
                    </pre>
<p>Alternatively, a dictionary can be initialized with the same values in the following notation:</p>
<pre>
                        <code>phonebook = {
                            \"John\" : 938477566,
                            \"Jack\" : 938377264,
                            \"Jill\" : 947662781
                        }
                        print(phonebook)
                        </code>
                    </pre>
<h3>Iterating over dictionaries</h3>
<p>Dictionaries can be iterated over, just like a list. However, a dictionary, unlike a list, does not keep the order of the values stored in it. To iterate over key value pairs, use the following syntax:</p>
<pre>
                        <code>phonebook = {\"John\" : 938477566,\"Jack\" : 938377264,\"Jill\" : 947662781}
                        for name, number in phonebook.items():
                            print(\"Phone number of %s is %d\" % (name, number))
                        </code>
                    </pre>
<h3>Removing a value</h3>
<p>To remove a specified index, use either one of the following notations:</p>
<pre>
                        <code>phonebook = {
                           \"John\" : 938477566,
                           \"Jack\" : 938377264,
                           \"Jill\" : 947662781
                        }
                        del phonebook[\"John\"]
                        print(phonebook)
                        </code>
                    </pre>
<p>or:</p>
<pre>
                        <code>phonebook = {
                           \"John\" : 938477566,
                           \"Jack\" : 938377264,
                           \"Jill\" : 947662781
                        }
                        phonebook.pop(\"John\")
                        print(phonebook)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Add \"Jake\" to the phonebook with the phone number 938273443, and remove Jill from the phonebook.</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/dictionaries.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Dictionaries</h1>
<hr/>

<p>A dictionary is a data type similar to arrays, but works with keys and values instead of indexes. Each value stored in a dictionary can be accessed using a key, which is any type of object (a string, a number, a list, etc.) instead of using its index to address it.</p>
<p>For example, a database of phone numbers could be stored using a dictionary like this:</p>
<pre>
                        <code>phonebook = {}
                        phonebook[\"John\"] = 938477566
                        phonebook[\"Jack\"] = 938377264
                        phonebook[\"Jill\"] = 947662781
                        print(phonebook)
                        </code>
                    </pre>
<p>Alternatively, a dictionary can be initialized with the same values in the following notation:</p>
<pre>
                        <code>phonebook = {
                            \"John\" : 938477566,
                            \"Jack\" : 938377264,
                            \"Jill\" : 947662781
                        }
                        print(phonebook)
                        </code>
                    </pre>
<h3>Iterating over dictionaries</h3>
<p>Dictionaries can be iterated over, just like a list. However, a dictionary, unlike a list, does not keep the order of the values stored in it. To iterate over key value pairs, use the following syntax:</p>
<pre>
                        <code>phonebook = {\"John\" : 938477566,\"Jack\" : 938377264,\"Jill\" : 947662781}
                        for name, number in phonebook.items():
                            print(\"Phone number of %s is %d\" % (name, number))
                        </code>
                    </pre>
<h3>Removing a value</h3>
<p>To remove a specified index, use either one of the following notations:</p>
<pre>
                        <code>phonebook = {
                           \"John\" : 938477566,
                           \"Jack\" : 938377264,
                           \"Jill\" : 947662781
                        }
                        del phonebook[\"John\"]
                        print(phonebook)
                        </code>
                    </pre>
<p>or:</p>
<pre>
                        <code>phonebook = {
                           \"John\" : 938477566,
                           \"Jack\" : 938377264,
                           \"Jill\" : 947662781
                        }
                        phonebook.pop(\"John\")
                        print(phonebook)
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Add \"Jake\" to the phonebook with the phone number 938273443, and remove Jill from the phonebook.</p>", "chapters/dictionaries.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/dictionaries.html.twig");
    }
}
