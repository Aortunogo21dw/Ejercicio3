<html>
    <body>
        <?php

            require_once 'Competicion.php';
            require_once 'Pruebas.php';

            class Corredor{
                private $nombre;
                private $codigo;
                private $duracionCarreras;

                function __construct($nombre,$codigo){
                    $this->nombre = $nombre;
                    $this->codigo = $codigo;
                    $this->duracionCarreras = [];
                }

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

                function getNombre(){
                    return $this->nombre;
                }

                function getCodigo(){
                    return $this->codigo;
                }

                function getDuracionCarreras(){
                    return $this->duracionCarreras;
                }

                function setDuracionCarreras($segs){
                    $this->duracionCarreras[] = $segs;
                }

            }
        ?>
    </body>
</html>