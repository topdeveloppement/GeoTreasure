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
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

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
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Tresor
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Tresor
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
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
