<?php

namespace SiteGsbMed\GsbMedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="gsb_medicament")
 * @ORM\Entity(repositoryClass="SiteGsbMed\GsbMedBundle\Entity\MedicamentRepository")
 */
class Medicament
{
    /**
     * @ORM\ManyToOne(targetEntity="SiteGsbMed\GsbMedBundle\Entity\Famille", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $famille;
    
    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity ="SiteGsbMed\GsbMedBundle\Entity\Composition", cascade={"persist"})
     */
    private $composition;
    
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
     * @ORM\Column(name="MED_DepotLegal", type="string", length=50)
     */
    private $MEDDepotLegal;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_Nomcommercial", type="string", length=50)
     */
    private $MEDNomCommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_Effets", type="string", length=255)
     */
    private $MEDEffets;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_ContreIndication", type="text")
     */
    private $MEDContreIndication;

    /**
     * @var float
     *
     * @ORM\Column(name="MED_PrixEchantillon", type="float", nullable=true)
     */
    private $MEDPrixEchantillon;


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
     * Set MEDDepotLegal
     *
     * @param string $MEDDepotLegal
     * @return Medicament
     */
    public function setMEDDepotLegal($MEDDepotLegal)
    {
        $this->MEDDepotLegal = $MEDDepotLegal;
    
        return $this;
    }

    /**
     * Get MEDDepotLegal
     *
     * @return string 
     */
    public function getMEDDepotLegal()
    {
        return $this->MEDDepotLegal;
    }

    /**
     * Set MEDNomcommercial
     *
     * @param string $MEDNomcommercial
     * @return Medicament
     */
    public function setMEDNomCommercial($mEDNomCommercial)
    {
        $this->MEDNomCommercial = $MEDNomCommercial;
    
        return $this;
    }

    /**
     * Get MEDNomcommercial
     *
     * @return string 
     */
    public function getMEDNomCommercial()
    {
        return $this->MEDNomCommercial;
    }

    /**
     * Set MEDEffets
     *
     * @param string $MEDEffets
     * @return Medicament
     */
    public function setMEDEffets($mEDEffets)
    {
        $this->MEDEffets = $MEDEffets;
    
        return $this;
    }

    /**
     * Get mEDEffets
     *
     * @return string 
     */
    public function getMEDEffets()
    {
        return $this->MEDEffets;
    }

    /**
     * Set MEDContreIndication
     *
     * @param string $MEDContreIndication
     * @return Medicament
     */
    public function setMEDContreIndication($MEDContreIndication)
    {
        $this->MEDContreIndication = $MEDContreIndication;
    
        return $this;
    }

    /**
     * Get MEDContreIndication
     *
     * @return string 
     */
    public function getMEDContreIndication()
    {
        return $this->mEDContreIndication;
    }

    /**
     * Set MEDPrixEchantillon
     *
     * @param float $MEDPrixEchantillon
     * @return Medicament
     */
    public function setMEDPrixEchantillon($MEDPrixEchantillon)
    {
        $this->MEDPrixEchantillon = $MEDPrixEchantillon;
    
        return $this;
    }

    /**
     * Get MEDPrixEchantillon
     *
     * @return float 
     */
    public function getMEDPrixEchantillon()
    {
        return $this->MEDPrixEchantillon;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->famille = new \Doctrine\Common\Collections\ArrayCollection();
        $this->composition = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add famille
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Famille $famille
     * @return Medicament
     */
    public function addFamille(\SiteGsbMed\GsbMedBundle\Entity\Famille $famille)
    {
        $this->famille[] = $famille;
    
        return $this;
    }

    /**
     * Remove famille
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Famille $famille
     */
    public function removeFamille(\SiteGsbMed\GsbMedBundle\Entity\Famille $famille)
    {
        $this->famille->removeElement($famille);
    }

    /**
     * Get famille
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Add composition
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Composition $composition
     * @return Medicament
     */
    public function addComposition(\SiteGsbMed\GsbMedBundle\Entity\Composition $composition)
    {
        $this->composition[] = $composition;
    
        return $this;
    }

    /**
     * Remove composition
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Composition $composition
     */
    public function removeComposition(\SiteGsbMed\GsbMedBundle\Entity\Composition $composition)
    {
        $this->composition->removeElement($composition);
    }

    /**
     * Get composition
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComposition()
    {
        return $this->composition;
    }
}