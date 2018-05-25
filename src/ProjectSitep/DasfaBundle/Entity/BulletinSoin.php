<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 17/04/2018
 * Time: 22:49
 */

namespace ProjectSitep\DasfaBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 *
 * @ORM\Table(name="bulletin_soin")
 * @ORM\Entity
 */
class BulletinSoin
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
    private $num_bord;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $type_bord;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_bord ;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieu_travail;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $num_bulletin;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectSitep\DasfaBundle\Entity\Prestation", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="idprestation", referencedColumnName="id")
     * @Assert\Type(type="ProjectSitep\DasfaBundle\Entity\Prestation")
     * @Assert\Valid()
     *
     */
    private $prestation ;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectSitep\DasfaBundle\Entity\Agent", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="idprestation", referencedColumnName="id")
     * @Assert\Type(type="ProjectSitep\DasfaBundle\Entity\Agent")
     * @Assert\Valid()
     *
     */
    private $agent ;

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
    public function getNumBord()
    {
        return $this->num_bord;
    }

    /**
     * @param mixed $num_bord
     */
    public function setNumBord($num_bord)
    {
        $this->num_bord = $num_bord;
    }

    /**
     * @return mixed
     */
    public function getTypeBord()
    {
        return $this->type_bord;
    }

    /**
     * @param mixed $type_bord
     */
    public function setTypeBord($type_bord)
    {
        $this->type_bord = $type_bord;
    }

    /**
     * @return \DateTime
     */
    public function getDateBord()
    {
        return $this->date_bord;
    }

    /**
     * @param \DateTime $date_bord
     */
    public function setDateBord($date_bord)
    {
        $this->date_bord = $date_bord;
    }

    /**
     * @return mixed
     */
    public function getLieuTravail()
    {
        return $this->lieu_travail;
    }

    /**
     * @param mixed $lieu_travail
     */
    public function setLieuTravail($lieu_travail)
    {
        $this->lieu_travail = $lieu_travail;
    }

    /**
     * @return mixed
     */
    public function getNumBulletin()
    {
        return $this->num_bulletin;
    }

    /**
     * @param mixed $num_bulletin
     */
    public function setNumBulletin($num_bulletin)
    {
        $this->num_bulletin = $num_bulletin;
    }

    /**
     * @return mixed
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @param mixed $observation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    }

    /**
     * @return mixed
     */
    public function getPrestation()
    {
        return $this->prestation;
    }

    /**
     * @param mixed $prestation
     */
    public function setPrestation($prestation)
    {
        $this->prestation = $prestation;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param mixed $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    }

    public function __toString()
    {
        return $this->getNumBord();
    }
}