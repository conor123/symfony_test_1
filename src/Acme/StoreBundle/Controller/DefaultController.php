<?php
// src/Acme/StoreBundle/Controller/DefaultController.php
namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');
        //exit(\Doctrine\Common\Util\Debug::dump($product));

        $em = $this->getDoctrine()->getManager();
        //exit(\Doctrine\Common\Util\Debug::dump($em));
        $em->persist($product);
        $em->flush();

        return new Response('Created product id '.$product->getId());

        //return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => 'my name'));
    }

    public function showAction($id = 1)
    {
        $product = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return new Response('Product name: '.$product->getName());
    }


}
