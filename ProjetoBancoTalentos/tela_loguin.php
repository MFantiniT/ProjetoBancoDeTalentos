<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login - Banco de Talentos</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="login-wrapper">
            <h1 class="login-title">Banco de Talentos</h1>
            <form id="login-form">
                <div class="input-group">
                    <label for="email" class="input-label">E-mail:</label>
                    <input type="email" id="email" class="input-field" required>
                </div>
                <div class="input-group">
                    <label for="password" class="input-label">Senha:</label>
                    <input type="password" id="password" class="input-field" required>
                </div>
                <button type="submit" class="login-button">Entrar</button>
            </form>
            <div class="forgot-password">
                <a href="#" class="forgot-password-link">Esqueceu sua senha?</a>
            </div>
        </div>
    </div>
</body>
</html>
