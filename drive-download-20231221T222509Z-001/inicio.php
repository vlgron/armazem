<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalho de Logística</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f0f0; /* Cor de fundo cinza claro */
        }

        .container {
            background-color: #fff; /* Fundo branco para o conteúdo */
            border-radius: 8px; /* Borda arredondada para o conteúdo */
            padding: 20px; /* Espaçamento interno */
            margin-top: 50px; /* Margem superior para afastar do topo */
        }
    </style>
</head>
<body class="container mt-5">

    <h1 class="text-center">Trabalho de Logística</h1>

    <div class="text-center mt-4">
        <button class="btn btn-primary" onclick="redirecionarParaArmazens()">Cadastro de Armazéns</button>
        <button class="btn btn-success" onclick="redirecionarParaProdutos()">Cadastro de Produtos</button>
        <button class="btn btn-danger" onclick="redirecionarParaExcluir()">Excluir</button>
    </div>

    <script>
        function redirecionarParaArmazens() {
            window.location.href = 'index.php';
        }

        function redirecionarParaProdutos() {
            window.location.href = 'index.produto.php';
        }

        function redirecionarParaExcluir() {
            window.location.href = 'excluir.armazem.php';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>