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

/* default/index.html.twig */
class __TwigTemplate_c6ebd5b8d9e3271f9031f302b0b797ec extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Agenda</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
</head>
<body>
    <div class=\"main\">
        <div class=\"cadrant\">
            <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"chk\" aria-hidden=\"true\">Connexion</label>
                <input type=\"text\" name=\"username\" placeholder=\"Nom\" required=\"\">
                <input type=\"password\" name=\"password\" placeholder=\"Mot De Passe\" required=\"\">
                <button type=\"submit\">Connexion</button>
            </form>
        </div>
    </div>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return array (  56 => 13,  48 => 8,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/default/login.html.twig #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Agenda</title>
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
</head>
<body>
    <div class=\"main\">
        <div class=\"cadrant\">
            <form action=\"{{ path('login_check') }}\" method=\"post\">
                <label for=\"chk\" aria-hidden=\"true\">Connexion</label>
                <input type=\"text\" name=\"username\" placeholder=\"Nom\" required=\"\">
                <input type=\"password\" name=\"password\" placeholder=\"Mot De Passe\" required=\"\">
                <button type=\"submit\">Connexion</button>
            </form>
        </div>
    </div>
</body>
</html>", "default/index.html.twig", "C:\\Users\\Neo\\Desktop\\fouadtir\\templates\\default\\index.html.twig");
    }
}
