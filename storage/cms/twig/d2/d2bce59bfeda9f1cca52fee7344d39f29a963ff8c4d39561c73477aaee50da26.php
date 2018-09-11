<?php

/* /var/www/projetos/october/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_a61ddcd9e03ca28cb5846fc963832b096f22823f2850bfccb14f0efbd18150d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h3>Flat Theme for OctoberCMS</h3>
                <p>You have the design, you have the code. We've created the product that will help your startup to look even better.</p>
                <div class=\"signup-form\">
                    <form>
                        <div class=\"form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Your E-mail\">
                        </div>
                        <div class=\"form-group\">
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Confirmation\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block btn-info\">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class=\"additional-links\">
                    By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
                </div>
            </div>
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe src=\"http://player.vimeo.com/video/29568236?color=3498db\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<p class=\"display-4\"> Teste </p>

<section class=\"logos\">
    <div class=\"container\">
        <div><img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/mashable.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/guardian.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/forbes.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/red-bull.png");
        echo "\" alt=\"\"></div>
        <div><img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/ny-times.png");
        echo "\" alt=\"\"></div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "        </div>
    </div>
    
    ";
        // line 64
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("carousel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 65
        echo "
    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />";
    }

    public function getTemplateName()
    {
        return "/var/www/projetos/october/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 65,  108 => 64,  103 => 61,  99 => 60,  82 => 46,  78 => 45,  74 => 44,  70 => 43,  66 => 42,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"home-title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h3>Flat Theme for OctoberCMS</h3>
                <p>You have the design, you have the code. We've created the product that will help your startup to look even better.</p>
                <div class=\"signup-form\">
                    <form>
                        <div class=\"form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Your E-mail\">
                        </div>
                        <div class=\"form-group\">
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <div>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Confirmation\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block btn-info\">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class=\"additional-links\">
                    By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
                </div>
            </div>
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe src=\"http://player.vimeo.com/video/29568236?color=3498db\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<p class=\"display-4\"> Teste </p>

<section class=\"logos\">
    <div class=\"container\">
        <div><img src=\"{{ 'assets/images/logos/mashable.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/guardian.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/forbes.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/red-bull.png'|theme }}\" alt=\"\"></div>
        <div><img src=\"{{ 'assets/images/logos/ny-times.png'|theme }}\" alt=\"\"></div>
    </div>
</section>

<br />

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            {% partial 'services' %}
        </div>
    </div>
    
    {% component 'carousel' %}

    <div class=\"recent-tweets\">
        <h4 class=\"headline\"><span>Recent tweets</span></h4>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
                <a href=\"#\">1 day ago</a>
            </p>
        </div>
        <div class=\"tweet\">
            <i class=\"fa fa-twitter\"></i>
            <p>
                Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
                <a href=\"#\">2 days ago</a>
            </p>
        </div>
    </div>

</div>

<br />", "/var/www/projetos/october/themes/responsiv-flat/pages/home.htm", "");
    }
}
