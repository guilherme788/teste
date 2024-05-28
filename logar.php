<?php
if (isset($_POST['submit1'])) {
    if (isset($_POST['loginUser']) && !empty($_POST['loginUser']) && isset($_POST['senhaUser']) && !empty($_POST['senhaUser'])) {
        session_start();
        require '../conexao.php';
        $loginUser = $_POST['loginUser'];
        $senhaUser = $_POST['senhaUser'];
        $sql = "SELECT * FROM users WHERE login = :login AND senha = :senha";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue("login", $loginUser);
        $resultado->bindValue("senha", $senhaUser);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $dado = $resultado->fetch();

            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['login'];
            header('location: ../index.php');
        } else {
            header('location: ../login.php?erro=ok');
        }
    }
}
