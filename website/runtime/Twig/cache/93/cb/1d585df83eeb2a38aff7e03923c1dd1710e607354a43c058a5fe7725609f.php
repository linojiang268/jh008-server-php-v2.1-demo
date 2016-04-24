<?php

/* index.twig */
class __TwigTemplate_93cb1d585df83eeb2a38aff7e03923c1dd1710e607354a43c058a5fe7725609f extends yii\twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@app/views/layouts/main.twig", "index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@app/views/layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"header\">
    <div class=\"container\">
        <div class=\"header-main\">
            <div class=\"logo\">
                <img src=\"/images/logo.png\">
            </div>
            <div class=\"top\">
                <ul>
                    <li><span class=\"one\"> </span><p>零创集合啦</p></li>
                    <li><span class=\"two\"> </span><p><a href=\"http://www.weibo.com/5321455846\">@集合啦-场景社交app</a></p></li>
                </ul>
            </div>
            <div class=\"bottom\">
                <div class=\"col-md-4 bottom-left\">
                    <h1>集合啦！你想要的，都在这！</h1>
                    <p class=\"para\">目前仅开放成都地区。</p>
                    <h3>产品信息</h3>
                    <ul>
                        <li><p>软件名称：集合啦</p></li>
                        <li><p>软件属性：活动类社交</p></li>
                        <li><p>软件大小：5.87MB</p></li>
                        <li><p>软件语言：简体中文</p></li>
                        <li><p>软件授权：免费版</p></li>
                        <li><p>运行平台：支持android2.3及以上系统、ios系统</p></li>
                        <li><p>软件版本：1.0.5</p></li>
                    </ul>
                    <div class=\"download-wrap mt25\">
                        <a target=\"_blank\" href=\"/act/appInfo/lastversionapk\">
                            <img src=\"/images/android-download.png\" alt=\"\" />
                        </a>
                        <img width =\"87\" height=\"87\" src=\"/images/Android.png\" alt=\"\" />
                    </div>
                    <div class=\"download-wrap\">
                        <a target=\"_blank\" href=\"https://itunes.apple.com/bg/app/ji-he-la/id935532535?mt=8\">
                            <img src=\"/images/ios-download.png\" alt=\"\" />
                        </a>
                        <img width =\"87\" height=\"87\" src=\"/images/IOS.png\" alt=\"\" />
                    </div>
                </div>
                <div class=\"col-md-4 bottom-middle\">
                    <img src=\"/images/divice.png\" alt=\"\">
                </div>
                <div class=\"col-md-4 bottom-right\">
                    <div class=\"slide\">
                        <ul id=\"flexiselDemo3\" style=\"height:410px;\">
                            <li>
                                <img src=\"/images/mmexport1421222670140.jpg\" alt=\"\">
                            
                            </li>
                            <li>
                                <img src=\"/images/mmexport1421222677991.jpg\" alt=\"\">
                                
                            </li>
                            <li>
                                <img src=\"/images/mmexport1421236741896.jpg\" alt=\"\">
                                
                            </li>
                        </ul>
                    </div>  
                </div>
                <div class=\"clearfix\"></div>
            </div>          
        </div>
    </div>
</div>
<!--main--ends-->
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"footer-main\">
            <div class=\"footer-wrap\">
                <span>成都零创科技有限公司</span>
                <span>tel: 028-85175989</span>
                <span>蜀ICP备14010211号-2</span>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>

<script src=\"/js/jquery-1.11.0.min.js\"></script>

<script type=\"text/javascript\" src=\"/js/jquery.flexisel.js\"></script>
<script src=\"/js/index.js\"></script> 

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
