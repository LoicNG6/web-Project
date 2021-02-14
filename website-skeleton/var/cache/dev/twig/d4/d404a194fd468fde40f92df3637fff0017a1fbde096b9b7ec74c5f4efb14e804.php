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

/* accueil/message.html.twig */
class __TwigTemplate_2c8d20574886f541fbd9045927cf401a6f25a7d2df4726c8afbd3bb8b0992de2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/message.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <p> Write Here</p>


        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), 'row', ["attr" => ["placeholder" => "Name"]]);
        echo "

        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 11, $this->source); })()), "fist_name", [], "any", false, false, false, 11), 'row', ["attr" => ["placeholder" => "First Name"]]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Email"]]);
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 13, $this->source); })()), "date", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "Date"]]);
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), 'row', ["attr" => ["placeholder" => "Message"]]);
        echo "

        <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>

        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  78 => 9,  73 => 7,  68 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% form_theme formMessage 'bootstrap_4_layout.html.twig' %}
{% block body %}
        <p> Write Here</p>


        {{ form_start(formMessage) }}

        {{ form_row(formMessage.name,{'attr':{ 'placeholder':\"Name\"}}) }}

        {{ form_row(formMessage.fist_name,{'attr':{ 'placeholder': \"First Name\"}}) }}
        {{ form_row(formMessage.email,{'attr':{ 'placeholder': \"Email\"}}) }}
        {{ form_row(formMessage.date,{'attr':{ 'placeholder': \"Date\",}}) }}
        {{ form_row(formMessage.content,{'attr':{'placeholder': \"Message\"}} )}}

        <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>

        {{ form_end (formMessage) }}
{% endblock %}", "accueil/message.html.twig", "/Applications/MAMP/htdocs/wh/website-skeleton/templates/accueil/message.html.twig");
    }
}
