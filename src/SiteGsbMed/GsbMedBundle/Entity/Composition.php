<?php

namespace SiteGsbMed\GsbMedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition
 *
 * @ORM\Table(name="gsb_composition")
 * @ORM\Entity(repositoryClass="SiteGsbMed\GsbMedBundle\Entity\CompositionRepository")
 */
class Composition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="COM_Libelle", type="string", length=100)
     */
    private $cOMLibelle;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cOMLibelle
     *
     * @param string $cOMLibelle
     * @return Composition
     */
    public function setCOMLibelle($cOMLibelle)
    {
        $this->cOMLibelle = $cOMLibelle;
    
        return $this;
    }

    /**
     * Get cOMLibelle
     *
     * @return string 
     */
    public function getCOMLibelle()
    {
        return $this->cOMLibelle;
    }
}
