<?php
include_once("conexaoBanco.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro - Banco de Talentos</title>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <form action="cadastrarCandidato.php" method="post" id="registration-form">
                <h1>Cadastre seu curriculo:</h1>
                <div class="input-group">
                    <input type="text" name="nome" id="nome" class="input-field" placeholder="Preencha seu nome" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" class="input-field" placeholder="Preencha seu e-mail" required>
                </div>
                <div class="input-group">
                    <input type="text" name="telefone" id="telefone" class="input-field" placeholder="Preencha seu telefone" required>
                </div>
                <div class="input-group">
                    <input type="text" name="cidade" id="cidade" class="input-field" placeholder="Preencha sua cidade" required>
                </div>
                <div class="input-group">
                    <input type="text" name="estado" id="estado" class="input-field" placeholder="Preencha seu estado" required>
                </div>
                <div class="input-group">
                    <input type="text" name="pais" id="pais" class="input-field" placeholder="Preencha seu país" required>
                </div>
                <div class="input-group">
                    <input type="text" name="data_nascimento" id="data_nascimento" class="input-field" placeholder="Preencha sua data de nascimento (aaaa-mm-dd)" required>
                </div>
                <div class="input-group">
                    <input type="text" name="qualificacoes" id="qualificacoes" class="input-field" placeholder="Preencha suas qualificações" required>
                </div>
                <div class="input-group">
                    <input type="text" name="habilidades" id="habilidades" class="input-field" placeholder="Preencha suas habilidades" required>
                </div>
                <div class="input-group">
                    <input type="text" name="experiencia_profissional" id="experiencia_profissional" class="input-field" placeholder="Preencha suas experiências profissionais" required>
                </div>
                <div class="input-group">
                    <input type="text" name="resumo_profissional" id="resumo_profissional" class="input-field" placeholder="Preencha seu resumo profissional" required>
                </div>
                <div class="input-group">
                    <input type="submit" value="Enviar" class="submit-button">
                </div>
            </form>
        </div>
    </div>
</body>
</html>