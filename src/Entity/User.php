<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    private $plainPassword; 
    /**
    * @ORM\Column(name="roles", type="json_array")
    **/
    private $roles=["ROLE_USER"];

    private $salt;

    public function __construct()
    {
        $this->isActive = true;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }

    
    public function getSalt()
    {
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getplainPassword()
    {
        return $this->plainPassword;
    }
    public function getRoles()
    {
        return array('ROLE_USER');
    }
        public function setUsername($username)
    {
        $this->username=$username;
    }


    public function setPassword($password)
    {
         $this->password=$password;
    }

    public function setplainPassword($plainPassword)
    {
       $this->plainPassword=$plainPassword;
    }

    public function addRole($role) {
        $this->roles[] = $role;
    }
    
    public function removeRole($role) {
        $index = array_search($role, $this->roles, true);
        if ($index !== false) {
            array_splice($this->roles, $index, 1);
        }
    }
    public function eraseCredentials() {
        $this->plainPassword=null;
    }
       /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
        
}