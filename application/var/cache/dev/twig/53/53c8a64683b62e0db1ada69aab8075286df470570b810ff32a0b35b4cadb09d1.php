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

/* chapters/modules.html.twig */
class __TwigTemplate_ad44f15667e302a7a8e032f98c383c8a2edc5a2fc356fcd92e57446240d55f73 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapters/modules.html.twig"));

        // line 1
        echo "<h1>Modules and Packages</h1>
<hr/>

<p>
    In programming, a module is a piece of software that has a specific functionality.
    For example, when building a ping pong game, one module would be responsible for the game logic, and
    <br/>

    another module would be responsible for drawing the game on the screen. Each module is a different
    file, which can be edited separately.
</p>
<h3>Writing modules</h3>
<p>Modules in Python are simply Python files with a .py extension. The name of the module will be the name of the file.
    A Python module can have a set of functions, classes or variables defined and implemented.
    In the example above, we will have two files, we will have:</p>
<pre>
                        <code>mygame/
                        mygame/game.py
                        mygame/draw.py
                        </code>
                    </pre>
<p>
    The Python script
    <code>game.py</code>
    will implement the game. It will use the function
    <code>draw_game</code>
    from the file
    <code>draw.py</code>
    ,
    or in other words, the
    <code>draw</code>
    module, that implements the logic for drawing the game on the screen.
</p>
<p>
    Modules are imported from other modules using the
    <code>import</code>
    command. In this example, the
    <code>game.py</code>
    script may
    look something like this:
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        import draw

                        def play_game():
                            ...

                        def main():
                            result = play_game()
                            draw.draw_game(result)

                        # this means that if this script is executed, then
                        # main() will be executed
                        if __name__ == '__main__':
                            main()
                        </code>
                    </pre>
<p>
    The
    <code>draw</code>
    module may look something like this:
</p>
<pre>
                        <code># draw.py

                        def draw_game():
                            ...

                        def clear_screen(screen):
                            ...
                        </code>
                    </pre>
<p>
    In this example, the
    <code>game</code>
    module imports the
    <code>draw</code>
    module, which enables it to use functions implemented
    in that module. The
    <code>main</code>
    function would use the local function
    <code>play_game</code>
    to run the game, and then
    draw the result of the game using a function implemented in the
    <code>draw</code>
    module called
    <code>draw_game</code>
    . To use
    the function
    <code>draw_game</code>
    from the
    <code>draw</code>
    module, we would need to specify in which module the function is
    implemented, using the dot operator. To reference the
    <code>draw_game</code>
    function from the
    <code>game</code>
    module,
    we would need to import the
    <code>draw</code>
    module and only then call
    <code>draw.draw_game()</code>
    .
</p>
<p>
    When the
    <code>import draw</code>
    directive will run, the Python interpreter will look for a file in the directory which
    the script was executed from, by the name of the module with a
    <code>.py</code>
    prefix, so in our case it will try to
    look for
    <code>draw.py</code>
    . If it will find one, it will import it. If not, he will continue to look for built-in modules.
</p>
<p>
    You may have noticed that when importing a module, a
    <code>.pyc</code>
    file appears, which is a compiled Python file.
    Python compiles files into Python bytecode so that it won't have to parse the files each time modules are loaded.
    If a
    <code>.pyc</code>
    file exists, it gets loaded instead of the
    <code>.py</code>
    file, but this process is transparent to the user.
</p>
<h3>Importing module objects to the current namespace</h3>
<p>
    We may also import the function
    <code>draw_game</code>
    directly into the main script's namespace, by using the
    <code>from</code>
    command.
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        from draw import draw_game

                        def main():
                            result = play_game()
                            draw_game(result)
                        </code>
                    </pre>
<p>
    You may have noticed that in this example,
    <code>draw_game</code>
    does not precede with the name of the module it is imported
    from, because we've specified the module name in the
    <code>import</code>
    command.
</p>
<p>
    The advantages of using this notation is that it is easier to use the functions inside the current module because
    you don't need to specify which module the function comes from. However, any namespace cannot have two objects
    with the exact same name, so the
    <code>import</code>
    command may replace an existing object in the namespace.
</p>
<h3>Importing all objects from a module</h3>
<p>
    We may also use the
    <code>import *</code>
    command to import all objects from a specific module, like this:
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        from draw import *

                        def main():
                            result = play_game()
                            draw_game(result)
                        </code>
                    </pre>
