<?php

/* /var/www/projetos/october/plugins/mohsin/carousel/components/carousel/default.htm */
class __TwigTemplate_23c1c0377021f555dd13d9de9463bb4325f2c974c5a3255845a27469be6b67a7 extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\">
  ";
        // line 2
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array())) > 1)) {
            // line 3
            echo "  <ol class=\"carousel-indicators\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 5
                echo "    <li data-target=\"#carousel-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
                echo "\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) - 1), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo "></li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </ol>
  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array())) > 0)) {
            // line 11
            echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 13
                echo "    <div class=\"item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                    echo " active";
                }
                echo "\">
      <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
                echo "\">

      ";
                // line 17
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["image"], "title", array()) || twig_get_attribute($this->env, $this->source, $context["image"], "description", array()))) {
                    // line 18
                    echo "      <div class=\"carousel-caption\">

        ";
                    // line 20
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "title", array())) {
                        echo "<h3>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
                        echo "</h3>";
                    }
                    // line 21
                    echo "
        ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "description", array())) {
                        echo "<p>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
                        echo "</p>";
                    }
                    // line 23
                    echo "
      </div>
      ";
                }
                // line 26
                echo "
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", array()), "images", array())) > 1)) {
            // line 33
            echo "    <a class=\"left carousel-control\" href=\"#carousel-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"icon icon-prev\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"icon icon-next\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/projetos/october/plugins/mohsin/carousel/components/carousel/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 42,  176 => 37,  168 => 33,  166 => 32,  163 => 31,  159 => 29,  143 => 26,  138 => 23,  132 => 22,  129 => 21,  123 => 20,  119 => 18,  116 => 17,  109 => 14,  102 => 13,  85 => 12,  82 => 11,  80 => 10,  77 => 9,  73 => 7,  50 => 5,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"carousel-{{ __SELF__.id }}\" class=\"carousel slide\" data-ride=\"carousel\">
  {% if __SELF__.carousel.images|length > 1 %}
  <ol class=\"carousel-indicators\">
  {% for i, image in __SELF__.carousel.images %}
    <li data-target=\"#carousel-{{ __SELF__.id }}\" data-slide-to=\"{{ loop.index - 1 }}\"{% if loop.first %} class=\"active\"{% endif %}></li>
  {% endfor %}
  </ol>
  {% endif %}

  {% if __SELF__.carousel.images|length > 0 %}
  <div class=\"carousel-inner\" role=\"listbox\">
    {% for i, image in __SELF__.carousel.images %}
    <div class=\"item{% if loop.first %} active{% endif %}\">
      <img src=\"{{ image.path }}\" alt=\"{{ image.title }}\">

      {# Show caption only if there is image title or description #}
      {% if image.title or image.description %}
      <div class=\"carousel-caption\">

        {% if image.title %}<h3>{{ image.title }}</h3>{% endif %}

        {% if image.description %}<p>{{ image.description }}</p>{% endif %}

      </div>
      {% endif %}

    </div>
    {% endfor %}
  </div>
  {% endif %}

  {% if __SELF__.carousel.images|length > 1 %}
    <a class=\"left carousel-control\" href=\"#carousel-{{ __SELF__.id }}\" role=\"button\" data-slide=\"prev\">
      <span class=\"icon icon-prev\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-{{ __SELF__.id }}\" role=\"button\" data-slide=\"next\">
      <span class=\"icon icon-next\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  {% endif %}
</div>
", "/var/www/projetos/october/plugins/mohsin/carousel/components/carousel/default.htm", "");
    }
}
