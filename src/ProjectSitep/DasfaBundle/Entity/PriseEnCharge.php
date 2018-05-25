<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 24/04/2018
 * Time: 11:19
 */

namespace ProjectSitep\DasfaBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 *
 * @ORM\Table(name="prise_en_charge")
 * @ORM\Entity
 */
class PriseEnCharge
{

    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $num_pc;

    /**
     *
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $transDF;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $numTrStar;

    /**
     *
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTrStar;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $numRmStar;

    /**
     *
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateRmStar;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $recStar;

    /**
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $montanRemb;

    /**
     *
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ciApur;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $appure;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_pc;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectSitep\DasfaBundle\Entity\Facture", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="idFacture", referencedColumnName="id")
     * @Assert\Type(type="ProjectSitep\DasfaBundle\Entity\Facture")
     * @Assert\Valid()
     *
     */
    private $facture ;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectSitep\DasfaBundle\Entity\BulletinSoin", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="idBS", referencedColumnName="id")
     * @Assert\Type(type="ProjectSitep\DasfaBundle\Entity\BulletinSoin")
     * @Assert\Valid()
     *
     */
    private $bs ;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumPc()
    {
        return $this->num_pc;
    }

    /**
     * @param mixed $num_pc
     */
    public function setNumPc($num_pc)
    {
        $this->num_pc = $num_pc;
    }

    /**
     * @return \DateTime
     */
    public function getDatePc()
    {
        return $this->date_pc;
    }

    /**
     * @param \DateTime $date_pc
     */
    public function setDatePc($date_pc)
    {
        $this->date_pc = $date_pc;
    }

    /**
     * @return mixed
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * @param mixed $facture
     */
    public function setFacture($facture)
    {
        $this->facture = $facture;
    }

    /**
     * @return mixed
     */
    public function getBs()
    {
        return $this->bs;
    }

    /**
     * @param mixed $bs
     */
    public function setBs($bs)
    {
        $this->bs = $bs;
    }

    /**
     * @return mixed
     */
    public function getAppure()
    {
        return $this->appure;
    }

    /**
     * @param mixed $appure
     */
    public function setAppure($appure)
    {
        $this->appure = $appure;
    }

    /**
     * @return \DateTime
     */
    public function getTransDF()
    {
        return $this->transDF;
    }

    /**
     * @param \DateTime $transDF
     */
    public function setTransDF($transDF)
    {
        $this->transDF = $transDF;
    }

    /**
     * @return mixed
     */
    public function getNumTrStar()
    {
        return $this->numTrStar;
    }

    /**
     * @param mixed $numTrStar
     */
    public function setNumTrStar($numTrStar)
    {
        $this->numTrStar = $numTrStar;
    }

    /**
     * @return \DateTime
     */
    public function getDateTrStar()
    {
        return $this->dateTrStar;
    }

    /**
     * @param \DateTime $dateTrStar
     */
    public function setDateTrStar($dateTrStar)
    {
        $this->dateTrStar = $dateTrStar;
    }

    /**
     * @return mixed
     */
    public function getNumRmStar()
    {
        return $this->numRmStar;
    }

    /**
     * @param mixed $numRmStar
     */
    public function setNumRmStar($numRmStar)
    {
        $this->numRmStar = $numRmStar;
    }

    /**
     * @return \DateTime
     */
    public function getDateRmStar()
    {
        return $this->dateRmStar;
    }

    /**
     * @param \DateTime $dateRmStar
     */
    public function setDateRmStar($dateRmStar)
    {
        $this->dateRmStar = $dateRmStar;
    }

    /**
     * @return mixed
     */
    public function getRecStar()
    {
        return $this->recStar;
    }

    /**
     * @param mixed $recStar
     */
    public function setRecStar($recStar)
    {
        $this->recStar = $recStar;
    }

    /**
     * @return mixed
     */
    public function getMontanRemb()
    {
        return $this->montanRemb;
    }

    /**
     * @param mixed $montanRemb
     */
    public function setMontanRemb($montanRemb)
    {
        $this->montanRemb = $montanRemb;
    }

    /**
     * @return \DateTime
     */
    public function getCiApur()
    {
        return $this->ciApur;
    }

    /**
     * @param \DateTime $ciApur
     */
    public function setCiApur($ciApur)
    {
        $this->ciApur = $ciApur;
    }



}