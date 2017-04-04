<?php
    namespace App\Table;

    use Core\Table\Table;

    class StatutMaritalTable extends Table
    {
        public function getStatut(){
            return $this->query("SELECT * FROM statutMaritals");
        }
    }