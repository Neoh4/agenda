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

/* admin/classes.html.twig */
class __TwigTemplate_cf4b820a20ae3dc022f9a5f888017948 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/classes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/classes.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<head>
    <meta charset=\"UTF-8\">
    <title>Agenda</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    <script>
    var popupWindow;

    function openPopupAdd() {

        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
        }

        popupWindow = window.open(\"\", \"Add\", \"width=500,height=450\");
        
        var formHTML = `
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
            <div class=\"main\">
            <form id=\"addTeacherForm\">
                <label for=\"name\">Nom:</label><br>
                <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\"><br>
                <button class=\"button1\" type=\"submit\">Ajouter Classe</button>
            </form>
            </div>
        `;

        popupWindow.document.write(formHTML);

        popupWindow.document.getElementById(\"addTeacherForm\").onsubmit = function(event) {
            event.preventDefault();

            var formData = {
                name: popupWindow.document.getElementById(\"name\").value
            };

            fetch('/add-classe', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                console.log('Teacher added successfully.');
                window.location = \"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_classes");
        echo "\";
                popupWindow.close();
            })
            .catch(error => {
                console.error('Error adding teacher:', error);
            });
        };
    }
    </script>
    <script>
    function openPopupEdit(userId) {
        
        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
        }
        popupWindow = window.open(\"\", \"Edit User\", \"width=500,height=450\");

        fetch('/get-teacher/' + userId)
            .then(response => response.json())
            .then(userData => {
                popupWindow.document.write(`
                    <link rel=\"stylesheet\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
                    <div class=\"main\">
                    <form id=\"editUserForm\">
                        <label for=\"name\">Nom:</label><br>
                        <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\" value=\"\${userData.name}\"><br>
                        <label for=\"password\">Mot de passe:</label><br>
                        <input class=\"input1\" type=\"password\" id=\"password\" name=\"password\" value=\"\${userData.password}\"><br>
                        <button type=\"submit\">Enregistrer</button>
                    </form>
                    <div class=\"main\">
                `);

                popupWindow.document.getElementById(\"editUserForm\").onsubmit = function(event) {
                    event.preventDefault();

                    var formData = {
                        name: popupWindow.document.getElementById(\"name\").value,
                        password: popupWindow.document.getElementById(\"password\").value
                    };


                    fetch('/edit-teacher/' + userId, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(formData)
                    })
                    .then(response => {
                        console.log('User updated successfully.');
                        window.location = \"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_teachers");
        echo "\";
                        popupWindow.close();
                    })
                    .catch(error => {
                        console.error('Error updating user:', error);
                    });
                };
            })
            .catch(error => {
                console.error('Error fetching user data:', error);
            });
    }
