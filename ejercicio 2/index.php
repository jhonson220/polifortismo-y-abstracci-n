<?php
class vehiculo{
public function arancar(){
    echo "el motor esta prendiendo .\n<br>";
}
}
class bicicleta extends vehiculo{
    public function arancar()
    {
        echo " la bicicleta corre a 100 por hora .\n<br>";
    }   
}
class coche extends vehiculo {
    public function arancar()
    {
        echo "el carro esta en camino .\n<br>";
    }
}
 function recorrerBia(vehiculo $v){
   $v->arancar();
}
$bicicleta = new bicicleta();
$coche = new coche();
recorrerBia($bicicleta);
recorrerBia($coche);
?>