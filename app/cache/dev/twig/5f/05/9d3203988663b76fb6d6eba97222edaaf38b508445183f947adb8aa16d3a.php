<?php

/* AcmeDefaultBundle:Default:index.html.twig */
class __TwigTemplate_5f059d3203988663b76fb6d6eba97222edaaf38b508445183f947adb8aa16d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDefaultBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'js_css' => array($this, 'block_js_css'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDefaultBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "首页";
    }

    // line 5
    public function block_js_css($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <section id=\"main\" class=\"has-fixed-top\">

        <header id=\"mastheader\">
            <div class=\"page-header\">
                <div class=\"container\">
                    <div class=\"page-title pull-left\">
                        <h1></h1>
                    </div>
                    <form method=\"get\" action=\"./index.php/search\" class=\"form-inline search-form pull-right\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"q\" value=\"\" class=\"form-control navbar-search\" placeholder=\"搜索问题\">
                        </div>
                        <button type=\"submit\" class=\"icon-magnifier btn btn-primary\" title=\"Search\">
                        </button>
                    </form>
                    <div class=\"ra-social-output clearfix\">
                        <ul class=\"inline only-icon\">
                            <li>
                                <a href=\"./index.php/feed/qa.rss\">
                                    <img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/rss_24.png\">
                                    <span>
                                        Recent questions and answers
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a target=\"_blank\" href=\"http://facebook.com/nerdaryan\">
                                    <img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/facebook_24.png\">
                                    <span>
                                        facebook
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a target=\"_blank\" href=\"https://twitter.com/nerdaryan\">
                                    <img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/twitter_24.png\">
                                    <span>
                                        twitter
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a target=\"_blank\" href=\"https://plus.google.com/102280288713981086298\">
                                    <img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/google-plus_24.png\">
                                    <span>
                                        PlusOne
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <script type=\"text/javascript\">
            var b = document.getElementsByTagName('body')[0];
            b.className = b.className.replace('qa-body-js-off', 'qa-body-js-on');
        </script>
        <div id=\"builder_home\" data-name=\"home\" class=\"dynamic-layout \">
            <div class=\"ra-row parent ui-draggable\">
                <div class=\"item-content\">
                    <div class=\"ra-container hero\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12 column ui-sortable\">
                                    <div class=\"item parent ui-draggable\">
                                        <div class=\"item-content ra-editable\">
                                            <div class=\"hero-unit\">
                                                <h1>
                                                    App 是一个免费的社区问答
                                                </h1>
                                                <p>
                                                    获取免费的帮助和协助
                                                </p>
                                            </div>
                                            <div class=\"how-does-it-work row\">
                                                <div class=\"col-md-4\">
                                                    <i class=\"icon icon-question-2\">
                                                    </i>
                                                    <div class=\"desc\">
                                                        <h3>提出你的问题</h3>
                                                        <p>完全免费而且很方便的进行问答</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <i class=\"icon icon-group\">
                                                    </i>
                                                    <div class=\"desc\">
                                                        <h3>和APP的用户讨论</h3>
                                                        <p>分享您的问题与专家及获取帮助</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <i class=\"icon icon-smiley\">
                                                    </i>
                                                    <div class=\"desc\">
                                                        <h3>解决了吗？选择最佳答案！</h3>
                                                        <p>对问题的答案投票，选择最佳答案</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Ask Box\" class=\"item-content widget-c\">
                                            <div class=\"ask-block\">
                                                <form method=\"post\" action=\"./index.php/ask\">
                                                    <div class=\"ask-button pull-right\">
                                                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Ask\">
                                                    </div>
                                                    <div class=\"ask-input\">
                                                        <input name=\"title\" type=\"text\" class=\"from-control\" placeholder=\"开始输入你的问题\">
                                                    </div>
                                                    <input type=\"hidden\" name=\"doask1\" value=\"1\">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ra-row parent ui-draggable\">
                <div class=\"item-content\">
                    <div class=\"ra-container\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-2 column ui-sortable\">
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Top Users\" data-limit=\"5\" class=\"item-content widget-c\">
                                            <div class=\"widget top-users block clearfix\">
                                                <h3 class=\"widget-title\">
                                                    用户排名
                                                </h3>
                                                <ul class=\"top-users-list clearfix\">
                                                    <li class=\"top-user\">
                                                        <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=1565640033579949442&amp;qa_size=35\">
                                                            </a>
                                                        </div>
                                                        <div class=\"top-user-data\">
                                                            <a href=\"\" class=\"name\">
                                                                Rahul Aryan
                                                            </a>
                                                            <dl class=\"points\">
                                                                1260 Points
                                                            </dl>
                                                        </div>
                                                    </li>
                                                    <li class=\"top-user\">
                                                        <div class=\"avatar pull-left\" data-handle=\"mr_incredible\" data-id=\"15\">
                                                            <a href=\"./index.php/user/mr_incredible\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=1565640033579949442&amp;qa_size=35\">
                                                            </a>
                                                        </div>
                                                        <div class=\"top-user-data\">
                                                            <a href=\"\" class=\"name\">
                                                                mr_incredible
                                                            </a>
                                                            <dl class=\"points\">
                                                                950 Points
                                                            </dl>
                                                        </div>
                                                    </li>
                                                    <li class=\"top-user\">
                                                        <div class=\"avatar pull-left\" data-handle=\"buzz\" data-id=\"17\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=11576600850225663528&amp;qa_size=35\">
                                                            </a>
                                                        </div>
                                                        <div class=\"top-user-data\">
                                                            <a href=\"\" class=\"name\">
                                                                buzz
                                                            </a>
                                                            <dl class=\"points\">
                                                                710 Points
                                                            </dl>
                                                        </div>
                                                    </li>
                                                    <li class=\"top-user\">
                                                        <div class=\"avatar pull-left\" data-handle=\"juggornot\" data-id=\"12\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=3360453308508702985&amp;qa_size=35\">
                                                            </a>
                                                        </div>
                                                        <div class=\"top-user-data\">
                                                            <a href=\"\" class=\"name\">
                                                                juggornot
                                                            </a>
                                                            <dl class=\"points\">
                                                                700 Points
                                                            </dl>
                                                        </div>
                                                    </li>
                                                    <li class=\"top-user\">
                                                        <div class=\"avatar pull-left\" data-handle=\"john\" data-id=\"2\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16230449406133762946&amp;qa_size=35\">
                                                            </a>
                                                        </div>
                                                        <div class=\"top-user-data\">
                                                            <a href=\"\" class=\"name\">
                                                                john
                                                            </a>
                                                            <dl class=\"points\">
                                                                670 Points
                                                            </dl>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4 column ui-sortable\">
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra New Users\" data-limit=\"20\" class=\"item-content widget-c\">
                                            <div class=\"widget top-users block clearfix\">
                                                <h3 class=\"widget-title have-link\">
                                                    <a class=\"all-user-list btn pull-right\" href=\"\">
                                                        所有用户
                                                    </a>
                                                    新用户
                                                </h3>
                                                <ul class=\"users-list clearfix\">
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"test.dot\" data-id=\"20\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=34613087031464436&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"rahul aryan\" data-id=\"19\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=34613087031464436&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"russell\" data-id=\"18\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=11324748187731566428&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"buzz\" data-id=\"17\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=11576600850225663528&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"wall_e\" data-id=\"16\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16626734729548631403&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"mr_incredible\" data-id=\"15\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=1565640033579949442&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"princess\" data-id=\"14\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=15886826190290698119&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"old_man\" data-id=\"13\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=17178655572799797940&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"juggornot\" data-id=\"12\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=3360453308508702985&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"one_eyed\" data-id=\"11\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=13393310319980628081&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"muboy\" data-id=\"10\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=14335595209487717967&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"monu\" data-id=\"9\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=1564937841064345096&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"Fynn\" data-id=\"8\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=10776886501010250333&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"miranda\" data-id=\"7\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=13606915021701521957&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"selena\" data-id=\"6\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=1855948176351576045&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"marilyn\" data-id=\"5\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4367582346415636205&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"dento\" data-id=\"4\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=15490480121855037789&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"boy\" data-id=\"3\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16940215807505183659&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"john\" data-id=\"2\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16230449406133762946&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class=\"user\">
                                                        <div class=\"avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3 column ui-sortable\">
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Tags List\" data-limit=\"8\" class=\"item-content widget-c\">
                                            <div class=\"widget top-users block clearfix\">
                                                <h3 class=\"widget-title have-link\">
                                                    <a class=\"all-user-list btn pull-right icon-reorder\" href=\"\"></a>
                                                    Tags
                                                </h3>
                                                <ul class=\"tag-list\">
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            ipsum
                                                            <span>
                                                                4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            lorem
                                                            <span>
                                                                4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            pellentesque
                                                            <span>
                                                                3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            sed
                                                            <span>
                                                                3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            tempor
                                                            <span>
                                                                2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            curabitur
                                                            <span>
                                                                2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            vitae
                                                            <span>
                                                                2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-tag\" href=\"\">
                                                            molestie
                                                            <span>
                                                                2
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3 column ui-sortable\">
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Categories List\" data-limit=\"8\"
                                             class=\"item-content widget-c\">
                                            <div class=\"cat-list widget top-users block clearfix\">
                                                <h3 class=\"widget-title have-link\">
                                                    <a class=\"all-user-list btn pull-right icon-reorder\" href=\"\">
                                                    </a>
                                                    类别
                                                </h3>
                                                <ul class=\"ra-cat-list clearfix\">
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"Maecenas at erat lectus. Maecenas a lorem id justo vestibulum pellentesque. Aliquam sollicitudin lorem eget varius rhoncus.\"
                                                           href=\"\">
                                                            Themes
                                                            <span>
                                                                22
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"Nulla suscipit nunc ut diam adipiscing, et iaculis tellus dapibus. Integer porttitor risus quis dui eleifend, sit amet\"
                                                           href=\"\">
                                                            Plugins
                                                            <span>
                                                                0
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"Yuis eu nibh tincidunt, porttitor eros at, consequat diam. Sed in rutrum arcu. Morbi gravida, erat quis pellentesque iaculit\"
                                                           href=\"\">
                                                            Joomla
                                                            <span>
                                                                2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"Daecenas at erat lectus. Maecenas a lorem id justo vestibulum pellentesque. Aliquam sollicitudin lorem eget varius.\"
                                                           href=\"\">
                                                            Widgets
                                                            <span>
                                                                0
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"An opensource web browser by mozzila foundation\"
                                                           href=\"\">
                                                            Firefox
                                                            <span>
                                                                0
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"Nulla sagittis purus eget erat aliquet condimentum. Maecenas placerat mollis nibh, a euismod urna rhoncus eget\"
                                                           href=\"\">
                                                            Chrome
                                                            <span>
                                                                0
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"Sed congue risus sit amet augue euismod aliquam id et purus. Duis quis lectus magna\"
                                                           href=\"\">
                                                            Gmail
                                                            <span>
                                                                0
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"icon-folder-close\" title=\"Sed congue risus sit amet augue euismod aliquam id et purus. Duis quis lectus magna\"
                                                           href=\"\">
                                                            Finance
                                                            <span>
                                                                1
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ra-row parent ui-draggable\">
                <div class=\"item-content\">
                    <div class=\"ra-container\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8 column ui-sortable\">
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Activity List\" class=\"item-content widget-c\">
                                            <form method=\"post\" action=\"\">
                                                <div class=\"qa-q-list\">
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q63\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net\" id=\"voting_63\">
                                                                            <p class=\"count\">
                                                                                0
                                                                                <span>
                                                                                    vote
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_63_1_q63\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\" class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_63_-1_q63\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\" class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Morbi ullamcorper sapien non nunc dapibus
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                edited
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Dec 30, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        WordPress
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    lorem
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src=\"http://www.demo.local/qa-theme/dude/images/ads-banner.jpg\">
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q62\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net negative\" id=\"voting_62\">
                                                                            <p class=\"count\">
                                                                                -1
                                                                                <span>
                                                                                    vote
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_62_1_q62\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_62_-1_q62\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Quisque viverra velit tortor, eu varius dui scelerisque
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status selected\">
                                                                            Solved
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"\"
                                                                               class=\"qa-q-item-what\">
                                                                                answer selected
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Dec 4, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Joomla
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    test
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    lorem
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q81\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net\" id=\"voting_81\">
                                                                            <p class=\"count\">
                                                                                0
                                                                                <span>
                                                                                    vote
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_81_1_q81\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_81_-1_q81\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Proin adipiscing libero ipsum, vel iaculis ipsum facilisis quis
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                asked
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Dec 4, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Joomla
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    ipsum
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    aenean
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    nunc
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q46\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_46\">
                                                                            <p class=\"count\">
                                                                                2
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_46_1_q46\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_46_-1_q46\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            5
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Example of related question
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status selected\">
                                                                            Solved
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"\" class=\"qa-q-item-what\">
                                                                                answered
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Dec 4, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Finance
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    fringilla
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    vestibulum
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    dolor
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix  qa-q-closed\" id=\"q16\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"miranda\" data-id=\"7\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=13606915021701521957&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_16\">
                                                                            <p class=\"count\">
                                                                                5
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_16_1_q16\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_16_-1_q16\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Aenean nec porta Suspendisse scelerisque lectus
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status duplicate\">
                                                                            Duplicate
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"\"
                                                                               class=\"qa-q-item-what\">
                                                                                commented
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Dec 4, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Anonny
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    curabitur
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    dapibus
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    odio
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    mauris
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q34\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"buzz\" data-id=\"17\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=11576600850225663528&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_34\">
                                                                            <p class=\"count\">
                                                                                3
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_34_1_q34\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_34_-1_q34\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/34/nam-nec-dolor-augueulla-nec-lacinia-libero\">
                                                                        Nam nec dolor augueulla nec lacinia libero
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"\"
                                                                               class=\"qa-q-item-what\">
                                                                                commented
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Dec 3, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    duis
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    viverra
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    magna
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    condimentum
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q22\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"one_eyed\" data-id=\"11\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=13393310319980628081&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_22\">
                                                                            <p class=\"count\">
                                                                                2
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_22_1_q22\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_22_-1_q22\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            2
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Morbi neque dolor, sollicitudin eu mollis
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status selected\">
                                                                            Solved
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"\" class=\"qa-q-item-what\">
                                                                                commented
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Nov 30, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    ullamcorper
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    sed
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    viverra
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    molestie
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q21\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"muboy\" data-id=\"10\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=14335595209487717967&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_21\">
                                                                            <p class=\"count\">
                                                                                7
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_21_1_q21\" href=\"\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_21_-1_q21\" href=\"\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            2
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Etiam non laoreet odio. Sed lobortis metus eu metus
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status selected\">
                                                                            Solved
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                recategorized
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Nov 28, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        WordPress
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    turpis
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    adipiscing
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    porttitor
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    pellentesque
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    ipsum
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q7\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"boy\" data-id=\"3\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16940215807505183659&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_7\">
                                                                            <p class=\"count\">
                                                                                7
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_7_1_q7\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_7_-1_q7\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Nunc egestas lectus nec molestie suscipit orci turpis
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"\"
                                                                               class=\"qa-q-item-what\">
                                                                                comment reshown
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 26, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    lectus
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    nec
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    molestie
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    natoque
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    penatibus
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q36\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"russell\" data-id=\"18\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=11324748187731566428&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_36\">
                                                                            <p class=\"count\">
                                                                                2
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_36_1_q36\" href=\"\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_36_-1_q36\" href=\"\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Vivamus accumsan leo sed iaculis volutpat
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"\"
                                                                               class=\"qa-q-item-what\">
                                                                                answered
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 26, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    vivamus
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    accumsan
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    leo
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    sed
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src=\"http://www.demo.local/qa-theme/dude/images/ads-banner.jpg\">
                                                    <div class=\"list-q-layout list-item clearfix  qa-q-closed\" id=\"q37\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_37\">
                                                                            <p class=\"count\">
                                                                                1
                                                                                <span>
                                                                                    vote
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_37_1_q37\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_37_-1_q37\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Pellentesque vel dui auctor, interdum eros ut
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status closed\">
                                                                            Closed
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                closed
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 26, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    lorem
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    ipsum
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    dolor
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    sit
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    amet
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix  qa-q-closed\" id=\"q29\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"princess\" data-id=\"14\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=15886826190290698119&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_29\">
                                                                            <p class=\"count\">
                                                                                5
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_29_1_q29\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_29_-1_q29\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        Nulla mi diam, egestas in vestibulum facilisis in enim
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status closed\">
                                                                            Closed
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                closed
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 26, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    nam
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    pellentesque
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    tempor
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    nibh
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix  qa-q-closed\" id=\"q20\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"monu\" data-id=\"9\">
                                                                <a href=\"\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=1564937841064345096&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_20\">
                                                                            <p class=\"count\">
                                                                                4
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_20_1_q20\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_20_-1_q20\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"\">
                                                                        In quis nulla porta condimentum massa
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status closed\">
                                                                            Closed
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                closed
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 26, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    mauris
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    lacinia
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    porta
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    condimentum
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q38\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"one_eyed\" data-id=\"11\">
                                                                <a href=\"./index.php/user/one_eyed\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=13393310319980628081&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_38\">
                                                                            <p class=\"count\">
                                                                                2
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_38_1_q38\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_38_-1_q38\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/38/pellentesque-tincidunt-porta-laoreet-dilom\">
                                                                        Pellentesque tincidunt porta laoreet dilom
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"./index.php/38/pellentesque-tincidunt-porta-laoreet-dilom?show=43#a43\"
                                                                               class=\"qa-q-item-what\">
                                                                                answered
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 26, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"./index.php/user/admin\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    pellentesque
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    tincidunt
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    porta
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    laoreet
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q33\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"wall_e\" data-id=\"16\">
                                                                <a href=\"./index.php/user/wall_e\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16626734729548631403&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_33\">
                                                                            <p class=\"count\">
                                                                                4
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_33_1_q33\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_33_-1_q33\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/33/donec-vehicula-metus-eu-mollis-bibendum\">
                                                                        Donec vehicula metus eu mollis bibendum
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status selected\">
                                                                            Solved
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"./index.php/33/donec-vehicula-metus-eu-mollis-bibendum?show=35#a35\"
                                                                               class=\"qa-q-item-what\">
                                                                                answer selected
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 25, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"./index.php/user/admin\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    donec
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    vehicula
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    mollis
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    bibendum
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src=\"http://www.demo.local/qa-theme/dude/images/ads-banner.jpg\">
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q32\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"mr_incredible\"
                                                                 data-id=\"15\">
                                                                <a href=\"./index.php/user/mr_incredible\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=1565640033579949442&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_32\">
                                                                            <p class=\"count\">
                                                                                5
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_32_1_q32\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_32_-1_q32\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/32/integer-porttitor-risus-quis-dui-eleifen\">
                                                                        Integer porttitor risus quis dui eleifen
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                asked
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 25, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"./index.php/user/mr_incredible\">
                                                                                        mr_incredible
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        950
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    suscipit
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    sed
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    massa
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    vel
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q24\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"juggornot\" data-id=\"12\">
                                                                <a href=\"./index.php/user/juggornot\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=3360453308508702985&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_24\">
                                                                            <p class=\"count\">
                                                                                6
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_24_1_q24\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_24_-1_q24\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/24/mauris-vulputate-eros-quis-condimentum\">
                                                                        Mauris vulputate, eros quis condimentum
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"./index.php/24/mauris-vulputate-eros-quis-condimentum?show=28#a28\"
                                                                               class=\"qa-q-item-what\">
                                                                                answered
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 24, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"./index.php/user/one_eyed\">
                                                                                        one_eyed
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        440
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    integer
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    vitae
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    arcu
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    ligula
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q26\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"old_man\" data-id=\"13\">
                                                                <a href=\"./index.php/user/old_man\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=17178655572799797940&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_26\">
                                                                            <p class=\"count\">
                                                                                3
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_26_1_q26\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_26_-1_q26\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            0
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/26/etiam-ac-elementum-estt-ut-enim\">
                                                                        Etiam ac elementum estt ut enim
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status open\">
                                                                            Open
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <span class=\"qa-q-item-what\">
                                                                                asked
                                                                            </span>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 24, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"./index.php/user/old_man\">
                                                                                        old_man
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        520
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    curabitur
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    lacinia
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    interdum
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    sem
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q1\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_1\">
                                                                            <p class=\"count\">
                                                                                3
                                                                                <span>
                                                                                    votes
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_1_1_q1\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_1_-1_q1\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            2
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/1/integer-sit-amet-erat-lobortis-feugiat-sem\">
                                                                        Integer sit amet erat lobortis feugiat sem
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status selected\">
                                                                            Solved
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"./index.php/1/integer-sit-amet-erat-lobortis-feugiat-sem?show=6#a6\"
                                                                               class=\"qa-q-item-what\">
                                                                                answer selected
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 24, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"./index.php/user/admin\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    lorem
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    ispium
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    dolar
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    isity
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-q-layout list-item clearfix \" id=\"q10\">
                                                        <div class=\"for-left\">
                                                            <div class=\"list-avatar avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img height=\"50\" width=\"50\" src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=50\">
                                                                </a>
                                                            </div>
                                                            <div class=\"list_content\">
                                                                <div class=\"list-counts pull-right\">
                                                                    <div class=\"vote\">
                                                                        <div class=\"enabled list-voting clearfix qa-voting-net positive\" id=\"voting_10\">
                                                                            <p class=\"count\">
                                                                                1
                                                                                <span>
                                                                                    vote
                                                                                </span>
                                                                            </p>
                                                                            <a title=\"Click to vote up\" data-id=\"vote_10_1_q10\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-up enabled vote-up enabled\">
                                                                            </a>
                                                                            <a title=\"Click to vote down\" data-id=\"vote_10_-1_q10\" href=\"#\" data-code=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\"
                                                                               class=\"icon-chevron-down enabled vote-down enabled\">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ans-count ra-tip\" title=\"\" data-original-title=\"Answers\">
                                                                        <span>
                                                                            2
                                                                        </span>
                                                                        Ans
                                                                    </div>
                                                                    <div class=\"view-count ra-tip\" title=\"\" data-original-title=\"Views\">
                                                                        <span>
                                                                            1
                                                                        </span>
                                                                        View
                                                                    </div>
                                                                </div>
                                                                <h4 class=\"list-title\">
                                                                    <a href=\"./index.php/10/aliquam-vitae-quam-est-in-vel-imperdiet-leo\">
                                                                        Aliquam vitae quam est In vel imperdiet leo
                                                                    </a>
                                                                </h4>
                                                                <div class=\"list-meta\">
                                                                    <div class=\"q-status pull-left\">
                                                                        <span class=\"post-status selected\">
                                                                            Solved
                                                                        </span>
                                                                    </div>
                                                                    <div class=\"post-meta\">
                                                                        <div class=\"asker-meta\">
                                                                            <a href=\"./index.php/10/aliquam-vitae-quam-est-in-vel-imperdiet-leo?show=12#a12\"
                                                                               class=\"qa-q-item-what\">
                                                                                answer selected
                                                                            </a>
                                                                            <span class=\"qa-q-item-when\">
                                                                                <span class=\"qa-q-item-when-data\">
                                                                                    Oct 24, 2013
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-where\">
                                                                                <span class=\"qa-q-item-where-pad\">
                                                                                    in
                                                                                </span>
                                                                                <span class=\"qa-q-item-where-data\">
                                                                                    <a href=\"\" class=\"qa-category-link\">
                                                                                        Themes
                                                                                    </a>
                                                                                </span>
                                                                            </span>
                                                                            <span class=\"qa-q-item-who\">
                                                                                <span class=\"qa-q-item-who-pad\">
                                                                                    by
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-data\">
                                                                                    <a href=\"./index.php/user/admin\">
                                                                                        Rahul Aryan
                                                                                    </a>
                                                                                </span>
                                                                                <span class=\"qa-q-item-who-points\">
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        (
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-data\">
                                                                                        1,260
                                                                                    </span>
                                                                                    <span class=\"qa-q-item-who-points-pad\">
                                                                                        points)
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-tags\">
                                                                    <span class=\"label\">
                                                                        Tags:
                                                                    </span>
                                                                    <div class=\"tags clearfix\">
                                                                        <ul class=\"qa-q-item-tag-list\">
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    velit
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    id
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    dignissim
                                                                                </a>
                                                                            </li>
                                                                            <li class=\"qa-q-item-tag-item\">
                                                                                <a href=\"\" class=\"qa-tag-link\">
                                                                                    iaculis
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END qa-q-list -->
                                                <div class=\"qa-q-list-form\">
                                                    <input type=\"hidden\" name=\"code\" value=\"0-1398748572-0a36e65a44809d31a34ea3cc715041638fddb090\">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4 column ui-sortable\">
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Events\" data-limit=\"10\" class=\"item-content widget-c\">
                                            <div class=\"widget events clearfix\">
                                                <h3 class=\"widget-title\">
                                                    最近的活动
                                                </h3>
                                                <ul class=\"ra-events\">
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-badge badge-icon bronze\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    earned a badge
                                                                    <span class=\"time\">
                                                                        Dec 29, 2013
                                                                    </span>
                                                                </h4>
                                                                <h5 class=\"event-title\">
                                                                    Visitor - Visited site on total of 30 days
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-badge badge-icon bronze\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    earned a badge
                                                                    <span class=\"time\">
                                                                        Dec 5, 2013
                                                                    </span>
                                                                </h4>
                                                                <h5 class=\"event-title\">
                                                                    Dedicated - Visited every day for 10 consecutive d…
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-checkmark selected\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    selected an answer
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/62/quisque-viverra-velit-tortor-eu-varius-dui-scelerisque?show=68#a68\">
                                                                    Quisque viverra velit tortor, eu varius dui sceler…
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-question question\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    asked
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/81/proin-adipiscing-libero-ipsum-iaculis-ipsum-facilisis-quis\">
                                                                    Proin adipiscing libero ipsum, vel iaculis ipsum f…
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-chat-3 ans\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    answered
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/46/example-of-related-question?show=80#a80\">
                                                                    Example of related question
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-chat-3 ans\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    answered
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/46/example-of-related-question?show=79#a79\">
                                                                    Example of related question
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-chat-2 comment\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"\" data-id=\"\">
                                                                <a href=\"./index.php/user/\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=34613087031464436&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    Anonymous commented
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus?show=78#c78\">
                                                                    Aenean nec porta Suspendisse scelerisque lectus
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-chat-2 comment\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"john\" data-id=\"2\">
                                                                <a href=\"./index.php/user/john\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16230449406133762946&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/john\">
                                                                        john
                                                                    </a>
                                                                    commented
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus?show=77#c77\">
                                                                    Aenean nec porta Suspendisse scelerisque lectus
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-chat-2 comment\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    commented
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus?show=76#c76\">
                                                                    Aenean nec porta Suspendisse scelerisque lectus
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class=\"event-item\">
                                                        <div class=\"event-icon pull-left icon-chat-2 comment\">
                                                        </div>
                                                        <div class=\"event-inner\">
                                                            <div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\">
                                                                <a href=\"./index.php/user/admin\">
                                                                    <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                                </a>
                                                            </div>
                                                            <div class=\"event-content\">
                                                                <h4>
                                                                    <a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">
                                                                        Rahul Aryan
                                                                    </a>
                                                                    commented
                                                                    <span class=\"time\">
                                                                        Dec 4, 2013
                                                                    </span>
                                                                </h4>
                                                                <a class=\"event-title\" href=\"http://www.demo.local/index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus?show=75#c75\">
                                                                    Aenean nec porta Suspendisse scelerisque lectus
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Ads\" data-limit=\"big-image\" class=\"item-content widget-c\">
                                            <img src=\"http://www.demo.local/qa-theme/dude/images/big-ads.jpg\" class=\"image-ads\">
                                        </div>
                                    </div>
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Answers List\" data-limit=\"10\"
                                             class=\"item-content widget-c\">
                                            <div class=\"widget w-question-list\">
                                                <h3 class=\"widget-title\">最新的答案</h3>
                                                <ul class=\"question-list\">
                                                    <li id=\"q-list-80\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/46/example-of-related-question#a80\">
                                                                    Nullam feugiat urna ac ipsum placerat pharetra. Pe
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        0
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-79\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/46/example-of-related-question#a79\">
                                                                    Suspendisse potenti. Proin adipiscing libero ipsum
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        0
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-68\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/62/quisque-viverra-velit-tortor-eu-varius-dui-scelerisque#a68\">
                                                                    background: none repeat scroll 0 0 #FFFFFF; bo
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        0
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-64\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"wall_e\" data-id=\"16\">
                                                            <a href=\"./index.php/user/wall_e\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16626734729548631403&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/wall_e\">
                                                                    wall_e
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/63/morbi-ullamcorper-sapien-non-nunc-dapibus#a64\">
                                                                    This function is not meant to validate the given U
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        0
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-61\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/36/vivamus-accumsan-leo-sed-iaculis-volutpat#a61\">
                                                                    Maecenas at erat lectus. Maecenas a lorem id justo
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        0
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-57\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/46/example-of-related-question#a57\">
                                                                    Fusce bibendum faucibus metus eu malesuada. Nulla
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        0
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-53\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"juggornot\" data-id=\"12\">
                                                            <a href=\"./index.php/user/juggornot\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=3360453308508702985&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/juggornot\">
                                                                    juggornot
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/46/example-of-related-question#a53\">
                                                                    Donec vehicula metus eu mollis bibendum. Aliquam f
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        2
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-51\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"john\" data-id=\"2\">
                                                            <a href=\"./index.php/user/john\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16230449406133762946&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/john\">
                                                                    john
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/46/example-of-related-question#a51\">
                                                                    Maecenas at erat lectus. Maecenas a lorem id justo
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        3
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-43\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/38/pellentesque-tincidunt-porta-laoreet-dilom#a43\">
                                                                    Duis eu nibh tincidunt, porttitor eros at, cons
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        0
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-35\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"buzz\" data-id=\"17\">
                                                            <a href=\"./index.php/user/buzz\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=11576600850225663528&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/buzz\">
                                                                    buzz
                                                                </a>
                                                                answered
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/33/donec-vehicula-metus-eu-mollis-bibendum#a35\">
                                                                    Donec vehicula metus eu mollis bibendum. Aliquam f
                                                                </a>
                                                            </p>
                                                            <div class=\"counts\">
                                                                <div class=\"vote-count icon-chevron-up\">
                                                                    <span>
                                                                        1
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item parent ui-draggable\">
                                        <div data-type=\"ra_widget\" data-name=\"Ra Comments List\" data-limit=\"5\"
                                             class=\"item-content widget-c\">
                                            <div class=\"widget w-question-list\">
                                                <h3 class=\"widget-title\">最新评论</h3>
                                                <ul class=\"question-list\">
                                                    <li id=\"q-list-78\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"\" data-id=\"\">
                                                            <a href=\"\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=34613087031464436&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/\">
                                                                </a>
                                                                commented
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus#c78\">
                                                                    This ai anonymous comments testings
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-77\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"john\" data-id=\"2\">
                                                            <a href=\"./index.php/user/john\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=16230449406133762946&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/john\">
                                                                    john
                                                                </a>
                                                                commented
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus#c77\">
                                                                    Morbi sed elit sit amet lacus euismod varius.
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-76\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                commented
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus#c76\">
                                                                    Integer ornare sem quis magna sagittis fringilla.f
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-75\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                commented
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus#c75\">
                                                                    At lacus nec leo fringilla placerat. Fusce placera
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li id=\"q-list-74\" class=\"question-item\">
                                                        <div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\">
                                                            <a href=\"./index.php/user/admin\">
                                                                <img src=\"http://www.demo.local/?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\">
                                                            </a>
                                                        </div>
                                                        <div class=\"list-right\">
                                                            <h5>
                                                                <a href=\"./index.php/user/admin\">
                                                                    Rahul Aryan
                                                                </a>
                                                                commented
                                                            </h5>
                                                            <p>
                                                                <a href=\"./index.php/16/aenean-nec-porta-suspendisse-scelerisque-lectus#c74\">
                                                                    Integer ornare sem quis magna sagittis fringilla.
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"position:absolute; left:-9999px; top:-9999px;\">
            <span id=\"qa-waiting-template\" class=\"qa-waiting\">
                ...
            </span>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "AcmeDefaultBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
