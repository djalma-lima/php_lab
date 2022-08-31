<?php // Primos
$tamanho = 30;
$primos = [];
$contDivisao = 0;


for ($i = 1; $i <= $tamanho; $i++) {
     $contDivisao = 0; //zera a variavel para ser 1 no if do primo
     
    for ($j = $i; $j > 1; $j--) {
        // echo "i: ". $i ." j: " . $j . "<br>";
        $resto = $i % $j;

        if ($resto == 0) { // divisoes exatas
            $contDivisao++;
        }
    }

    if ($contDivisao == 1)  {
        $primos[] = $i;
    }
}

echo implode(" - ", $primos) ;


 