<p>This might be a bit risky as changes in the module might affect the module which imports it, but it is
    shorter and also does not require you to specify which objects you wish to import from the module.</p>
<h3>Custom import name</h3>
<p>We may also load modules under any name we want. This is useful when we want to import a module conditionally
    to use the same name in the rest of the code. </p>
<p>
    For example, if you have two
    <code>draw</code>
    modules with slighty different names - you may do the following:
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        if visual_mode:
                            # in visual mode, we draw using graphics
                            import draw_visual as draw
                        else:
                            # in textual mode, we print out text
                            import draw_textual as draw

                        def main():
                            result = play_game()
                            # this can either be visual or textual depending on visual_mode
                            draw.draw_game(result)
                        </code>
                    </pre>
<h3>Module initialization</h3>
<p>The first time a module is loaded into a running Python script, it is initialized by executing the code in the
    module once. If another module in your code imports the same module again, it will not be loaded twice but
    once only - so local variables inside the module act as a \"singleton\" - they are initialized only once.</p>
<p>This is useful to know, because this means that you can rely on this behavior for initializing objects.
    For example:</p>
<pre>
                        <code># draw.py

                        def draw_game():
                            # when clearing the screen we can use the main screen object initialized in this module
                            clear_screen(main_screen)
                            ...

                        def clear_screen(screen):
                            ...

                        class Screen():
                            ...

                        # initialize main_screen as a singleton
                        main_screen = Screen()
                        </code>
                    </pre>
<h3>Extending module load path</h3>
<p>
    There are a couple of ways we could tell the Python interpreter where to look for modules, aside from the
    default, which is the local directory and the built-in modules. You could either use the environment
    variable
    <code>PYTHONPATH</code>
    to specify additional directories to look for modules in, like this:
</p>
<pre>
                        <code>PYTHONPATH=/foo python game.py
                        </code>
                    </pre>
<p>
    This will execute
    <code>game.py</code>
    , and will enable the script to load modules from the
    <code>foo</code>
    directory as well
    as the local directory.
</p>
<p>
    Another method is the
    <code>sys.path.append</code>
    function. You may execute it
    <em>before</em>
    running an
    <code>import</code>
    command:
