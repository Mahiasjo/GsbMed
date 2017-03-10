<?php

namespace SiteGsbMed\GsbMedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteGsbMed\GsbMedBundle\Entity\Famille;
use SiteGsbMed\GsbMedBundle\Entity\Composition;
use SiteGsbMed\GsbMedBundle\Entity\Medicament;

// Notre contrÃ´leur va utiliser l'objet Reponse, il faut donc le charger grÃ¢ce au use.
use Symfony\Component\HttpFoundation\Response;

class FamilleController extends Controller
{
    public function liste_famillesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $liste_familles=$em->getRepository('SiteGsbMedGsbMedBundle:Competence')->findAll();
        
    }
    public function ajouter_familleAction()
    {
        
    }
    public function modifier_famille_formAction($id)
    {
        $em = $this->getDoctrine()->getManager ();
        // On récupère l'entité correspondant à l'id $id
        $famille = $em->getRepository('SiteGsbMedGsbMedBundle:Famille')->find ($id);
        if ($famille === null)
        {
            throw $this->createNotFoundException('Famille [id='.$id.'] inexistant.');
        }
        $em->flush();
        return $this->render('SiteGsbMedGsbMedBundle:Famille:modifier_famille.html.twig', array('famille' => $famille));
    }
    public function supprimer_familleAction($id)
    {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager ();
        // On récupère l'entité correspondant à l'id $id
        $famille = $em->getRepository('SiteGsbMedGsbMedBundle:Famille')->find ($id);
        if ($famille === null)
        {
            throw $this->createNotFoundException('Famille [id='.$id.'] inexistant.');
        }
        $em->remove($famille);
        $em->flush();
        return $this->render('SiteGsbMedGsbMedBundle:Famille:supprimer_famille.html.twig', array('id'=>$id));
    }
}

