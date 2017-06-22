<?php

/* layout.html */
class __TwigTemplate_1b65d152a05b6282fa5fd39ee21f0cdafaa119a18cf99f3723a68579b4e413eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'center' => array($this, 'block_center'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<body style=\"background-color: #c9f7db\">
<header>
    <center>
  <p><a href=\"\">这里用于测试: I am header  !</a></p>
    </center>
</header>
<center>
    <div>
        ";
        // line 11
        $this->displayBlock('center', $context, $blocks);
        // line 15
        echo "    </div>
</center>
</body>
<footer>
    <center>
    <p><a href=\"\">@2017-6</a></p>
    </center>
</footer>
</html>";
    }

    // line 11
    public function block_center($context, array $blocks = array())
    {
        // line 12
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  46 => 11,  34 => 15,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<body style=\"background-color: #c9f7db\">
<header>
    <center>
  <p><a href=\"\">这里用于测试: I am header  !</a></p>
    </center>
</header>
<center>
    <div>
        {% block center  %}


        {% endblock  %}
    </div>
</center>
</body>
<footer>
    <center>
    <p><a href=\"\">@2017-6</a></p>
    </center>
</footer>
</html>", "layout.html", "E:\\b\\app\\views\\index\\layout.html");
    }
}
