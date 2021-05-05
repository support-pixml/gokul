<?php

/* journal3/template/journal3/module/blog_tags.twig */
class __TwigTemplate_286769a30670a06985050e4b3baca7873fb27a47df493a6e1f1c4993093130b0 extends Twig_Template
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
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  ";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 5
        echo "  <div class=\"module-body\">
    <div class=\"tags\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "        <a href=\"";
            echo $this->getAttribute($context["item"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "name", array());
            echo "</a><b>,</b>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  40 => 8,  36 => 7,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*     <div class="tags">*/
/*       {% for item in items %}*/
/*         <a href="{{ item.href }}">{{ item.name }}</a><b>,</b>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
