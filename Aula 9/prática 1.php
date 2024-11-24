<?php

// notas
$notas = [9, 6.5, 8, 10, 4];

// faltas
$faltas = [0, 1, 1, 0, 0, 0, 0, 0, 1, 0]; 

//---------------------------------------------------------------//

// media das notas
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    return $media;
}

// retorno de frequencia diante das faltas do aluno
function calcularFrequencia($faltas) {
    $totalAulas = count($faltas);
    $totalFaltas = array_sum($faltas);
    $frequencia = (($totalAulas - $totalFaltas) / $totalAulas) * 100;
    return $frequencia;
}

// verificação se o aluno foi ou não aprovado por notas, com parametro de media 7
function verificarAprovacaoNota($media) {
    return $media >= 7 ? "Aprovado" : "Reprovado";
}

// verificação se o aluno foi ou não aprovado por frequencia, com parâmetro de 70%
function verificarAprovacaoFrequencia($frequencia) {
    return $frequencia > 70 ? "Aprovado" : "Reprovado";
}

//------------------------------------------------//

$media = calcularMedia($notas);
$statusNota = verificarAprovacaoNota($media);
$frequencia = calcularFrequencia($faltas);
$statusFrequencia = verificarAprovacaoFrequencia($frequencia);

//------------------------------------------------//

// resultados finais
echo "Média das notas: " . number_format($media, 2) . "<br>";
echo "Frequência: " . number_format($frequencia, 2) . "%<br>";
echo "Status de Aprovação por Nota: " . $statusNota . "<br>";
echo "Status de Aprovação por Frequência: " . $statusFrequencia . "<br>";

?>