<?php

namespace Video\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Video\FilmothequeBundle\Entity\Acteur;
use Video\FilmothequeBundle\Form\ActeurType;






class ActeurController extends Controller
{
    public function ajoutAction()
    {

        $Acteur = new Acteur();
        $form=$this->createForm(new ActeurType(), $Acteur);


        return $this->render('VideoFilmothequeBundle:Default/Acteur:ajout.html.twig', Array(
            'form'=>$form->createView()
        ));

     }

}
