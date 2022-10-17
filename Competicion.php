<html>
    <body>
        <?php

            require_once 'Corredor.php';

            class Competicion{
                private $corredor;

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
                    $contMedia = 0;
                    for ($i = 1; $i <= count($this->corredor); $i++) { 
                        $contMedia = $contMedia + $this->corredor[$i]->getDuracionCarreras()[0];
                    }
                    return "La media de la primera carrera es de : " .$contMedia / count($this->corredor). " segundos <br>";
                }

                function corredorMasRapido(){
                    $corredorMasRapido = "";
                    $tiempoMasRapido = 0;
                    for ($i = 1; $i <= count($this->corredor); $i++) { 
                       if(max($this->corredor[$i]->getDuracionCarreras()) > $tiempoMasRapido){
                            $tiempoMasRapido = max($this->corredor[$i]->getDuracionCarreras());
                            $corredorMasRapido = $this->corredor[$i];
                       }
                    }
                    return "El corredor mas rapido es " .$corredorMasRapido->getNombre(). " con un tiempo de " .$tiempoMasRapido. " segundos<br>";
                }


            }   
        ?>
    </body>
</html>