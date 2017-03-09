<?php

namespace SiteGsbMed\GsbMedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteGsbMed\GsbMedBundle\Entity\Famille;
use SiteGsbMed\GsbMedBundle\Entity\Composition;
use SiteGsbMed\GsbMedBundle\Entity\Medicament;

// Notre contrÃ´leur va utiliser l'objet Reponse, il faut donc le charger grÃ¢ce au use.
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = 'tot';
        return $this->render('SiteGsbMedGsbMedBundle:Default:index.html.twig', array('name' => $name));
    }
}