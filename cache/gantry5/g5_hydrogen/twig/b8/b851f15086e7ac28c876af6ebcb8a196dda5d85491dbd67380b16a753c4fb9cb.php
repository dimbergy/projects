<?php

/* __string_template__bac47ce00e2d76dfc7c86e963c38f83077d8553c33c780217ee69759e8b6f0a7 */
class __TwigTemplate_2fef69b4b629a5288d4586f83f9ec84b09df013a0d86e8a884a78fed71513058 extends Twig_Template
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
        echo "<div class=\"coming-soon uk-animation-scale-up uk-transform-origin-top-center uk-animation-10\">
<button>COMING SOON</button>
<a href=\"#registration\" data-uk-modal=\"{center:true}\">
<button class=\"touch\">Until then...</button></a>
</div>


<div id=\"registration\" class=\"uk-modal\">
    <div class=\"uk-modal-dialog uk-modal-dialog-lightbox\">
        <a href=\"\" class=\"uk-modal-close uk-close uk-close-alt\"></a>
        <img src=\"\" alt=\"\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__bac47ce00e2d76dfc7c86e963c38f83077d8553c33c780217ee69759e8b6f0a7";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__bac47ce00e2d76dfc7c86e963c38f83077d8553c33c780217ee69759e8b6f0a7", "");
    }
}
