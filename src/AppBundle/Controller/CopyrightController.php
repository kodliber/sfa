<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CopyrightController extends Controller
{
    /**
     * @Route("/copyright", name="copyright")
     */
    public function form()
    {
        return $this->render('default/sfa-copyright.html.twig');
    }
}
