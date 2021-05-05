<?php

/* journal3/template/product/product.twig */
class __TwigTemplate_f94691abe1465a3c44f3b76fed60631b481a0d7eeb6a3a313f9a57722e2b0509 extends Twig_Template
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
        $context["stylePrefix"] = (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["direction"] = (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "left") || ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "right"))) ? ("vertical") : ("horizontal"));
        // line 3
        $context["carousel"] = (((isset($context["direction"]) ? $context["direction"] : null) == "vertical") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesCarousel")), "method"));
        // line 4
        $context["carouselOptions"] = array("slidesPerView" => "auto", "spaceBetween" => (($this->getAttribute($this->getAttribute(        // line 6
(isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method"), 0)) : (0)), "direction" =>         // line 7
(isset($context["direction"]) ? $context["direction"] : null));
        // line 9
        $context["galleryOptions"] = array("thumbWidth" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.width"), "method"), "thumbConHeight" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.height"), "method"), "addClass" => "lg-product-images", "mode" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryMode")), "method"), "download" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryDownload")), "method"), "fullScreen" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryFullScreen")), "method"));
        // line 17
        $context["quickviewExpand"] = ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method") || ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method") > 0) && (isset($context["description"]) ? $context["description"] : null)) && (twig_length_filter($this->env, (isset($context["description"]) ? $context["description"] : null)) <= $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method"))))) ? ("no-expand") : (""));
        // line 18
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 19
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 20
            echo "<ul class=\"breadcrumb\">
  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</ul>
";
            // line 25
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
                // line 26
                echo "  <h1 class=\"title page-title\"><span>";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</span></h1>
";
            }
            // line 28
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
            echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 30
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
    <div id=\"content\" class=\"";
            // line 31
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">
      ";
        }
        // line 33
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 34
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 35
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method"))) {
                // line 36
                echo "          <h1 class=\"title page-title\">";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h1>
        ";
            }
            // line 38
            echo "      ";
        }
        // line 39
        echo "      ";
        $context["classes"] = (($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("out-of-stock" => (        // line 40
(isset($context["product_quantity"]) ? $context["product_quantity"] : null) <= 0), "has-countdown" =>         // line 41
(isset($context["date_end"]) ? $context["date_end"] : null), "has-zero-price" =>  !        // line 42
(isset($context["product_price_value"]) ? $context["product_price_value"] : null), "has-extra-button" =>         // line 43
(isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null))), "method") . " ") .         // line 44
(isset($context["product_exclude_classes"]) ? $context["product_exclude_classes"] : null));
        // line 45
        echo "      <div class=\"product-info ";
        echo (isset($context["classes"]) ? $context["classes"] : null);
        echo "\">
        ";
        // line 46
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 47
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 48
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo " position-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method");
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 49
            echo twig_jsonencode_filter($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "carousel", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getJs", array(), "method"), 1 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ImageCarouselStyle")), "method"), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method")) && (isset($context["carousel"]) ? $context["carousel"] : null)) && ((isset($context["direction"]) ? $context["direction"] : null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 50
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 52
            $context["gallery"] = array();
            // line 53
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "                    ";
                $context["gallery"] = twig_array_merge((isset($context["gallery"]) ? $context["gallery"] : null), array(0 => array("src" => $this->getAttribute($context["image"], "popup", array()), "thumb" => $this->getAttribute($context["image"], "galleryThumb", array()), "subHtml" => (isset($context["heading_title"]) ? $context["heading_title"] : null))));
                // line 55
                echo "                    <div class=\"swiper-slide\" ";
                if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo $this->getAttribute($context["loop"], "index0", array());
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 56
                echo $this->getAttribute($context["image"], "image", array());
                echo "\" ";
                if ($this->getAttribute($context["image"], "image2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["image"], "image", array());
                    echo " 1x, ";
                    echo $this->getAttribute($context["image"], "image2x", array());
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.height"), "method");
                echo "\"/>
                    </div>
                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 68
            if ((isset($context["product_labels"]) ? $context["product_labels"] : null)) {
                // line 69
                echo "                <div class=\"product-labels\">
                  ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_labels"]) ? $context["product_labels"] : null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 71
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo $this->getAttribute($context["label"], "display", array());
                    echo "\"><b>";
                    echo $this->getAttribute($context["label"], "label", array());
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                </div>
              ";
            }
            // line 75
            echo "            </div>
            ";
            // line 76
            if (((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method"))) {
                // line 77
                echo "              ";
                if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                    // line 78
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if (((isset($context["direction"]) ? $context["direction"] : null) == "vertical")) {
                        echo "style=\"width: ";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 79
                    if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 82
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                          <img src=\"";
                        // line 83
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" ";
                        if ($this->getAttribute($context["image"], "thumb2x", array())) {
                            echo "srcset=\"";
                            echo $this->getAttribute($context["image"], "thumb", array());
                            echo " 1x, ";
                            echo $this->getAttribute($context["image"], "thumb2x", array());
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                        </div>
                      ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 95
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 97
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                      <img src=\"";
                        // line 98
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                    </div>
                  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                </div>
              ";
                }
                // line 103
                echo "            ";
            }
            // line 104
            echo "          </div>
          ";
            // line 105
            if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                // line 106
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["gallery"]) ? $context["gallery"] : null)));
                echo "' data-options='";
                echo twig_jsonencode_filter((isset($context["galleryOptions"]) ? $context["galleryOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 108
            echo "          ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                // line 109
                echo "            ";
                if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array())) {
                    // line 110
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 111
                    echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array()));
                    echo "
            </div>
            ";
                }
                // line 114
                echo "          ";
            }
            // line 115
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "image")))) {
                // line 116
                echo "            <div class=\"description ";
                echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 119
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
                </div>
                ";
                // line 121
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                    // line 122
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 124
                echo "              </div>
            </div>
          ";
            }
            // line 127
            echo "          ";
            if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "image"))) {
                // line 128
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 129
                echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
                echo "</span>
              ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 131
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>
                ";
                    // line 132
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "<b>,</b>";
                    }
                    // line 133
                    echo "              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "            </div>
          ";
            }
            // line 136
            echo "        </div>
        ";
        }
        // line 138
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 140
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 141
            echo "          <div class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
          ";
            // line 142
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array())) {
                // line 143
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 144
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array()));
                echo "
          </div>
          ";
            }
            // line 147
            echo "          ";
        }
        // line 148
        echo "
          ";
        // line 149
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "top")))) {
            // line 150
            echo "            <div class=\"description ";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 153
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
                </div>
                ";
            // line 155
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 156
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 158
            echo "              </div>
            </div>
          ";
        }
        // line 161
        echo "
          ";
        // line 162
        if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "default"))) {
            // line 163
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 165
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                // line 166
                echo "                  ";
                if ((twig_length_filter($this->env, (isset($context["fixedqties"]) ? $context["fixedqties"] : null)) > 0)) {
                    // line 167
                    echo "                  <li class=\"product-stock ";
                    if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["stock"]) ? $context["stock"] : null);
                    echo " ";
                    echo $this->getAttribute($this->getAttribute((isset($context["fixedqties"]) ? $context["fixedqties"] : null), 0, array(), "array"), "title", array(), "array");
                    echo "</span></li>
                  ";
                } else {
                    // line 169
                    echo "                  <li class=\"product-stock ";
                    if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["stock"]) ? $context["stock"] : null);
                    echo "</span></li>
                  ";
                }
                // line 171
                echo "                ";
            }
            // line 172
            echo "                ";
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                // line 173
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                echo ":</b> <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
                ";
            }
            // line 175
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                // line 176
                echo "                  <li class=\"product-reward\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                echo ":</b> <span>";
                echo (isset($context["reward"]) ? $context["reward"] : null);
                echo "</span></li>
                ";
            }
            // line 178
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                // line 179
                echo "                  <li class=\"product-model\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                echo ":</b> <span>";
                echo (isset($context["model"]) ? $context["model"] : null);
                echo "</span></li>
                ";
            }
            // line 181
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                // line 182
                echo "                  <li class=\"product-weight\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                echo "</span></li>
                ";
            }
            // line 184
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                // line 185
                echo "                  <li class=\"product-dimension\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_length"]) ? $context["product_length"] : null);
                echo " x ";
                echo (isset($context["product_width"]) ? $context["product_width"] : null);
                echo " x ";
                echo (isset($context["product_height"]) ? $context["product_height"] : null);
                echo "</span></li>
                ";
            }
            // line 187
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                // line 188
                echo "                  <li class=\"product-sku\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                echo ":</b> <span> ";
                echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                echo "</span></li>
                ";
            }
            // line 190
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                // line 191
                echo "                  <li class=\"product-upc\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                echo "</span></li>
                ";
            }
            // line 193
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                // line 194
                echo "                  <li class=\"product-ean\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                echo "</span></li>
                ";
            }
            // line 196
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                // line 197
                echo "                  <li class=\"product-jan\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                echo "</span></li>
                ";
            }
            // line 199
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                // line 200
                echo "                  <li class=\"product-isbn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                echo "</span></li>
                ";
            }
            // line 202
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                // line 203
                echo "                  <li class=\"product-mpn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                echo "</span></li>
                ";
            }
            // line 205
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                // line 206
                echo "                  <li class=\"product-location\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_location"]) ? $context["product_location"] : null);
                echo "</span></li>
                ";
            }
            // line 208
            echo "              </ul>
              ";
            // line 209
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                // line 210
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 211
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">
                    ";
                // line 212
                if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                    // line 213
                    echo "                      <img src=\"";
                    echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                    echo "\" ";
                    if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                        echo "srcset=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo " 1x, ";
                        echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "\"/>
                    ";
                }
                // line 215
                echo "                    <span>";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 219
            echo "              ";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                // line 220
                echo "                <div class=\"custom-stats\">
                  ";
                // line 221
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                    // line 222
                    echo "                    <div class=\"product-sold\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                    echo "</b></div>
                  ";
                }
                // line 224
                echo "                  ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                    // line 225
                    echo "                    <div class=\"product-views\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                    echo "</b></div>
                  ";
                }
                // line 227
                echo "                </div>
              ";
            }
            // line 229
            echo "            </div>
          ";
        }
        // line 231
        echo "
          ";
        // line 232
        if (((isset($context["review_status"]) ? $context["review_status"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
            // line 233
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 236
                echo "                  ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 237
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 240
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 245
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 248
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
                <b>";
            // line 249
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "RatingSeparator")), "method");
            echo "</b>
                <a>";
            // line 250
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 254
        echo "
          ";
        // line 255
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) ? ("quickviewCountdown") : ("countdownStatus"))), "method"))) {
            // line 256
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 257
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method")) {
                // line 258
                echo "              <h5 class=\"countdown-title title\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method");
                echo "</h5>
              ";
            }
            // line 260
            echo "              <div class=\"countdown\" data-date=\"";
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 261
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownDay"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 262
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownHour"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 263
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownMin"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 264
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownSec"), "method");
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 268
        echo "
          ";
        // line 269
        if (((isset($context["price"]) ? $context["price"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method"))) {
            // line 270
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">
               ";
            // line 273
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 274
                echo "                 <div class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>
               ";
            } else {
                // line 276
                echo "                 <div class=\"product-price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 277
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>
               ";
            }
            // line 279
            echo "             </div>
             ";
            // line 280
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 281
                echo "               <div class=\"product-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</div>
             ";
            }
            // line 283
            echo "             ";
            if ((twig_length_filter($this->env, (isset($context["fixedqties"]) ? $context["fixedqties"] : null)) > 0)) {
                // line 284
                echo "             <div class=\"meter-per-price-group\">
               ";
                // line 285
                if ( !(isset($context["special"]) ? $context["special"] : null)) {
                    // line 286
                    echo "                 <div class=\"product-meter-per-price\" style=\"color:rgba(46, 175, 35, 1);\">";
                    echo (isset($context["price"]) ? $context["price"] : null);
                    echo " Per ";
                    echo $this->getAttribute($this->getAttribute((isset($context["fixedqties"]) ? $context["fixedqties"] : null), 0, array(), "array"), "title", array(), "array");
                    echo "</div>
               ";
                } else {
                    // line 288
                    echo "                 <div class=\"product-meter-per-price-new\" style=\"color:rgba(46, 175, 35, 1);\">";
                    echo (isset($context["special"]) ? $context["special"] : null);
                    echo " Per ";
                    echo $this->getAttribute($this->getAttribute((isset($context["fixedqties"]) ? $context["fixedqties"] : null), 0, array(), "array"), "title", array(), "array");
                    echo "</div>
                 <div class=\"product-meter-per-price-old\">";
                    // line 289
                    echo (isset($context["price"]) ? $context["price"] : null);
                    echo " Per ";
                    echo $this->getAttribute($this->getAttribute((isset($context["fixedqties"]) ? $context["fixedqties"] : null), 0, array(), "array"), "title", array(), "array");
                    echo "</div>
               ";
                }
                // line 291
                echo "             </div>
             ";
            }
            // line 293
            echo "             ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 294
                echo "               <div class=\"product-points\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</div>
             ";
            }
            // line 296
            echo "
             ";
            // line 297
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 298
                echo "               <div class=\"discounts\">
                 ";
                // line 299
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 300
                    echo "                   <div class=\"product-discount\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 302
                echo "               </div>
             ";
            }
            // line 304
            echo "           </div>
            ";
            // line 305
            if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "price"))) {
                // line 306
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 308
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                    // line 309
                    echo "                    ";
                    if ((twig_length_filter($this->env, (isset($context["fixedqties"]) ? $context["fixedqties"] : null)) > 0)) {
                        // line 310
                        echo "                    <li class=\"product-stock ";
                        if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                            echo "in-stock";
                        } else {
                            echo "out-of-stock";
                        }
                        echo "\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                        echo ":</b> <span>";
                        echo (isset($context["stock"]) ? $context["stock"] : null);
                        echo " ";
                        echo $this->getAttribute($this->getAttribute((isset($context["fixedqties"]) ? $context["fixedqties"] : null), 0, array(), "array"), "title", array(), "array");
                        echo "</span></li>
                    ";
                    } else {
                        // line 312
                        echo "                    <li class=\"product-stock ";
                        if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                            echo "in-stock";
                        } else {
                            echo "out-of-stock";
                        }
                        echo "\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                        echo ":</b> <span>";
                        echo (isset($context["stock"]) ? $context["stock"] : null);
                        echo "</span></li>
                    ";
                    }
                    // line 314
                    echo "                  ";
                }
                // line 315
                echo "                  ";
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                    // line 316
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                    echo ":</b> <a href=\"";
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</a></li>
                  ";
                }
                // line 318
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                    // line 319
                    echo "                    <li class=\"product-reward\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["reward"]) ? $context["reward"] : null);
                    echo "</span></li>
                  ";
                }
                // line 321
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                    // line 322
                    echo "                    <li class=\"product-model\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["model"]) ? $context["model"] : null);
                    echo "</span></li>
                  ";
                }
                // line 324
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                    // line 325
                    echo "                    <li class=\"product-weight\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                    echo "</span></li>
                  ";
                }
                // line 327
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                    // line 328
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_length"]) ? $context["product_length"] : null);
                    echo " x ";
                    echo (isset($context["product_width"]) ? $context["product_width"] : null);
                    echo " x ";
                    echo (isset($context["product_height"]) ? $context["product_height"] : null);
                    echo "</span></li>
                  ";
                }
                // line 330
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                    // line 331
                    echo "                    <li class=\"product-sku\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                    echo ":</b> <span> ";
                    echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                    echo "</span></li>
                  ";
                }
                // line 333
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                    // line 334
                    echo "                    <li class=\"product-upc\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                    echo "</span></li>
                  ";
                }
                // line 336
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                    // line 337
                    echo "                    <li class=\"product-ean\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                    echo "</span></li>
                  ";
                }
                // line 339
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                    // line 340
                    echo "                    <li class=\"product-jan\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                    echo "</span></li>
                  ";
                }
                // line 342
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                    // line 343
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                    echo "</span></li>
                  ";
                }
                // line 345
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                    // line 346
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                    echo "</span></li>
                  ";
                }
                // line 348
                echo "                  ";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                    // line 349
                    echo "                    <li class=\"product-location\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_location"]) ? $context["product_location"] : null);
                    echo "</span></li>
                  ";
                }
                // line 351
                echo "                </ul>
                ";
                // line 352
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                    // line 353
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 354
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">
                      ";
                    // line 355
                    if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                        // line 356
                        echo "                        <img src=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo "\" ";
                        if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                            echo "srcset=\"";
                            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                            echo " 1x, ";
                            echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                        echo "\"/>
                      ";
                    }
                    // line 358
                    echo "                      <span>";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 362
                echo "                ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                    // line 363
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 364
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                        // line 365
                        echo "                      <div class=\"product-sold\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                        echo "</b></div>
                    ";
                    }
                    // line 367
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                        // line 368
                        echo "                      <div class=\"product-views\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                        echo "</b></div>
                    ";
                    }
                    // line 370
                    echo "                  </div>
                ";
                }
                // line 372
                echo "              </div>
            ";
            }
            // line 374
            echo "          </div>
          ";
        }
        // line 376
        echo "
          ";
        // line 377
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 378
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 379
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 380
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 381
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 382
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushSelect")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 383
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 384
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 385
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 386
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 387
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 388
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 389
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 390
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 392
                    echo "              </select>
            </div>
            ";
                }
                // line 395
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 396
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushRadio")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 397
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 398
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 399
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 401
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 402
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 403
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 404
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 405
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 406
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 407
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                        </span>
                      ";
                        }
                        // line 410
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 413
                    echo " </div>
            </div>
            ";
                }
                // line 416
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 417
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo " ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushCheckbox")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 418
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 419
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 420
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 422
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 423
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 424
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 425
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                      ";
                        // line 426
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 427
                            echo "                        <span class=\"option-price\">(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")</span>
                      ";
                        }
                        // line 429
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 432
                    echo " </div>
            </div>
            ";
                }
                // line 435
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 436
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 437
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 438
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 441
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 442
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 443
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 444
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 447
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 448
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\">";
                    // line 449
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 450
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 451
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 454
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 455
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 456
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 458
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 464
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 465
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 466
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 468
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 474
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 475
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 476
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 478
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 484
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "          </div>
          ";
        }
        // line 487
        echo "
          ";
        // line 488
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 489
            echo "            <h3 class=\"title recurring-title\">";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 492
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 493
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 494
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 496
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 500
        echo "
          ";
        // line 501
        if (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) || ((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")))) {
            // line 502
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">
                ";
            // line 505
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                // line 506
                echo "                <div class=\"stepper\">
   ";
                // line 507
                if ((isset($context["fixedqties"]) ? $context["fixedqties"] : null)) {
                    // line 508
                    echo "                  <style>.product-info .button-group-page .stepper {width: 120px;}</style>
                  <select id=\"product-quantity\" name=\"quantity\" class=\"form-control\" style=\"padding:4px;width:100%;\">
                  ";
                    // line 510
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["fixedqties"]) ? $context["fixedqties"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["fixedqty"]) {
                        echo " ";
                        if ($this->getAttribute($context["fixedqty"], "value", array())) {
                            // line 511
                            echo "                  <option value=\"";
                            echo $this->getAttribute($context["fixedqty"], "value", array());
                            echo "\">";
                            echo (($this->getAttribute($context["fixedqty"], "value", array()) . " ") . $this->getAttribute($context["fixedqty"], "title", array()));
                            echo "</option>
                  ";
                        }
                        // line 512
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixedqty'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 513
                    echo "                  </select>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                    // line 514
                    echo (isset($context["product_id"]) ? $context["product_id"] : null);
                    echo "\" />
                  ";
                } else {
                    // line 516
                    echo "                  <label class=\"control-label\" for=\"product-quantity\">";
                    echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
                    echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                    // line 517
                    echo (isset($context["minimum"]) ? $context["minimum"] : null);
                    echo "\" data-minimum=\"";
                    echo (isset($context["minimum"]) ? $context["minimum"] : null);
                    echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                    // line 518
                    echo (isset($context["product_id"]) ? $context["product_id"] : null);
                    echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
";
                }
                // line 524
                echo "                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 525
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span>\" class=\"btn btn-cart\" ";
                if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipStatus")), "method"))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipPosition")), "method");
                    echo "\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" ";
                }
                echo "><span class=\"btn-text\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>
                ";
            }
            // line 527
            echo "                ";
            if (((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
                // line 528
                echo "                  <div class=\"extra-group\">
                    ";
                // line 529
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 530
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "-extra\" ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Extra") . $this->getAttribute($context["loop"], "index", array())) . "ButtonDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($context["extra_button"], "label", array());
                        echo "\" ";
                    }
                    echo " ";
                    if (($this->getAttribute($context["extra_button"], "action", array()) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    echo " ";
                    if ((($this->getAttribute($context["extra_button"], "action", array()) == "link") && $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array()))) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array());
                        echo "\" ";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["extra_button"], "link", array())), "method");
                        echo " data-product_id=\"";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span>\"><span class=\"btn-text\">";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span></a>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 532
                echo "                  </div>
                ";
            }
            // line 534
            echo "              </div>

              ";
            // line 536
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method"))) {
                // line 537
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 538
                if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                    // line 539
                    echo "                  ";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) {
                        // line 540
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 542
                    echo "
                  ";
                    // line 543
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) {
                        // line 544
                        echo "                  <a class=\"btn btn-compare\" ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></a>
                  ";
                    }
                    // line 546
                    echo "                ";
                }
                // line 547
                echo "                ";
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) {
                    // line 548
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo (isset($context["view_more_url"]) ? $context["view_more_url"] : null);
                    echo "\" target=\"_top\" ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                    echo "</span></a>
                ";
                }
                // line 550
                echo "              </div>
              ";
            }
            // line 552
            echo "            </div>
          </div>
          ";
        }
        // line 555
        echo "
          ";
        // line 556
        if ((((isset($context["minimum"]) ? $context["minimum"] : null) > 1) &&  !(isset($context["product_quantity"]) ? $context["product_quantity"] : null))) {
            // line 557
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
          ";
        }
        // line 559
        echo "
          ";
        // line 560
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 561
            echo "            ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "details", array())) {
                // line 562
                echo "                ";
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "details", array()));
                echo "
            ";
            }
            // line 564
            echo "          ";
        }
        // line 565
        echo "          </div>
          ";
        // line 566
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 567
            echo "          ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array())) {
                // line 568
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 569
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array()));
                echo "
          </div>
          ";
            }
            // line 572
            echo "          ";
        }
        // line 573
        echo "          ";
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "details"))) {
            // line 574
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 575
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
              ";
            // line 576
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 577
                echo "                <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>
                ";
                // line 578
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                // line 579
                echo "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 580
            echo "            </div>
          ";
        }
        // line 582
        echo "        </div>
      </div>
      ";
        // line 584
        if (((((isset($context["description"]) ? $context["description"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "default"))) {
            // line 585
            echo "        <div class=\"description ";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 588
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
            </div>
            ";
            // line 590
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 591
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 593
            echo "          </div>
        </div>
      ";
        }
        // line 596
        echo "      ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 597
            echo "        ";
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array())) {
                // line 598
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 599
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array()));
                echo "
        </div>
        ";
            }
            // line 602
            echo "      ";
        }
        // line 603
        echo "      ";
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "default"))) {
            // line 604
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 605
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
          ";
            // line 606
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 607
                echo "            <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>
            ";
                // line 608
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                // line 609
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 610
            echo "        </div>
      ";
        }
        // line 612
        echo "      ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 613
            echo "      ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>
    ";
            // line 614
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>
</div>
";
        }
        // line 617
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - 50 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items').removeClass('count-zero');
        } else {
          parent.\$('#cart-items').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 732
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 737
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 743
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 811
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 815
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - 100
      }, 200);
    }
  });
});
//--></script>
";
        // line 869
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 870
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/rich_snippets", 1 => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)), "method");
            echo "
