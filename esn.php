<?php 
    class Esn
    {
        public string $profil;
        protected string $salaire;
        public string $nom;
        public int $nbDev;
        public string $contact;
        public array $collabs = [];

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
            return count($this->collabs);
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

            $this->salaire = '100k';
        }

        public function getCollabs()
        {
            return $this->collabs;
        }

        public function setCollabs($collabs)
        {
            $this->collabs = $collabs;

            return $this;
        }

        public function addCollabs($nom,$profil)
        {
            $col = [];
            $col['nom'] = json_encode($this->setNom($nom));
            $col['profil'] = json_encode($this->setProfil($profil));
            $col['salaire'] = $this->calculeSalaire($this->profil);
            array_push($this->collabs, $this->setProfil($profil) );

            return $this;
        }

        public function removeCollabs($nom)
        {
            for($i=0; $i<=count($this->collabs); $i++){
                if($this->collabs[$i]->nom === $nom){
                    unset($this->collabs[$i]);
                }
            }

            return $this;
        }


    }

    $esn = new Esn();
    $esn->addCollabs('Koto','S');
    $esn->addCollabs('Lita','J');
    echo $esn->getSalaire().PHP_EOL;
    echo $esn->getNbDev();
    $esn->removeCollabs('Koto');
    // var_dump($esn->getCollabs());
    echo $esn->getNbDev();