<?php

/* journal3/js.twig */
class __TwigTemplate_17c9c6b49723c50c56ff66d0a89d018dd3242fe6f1bde98371d812bbc89ef526 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 2
            if (twig_test_iterable($context["value"])) {
                // line 3
                echo "window['_oc_";
                echo $context["key"];
                echo "'] = ";
                echo twig_jsonencode_filter($context["value"]);
                echo ";
";
            } elseif (preg_match("/^\\d+\$/",             // line 4
$context["value"])) {
                // line 5
                echo "window['_oc_";
                echo $context["key"];
                echo "'] = ";
                echo $context["value"];
                echo ";
";
            } else {
                // line 7
                echo "window['_oc_";
                echo $context["key"];
                echo "'] = '";
                echo $context["value"];
                echo "';
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\$('html').addClass('oc3');
";
    }

    public function getTemplateName()
    {
        return "journal3/js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  42 => 7,  34 => 5,  32 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for key, value in data %}*/
/* {% if value is iterable %}*/
/* window['_oc_{{ key }}'] = {{ value | json_encode }};*/
/* {% elseif value matches '/^\\d+$/' %}*/
/* window['_oc_{{ key }}'] = {{ value }};*/
/* {% else %}*/
/* window['_oc_{{ key }}'] = '{{ value }}';*/
/* {% endif %}*/
/* {% endfor %}*/
/* $('html').addClass('oc3');*/
/* */
