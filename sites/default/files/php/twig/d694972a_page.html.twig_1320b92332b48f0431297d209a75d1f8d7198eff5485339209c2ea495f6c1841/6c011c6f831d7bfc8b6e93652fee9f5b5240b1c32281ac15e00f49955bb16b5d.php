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
        $tags = array("if" => 67, "spaceless" => 175);
        $filters = array("t" => 126, "date" => 231);
        $functions = array("path" => 126);

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
        echo "
<section class=\"off-canvas-wrap\" data-offcanvas>
  ";
        // line 67
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_header", array())) {
            // line 68
            echo "      <div class=\"row\">
        <div class=\"small-12 medium-12 large-12 columns\">
        </div>
      </div>
  ";
        }
        // line 73
        echo "

  <div class=\"inner-wrap\">
    <aside class=\"left-off-canvas-menu\">
      ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <aside class=\"right-off-canvas-menu\">
      ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_off_canvas", array()), "html", null, true));
        echo "
    </aside>

      ";
        // line 84
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array())) {
            // line 85
            echo "        ";
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 86
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
        ";
            }
            // line 89
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array()), "html", null, true));
            echo "
        ";
            // line 90
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 91
                echo "            </div>
          </div>
        ";
            }
            // line 94
            echo "      ";
        }
        // line 95
        echo "
      <header class=\"row\">
        ";
        // line 97
        if (((isset($context["linked_site_name"]) ? $context["linked_site_name"] : null) || (isset($context["linked_logo"]) ? $context["linked_logo"] : null))) {
            // line 98
            echo "          <div class=\"large-2 columns\">
            ";
            // line 99
            if ((isset($context["linked_logo"]) ? $context["linked_logo"] : null)) {
                // line 100
                echo "              ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_logo"]) ? $context["linked_logo"] : null), "html", null, true));
                echo "
            ";
            }
            // line 102
            echo "          </div>
          <div class=\"large-4 columns\">
            ";
            // line 104
            if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
                // line 105
                echo "              <h1 id=\"site-name\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_site_name"]) ? $context["linked_site_name"] : null), "html", null, true));
                echo "</h1>
            ";
            } else {
                // line 107
                echo "              <div id=\"site-name\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_site_name"]) ? $context["linked_site_name"] : null), "html", null, true));
                echo "</div>
            ";
            }
            // line 109
            echo "          </div>
        ";
        }
        // line 111
        echo "      </header>

      ";
        // line 113
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 114
            echo "        <div class=\"row\">
          <div class=\"large-12 columns\">
            ";
            // line 116
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 120
        echo "
      <div class=\"row\">
        ";
        // line 122
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 123
            echo "          <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) ? ("large-6") : ("large-4 columns large-offset-8"))));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 125
            if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
                // line 126
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.page")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("My Account")));
                echo "</a>
                <a href=\"";
                // line 127
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.logout")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Logout")));
                echo "</a>
              ";
            } else {
                // line 129
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
                echo "</a>
                <a href=\"";
                // line 130
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
                echo "</a>
              ";
            }
            // line 132
            echo "            </p>
          </div>
        ";
        }
        // line 135
        echo "        ";
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 136
            echo "          <div class=\"large-6 columns hide-for-small\">
            ";
            // line 137
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 140
        echo "        ";
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 141
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 149
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 154
        echo "      </div>

      ";
        // line 156
        if (((isset($context["messages"]) ? $context["messages"] : null) &&  !(isset($context["zurb_foundation_messages_modal"]) ? $context["zurb_foundation_messages_modal"] : null))) {
            // line 157
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 159
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 163
        echo "
      ";
        // line 164
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 165
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 167
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 171
        echo "
      <div class=\"row\">
        <div id=\"main\" class=\"";
        // line 173
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid"]) ? $context["main_grid"] : null), "html", null, true));
        echo " columns\">
          ";
        // line 174
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 175
            echo "            ";
            ob_start();
            // line 176
            echo "              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 178
            echo "          ";
        }
        // line 179
        echo "          <a id=\"main-content\"></a>
          ";
        // line 180
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo " ";
        }
        // line 181
        echo "          ";
        if (((isset($context["title"]) ? $context["title"] : null) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 182
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
            <h1 id=\"page-title\" class=\"title\">";
            // line 183
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
            ";
            // line 184
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
          ";
        }
        // line 186
        echo "
          ";
        // line 187
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 188
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
            ";
            // line 189
            if ((isset($context["tabs2"]) ? $context["tabs2"] : null)) {
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs2"]) ? $context["tabs2"] : null), "html", null, true));
                echo " ";
            }
            // line 190
            echo "          ";
        }
        // line 191
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 192
            echo "            <ul class=\"action-links\">
              ";
            // line 193
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "
            </ul>
          ";
        }
        // line 196
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 198
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 199
            echo "          <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_grid"]) ? $context["sidebar_first_grid"] : null), "html", null, true));
            echo " columns sidebar \">
            ";
            // line 200
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 203
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 204
            echo "          <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_sec_grid"]) ? $context["sidebar_sec_grid"] : null), "html", null, true));
            echo " columns sidebar\">
            ";
            // line 205
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 208
        echo "      </div>
      ";
        // line 209
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()))) {
            // line 210
            echo "        <footer class=\"row\">
          ";
            // line 211
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 212
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 213
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 216
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) {
                // line 217
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 218
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 221
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array())) {
                // line 222
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 223
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 226
            echo "        </footer>
      ";
        }
        // line 228
        echo "      <div class=\"bottom-bar panel\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
          &copy; ";
        // line 231
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
        return array (  440 => 231,  435 => 228,  431 => 226,  425 => 223,  422 => 222,  419 => 221,  413 => 218,  410 => 217,  407 => 216,  401 => 213,  398 => 212,  396 => 211,  393 => 210,  391 => 209,  388 => 208,  382 => 205,  377 => 204,  374 => 203,  368 => 200,  363 => 199,  361 => 198,  355 => 196,  349 => 193,  346 => 192,  343 => 191,  340 => 190,  334 => 189,  329 => 188,  327 => 187,  324 => 186,  319 => 184,  315 => 183,  310 => 182,  307 => 181,  301 => 180,  298 => 179,  295 => 178,  289 => 176,  286 => 175,  284 => 174,  280 => 173,  276 => 171,  269 => 167,  265 => 165,  263 => 164,  260 => 163,  253 => 159,  249 => 157,  247 => 156,  243 => 154,  233 => 149,  223 => 144,  218 => 141,  215 => 140,  209 => 137,  206 => 136,  203 => 135,  198 => 132,  191 => 130,  184 => 129,  177 => 127,  170 => 126,  168 => 125,  162 => 123,  160 => 122,  156 => 120,  149 => 116,  145 => 114,  143 => 113,  139 => 111,  135 => 109,  129 => 107,  123 => 105,  121 => 104,  117 => 102,  111 => 100,  109 => 99,  106 => 98,  104 => 97,  100 => 95,  97 => 94,  92 => 91,  90 => 90,  85 => 89,  80 => 86,  77 => 85,  75 => 84,  69 => 81,  62 => 77,  56 => 73,  49 => 68,  47 => 67,  43 => 65,);
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
/* */
/* <section class="off-canvas-wrap" data-offcanvas>*/
/*   {% if page.top_header %}*/
/*       <div class="row">*/
/*         <div class="small-12 medium-12 large-12 columns">*/
/*         </div>*/
/*       </div>*/
/*   {% endif %}*/
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
/*       <header class="row">*/
/*         {% if linked_site_name or linked_logo %}*/
/*           <div class="large-2 columns">*/
/*             {% if linked_logo %}*/
/*               {{ linked_logo }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <div class="large-4 columns">*/
/*             {% if is_front %}*/
/*               <h1 id="site-name">{{ linked_site_name }}</h1>*/
/*             {% else %}*/
/*               <div id="site-name">{{ linked_site_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endif %}*/
/*       </header>*/
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
