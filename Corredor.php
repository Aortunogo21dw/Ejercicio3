<html>
    <body>
        <?php

            require_once 'Competicion.php';

            //Clase Corredor
            class Corredor{
                private $nombre;
                private $codigo;
                private $duracionCarreras;

                //Constructor de la clase que recibe un nombre y un codigo e inicializa el array de duracionCarreras
                function __construct($nombre,$codigo){
                    $this->nombre = $nombre;
                    $this->codigo = $codigo;
                    $this->duracionCarreras = [];
                }

                //Funcion que sirve para añadir carreras, esta identifica si los valores introducidos cumplen los requisitos para ser adecuados y lanza una excepcion en caso de que no
                function anadirCarrera($segs){
                    try {
                        if (count($this->getDuracionCarreras()) >= 5){
                            throw new Exception ('El corredor ya tiene 5 carreras');
                        } elseif ($segs < 5) {
                            throw new Exception ('La carrera dura menos de 5 segundos');
                        }else {
                            $this->setDuracionCarreras($segs);
                        }
                    } catch (Exception $e) {
                        
                        echo $e->getMessage();
                    }                      
                }

                //Funcion get del nombre
                function getNombre(){
                    return $this->nombre;
                }

                //Funcion get del codigo
                function getCodigo(){
                    return $this->codigo;
                }

                //Funcion get de duracionCarreras
                function getDuracionCarreras(){
                    return $this->duracionCarreras;
                }

                //Funcion set de duracionCarreras
                function setDuracionCarreras($segs){
                    $this->duracionCarreras[] = $segs;
                }

            }
        ?>
    </body>
</html>