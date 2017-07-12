<?php

/* index/index.html */
class __TwigTemplate_369617fabd524ba7605b52ccddc5b334db0f063ea802a0230d7fa005bddebce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "index/index.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/index/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row homepage\">
  <div class=\"weui-tab\">
      <div class=\"weui-tab__bd\">
        <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
          <!-- 轮播start -->
        <div class=\"swiper-container\" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
            </div>
            <div class=\"swiper-slide\">
              <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i4/TB10rkPGVXXXXXGapXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
            </div>
            <div class=\"swiper-slide\">
              <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1kQI3HpXXXXbSXFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
        <!-- 轮播end -->
        <!-- 分类strat -->
        <div class=\"weui-grids home_menu\">
          <a href=\"/news/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-xinwen\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              新闻
            </p>
          </a>
          <a href=\"/industryDynamics/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-xingyedongtai\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              行业动态
            </p>
          </a>
          <a href=\"/catalogue/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-cailiao\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              毛料
            </p>
          </a>
          <a href=\"/catalogue/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-chengpin\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              成品
            </p>
          </a>
          <a href=\"/shop/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-dianpu1\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              店铺
            </p>
          </a>
        </div>
        <!-- 分类end -->
        <!-- 最新新闻strat -->
        <div class=\"col-sm-12 col-xs-12 news_box\">
          <span>最新新闻</span>
        </div>
        <!-- 新闻列表start -->
        <!-- <div class=\"row\"> -->
          <div class=\"col-sm-12 col-xs-12\">
          <div class=\"row\">
            <div class=\"weui-panel weui-panel_access\">
              <div class=\"weui-panel__bd\">
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
              </div>
            </div>
          </div>
          </div>
        <!-- </div> -->
        <!-- 新闻列表end -->
        <!-- 最新新闻end -->
        </div>
      </div>
      <div class=\"dam-board\" style=\"height: 55px;\"></div>
      <div class=\"weui-tabbar weui-footer_fixed-bottom\">
        <a href=\"/\" class=\"weui-tabbar__item weui-bar__item--on\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye1\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">首页</p>
        </a>
        <a href=\"/shop/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye1\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">店铺</p>
        </a>
        <a href=\"/attention/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-guanzhu\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">关注</p>
        </a>
        <a href=\"/account/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-zhanghu1\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">账户</p>
        </a>
      </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/index/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row homepage\">
  <div class=\"weui-tab\">
      <div class=\"weui-tab__bd\">
        <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
          <!-- 轮播start -->
        <div class=\"swiper-container\" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
            </div>
            <div class=\"swiper-slide\">
              <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i4/TB10rkPGVXXXXXGapXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
            </div>
            <div class=\"swiper-slide\">
              <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1kQI3HpXXXXbSXFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
            </div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
        <!-- 轮播end -->
        <!-- 分类strat -->
        <div class=\"weui-grids home_menu\">
          <a href=\"/news/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-xinwen\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              新闻
            </p>
          </a>
          <a href=\"/industryDynamics/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-xingyedongtai\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              行业动态
            </p>
          </a>
          <a href=\"/catalogue/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-cailiao\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              毛料
            </p>
          </a>
          <a href=\"/catalogue/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-chengpin\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              成品
            </p>
          </a>
          <a href=\"/shop/index\" class=\"weui-grid js_grid\">
            <div class=\"weui-grid__icon\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                    <use xlink:href=\"#icon-dianpu1\"></use>
                </svg>
            </div>
            <p class=\"weui-grid__label\">
              店铺
            </p>
          </a>
        </div>
        <!-- 分类end -->
        <!-- 最新新闻strat -->
        <div class=\"col-sm-12 col-xs-12 news_box\">
          <span>最新新闻</span>
        </div>
        <!-- 新闻列表start -->
        <!-- <div class=\"row\"> -->
          <div class=\"col-sm-12 col-xs-12\">
          <div class=\"row\">
            <div class=\"weui-panel weui-panel_access\">
              <div class=\"weui-panel__bd\">
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
                <a href=\"/news/detail\" class=\"weui-media-box weui-media-box_appmsg\">
                  <div class=\"weui-media-box__hd\">
                    <img class=\"weui-media-box__thumb\" src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                  </div>
                  <div class=\"weui-media-box__bd\">
                    <h4 class=\"weui-media-box__title\">标题一</h4>
                    <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                  </div>
                <span class=\"weui-cell__ft\">
                <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-icon\"></use>
                    </svg>
                </span>
                </a>
              </div>
            </div>
          </div>
          </div>
        <!-- </div> -->
        <!-- 新闻列表end -->
        <!-- 最新新闻end -->
        </div>
      </div>
      <div class=\"dam-board\" style=\"height: 55px;\"></div>
      <div class=\"weui-tabbar weui-footer_fixed-bottom\">
        <a href=\"/\" class=\"weui-tabbar__item weui-bar__item--on\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye1\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">首页</p>
        </a>
        <a href=\"/shop/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye1\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">店铺</p>
        </a>
        <a href=\"/attention/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-guanzhu\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">关注</p>
        </a>
        <a href=\"/account/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-zhanghu1\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">账户</p>
        </a>
      </div>
  </div>
</div>
{% endblock %}", "index/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/index/index.html");
    }
}
