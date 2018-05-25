<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 24/01/2018
 * Time: 13:25
 */

namespace ProjectSitep\DasfaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;



/**
 *
 *
 * @ORM\Table(name="agent")
 * @ORM\Entity
 */
class Agent
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
    private $nom;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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





}