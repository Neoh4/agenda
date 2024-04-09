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

/* edithomework/edit.html.twig */
class __TwigTemplate_276952041ca572415a5f7d8daa48bd11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edithomework/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "edithomework/edit.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier Devoir";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    <div class=\"agenda\">
    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_homework", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["homework"]) || array_key_exists("homework", $context) ? $context["homework"] : (function () { throw new RuntimeError('Variable "homework" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\">
        <div>
            <label for=\"name\">Titre:</label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homework"]) || array_key_exists("homework", $context) ? $context["homework"] : (function () { throw new RuntimeError('Variable "homework" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        </div>
        <div>
            <label for=\"description\">Description:</label>
            <input id=\"description\" name=\"description\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homework"]) || array_key_exists("homework", $context) ? $context["homework"] : (function () { throw new RuntimeError('Variable "homework" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        </div>
        <div>
            <label for=\"datelimite\">Date Limite:</label>
            <input type=\"date\" id=\"datelimite\" name=\"datelimite\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homework"]) || array_key_exists("homework", $context) ? $context["homework"] : (function () { throw new RuntimeError('Variable "homework" does not exist.', 21, $this->source); })()), "datelimite", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
        echo "\"></input>
        </div>
        <button type=\"submit\">Sauvegarder</button>
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("popup_content");
        echo "\"><button>Annuler</button></a>
    </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "edithomework/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  105 => 24,  99 => 21,  92 => 17,  85 => 13,  79 => 10,  73 => 8,  66 => 7,  53 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/edithomework/edit.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Modifier Devoir{% endblock %}

{% block body %}
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    <div class=\"agenda\">
    <form action=\"{{ path('update_homework', {'id': homework.id}) }}\" method=\"post\">
        <div>
            <label for=\"name\">Titre:</label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"{{ homework.name }}\">
        </div>
        <div>
            <label for=\"description\">Description:</label>
            <input id=\"description\" name=\"description\" value=\"{{ homework.description }}\">
        </div>
        <div>
            <label for=\"datelimite\">Date Limite:</label>
            <input type=\"date\" id=\"datelimite\" name=\"datelimite\" value=\"{{ homework.datelimite|date('Y-m-d') }}\"></input>
        </div>
        <button type=\"submit\">Sauvegarder</button>
        <a href=\"{{ path('popup_content') }}\"><button>Annuler</button></a>
    </form>
    </div>
{% endblock %}", "edithomework/edit.html.twig", "C:\\Users\\Neo\\Desktop\\fouadtir\\templates\\edithomework\\edit.html.twig");
    }
}
