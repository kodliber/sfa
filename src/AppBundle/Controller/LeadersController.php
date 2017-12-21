<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LeadersController extends Controller
{
    /**
     * @Route("/leaders", name="leaders-list")
     */
    public function form()
    {
        return $this->render('default/sfa-page.html.twig');

    }
}
