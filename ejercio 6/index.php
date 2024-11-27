<?php 
abstract class documento {
    public function inprimir(){
    echo "la impresora esta inprimiendo un archivo :D !!!\n<br>";
    }
}
class documentopdf extends documento {
    public function inprimiendo(){
        parent::inprimir();
        echo "tipo pdf .\n<br>" ; 
    }

}
class documentoword extends documento {
    public function inprimiendo(){
        parent::inprimir();
        echo "tipo word .\n" ; 
    }
}  