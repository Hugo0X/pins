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

/* pins/show.html.twig */
class __TwigTemplate_a9f76c64a60b0cec369a26b831ab0e82cc5b97751b42090421790c78436ddb7b extends Template
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
        // line 1
        return "layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/show.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "pins/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\"> 
        <div class=\"col-md-6 mx-auto\">
             <article class=\"pin bg-white rounded shadow\">
                    <div class =\"mw-100 overflow-hidden rounded-top\">                       
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(((twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 9, $this->source); })()), "imageName", [], "any", false, false, false, 9)) ? ($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 9, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/defaultPicture.png"))), "squared_thumbnail_medium"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "\"  class=\"w-100\"/>            
                    </div> 

                    <div class=\"p-3\">
                        <h1 class=\"h5 text-secondary text-decoration-none\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                        ";
        // line 15
        echo "                        <p class=\"text-muted h6\">
                        <small>Submitted <time datetime=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 16, $this->source); })()), "createdAt", [], "any", false, false, false, 16), "Y-m-d H:i:s"), "html", null, true);
        echo "\">";
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 16, $this->source); })()), "createdAt", [], "any", false, false, false, 16));
        echo "</time> by ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true);
        echo "  </small>
                        </p>
                        <p class=\"pt-3 text-break\" >
                            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "
                        </p>

                        <div class=\"pt-3\">
                            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pins_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"btn btn-light\">Edit</a>
                            <a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-pin-delete-form').submit();\" class=\"btn btn-light\">Delete</a>

                            <form id=\"js-pin-delete-form\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pins_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" methode=\"post\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("pin_deletion_" . twig_get_attribute($this->env, $this->source, (isset($context["pin"]) || array_key_exists("pin", $context) ? $context["pin"] : (function () { throw new RuntimeError('Variable "pin" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27))), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            </form>
                        </div>
                    </div>

                 
            </article>

            
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pins/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 27,  133 => 26,  127 => 23,  120 => 19,  110 => 16,  107 => 15,  103 => 13,  94 => 9,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title pin.title  %}
{% block body %}
    <div class=\"row\"> 
        <div class=\"col-md-6 mx-auto\">
             <article class=\"pin bg-white rounded shadow\">
                    <div class =\"mw-100 overflow-hidden rounded-top\">                       
                        <img src=\"{{ (pin.imageName ? vich_uploader_asset(pin) : asset('build/images/defaultPicture.png')) | imagine_filter('squared_thumbnail_medium') }}\" alt=\"{{ pin.title }}\"  class=\"w-100\"/>            
                    </div> 

                    <div class=\"p-3\">
                        <h1 class=\"h5 text-secondary text-decoration-none\">{{ pin.title }}</h1>
                        {# <p>{{ pin.description | u.truncate(10, '...') }}</p> #}
                        <p class=\"text-muted h6\">
                        <small>Submitted <time datetime=\"{{ pin.createdAt |date('Y-m-d H:i:s') }}\">{{ pin.createdAt | ago}}</time> by {{ pin.user.fullName}}  </small>
                        </p>
                        <p class=\"pt-3 text-break\" >
                            {{ pin.description}}
                        </p>

                        <div class=\"pt-3\">
                            <a href=\"{{ path('app_pins_edit', {id: pin.id})}}\" class=\"btn btn-light\">Edit</a>
                            <a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-pin-delete-form').submit();\" class=\"btn btn-light\">Delete</a>

                            <form id=\"js-pin-delete-form\" action=\"{{ path('app_pins_delete', {id: pin.id}) }}\" methode=\"post\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('pin_deletion_' ~ pin.id) }}\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            </form>
                        </div>
                    </div>

                 
            </article>

            
        </div>
    </div>
{% endblock %}", "pins/show.html.twig", "C:\\wamp64\\www\\pins\\templates\\pins\\show.html.twig");
    }
}
