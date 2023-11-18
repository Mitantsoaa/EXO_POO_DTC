<?php 
    class Esn
    {
        public string $profil;
        protected string $salaire;
        public string $nom;
        public int $nbDev;
        public string $contact;
        public array $collabs;

        public function getProfil()
        {
            return $this->profil;
        }

        public function setProfil(?string $profil)
        {
            $this->profil = $profil;

            return $this;
        }

        public function getSalaire()
        {
            $this->calculeSalaire();

            return $this->salaire;
        }

        public function setSalaire(?string $salaire)
        {
            $this->salaire = $salaire;

            return $this;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function setNom(?string $nom)
        {
            $this->nom = $nom;

            return $this;
        }

        public function getNbDev()
        {
            return $this->nbDev;
        }

        public function setNbDev(?int $nb)
        {
            $this->nbDev = $nb;

            return $this;
        }

        public function getContact()
        {
            return $this->contact;
        }

        public function setContact(?string $contact)
        {
            $this->contact = $contact;

            return $this;
        }

        protected function calculeSalaire()
        {
            if($this->profil === 'J'){
                $this->setSalaire('100k');
            }
            if($this->profil === 'C'){
                $this->setSalaire('150k');
            }
            if($this->profil === 'S'){
                $this->setSalaire('200k');
            }

            return $this->salaire('100k');
        }


    }