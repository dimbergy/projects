<?php

/* @particles/fixed-header.html.twig */
class __TwigTemplate_08af0efc63a56cb01c138292986f0aac93ca031cb71bef3dc018a27eb4908295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/fixed-header.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", array())) {
            // line 5
            echo "        ";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
        <style type=\"text/css\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", array()));
            echo ".g-fixed-element {
                position: fixed;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 1003;
            }
        </style>
    ";
        }
    }

    // line 18
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", array())) {
            // line 20
            echo "        ";
            $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
            // line 21
            echo "        ";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
        ";
            // line 22
            if ($this->getAttribute(($context["particle"] ?? null), "cssselector", array())) {
                // line 23
                echo "            <script>
                (function(\$) {
                    \$(window).load(function() {
                        var stickyOffset = \$('";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", array()));
                echo "').offset().top;
                        var stickyContainerHeight = \$('";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", array()));
                echo "').height();

                        \$('";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", array()));
                echo "').wrap( \"<div class='g-fixed-container'><\\/div>\" );
                        \$('.g-fixed-container').css(\"height\", stickyContainerHeight);

                        ";
                // line 32
                if (((($this->getAttribute(($context["particle"] ?? null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", array()), "disable")) : ("disable")) == "disable")) {
                    // line 33
                    echo "                        \$(window).resize(function() {
                            if( \$(window).width() < 768 && \$('.g-fixed-container').length ) {
                                \$('";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", array()));
                    echo "').unwrap();
                            }

                            if( \$(window).width() > 767 && \$('.g-fixed-container').length == 0 ) {
                                \$('";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", array()));
                    echo "').wrap( \"<div class='g-fixed-container'><\\/div>\" );
                                \$('.g-fixed-container').css(\"height\", stickyContainerHeight);
                            }
                        });
                        ";
                }
                // line 44
                echo "
                        \$(window).scroll(function(){
                            var sticky = \$('";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", array()));
                echo "'),
                                scroll = \$(window).scrollTop();

                            if (scroll > stickyOffset ";
                // line 49
                if (((($this->getAttribute(($context["particle"] ?? null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", array()), "disable")) : ("disable")) == "disable")) {
                    echo "&& \$(window).width() > 767";
                }
                echo ") sticky.addClass('g-fixed-element');
                            else sticky.removeClass('g-fixed-element');

                            ";
                // line 52
                if ($this->getAttribute(($context["particle"] ?? null), "secondtrigger", array())) {
                    // line 53
                    echo "                                if (scroll >= ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "secondoffset", array()));
                    echo " ";
                    if (((($this->getAttribute(($context["particle"] ?? null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", array()), "disable")) : ("disable")) == "disable")) {
                        echo "&& \$(window).width() > 767";
                    }
                    echo ") sticky.addClass('g-fixed-second');
                                else sticky.removeClass('g-fixed-second');
                            ";
                }
                // line 56
                echo "                        });
                    });
                })(jQuery);
            </script>
        ";
            }
            // line 61
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/fixed-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 61,  143 => 56,  132 => 53,  130 => 52,  122 => 49,  116 => 46,  112 => 44,  104 => 39,  97 => 35,  93 => 33,  91 => 32,  85 => 29,  80 => 27,  76 => 26,  71 => 23,  69 => 22,  64 => 21,  61 => 20,  58 => 19,  55 => 18,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/fixed-header.html.twig", "C:\\xampp\\htdocs\\zoomin\\templates\\g5_hydrogen\\particles\\fixed-header.html.twig");
    }
}
