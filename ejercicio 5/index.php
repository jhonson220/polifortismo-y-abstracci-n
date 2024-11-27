<?php 
abstract class documento {
    public function inprimir(){
    }
}
class documentopdf {
    public function inprimir(){
        echo "en pdf se esta inprimiendo .\n";
    }

}
class documentoWord {
   public function inprimir(){
    echo "en documento word  se esta inprimiendo .\n";
   }
}
function resiviendo(documento $p){
 $p->inprimir();
}
$documentopdf1 = new documentopdf();
$word = new documentoWord();
resiviendo($documentopdf2);
