<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 11/05/2018
 * Time: 20:36
 */

namespace ProjectSitep\DfinBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 *
 * @ORM\Table(name="cheques")
 * @ORM\Entity
 */

class Cheques
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
    private $num;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $agent;

    /**
     *
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datech;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     *
     */
    private $montant;

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
     * @return \DateTime
     */
    public function getDatech()
    {
        return $this->datech;
    }

    /**
     * @param \DateTime $datech
     */
    public function setDatech($datech)
    {
        $this->datech = $datech;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
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






}