<html>
    <head>
        <title>Kallto AgroSolutions</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        
    </head>
    <header>
        <form action="processar_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="numero">Telefone</label>
            <input type="number" id="telefone" name="telefone" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>

            <label for="problema">Digite sua necessidade:</label>
            <input type="text" id="problema" name="problema" required><br><br>

            <input type="submit" value="Cadastrar">
        </form>
        </header>
    <body>
        <footer>
                <p>Kallto AgroSolutions 2023<br> Todos os direitos reservados.</p>
        </footer>
    </body>
</html>