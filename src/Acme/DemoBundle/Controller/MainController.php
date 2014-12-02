<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:Main:main.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('AcmeDemoBundle:Main:about.html.twig');
    }

    public function contactAction()
    {
    	$request = $this->getRequest();
    	if($request->getMethod() == "POST"){
    		$name = $request->get("name");
    		$email = $request->get("email");
    		$topic = $request->get("topic");
    		$message = $request->get("message");
    		//echo $message;
    		//$mailer = $this->container->get("mailer");
    		$mail = \Swift_Message::newInstance()
		        ->setSubject('Hello Email')
		        ->setFrom('send@example.com')
		        ->setTo('recipient@example.com')
		        ->setBody($message)
		    ;
		    $this->get('mailer')->send($mail);
		    //echo $result ? $name . " OK" : $name ." NO" ;
    	}
        

        return $this->render('AcmeDemoBundle:Main:contact.html.twig', array('name' => $name));
    }
}