";
        }
        // line 872
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2522 => 872,  2517 => 870,  2515 => 869,  2458 => 815,  2451 => 811,  2380 => 743,  2371 => 737,  2363 => 732,  2246 => 617,  2240 => 614,  2235 => 613,  2232 => 612,  2228 => 610,  2214 => 609,  2210 => 608,  2203 => 607,  2186 => 606,  2182 => 605,  2179 => 604,  2176 => 603,  2173 => 602,  2167 => 599,  2164 => 598,  2161 => 597,  2158 => 596,  2153 => 593,  2149 => 591,  2147 => 590,  2142 => 588,  2135 => 585,  2133 => 584,  2129 => 582,  2125 => 580,  2111 => 579,  2107 => 578,  2100 => 577,  2083 => 576,  2079 => 575,  2076 => 574,  2073 => 573,  2070 => 572,  2064 => 569,  2061 => 568,  2058 => 567,  2056 => 566,  2053 => 565,  2050 => 564,  2044 => 562,  2041 => 561,  2039 => 560,  2036 => 559,  2030 => 557,  2028 => 556,  2025 => 555,  2020 => 552,  2016 => 550,  2000 => 548,  1997 => 547,  1994 => 546,  1978 => 544,  1976 => 543,  1973 => 542,  1957 => 540,  1954 => 539,  1952 => 538,  1949 => 537,  1947 => 536,  1943 => 534,  1939 => 532,  1894 => 530,  1877 => 529,  1874 => 528,  1871 => 527,  1856 => 525,  1853 => 524,  1844 => 518,  1838 => 517,  1833 => 516,  1828 => 514,  1825 => 513,  1819 => 512,  1811 => 511,  1805 => 510,  1801 => 508,  1799 => 507,  1796 => 506,  1794 => 505,  1789 => 502,  1787 => 501,  1784 => 500,  1778 => 496,  1767 => 494,  1763 => 493,  1759 => 492,  1752 => 489,  1750 => 488,  1747 => 487,  1743 => 485,  1737 => 484,  1724 => 478,  1717 => 476,  1708 => 475,  1705 => 474,  1692 => 468,  1685 => 466,  1676 => 465,  1673 => 464,  1660 => 458,  1653 => 456,  1644 => 455,  1641 => 454,  1633 => 451,  1625 => 450,  1621 => 449,  1612 => 448,  1609 => 447,  1597 => 444,  1591 => 443,  1582 => 442,  1579 => 441,  1567 => 438,  1561 => 437,  1552 => 436,  1549 => 435,  1544 => 432,  1535 => 429,  1528 => 427,  1526 => 426,  1522 => 425,  1519 => 424,  1492 => 423,  1486 => 422,  1482 => 420,  1476 => 419,  1472 => 418,  1459 => 417,  1456 => 416,  1451 => 413,  1442 => 410,  1435 => 407,  1432 => 406,  1430 => 405,  1426 => 404,  1423 => 403,  1396 => 402,  1390 => 401,  1386 => 399,  1380 => 398,  1376 => 397,  1363 => 396,  1360 => 395,  1355 => 392,  1348 => 390,  1341 => 389,  1339 => 388,  1332 => 387,  1328 => 386,  1324 => 385,  1318 => 384,  1312 => 383,  1299 => 382,  1296 => 381,  1292 => 380,  1288 => 379,  1285 => 378,  1283 => 377,  1280 => 376,  1276 => 374,  1272 => 372,  1268 => 370,  1262 => 368,  1259 => 367,  1253 => 365,  1251 => 364,  1248 => 363,  1245 => 362,  1237 => 358,  1221 => 356,  1219 => 355,  1215 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1199 => 349,  1196 => 348,  1188 => 346,  1185 => 345,  1177 => 343,  1174 => 342,  1166 => 340,  1163 => 339,  1155 => 337,  1152 => 336,  1144 => 334,  1141 => 333,  1133 => 331,  1130 => 330,  1118 => 328,  1115 => 327,  1107 => 325,  1104 => 324,  1096 => 322,  1093 => 321,  1085 => 319,  1082 => 318,  1072 => 316,  1069 => 315,  1066 => 314,  1052 => 312,  1036 => 310,  1033 => 309,  1031 => 308,  1027 => 306,  1025 => 305,  1022 => 304,  1018 => 302,  1007 => 300,  1003 => 299,  1000 => 298,  998 => 297,  995 => 296,  987 => 294,  984 => 293,  980 => 291,  973 => 289,  966 => 288,  958 => 286,  956 => 285,  953 => 284,  950 => 283,  942 => 281,  940 => 280,  937 => 279,  932 => 277,  927 => 276,  921 => 274,  919 => 273,  914 => 270,  912 => 269,  909 => 268,  902 => 264,  898 => 263,  894 => 262,  890 => 261,  885 => 260,  879 => 258,  877 => 257,  874 => 256,  872 => 255,  869 => 254,  862 => 250,  858 => 249,  854 => 248,  850 => 246,  844 => 245,  837 => 240,  832 => 237,  829 => 236,  825 => 235,  821 => 233,  819 => 232,  816 => 231,  812 => 229,  808 => 227,  802 => 225,  799 => 224,  793 => 222,  791 => 221,  788 => 220,  785 => 219,  777 => 215,  761 => 213,  759 => 212,  755 => 211,  752 => 210,  750 => 209,  747 => 208,  739 => 206,  736 => 205,  728 => 203,  725 => 202,  717 => 200,  714 => 199,  706 => 197,  703 => 196,  695 => 194,  692 => 193,  684 => 191,  681 => 190,  673 => 188,  670 => 187,  658 => 185,  655 => 184,  647 => 182,  644 => 181,  636 => 179,  633 => 178,  625 => 176,  622 => 175,  612 => 173,  609 => 172,  606 => 171,  592 => 169,  576 => 167,  573 => 166,  571 => 165,  567 => 163,  565 => 162,  562 => 161,  557 => 158,  553 => 156,  551 => 155,  546 => 153,  539 => 150,  537 => 149,  534 => 148,  531 => 147,  525 => 144,  522 => 143,  520 => 142,  515 => 141,  513 => 140,  509 => 138,  505 => 136,  501 => 134,  487 => 133,  483 => 132,  476 => 131,  459 => 130,  455 => 129,  452 => 128,  449 => 127,  444 => 124,  440 => 122,  438 => 121,  433 => 119,  426 => 116,  423 => 115,  420 => 114,  414 => 111,  411 => 110,  408 => 109,  405 => 108,  397 => 106,  395 => 105,  392 => 104,  389 => 103,  385 => 101,  364 => 98,  359 => 97,  342 => 96,  339 => 95,  328 => 86,  299 => 83,  294 => 82,  277 => 81,  270 => 79,  259 => 78,  256 => 77,  254 => 76,  251 => 75,  247 => 73,  234 => 71,  230 => 70,  227 => 69,  225 => 68,  214 => 59,  179 => 56,  170 => 55,  167 => 54,  149 => 53,  147 => 52,  140 => 50,  130 => 49,  124 => 48,  121 => 47,  119 => 46,  114 => 45,  112 => 44,  111 => 43,  110 => 42,  109 => 41,  108 => 40,  106 => 39,  103 => 38,  97 => 36,  94 => 35,  92 => 34,  87 => 33,  82 => 31,  78 => 30,  73 => 28,  67 => 26,  65 => 25,  62 => 24,  51 => 22,  47 => 21,  44 => 20,  42 => 19,  38 => 18,  36 => 17,  34 => 15,  33 => 14,  32 => 13,  31 => 11,  30 => 10,  29 => 9,  27 => 7,  26 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set stylePrefix = j3.document.isPopup('quickview') ? 'quickviewPageStyle' : 'productPageStyle' %}*/
/* {% set direction = j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'left' or j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'right' ? 'vertical' : 'horizontal' %}*/
/* {% set carousel = direction == 'vertical' or j3.settings.get(stylePrefix ~ 'AdditionalImagesCarousel') %}*/
/* {% set carouselOptions = {*/
/*   slidesPerView: 'auto',*/
/*   spaceBetween: j3.settings.get(stylePrefix ~ 'AdditionalImagesSpacing')|default(0),*/
/*   direction: direction*/
/* } %}*/
/* {% set galleryOptions = {*/
/*   thumbWidth: j3.settings.get('image_dimensions_popup_thumb.width'),*/
/*   thumbConHeight: j3.settings.get('image_dimensions_popup_thumb.height'),*/
/*   addClass: 'lg-product-images',*/
/*   mode: j3.settings.get(stylePrefix ~ 'GalleryMode'),*/
/*   download: j3.settings.get(stylePrefix ~ 'GalleryDownload'),*/
/*   fullScreen: j3.settings.get(stylePrefix ~ 'GalleryFullScreen')*/
/* } %}*/
/* {% set quickviewExpand = not j3.settings.get('quickviewExpandButton') or (j3.settings.get('globalExpandCharactersLimit') > 0 and description and description|length <= j3.settings.get('globalExpandCharactersLimit')) ? 'no-expand': '' %}*/
/* {{ header }}*/
/* {% if not j3.document.isPopup() %}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ heading_title }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div id="product-product" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content" class="{{ class }}">*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if j3.settings.get('pageTitlePosition') == 'default' or j3.document.isPopup('quickview') %}*/
/*           <h1 class="title page-title">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% set classes = j3.classes({*/
/*         'out-of-stock': product_quantity <= 0,*/
/*         'has-countdown': date_end,*/
/*         'has-zero-price': not product_price_value,*/
/*         'has-extra-button': product_extra_buttons,*/
/*       }) ~ ' ' ~ product_exclude_classes %}*/
/*       <div class="product-info {{ classes }}">*/
/*         {% if not j3.document.isPopup('options') %}*/
/*         <div class="product-left">*/
/*           <div class="product-image direction-{{ direction }} position-{{ j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') }}">*/
/*             <div class="swiper main-image" data-options='{{ j3.carousel(j3.document.getJs(), stylePrefix ~ 'ImageCarouselStyle')|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') and carousel and direction == 'vertical' %}style="width: calc(100% - {{ j3.settings.get('image_dimensions_additional.width') }}px)"{% endif %}>*/
/*               <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% set gallery = [] %}*/
/*                   {% for image in images %}*/
/*                     {% set gallery = gallery|merge([{src: image.popup, thumb: image.galleryThumb, subHtml: heading_title}]) %}*/
/*                     <div class="swiper-slide" {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %} data-gallery=".lightgallery-product-images" data-index="{{ loop.index0 }}" {% endif %}>*/
/*                       <img src="{{ image.image }}" {% if image.image2x %}srcset="{{ image.image }} 1x, {{ image.image2x }} 2x"{% endif %} data-largeimg="{{ image.popup }}" alt="{{ heading_title }}" title="{{ heading_title }}" width="{{ j3.settings.get('image_dimensions_thumb.width') }}" height="{{ j3.settings.get('image_dimensions_thumb.height') }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-controls">*/
/*                 <div class="swiper-buttons">*/
/*                   <div class="swiper-button-prev"></div>*/
/*                   <div class="swiper-button-next"></div>*/
/*                 </div>*/
/*                 <div class="swiper-pagination"></div>*/
/*               </div>*/
/*               {% if product_labels %}*/
/*                 <div class="product-labels">*/
/*                   {% for id, label in product_labels %}*/
/*                     <span class="product-label product-label-{{ id }} product-label-{{ label.display }}"><b>{{ label.label }}</b></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') %}*/
/*               {% if carousel %}*/
/*                 <div class="swiper additional-images" data-options='{{ carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if direction == 'vertical' %}style="width: {{ j3.settings.get('image_dimensions_additional.width') }}px"{% endif %}>*/
/*                   <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                     <div class="swiper-wrapper">*/
/*                       {% for image in images %}*/
/*                         <div class="swiper-slide additional-image" data-index="{{ loop.index0 }}">*/
/*                           <img src="{{ image.thumb }}" {% if image.thumb2x %}srcset="{{ image.thumb }} 1x, {{ image.thumb2x }} 2x"{% endif %} alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="swiper-buttons">*/
/*                     <div class="swiper-button-prev"></div>*/
/*                     <div class="swiper-button-next"></div>*/
/*                   </div>*/
/*                   <div class="swiper-pagination"></div>*/
/*                 </div>*/
/*               {% else %}*/
/*                 <div class="additional-images">*/
/*                   {% for image in images %}*/
/*                     <div class="additional-image" data-index="{{ loop.index0 }}">*/
/*                       <img src="{{ image.thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %}*/
/*           <div class="lightgallery lightgallery-product-images" data-images='{{ gallery|json_encode|e }}' data-options='{{ galleryOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'></div>*/
/*           {% endif %}*/
/*           {% if not j3.document.isPopup('options') %}*/
/*             {% if product_blocks.image %}*/
/*             <div class="product-blocks blocks-image">*/
/*               {{ product_blocks.image|join }}*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'image') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'image') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="product-right">*/
/*           <div id="product" class="product-details">*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           <div class="title page-title">{{ heading_title }}</div>*/
/*           {% if product_blocks.top %}*/
/*           <div class="product-blocks blocks-top">*/
/*           {{ product_blocks.top|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/* */
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'top') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'default') %}*/
/*             <div class="product-stats">*/
/*               <ul class="list-unstyled">*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                   {% if fixedqties|length > 0 %}*/
/*                   <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }} {{ fixedqties[0]['title'] }}</span></li>*/
/*                   {% else %}*/
/*                   <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                   <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                   <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                   <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                   <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                   <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                   <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                   <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                   <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                   <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                   <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                   <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                   <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*               {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                 <div class="brand-image product-manufacturer">*/
/*                   <a href="{{ manufacturers }}">*/
/*                     {% if manufacturer_image %}*/
/*                       <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                     {% endif %}*/
/*                     <span>{{ manufacturer }}</span>*/
/*                   </a>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                 <div class="custom-stats">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                     <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                     <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if review_status and not j3.document.isPopup() %}*/
/*             <div class="rating rating-page">*/
/*               <div class="rating-stars">*/
/*                 {% for i in 1..5 %}*/
/*                   {% if rating < i %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>{% else %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star fa-stack-1x"></i>*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <div class="review-links">*/
/*                 <a>{{ reviews }}</a>*/
/*                 <b>{{ j3.settings.get(stylePrefix ~ 'RatingSeparator') }}</b>*/
/*                 <a>{{ text_write }}</a>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if date_end and j3.settings.get(j3.document.isPopup() ? 'quickviewCountdown' : 'countdownStatus') %}*/
/*             <div class="countdown-wrapper">*/
/*               {% if j3.settings.get(stylePrefix ~ 'CountdownText') %}*/
/*               <h5 class="countdown-title title">{{ j3.settings.get(stylePrefix ~ 'CountdownText') }}</h5>*/
/*               {% endif %}*/
/*               <div class="countdown" data-date="{{ date_end }}">*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownDay') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownHour') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownMin') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownSec') }}</span></div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if price and not j3.document.isPopup('options') %}*/
/*           <div class="product-price-group">*/
/*            <div class="price-wrapper">*/
/*              <div class="price-group">*/
/*                {% if not special %}*/
/*                  <div class="product-price">{{ price }}</div>*/
/*                {% else %}*/
/*                  <div class="product-price-new">{{ special }}</div>*/
/*                  <div class="product-price-old">{{ price }}</div>*/
/*                {% endif %}*/
/*              </div>*/
/*              {% if tax %}*/
/*                <div class="product-tax">{{ text_tax }} {{ tax }}</div>*/
/*              {% endif %}*/
/*              {% if fixedqties|length > 0 %}*/
/*              <div class="meter-per-price-group">*/
/*                {% if not special %}*/
/*                  <div class="product-meter-per-price" style="color:rgba(46, 175, 35, 1);">{{ price }} Per {{ fixedqties[0]['title'] }}</div>*/
/*                {% else %}*/
/*                  <div class="product-meter-per-price-new" style="color:rgba(46, 175, 35, 1);">{{ special }} Per {{ fixedqties[0]['title'] }}</div>*/
/*                  <div class="product-meter-per-price-old">{{ price }} Per {{ fixedqties[0]['title'] }}</div>*/
/*                {% endif %}*/
/*              </div>*/
/*              {% endif %}*/
/*              {% if points %}*/
/*                <div class="product-points">{{ text_points }} {{ points }}</div>*/
/*              {% endif %}*/
/* */
/*              {% if discounts %}*/
/*                <div class="discounts">*/
/*                  {% for discount in discounts %}*/
/*                    <div class="product-discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</div>*/
/*                  {% endfor %}*/
/*                </div>*/
/*              {% endif %}*/
/*            </div>*/
/*             {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'price') %}*/
/*               <div class="product-stats">*/
/*                 <ul class="list-unstyled">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                     {% if fixedqties|length > 0 %}*/
/*                     <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }} {{ fixedqties[0]['title'] }}</span></li>*/
/*                     {% else %}*/
/*                     <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                     {% endif %}*/
/*                   {% endif %}*/
/*                   {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                     <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                     <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                     <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                     <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                     <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                     <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                     <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                     <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                     <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                     <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                     <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                     <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                   {% endif %}*/
/*                 </ul>*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                   <div class="brand-image product-manufacturer">*/
/*                     <a href="{{ manufacturers }}">*/
/*                       {% if manufacturer_image %}*/
/*                         <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                       {% endif %}*/
/*                       <span>{{ manufacturer }}</span>*/
/*                     </a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                   <div class="custom-stats">*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                       <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                     {% endif %}*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                       <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if options %}*/
/*           <div class="product-options">*/
/*             <h3 class="options-title title">{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushSelect') %}push-option{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushRadio') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">*/
/*                           ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                         </span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushCheckbox') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">({{ option_value.price_prefix }}{{ option_value.price }})</span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if recurrings %}*/
/*             <h3 class="title recurring-title">{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if j3.settings.get('catalogCartStatus') or j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') or (product_extra_buttons and not j3.document.isPopup()) %}*/
/*           <div class="button-group-page">*/
/*             <div class="buttons-wrapper">*/
/*               <div class="stepper-group cart-group">*/
/*                 {% if j3.settings.get('catalogCartStatus') %}*/
/*                 <div class="stepper">*/
/*    {% if fixedqties %}*/
/*                   <style>.product-info .button-group-page .stepper {width: 120px;}</style>*/
/*                   <select id="product-quantity" name="quantity" class="form-control" style="padding:4px;width:100%;">*/
/*                   {% for fixedqty in fixedqties %} {% if fixedqty.value %}*/
/*                   <option value="{{ fixedqty.value }}">{{ fixedqty.value ~ ' ' ~ fixedqty.title }}</option>*/
/*                   {% endif %} {% endfor %}*/
/*                   </select>*/
/*                   <input id="product-id" type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                   {% else %}*/
/*                   <label class="control-label" for="product-quantity">{{ entry_qty }}</label>*/
/*                   <input id="product-quantity" type="text" name="quantity" value="{{ minimum }}" data-minimum="{{ minimum }}" class="form-control"/>*/
/*                   <input id="product-id" type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                   <span>*/
/*                   <i class="fa fa-angle-up"></i>*/
/*                   <i class="fa fa-angle-down"></i>*/
/*                 </span>*/
/* {% endif %}*/
/*                 </div>*/
/*                 <a id="button-cart" data-loading-text="<span class='btn-text'>{{ button_cart }}</span>" class="btn btn-cart" {% if (j3.settings.get(stylePrefix ~ 'CartDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CartTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-cart-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CartTooltipPosition') }}" title="{{ button_cart }}" {% endif %}><span class="btn-text">{{ button_cart }}</span></a>*/
/*                 {% endif %}*/
/*                 {% if product_extra_buttons and not j3.document.isPopup() %}*/
/*                   <div class="extra-group">*/
/*                     {% for id, extra_button in product_extra_buttons %}*/
/*                       <a class="btn btn-extra btn-extra-{{ id }} btn-{{ loop.index }}-extra" {% if (j3.settings.get(stylePrefix ~ 'Extra' ~ loop.index ~ 'ButtonDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'ExtraTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="extra-tooltip pp-extra-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'ExtraTooltipPosition') }}" title="{{ extra_button.label }}" {% endif %} {% if extra_button.action == 'quickbuy' %}data-quick-buy{% endif %} {% if extra_button.action == 'link' and extra_button.link.href %}href="{{ extra_button.link.href }}" {{ j3.linkAttrs(extra_button.link) }} data-product_id="{{ product_id }}"{% endif %} data-loading-text="<span class='btn-text'>{{ extra_button.label }}</span>"><span class="btn-text">{{ extra_button.label }}</span></a>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               {% if j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}*/
/*               <div class="wishlist-compare">*/
/*                 {% if not j3.document.isPopup('options') %}*/
/*                   {% if j3.settings.get('catalogWishlistStatus') %}*/
/*                   <a class="btn btn-wishlist" {% if (j3.settings.get(stylePrefix ~ 'WishlistDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'WishlistTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-wishlist-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'WishlistTooltipPosition') }}" title="{{ button_wishlist }}" {% endif %} onclick="parent.wishlist.add({{ product_id }});"><span class="btn-text">{{ button_wishlist }}</span></a>*/
/*                   {% endif %}*/
/* */
/*                   {% if j3.settings.get('catalogCompareStatus') %}*/
/*                   <a class="btn btn-compare" {% if (j3.settings.get(stylePrefix ~ 'CompareDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CompareTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-compare-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CompareTooltipPosition') }}" title="{{ button_compare }}" {% endif %} onclick="parent.compare.add({{ product_id }});"><span class="btn-text">{{ button_compare }}</span></a>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% if j3.document.isPopup('quickview') %}*/
/*                   <a class="btn btn-more-details" href="{{ view_more_url }}" target="_top" {% if (j3.settings.get(stylePrefix ~ 'MoreDetailsDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="more-details-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipPosition') }}" title="{{ j3.settings.get('quickviewExtraText') }}" {% endif %}><span class="btn-text">{{ j3.settings.get('quickviewExtraText') }}</span></a>*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if minimum > 1 and not product_quantity %}*/
/*             <div class="minimum alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*           {% endif %}*/
/* */
/*           {% if not j3.document.isPopup('options') %}*/
/*             {% if product_blocks.details %}*/
/*                 {{ product_blocks.details|join }}*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           {% if product_blocks.bottom %}*/
/*           <div class="product-blocks blocks-bottom">*/
/*             {{ product_blocks.bottom|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'details') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% if description and j3.document.isPopup('quickview') and j3.settings.get('quickviewDescription') and (j3.settings.get('quickviewDescriptionPosition') == 'default') %}*/
/*         <div class="description {{ quickviewExpand }}">*/
/*           <div class="expand-block">*/
/*             <div class="expand-content">*/
/*               {{ description }}*/
/*             </div>*/
/*             {% if j3.settings.get('quickviewExpandButton') %}*/
/*               <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if product_blocks.default %}*/
/*         <div class="product-blocks blocks-default">*/
/*           {{ product_blocks.default|join }}*/
/*         </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'default') %}*/
/*         <div class="tags">*/
/*           <span class="tags-title">{{ text_tags }}</span>*/
/*           {% for tag in tags %}*/
/*             <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*             {% if not loop.last %}<b>,</b>{% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup() %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart, [data-quick-buy]').on('click', function () {*/
/*   var $btn = $(this);*/
/*   $.ajax({*/
/*     url: 'index.php?route=checkout/cart/add',*/
/*     type: 'post',*/
/*     data: $(*/
/*       '#product .button-group-page input[type=\'text\'], #product .button-group-page input[type=\'hidden\'], #product .button-group-page input[type=\'radio\']:checked, #product .button-group-page input[type=\'checkbox\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +*/
/*       '#product .product-options input[type=\'text\'], #product .product-options input[type=\'hidden\'], #product .product-options input[type=\'radio\']:checked, #product .product-options input[type=\'checkbox\']:checked, #product .product-options select, #product .product-options textarea, ' +*/
/*       '#product select[name="recurring_id"]'*/
/*     ),*/
/*     dataType: 'json',*/
/*     beforeSend: function () {*/
/*       $('#button-cart').button('loading');*/
/*     },*/
/*     complete: function () {*/
/*       $('#button-cart').button('reset');*/
/*     },*/
/*     success: function (json) {*/
/*       $('.alert-dismissible, .text-danger').remove();*/
/*       $('.form-group').removeClass('has-error');*/
/* */
/*       if (json['error']) {*/
/*         if (json['error']['option']) {*/
/*           for (i in json['error']['option']) {*/
/*             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*             if (element.parent().hasClass('input-group')) {*/
/*               element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             } else {*/
/*               element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             }*/
/*           }*/
/*         }*/
/* */
/*         if (json['error']['recurring']) {*/
/*           $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*         }*/
/* */
/*         // Highlight any found errors*/
/*         $('.text-danger').parent().addClass('has-error');*/
/* */
/*         try {*/
/*           $('html, body').animate({ scrollTop: $('.form-group.has-error').offset().top - 50 }, 'slow');*/
/*         } catch (e) {*/
/*         }*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*         if ($('html').hasClass('popup-options')) {*/
/*           parent.$(".popup-options .popup-close").trigger('click');*/
/*         }*/
/* */
/*         if (json['notification']) {*/
/*           parent.show_notification(json['notification']);*/
/*         } else {*/
/*           parent.$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         parent.$('#cart-total').html(json['total']);*/
/*         parent.$('#cart-items').html(json['items_count']);*/
/* */
/*         if (json['items_count']) {*/
/*           parent.$('#cart-items').removeClass('count-zero');*/
/*         } else {*/
/*           parent.$('#cart-items').addClass('count-zero');*/
/*         }*/
/* */
/*         if (Journal['scrollToTop']) {*/
/*           parent.$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*         }*/
/* */
/*         parent.$('.cart-content ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*         if (window.location.href.indexOf('quick_buy=true') !== -1) {*/
/*           parent.location.href = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if ($btn.data('quick-buy') !== undefined) {*/
/*           location = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if (parent.window['_QuickCheckout']) {*/
/*           parent.window['_QuickCheckout'].save();*/
/*         }*/
/*       }*/
/*     },*/
/*     error: function (xhr, ajaxOptions, thrownError) {*/
/*       alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $(function () {*/
/*   $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function() {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function () {*/
/*   $('.review-links a').on('click', function () {*/
/*     var $review = $('#review');*/
/*     if ($review.length) {*/
/*       $('a[href="#' + $review.closest('.module-item').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.tab-pane').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.panel-collapse').attr('id') + '"]').trigger('click');*/
/* */
/*       $([document.documentElement, document.body]).animate({*/
/*         scrollTop: $review.offset().top - 100*/
/*       }, 200);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* {% if not j3.document.isPopup() %}*/
/* {{ j3.loadController('journal3/seo/rich_snippets', breadcrumbs) }}*/
/* {% endif %}*/
/* {{ footer }}*/
/* */
