<?php

/* __string_template__56374110e6ebca96827893de64ca52a36ae87c6dc00a9c9446c73ac680b3a7a3 */
class __TwigTemplate_a3cffca0239d12460217a3d8afc43de518877692a5a8e5a94357128c4982d75f extends Twig_Template
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
{rsform 3}
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__56374110e6ebca96827893de64ca52a36ae87c6dc00a9c9446c73ac680b3a7a3";
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
        return new Twig_Source("", "__string_template__56374110e6ebca96827893de64ca52a36ae87c6dc00a9c9446c73ac680b3a7a3", "");
    }
}
