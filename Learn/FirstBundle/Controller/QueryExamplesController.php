<?php
namespace Learn\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Learn\FirstBundle\Entity\Product;

class QueryExamplesController extends Controller
{
  public function simpleQueryAction() {
    
    //get the instance of the doctrine entity manager.
    $em = $this->getDoctrine()->getManager();
    
    
    //use the entity manager to grab the Product repository.
    $repo = $em->getRepository("LearnFirstBundle:Product");
    
    
    //use the findBy function to query by field value. 
    $products = $repo->findBy(array('sku'=>'Test'));
    
    //display the results. 
    print_r($products);
    
    return new Response("Queries Ran");
  }
  
  public function queryBuilderAction() {
    //use doctrines query builder. 
    $em = $this->getDoctrine()->getManager();
    
    //lets use our entity manager to get a little more flexible. 
    $query = $em->createQuery(
        'SELECT p 
          FROM LearnFirstBundle:Product p
          WHERE p.description LIKE :description'
        )->setParameter('description', '%Test%');
    
    $products = $query->getResult();

    print_r($products);
    
    return new Response("Queries Ran");
  }
}
