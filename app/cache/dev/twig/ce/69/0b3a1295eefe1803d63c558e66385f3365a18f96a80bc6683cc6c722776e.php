<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ce690b3a1295eefe1803d63c558e66385f3365a18f96a80bc6683cc6c722776e extends Twig_Template
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
        echo "欢迎您登录 ";
    }

    // line 5
    public function block_js_css($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\">

    </script>
";
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "    <section id=\"main\" class=\"has-fixed-top\">
        <header id=\"mastheader\">
            <div class=\"page-header\">
                <div class=\"container\">
                    <div class=\"page-title pull-left\">
                        <h1>登录</h1>
                    </div>
                    <form method=\"get\" action=\"./?qa=search\" class=\"form-inline search-form pull-right\">
                        <input type=\"hidden\" name=\"qa\" value=\"search\">\t<div class=\"form-group\">
                            <input type=\"text\" name=\"q\" value=\"\" class=\"form-control navbar-search\" placeholder=\"Search for questions\">
                        </div>
                        <button type=\"submit\" class=\"icon-magnifier btn btn-primary\" title=\"Search\"></button>
                    </form>
                    <div class=\"ra-social-output clearfix\">
                        <ul class=\"inline only-icon\">
                            <li><a target=\"_blank\" href=\"http://facebook.com/nerdaryan\"><img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/facebook_24.png\"><span>facebook</span></a></li>
                            <li><a target=\"_blank\" href=\"https://twitter.com/nerdaryan\"><img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/twitter_24.png\"><span>twitter</span></a></li>
                            <li><a target=\"_blank\" href=\"https://plus.google.com/102280288713981086298\"><img style=\"height:24px;width:24px\" src=\"http://www.demo.local/qa-plugin/ra-social/images/google-plus_24.png\"><span>PlusOne</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <script type=\"text/javascript\">
            var b = document.getElementsByTagName('body')[0];
            b.className = b.className.replace('qa-body-js-off', 'qa-body-js-on');
        </script>
        <div id=\"index\">
            <div class=\"contents \">
                <div id=\"login\">

                    <div class=\"container\">
                        <form  id=\"form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\">
                            <div class=\"qa-form-tall\">
                                <div class=\"form-group emailhandle clearfix\">
                                    <div class=\"col-lg-10\">
                                        <input name=\"_username\" id=\"emailhandle\" type=\"text\" value=\"\" class=\"qa-form-tall-text\" placeholder=\"Email or Username\">
                                    </div>
                                </div>
                                <div class=\"form-group password clearfix\">
                                    <div class=\"col-lg-10\">
                                        <input name=\"_password\" id=\"password\" type=\"password\" value=\"\" class=\"qa-form-tall-text\" placeholder=\"Password\">
                                        <span class=\"help-inline\">
                                            <div class=\"qa-form-tall-note\">
                                                ";
        // line 55
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 56
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))), "html", null, true);
            echo "
                                                ";
        }
        // line 58
        echo "                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"form-group remember clearfix\">
                                    <label class=\"col-lg-2 control-label\">
                                        这是我的个人计算机
                                    </label>
                                    <div class=\"col-lg-10\">
                                        <input name=\"_remember_me\" type=\"checkbox\" value=\"on\" class=\"qa-form-tall-checkbox\">
                                    </div>
                                </div>
                                <div class=\"form-actions\">

                                    <input value=\"登录\" title=\"\" type=\"submit\" name=\"_submit\" class=\"btn btn-default btn-login\">
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        </form>
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
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 75,  106 => 58,  100 => 56,  98 => 55,  83 => 43,  49 => 11,  46 => 10,  39 => 6,  36 => 5,  30 => 3,);
    }
}
