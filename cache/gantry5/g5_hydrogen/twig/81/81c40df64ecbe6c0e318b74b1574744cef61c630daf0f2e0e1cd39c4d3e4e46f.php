<?php

/* __string_template__36d4105f719e58261d87f51da5634937b68d86020d2aefcf8bfa44d58d615c33 */
class __TwigTemplate_30e8bc502b29d5c7b1ba62d552ee6a81afd3c7f6b9cc387354f77e985634d38a extends Twig_Template
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
        return "__string_template__36d4105f719e58261d87f51da5634937b68d86020d2aefcf8bfa44d58d615c33";
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
        return new Twig_Source("", "__string_template__36d4105f719e58261d87f51da5634937b68d86020d2aefcf8bfa44d58d615c33", "");
    }
}
