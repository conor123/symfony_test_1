<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use Symfony\Component\HttpFoundation\Response;

use Doctrine\Common\Persistence\ObjectManager;

use Acme\StoreBundle\Entity\Product;

class TestController extends Controller
{
    public function testAction()
    {
        
        $product = new Product();
        $product->setName('Presentation Boxes');
        $product->setPrice('9.99');
        $product->setDescription('Choose from a wide variety of Presentation Boxes.');

        try {
            // !!! The entity manager isn't working
            $em = $this->getDoctrine()->getManager();
            //$em->persist($product);
            //$em->flush();
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        // $em = $this->getDoctrine()->getManager();
        // $em->persist($product);
        // $em->flush();
        $pid = $product->getId();
       
        echo isset($pid) ? $pid : "Nada!";

        // return new Response('Created product id '.$product->getId());

        return $this->render('AcmeDemoBundle:Test:test.html.twig', array('product' => $product));
    }
}
