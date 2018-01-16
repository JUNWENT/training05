<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
  /**
   * @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer")
   * @var int
   **/
  protected $id;

  /**
   * @ORM\Column(type="string")
   * @var string
   **/
  protected $name;

  /**
   * @ORM\Column(type="integer")
   * @var int
   **/
  protected $product;

  /**
   * @ORM\Column(type="string", length=20)
   * @var string
   **/
  protected $password;

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($password) {
    return $this->password = $password;
  }
}
