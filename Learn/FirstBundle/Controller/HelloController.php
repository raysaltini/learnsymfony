<?php

namespace Learn\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction()
    {
      //return a simple response object with some content in it. 
      return new Response("Hello Symfony");
    }

    public function templateAction()
    {
      //return a rendered template. The template is packaged in our bundle.
      return $this->render("LearnFirstBundle:Hello:template.html.twig");
    }

    public function helloAction($name)
    {
      //return a rendered template but this time around lets pass in some information from the request. 
      return $this->render("LearnFirstBundle:Hello:hello.html.twig", array("name"=>$name));
    }

}
