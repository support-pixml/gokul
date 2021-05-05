<?php

/* default/template/extension/module/oneall_widget.twig */
class __TwigTemplate_01b5ce0f9a2a74aa0529e5d538523eefac31d5a9f205c80032cae4dd520bba27 extends Twig_Template
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
        // line 2
        $context["oasl_container"] = ("oneall_social_login_" . twig_random($this->env, 99999, 9999999));
        // line 3
        echo "
";
        // line 5
        if ((twig_test_empty((isset($context["oasl_user_is_logged"]) ? $context["oasl_user_is_logged"] : null)) &&  !twig_test_empty((isset($context["oasl_subdomain"]) ? $context["oasl_subdomain"] : null)))) {
            // line 6
            echo "\t
\t";
            // line 7
            if ( !twig_test_empty((isset($context["oasl_heading_title"]) ? $context["oasl_heading_title"] : null))) {
                // line 8
                echo "\t\t<h3> ";
                echo (isset($context["oasl_heading_title"]) ? $context["oasl_heading_title"] : null);
                echo " </h3>
\t";
            }
            // line 9
            echo "                   
\t 

\t";
            // line 12
            if (((isset($context["oasl_display_modal"]) ? $context["oasl_display_modal"] : null) != "0")) {
                // line 13
                echo "\t\t<a id=\"";
                echo (isset($context["oasl_container"]) ? $context["oasl_container"] : null);
                echo "\" class=\"button\">";
                echo (isset($context["oasl_login_button"]) ? $context["oasl_login_button"] : null);
                echo "</a>
\t";
            } else {
                // line 14
                echo "  
\t\t<div id=\"";
                // line 15
                echo (isset($context["oasl_container"]) ? $context["oasl_container"] : null);
                echo "\"></div>
\t";
            }
            // line 16
            echo "  

\t";
            // line 19
            echo "\t<script type='text/javascript'>
\t\t/* OneAll Social Login - http://www.oneall.com/ */
\t\tvar _oneall = _oneall || [];
\t\t_oneall.push(['social_login', 'set_providers', ['";
            // line 22
            echo (isset($context["oasl_providers"]) ? $context["oasl_providers"] : null);
            echo "']]);
\t\t_oneall.push(['social_login', 'set_callback_uri', '";
            // line 23
            echo (isset($context["oasl_callback_uri"]) ? $context["oasl_callback_uri"] : null);
            echo "']);
\t\t
\t\t
\t\t";
            // line 26
            if (((isset($context["oasl_display_modal"]) ? $context["oasl_display_modal"] : null) != "0")) {
                // line 27
                echo "\t\t\t/* Modal Popup */
\t\t\t_oneall.push(['social_login', 'attach_onclick_popup_ui', '";
                // line 28
                echo (isset($context["oasl_container"]) ? $context["oasl_container"] : null);
                echo "']);\t\t
\t\t";
            } else {
                // line 29
                echo "  
\t\t\t/* Inline Display */
\t\t\t_oneall.push(['social_login', 'set_grid_size', 'x', '";
                // line 31
                echo (isset($context["oasl_grid_size_x"]) ? $context["oasl_grid_size_x"] : null);
                echo "']);
\t\t\t_oneall.push(['social_login', 'set_grid_size', 'y', '";
                // line 32
                echo (isset($context["oasl_grid_size_y"]) ? $context["oasl_grid_size_y"] : null);
                echo "']);
\t\t\t_oneall.push(['social_login', 'set_custom_css_uri', '";
                // line 33
                echo (isset($context["oasl_custom_css_uri"]) ? $context["oasl_custom_css_uri"] : null);
                echo "']);
\t\t\t_oneall.push(['social_login', 'do_render_ui', '";
                // line 34
                echo (isset($context["oasl_container"]) ? $context["oasl_container"] : null);
                echo "']);
\t\t";
            }
            // line 36
            echo "
\t\t
\t\t";
            // line 38
            if (((isset($context["oasl_deferred_loading"]) ? $context["oasl_deferred_loading"] : null) != "0")) {
                // line 39
                echo "\t\t\t/* Library Loader */
\t\t\tvar have_oa_lib = (have_oa_lib || false);
\t\t\t(function(){
\t\t\t\tif (!have_oa_lib){
\t\t\t\t\tvar lib = document.createElement('script');
\t\t\t\t\tlib.type = 'text/javascript'; lib.async = true;
\t\t\t\t\tlib.src = '//";
                // line 45
                echo (isset($context["oasl_subdomain"]) ? $context["oasl_subdomain"] : null);
                echo ".api.oneall.com/socialize/library.js';
\t\t\t\t\tvar node = document.getElementsByTagName('script')[0];
\t\t\t\t\tnode.parentNode.insertBefore(lib, node); have_oa_lib = true;
\t\t\t\t}
\t\t\t})();
\t\t";
            }
            // line 51
            echo "
\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/oneall_widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  124 => 45,  116 => 39,  114 => 38,  110 => 36,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 29,  84 => 28,  81 => 27,  79 => 26,  73 => 23,  69 => 22,  64 => 19,  60 => 16,  55 => 15,  52 => 14,  44 => 13,  42 => 12,  37 => 9,  31 => 8,  29 => 7,  26 => 6,  24 => 5,  21 => 3,  19 => 2,);
    }
}
/* {# Display widget in this container #}*/
/* {% set oasl_container = 'oneall_social_login_' ~ random(99999, 9999999) %}*/
/* */
/* {# Do not display for guests #}*/
/* {% if oasl_user_is_logged is empty and oasl_subdomain is not empty %}*/
/* 	*/
/* 	{% if oasl_heading_title is not empty %}*/
/* 		<h3> {{ oasl_heading_title }} </h3>*/
/* 	{% endif %}                   */
/* 	 */
/* */
/* 	{% if oasl_display_modal != "0" %}*/
/* 		<a id="{{ oasl_container }}" class="button">{{ oasl_login_button }}</a>*/
/* 	{% else %}  */
/* 		<div id="{{ oasl_container }}"></div>*/
/* 	{% endif %}  */
/* */
/* 	{# Plugin #}*/
/* 	<script type='text/javascript'>*/
/* 		/* OneAll Social Login - http://www.oneall.com/ *//* */
/* 		var _oneall = _oneall || [];*/
/* 		_oneall.push(['social_login', 'set_providers', ['{{ oasl_providers }}']]);*/
/* 		_oneall.push(['social_login', 'set_callback_uri', '{{ oasl_callback_uri }}']);*/
/* 		*/
/* 		*/
/* 		{% if oasl_display_modal != "0" %}*/
/* 			/* Modal Popup *//* */
/* 			_oneall.push(['social_login', 'attach_onclick_popup_ui', '{{ oasl_container }}']);		*/
/* 		{% else %}  */
/* 			/* Inline Display *//* */
/* 			_oneall.push(['social_login', 'set_grid_size', 'x', '{{ oasl_grid_size_x }}']);*/
/* 			_oneall.push(['social_login', 'set_grid_size', 'y', '{{ oasl_grid_size_y }}']);*/
/* 			_oneall.push(['social_login', 'set_custom_css_uri', '{{ oasl_custom_css_uri }}']);*/
/* 			_oneall.push(['social_login', 'do_render_ui', '{{ oasl_container }}']);*/
/* 		{% endif %}*/
/* */
/* 		*/
/* 		{% if oasl_deferred_loading != "0" %}*/
/* 			/* Library Loader *//* */
/* 			var have_oa_lib = (have_oa_lib || false);*/
/* 			(function(){*/
/* 				if (!have_oa_lib){*/
/* 					var lib = document.createElement('script');*/
/* 					lib.type = 'text/javascript'; lib.async = true;*/
/* 					lib.src = '//{{ oasl_subdomain }}.api.oneall.com/socialize/library.js';*/
/* 					var node = document.getElementsByTagName('script')[0];*/
/* 					node.parentNode.insertBefore(lib, node); have_oa_lib = true;*/
/* 				}*/
/* 			})();*/
/* 		{% endif %}*/
/* */
/* 	</script>*/
/* */
/* {% endif %}*/
/* */
