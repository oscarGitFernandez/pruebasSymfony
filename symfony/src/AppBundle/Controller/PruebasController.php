<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/pruebas", name="pruebasIndex")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
            'texto' => "Texto que envio desde la acción del controlador",
        ));
    }

}
