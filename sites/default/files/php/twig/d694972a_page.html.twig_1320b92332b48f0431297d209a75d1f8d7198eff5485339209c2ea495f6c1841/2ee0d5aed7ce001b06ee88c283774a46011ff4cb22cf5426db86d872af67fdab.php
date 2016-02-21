<?php

/* themes/dcmanila/templates/page.html.twig */
class __TwigTemplate_8b2d37a09016a18fbd20dbc0fb5b3c13c1efc50312fef677c2e3cb86524de534 extends Twig_Template
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
        $tags = array("if" => 65, "spaceless" => 172);
        $filters = array("t" => 123, "date" => 228);
        $functions = array("path" => 123);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
                array('t', 'date'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 65
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_header", array())) {
            // line 66
            echo "  <header class=\"header-top\">
   \t<div class=\"row inner-header-top\">
      <div class=\"small-5 medium-5 large-5 columns\">
\t  \t";
            // line 69
            if (((isset($context["linked_site_name"]) ? $context["linked_site_name"] : null) || (isset($context["linked_logo"]) ? $context["linked_logo"] : null))) {
                // line 70
                echo "        ";
                if ((isset($context["linked_logo"]) ? $context["linked_logo"] : null)) {
                    // line 71
                    echo "          ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_logo"]) ? $context["linked_logo"] : null), "html", null, true));
                    echo "
        ";
                }
                // line 73
                echo "        
        ";
                // line 74
                if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
                    // line 75
                    echo "          <h1 id=\"site-name\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_site_name"]) ? $context["linked_site_name"] : null), "html", null, true));
                    echo "</h1>
        ";
                } else {
                    // line 77
                    echo "          <div id=\"site-name\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_site_name"]) ? $context["linked_site_name"] : null), "html", null, true));
                    echo "</div>
        ";
                }
                // line 79
                echo "      </div>
    ";
            }
            // line 81
            echo "    </div>
  </header>
";
        }
        // line 84
        echo "
