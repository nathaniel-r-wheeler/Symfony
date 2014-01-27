<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        # Locate the templating service.
        $templating = $this->get('templating');
        
        # Render the content.
        $content = $templating->render(
            "AcmeHelloBundle:Hello:index.html.twig",
            array('name' => $name)
        );

        return new Response($content);
    }
}
