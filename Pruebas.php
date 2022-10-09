<html>
    <body>
        <?php

            require_once 'Corredor.php';
            require_once 'Competicion.php';

            $corredor1 = new Corredor("Asier", 001);
            $corredor2 = new Corredor("Emilio", 002);
            $corredor3 = new Corredor("Paula", 003);
            $corredor4 = new Corredor("Carol", 004);
            $corredor5 = new Corredor("Jon", 005);

            $competicion1 = new Competicion();

            $competicion1->anadirCorredor($corredor1);
            $competicion1->anadirCorredor($corredor2);
            $competicion1->anadirCorredor($corredor3);
            $competicion1->anadirCorredor($corredor4);
            $competicion1->anadirCorredor($corredor5);

            $competicion1->anadirCarreraACorredor(001, 10);
            $competicion1->anadirCarreraACorredor(002, 8);
            $competicion1->anadirCarreraACorredor(003, 12);
            $competicion1->anadirCarreraACorredor(004, 5);
            $competicion1->anadirCarreraACorredor(005, 11);

            echo $competicion1->tiempoMedioPrimeraCarrera();
            echo $competicion1->corredorMasRapido();

        ?>
    </body>
</html>