<section class=\"off-canvas-wrap\" data-offcanvas>


  <div class=\"inner-wrap\">
    <aside class=\"left-off-canvas-menu\">
      ";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <aside class=\"right-off-canvas-menu\">
      ";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_off_canvas", array()), "html", null, true));
        echo "
    </aside>

      ";
        // line 97
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array())) {
            // line 98
            echo "        ";
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 99
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 102
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array()), "html", null, true));
            echo "
        ";
            // line 103
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 104
                echo "            </div>
          </div>
        ";
            }
            // line 107
            echo "      ";
        }
        // line 108
        echo "

      ";
        // line 110
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 111
            echo "        <div class=\"row\">
          <div class=\"large-12 columns\">
            ";
            // line 113
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 117
        echo "
      <div class=\"row\">
        ";
        // line 119
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 120
            echo "          <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) ? ("large-6") : ("large-4 columns large-offset-8"))));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 122
            if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
                // line 123
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.page")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("My Account")));
                echo "</a>
                <a href=\"";
                // line 124
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.logout")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Logout")));
                echo "</a>
              ";
            } else {
                // line 126
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
                echo "</a>
                <a href=\"";
                // line 127
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
                echo "</a>
              ";
            }
            // line 129
            echo "            </p>
          </div>
        ";
        }
        // line 132
        echo "        ";
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 133
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 137
        echo "        ";
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 138
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 141
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 151
        echo "      </div>

      ";
        // line 153
        if (((isset($context["messages"]) ? $context["messages"] : null) &&  !(isset($context["zurb_foundation_messages_modal"]) ? $context["zurb_foundation_messages_modal"] : null))) {
            // line 154
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 156
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 160
        echo "
      ";
        // line 161
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 162
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 164
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 168
        echo "
      <div class=\"row\">
        <div id=\"main\" class=\"";
        // line 170
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid"]) ? $context["main_grid"] : null), "html", null, true));
        echo " columns\">
          ";
        // line 171
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 172
            echo "            ";
            ob_start();
            // line 173
            echo "              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 175
            echo "          ";
        }
        // line 176
        echo "          <a id=\"main-content\"></a>
          ";
        // line 177
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo " ";
        }
        // line 178
        echo "          ";
        if (((isset($context["title"]) ? $context["title"] : null) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 179
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
            <h1 id=\"page-title\" class=\"title\">";
            // line 180
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
            ";
            // line 181
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
          ";
        }
        // line 183
        echo "
          ";
        // line 184
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 185
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
            ";
            // line 186
            if ((isset($context["tabs2"]) ? $context["tabs2"] : null)) {
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs2"]) ? $context["tabs2"] : null), "html", null, true));
                echo " ";
            }
            // line 187
            echo "          ";
        }
        // line 188
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 189
            echo "            <ul class=\"action-links\">
              ";
            // line 190
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "
            </ul>
          ";
        }
        // line 193
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 195
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 196
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_grid"]) ? $context["sidebar_first_grid"] : null), "html", null, true));
            echo " columns sidebar \">
            ";
            // line 197
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 200
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 201
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_sec_grid"]) ? $context["sidebar_sec_grid"] : null), "html", null, true));
            echo " columns sidebar\">
            ";
            // line 202
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 205
        echo "      </div>
      ";
        // line 206
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()))) {
            // line 207
            echo "        <footer class=\"row\">
          ";
            // line 208
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 209
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 210
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 213
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) {
                // line 214
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 215
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 218
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array())) {
                // line 219
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 220
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 223
            echo "        </footer>
      ";
        }
        // line 225
        echo "      <div class=\"bottom-bar panel\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
          &copy; ";
        // line 228
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("All rights reserved.")));
        echo "
          </div>
        </div>
      </div>

    <a class=\"exit-off-canvas\"></a>

  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/dcmanila/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 228,  429 => 225,  425 => 223,  419 => 220,  416 => 219,  413 => 218,  407 => 215,  404 => 214,  401 => 213,  395 => 210,  392 => 209,  390 => 208,  387 => 207,  385 => 206,  382 => 205,  376 => 202,  371 => 201,  368 => 200,  362 => 197,  357 => 196,  355 => 195,  349 => 193,  343 => 190,  340 => 189,  337 => 188,  334 => 187,  328 => 186,  323 => 185,  321 => 184,  318 => 183,  313 => 181,  309 => 180,  304 => 179,  301 => 178,  295 => 177,  292 => 176,  289 => 175,  283 => 173,  280 => 172,  278 => 171,  274 => 170,  270 => 168,  263 => 164,  259 => 162,  257 => 161,  254 => 160,  247 => 156,  243 => 154,  241 => 153,  237 => 151,  227 => 146,  217 => 141,  212 => 138,  209 => 137,  203 => 134,  200 => 133,  197 => 132,  192 => 129,  185 => 127,  178 => 126,  171 => 124,  164 => 123,  162 => 122,  156 => 120,  154 => 119,  150 => 117,  143 => 113,  139 => 111,  137 => 110,  133 => 108,  130 => 107,  125 => 104,  123 => 103,  118 => 102,  113 => 99,  110 => 98,  108 => 97,  102 => 94,  95 => 90,  87 => 84,  82 => 81,  78 => 79,  72 => 77,  66 => 75,  64 => 74,  61 => 73,  55 => 71,  52 => 70,  50 => 69,  45 => 66,  43 => 65,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Zurb Foundations's theme implementation to display a single page.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - linked_logo: The logo image, linked to <front>.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - linked_site_name: The name of the site that also links to <front>.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.meta_header*/
