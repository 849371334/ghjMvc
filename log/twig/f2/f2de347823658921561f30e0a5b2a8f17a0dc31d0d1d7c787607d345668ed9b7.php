<?php

/* index.html */
class __TwigTemplate_c9417f39321a5849b33bd9fbe58d87115a0c274ba2f059c1d908765afc3c7b8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'center' => array($this, 'block_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_center($context, array $blocks = array())
    {
        // line 4
        echo "
<form action=\"/index/aaa\" method=\"post\">
    <input type=\"text\" name=\"name\">
    <input type=\"submit\" value=\"提交\">
</form>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block center  %}

<form action=\"/index/aaa\" method=\"post\">
    <input type=\"text\" name=\"name\">
    <input type=\"submit\" value=\"提交\">
</form>
{% endblock  %}", "index.html", "E:\\b\\app\\views\\index\\index.html");
    }
}
