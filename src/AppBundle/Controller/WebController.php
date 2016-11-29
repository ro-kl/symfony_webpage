<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WebController extends Controller
{
    /**
     * @Route("/web/start", name="startPage")
     */
    public function startPageAction()
    {
        return $this->render('default/startPage.html.twig');
    }

    /**
     * @Route("/web/{notFoundURL}", name="notFound")
     */
    public function notFoundPageAction($notFoundURL)
    {
        $notFoundText = "404 Error";

        return $this->render('default/notFoundPage.html.twig', [
            'notFoundText' => $notFoundText,
            'notFoundURL' => $notFoundURL
        ]);
    }    

}
