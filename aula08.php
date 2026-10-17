<?php

$cadeira = ["caneta", "grafiti"];
echo $cadeira[0];
$cadeira[] = "lapiseira";
print_r($cadeira);


$carro = [
    "proprietário" => (string) readline("Qual o nome do proprietário?"),
    "cor" => "branca",
    "ano" => "2026",
    "modelo" => "Fiat Palio",
    "potência" => "2.0",
    "banco" => "Couro",
    "desempenho" => "450.000 cavalos",
    "tipo de combustão" => "Flex",
    "segurança" => ["freios ABS", "Airbags Obrigatórios", "Controle Eletrônico de Estabilidade"],
    "Conforto e Tecnologia" => ["Ar-condicionado", "direção com assistência elétrica", "centrais multimídia", "câmbio automático"]
];


$aluno = [
    "pessoa" => ["nome" => (string) readline("Qual o nome do aluno?"), "idade" => (int) readline("Qual a idade do aluno?"), "sexo" => (string) readline("Qual o sexo do aluno?")],
    "instituição" => (string) readline("Qual o nome da Instituição?"),
    "semestre" => (int) readline("Qual o semestre do aluno?"),
    "curso" => (string) readline ("Qual o curso do aluno?")
    ];

if ($aluno["pessoa"]["idade"] < 0 || $aluno["pessoa"]["idade"] > 120) {
    echo "Idade inválida";
};
print_r($aluno);
var_dump($aluno["pessoa"]["idade"]);

condicao((float) readline("Qual a nota?"));

function condicao($nota) {
    if ($nota >= 7) {
        echo "Aprovado";
    } else {
        echo "Reprovado\n";
    }
}

function saudar($nome, $titulo = "Sr(a)"){
    echo "Olá " . $titulo . " " . $nome;
};

    saudar("Carlos", "Dr");

function calcularTotal($preco){
    $imposto = 5.0;
    return $preco + $imposto;};
    
    $desconto = 10%
    $desconto = 10;
$aplicarDesconto = 
function ($valor) use ($desconto){
    return $valor - $desconto;
};
echo $aplicarDesconto(100);
    




?>