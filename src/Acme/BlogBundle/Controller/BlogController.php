<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction($page)
    {
        return new Response('<html><body>Blog index stub page '.$page.'.</body></html>');
    }
    
    public function showAction($slug) 
    {   
        // TODO: use the $slug variable to query the database
        $blog = $slug;
        
        return $this->render('AcmeBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog,
        ));
    }
}
