<? php

//estruturas de repetição
// while , dowhile , for e foreach;

$i = 1;

while ($i <= 5) {
    echo $i ;
    $i++;}

    $i = 0;

do {
    echo $i;
    $i++;
} while ($i <= 5);

//for (inicialização; condição; incremento)

for ($i=1;$i<=10;$i++) echo "Número: ".$i.\n";
//resposta: 1,2,3,4,5,6,7,8,9,10


(array) $colors = ["red", "blue", "black", "yellow", "green"];

foreach ($colors as $value){
echo  $value. "\n";
}

$frutas = ["banana", "maçã", "laranja"];
foreach ($frutas as $fruta){
    echo "Eu gosto de $fruta.\n";
}

for ($i=3;$i<10;$i++) echo "Número: $i.\n";
$e = [3,4,5,6,7,8,9];
foreach ($e as $i){
    echo "Eu gosto no número $i.\n";
}



?>

