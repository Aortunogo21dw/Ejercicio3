<html>
    <body>
        <?php

            require_once 'Corredor.php';
            require_once 'Competicion.php';

            $corredor1 = new Corredor("Asier", 001);
            $corredor2 = new Corredor("Emilio", 002);
            $corredor3 = new Corredor("Paula", 003);
            $corredor4 = new Corredor("Carole", 004);
            $corredor5 = new Corredor("Jone", 005);

            $competicion1 = new Competicion();

            $competicion1->anadirCorredor($corredor1);
            $competicion1->anadirCorredor($corredor2);
            $competicion1->anadirCorredor($corredor3);
            $competicion1->anadirCorredor($corredor4);
            $competicion1->anadirCorredor($corredor5);

            $competicion1->anadirCarreraACorredor(001, 15);
            $competicion1->anadirCarreraACorredor(002, 8);
            $competicion1->anadirCarreraACorredor(003, 12);
            $competicion1->anadirCarreraACorredor(004, 5);
            $competicion1->anadirCarreraACorredor(005, 11);

            echo $competicion1->tiempoMedioPrimeraCarrera();
            echo $competicion1->corredorMasRapido();
            echo "Corredores con mas de dos carreras y mas de 15 segundos en estas: ";
            print_r($competicion1->corredorMuchoMasRapido());
            echo "<br>";
            echo "Corredores con nombres acabados en 'e': ";
            print_r($competicion1->nombreTerminaEnE());
            

        ?>
    </body>
</html>