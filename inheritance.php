<?php
    // contoh parents
    class Baju{
        public $merk, $ukuran, $warna;
        
        public function Bahan(){
            return "Halus dan Lembut juga Nyaman";
        }
    }

    // chill
        class Pakaian extends Baju{
            public $benang = false;

            public function aktifkanBenang(){
                $this->benang=true;
                return "Baju di Jahit";
            
            }
        }

        $bajuKu = new Pakaian();
        echo $bajuKu->Bahan();
        echo "<br>";
        echo $bajuKu->aktifkanBenang();
        ?>