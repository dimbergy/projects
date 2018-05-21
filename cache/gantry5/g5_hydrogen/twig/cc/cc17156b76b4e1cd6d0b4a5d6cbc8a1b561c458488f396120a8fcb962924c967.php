<?php

/* __string_template__f6c626372c293472b4e3d9ee1f84fff62acf587974b632a48bad0210a5e82f5d */
class __TwigTemplate_d5bf8b5bd734404a351aecc0061c36936d1a5ba333043724b12c52f153b7d32d extends Twig_Template
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
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f6c626372c293472b4e3d9ee1f84fff62acf587974b632a48bad0210a5e82f5d";
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
        return new Twig_Source("", "__string_template__f6c626372c293472b4e3d9ee1f84fff62acf587974b632a48bad0210a5e82f5d", "");
    }
}
