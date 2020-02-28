<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_343f5a18be74e3da77e401c6345956f8540f2b3cda39956f3769d01c1a214505 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'Preloder' => [$this, 'block_Preloder'],
            'Header_section' => [$this, 'block_Header_section'],
            'Hero_section' => [$this, 'block_Hero_section'],
            'connection' => [$this, 'block_connection'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>WebUni - Education Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"WebUni Education Template\">
    <meta name=\"keywords\" content=\"webuni, education, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Favicon -->

    <link rel=\"shortcut icon\" href= ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "/>

    <!-- Google Fonts -->
    <link rel=\"stylesheet\" href= ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i"), "html", null, true);
        echo "/>

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href= ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "/>

    <link rel=\"stylesheet\" href= ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "/>

    <link rel=\"stylesheet\" href= ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "/>

    <link rel=\"stylesheet\" href= ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "/>


    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
<body>
";
        // line 33
        $this->displayBlock('Preloder', $context, $blocks);
        // line 38
        $this->displayBlock('Header_section', $context, $blocks);
        // line 66
        $this->displayBlock('Hero_section', $context, $blocks);
        // line 89
        echo "<br>
<br>
<br>
<br>

<section class=\"search-section\">
    <div class=\"container\">
        <div class=\"search-warp\">
            <div class=\"section-title text-white\">
                <h2> Se connecter </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    ";
        // line 102
        $this->displayBlock('connection', $context, $blocks);
        // line 109
        echo "                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>











<!-- banner section end -->

";
        // line 131
        $this->displayBlock('footer', $context, $blocks);
        // line 201
        echo "
<!-- footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/mixitup.min.js\"></script>
<script src=\"js/circle-progress.min.js\"></script>
<script src=\"js/owl.carousel.min.js\"></script>
<script src=\"js/main.js\"></script>
</html>







