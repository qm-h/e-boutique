<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* articles/index.html.twig */
class __TwigTemplate_ddfeabe43a2cc8df59fcb43155eb24962425fd7cb0b8de6a30c6f903496d2079 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "LineShop";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "demande"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"flash-demande\">
          <div class=\"alert\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
          </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
<div class=\"container\">
<div class=\"row\">
    <nav class=\"col-6 navbar navbar-expand-md ml-4\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link link-navi\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"><span>Toutes les catégories</span></a>
                </li>
                 ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            echo "                <li class=\"nav-item\">
                
                    <a class=\"nav-link  ml-4 link-navi\" href=\"/article/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "idcategorie", [], "any", false, false, false, 28), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomcategorie", [], "any", false, false, false, 28), "html", null, true);
            echo "</span></a>
                
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 
            </ul>
        </div>
    </nav>
</div>


  <div class=\"row justify-content-center \">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 40
            echo "      <div class=\"card col-lg-3 col-md-4 col-sm-6 col-6 m-3 carte\">             
        <div class=\"card-body text-center\" width=\"261\">
          <header class=\"banner\"><img class=\"img-fluid img-thumbnail\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["article"], "imagearticle", [], "any", false, false, false, 42))), "html", null, true);
            echo "\"  id=\"img2\" alt=\"\"></header>
            <div class=\"card-title\">
            </div>
            <div class=\"des-text\">
            <div class=\"card-text text-justify carte-description\">
            <span class=\" text-center\"><i>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nomarticle", [], "any", false, false, false, 47), "html", null, true);
            echo " :</i></span> <br>
              <label>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "descriptionarticle", [], "any", false, false, false, 48), "html", null, true);
            echo "</label> <hr>
            </div >
              <div class=\"col-12 d-flex justify-content-center\">
                <div class=\"\">
                  <p class=\"font-weight-bold\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixarticle", [], "any", false, false, false, 52), "html", null, true);
            echo " €</p>     

              
              <button type=\"submit\" class=\"btn btn-sm btn-envoie\">
              <a class=\"ajout-link\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "idarticle", [], "any", false, false, false, 56), "prix" => twig_get_attribute($this->env, $this->source, $context["article"], "prixarticle", [], "any", false, false, false, 56), "action" => 1]), "html", null, true);
            echo "\">
              Ajouter au <i class=\"ri-shopping-basket-2-line\"></i>
              </a>
              </button>

              
</div>
              
                </div>
            </div>
        </div>
      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </div>
</div>  
    
 
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
      
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 7,  223 => 6,  209 => 70,  189 => 56,  182 => 52,  175 => 48,  171 => 47,  163 => 42,  159 => 40,  155 => 39,  145 => 31,  133 => 28,  129 => 26,  125 => 25,  120 => 23,  111 => 16,  101 => 13,  97 => 11,  92 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LineShop{% endblock %}

{% block body %}
    {% block header %}
        {{ parent() }}
      
    {% endblock %}
    {% for message in app.flashes('demande') %}
        <div class=\"flash-demande\">
          <div class=\"alert\">
            {{message}}
          </div>
        </div>
    {% endfor %} 
<div class=\"container\">
<div class=\"row\">
    <nav class=\"col-6 navbar navbar-expand-md ml-4\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link link-navi\" href=\"{{path('app_homepage')}}\"><span>Toutes les catégories</span></a>
                </li>
                 {% for categorie in categories %}
                <li class=\"nav-item\">
                
                    <a class=\"nav-link  ml-4 link-navi\" href=\"/article/{{categorie.idcategorie}}\"><span>{{categorie.nomcategorie}}</span></a>
                
                </li>
                {% endfor %} 
            </ul>
        </div>
    </nav>
</div>


  <div class=\"row justify-content-center \">
    {% for article in articles %}
      <div class=\"card col-lg-3 col-md-4 col-sm-6 col-6 m-3 carte\">             
        <div class=\"card-body text-center\" width=\"261\">
          <header class=\"banner\"><img class=\"img-fluid img-thumbnail\" src=\"{{ asset ('image/' ~ article.imagearticle )}}\"  id=\"img2\" alt=\"\"></header>
            <div class=\"card-title\">
            </div>
            <div class=\"des-text\">
            <div class=\"card-text text-justify carte-description\">
            <span class=\" text-center\"><i>{{article.nomarticle}} :</i></span> <br>
              <label>{{article.descriptionarticle}}</label> <hr>
            </div >
              <div class=\"col-12 d-flex justify-content-center\">
                <div class=\"\">
                  <p class=\"font-weight-bold\">{{article.prixarticle}} €</p>     

              
              <button type=\"submit\" class=\"btn btn-sm btn-envoie\">
              <a class=\"ajout-link\" href=\"{{ path( 'modif_panier',{'id' : article.idarticle, 'prix' : article.prixarticle, 'action' : 1} ) }}\">
              Ajouter au <i class=\"ri-shopping-basket-2-line\"></i>
              </a>
              </button>

              
</div>
              
                </div>
            </div>
        </div>
      </div>

    {% endfor %}
  </div>
</div>  
    
 
 {% endblock %}  

", "articles/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\e-boutique\\templates\\articles\\index.html.twig");
    }
}
