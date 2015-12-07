<?php

/* SonataNewsBundle:Block:recent_comments.html.twig */
class __TwigTemplate_b017f85ec668db79b84872eff15e4b5e47b0802609c02efc905cb9439819858e extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"sonata-news-block-recent-comment panel panel-default\">
        ";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 16
            echo "            <div class=\"panel-heading\">
                <h3 class=\"panel-title sonata-news-block-recent-comment\"><i class=\"fa fa-comments fa-fw\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
            </div>
        ";
        }
        // line 20
        echo "
        <div class=\"panel-body\">
            ";
        // line 22
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the recent posts comments block.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 23
        echo "
            <div class=\"sonata-blog-post-container list-group\">
                ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 26
            echo "                    ";
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                // line 27
                echo "                        <a class=\"list-group-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_news_comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">
                            <span class=\"label label-";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass($context["comment"]), "html", null, true);
                echo "\">
                                ";
                // line 29
                if (($this->getAttribute($context["comment"], "status", array()) == twig_constant("Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_INVALID"))) {
                    // line 30
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_comment_invalid", array(), "SonataNewsBundle"), "html", null, true);
                    echo "
                                ";
                } elseif (($this->getAttribute(                // line 31
$context["comment"], "status", array()) == twig_constant("Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_VALID"))) {
                    // line 32
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_comment_valid", array(), "SonataNewsBundle"), "html", null, true);
                    echo "
                                ";
                } elseif (($this->getAttribute(                // line 33
$context["comment"], "status", array()) == twig_constant("Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_MODERATE"))) {
                    // line 34
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_comment_moderate", array(), "SonataNewsBundle"), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 36
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_unknown_status", array(), "SonataNewsBundle"), "html", null, true);
                    echo "
                                ";
                }
                // line 38
                echo "                            </span>&nbsp;

                            ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "message", array()), 30), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 43
                echo "                        <a class=\"list-group-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($this->getAttribute($context["comment"], "post", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "message", array()), 30), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 46
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                    <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_comment_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>

            ";
        // line 51
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
            // line 52
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_sonata_news_comment_list");
            echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_comments", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 54
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Block:recent_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 54,  144 => 52,  142 => 51,  138 => 49,  129 => 47,  124 => 46,  113 => 43,  105 => 40,  101 => 38,  95 => 36,  89 => 34,  87 => 33,  82 => 32,  80 => 31,  75 => 30,  73 => 29,  69 => 28,  64 => 27,  61 => 26,  56 => 25,  52 => 23,  48 => 22,  44 => 20,  38 => 17,  35 => 16,  33 => 15,  30 => 14,  27 => 13,  18 => 11,);
    }
}
