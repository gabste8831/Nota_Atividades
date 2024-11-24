<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

function imprimirArvore($pastas, $nivel = 0) {
    foreach ($pastas as $key => $value) {
        echo str_repeat("&nbsp;&nbsp;", $nivel) . "- " . $key . "<br>";
        if (is_array($value)) {
            imprimirArvore($value, $nivel + 1);
        }
    }
}

//chamada de função
imprimirArvore($pastas);

//código feito em sala
?>

