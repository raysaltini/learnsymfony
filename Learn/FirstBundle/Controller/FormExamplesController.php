<?php

namespace Learn\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Learn\FirstBundle\Entity\Product;

class FormExamplesController extends Controller
{
    public function simpleFormAction(Request $request)
    {
      $product = new Product();
      
      $product->setSku("TestSku");
      $product->setDescription("A test product");
      $product->setCreated(new \DateTime());
      
      $form = $this->createFormBuilder($product)
          ->add('sku', 'text')
          ->add('description', 'textarea')
          ->add('created', 'date')
          ->add('save', 'submit')
          ->getForm();
      
      $form->handleRequest($request);
      
      if($form->isValid()) {
        //if we are valid lets redirect.
        return $this->redirect($this->generateUrl("index"));
      }
      
      return $this->render("LearnFirstBundle:FormExamples:simpleForm.html.twig", array('form'=> $form->createView()));
    }

}
