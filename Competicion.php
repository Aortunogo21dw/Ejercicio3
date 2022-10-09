<html>
    <body>
        <?php

            require_once 'Corredor.php';
            require_once 'Pruebas.php';

            class Competicion extends Corredor{
                private $corredor;
                private $contMedia = 0;
                private $tiempoMasRapido = 0;
                private $corredorMasRapido;

                function __construct(){
                    $this->corredor = [];
                }

                function anadirCorredor(Corredor $c1){
                    $this->corredor = $this->corredor + [$c1->getCodigo() => $c1];
                    echo "El corredor " .$c1->getNombre(). " se ha agregado correctamente <br>";
                }

                function anadirCarreraACorredor($codigo,$tiempo){
                    $this->corredor[$codigo]->anadirCarrera($tiempo);
                    echo "Carrera con tiempo de ".$tiempo." segundos añadida correctamente a ".$this->corredor[$codigo]->getNombre()."<br>";
                }

                function tiempoMedioPrimeraCarrera(){
                    for ($i = 1; $i <= count($this->corredor); $i++) { 
                        $this->contMedia = $this->contMedia + $this->corredor[$i]->getDuracionCarreras()[0];
                    }
                    return "La media de la primera carrera es de : " .$this->contMedia / count($this->corredor). " segundos <br>";
                }

                function corredorMasRapido(){
                    for ($i = 1; $i <= count($this->corredor); $i++) { 
                       if(max($this->corredor[$i]->getDuracionCarreras()) > $this->tiempoMasRapido){
                            $this->tiempoMasRapido = max($this->corredor[$i]->getDuracionCarreras());
                            $this->corredorMasRapido = $this->corredor[$i];
                       }
                    }
                    return "El corredor mas rapido es " .$this->corredorMasRapido->getNombre(). " con un tiempo de " .$this->tiempoMasRapido. " segundos<br>";
                }
            }   
        ?>
    </body>
</html>