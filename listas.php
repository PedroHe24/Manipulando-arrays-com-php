    <?php

    $idadelist = [21, 23, 19, 25, 30, 41, 18];
    
    list($idadePedro, $idadeJoão, $idadeMaria) = $idadelist;
    

    $idadelist[] = 24;

    foreach ($idadelist as $idade) {
        echo $idade . PHP_EOL;
    }
    