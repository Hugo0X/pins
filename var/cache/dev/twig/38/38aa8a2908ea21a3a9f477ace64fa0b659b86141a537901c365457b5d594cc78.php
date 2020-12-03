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

/* layouts/partials/_nav.html.twig */
class __TwigTemplate_ebfe8ed734ebb72139bfb27741a4245f90dcc072805e67135f2c58763f6cbaa5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-light bg-light mb-4\">
<div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Panterest</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample03\" aria-controls=\"navbarsExample03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarsExample03\">
    <ul class=\"navbar-nav ml-auto\">
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pins_create");
            echo "\">New Pin</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Account</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('js-logout-form').submit();\">Logout</a>
        </li>

    <form id=\"js-logout-form\" action=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" method=\"POST\" class=\"d-none\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("logout"), "html", null, true);
            echo "\">
    </form>
    ";
        } else {
            // line 25
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
        </li>
    ";
        }
        // line 32
        echo "    </ul>
  </div>
</div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  93 => 29,  87 => 26,  84 => 25,  78 => 22,  74 => 21,  62 => 12,  59 => 11,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-light bg-light mb-4\">
<div class=\"container\">
      <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Panterest</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample03\" aria-controls=\"navbarsExample03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarsExample03\">
    <ul class=\"navbar-nav ml-auto\">
    {% if app.user %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_pins_create') }}\">New Pin</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Account</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('js-logout-form').submit();\">Logout</a>
        </li>

    <form id=\"js-logout-form\" action=\"{{ path('app_logout') }}\" method=\"POST\" class=\"d-none\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('logout') }}\">
    </form>
    {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
        </li>
    {% endif %}
    </ul>
  </div>
</div>
</nav>", "layouts/partials/_nav.html.twig", "C:\\wamp64\\www\\pins\\templates\\layouts\\partials\\_nav.html.twig");
    }
}
