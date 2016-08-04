<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tresor
 *
 * @ORM\Table(name="tresor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TresorRepository")
 */
class Tresor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float")
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="description_start", type="text")
     */
    private $descriptionStart;

    /**
     * @var string
     *
     * @ORM\Column(name="description_end", type="text")
     */
    private $descriptionEnd;



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
     * Set name
     *
     * @param string $name
     *
     * @return Tresor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return Tresor
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     *
     * @return Tresor
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Tresor
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set descriptionStart
     *
     * @param string $descriptionStart
     *
     * @return Tresor
     */
    public function setDescriptionStart($descriptionStart)
    {
        $this->descriptionStart = $descriptionStart;

        return $this;
    }

    /**
     * Get descriptionStart
     *
     * @return string
     */
    public function getDescriptionStart()
    {
        return $this->descriptionStart;
    }

    /**
     * Set descriptionEnd
     *
     * @param string $descriptionEnd
     *
     * @return Tresor
     */
    public function setDescriptionEnd($descriptionEnd)
    {
        $this->descriptionEnd = $descriptionEnd;

        return $this;
    }

    /**
     * Get descriptionEnd
     *
     * @return string
     */
    public function getDescriptionEnd()
    {
        return $this->descriptionEnd;
    }
}
