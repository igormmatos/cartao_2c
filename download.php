<?php
$imagem = $_GET['imagem'];

$tamanho  = filesize($imagem);
$extensao = substr($imagem, -3);

if($extensao == 'jpg'){
    header("Content-Type: application/save");
    header("Content-Length: " . $tamanho);
    header("Content-Disposition: attachment; filename=" . $imagem);
    header("Content-Transfer-Encoding: binary");

    $fp = fopen($imagem, "r");
    fpassthru($fp);
    fclose($fp);
} else {
    echo "Ops! Voce nao pode fazer isso!";
    return false;
}
?>