<?php
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$experiencias = $_POST['empresa'];

// Upload da Foto de Perfil
if(isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] === 0) {
    $foto_perfil = 'uploads/' . basename($_FILES['foto_perfil']['name']);
    move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $foto_perfil);
} else {
    $foto_perfil = '';
}

$html = "<!DOCTYPE html>
<html>
<head>
    <title>Currículo de $nome</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 20px; 
            background-color: #ffffff;
            border: 2px solid #000000;
            padding: 20px;
        }
        h1 { text-align: center; }
        h2 { margin-top: 30px; border-bottom: 1px solid #000000; }
        .experiencia { margin-bottom: 20px; border-bottom: 1px solid #000000; padding-bottom: 10px; }
        img { width: 150px; height: 150px; border-radius: 50%; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Currículo de $nome</h1>";

if ($foto_perfil) {
    $html .= "<div style='text-align: center;'><img src='$foto_perfil' alt='Foto de $nome'></div>";
}

$html .= "
    <p><strong>Data de Nascimento:</strong> $data_nascimento</p>
    <p><strong>Idade:</strong> $idade anos</p>
    <p><strong>E-mail:</strong> $email</p>
    <h2>Experiências Profissionais</h2>";

foreach ($experiencias as $index => $empresa) {
    $cargo = $_POST['cargo'][$index];
    $descricao = $_POST['descricao'][$index];
    $html .= "
    <div class='experiencia'>
        <p><strong>Empresa:</strong> $empresa</p>
        <p><strong>Cargo:</strong> $cargo</p>
        <p><strong>Descrição:</strong> $descricao</p>
    </div>";
}

$html .= "
</body>
</html>";

echo $html;
?>
