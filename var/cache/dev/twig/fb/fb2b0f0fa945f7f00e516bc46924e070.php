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

/* authenticated_page.html.twig */
class __TwigTemplate_3360c41299568788637e8d21ab1ac337 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated_page.html.twig"));

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
    <script> 
    var popupWindow;
    function openPopupAdd() {
        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
            }
    popupWindow = window.open(\"\", \"Add Homework\", \"width=500,height=450\");
    var formHTML = `
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        <form id=\"addHomeworkForm\" class=\"cadrant\"> 
            <label class=\"label1\" for=\"name\">Titre devoir:</label><br>
            <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\"><br>
            <label class=\"label1\" for=\"description\">Description devoir:</label><br>
            <input class=\"input1\" type=\"text\" id=\"description\" name=\"description\"><br>
            <label class=\"label1\" for=\"datelimite\">Date limite:</label><br>
            <input class=\"input1\" type=\"date\" id=\"datelimite\" name=\"datelimite\"><br>
            <input type=\"hidden\" id=\"userId\" name=\"id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", ["user_name"], "method", false, false, false, 25), "html", null, true);
        echo "\">
            <button type=\"submit\">Sauvegarder</button>
        </form>
    `;

    popupWindow.document.write(formHTML);

    popupWindow.document.getElementById(\"addHomeworkForm\").onsubmit = function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = {
            name: popupWindow.document.getElementById(\"name\").value,
            description: popupWindow.document.getElementById(\"description\").value,
            datelimite: popupWindow.document.getElementById(\"datelimite\").value,
            // Retrieve user ID from hidden input field
            id: popupWindow.document.getElementById(\"userId\").value
        };

        popupWindow.close();

        fetch('/add-homework', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            console.log('Homework added successfully.');
        })
        .catch(error => {
            console.error('Error adding homework:', error);
        });
    };
    }
    </script>
    <script>
        function openPopupDel(idProf) {
            if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
            }
            var popupUrl = \"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("popup_content");
        echo "\";
            popupWindow = window.open(popupUrl, \"Homework Popup\", \"width=600,height=500\");
        }
    </script>
</head>
<body>
    <div class=\"applicationmain\">
        <div class=\"user\">
            <label for=\"chk\" aria-hidden=\"true\">Bienvenue, ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "get", ["user_name"], "method", false, false, false, 74), "html", null, true);
        echo "</label>
            ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "get", ["user_status"], "method", false, false, false, 75) == "p")) {
            // line 76
            echo "            <button type=\"button\" onclick=\"openPopupAdd()\">Ajouter Devoir</button>
            <button type=\"button\" onclick=\"openPopupDel()\">Supprimer/Modifier Devoir</button>
            ";
        }
        // line 79
        echo "        </div>
        <div class=\"agenda\">
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homeworks"]) || array_key_exists("homeworks", $context) ? $context["homeworks"] : (function () { throw new RuntimeError('Variable "homeworks" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["homework"]) {
            // line 82
            echo "            <div class=\"homework\">
                <div>
                    <h1>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</h1>
                    <h1>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "idProf", [], "any", false, false, false, 85), "html", null, true);
            echo "</h1>
                </div>
                <p>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "description", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>
                <p2>";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homework"], "datelimite", [], "any", false, false, false, 88), "Y-m-d"), "html", null, true);
            echo "</p2>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homework'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </div>
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
        return "authenticated_page.html.twig";
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
        return array (  171 => 91,  162 => 88,  158 => 87,  153 => 85,  149 => 84,  145 => 82,  141 => 81,  137 => 79,  132 => 76,  130 => 75,  126 => 74,  115 => 66,  71 => 25,  60 => 17,  48 => 8,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/authenticated_page.html.twig #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Agenda</title>
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    <script> 
    var popupWindow;
    function openPopupAdd() {
        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
            }
    popupWindow = window.open(\"\", \"Add Homework\", \"width=500,height=450\");
    var formHTML = `
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
        <form id=\"addHomeworkForm\" class=\"cadrant\"> 
            <label class=\"label1\" for=\"name\">Titre devoir:</label><br>
            <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\"><br>
            <label class=\"label1\" for=\"description\">Description devoir:</label><br>
            <input class=\"input1\" type=\"text\" id=\"description\" name=\"description\"><br>
            <label class=\"label1\" for=\"datelimite\">Date limite:</label><br>
            <input class=\"input1\" type=\"date\" id=\"datelimite\" name=\"datelimite\"><br>
            <input type=\"hidden\" id=\"userId\" name=\"id\" value=\"{{ app.session.get('user_name') }}\">
            <button type=\"submit\">Sauvegarder</button>
        </form>
    `;

    popupWindow.document.write(formHTML);

    popupWindow.document.getElementById(\"addHomeworkForm\").onsubmit = function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = {
            name: popupWindow.document.getElementById(\"name\").value,
            description: popupWindow.document.getElementById(\"description\").value,
            datelimite: popupWindow.document.getElementById(\"datelimite\").value,
            // Retrieve user ID from hidden input field
            id: popupWindow.document.getElementById(\"userId\").value
        };

        popupWindow.close();

        fetch('/add-homework', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            console.log('Homework added successfully.');
        })
        .catch(error => {
            console.error('Error adding homework:', error);
        });
    };
    }
    </script>
    <script>
        function openPopupDel(idProf) {
            if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
            }
            var popupUrl = \"{{ path('popup_content') }}\";
            popupWindow = window.open(popupUrl, \"Homework Popup\", \"width=600,height=500\");
        }
    </script>
</head>
<body>
    <div class=\"applicationmain\">
        <div class=\"user\">
            <label for=\"chk\" aria-hidden=\"true\">Bienvenue, {{ app.session.get('user_name') }}</label>
            {% if app.session.get('user_status') == \"p\" %}
            <button type=\"button\" onclick=\"openPopupAdd()\">Ajouter Devoir</button>
            <button type=\"button\" onclick=\"openPopupDel()\">Supprimer/Modifier Devoir</button>
            {% endif %}
        </div>
        <div class=\"agenda\">
            {% for homework in homeworks %}
            <div class=\"homework\">
                <div>
                    <h1>{{ homework.name }}</h1>
                    <h1>{{ homework.idProf }}</h1>
                </div>
                <p>{{ homework.description }}</p>
                <p2>{{ homework.datelimite|date('Y-m-d') }}</p2>
            </div>
            {% endfor %}
        </div>
    </div>
</body>
</html>", "authenticated_page.html.twig", "C:\\Users\\Neo\\Desktop\\fouadtir\\templates\\authenticated_page.html.twig");
    }
}
