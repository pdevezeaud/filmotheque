<?php

namespace Video\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Video\FilmothequeBundle\Entity\Acteur;
use Video\FilmothequeBundle\Entity\ActeurType;




class ActeurController extends Controller
{
    public function ajoutAction()
    {
        $acteur = new Acteur();
        $form = $this->createFormBuilder(new ActeurType(), $acteur);

        return $this->render('VideoFilmothequeBundle:Default\Acteur:ajout.html.twig', array(
            'form' =>$form->createView()
        ));

      }

}
