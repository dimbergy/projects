<?php

/* __string_template__14835dd126f804f14880afd75d265bf4933b0e04c7d1b28523ba29abc4a0eb84 */
class __TwigTemplate_52805d6afd77f17c9f7e1e747de1632192a8f26690bdfd751861e84deece3e34 extends Twig_Template
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
<button class=\"soon\">COMING SOON</button>
<a href=\"#registration\" data-uk-modal=\"{center:true}\">
<button class=\"touch\">Until then...</button></a>
</div>

<div id=\"registration\" class=\"uk-modal\">
<div class=\"uk-modal-dialog uk-modal-dialog-lightbox\">
<h2>...let's keep in touch</h2>
{rsform 3}</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__14835dd126f804f14880afd75d265bf4933b0e04c7d1b28523ba29abc4a0eb84";
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
        return new Twig_Source("", "__string_template__14835dd126f804f14880afd75d265bf4933b0e04c7d1b28523ba29abc4a0eb84", "");
    }
}
