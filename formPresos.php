<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>

 
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    label {
        font-weight: bold;
        flex: 1 0 100px;
    }
    input[type="text"],
    input[type="number"],
    input[type="date"],
    select {
        flex: 2 0 calc(100% - 120px);
        padding: 8px;
        margin: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    a{
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-left:400px
    }
</style>
</head>
<body>
    <form action="verify/cadastra.Presos.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>

        <label for="altura">Altura (em cm):</label>
        <input type="number" id="altura" name="altura" required>

        <label for="peso">Peso (em kg):</label>
        <input type="number" id="peso" name="peso" required>

        <label for="data_prisao">Data da Prisão:</label>
        <input type="date" id="data_prisao" name="data_prisao" required>

        <label for="data_liberacao">Data de Liberação:</label>
        <input type="date" id="data_liberacao" name="data_liberacao" required>

        <label for="crime">Crime:</label>
        <input type="text" id="crime" name="crime" required>

        <label for="cela">Cela:</label>
        <input type="text" id="cela" name="cela" required>

        <input name="submit" type="submit" value="Enviar">
        <a class="btn btn-danger" href="presos.php">Voltar</a>
    </form>
</body>
</html>
