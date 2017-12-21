<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Starfighter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class PilotesController extends Controller
{
    /**
     * @Route("/pilotes", name="pilotes-list")
     */
    public function addAction()
    {
        $pilote = new Starfighter();
        $formbuilder = $this->get('form.factory')->createBuilder(FormType::class,$pilote);

        $formbuilder
        ->add('nom', TextType::class)
        ->add('prenom', TextType::class)
        ->add('id', TextType::class)
        ->add('go', SubmitType::class)

        ;

        $form = $formbuilder->getForm();

        // return $this->render('AppBundle:Pilotes:sfa-page.html.twig', array('form'=>$form->createView()));

        return $this->render('default/sfa-pilotes.html.twig', array('form'=>$form->createView()));
    }
}
