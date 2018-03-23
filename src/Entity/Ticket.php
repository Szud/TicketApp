<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="text", length=255)
    */
    private $poste;

    /**
    * @ORM\Column(type="text", length=255)
    */
    private $qualification;

    /**
    * @ORM\Column(type="text", length=255)
    */
    private $description;

    /**
    * @ORM\Column(type="text", length=255)
    */
    private $typeprobleme;

    public function getId()
    {
        return $this->id;
    }

    public function getposte()
    {
        $this->poste;
    }

    public function setposte()
    {
        $this->poste=$poste;
        return $this;
    }

    public function getqualification()
    {
        $this->qualification;
    }

    public function setqualification()
    {
        $this->qualification=$qualification;
        return $this;
    }

    public function getdescription()
    {
        $this->description;
    }

    public function setdescription()
    {
        $this->description=$description;
        return $this;
    }

    public function gettypeprobleme()
    {
        $this->typeprobleme;
    }

    public function settypeprobleme()
    {
        $this->typeprobleme=$typeprobleme;
        return $this;
    }
}
