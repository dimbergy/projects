<?php

/* __string_template__6c5cf31287362a955ef0b4cfb0557d868505e85fcea86e502064fef329a1fb44 */
class __TwigTemplate_23ef58b84143caaf238c131c775485b11da232cd63b3f10fa14882550176554d extends Twig_Template
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
        <p>...let's keep in touch</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__6c5cf31287362a955ef0b4cfb0557d868505e85fcea86e502064fef329a1fb44";
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
        return new Twig_Source("", "__string_template__6c5cf31287362a955ef0b4cfb0557d868505e85fcea86e502064fef329a1fb44", "");
    }
}
