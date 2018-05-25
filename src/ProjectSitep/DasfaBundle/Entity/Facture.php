<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 18/04/2018
 * Time: 01:30
 */

namespace ProjectSitep\DasfaBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 *
 * @ORM\Table(name="Facture")
 * @ORM\Entity
  */

class Facture
{
    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $num;

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
    private $clinique;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateFact;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateRec;
    /**
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $Montant;

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
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return mixed
     */
    public function getClinique()
    {
        return $this->clinique;
    }

    /**
     * @param mixed $clinique
     */
    public function setClinique($clinique)
    {
        $this->clinique = $clinique;
    }

    /**
     * @return mixed
     */
    public function getDateFact()
    {
        return $this->dateFact;
    }

    /**
     * @param mixed $dateFact
     */
    public function setDateFact($dateFact)
    {
        $this->dateFact = $dateFact;
    }

    /**
     * @return mixed
     */
    public function getDateRec()
    {
        return $this->dateRec;
    }

    /**
     * @param mixed $dateRec
     */
    public function setDateRec($dateRec)
    {
        $this->dateRec = $dateRec;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->Montant;
    }

    /**
     * @param mixed $Montant
     */
    public function setMontant($Montant)
    {
        $this->Montant = $Montant;
    }


    public function __toString()
    {
        return $this->getNum();
    }


}