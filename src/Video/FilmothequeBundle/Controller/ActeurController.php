<?php

namespace Video\FilmothequeBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Video\FilmothequeBundle\Entity\Acteur;
use Video\FilmothequeBundle\Form\Type\ActeurType;


class ActeurController extends Controller
{
    public function ajoutAction(Request $request)
    {
        $message = "Ajouter Acteur";

        $acteur = new Acteur();
        $form = $this->createFormBuilder($acteur)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('sexe', TextType::class)
            ->add('datenaissance', TextType::class)
            ->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();

            return $this->redirectToRoute('acteur_ajout');
            $message = "Valider !!!";
        }


        //renvoi la vue
        return $this->render('VideoFilmothequeBundle:Default/Acteur:ajout.html.twig', array(
            'form' => $form->createView(),
            'msg' => $message,
        ));

    }

    public function afficheAction()
    {

        $em = $this->getDoctrine()->getManager();
        $acteur = $em->getRepository('VideoFilmothequeBundle:Acteur')->findAll();

        return $this->render('VideoFilmothequeBundle:Default/Acteur:affiche.html.twig', array('acteurs' => $acteur));


    }

    public function modifierAction($id)
    {
        $message = "Modifier un Acteur";
        $em = $this->getDoctrine()->getManager();

        $acteur = $em->getRepository('VideoFilmothequeBundle:$Acteur')->find($id);
        $form = $this->createForm(new ActeurType(), $acteur);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
                $message = "Valide !";
            }
        }

        return $this->render('VideoFilmothequeBundle:Default/Acteur:edit.html.twig', array(
                'form' => $form->createView(),
                'msg' => $form->$message,
            )
        );

    }

}
