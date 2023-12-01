<?php

class Etudiant{
     public $nom;

    public $prenom;

    public $telephone;

    public $email;

    public $sexe;

    public $pays;

    public $Filiere;

    public function __construct()
    {
    }

    	/**
	 * @return mixed
	 */
	public function getNom(): ?string 
    {
		return $this->nom;
	}
	
	/**
	 * @param mixed $nom 
	 * @return self
	 */
	public function setNom(string $nom): self 
    {
		$this->nom = $nom;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getPrenom(): ?string 
    {
		return $this->prenom;
	}
	
	/**
	 * @param mixed $prenom 
	 * @return self
	 */
	public function setPrenom(string $prenom): self 
    {
		$this->prenom = $prenom;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getTelephone(): ?string 
    {
		return $this->telephone;
	}
	
	/**
	 * @param mixed $telephone 
	 * @return self
	 */
	public function setTelephone(string $telephone): self 
    {
		$this->telephone = $telephone;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getEmail(): ?string 
    {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail(string $email): self 
    {
		$this->email = $email;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getSexe(): ?string 
    {
		return $this->sexe;
	}
	
	/**
	 * @param mixed $sexe 
	 * @return self
	 */
	public function setSexe(string $sexe): self 
    {
		$this->sexe = $sexe;
		return $this;
	}
        	/**
	 * @return mixed
	 */
	public function getFiliere(): ?string 
    {
		return $this->Filiere;
	}
	
	/**
	 * @param mixed $Filiere 
	 * @return self
	 */
	public function setFiliere(string $Filiere): self 
    {
		$this->Filiere = $Filiere;
		return $this;
	}

    public function DonneeEtudiant($Etudiant){
		//  $Etudiant->setId($count);

        if(isset($_POST["Name"])){
            $Etudiant->setNom($_POST["Name"]);
        }else{
            $Etudiant->setNom("");
        }

        if(isset($_POST["Prenom"])){
            $Etudiant->setPrenom($_POST["Prenom"]);
        }else{
            $Etudiant->setPrenom("");
        }

        if(isset($_POST["Tel"])){
            $Etudiant->setTelephone($_POST["Tel"]);
        }else{
            $Etudiant->setTelephone("");
        }

        if(isset($_POST["Email"])){
            $Etudiant->setEmail($_POST["Email"]);
        }else{
            $Etudiant->setEmail("");
        }

        if(isset($_POST["choice"])){
            $Etudiant->setSexe($_POST["choice"]);
        }else{
            $Etudiant->setSexe("");
        }



        if(isset($_POST["Filiere"])){
            $Etudiant->setFiliere($_POST["Filiere"]);
        }else{
            $Etudiant->setFiliere("");
        }
	}
}