<?php

/* SonataNewsBundle:Admin:inner_row_comment.html.twig */
class __TwigTemplate_88b9cb00cd0110f9fb9d91aa97076847d26118d9fd649a1e75d24473df059cb2 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_row($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 16
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "valid")) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 18
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "invalid")) {
            // line 19
            echo "        <span class=\"label label-important\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 20
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "moderate")) {
            // line 21
            echo "        <span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 23
            echo "        <span class=\"label\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "name", array(), "array"));
        echo " -
    ";
        // line 27
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "url", array(), "array"));
        echo " -
    ";
        // line 28
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "email", array(), "array"));
        echo " <br />

    <small>
        ";
        // line 31
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "message", array(), "array"));
        echo "
    </small>

";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Admin:inner_row_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  81 => 28,  77 => 27,  73 => 26,  70 => 25,  64 => 23,  58 => 21,  56 => 20,  51 => 19,  49 => 18,  44 => 17,  42 => 16,  39 => 15,  36 => 14,  11 => 12,);
    }
}