</p>
<pre>
                        <code>sys.path.append(\"/foo\")
                        </code>
                    </pre>
<p>
    This will add the
    <code>foo</code>
    directory to the list of paths to look for modules in as well.
</p>
<h3>Exploring built-in modules</h3>
<p>
    Check out the full list of built-in modules in the Python standard library
    <a href=\"https://docs.python.org/3/library/\">here</a>
    .
</p>
<p>
    Two very important functions come in handy when exploring modules in Python - the
    <code>dir</code>
    and
    <code>help</code>
    functions.
</p>
<p>
    If we want to import the module
    <code>urllib</code>
    , which enables us to create read data from URLs, we
    simply
    <code>import</code>
    the module:
</p>
<pre>
                        <code># import the library
                        import urllib

                        # use it
                        urllib.urlopen(...)
                        </code>
                    </pre>
<p>
    We can look for which functions are implemented in each module by using the
    <code>dir</code>
    function:
</p>
<pre>
                        <code>&gt;&gt;&gt; import urllib
                        &gt;&gt;&gt; dir(urllib)
                        ['ContentTooShortError', 'FancyURLopener', 'MAXFTPCACHE', 'URLopener', '__all__', '__builtins__',
                        '__doc__', '__file__', '__name__', '__package__', '__version__', '_ftperrors', '_get_proxies',
                        '_get_proxy_settings', '_have_ssl', '_hexdig', '_hextochr', '_hostprog', '_is_unicode', '_localhost',
                        '_noheaders', '_nportprog', '_passwdprog', '_portprog', '_queryprog', '_safe_map', '_safe_quoters',
                        '_tagprog', '_thishost', '_typeprog', '_urlopener', '_userprog', '_valueprog', 'addbase', 'addclosehook',
                        'addinfo', 'addinfourl', 'always_safe', 'basejoin', 'c', 'ftpcache', 'ftperrors', 'ftpwrapper', 'getproxies',
                        'getproxies_environment', 'getproxies_macosx_sysconf', 'i', 'localhost', 'main', 'noheaders', 'os',
                        'pathname2url', 'proxy_bypass', 'proxy_bypass_environment', 'proxy_bypass_macosx_sysconf', 'quote',
                        'quote_plus', 'reporthook', 'socket', 'splitattr', 'splithost', 'splitnport', 'splitpasswd', 'splitport',
                        'splitquery', 'splittag', 'splittype', 'splituser', 'splitvalue', 'ssl', 'string', 'sys', 'test', 'test1',
                        'thishost', 'time', 'toBytes', 'unquote', 'unquote_plus', 'unwrap', 'url2pathname', 'urlcleanup', 'urlencode',
                        'urlopen', 'urlretrieve']
                        </code>
                    </pre>
<p>
    When we find the function in the module we want to use, we can read about it more using the
    <code>help</code>
    function,
    inside the Python interpreter:
</p>
<pre>
                        <code>help(urllib.urlopen)
                        </code>
                    </pre>
<h3>Writing packages</h3>
<p>Packages are namespaces which contain multiple packages and modules themselves. They are simply directories,
    but with a twist.</p>
<p>
    Each package in Python is a directory which
    <strong>MUST</strong>
    contain a special file called
    <code>__init__.py</code>
    . This file can
    be empty, and it indicates that the directory it contains is a Python package, so it can be imported the same
    way a module can be imported.
</p>
<p>
    If we create a directory called
    <code>foo</code>
    , which marks the package name, we can then create a module inside that
    package called
    <code>bar</code>
    . We also must not forget to add the
    <code>__init__.py</code>
    file inside the
    <code>foo</code>
    directory.
</p>
<p>
    To use the module
    <code>bar</code>
    , we can import it in two ways:
</p>
<pre>
                        <code>import foo.bar
                        </code>
                    </pre>
<p>or:</p>
<pre>
                        <code>from foo import bar
                        </code>
                    </pre>
<p>
    In the first method, we must use the
    <code>foo</code>
    prefix whenever we access the module
    <code>bar</code>
    . In the second method,
    we don't, because we import the module to our module's namespace.
</p>
<p>
    The
    <code>__init__.py</code>
    file can also decide which modules the package exports as the API, while keeping other modules
    internal, by overriding the
    <code>__all__</code>
    variable, like so:
</p>
<pre>
                        <code>__init__.py:

                        __all__ = [\"bar\"]
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>
    In this exercise, you will need to print an alphabetically sorted list of all functions in the
    <code>re</code>
    module,
    which contain the word
    <code>find</code>
    .
</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chapters/modules.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Modules and Packages</h1>
<hr/>

<p>
    In programming, a module is a piece of software that has a specific functionality.
    For example, when building a ping pong game, one module would be responsible for the game logic, and
    <br/>

    another module would be responsible for drawing the game on the screen. Each module is a different
    file, which can be edited separately.
</p>
<h3>Writing modules</h3>
<p>Modules in Python are simply Python files with a .py extension. The name of the module will be the name of the file.
    A Python module can have a set of functions, classes or variables defined and implemented.
    In the example above, we will have two files, we will have:</p>
<pre>
                        <code>mygame/
                        mygame/game.py
                        mygame/draw.py
                        </code>
                    </pre>
<p>
    The Python script
    <code>game.py</code>
    will implement the game. It will use the function
    <code>draw_game</code>
    from the file
    <code>draw.py</code>
    ,
    or in other words, the
    <code>draw</code>
    module, that implements the logic for drawing the game on the screen.
</p>
<p>
    Modules are imported from other modules using the
    <code>import</code>
    command. In this example, the
    <code>game.py</code>
    script may
    look something like this:
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        import draw

                        def play_game():
                            ...

                        def main():
                            result = play_game()
                            draw.draw_game(result)

                        # this means that if this script is executed, then
                        # main() will be executed
                        if __name__ == '__main__':
                            main()
                        </code>
                    </pre>
<p>
    The
    <code>draw</code>
    module may look something like this:
</p>
<pre>
                        <code># draw.py

                        def draw_game():
                            ...

                        def clear_screen(screen):
                            ...
                        </code>
                    </pre>
<p>
    In this example, the
    <code>game</code>
    module imports the
    <code>draw</code>
    module, which enables it to use functions implemented
    in that module. The
    <code>main</code>
    function would use the local function
    <code>play_game</code>
    to run the game, and then
    draw the result of the game using a function implemented in the
    <code>draw</code>
    module called
    <code>draw_game</code>
    . To use
    the function
    <code>draw_game</code>
    from the
    <code>draw</code>
    module, we would need to specify in which module the function is
    implemented, using the dot operator. To reference the
    <code>draw_game</code>
    function from the
    <code>game</code>
    module,
    we would need to import the
    <code>draw</code>
    module and only then call
    <code>draw.draw_game()</code>
    .
</p>
<p>
    When the
    <code>import draw</code>
    directive will run, the Python interpreter will look for a file in the directory which
    the script was executed from, by the name of the module with a
    <code>.py</code>
    prefix, so in our case it will try to
    look for
    <code>draw.py</code>
    . If it will find one, it will import it. If not, he will continue to look for built-in modules.
</p>
<p>
    You may have noticed that when importing a module, a
    <code>.pyc</code>
    file appears, which is a compiled Python file.
    Python compiles files into Python bytecode so that it won't have to parse the files each time modules are loaded.
    If a
    <code>.pyc</code>
    file exists, it gets loaded instead of the
    <code>.py</code>
    file, but this process is transparent to the user.
</p>
<h3>Importing module objects to the current namespace</h3>
<p>
    We may also import the function
    <code>draw_game</code>
    directly into the main script's namespace, by using the
    <code>from</code>
    command.
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        from draw import draw_game

                        def main():
                            result = play_game()
                            draw_game(result)
                        </code>
                    </pre>
<p>
    You may have noticed that in this example,
    <code>draw_game</code>
    does not precede with the name of the module it is imported
    from, because we've specified the module name in the
    <code>import</code>
    command.
</p>
<p>
    The advantages of using this notation is that it is easier to use the functions inside the current module because
    you don't need to specify which module the function comes from. However, any namespace cannot have two objects
    with the exact same name, so the
    <code>import</code>
    command may replace an existing object in the namespace.
</p>
<h3>Importing all objects from a module</h3>
<p>
    We may also use the
    <code>import *</code>
    command to import all objects from a specific module, like this:
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        from draw import *

                        def main():
                            result = play_game()
                            draw_game(result)
                        </code>
                    </pre>
<p>This might be a bit risky as changes in the module might affect the module which imports it, but it is
    shorter and also does not require you to specify which objects you wish to import from the module.</p>
<h3>Custom import name</h3>
<p>We may also load modules under any name we want. This is useful when we want to import a module conditionally
    to use the same name in the rest of the code. </p>
<p>
    For example, if you have two
    <code>draw</code>
    modules with slighty different names - you may do the following:
</p>
<pre>
                        <code># game.py
                        # import the draw module
                        if visual_mode:
                            # in visual mode, we draw using graphics
                            import draw_visual as draw
                        else:
                            # in textual mode, we print out text
                            import draw_textual as draw

                        def main():
                            result = play_game()
                            # this can either be visual or textual depending on visual_mode
                            draw.draw_game(result)
                        </code>
                    </pre>
<h3>Module initialization</h3>
<p>The first time a module is loaded into a running Python script, it is initialized by executing the code in the
    module once. If another module in your code imports the same module again, it will not be loaded twice but
    once only - so local variables inside the module act as a \"singleton\" - they are initialized only once.</p>
<p>This is useful to know, because this means that you can rely on this behavior for initializing objects.
    For example:</p>
<pre>
                        <code># draw.py

                        def draw_game():
                            # when clearing the screen we can use the main screen object initialized in this module
                            clear_screen(main_screen)
                            ...

                        def clear_screen(screen):
                            ...

                        class Screen():
                            ...

                        # initialize main_screen as a singleton
                        main_screen = Screen()
                        </code>
                    </pre>
<h3>Extending module load path</h3>
<p>
    There are a couple of ways we could tell the Python interpreter where to look for modules, aside from the
    default, which is the local directory and the built-in modules. You could either use the environment
    variable
    <code>PYTHONPATH</code>
    to specify additional directories to look for modules in, like this:
</p>
<pre>
                        <code>PYTHONPATH=/foo python game.py
                        </code>
                    </pre>
<p>
    This will execute
    <code>game.py</code>
    , and will enable the script to load modules from the
    <code>foo</code>
    directory as well
    as the local directory.
</p>
<p>
    Another method is the
    <code>sys.path.append</code>
    function. You may execute it
    <em>before</em>
    running an
    <code>import</code>
    command:
</p>
<pre>
                        <code>sys.path.append(\"/foo\")
                        </code>
                    </pre>
<p>
    This will add the
    <code>foo</code>
    directory to the list of paths to look for modules in as well.
</p>
<h3>Exploring built-in modules</h3>
<p>
    Check out the full list of built-in modules in the Python standard library
    <a href=\"https://docs.python.org/3/library/\">here</a>
    .
</p>
<p>
    Two very important functions come in handy when exploring modules in Python - the
    <code>dir</code>
    and
    <code>help</code>
    functions.
</p>
<p>
    If we want to import the module
    <code>urllib</code>
    , which enables us to create read data from URLs, we
    simply
    <code>import</code>
    the module:
</p>
<pre>
                        <code># import the library
                        import urllib

                        # use it
                        urllib.urlopen(...)
                        </code>
                    </pre>
<p>
    We can look for which functions are implemented in each module by using the
    <code>dir</code>
    function:
</p>
<pre>
                        <code>&gt;&gt;&gt; import urllib
                        &gt;&gt;&gt; dir(urllib)
                        ['ContentTooShortError', 'FancyURLopener', 'MAXFTPCACHE', 'URLopener', '__all__', '__builtins__',
                        '__doc__', '__file__', '__name__', '__package__', '__version__', '_ftperrors', '_get_proxies',
                        '_get_proxy_settings', '_have_ssl', '_hexdig', '_hextochr', '_hostprog', '_is_unicode', '_localhost',
                        '_noheaders', '_nportprog', '_passwdprog', '_portprog', '_queryprog', '_safe_map', '_safe_quoters',
                        '_tagprog', '_thishost', '_typeprog', '_urlopener', '_userprog', '_valueprog', 'addbase', 'addclosehook',
                        'addinfo', 'addinfourl', 'always_safe', 'basejoin', 'c', 'ftpcache', 'ftperrors', 'ftpwrapper', 'getproxies',
                        'getproxies_environment', 'getproxies_macosx_sysconf', 'i', 'localhost', 'main', 'noheaders', 'os',
                        'pathname2url', 'proxy_bypass', 'proxy_bypass_environment', 'proxy_bypass_macosx_sysconf', 'quote',
                        'quote_plus', 'reporthook', 'socket', 'splitattr', 'splithost', 'splitnport', 'splitpasswd', 'splitport',
                        'splitquery', 'splittag', 'splittype', 'splituser', 'splitvalue', 'ssl', 'string', 'sys', 'test', 'test1',
                        'thishost', 'time', 'toBytes', 'unquote', 'unquote_plus', 'unwrap', 'url2pathname', 'urlcleanup', 'urlencode',
                        'urlopen', 'urlretrieve']
                        </code>
                    </pre>
<p>
    When we find the function in the module we want to use, we can read about it more using the
    <code>help</code>
    function,
    inside the Python interpreter:
</p>
<pre>
                        <code>help(urllib.urlopen)
                        </code>
                    </pre>
<h3>Writing packages</h3>
<p>Packages are namespaces which contain multiple packages and modules themselves. They are simply directories,
    but with a twist.</p>
<p>
    Each package in Python is a directory which
    <strong>MUST</strong>
    contain a special file called
    <code>__init__.py</code>
    . This file can
    be empty, and it indicates that the directory it contains is a Python package, so it can be imported the same
    way a module can be imported.
</p>
<p>
    If we create a directory called
    <code>foo</code>
    , which marks the package name, we can then create a module inside that
    package called
    <code>bar</code>
    . We also must not forget to add the
    <code>__init__.py</code>
    file inside the
    <code>foo</code>
    directory.
</p>
<p>
    To use the module
    <code>bar</code>
    , we can import it in two ways:
</p>
<pre>
                        <code>import foo.bar
                        </code>
                    </pre>
<p>or:</p>
<pre>
                        <code>from foo import bar
                        </code>
                    </pre>
<p>
    In the first method, we must use the
    <code>foo</code>
    prefix whenever we access the module
    <code>bar</code>
    . In the second method,
    we don't, because we import the module to our module's namespace.
</p>
<p>
    The
    <code>__init__.py</code>
    file can also decide which modules the package exports as the API, while keeping other modules
    internal, by overriding the
    <code>__all__</code>
    variable, like so:
</p>
<pre>
                        <code>__init__.py:

                        __all__ = [\"bar\"]
                        </code>
                    </pre>
<h2>Exercise</h2>
<p>
    In this exercise, you will need to print an alphabetically sorted list of all functions in the
    <code>re</code>
    module,
    which contain the word
    <code>find</code>
    .
</p>", "chapters/modules.html.twig", "/Applications/MAMP/htdocs/learn/templates/chapters/modules.html.twig");
    }
}
