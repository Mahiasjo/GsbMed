<?php

namespace SiteGsbMed\GsbMedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="gsb_famille")
 * @ORM\Entity(repositoryClass="SiteGsbMed\GsbMedBundle\Entity\FamilleRepository")
 */
class Famille
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
     * @ORM\Column(name="FAM_Libelle", type="string", length=100)
     */
    private $FAMLibelle;


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
     * Set fAMLibelle
     *
     * @param string $fAMLibelle
     * @return Famille
     */
    public function setFAMLibelle($fAMLibelle)
    {
        $this->FAMLibelle = $FAMLibelle;
    
        return $this;
    }

    /**
     * Get fAMLibelle
     *
     * @return string 
     */
    public function getFAMLibelle()
    {
        return $this->FAMLibelle;
    }
}
