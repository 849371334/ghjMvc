<?php

/* test.html */
class __TwigTemplate_7acedcdca6d757cefd4569b9c5f7de07393505df346c9ae60ed175f9fd103c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "test.html", 1);
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
        echo "<table>
    <tr>
        <td>111</td>
        <td>111</td>
    </tr>
    <tr>
        <td>2222</td>
        <td>2222</td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "test.html";
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
<table>
    <tr>
        <td>111</td>
        <td>111</td>
    </tr>
    <tr>
        <td>2222</td>
        <td>2222</td>
    </tr>
</table>
{% endblock  %}", "test.html", "E:\\b\\app\\views\\index\\test.html");
    }
}
