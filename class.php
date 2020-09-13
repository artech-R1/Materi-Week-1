<?php 

class Hewan {
   public $jumlahkaki, $kambing, $buaya, $kucing, $sapi;
   public function terbang($sayap){
       if ($sayap === "ada") {
           echo "bisa terbang";
       } 
       echo "tidak bisa terbang" ;
       return ;
   }
   
} 

class kambing extends Hewan {
 public $jumlahkaki = 4 ;
 public function bersuara (){
      echo 'mbek, mbek';
      return ;
}
}

class buaya_darat extends Hewan {
    public $jumlahkaki = 2 ;
    public function bersuara (){
        echo "Assalamu'alaikum ukhti";
        return ;
}
}

class kucing extends Hewan { 
    public $jumlahkaki = 4 ;
    public function bersuara (){
        echo 'meow, meow';
        return ;
}
}
class sapi extends Hewan {
    public $jumlahkaki = 4 ;
    public function bersuara (){
        echo 'maaak, maak ';
        return ;
    }
}

class burung extends Hewan {
    public $jumlahkaki = 4,
           $sayap = "ada"  ;
    public function bersuara (){
        echo 'wit, wit';
        return ;
    }
}
?>