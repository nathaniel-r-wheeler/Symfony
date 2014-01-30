<?php

namespace Acme\HelloBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    /**
     *@Route("/hello/{name}", name="hello")
     *@Template
     */
    public function indexAction($name)
    {
        return compact('name');
    }
}
