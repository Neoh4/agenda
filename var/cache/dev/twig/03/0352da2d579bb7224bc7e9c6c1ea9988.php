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

/* popup/content.html.twig */
class __TwigTemplate_89bbe802f330ed6391c806e3ffc8f21c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "popup/content.html.twig"));

        // line 2
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
<div class=\"agenda\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homeworks"]) || array_key_exists("homeworks", $context) ? $context["homeworks"] : (function () { throw new RuntimeError('Variable "homeworks" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["homework"]) {
            // line 6
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["homework"], "idProf", [], "any", false, false, false, 6) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "session", [], "any", false, false, false, 6), "get", ["user_name"], "method", false, false, false, 6))) {
                // line 7
                echo "            <div class=\"homework\">
                <div>
                    <h1>";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "name", [], "any", false, false, false, 9), "html", null, true);
                echo "</h1>
                    <h1>";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "idProf", [], "any", false, false, false, 10), "html", null, true);
                echo "</h1>
                </div>
                <p>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "description", [], "any", false, false, false, 12), "html", null, true);
                echo "</p>
                <p2>";
                // line 13
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "datelimite", [], "any", false, false, false, 13), "Y-m-d"), "html", null, true);
                echo "</p2>
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_homework", ["id" => twig_get_attribute($this->env, $this->source, $context["homework"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\"><button >Modifier</button></a>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_homework", ["id" => twig_get_attribute($this->env, $this->source, $context["homework"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\"><button >Supprimer</button></a>
            </div>
        ";
            }
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homework'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "popup/content.html.twig";
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
        return array (  92 => 19,  86 => 18,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  63 => 10,  59 => 9,  55 => 7,  52 => 6,  48 => 5,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/popup/content.html.twig #}

<link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
<div class=\"agenda\">
    {% for homework in homeworks %}
        {% if homework.idProf == app.session.get('user_name') %}
            <div class=\"homework\">
                <div>
                    <h1>{{ homework.name }}</h1>
                    <h1>{{ homework.idProf }}</h1>
                </div>
                <p>{{ homework.description }}</p>
                <p2>{{ homework.datelimite|date('Y-m-d') }}</p2>
                <a href=\"{{ path('edit_homework', { 'id': homework.id }) }}\"><button >Modifier</button></a>
                <a href=\"{{ path('delete_homework', { 'id': homework.id }) }}\"><button >Supprimer</button></a>
            </div>
        {% endif %}
    {% endfor %}
</div>", "popup/content.html.twig", "C:\\Users\\Neo\\Desktop\\fouadtir\\templates\\popup\\content.html.twig");
    }
}
