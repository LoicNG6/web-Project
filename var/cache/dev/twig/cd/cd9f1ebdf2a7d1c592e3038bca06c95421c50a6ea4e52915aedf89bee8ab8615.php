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

/* accueil/choose.html.twig */
class __TwigTemplate_0accb2a5d6606fc7b5df0b03173a7d7f961d330c22eb34c2cff20b7156a72800 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/choose.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/choose.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>Welcome to WH ?</title>
    <link href=\"";
        // line 6
        echo "choose.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\">
</head>

<body>
<div class=\"title\">
    <h2>Welcome to</h2>
    <div class=\"trait\"></div>
    <h1>What Happened ?</h1>
</div>

<table class=\"choices\">
    <tr>
        <td>
            <div class=\"connection\">
                <p>Want to write something ? </p>
                <button><a href=\"connection.html.twig\">Sign in</a></button>
            </div>
        </td>
        <td>
            <div class=\"visit\">
                <p>Need to know more about us ?</p>
                <button><a href=\"visit.html.twig\">Let's go</a></button>
            </div>
        </td>
        <td>
            <div class=\"inscription\">
                <p>Want to become a member ?</p>
                <button>
                    <a href=\"signIn.html.twig\">Sign up</a>
                </button>

            </div>
        </td>
    </tr>
</table>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accueil/choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>Welcome to WH ?</title>
    <link href=\"{{'choose.css'}}\" type=\"text/css\" rel=\"stylesheet\">
</head>

<body>
<div class=\"title\">
    <h2>Welcome to</h2>
    <div class=\"trait\"></div>
    <h1>What Happened ?</h1>
</div>

<table class=\"choices\">
    <tr>
        <td>
            <div class=\"connection\">
                <p>Want to write something ? </p>
                <button><a href=\"connection.html.twig\">Sign in</a></button>
            </div>
        </td>
        <td>
            <div class=\"visit\">
                <p>Need to know more about us ?</p>
                <button><a href=\"visit.html.twig\">Let's go</a></button>
            </div>
        </td>
        <td>
            <div class=\"inscription\">
                <p>Want to become a member ?</p>
                <button>
                    <a href=\"signIn.html.twig\">Sign up</a>
                </button>

            </div>
        </td>
    </tr>
</table>
</body>
</html>", "accueil/choose.html.twig", "/Applications/MAMP/htdocs/wh/website-skeleton/templates/accueil/choose.html.twig");
    }
}
