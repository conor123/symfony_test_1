<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
	public function testAction()
    {
    	
        return $this->render('AcmeDemoBundle:Test:test.html.twig');
    }
}
