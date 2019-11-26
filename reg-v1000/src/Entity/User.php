<?php

namespace UserRegistration\Entity;

/*require_once '../../vendor/autoload.php';*/

class User
{
   private $user_name;
   private $user_email;
   private $user_password;
   private $user_age;
   private $country;
   private $user_bio;

    /**
     * User constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * @param mixed $user_email
     */
    public function setUserEmail($user_email): void
    {
        $this->user_email = $user_email;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setUserPassword($user_password): void
    {
        $this->user_password = $user_password;
    }

    /**
     * @return mixed
     */
    public function getUserAge()
    {
        return $this->user_age;
    }

    /**
     * @param mixed $user_age
     */
    public function setUserAge($user_age): void
    {
        $this->user_age = $user_age;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getUserBio()
    {
        return $this->user_bio;
    }

    /**
     * @param mixed $user_bio
     */
    public function setUserBio($user_bio): void
    {
        $this->user_bio = $user_bio;
    }

    public function __toString()
    {
        return
        "
        $this->user_name;
        $this->user_email;
        $this->user_password;
        $this->user_age;
        $this->country;
        $this->user_bio;
        ";
    }


}