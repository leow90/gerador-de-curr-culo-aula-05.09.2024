<?php
ob_start();
include '../templates/resume.php';
$conteudo = ob_get_clean();

$nomeArquivo = '../curriculos/' . $_POST['nome'] . '.html';
file_put_contents($nomeArquivo, $conteudo);

echo $conteudo;
echo '<script>window.print();</script>';
?>
