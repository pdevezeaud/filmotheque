<?php


namespace Video\FilmothequeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Video\FilmothequeBundle\Entity\Categorie;


    class CategorieController extends Controller
    {
    public function ajoutAction()

    {
        $em = $this->getDoctrine()->getManager();

        $categorie = new Categorie();
        $categorie->setNom('Romance');
        $em->persist($categorie);

        $categorie1 = new Categorie();
        $categorie1->setNom('action');
        $em->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2->setNom('Thriller');
        $em->persist($categorie2);



        $em->flush();

        return $this->render('VideoFilmothequeBundle:Default/Categorie:ajout.html.twig');

        }


        //on recupere le contenu de la table transmis à la vue
        public function afficheAction(){

            $em = $this-> getDoctrine()->getManager();
            $categories = $em->getRepository('VideoFilmothequeBundle:Categorie')->findAll();

            return $this->render('VideoFilmothequeBundle:default/Categorie:affiche.html.twig', array(
                'categ' => $categories,
            ));
        }

    }
