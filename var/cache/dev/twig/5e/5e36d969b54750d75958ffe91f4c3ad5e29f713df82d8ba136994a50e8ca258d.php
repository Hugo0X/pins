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

/* pins/index.html.twig */
class __TwigTemplate_18f298d1f06676217a189a6f5100710b30f0f8133d446a8d3a2d1ecbbba6ccc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "pins/index.html.twig", 1);
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

        echo "Find all the best pins on earth";
        
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
        echo "
    ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["pins"]) || array_key_exists("pins", $context) ? $context["pins"] : (function () { throw new RuntimeError('Variable "pins" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            echo "    
        <h1 class=\"mb-4 text-center text-muted\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->pluralize(twig_length_filter($this->env, (isset($context["pins"]) || array_key_exists("pins", $context) ? $context["pins"] : (function () { throw new RuntimeError('Variable "pins" does not exist.', 8, $this->source); })())), "Pin"), "html", null, true);
            echo "</h1>
            
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["pins"]) || array_key_exists("pins", $context) ? $context["pins"] : (function () { throw new RuntimeError('Variable "pins" does not exist.', 10, $this->source); })()), 3));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 11
                echo "                <div class=\"row\">
                    ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pin"]) {
                    // line 13
                    echo "                        <div class=\"col-md-4\">
                            <article class=\"my-2 pin bg-white rounded shadow\">
                                <div class =\"mw-100 overflow-hidden rounded-top\">
                                    <a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pins_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pin"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(((twig_get_attribute($this->env, $this->source, $context["pin"], "imageName", [], "any", false, false, false, 17)) ? ($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["pin"])) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/defaultPicture.png"))), "squared_thumbnail_medium"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pin"], "title", [], "any", false, false, false, 17), "html", null, true);
                    echo "\"  class=\"w-100\"/>
                                    </a>
                                </div>                                
                                <h2 class=\"h5 pl-3 pt-3\"><a class=\"text-secondary text-decoration-none\" href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pins_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pin"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pin"], "title", [], "any", false, false, false, 20), "html", null, true);
                    echo "</a></h2>
                                ";
                    // line 22
                    echo "                                 <p class=\"pl-3 pb-3 text-muted h6\"><small>Submitted by ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pin"], "user", [], "any", false, false, false, 22), "fullName", [], "any", false, false, false, 22), "html", null, true);
                    echo " </small></p>
                                 ";
                    // line 29
                    echo "                            </article>
                        </div>    
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "    
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        <p class=\"mt-5 h1 text-center \">No pins yet. <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pins_create");
            echo "\">Be the first!</a></p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pins/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 35,  156 => 34,  148 => 31,  140 => 29,  135 => 22,  129 => 20,  121 => 17,  117 => 16,  112 => 13,  108 => 12,  105 => 11,  101 => 10,  96 => 8,  93 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title 'Find all the best pins on earth' %}
{% block body %}

    {% if pins|length > 0  %}
    
        <h1 class=\"mb-4 text-center text-muted\">{{ pluralize (pins|length, 'Pin')}}</h1>
            
            {% for row in pins|batch(3) %}
                <div class=\"row\">
                    {% for pin in row %}
                        <div class=\"col-md-4\">
                            <article class=\"my-2 pin bg-white rounded shadow\">
                                <div class =\"mw-100 overflow-hidden rounded-top\">
                                    <a href=\"{{ path('app_pins_show', {id: pin.id}) }}\">
                                        <img src=\"{{ (pin.imageName ? vich_uploader_asset(pin) : asset('build/images/defaultPicture.png')) | imagine_filter('squared_thumbnail_medium') }}\" alt=\"{{ pin.title }}\"  class=\"w-100\"/>
                                    </a>
                                </div>                                
                                <h2 class=\"h5 pl-3 pt-3\"><a class=\"text-secondary text-decoration-none\" href=\"{{ path('app_pins_show', {id: pin.id}) }}\">{{ pin.title }}</a></h2>
                                {# <p>{{ pin.description | u.truncate(10, '...') }}</p> #}
                                 <p class=\"pl-3 pb-3 text-muted h6\"><small>Submitted by {{ pin.user.fullName}} </small></p>
                                 {# <a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-pin-delete-form-{{ pin.id }}').submit();\" class=\"m-3 btn btn-danger\">&times; Delete</a>

                                 <form id=\"js-pin-delete-form-{{ pin.id }}\" action=\"{{ path('app_pins_delete', {'id': pin.id}) }}\" method=\"post\" style=\"display: none;\">
                                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('pin_deletion_' ~ pin.id) }}\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                </form> #}
                            </article>
                        </div>    
                    {% endfor %}    
                </div>
            {% endfor %}
    {% else %}
        <p class=\"mt-5 h1 text-center \">No pins yet. <a href=\"{{ path('app_pins_create') }}\">Be the first!</a></p>
    {% endif %}
{% endblock %}
", "pins/index.html.twig", "C:\\wamp64\\www\\pins\\templates\\pins\\index.html.twig");
    }
}