</script>
<script>
    function deleteClasse(classId) {
        fetch(`/delete-classe/\${classId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (response.ok) {
                console.log('User deleted successfully.');
                window.location = \"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_classes");
        echo "\";
            } else {
                console.error('Failed to delete classe.');
            }
        })
        .catch(error => {
            console.error('Error deleting classe:', error);
        });
    }
</script>

</head>
<div class=\"applicationmain\">
        <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\"><button type=\"button\">Retour à la séléction</button></a>
        <a onclick=\"openPopupAdd()\"><button type=\"button\">Ajouter Classe</button></a>
        <div class=\"listmanagement\">
        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 139
            echo "            <div class=\"listcontainer\">
                <div class=\"username\">
                        <label class=\"label1\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 141), "html", null, true);
            echo "</label>
                </div>
                <div class=\"deletebutton\">
                <a href=\"#\" onclick=\"deleteClasse(";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 144), "html", null, true);
            echo ")\"><button type=\"button\">Supprimer ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "nom", [], "any", false, false, false, 144), "html", null, true);
            echo "</button></a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/classes.html.twig";
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
        return array (  240 => 148,  228 => 144,  222 => 141,  218 => 139,  214 => 138,  208 => 135,  192 => 122,  168 => 101,  135 => 71,  111 => 50,  80 => 22,  64 => 9,  59 => 6,  52 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/admin/dashboard.html.twig #}

{% extends 'base.html.twig' %}

{% block body %}
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

        popupWindow = window.open(\"\", \"Add\", \"width=500,height=450\");
        
        var formHTML = `
            <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
            <div class=\"main\">
            <form id=\"addTeacherForm\">
                <label for=\"name\">Nom:</label><br>
                <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\"><br>
                <button class=\"button1\" type=\"submit\">Ajouter Classe</button>
            </form>
            </div>
        `;

        popupWindow.document.write(formHTML);

        popupWindow.document.getElementById(\"addTeacherForm\").onsubmit = function(event) {
            event.preventDefault();

            var formData = {
                name: popupWindow.document.getElementById(\"name\").value
            };

            fetch('/add-classe', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                console.log('Teacher added successfully.');
                window.location = \"{{ path('manage_classes') }}\";
                popupWindow.close();
            })
            .catch(error => {
                console.error('Error adding teacher:', error);
            });
        };
    }
    </script>
    <script>
    function openPopupEdit(userId) {
        
        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
        }
        popupWindow = window.open(\"\", \"Edit User\", \"width=500,height=450\");

        fetch('/get-teacher/' + userId)
            .then(response => response.json())
            .then(userData => {
                popupWindow.document.write(`
                    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
                    <div class=\"main\">
                    <form id=\"editUserForm\">
                        <label for=\"name\">Nom:</label><br>
                        <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\" value=\"\${userData.name}\"><br>
                        <label for=\"password\">Mot de passe:</label><br>
                        <input class=\"input1\" type=\"password\" id=\"password\" name=\"password\" value=\"\${userData.password}\"><br>
                        <button type=\"submit\">Enregistrer</button>
                    </form>
                    <div class=\"main\">
                `);

                popupWindow.document.getElementById(\"editUserForm\").onsubmit = function(event) {
                    event.preventDefault();

                    var formData = {
                        name: popupWindow.document.getElementById(\"name\").value,
                        password: popupWindow.document.getElementById(\"password\").value
                    };


                    fetch('/edit-teacher/' + userId, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(formData)
                    })
                    .then(response => {
                        console.log('User updated successfully.');
                        window.location = \"{{ path('manage_teachers') }}\";
                        popupWindow.close();
                    })
                    .catch(error => {
                        console.error('Error updating user:', error);
                    });
                };
            })
            .catch(error => {
                console.error('Error fetching user data:', error);
            });
    }
</script>
<script>
    function deleteClasse(classId) {
        fetch(`/delete-classe/\${classId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (response.ok) {
                console.log('User deleted successfully.');
                window.location = \"{{ path('manage_classes') }}\";
            } else {
                console.error('Failed to delete classe.');
            }
        })
        .catch(error => {
            console.error('Error deleting classe:', error);
        });
    }
</script>

</head>
<div class=\"applicationmain\">
        <a href=\"{{ path('admin_dashboard') }}\"><button type=\"button\">Retour à la séléction</button></a>
        <a onclick=\"openPopupAdd()\"><button type=\"button\">Ajouter Classe</button></a>
        <div class=\"listmanagement\">
        {% for classe in classes %}
            <div class=\"listcontainer\">
                <div class=\"username\">
                        <label class=\"label1\">{{ classe.nom }}</label>
                </div>
                <div class=\"deletebutton\">
                <a href=\"#\" onclick=\"deleteClasse({{ classe.id }})\"><button type=\"button\">Supprimer {{ classe.nom }}</button></a>
                </div>
            </div>
        {% endfor %}
        </div>
</div>
{% endblock %}", "admin/classes.html.twig", "C:\\Users\\Neo\\Desktop\\fouadtir\\templates\\admin\\classes.html.twig");
    }
}
