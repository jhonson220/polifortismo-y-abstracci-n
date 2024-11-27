<?php
abstract class Figura {
    abstract public function area();
}
class Cuadrado extends Figura {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function area() {
        return $this->lado * $this->lado;
    }
}
class Circulo extends Figura {
    const PI = 3.14159;
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function area() {
        return self::PI * $this->radio * $this->radio;
    }
}

$cuadrado = new Cuadrado(30);
echo "El área del cuadrado es: " . $cuadrado->area() . "\n";


$circulo = new Circulo(40);
echo "El área del círculo es: " . $circulo->area() . "\n";