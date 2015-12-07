<?php

/* SonataPageBundle:PageAdmin:list_tab_menu.html.twig */
class __TwigTemplate_48950864927976a9f924bd3152598b4e4db19ddd9c8b2bab6d647c8bbe8968e2 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        echo "
<p>
    <div class=\"btn-group\">
        <a type=\"button\" class=\"btn ";
        // line 4
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "list")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => array("site" => array("value" => (($this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : null), "id", array()), "")) : ("")))))), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-list\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pages.list_mode", array(), "SonataPageBundle"), "html", null, true);
        echo "
        </a>
        <a type=\"button\" class=\"btn ";
        // line 7
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "tree")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tree"), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-sitemap\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pages.tree_mode", array(), "SonataPageBundle"), "html", null, true);
        echo "
        </a>
    </div>
</p>";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:list_tab_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  40 => 7,  35 => 5,  25 => 4,  19 => 1,);
    }
}
