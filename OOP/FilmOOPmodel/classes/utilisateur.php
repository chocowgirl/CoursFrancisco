<?php

class Utilisateur{
    public int $id;
    public string $nom;
    public string $login;
    public string $password;
    public string $role;

    public function __construct(array $init){
        $this->hydrate($init);
    }

    public function hydrate (array $init){
        foreach ($init as $key => $value){
            $nomSet = "set" . ucfirst($key);
            $this->$nomSet ($value);
        }
    }



    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of login
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * Set the value of login
     */
    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }
}


?>