<?php

namespace Video\FilmothequeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Video\FilmothequeBundle\Entity\film;




class filmController extends Controller
{
    public function ajoutAction(Request $request)
    {

        $film = new film();
        $form = $this->createFormBuilder($film)
            ->add('titre', TextType::class)
            ->add('description', TextType::class)
            ->add('sexe', TextType::class)
            ->add('datenaissance',TextType::class)
            ->getForm();


        return $this->render('VideoFilmothequeBundle:Default/Film:ajout.html.twig', array(
            'form'=>$form->createView(),
        ));

     }

}
