<?php

namespace App\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
 
    // add your own fields
}
/**
 * @ORM\Column(type="text", length=255)
 */
private $name;

/**
 * @ORM\Column(type="datetime")
 */
private $releaseOn;

    public function __construct($id, $name, $releaseOn)
    {
        $this->id = $id;
        $this->name = $name;
        $this->releaseOn = $releaseOn;
    }
        public function getId()
    {
        return $this->id;
    }
        public function getName()
    {
        return $this->name;
    }
        public function getReleaseOn()
    {
        return $this->releaseOn;
    }