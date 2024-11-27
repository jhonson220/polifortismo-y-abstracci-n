<?php
abstract class instrumento{
    abstract function tocar();
    public function tocando() {
        echo "el dulce sonido de instrumento .\n<br>";
    }
}
class guitarra extends instrumento {
  public function tocar()
  {
    echo "el sonido de la guitara<br>";
  }
}
class tanbor extends instrumento {
    public function tocar(){
        echo "el tanbor vibra<br>";
    }
}
$guitarra1 = new guitarra();
$guitarra1->tocar();
$guitarra1->tocando();
$tanbor1 = new tanbor();
$tanbor1->tocar();
$tanbor1->tocando();