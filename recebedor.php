<?php

if (!empty($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    print_r($arquivo);
} elseif (!empty($_FILES['arquivos'])) {
    echo "<pre> " . print_r($_FILES['arquivos']) . " </pre>";
    for ($q = 0; $q < count($_FILES['arquivos']['tmp_name']); $q++) {
        $extensao = pathinfo($_FILES['arquivos']['name'][$q]);
        $extensao = $extensao['extension'];
        $nomeArq = md5(time() . $_FILES['arquivos']['name'][$q]) . "." . $extensao;
        if (move_uploaded_file($_FILES['arquivos']['tmp_name'][$q], "arquivos/$nomeArq")) {
            echo "<p>$nomeArq Salvo Com Sucesso!</p>";
        }
    }
    die();
} else {
    header("Location: index.php");
}
$extensao = pathinfo($arquivo['name']);
$extensao = $extensao['extension'];
$nomeArq = md5(time() . $arquivo['name']) . "." . $extensao;
if (move_uploaded_file($arquivo['tmp_name'], "arquivos/$nomeArq")) {
    echo "<p>Salvo Com Sucesso!</p>";
}
