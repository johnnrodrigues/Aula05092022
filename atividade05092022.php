<?php 

//Crie uma variável e atribua um array com os seguintes itens : 20, 15, 30, 17, 8 
$numeros = array();

$numeros = [20, 15, 30, 17, 8];

//-)Faça uma função que imprima o array do primeiro exercício.
function Imprimir($numeros){
for ($i = 0; $i < count($numeros); $i ++) {
    echo "<li> $numeros[$i] </li>";
}
}

echo "<pre>";
print_r($numeros);
echo "</pre>";

// -)Crie uma função que some todos os itens do array do exercício 1;

//echo "<pre>";
//print_r("A soma de todos os números da Array acima é de ". array_sum($numeros));
//echo "</pre>";

function SomarArray ($numeros) {
$soma = 0;
for ($i = 0; $i < count($numeros); $i++) {
    $soma = $soma + $numeros[$i];
}
return $soma;
}
echo "<pre>";
print_r("A soma de todos os números da Array acima é de ".SomarArray($numeros));
echo "</pre>";

// -)Utilizando o For imprima a tabuada do 144.
echo "<h2>Tabuada do número 144</h2> <br>";
for($i = 0; $i <= 10; $i++){
    echo "144 x " .$i. ": ". ($i *144) ."<br>";
}

// -)Exiba na tela todos os itens pares de 251 de 544.
for ($i = 251; $i <= 544; $i++) {
    if($i % 2 == 0) {
        echo "<br>".$i." é par";
    }
}

//-) Adicione 3 novos itens no array do exercício 1 usando a função rand(-10,10).

array_push($numeros, rand(-10,10));
array_push($numeros, rand(-10,10));
array_push($numeros, rand(-10,10));
Imprimir($numeros);


//-)Faça uma função que receba a porcentagem e um numero e calcule a porcentagem desse numero.
function porcentagem($numero, $porcentagem){
    return $porcentagem ."% de ".$numero." é ".(($numero/100)*$porcentagem);
}
echo "<h1>".porcentagem(80,40)."</h1>";

//-)Exiba na tela a quantidade de pares, impares, negativos e positivos do array do exercício 1
$cont_pares = 0;
$cont_impares = 0;
$cont_positivos = 0;
$cont_negativos = 0;



    for ($i = 0; $i < count($numeros); $i++) {
        if($numeros[$i] > 0) {
            $cont_positivos++;
        } else {
            $cont_negativos++;
        } if($numeros[$i] % 2 == 0) {
            $cont_pares++; 
        } else {
            $cont_impares++;
        }
    }
    echo "<br>Pares:".$cont_pares." Impares:".$cont_impares;
    echo "<br>Positivos:".$cont_positivos." Negativos:".$cont_negativos;

    

//-)Calcule a média do array do exercício 1
$somaArray = SomarArray($numeros);
echo "<h3>A média do array Numeros é de:" .$somaArray / count($numeros);

?>