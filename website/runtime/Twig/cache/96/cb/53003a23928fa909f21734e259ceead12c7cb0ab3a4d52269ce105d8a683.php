<?php

/* @app/views/layouts/main.twig */
class __TwigTemplate_96cb53003a23928fa909f21734e259ceead12c7cb0ab3a4d52269ce105d8a683 extends yii\twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginPage", array(), "method"), "html", null, true);
        echo "
<!doctype html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "language", array()), "html", null, true);
        echo "\">
  <head>
    <meta charset=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "charset", array()), "html", null, true);
        echo "\"/>
    <meta name=\"keywords\" content=\"集合啦官方网站|集合啦活动平台|app|同城活动|活动社交app|移动社交平台|有氧运动|健身交友|活动达人|活动专家|同城活动资讯和攻略|活动记忆回顾\"> 
    <meta name=\"description\" content=\"集合啦是一款活动类社交平台，每天都会更新通过精心挑选的同城活动信息并在app上展示出来帮助需要参与活动的人及时了解靠谱准确的活动内容。\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">      
    ";
        // line 9
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "csrfMetaTags", array(), "method");
        echo "
    <title>";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "集合啦官方网站")) : ("集合啦官方网站")), "html", null, true);
        echo "</title>
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array(), "method"), "html", null, true);
        echo "
    ";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "  </head>
  <body>
  ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginBody", array(), "method"), "html", null, true);
        echo "
  <div class=\"wrap\">
    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "  </div>
  ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endBody", array(), "method"), "html", null, true);
        echo "
  </body>
</html>
";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endPage", array(), "method"), "html", null, true);
    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        // line 13
        echo "      <link href=\"/css/style.css\" rel='stylesheet' type='text/css' /> 
    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@app/views/layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  79 => 13,  76 => 12,  72 => 24,  66 => 21,  63 => 20,  61 => 19,  56 => 17,  52 => 15,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  31 => 5,  26 => 3,  21 => 1,);
    }
}
