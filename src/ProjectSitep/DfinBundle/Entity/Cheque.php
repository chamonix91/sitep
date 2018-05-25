<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 26/04/2018
 * Time: 02:07
 */


namespace ProjectSitep\DfinBundle\Entity;
use Doctrine\ORM\Mapping as ORM;



/**
 *
 *
 * @ORM\Table(name="cheque")
 * @ORM\Entity
 */
class Cheque
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
    private $reliquat;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $retenu;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $benif;

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
    public function getReliquat()
    {
        return $this->reliquat;
    }

    /**
     * @param mixed $reliquat
     */
    public function setReliquat($reliquat)
    {
        $this->reliquat = $reliquat;
    }

    /**
     * @return mixed
     */
    public function getRetenu()
    {
        return $this->retenu;
    }

    /**
     * @param mixed $retenu
     */
    public function setRetenu($retenu)
    {
        $this->retenu = $retenu;
    }

    /**
     * @return mixed
     */
    public function getBenif()
    {
        return $this->benif;
    }

    /**
     * @param mixed $benif
     */
    public function setBenif($benif)
    {
        $this->benif = $benif;
    }




}