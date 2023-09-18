<?php
class Tigger {
    //↓↓Se define una propiedad estática privada $instance, que almacenará la única instancia de la clase Tigger. 
    //Como es estática, pertenece a la clase en lugar de a una instancia específica de la clase.
    private static $instance;
    private $roarCounter = 0;


    //↓↓El constructor de la clase Tigger es privado, lo que significa que no se puede crear una instancia de la clase directamente desde fuera de la clase.
    private function __construct() {
        echo "Building character Tigger" . PHP_EOL;
    }

    /* Dentro de este método, 
    -Se verifica si ya existe una instancia almacenada en la propiedad estática $instance. Si no existe, se crea una nueva instancia de la clase Tigger y se almacena en la propiedad $instance. 
    -Si ya existe, se devuelve la instancia creada. */

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() {
        echo "Grrr!" . PHP_EOL;
        $this->roarCounter++;
    }

    public function getCounter() {
        return $this->roarCounter;
    }
}

