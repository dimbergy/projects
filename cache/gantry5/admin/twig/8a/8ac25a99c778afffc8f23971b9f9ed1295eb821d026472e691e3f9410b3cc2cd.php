<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_2e768ca0130c95aec24e06105e9965a06057ec8efe74662935f6f49c7f499416 extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_02f4b58ee22149904cb5e53ea8b0232d3c6df4c6d7d4b3622dcc924eea7cdd9e = ($context["php_version"] ?? null)) && is_string($__internal_f6c6aadf654ec557774763c742c9975108d322b71c16f8f667a520134edf0008 = "5.4") && ('' === $__internal_f6c6aadf654ec557774763c742c9975108d322b71c16f8f667a520134edf0008 || 0 === strpos($__internal_02f4b58ee22149904cb5e53ea8b0232d3c6df4c6d7d4b3622dcc924eea7cdd9e, $__internal_f6c6aadf654ec557774763c742c9975108d322b71c16f8f667a520134edf0008)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "C:\\xampp\\htdocs\\zoomin\\administrator\\components\\com_gantry5\\templates\\partials\\php_unsupported.html.twig");
    }
}
