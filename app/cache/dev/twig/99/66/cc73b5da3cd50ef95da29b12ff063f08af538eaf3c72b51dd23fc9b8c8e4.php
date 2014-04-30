<?php

/* AcmeDefaultBundle:Account:index.html.twig */
class __TwigTemplate_9966cc73b5da3cd50ef95da29b12ff063f08af538eaf3c72b51dd23fc9b8c8e4 extends Twig_Template
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
                        <h1>\t\tMy account details
                        </h1>
                    </div>


                    <form method=\"get\" action=\"./?qa=search\" class=\"form-inline search-form pull-right\">
                        <input type=\"hidden\" name=\"qa\" value=\"search\">\t<div class=\"form-group\">
                            <input type=\"text\" name=\"q\" value=\"\" class=\"form-control navbar-search\" placeholder=\"Search for questions\">
                        </div>
                        <button type=\"submit\" class=\"icon-magnifier btn btn-primary\" title=\"Search\"></button>\t\t\t
                    </form>

                    <div class=\"ra-social-output clearfix\">
                        <ul class=\"inline only-icon\">
                            <li><a target=\"_blank\" href=\"http://facebook.com/nerdaryan\"><img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/facebook_24.png\"><span>facebook</span></a></li>
                            <li><a target=\"_blank\" href=\"https://twitter.com/nerdaryan\"><img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/twitter_24.png\"><span>twitter</span></a></li>
                            <li><a target=\"_blank\" href=\"https://plus.google.com/102280288713981086298\"><img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/google-plus_24.png\"><span>PlusOne</span></a></li>
                        </ul>
                    </div>
                </div>\t
            </div>
        </header>


        <script type=\"text/javascript\">
            var b = document.getElementsByTagName('body')[0];
            b.className = b.className.replace('qa-body-js-off', 'qa-body-js-on');
        </script>
        <div id=\"index\">
            <div class=\"contents \">
                <div id=\"account\" class=\"main-parts\">
                    <div id=\"builder_account\" data-name=\"account\" class=\"dynamic-layout \"><div class=\"ra-row parent ui-draggable\">  <div class=\"item-content\"> <div class=\"ra-container\"><div class=\"container\"><div class=\"row\"><div class=\"col-md-8 column ui-sortable\"><div class=\"item parent ui-draggable\">  <div data-type=\"ra_widget\" data-name=\"Main Parts\" class=\"item-content widget-c\">\t\t\t\t<div class=\"container qa-part-form-profile\">
                                                            <form class=\"form-horizontal\" enctype=\"multipart/form-data\" method=\"post\" action=\"./?qa=account\">
                                                                <div class=\"qa-form-wide\">
                                                                    <div class=\"form-group  clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Member for:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <span class=\"qa-form-wide-static\">4 hours</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group  clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Type:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <span class=\"qa-form-wide-static\">Super Administrator</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group handle clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Username:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"handle\" type=\"text\" value=\"test\" class=\"qa-form-wide-text\" placeholder=\"Username\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group email clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Email:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"email\" type=\"text\" value=\"test@llocalhost.com\" class=\"qa-form-wide-text\" placeholder=\"Email\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group messages clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Private messages:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"messages\" type=\"checkbox\" value=\"1\" checked=\"\" class=\"qa-form-wide-checkbox\">
                                                                            <span class=\"help-inline\">
                                                                                <span class=\"qa-form-wide-note\">Allow users to email you (without seeing your address)</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group wall clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Wall posts:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"wall\" type=\"checkbox\" value=\"1\" checked=\"\" class=\"qa-form-wide-checkbox\">
                                                                            <span class=\"help-inline\">
                                                                                <span class=\"qa-form-wide-note\">Allow users to post on your wall (you will also be emailed)</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group avatar clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Avatar:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"avatar\" type=\"radio\" value=\"\" class=\"qa-form-wide-radio\"> <span style=\"margin:2px 0; display:inline-block;\"><img src=\"./?qa=image&amp;qa_blobid=34613087031464436&amp;qa_size=32\" width=\"32\" height=\"32\" class=\"qa-avatar-image\" alt=\"\"></span> Default
                                                                            <br>
                                                                            <input name=\"avatar\" type=\"radio\" value=\"gravatar\" class=\"qa-form-wide-radio\"> <span style=\"margin:2px 0; display:inline-block;\"><img src=\"http://www.gravatar.com/avatar/debdc9175484c740a106b5d016f191c8?s=32\" width=\"32\" height=\"32\" class=\"qa-avatar-image\" alt=\"\"> Show my <a href=\"http://www.gravatar.com/\" target=\"_blank\">Gravatar</a></span>
                                                                            <br>
                                                                            <input name=\"avatar\" type=\"radio\" value=\"uploaded\" checked=\"\" class=\"qa-form-wide-radio\"> <span style=\"margin:2px 0; display:inline-block;\"><img src=\"./?qa=image&amp;qa_blobid=2151350950843633819&amp;qa_size=32\" width=\"32\" height=\"18\" class=\"qa-avatar-image\" alt=\"\"></span><input name=\"file\" type=\"file\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group field_1 clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Full name:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"field_1\" type=\"text\" value=\"\" class=\"qa-form-wide-text\" placeholder=\"Full name\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group field_2 clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Location:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"field_2\" type=\"text\" value=\"\" class=\"qa-form-wide-text\" placeholder=\"Location\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group field_3 clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Website:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"field_3\" type=\"text\" value=\"\" class=\"qa-form-wide-text\" placeholder=\"Website\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group field_4 clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            About:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <textarea name=\"field_4\" rows=\"8\" cols=\"40\" class=\"qa-form-wide-text\"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-actions\">
                                                                        <input onclick=\"qa_show_waiting_after(this, false);\" value=\"Save Profile\" title=\"\" type=\"submit\" class=\"btn btn-default btn-save\">
                                                                    </div>
                                                                </div>
                                                                <input type=\"hidden\" name=\"dosaveprofile\" value=\"1\">
                                                                <input type=\"hidden\" name=\"code\" value=\"1-1398805216-99dde1049281505634adf3a07b442f5001bfa657\">
                                                            </form>
                                                        </div>
                                                        <div class=\"container qa-part-form-password\">
                                                            <h2>Change Password</h2>
                                                            <form class=\"form-horizontal\" method=\"post\" action=\"./?qa=account\">
                                                                <div class=\"qa-form-wide\">
                                                                    <div class=\"form-group oldpassword clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Old password:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"oldpassword\" type=\"password\" value=\"\" class=\"qa-form-wide-text\" placeholder=\"Old password\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group newpassword1 clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            New password:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"newpassword1\" type=\"password\" value=\"\" class=\"qa-form-wide-text\" placeholder=\"New password\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group newpassword2 clearfix\">
                                                                        <label class=\"col-lg-2 control-label\">
                                                                            Retype new password:
                                                                        </label>
                                                                        <div class=\"col-lg-10\">
                                                                            <input name=\"newpassword2\" type=\"password\" value=\"\" class=\"qa-form-wide-text\" placeholder=\"Retype new password\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-actions\">
                                                                        <input value=\"Change Password\" title=\"\" type=\"submit\" class=\"btn btn-default btn-change\">
                                                                    </div>
                                                                </div>
                                                                <input type=\"hidden\" name=\"dochangepassword\" value=\"1\">
                                                                <input type=\"hidden\" name=\"code\" value=\"1-1398805216-e7f4a47f28448b9603b4851218c68aea39c93402\">
                                                            </form>
                                                        </div>
                                                    </div> </div></div><div class=\"col-md-4 column ui-sortable\"><div class=\"item parent ui-draggable\">  <div data-type=\"ra_widget\" data-name=\"Ra Events\" data-limit=\"5\" class=\"item-content widget-c\">\t\t<div class=\"widget events clearfix\">
                                                            <h3 class=\"widget-title\">Recent Activities</h3>
                                                            <ul class=\"ra-events\"><li class=\"event-item\"><div class=\"event-icon pull-left icon-badge badge-icon bronze\"></div><div class=\"event-inner\"><div class=\"avatar pull-left\" data-handle=\"test\" data-id=\"22\"><a href=\"./?qa=user/test\"><img src=\"./?qa=image&amp;qa_blobid=2151350950843633819&amp;qa_size=40\"></a></div><div class=\"event-content\"><h4><a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/test\">test</a> earned a badge <span class=\"time\">4 hours ago</span></h4><h5 class=\"event-title\">Photogenic - Uploaded an avatar image</h5></div></div></li><li class=\"event-item\"><div class=\"event-icon pull-left icon-badge badge-icon bronze\"></div><div class=\"event-inner\"><div class=\"avatar pull-left\" data-handle=\"test\" data-id=\"22\"><a href=\"./?qa=user/test\"><img src=\"./?qa=image&amp;qa_blobid=2151350950843633819&amp;qa_size=40\"></a></div><div class=\"event-content\"><h4><a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/test\">test</a> earned a badge <span class=\"time\">4 hours ago</span></h4><h5 class=\"event-title\">100 Club - Received total of 100 points</h5></div></div></li><li class=\"event-item\"><div class=\"event-icon pull-left icon-badge badge-icon bronze\"></div><div class=\"event-inner\"><div class=\"avatar pull-left\" data-handle=\"shyinyong\" data-id=\"21\"><a href=\"./?qa=user/shyinyong\"><img src=\"./?qa=image&amp;qa_blobid=34613087031464436&amp;qa_size=40\"></a></div><div class=\"event-content\"><h4><a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/shyinyong\">shyinyong</a> earned a badge <span class=\"time\">2 days ago</span></h4><h5 class=\"event-title\">100 Club - Received total of 100 points</h5></div></div></li><li class=\"event-item\"><div class=\"event-icon pull-left icon-badge badge-icon bronze\"></div><div class=\"event-inner\"><div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\"><a href=\"./?qa=user/admin\"><img src=\"./?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\"></a></div><div class=\"event-content\"><h4><a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">Rahul Aryan</a> earned a badge <span class=\"time\">Dec 29, 2013</span></h4><h5 class=\"event-title\">Visitor - Visited site on total of 30 days</h5></div></div></li><li class=\"event-item\"><div class=\"event-icon pull-left icon-badge badge-icon bronze\"></div><div class=\"event-inner\"><div class=\"avatar pull-left\" data-handle=\"admin\" data-id=\"1\"><a href=\"./?qa=user/admin\"><img src=\"./?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\"></a></div><div class=\"event-content\"><h4><a target=\"_blank\" class=\"qa-user-link\" href=\"http://www.demo.local/user/admin\">Rahul Aryan</a> earned a badge <span class=\"time\">Dec 5, 2013</span></h4><h5 class=\"event-title\">Dedicated - Visited every day for 10 consecutive d…</h5></div></div></li></ul>\t\t</div>
                                                    </div> </div><div class=\"item parent ui-draggable\">  <div data-type=\"ra_widget\" data-name=\"Ra Answers List\" data-limit=\"5\" class=\"item-content widget-c\">\t\t<div class=\"widget w-question-list\">
                                                            <h3 class=\"widget-title\">Latest Answers</h3>
                                                            <ul class=\"question-list\"><li id=\"q-list-80\" class=\"question-item\"><div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\"><a href=\"./?qa=user/admin\"><img src=\"./?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\"></a></div><div class=\"list-right\"><h5><a href=\"./?qa=user/admin\">Rahul Aryan</a> answered</h5><p><a href=\"./?qa=46/example-of-related-question#a80\">Nullam feugiat urna ac ipsum placerat pharetra. Pe</a></p><div class=\"counts\"><div class=\"vote-count icon-chevron-up\"><span>0</span></div></div></div></li><li id=\"q-list-79\" class=\"question-item\"><div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\"><a href=\"./?qa=user/admin\"><img src=\"./?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\"></a></div><div class=\"list-right\"><h5><a href=\"./?qa=user/admin\">Rahul Aryan</a> answered</h5><p><a href=\"./?qa=46/example-of-related-question#a79\">Suspendisse potenti. Proin adipiscing libero ipsum</a></p><div class=\"counts\"><div class=\"vote-count icon-chevron-up\"><span>0</span></div></div></div></li><li id=\"q-list-68\" class=\"question-item\"><div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\"><a href=\"./?qa=user/admin\"><img src=\"./?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\"></a></div><div class=\"list-right\"><h5><a href=\"./?qa=user/admin\">Rahul Aryan</a> answered</h5><p><a href=\"./?qa=62/quisque-viverra-velit-tortor-eu-varius-dui-scelerisque#a68\">background: none repeat scroll 0 0 #FFFFFF;
                                                                                bo</a></p><div class=\"counts\"><div class=\"vote-count icon-chevron-up\"><span>0</span></div></div></div></li><li id=\"q-list-64\" class=\"question-item\"><div class=\"pull-left avatar\" data-handle=\"wall_e\" data-id=\"16\"><a href=\"./?qa=user/wall_e\"><img src=\"./?qa=image&amp;qa_blobid=16626734729548631403&amp;qa_size=40\"></a></div><div class=\"list-right\"><h5><a href=\"./?qa=user/wall_e\">wall_e</a> answered</h5><p><a href=\"./?qa=63/morbi-ullamcorper-sapien-non-nunc-dapibus#a64\">This function is not meant to validate the given U</a></p><div class=\"counts\"><div class=\"vote-count icon-chevron-up\"><span>0</span></div></div></div></li><li id=\"q-list-61\" class=\"question-item\"><div class=\"pull-left avatar\" data-handle=\"admin\" data-id=\"1\"><a href=\"./?qa=user/admin\"><img src=\"./?qa=image&amp;qa_blobid=4767315952867940206&amp;qa_size=40\"></a></div><div class=\"list-right\"><h5><a href=\"./?qa=user/admin\">Rahul Aryan</a> answered</h5><p><a href=\"./?qa=36/vivamus-accumsan-leo-sed-iaculis-volutpat#a61\">Maecenas at erat lectus. Maecenas a lorem id justo</a></p><div class=\"counts\"><div class=\"vote-count icon-chevron-up\"><span>0</span></div></div></div></li></ul>\t\t</div>
                                                    </div> </div></div></div></div></div> </div> </div>
                    </div>

                </div>
            </div>


        </div>
        <div style=\"position:absolute; left:-9999px; top:-9999px;\">
            <span id=\"qa-waiting-template\" class=\"qa-waiting\">...</span>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "AcmeDefaultBundle:Account:index.html.twig";
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
