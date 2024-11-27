<?php 
abstract class animal{
    abstract function hacerSonido();
        
    public function caminar(){
    echo "el animal esta caminando .\n<br>";
    }
}
class vaca extends animal {
    public function hacerSonido()
    {
     echo "la vaca murge muu! muuu!.\n<br>";
    }
}
class oveja extends animal {
    public function hacerSonido()
    {
        echo "la oveja bala meee! meee!.\n<br>";
    }
}
$oveja1 = new oveja ();
$oveja1->hacerSonido();
$oveja1->caminar();
$vaca1 = new vaca ();
$vaca1->hacerSonido();
$vaca1->caminar();