<?php

/* shop/index.html */
class __TwigTemplate_c712cb45552f349b1facdf7a39d02be7e68731c1d8730dec9bf506df57d739ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "shop/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/shop/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row shoppage\">
  <div class=\"weui-tab\">
      <div class=\"weui-tab__bd\">
        <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
          <!-- 轮播start -->
        <div class=\"swiper-container\" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\" style=\"height: 200px;\">
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
        <div class=\"col-sm-6 col-xs-6\">
          <a href=\"/goods/index\" class=\"wool_box\">
            <div class=\"wool_box_img\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-cailiao\"></use>
                    </svg>
            </div>
            <p>毛料专区</p>
          </a>
        </div>
        <div class=\"col-sm-6 col-xs-6\">
          <a href=\"/goods/index\" class=\"product_box\">
            <div class=\"product_box_img\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-chengpin\"></use>
                    </svg>
            </div>
            <p>成品专区</p>
          </a>
        </div>
        <!-- 分类end -->
        <!-- 搜索栏start -->
        <div class=\"weui-search-bar\" id=\"searchBar\">
          <form class=\"weui-search-bar__form\">
            <div class=\"weui-search-bar__box\">
              <i class=\"weui-icon-search\"></i>
              <input type=\"search\" class=\"weui-search-bar__input\" id=\"searchInput\" placeholder=\"搜索\" required=\"\">
              <a href=\"javascript:\" class=\"weui-icon-clear\" id=\"searchClear\"></a>
            </div>
            <label class=\"weui-search-bar__label\" id=\"searchText\">
              <i class=\"weui-icon-search\"></i>
              <span>搜索</span>
            </label>
          </form>
          <a href=\"javascript:\" class=\"weui-search-bar__cancel-btn\" id=\"searchCancel\">取消</a>
        </div>
        <!-- 搜索栏end -->
        <!-- 全部商品strat -->
        <div class=\"col-sm-12 col-xs-12 allproduct\">
          <span>全部商品</span>
        </div>
        <div class=\"col-sm-12 col-xs-12 product_list_box\">
          <div class=\"row\">
            <!-- 商品列表start -->
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <!-- 商品列表end -->
          </div>
        </div>
        <!-- 全部商品end -->
        </div>
      </div>
      <div class=\"dam-board\" style=\"height: 55px;\"></div>
      <div class=\"weui-tabbar weui-footer_fixed-bottom\">
        <a href=\"/\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-dianpu\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">首页</p>
        </a>
        <a href=\"#tab1\" class=\"weui-tabbar__item weui-bar__item--on\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-dianpu\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">店铺</p>
        </a>
        <a href=\"/shopCart/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-gwc\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">购物车</p>
        </a>
        <a href=\"/mySelf/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-mine_df\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">我的</p>
        </a>
      </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "shop/index.html";
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
<link rel=\"stylesheet\" href=\"/apps/home/views/shop/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row shoppage\">
  <div class=\"weui-tab\">
      <div class=\"weui-tab__bd\">
        <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
          <!-- 轮播start -->
        <div class=\"swiper-container\" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\" style=\"height: 200px;\">
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
        <div class=\"col-sm-6 col-xs-6\">
          <a href=\"/goods/index\" class=\"wool_box\">
            <div class=\"wool_box_img\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-cailiao\"></use>
                    </svg>
            </div>
            <p>毛料专区</p>
          </a>
        </div>
        <div class=\"col-sm-6 col-xs-6\">
          <a href=\"/goods/index\" class=\"product_box\">
            <div class=\"product_box_img\">
              <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                        <use xlink:href=\"#icon-chengpin\"></use>
                    </svg>
            </div>
            <p>成品专区</p>
          </a>
        </div>
        <!-- 分类end -->
        <!-- 搜索栏start -->
        <div class=\"weui-search-bar\" id=\"searchBar\">
          <form class=\"weui-search-bar__form\">
            <div class=\"weui-search-bar__box\">
              <i class=\"weui-icon-search\"></i>
              <input type=\"search\" class=\"weui-search-bar__input\" id=\"searchInput\" placeholder=\"搜索\" required=\"\">
              <a href=\"javascript:\" class=\"weui-icon-clear\" id=\"searchClear\"></a>
            </div>
            <label class=\"weui-search-bar__label\" id=\"searchText\">
              <i class=\"weui-icon-search\"></i>
              <span>搜索</span>
            </label>
          </form>
          <a href=\"javascript:\" class=\"weui-search-bar__cancel-btn\" id=\"searchCancel\">取消</a>
        </div>
        <!-- 搜索栏end -->
        <!-- 全部商品strat -->
        <div class=\"col-sm-12 col-xs-12 allproduct\">
          <span>全部商品</span>
        </div>
        <div class=\"col-sm-12 col-xs-12 product_list_box\">
          <div class=\"row\">
            <!-- 商品列表start -->
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <div class=\"col-sm-6 col-xs-6 product_list\">
              <a href=\"/goods/detail\" class=\"product_content\">
                <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
                <div class=\"product_title_bcg\">
                </div>
                <div class=\"product_title\">
                  <span>和田碧玉手镯</span>
                </div>
              </a>
            </div>
            <!-- 商品列表end -->
          </div>
        </div>
        <!-- 全部商品end -->
        </div>
      </div>
      <div class=\"dam-board\" style=\"height: 55px;\"></div>
      <div class=\"weui-tabbar weui-footer_fixed-bottom\">
        <a href=\"/\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-dianpu\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">首页</p>
        </a>
        <a href=\"#tab1\" class=\"weui-tabbar__item weui-bar__item--on\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-dianpu\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">店铺</p>
        </a>
        <a href=\"/shopCart/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-gwc\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">购物车</p>
        </a>
        <a href=\"/mySelf/index\" class=\"weui-tabbar__item\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-mine_df\"></use>
          </svg>
          <p class=\"weui-tabbar__label\">我的</p>
        </a>
      </div>
  </div>
</div>
{% endblock %}", "shop/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/shop/index.html");
    }
}