<div class=\"container\">

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
";
        // line 229
        $this->displayBlock('javascripts', $context, $blocks);
        // line 230
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_Preloder($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Preloder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Preloder"));

        // line 34
        echo "    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_Header_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Header_section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Header_section"));

        // line 39
        echo "    <header class=\"header-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3\">
                    <div class=\"site-logo\">
                        <img src=\"img/logo.png\" alt=\"\">
                    </div>
                    <div class=\"nav-switch\">
                        <i class=\"fa fa-bars\"></i>
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-9\">
                    <a href=\"\" class=\"site-btn header-btn\">Login</a>
                    <nav class=\"main-menu\">
                        <ul>
                            <li><a href=\"index.html\">acceuil </a></li>
                            <li><a href=\"#\">A propos </a></li>
                            <li><a href=\"courses.html\">Calendrier </a></li>
                            <li><a href=\"blog.html\">évenements </a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_Hero_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Hero_section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Hero_section"));

        // line 67
        echo "    <section class=\"hero-section set-bg\" data-setbg=\"img/bg.jpg\">
        <div class=\"container\">
            <div class=\"hero-text text-white\">
                <h2>Get The Best Free Online Courses</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
            </div>


            ";
        // line 76
        echo "            ";
        // line 77
        echo "            ";
        // line 78
        echo "            ";
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        // line 81
        echo "            ";
        // line 82
        echo "            ";
        // line 83
        echo "            ";
        // line 84
        echo "            ";
        // line 85
        echo "
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_connection($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "connection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "connection"));

        // line 103
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 132
        echo "    <!-- footer section -->
";
        // line 134
        echo "    <footer class=\"footer-section spad pb-0\">
        <div class=\"footer-top\">
            <div class=\"footer-warp\">
                <div class=\"row\">
                    <div class=\"widget-item\">
                        <h4>Contact Info</h4>
                        <ul class=\"contact-list\">
                            <li>1481 Creekside Lane <br>Avila Beach, CA 931</li>
                            <li>+53 345 7953 32453</li>
                            <li>yourmail@gmail.com</li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Engeneering</h4>
                        <ul>
                            <li><a href=\"\">Applied Studies</a></li>
                            <li><a href=\"\">Computer Engeneering</a></li>
                            <li><a href=\"\">Software Engeneering</a></li>
                            <li><a href=\"\">Informational Engeneering</a></li>
                            <li><a href=\"\">System Engeneering</a></li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Graphic Design</h4>
                        <ul>
                            <li><a href=\"\">Applied Studies</a></li>
                            <li><a href=\"\">Computer Engeneering</a></li>
                            <li><a href=\"\">Software Engeneering</a></li>
                            <li><a href=\"\">Informational Engeneering</a></li>
                            <li><a href=\"\">System Engeneering</a></li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Development</h4>
                        <ul>
                            <li><a href=\"\">Applied Studies</a></li>
                            <li><a href=\"\">Computer Engeneering</a></li>
                            <li><a href=\"\">Software Engeneering</a></li>
                            <li><a href=\"\">Informational Engeneering</a></li>
                            <li><a href=\"\">System Engeneering</a></li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Newsletter</h4>
                        <form class=\"footer-newslatter\">
                            <input type=\"email\" placeholder=\"E-mail\">
                            <button class=\"site-btn\">Subscribe</button>
                            <p>*We don’t spam</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"footer-warp\">
                <ul class=\"footer-menu\">
                    <li><a href=\"#\">Terms & Conditions</a></li>
                    <li><a href=\"#\">Register</a></li>
                    <li><a href=\"#\">Privacy</a></li>
                </ul>
                <div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 229,  334 => 134,  331 => 132,  322 => 131,  312 => 103,  303 => 102,  290 => 85,  288 => 84,  286 => 83,  284 => 82,  282 => 81,  280 => 80,  278 => 79,  276 => 78,  274 => 77,  272 => 76,  262 => 67,  253 => 66,  217 => 39,  208 => 38,  195 => 34,  186 => 33,  175 => 230,  173 => 229,  143 => 201,  141 => 131,  117 => 109,  115 => 102,  100 => 89,  98 => 66,  96 => 38,  94 => 33,  81 => 23,  76 => 21,  71 => 19,  66 => 17,  60 => 14,  54 => 11,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>WebUni - Education Template</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"WebUni Education Template\">
    <meta name=\"keywords\" content=\"webuni, education, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Favicon -->

    <link rel=\"shortcut icon\" href= {{ asset('img/favicon.ico') }}/>

    <!-- Google Fonts -->
    <link rel=\"stylesheet\" href= {{ asset('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i') }}/>

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href= {{ asset('css/bootstrap.min.css') }}/>

    <link rel=\"stylesheet\" href= {{ asset('css/font-awesome.min.css') }}/>

    <link rel=\"stylesheet\" href= {{ asset('css/owl.carousel.css') }}/>

    <link rel=\"stylesheet\" href= {{ asset('css/style.css') }}/>


    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
<body>
{% block Preloder %}
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>
{% endblock %}
{% block Header_section %}
    <header class=\"header-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3\">
                    <div class=\"site-logo\">
                        <img src=\"img/logo.png\" alt=\"\">
                    </div>
                    <div class=\"nav-switch\">
                        <i class=\"fa fa-bars\"></i>
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-9\">
                    <a href=\"\" class=\"site-btn header-btn\">Login</a>
                    <nav class=\"main-menu\">
                        <ul>
                            <li><a href=\"index.html\">acceuil </a></li>
                            <li><a href=\"#\">A propos </a></li>
                            <li><a href=\"courses.html\">Calendrier </a></li>
                            <li><a href=\"blog.html\">évenements </a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
{% endblock %}
{% block Hero_section %}
    <section class=\"hero-section set-bg\" data-setbg=\"img/bg.jpg\">
        <div class=\"container\">
            <div class=\"hero-text text-white\">
                <h2>Get The Best Free Online Courses</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
            </div>


            {#            <div class=\"row\">#}
            {#                <div class=\"col-lg-10 offset-lg-1\">#}
            {#                    <form class=\"intro-newslatter\">#}
            {#                        <input type=\"text\" placeholder=\"Name\">#}
            {#                        <input type=\"text\" class=\"last-s\" placeholder=\"E-mail\">#}
            {#                        <button class=\"site-btn\">Sign Up Now</button>#}
            {#                    </form>#}
            {#                </div>#}
            {#            </div>#}
            {#        </div>#}

        </div>
    </section>
{% endblock %}
<br>
<br>
<br>
<br>

<section class=\"search-section\">
    <div class=\"container\">
        <div class=\"search-warp\">
            <div class=\"section-title text-white\">
                <h2> Se connecter </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    {% block connection  %}
                    {% endblock %}
{#                    <form class=\"course-search-form\">#}
{#                        <input type=\"text\" placeholder=\"Course\">#}
{#                        <input type=\"text\" class=\"last-m\" placeholder=\"Category\">#}
{#                        <button class=\"site-btn\">Search Couse</button>#}
{#                    </form>#}
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>











<!-- banner section end -->

{% block footer %}
    <!-- footer section -->
{#    class=\"site-btn\"#}
    <footer class=\"footer-section spad pb-0\">
        <div class=\"footer-top\">
            <div class=\"footer-warp\">
                <div class=\"row\">
                    <div class=\"widget-item\">
                        <h4>Contact Info</h4>
                        <ul class=\"contact-list\">
                            <li>1481 Creekside Lane <br>Avila Beach, CA 931</li>
                            <li>+53 345 7953 32453</li>
                            <li>yourmail@gmail.com</li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Engeneering</h4>
                        <ul>
                            <li><a href=\"\">Applied Studies</a></li>
                            <li><a href=\"\">Computer Engeneering</a></li>
                            <li><a href=\"\">Software Engeneering</a></li>
                            <li><a href=\"\">Informational Engeneering</a></li>
                            <li><a href=\"\">System Engeneering</a></li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Graphic Design</h4>
                        <ul>
                            <li><a href=\"\">Applied Studies</a></li>
                            <li><a href=\"\">Computer Engeneering</a></li>
                            <li><a href=\"\">Software Engeneering</a></li>
                            <li><a href=\"\">Informational Engeneering</a></li>
                            <li><a href=\"\">System Engeneering</a></li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Development</h4>
                        <ul>
                            <li><a href=\"\">Applied Studies</a></li>
                            <li><a href=\"\">Computer Engeneering</a></li>
                            <li><a href=\"\">Software Engeneering</a></li>
                            <li><a href=\"\">Informational Engeneering</a></li>
                            <li><a href=\"\">System Engeneering</a></li>
                        </ul>
                    </div>
                    <div class=\"widget-item\">
                        <h4>Newsletter</h4>
                        <form class=\"footer-newslatter\">
                            <input type=\"email\" placeholder=\"E-mail\">
                            <button class=\"site-btn\">Subscribe</button>
                            <p>*We don’t spam</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"footer-warp\">
                <ul class=\"footer-menu\">
                    <li><a href=\"#\">Terms & Conditions</a></li>
                    <li><a href=\"#\">Register</a></li>
                    <li><a href=\"#\">Privacy</a></li>
                </ul>
                <div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
            </div>
        </div>
    </footer>
{% endblock  %}

<!-- footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/mixitup.min.js\"></script>
<script src=\"js/circle-progress.min.js\"></script>
<script src=\"js/owl.carousel.min.js\"></script>
<script src=\"js/main.js\"></script>
</html>







<div class=\"container\">

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\xampp64\\htdocs\\pi_final\\app\\Resources\\views\\base.html.twig");
    }
}
