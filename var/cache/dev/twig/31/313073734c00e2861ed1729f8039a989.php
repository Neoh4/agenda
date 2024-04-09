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

/* admin/teachers.html.twig */
class __TwigTemplate_390e79a089944efe6566d34f143a2779 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/teachers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/teachers.html.twig", 3);
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

    function openPopupAddTeacher() {

        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
            }

        popupWindow = window.open(\"\", \"Add Teacher\", \"width=500,height=450\");
        
        var formHTML = `
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
            <div class=\"main\">
            <form id=\"addTeacherForm\">
                <label for=\"name\">Nom:</label><br>
                <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\"><br>
                <label for=\"password\">Mot de passe:</label><br>
                <input class=\"input1\" type=\"password\" id=\"password\" name=\"password\"><br>
                <button class=\"button1\" type=\"submit\">Ajouter Professeur</button>
            </form>
            </div>
        `;

        popupWindow.document.write(formHTML);

        popupWindow.document.getElementById(\"addTeacherForm\").onsubmit = function(event) {
            event.preventDefault();

            var formData = {
                name: popupWindow.document.getElementById(\"name\").value,
                password: popupWindow.document.getElementById(\"password\").value
            };

            fetch('/add-teacher', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                console.log('Teacher added successfully.');
                window.location = \"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_teachers");
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
    function openPopupEditUser(userId) {
        
        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
        }
        popupWindow = window.open(\"\", \"Edit User\", \"width=500,height=450\");

        fetch('/get-teacher/' + userId)
            .then(response => response.json())
            .then(userData => {
                popupWindow.document.write(`
                    <link rel=\"stylesheet\" href=\"";
        // line 74
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
        // line 104
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
    function deleteUser(userId) {
        fetch(`/delete-user/\${userId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (response.ok) {
                console.log('User deleted successfully.');
                window.location = \"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manage_teachers");
        echo "\";
            } else {
                console.error('Failed to delete user.');
            }
        })
        .catch(error => {
            console.error('Error deleting user:', error);
        });
    }
</script>

</head>
<div class=\"applicationmain\">
        <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\"><button type=\"button\">Retour à la séléction</button></a>
        <a onclick=\"openPopupAddTeacher()\"><button type=\"button\">Ajouter Prof</button></a>
        <div class=\"listmanagement\">
        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersP"]) || array_key_exists("usersP", $context) ? $context["usersP"] : (function () { throw new RuntimeError('Variable "usersP" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 142
            echo "            <div class=\"listcontainer\">
                <div class=\"username\">
                        <label class=\"label1\">";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "name", [], "any", false, false, false, 144), "html", null, true);
            echo "</label>
                </div>
                <div class=\"deletebutton\">
                <a href=\"#\" onclick=\"openPopupEditUser(";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 147), "html", null, true);
            echo ")\"><button type=\"button\">Modifier ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "name", [], "any", false, false, false, 147), "html", null, true);
            echo "</button></a>
                <a href=\"#\" onclick=\"deleteUser(";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 148), "html", null, true);
            echo ")\"><button type=\"button\">Supprimer ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "name", [], "any", false, false, false, 148), "html", null, true);
            echo "</button></a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
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
        return "admin/teachers.html.twig";
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
        return array (  249 => 152,  237 => 148,  231 => 147,  225 => 144,  221 => 142,  217 => 141,  211 => 138,  195 => 125,  171 => 104,  138 => 74,  114 => 53,  80 => 22,  64 => 9,  59 => 6,  52 => 5,  35 => 3,);
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

    function openPopupAddTeacher() {

        if (popupWindow && !popupWindow.closed) {
                popupWindow.close();
            }

        popupWindow = window.open(\"\", \"Add Teacher\", \"width=500,height=450\");
        
        var formHTML = `
            <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
            <div class=\"main\">
            <form id=\"addTeacherForm\">
                <label for=\"name\">Nom:</label><br>
                <input class=\"input1\" type=\"text\" id=\"name\" name=\"name\"><br>
                <label for=\"password\">Mot de passe:</label><br>
                <input class=\"input1\" type=\"password\" id=\"password\" name=\"password\"><br>
                <button class=\"button1\" type=\"submit\">Ajouter Professeur</button>
            </form>
            </div>
        `;

        popupWindow.document.write(formHTML);

        popupWindow.document.getElementById(\"addTeacherForm\").onsubmit = function(event) {
            event.preventDefault();

            var formData = {
                name: popupWindow.document.getElementById(\"name\").value,
                password: popupWindow.document.getElementById(\"password\").value
            };

            fetch('/add-teacher', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                console.log('Teacher added successfully.');
                window.location = \"{{ path('manage_teachers') }}\";
                popupWindow.close();
            })
            .catch(error => {
                console.error('Error adding teacher:', error);
            });
        };
    }
    </script>
    <script>
    function openPopupEditUser(userId) {
        
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
    function deleteUser(userId) {
        fetch(`/delete-user/\${userId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (response.ok) {
                console.log('User deleted successfully.');
                window.location = \"{{ path('manage_teachers') }}\";
            } else {
                console.error('Failed to delete user.');
            }
        })
        .catch(error => {
            console.error('Error deleting user:', error);
        });
    }
</script>

</head>
<div class=\"applicationmain\">
        <a href=\"{{ path('admin_dashboard') }}\"><button type=\"button\">Retour à la séléction</button></a>
        <a onclick=\"openPopupAddTeacher()\"><button type=\"button\">Ajouter Prof</button></a>
        <div class=\"listmanagement\">
        {% for users in usersP %}
            <div class=\"listcontainer\">
                <div class=\"username\">
                        <label class=\"label1\">{{ users.name }}</label>
                </div>
                <div class=\"deletebutton\">
                <a href=\"#\" onclick=\"openPopupEditUser({{ users.id }})\"><button type=\"button\">Modifier {{ users.name }}</button></a>
                <a href=\"#\" onclick=\"deleteUser({{ users.id }})\"><button type=\"button\">Supprimer {{ users.name }}</button></a>
                </div>
            </div>
        {% endfor %}
        </div>
</div>
{% endblock %}", "admin/teachers.html.twig", "C:\\Users\\Neo\\Desktop\\fouadtir\\templates\\admin\\teachers.html.twig");
    }
}
