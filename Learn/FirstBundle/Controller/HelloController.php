<?php

namespace Learn\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction()
    {
      return new Response("Hello Symfony");
    }

    public function templateAction()
    {
    }

    public function helloAction($name)
    {
    }

}
