<?php

/* partials/github_link.html.twig */
class __TwigTemplate_fd848b8fb4b8ef035ce921b4183c9c86e938cd419d03817c212dc65efb2ec4e0 extends Twig_Template
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
        echo "<a class=\"github-link\" href=\"";
        echo ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "tree", array()) . twig_replace_filter(("/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "filePathClean", array())), array("/user/" => "")));
        echo "\"><i class=\"fa fa-github-square\"></i> ";
        echo $this->env->getExtension('GravTwigExtension')->translate("THEME_LEARN2_GITHUB_EDIT_THIS_PAGE");
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "partials/github_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <a class="github-link" href="{{ theme_config.github.tree ~  ('/'~page.filePathClean)|replace({'/user/':''}) }}"><i class="fa fa-github-square"></i> {{ 'THEME_LEARN2_GITHUB_EDIT_THIS_PAGE'|t }}</a>*/
/* */
