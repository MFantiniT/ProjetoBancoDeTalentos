<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleCandidatos.css">
        <title>Candidatos</title>
    </head>
    <body>       
        <form action="candidatos.php" method="post" class="search-form">
            <div class="input-group">
                <input type="text" name="pesquisa" id="pesquisa" class="input-field" value="<?=$_POST['pesquisa']?>">
                <input type="submit" value="Pesquisar" class="login-button">
            </div>
        </form>

        <div class="table-wrapper">
            <?php
                include_once('conexaoBanco.php');

                if (isset($_POST['pesquisa'])) {
                    $pesquisa = $_POST['pesquisa'];
                    pesquisa($conn, $pesquisa);
                } else {
                    exibeCandidatos($conn);
                }
            ?>
        </div>
    </body>
</html>
<?php

function pesquisa($conn, $pesquisa){
    // QUERY DE PESQUISA NO BANCO
    $stmt = $conn->prepare("SELECT * FROM candidatos WHERE nome LIKE ? OR qualificacoes LIKE ? OR experiencia_profissional LIKE ?");
    $like = '%' . $pesquisa . '%';
    $stmt->bind_param('sss', $like, $like, $like);
    $stmt->execute();
    $result = $stmt->get_result();

    // Criação da tabela HTML
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Qualificações</th>";
    echo "<th>Experiência Profissional</th>";
    echo "</tr>";

    while ($linha = $result->fetch_assoc()) {
        // Exibir registros na tabela
        echo "<tr>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['qualificacoes'] . "</td>";
        echo "<td>" . $linha['experiencia_profissional'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    $conn->close();
}
function exibeCandidatos($conn){
    $stmt = $conn->prepare("SELECT * FROM candidatos");
    $stmt->execute();
    $result = $stmt->get_result();

        // Criação da tabela HTML
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Qualificações</th>";
        echo "<th>Experiência Profissional</th>";
        echo "</tr>";

    while ($linha = $result->fetch_assoc()) {
        // Exibir ou manipular os registros, por exemplo:
        echo "<tr>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['qualificacoes'] . "</td>";
        echo "<td>" . $linha['experiencia_profissional'] . "</td>";
        echo "</tr>";
    }
}