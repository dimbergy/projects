<?php

/* __string_template__c2888807f70c63935001c93746e00eea1ee7d06f9f02803a1261d74ae1ebdf2c */
class __TwigTemplate_2d1f157f9423d6caf22398f3cacafe10aacf2baa9e53430833655299663f61ba extends Twig_Template
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
        <a href=\"\" class=\"uk-modal-close uk-close uk-close-alt\"></a>
        <h2>...let's keep in touch</h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__c2888807f70c63935001c93746e00eea1ee7d06f9f02803a1261d74ae1ebdf2c";
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
        return new Twig_Source("", "__string_template__c2888807f70c63935001c93746e00eea1ee7d06f9f02803a1261d74ae1ebdf2c", "");
    }
}
