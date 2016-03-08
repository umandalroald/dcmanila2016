<?php

/* modules/contrib/commerce/modules/product/templates/product-form.html.twig */
class __TwigTemplate_9e3cc4e0325fef4742ed2de5ca1ba61306adbb24fa77969db76a623f06eb1d8a extends Twig_Template
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
        $tags = array();
        $filters = array("without" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without'),
                array()
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

        // line 10
        echo "<div class=\"layout-product-form clearfix\">
  <div class=\"layout-region layout-region-product-main\">
    ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "advanced", "actions"), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-product-secondary\">
    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "advanced", array()), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-product-footer\">
    ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actions", array()), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/product/templates/product-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  53 => 15,  47 => 12,  43 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Two column template for the product add/edit form.*/
/*  **/
/*  * Available variables:*/
/*  * - form: The form.*/
/*  *//* */
/* #}*/
/* <div class="layout-product-form clearfix">*/
/*   <div class="layout-region layout-region-product-main">*/
/*     {{ form|without('advanced', 'actions') }}*/
/*   </div>*/
/*   <div class="layout-region layout-region-product-secondary">*/
/*     {{ form.advanced }}*/
/*   </div>*/
/*   <div class="layout-region layout-region-product-footer">*/
/*     {{ form.actions }}*/
/*   </div>*/
/* </div>*/
/* */
