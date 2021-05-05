<?php

/* journal3/template/journal3/module/product_blocks_attributes.twig */
class __TwigTemplate_0f88e9e21a7db1cf7a5e6b9124f64b3bcbe2c6692b51046193bd7ece9beac09a extends Twig_Template
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
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 2
            echo "  <div id=\"tab-specification\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 6
                echo "                <thead>
                <tr>
                    <td colspan=\"2\"><strong>";
                // line 8
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                </tr>
                </thead>
                <tbody>
                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 13
                    echo "                    <tr>
                        <td>";
                    // line 14
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                        <td>";
                    // line 15
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                </tbody>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </table>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_blocks_attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  61 => 18,  52 => 15,  48 => 14,  45 => 13,  41 => 12,  34 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if attribute_groups %}*/
/*   <div id="tab-specification">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered">*/
/*             {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                     <tr>*/
/*                         <td>{{ attribute.name }}</td>*/
/*                         <td>{{ attribute.text }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
