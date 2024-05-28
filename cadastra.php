<?php
if (isset($_POST['submit2'])) {
    if (isset($_POST['loginUser']) && !empty($_POST['loginUser']) && isset($_POST['senhaUser']) && !empty($_POST['senhaUser'])) {
        require '../conexao.php';
        $loginUser = $_POST['loginUser'];
        $senhaUser = $_POST['senhaUser'];
        $sql = "INSERT INTO users(login,senha) VALUES(:login,:senha)";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue("login", $loginUser);
        $resultado->bindValue("senha", $senhaUser);
        $resultado->execute();
        header('Location: ../login.php?success=deu certo');
    }
}