/*  * - page.header*/
/*  * - page.help*/
/*  * - page.highlighted*/
/*  * - page.content*/
/*  * - page.sidebar_first*/
/*  * - page.sidebar_second*/
/*  * - page.footer_first*/
/*  * - page.footer_middle*/
/*  * - page.footer_last*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% if page.top_header %}*/
/*   <header class="header-top">*/
/*    	<div class="row inner-header-top">*/
/*       <div class="small-5 medium-5 large-5 columns">*/
/* 	  	{% if linked_site_name or linked_logo %}*/
/*         {% if linked_logo %}*/
/*           {{ linked_logo }}*/
/*         {% endif %}*/
/*         */
/*         {% if is_front %}*/
/*           <h1 id="site-name">{{ linked_site_name }}</h1>*/
/*         {% else %}*/
/*           <div id="site-name">{{ linked_site_name }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endif %}*/
/*     </div>*/
/*   </header>*/
/* {% endif %}*/
/* */
/* <section class="off-canvas-wrap" data-offcanvas>*/
/* */
/* */
/*   <div class="inner-wrap">*/
/*     <aside class="left-off-canvas-menu">*/
/*       {{ page.left_off_canvas }}*/
/*     </aside>*/
/* */
/*     <aside class="right-off-canvas-menu">*/
/*       {{ page.right_off_canvas }}*/
/*     </aside>*/
/* */
/*       {% if page.meta_header %}*/
/*         {% if meta_header_grid %}*/
/*           <div class="row">*/
/*             <div class="large-12 columns">*/
/*         {% endif %}*/
/*         {{ page.meta_header }}*/
/*         {% if meta_header_grid %}*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/* */
/* */
/*       {% if page.header %}*/
/*         <div class="row">*/
/*           <div class="large-12 columns">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <div class="row">*/
/*         {% if show_account_info %}*/
/*           <div class="{{ site_slogan ? 'large-6' : 'large-4 columns large-offset-8' }} columns hide-for-small">*/
/*             <p>*/
/*               {% if logged_in %}*/
/*                 <a href="{{ path('user.page') }}">{{ 'My Account'|t }}</a>*/
/*                 <a href="{{ path('user.logout') }}">{{ 'Logout'|t }}</a>*/
/*               {% else %}*/
/*                 <a href="{{ path('user.login') }}">{{ 'Login'|t }}</a>*/
/*                 <a href="{{ path('user.register') }}">{{ 'Sign Up'|t }}</a>*/
/*               {% endif %}*/
/*             </p>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if site_slogan %}*/
/*           <div class="large-6 columns hide-for-small">*/
/*             {{ site_slogan }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if show_account_info %}*/
/*           <div class="show-for-small">*/
/*             <div class="six mobile-two columns">*/
/*               <p>*/
/*                 <a href="{{ path('user.login') }}" class="radius button">{{ 'Login'|t }}</a>*/
/*               </p>*/
/*             </div>*/
/*             <div class="six mobile-two columns">*/
/*               <p>*/
/*                 <a href="{{ path('user.register') }}" class="radius success button">{{ 'Sign Up'|t }}</a>*/
/*               </p>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {% if messages and not zurb_foundation_messages_modal %}*/
/*       <div class="l-messages row">*/
/*         <div class="large-12 columns">*/
/*           {{ messages }}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.help %}*/
/*       <div class="l-help row">*/
/*         <div class="large-12 columns">*/
/*           {{ page.help }}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="row">*/
/*         <div id="main" class="{{ main_grid }} columns">*/
/*           {% if page.highlighted %}*/
/*             {% spaceless %}*/
/*               {{ page.highlighted }}*/
/*             {% endspaceless %}*/
/*           {% endif %}*/
/*           <a id="main-content"></a>*/
/*           {% if breadcrumb %} {{ breadcrumb }} {% endif %}*/
/*           {% if title and not is_front %}*/
/*             {{ title_prefix }}*/
/*             <h1 id="page-title" class="title">{{ title }}</h1>*/
/*             {{ title_suffix }}*/
/*           {% endif %}*/
/* */
/*           {% if tabs %}*/
/*             {{ tabs }}*/
/*             {% if tabs2 %} {{ tabs2 }} {% endif %}*/
/*           {% endif %}*/
/*           {% if action_links %}*/
/*             <ul class="action-links">*/
/*               {{ action_links }}*/
/*             </ul>*/
/*           {% endif %}*/
/*           {{ page.content }}*/
/*         </div>*/
/*         {% if page.sidebar_first %}*/
/*           <div id="sidebar-first" class="{{ sidebar_first_grid }} columns sidebar ">*/
/*             {{ page.sidebar_first }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.sidebar_second %}*/
/*           <div id="sidebar-second" class="{{ sidebar_sec_grid }} columns sidebar">*/
/*             {{ page.sidebar_second }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*       {% if page.footer_first or page.footer_middle or page.footer_last %}*/
/*         <footer class="row">*/
/*           {% if page.footer_first %}*/
/*             <div id="footer-first" class="large-4 columns">*/
/*               {{ page.footer_first }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_middle %}*/
/*             <div id="footer-middle" class="large-4 columns">*/
/*               {{ page.footer_middle }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_last %}*/
/*             <div id="footer-last" class="large-4 columns">*/
/*               {{ page.footer_last }}*/
/*             </div>*/
/*           {% endif %}*/
/*         </footer>*/
/*       {% endif %}*/
/*       <div class="bottom-bar panel">*/
/*         <div class="row">*/
/*           <div class="large-12 columns">*/
/*           &copy; {{ "now"|date('Y') }} {{ site_name }} {{ 'All rights reserved.'|t }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*     <a class="exit-off-canvas"></a>*/
/* */
/*   </div>*/
/* </section>*/
