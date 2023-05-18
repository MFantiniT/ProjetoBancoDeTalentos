<?php
include_once('conexaoBanco.php');
if(isset($_POST['nome'])){
    //Dados que virão do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $dataNascimento = $_POST['data_nascimento'];
    $qualificacoes = $_POST['qualificacoes'];
    $habilidades = $_POST['habilidades'];
    $experienciaProfissional = $_POST['experiencia_profissional'];
    $resumoProfissional = $_POST['resumo_profissional'];

    //Query de inserção no banco de dados
    $stmt = $conn->prepare("INSERT INTO candidatos(nome, email, telefone, cidade, estado, pais, data_nascimento, qualificacoes, habilidades, experiencia_profissional, resumo_profissional) values(?,?,?,?,?,?,?,?,?,?,?)");
    //$query = "INSERT INTO candidatos(nome, email, telefone, cidade, estado, pais, data_nascimento, qualificacoes, habilidades, experiencia_profissional, resumo_profissional) values ('$nome','$email','$tel','$cidade','$estado','$pais','$dataNascimento','$qualificacoes','$habilidades','$experienciaProfissional','$resumoProfissional')";
    $stmt->bind_param("sssssssssss",$nome,$email,$tel,$cidade,$estado,$pais,$dataNascimento,$qualificacoes,$habilidades,$experienciaProfissional,$resumoProfissional);
    $stmt->execute();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações inseridas-</title>
</head>
<body>
<h2>Informações inseridas:</h2>
    <?php if(isset($_POST['nome'])): ?>
        <ul>
            <li>Nome: <?php echo $nome; ?></li>
            <li>Email: <?php echo $email; ?></li>
            <li>Telefone: <?php echo $tel; ?></li>
            <li>Cidade: <?php echo $cidade; ?></li>
            <li>Estado: <?php echo $estado; ?></li>
            <li>País: <?php echo $pais; ?></li>
            <li>Data de Nascimento: <?php echo $dataNascimento; ?></li>
            <li>Qualificações: <?php echo $qualificacoes; ?></li>
            <li>Habilidades: <?php echo $habilidades; ?></li>
            <li>Experiência Profissional: <?php echo $experienciaProfissional; ?></li>
            <li>Resumo Profissional: <?php echo $resumoProfissional; ?></li>
        </ul>
    <?php endif; ?> 
</body>
</html>