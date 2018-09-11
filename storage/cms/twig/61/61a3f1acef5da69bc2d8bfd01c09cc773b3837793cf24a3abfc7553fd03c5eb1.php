<?php

/* /var/www/projetos/october/themes/no-bugs/layouts/fallback.htm */
class __TwigTemplate_501d7e9ec7e334b2f1a7f96e6f0a9e96c14b02be7b14b244297a089d63bb2faa extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/projetos/october/themes/no-bugs/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/var/www/projetos/october/themes/no-bugs/layouts/fallback.htm", "");
    }
}
