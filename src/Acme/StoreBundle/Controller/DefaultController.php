<?php
// src/Acme/StoreBundle/Controller/DefaultController.php
namespace Acme\StoreBundle;
// ...
//use Acme\StoreBundle\Entity\Product;
//use Symfony\Component\HttpFoundation\Response;
//
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
	public function createproductAction()
	{
	    // $product = new Product();
	    // $product->setName('A Foo Bar');
	    // $product->setPrice('19.99');
	    // $product->setDescription('Lorem ipsum dolor');

	    // $em = $this->getDoctrine()->getManager();
	    // $em->persist($product);
	    // $em->flush();

	    // return new Response('Created product id '.$product->getId());
	}
}
