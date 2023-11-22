<?php 
require_once 'collab.php';

    class Esn
    {
        public string $nom;
        public int $nbDev;
        public string $contact;
        public array $collabs ;

        public function __construct()
        {
            $this->$collabs = [];
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

        public function addCollabs(collab $collab)
        {
            array_push($this->collabs, $collab);

            return $this;
        }

        public function removeCollabs(collab $collab)
        {
            $index = array_search($collab, $this->collabs);

            if ($index !== false) {
                unset($this->collabs[$index]);
            }

        }


    }

