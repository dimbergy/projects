<?php

/* __string_template__4642ab1dd25296dc2086cdd89cc9002ca9fc3ac5f8375a9b8c29aebb4b176a1f */
class __TwigTemplate_f223f1f4eb043c0508eb77f413c1bcb97c71f0b524abf7a976b33c540626a9fe extends Twig_Template
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
<button class=\"until\">Until then...</button>
<a href=\"#registration\" data-uk-modal=\"{center:true}\">
<button class=\"touch\">...let's keep in touch</button></a>
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
        return "__string_template__4642ab1dd25296dc2086cdd89cc9002ca9fc3ac5f8375a9b8c29aebb4b176a1f";
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
        return new Twig_Source("", "__string_template__4642ab1dd25296dc2086cdd89cc9002ca9fc3ac5f8375a9b8c29aebb4b176a1f", "");
    }
}
