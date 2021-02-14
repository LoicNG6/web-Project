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

/* accueil/home.html.twig */
class __TwigTemplate_84611ce4f63862e4069d9fd8becca7bb71e2080afe4de3ae4e2c7e6b9b9b0eff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

    <!-- jQuery library -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>

    <!-- Latest compiled JavaScript -->
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <div id=\"head\">
        <div id=\"whats\" class=\"btn btn-secondary\">
            <h1> What's happened ?</h1>
        </div>

        <div id=\"sign_up\" class=\"form-inline my-2 my-lg-0\">
            <div id=\"prof\" >
                 <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"profile\" src=\"profil.png\"></button>
            </div>

            <div id=\"panier\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"pn\" src=\"pn.png\"></button>
            </div>

        </div>
        <div id=\"sign_up\" class=\"form-inline my-2 my-lg-0\">

            <div id=\"twit\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"twitter\" src=\"twitter.png\"></button>
            </div>

            <div id=\"linkedin\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"in\" src=\"in.png\"></button>
            </div>
        </div>
        <div id=\"sign_up\" class=\"form-inline my-2 my-lg-0\">

            <div id=\"facebook\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"fb\" src=\"fb.png\"></button>
            </div>
            <div id=\"instagram\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"insta\" src=\"insta.png\"></button>
            </div>

        </div>

    </div>

    <div id=\"ongl\">
        <div id=\"init\" class=\"btn-group\" role=\"group\" >
            <button type=\"button\" class=\"btn btn-primary\">A LA UNE</button>

        </div>


        <div id=\"init\" class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">LA REDACTION</button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Pays à l'honneur</a></li>
                <li><a href=\"#\">Sous l'arbre à palabres</a></li>
                <li><a href=\"#\">Le journal d'ESMA</a></li>
                <li><a href=\"#\">Twiza</a></li>
            </ul>
        </div>


        <div id=\"init\" class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">EVENEMENTS</button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Nos évenements</a></li>
                <li><a href=\"#\">Evenements recomandés</a></li>
            </ul>
        </div>


        <div id=\"init\" class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">ARCHIVES</button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Archives Wakhatina</a></li>
                <li><a href=\"#\">Archives Pays à l'honneur</a></li>
                <li><a href=\"#\">Archives Sous l'arbre à Palabre</a></li>
                <li><a href=\"#\">Archives Journal d'ESMA</a></li>
            </ul>
        </div>
        <div  id=\"init\" class=\"btn-group\" role=\"group\" >
            <button type=\"button\" class=\"btn btn-primary\">A PROPOS</button>
        </div>

        <div id=\"srch\">
            <form class=\"form-inline my-2 my-lg-0\">
                <button id=\"recherche\" class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">SEARCH</button>
                <input id=\"reserch\" class=\"form-control mr-sm-3\" type=\"text\" placeholder=\"Search\">

            </form>
        </div>
    </div>

    <div id=\"corp\"  class=\"p-3 mb-2 bg-primary text-white\">
        <div id=\"d_right\" >
            <div >
                <p>Our events</p>

                ";
        // line 103
        $this->loadTemplate("accueil/Events.html.twig", "accueil/home.html.twig", 103)->display($context);
        // line 104
        echo "            </div>
        </div>

        <div id=\"d_center\">
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emergency"]) || array_key_exists("emergency", $context) ? $context["emergency"] : (function () { throw new RuntimeError('Variable "emergency" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 109
            echo "                <section id =\"art\" class=\"articles\">
                        <article>
                            <h2> ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 111), "html", null, true);
            echo "</h2>
                            <div class=\"metadata\"> ecrit le ";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "publicationdate", [], "any", false, false, false, 112), "Y/m/d"), "html", null, true);
            echo "
                                a ";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "publicationdate", [], "any", false, false, false, 113), "H:i"), "html", null, true);
            echo " dans la categorie scientifique </div>
                            <div class =\"content\">
                                <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "picture", [], "any", false, false, false, 115), "html", null, true);
            echo " \" alt=\"\">
                                <P> voila le paragraphe de mon article</P>
                            </div>
                            <a href=\" ";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showArticle");
            echo "\" class=\"btn btn-primary\">Lire la suite</a>
                        </article>
                </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        </div>

        <div id=\"d_right\" >
                ";
        // line 125
        $this->loadTemplate("accueil/message.html.twig", "accueil/home.html.twig", 125)->display($context);
        // line 126
        echo "
            <div>
                ";
        // line 128
        $this->loadTemplate("accueil/emergency.html.twig", "accueil/home.html.twig", 128)->display($context);
        // line 129
        echo "            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 129,  226 => 128,  222 => 126,  220 => 125,  215 => 122,  205 => 118,  199 => 115,  194 => 113,  190 => 112,  186 => 111,  182 => 109,  178 => 108,  172 => 104,  170 => 103,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body%}

    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

    <!-- jQuery library -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>

    <!-- Latest compiled JavaScript -->
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <div id=\"head\">
        <div id=\"whats\" class=\"btn btn-secondary\">
            <h1> What's happened ?</h1>
        </div>

        <div id=\"sign_up\" class=\"form-inline my-2 my-lg-0\">
            <div id=\"prof\" >
                 <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"profile\" src=\"profil.png\"></button>
            </div>

            <div id=\"panier\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"pn\" src=\"pn.png\"></button>
            </div>

        </div>
        <div id=\"sign_up\" class=\"form-inline my-2 my-lg-0\">

            <div id=\"twit\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"twitter\" src=\"twitter.png\"></button>
            </div>

            <div id=\"linkedin\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"in\" src=\"in.png\"></button>
            </div>
        </div>
        <div id=\"sign_up\" class=\"form-inline my-2 my-lg-0\">

            <div id=\"facebook\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"fb\" src=\"fb.png\"></button>
            </div>
            <div id=\"instagram\" class=\"form-inline my-2 my-lg-0\">
                <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\"> <img id=\"insta\" src=\"insta.png\"></button>
            </div>

        </div>

    </div>

    <div id=\"ongl\">
        <div id=\"init\" class=\"btn-group\" role=\"group\" >
            <button type=\"button\" class=\"btn btn-primary\">A LA UNE</button>

        </div>


        <div id=\"init\" class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">LA REDACTION</button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Pays à l'honneur</a></li>
                <li><a href=\"#\">Sous l'arbre à palabres</a></li>
                <li><a href=\"#\">Le journal d'ESMA</a></li>
                <li><a href=\"#\">Twiza</a></li>
            </ul>
        </div>


        <div id=\"init\" class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">EVENEMENTS</button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Nos évenements</a></li>
                <li><a href=\"#\">Evenements recomandés</a></li>
            </ul>
        </div>


        <div id=\"init\" class=\"dropdown\">
            <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">ARCHIVES</button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Archives Wakhatina</a></li>
                <li><a href=\"#\">Archives Pays à l'honneur</a></li>
                <li><a href=\"#\">Archives Sous l'arbre à Palabre</a></li>
                <li><a href=\"#\">Archives Journal d'ESMA</a></li>
            </ul>
        </div>
        <div  id=\"init\" class=\"btn-group\" role=\"group\" >
            <button type=\"button\" class=\"btn btn-primary\">A PROPOS</button>
        </div>

        <div id=\"srch\">
            <form class=\"form-inline my-2 my-lg-0\">
                <button id=\"recherche\" class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">SEARCH</button>
                <input id=\"reserch\" class=\"form-control mr-sm-3\" type=\"text\" placeholder=\"Search\">

            </form>
        </div>
    </div>

    <div id=\"corp\"  class=\"p-3 mb-2 bg-primary text-white\">
        <div id=\"d_right\" >
            <div >
                <p>Our events</p>

                {% include 'accueil/Events.html.twig' %}
            </div>
        </div>

        <div id=\"d_center\">
            {% for article in emergency %}
                <section id =\"art\" class=\"articles\">
                        <article>
                            <h2> {{ article.title }}</h2>
                            <div class=\"metadata\"> ecrit le {{ article.publicationdate | date('Y/m/d')}}
                                a {{ article.publicationdate | date('H:i')}} dans la categorie scientifique </div>
                            <div class =\"content\">
                                <img src=\"{{ article.picture }} \" alt=\"\">
                                <P> voila le paragraphe de mon article</P>
                            </div>
                            <a href=\" {{ path('showArticle') }}\" class=\"btn btn-primary\">Lire la suite</a>
                        </article>
                </section>
            {% endfor %}
        </div>

        <div id=\"d_right\" >
                {% include 'accueil/message.html.twig' %}

            <div>
                {% include 'accueil/emergency.html.twig' %}
            </div>
        </div>
    </div>


{% endblock%}", "accueil/home.html.twig", "/Applications/MAMP/htdocs/wh/website-skeleton/templates/accueil/home.html.twig");
    }
}
