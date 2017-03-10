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
    private $COMLibelle;


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
     * Set COMLibelle
     *
     * @param string $COMLibelle
     * @return Composition
     */
    public function setCOMLibelle($COMLibelle)
    {
        $this->COMLibelle = $COMLibelle;
    
        return $this;
    }

    /**
     * Get COMLibelle
     *
     * @return string 
     */
    public function getCOMLibelle()
    {
        return $this->COMLibelle;
    }
}
