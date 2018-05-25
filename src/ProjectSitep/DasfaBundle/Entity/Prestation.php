<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 18/04/2018
 * Time: 01:21
 */

namespace ProjectSitep\DasfaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 *
 *
 * @ORM\Table(name="prestation")
 * @ORM\Entity
 */
class Prestation
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
    private $prestataire;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $enfants;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code;

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
    public function getPrestataire()
    {
        return $this->prestataire;
    }

    /**
     * @param mixed $prestataire
     */
    public function setPrestataire($prestataire)
    {
        $this->prestataire = $prestataire;
    }




    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getEnfants()
    {
        return $this->enfants;
    }

    /**
     * @param mixed $enfants
     */
    public function setEnfants($enfants)
    {
        $this->enfants = $enfants;
    }





}