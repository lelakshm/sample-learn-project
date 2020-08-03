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

/* chapters/loops.html.twig */
class __TwigTemplate_3b5c0d8d52374f7f57524e4b38a284981959762291bd6cba960acb4cfbb9e1b6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/loops.html.twig"));

        // line 1
        echo "<h1>Loops</h1>
<hr/>

<p>There are two types of loops in Python, for and while.</p>
<h3>The \"for\" loop</h3>
<p>For loops iterate over a given sequence. Here is an example:</p>
<pre>
                        <code>primes = [2, 3, 5, 7]
                        for prime in primes:
                            print(prime)
                        </code>
                    </pre>
<p>For loops can iterate over a sequence of numbers using the \"range\" and \"xrange\" functions. The difference between range and xrange is that the range function returns a new list with numbers of that specified range, whereas xrange returns an iterator, which is more efficient. (Python 3 uses the range function, which acts like xrange). Note that the range function is zero based.</p>
<pre>
                        <code># Prints out the numbers 0,1,2,3,4
                        for x in range(5):
                            print(x)

                        # Prints out 3,4,5
                        for x in range(3, 6):
                            print(x)

                        # Prints out 3,5,7
                        for x in range(3, 8, 2):
                            print(x)
                        </code>
                    </pre>
<h3>\"while\" loops</h3>
<p>While loops repeat as long as a certain boolean condition is met. For example:</p>
<pre>
                        <code># Prints out 0,1,2,3,4

                        count = 0
                        while count &lt; 5:
                            print(count)
                            count += 1  # This is the same as count = count + 1
                        </code>
                    </pre>
<h3>\"break\" and \"continue\" statements</h3>
<p>
    <strong>break</strong>
    is used to exit a for loop or a while loop, whereas
    <strong>continue</strong>
    is used to skip the current block, and return to the \"for\" or \"while\" statement. A few examples:
</p>
<pre>
                        <code># Prints out 0,1,2,3,4

                        count = 0
                        while True:
                            print(count)
                            count += 1
                            if count &gt;= 5:
                                break

                        # Prints out only odd numbers - 1,3,5,7,9
                        for x in range(10):
                            # Check if x is even
                            if x % 2 == 0:
                                continue
                            print(x)
                        </code>
                    </pre>
<h3>can we use \"else\" clause for loops?</h3>
<p>
    unlike languages like C,CPP.. we can use
    <strong>else</strong>
    for loops. When the loop condition of \"for\" or \"while\" statement fails then code part in \"else\" is executed. If
    <strong>break</strong>
    statement is executed inside for loop then the \"else\" part is skipped.
    Note that \"else\" part is executed even if there is a
    <strong>continue</strong>
    statement.
</p>
<p>Here are a few examples:</p>
<pre>
                        <code># Prints out 0,1,2,3,4 and then it prints \"count value reached 5\"

                        count=0
                        while(count&lt;5):
                            print(count)
                            count +=1
                        else:
                            print(\"count value reached %d\" %(count))

                        # Prints out 1,2,3,4
                        for i in range(1, 10):
                            if(i%5==0):
                                break
                            print(i)
                        else:
                            print(\"this is not printed because for loop is terminated because of break but not due to fail in condition\")
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Loop through and print out all even numbers from the numbers list in the same order they are received. Don't print any numbers that come after 237 in the sequence.</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/loops.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Loops</h1>
<hr/>

<p>There are two types of loops in Python, for and while.</p>
<h3>The \"for\" loop</h3>
<p>For loops iterate over a given sequence. Here is an example:</p>
<pre>
                        <code>primes = [2, 3, 5, 7]
                        for prime in primes:
                            print(prime)
                        </code>
                    </pre>
<p>For loops can iterate over a sequence of numbers using the \"range\" and \"xrange\" functions. The difference between range and xrange is that the range function returns a new list with numbers of that specified range, whereas xrange returns an iterator, which is more efficient. (Python 3 uses the range function, which acts like xrange). Note that the range function is zero based.</p>
<pre>
                        <code># Prints out the numbers 0,1,2,3,4
                        for x in range(5):
                            print(x)

                        # Prints out 3,4,5
                        for x in range(3, 6):
                            print(x)

                        # Prints out 3,5,7
                        for x in range(3, 8, 2):
                            print(x)
                        </code>
                    </pre>
<h3>\"while\" loops</h3>
<p>While loops repeat as long as a certain boolean condition is met. For example:</p>
<pre>
                        <code># Prints out 0,1,2,3,4

                        count = 0
                        while count &lt; 5:
                            print(count)
                            count += 1  # This is the same as count = count + 1
                        </code>
                    </pre>
<h3>\"break\" and \"continue\" statements</h3>
<p>
    <strong>break</strong>
    is used to exit a for loop or a while loop, whereas
    <strong>continue</strong>
    is used to skip the current block, and return to the \"for\" or \"while\" statement. A few examples:
</p>
<pre>
                        <code># Prints out 0,1,2,3,4

                        count = 0
                        while True:
                            print(count)
                            count += 1
                            if count &gt;= 5:
                                break

                        # Prints out only odd numbers - 1,3,5,7,9
                        for x in range(10):
                            # Check if x is even
                            if x % 2 == 0:
                                continue
                            print(x)
                        </code>
                    </pre>
<h3>can we use \"else\" clause for loops?</h3>
<p>
    unlike languages like C,CPP.. we can use
    <strong>else</strong>
    for loops. When the loop condition of \"for\" or \"while\" statement fails then code part in \"else\" is executed. If
    <strong>break</strong>
    statement is executed inside for loop then the \"else\" part is skipped.
    Note that \"else\" part is executed even if there is a
    <strong>continue</strong>
    statement.
</p>
<p>Here are a few examples:</p>
<pre>
                        <code># Prints out 0,1,2,3,4 and then it prints \"count value reached 5\"

                        count=0
                        while(count&lt;5):
                            print(count)
                            count +=1
                        else:
                            print(\"count value reached %d\" %(count))

                        # Prints out 1,2,3,4
                        for i in range(1, 10):
                            if(i%5==0):
                                break
                            print(i)
                        else:
                            print(\"this is not printed because for loop is terminated because of break but not due to fail in condition\")
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>Loop through and print out all even numbers from the numbers list in the same order they are received. Don't print any numbers that come after 237 in the sequence.</p>", "chapters/loops.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/loops.html.twig");
    }
}
