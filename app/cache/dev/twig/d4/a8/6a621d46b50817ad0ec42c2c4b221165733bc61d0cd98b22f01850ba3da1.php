<?php

/* AcmeDefaultBundle::layout.html.twig */
class __TwigTemplate_d4a86a621d46b50817ad0ec42c2c4b221165733bc61d0cd98b22f01850ba3da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"\">
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
        <title>App</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.demo.local/qa-theme/dude/qa-styles.css?1.6.2\">
        <script src=\"http://www.demo.local/qa-content/jquery-1.7.2.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://www.demo.local/qa-content/qa-page.js?1.6.2\" type=\"text/javascript\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.demo.local/qa-plugin/ra-social/style.css\">
        <script src=\"http://www.demo.local/qa-plugin/ra-social/script.js\"></script>
        <link href=\"http://www.demo.local/qa-theme/dude/css/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"http://www.demo.local/qa-theme/dude/css/dude.css\" type=\"text/css\" rel=\"stylesheet\">
        <meta name=\"generator\" content=\"rahularyan\">
        <style></style>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.demo.local/qa-theme/dude/font/style.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.demo.local/qa-theme/dude/css/dlmenu.css\">
        <link rel=\"shortcut icon\" href=\"http://www.demo.local/qa-theme/dude/images/ico/favicon.png\">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"http://www.demo.local/qa-theme/dude/js/respond.min.js\"></script>
        <![endif]-->
        <script src=\"http://www.demo.local/qa-theme/dude/js/modernizr.custom.js\"></script>
    </head>\t
    <body class=\"qa-template-qa qa-body-js-on\">
        <div class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <div id=\"dl-menu\" class=\"dl-menuwrapper\">
                        <button class=\"dl-menu-btn\">
                            Open Menu
                        </button>
                        <ul class=\"dl-menu\">
                            <li class=\"dropdown\">
                                <a class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"./index.php/questions\">
                                    问题
                                </a>
                                <ul class=\"dl-submenu\">
                                    <li class=\"dl-back\">
                                        <a href=\"\">
                                            back
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/questions\">
                                            Recent
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/questions?sort=hot\">
                                            Hot!
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/questions?sort=votes\">
                                            Most votes
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/questions?sort=answers\">
                                            Most answers
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/questions?sort=views\">
                                            Most views
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"\">
                                <a class=\"\" href=\"./index.php/hot\">
                                    Hot!
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"./index.php/unanswered\">
                                    Unanswered
                                </a>
                                <ul class=\"dl-submenu\">
                                    <li class=\"dl-back\">
                                        <a href=\"#\">
                                            back
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/unanswered\">
                                            No answer
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/unanswered?by=selected\">
                                            No selected answer
                                        </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"./index.php/unanswered?by=upvotes\">
                                            No upvoted answer
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"\">
                                <a class=\"\" href=\"./index.php/tags\">
                                    Tags
                                </a>
                            </li>
                            <li class=\"\">
                                <a class=\"\" href=\"./index.php/categories\">
                                    Categories
                                </a>
                            </li>
                            <li class=\"\">
                                <a class=\"\" href=\"./index.php/users\">
                                    Users
                                </a>
                            </li>
                            <li class=\"\">
                                <a class=\"\" href=\"./badges\">
                                    Badges
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("acme_default_homepage");
        echo "\" class=\"logo image\" title=\"Dude\">
                        <img src=\"http://www.demo.local/qa-theme/dude/images/logo.png\">
                    </a>
                </div>
                <ul class=\"nav-userbox nav pull-right\">
                    ";
        // line 130
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 131
            echo "                        <li id=\"user-nag\">
                            <a class=\"profile\" href=\"\">
                                <img src=\"http://www.demo.local/?qa=image&qa_blobid=1565640033579949442&qa_size=20\" />
                                <span>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</span>
                                <span class=\"points\">100</span>
                            </a>
                        </li>
                        <li class=\"dropdown\" id=\"menuLogin\">
                            <a class=\"dropdown-toggle user-tools\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"icon-cog\"></i>
                            </a>
                            <div class=\"dropdown-menu\">\t\t\t\t
                                <ul class=\"user-nav\">
                                    <li><a class=\"icon-profile\" href=\"";
            // line 144
            echo $this->env->getExtension('routing')->getPath("user_index", array("user_name" => "shyinyong"));
            echo "\">我的主页</a></li>
                                    <li><a class=\"icon-user-2\"  href=\"";
            // line 145
            echo $this->env->getExtension('routing')->getUrl("account_index");
            echo "\" title=\"My Account\">我的帐户</a></li>
                                    <li><a class=\"icon-bullhorn\"  href=\"./index.php/updates\" title=\"My Updates\">我的更新</a></li>
                                    <li><a class=\"icon-switch\"  href=\"";
            // line 147
            echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
            echo "\" title=\"Logout\">退出</a></li>
                                </ul>
                            </div>
                        </li>
                    ";
        } else {
            // line 152
            echo "                        <li class=\"dropdown\" id=\"menuLogin\">
                            <a class=\"user-buttons\" href=\"";
            // line 153
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" title=\"Register\">免费注册</a>
                            <a class=\"dropdown-toggle user-buttons\" href=\"";
            // line 154
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" data-toggle=\"\" id=\"navLogin\">登录</a>
                            <div class=\"dropdown-menu login-form\">
                                <form id=\"loginform\" action=\"";
            // line 156
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                                    <input type=\"text\" id=\"qa-userid\" name=\"_username\" placeholder=\"Email or Username\">
                                    <input type=\"password\" id=\"qa-password\" name=\"_password\" placeholder=\"Password\">
                                    <label class=\"checkbox inline\">
                                        <input type=\"checkbox\" id=\"qa-rememberme\" name=\"_remember_me\" value=\"on\" />
                                        记住我
                                    </label>
                                    <input type=\"submit\" value=\"登录\" id=\"qa-login\" name=\"_submit\" class=\"btn btn-primary btn-block\">
                                </form>
                            </div>
                        </li>
                    ";
        }
        // line 168
        echo "                </ul>
                <a class=\"ask-btn btn btn-danger btn-sm\" href=\"./index.php/ask\">
                    发表我的问题
                </a>
                <ul class=\"main-menu nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("acme_default_homepage");
        echo "\" title=\"Dude\" class=\"home-anchor icon-home\">
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("questions_index");
        echo "\">问题</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a  href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("questions_index", array("sort" => "recent"));
        echo "\">最新</a></li>
                            <li class=\"\"><a  href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("questions_index", array("sort" => "host"));
        echo "\">Hot!</a></li>
                            <li class=\"\"><a  href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("questions_index", array("sort" => "votes"));
        echo "\">最多投票</a></li>
                            <li class=\"\"><a  href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("questions_index", array("sort" => "answers"));
        echo "\">最多回答</a></li>
                            <li class=\"\"><a  href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("questions_index", array("sort" => "views"));
        echo "\">最多查看</a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"\" href=\"";
        // line 188
        echo $this->env->getExtension('routing')->getPath("questions_index", array("sort" => "host"));
        echo "\">Hot!</a>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\" dropdown-toggle\" data-toggle=\"dropdown\" href=\"\">未回答</a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"\"><a  href=\"\">没有答案</a></li>
                            <li class=\"\"><a  href=\"\">没有选择答案</a></li>
                            <li class=\"\"><a  href=\"\">没有投票的答案</a></li>
                        </ul>
                    </li>
                    <li class=\"\"><a class=\"\" href=\"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("tags_index");
        echo "\"></i>标签</a></li>
                    <li class=\"\"><a class=\"\" href=\"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("categories_index");
        echo "\"></i>分类</a></li>
                    <li class=\"\"><a class=\"\" href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("users_index");
        echo "\"></i>用户</a></li>
                    <li class=\"\"><a class=\"\" href=\"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("acme_default_badges");
        echo "\"></i>徽章</a></li>
                </ul>
            </div>
        </div>
      
        ";
        // line 206
        $this->displayBlock('main', $context, $blocks);
        // line 209
        echo "

        <div id=\"bottom\">
            <div id=\"builder_bottom\" data-name=\"bottom\" class=\"dynamic-layout \">
                <div class=\"ra-row parent ui-draggable\">
                    <div class=\"item-content\">
                        <div class=\"ra-container\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 column ui-sortable\">
                                        <div class=\"item parent ui-draggable\">
                                            <div class=\"item-content ra-editable\">
                                                <div class=\"about-us\">
                                                    <a href=\"";
        // line 222
        echo $this->env->getExtension('routing')->getPath("acme_default_homepage");
        echo "\" class=\"logo image\" title=\"Dude\">
                                                        <img src=\"http://www.demo.local/qa-theme/dude/images/logo.png\">
                                                    </a>
                                                    <p>APP是用户可以问问题和回答其他人在线问答站点的问题。 <br> <br> 用户可以通过他们的活动赚取徽章和点。兄弟是一个伟大的网站为营建和获得知识。 <br> <br>
                                                        <a href=\"#\" class=\"btn btn-default\">
                                                            阅读更多
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3 column ui-sortable\">
                                        <div class=\"item parent ui-draggable\">
                                            <div data-type=\"ra_widget\" data-name=\"Ra Tags List\" data-limit=\"5\" class=\"item-content widget-c\">
                                                <div class=\"widget top-users block clearfix\">
                                                    <h3 class=\"widget-title have-link\">
                                                        <a class=\"all-user-list btn pull-right icon-reorder\" href=\"./index.php/tags\">
                                                        </a>
                                                        Tags
                                                    </h3>
                                                    <ul class=\"tag-list\">
                                                        <li>
                                                            <a class=\"icon-tag\" href=\"./index.php/tag/ipsum\">
                                                                ipsum
                                                                <span>
                                                                    4
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-tag\" href=\"./index.php/tag/lorem\">
                                                                lorem
                                                                <span>
                                                                    4
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-tag\" href=\"./index.php/tag/pellentesque\">
                                                                pellentesque
                                                                <span>
                                                                    3
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-tag\" href=\"./index.php/tag/sed\">
                                                                sed
                                                                <span>
                                                                    3
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-tag\" href=\"./index.php/tag/tempor\">
                                                                tempor
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
                                            <div data-type=\"ra_widget\" data-name=\"Ra Categories List\" data-limit=\"5\"
                                                 class=\"item-content widget-c\">
                                                <div class=\"cat-list widget top-users block clearfix\">
                                                    <h3 class=\"widget-title have-link\">
                                                        <a class=\"all-user-list btn pull-right icon-reorder\" href=\"./index.php/categories\">
                                                        </a>
                                                        分类
                                                    </h3>
                                                    <ul class=\"ra-cat-list clearfix\">
                                                        <li>
                                                            <a class=\"icon-folder-close\" title=\"Maecenas at erat lectus. Maecenas a lorem id justo vestibulum pellentesque. Aliquam sollicitudin lorem eget varius rhoncus.\"
                                                               href=\"./index.php/themes\">
                                                                主题
                                                                <span>
                                                                    22
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-folder-close\" title=\"Nulla suscipit nunc ut diam adipiscing, et iaculis tellus dapibus. Integer porttitor risus quis dui eleifend, sit amet\"
                                                               href=\"./index.php/plugins\">
                                                                插件
                                                                <span>
                                                                    0
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-folder-close\" title=\"Yuis eu nibh tincidunt, porttitor eros at, consequat diam. Sed in rutrum arcu. Morbi gravida, erat quis pellentesque iaculit\"
                                                               href=\"./index.php/joomla\">
                                                                Joomla
                                                                <span>
                                                                    2
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-folder-close\" title=\"Daecenas at erat lectus. Maecenas a lorem id justo vestibulum pellentesque. Aliquam sollicitudin lorem eget varius.\"
                                                               href=\"./index.php/widgets\">
                                                                Widgets
                                                                <span>
                                                                    0
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"icon-folder-close\" title=\"An opensource web browser by mozzila foundation\"
                                                               href=\"./index.php/firefox\">
                                                                Firefox
                                                                <span>
                                                                    0
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-2 column ui-sortable\">
                                        <div class=\"item parent ui-draggable\">
                                            <div class=\"item-content ra-editable\">
                                                <h4>
                                                    与我们连接
                                                </h4>
                                            </div>
                                        </div>
                                        <div class=\"item parent ui-draggable\">
                                            <div data-type=\"widget\" data-name=\"RA Social\" class=\"item-content widget-c\">
                                                <div class=\"ra-social-output clearfix\">
                                                    <ul class=\"inline only-icon\">
                                                        <li>
                                                            <a href=\"\">
                                                                <img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/rss_24.png\">
                                                                <span>
                                                                    Recent questions and answers
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target=\"_blank\" href=\"\">
                                                                <img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/facebook_24.png\">
                                                                <span>
                                                                    facebook
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target=\"_blank\" href=\"\">
                                                                <img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/twitter_24.png\">
                                                                <span>
                                                                    twitter
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target=\"_blank\" href=\"\">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id=\"mastfooter\" class=\"clearfix\">
            <div class=\"container\">\t\t\t\t
                <div class=\"qa-nav-footer\">
                    <ul class=\"qa-nav-footer-list\">
                        <li class=\"qa-nav-footer-item qa-nav-footer-feedback\">
                            <a href=\"./index.php/feedback\" class=\"qa-nav-footer-link\">反馈</a>
                        </li>
                    </ul>
                    <div class=\"qa-nav-footer-clear\">
                    </div>
                </div>
                <div class=\"pull-right\">
                    <p class=\"copyright\">&copy; 2014 All Rights Reserved by <a href=\"\" title=\"上海捷微信息科技有限公司\">上海捷微信息科技有限公司</a></p>
                </div>
            </div>
        </footer>
        <script src=\"http://www.demo.local/qa-theme/dude/js/jquery-ui.js\"></script>
        <script src=\"http://www.demo.local/qa-theme/dude/js/bootstrap.js\"></script>\t\t\t\t
        <script src=\"http://www.demo.local/qa-theme/dude/js/jquery.dlmenu.js\"></script>\t\t
        <script src=\"http://www.demo.local/qa-theme/dude/js/socialite.min.js\"></script>\t\t

        <script src=\"http://www.demo.local/qa-theme/dude/js/dude.js\"></script>
    </body>
</html>
";
    }

    // line 206
    public function block_main($context, array $blocks = array())
    {
        // line 207
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "AcmeDefaultBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 207,  524 => 206,  311 => 222,  296 => 209,  294 => 206,  286 => 201,  282 => 200,  278 => 199,  274 => 198,  261 => 188,  254 => 184,  250 => 183,  246 => 182,  242 => 181,  238 => 180,  233 => 178,  226 => 174,  218 => 168,  203 => 156,  198 => 154,  194 => 153,  191 => 152,  183 => 147,  178 => 145,  174 => 144,  161 => 134,  156 => 131,  154 => 130,  146 => 125,  20 => 1,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
