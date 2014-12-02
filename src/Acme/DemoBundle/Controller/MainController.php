<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:Main:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('AcmeDemoBundle:Main:about.html.twig');
    }

    public function productsAction()
    {
        return $this->render('AcmeDemoBundle:Main:products.html.twig');
    }

    public function contactAction()
    {
        $request = $this->getRequest();
        $name = null;
        if($request->getMethod() == "POST"){
            $name = $request->get("name");
            $from_email = $request->get("email");
            $topic = $request->get("topic");
            $message = $request->get("message");
            //echo $message;
            //$mailer = $this->container->get("mailer");
            $mail = \Swift_Message::newInstance()
                ->setSubject('Email from Website Contact Form')
                ->setFrom($from_email)
                ->setTo('recipient@example.com')
                ->setBody($message)
            ;
            $this->get('mailer')->send($mail);
            //echo $result ? $name . " OK" : $name ." NO" ;
        }
        
        return $this->render('AcmeDemoBundle:Main:contact.html.twig', array('name' => $name));
    }
}
