<html>
    <body>
        <?php

            require_once 'Corredor.php';

            //Clase Competicion
            class Competicion{
                private $corredor;

                //Constructor de la clase que inicializa el array corredor
                function __construct(){
                    $this->corredor = [];
                }

                //Funcion que sirve para añadir un corredor
                function anadirCorredor(Corredor $c1){
                    $this->corredor = $this->corredor + [$c1->getCodigo() => $c1];
                    echo "El corredor " .$c1->getNombre(). " se ha agregado correctamente <br>";
                }

                //Funcion que sirve añadir una carrera a un corredor
                function anadirCarreraACorredor($codigo,$tiempo){
                    $this->corredor[$codigo]->anadirCarrera($tiempo);
                    echo "Carrera con tiempo de ".$tiempo." segundos añadida correctamente a ".$this->corredor[$codigo]->getNombre()."<br>";
                }

                //Funcion que devuelve el tiempo medio de la primera carrera
                function tiempoMedioPrimeraCarrera(){
                    $contMedia = 0;
                    for ($i = 1; $i <= count($this->corredor); $i++) { 
                        $contMedia = $contMedia + $this->corredor[$i]->getDuracionCarreras()[0];
                    }
                    return "La media de la primera carrera es de : " .$contMedia / count($this->corredor). " segundos <br>";
                }

                //Funcion que devuelve el nombre y el tiempo del corredor mas rapido
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

                //Funcion que devuelve un array con los corredores de mas de dos carreras con mas de 15 segundos (No funciona bien del todo)
                function corredorMuchoMasRapido(){
                    $corredores = [];
                    for ($i= 1; $i <= count($this->corredor); $i++) { 
                        if (max($this->corredor[$i]->getDuracionCarreras()) >= 15) {
                            array_push($corredores, $this->corredor[$i]->getNombre());
                        }
                    } 
                    return $corredores;
                }

                //Funcion que devuelve los nombres que terminan con la letra 'e'
                function nombreTerminaEnE(){
                    $terminaE = [];
                    for ($i= 1; $i <= count($this->corredor); $i++) { 
                        if(substr($this->corredor[$i]->getNombre(), -1) === "e"){
                            array_push($terminaE, $this->corredor[$i]->getNombre());
                        }
                    }
                    return $terminaE;
            
                }
            }   
        ?>
    </body>
</html>