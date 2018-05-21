<?php

/* __string_template__e546479937cdd24f6869a9f17dbb7d68a6646c97be9b20e789daafc52a0121d7 */
class __TwigTemplate_e1af6d96835d6af85c796a5def994f05c5ca1f0cc4c6f8d5611f64850ca54d56 extends Twig_Template
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
        <h1>...let's keep in touch</h1>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e546479937cdd24f6869a9f17dbb7d68a6646c97be9b20e789daafc52a0121d7";
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
        return new Twig_Source("", "__string_template__e546479937cdd24f6869a9f17dbb7d68a6646c97be9b20e789daafc52a0121d7", "");
    }
}
