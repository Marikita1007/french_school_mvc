<?php
namespace Models;

class Members
{
    private $id_member;
    private $prenom;
    private $nom;
    private $email;
    private $password;

    public function __construct($id_member, $nom, $prenom, $email, $password){
        $this->id_member=$id_member;
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
    }

    /**
     * @return mixed
     */
    public function getIdMember()
    {
        return $this->id_member;
    }

    /**
     * @param mixed $id_member
     */
    public function setIdMember($id_member)
    {
        $this->id_member = $id_member;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}