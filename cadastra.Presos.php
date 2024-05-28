<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['nome']) && !empty($_POST['nome']) &&
         isset($_POST['idade']) && !empty($_POST['idade']) &&
         isset($_POST['sexo']) && !empty($_POST['sexo']) &&
         isset($_POST['altura']) && !empty($_POST['altura']) &&
         isset($_POST['data_prisao']) && !empty($_POST['data_prisao']) &&
         isset($_POST['data_liberacao']) && !empty($_POST['data_liberacao']) &&
         isset($_POST['crime']) && !empty($_POST['crime']) &&
         isset($_POST['cela']) && !empty($_POST['cela'])){

            require '../conexao.php';
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $sexo = $_POST['sexo']; // Corrigido para 'sexo'
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];          
            $data_prisao = $_POST['data_prisao'];
            $data_liberacao = $_POST['data_liberacao'];
            $crime = $_POST['crime'];
            $cela = $_POST['cela'];
            $sql = "INSERT INTO presos(nome, idade, sexo, altura, peso, data_prisao, data_liberacao, crime, cela) VALUES (:nome, :idade, :sexo, :altura,:peso, :data_prisao, :data_liberacao, :crime, :cela)";
            $resultado = $conn->prepare($sql);
            $resultado->bindValue(":nome", $nome);
            $resultado->bindValue(":idade", $idade);
            $resultado->bindValue(":sexo", $sexo);
            $resultado->bindValue(":altura", $altura);
            $resultado->bindValue(":peso", $peso);
            $resultado->bindValue(":data_prisao", $data_prisao);
            $resultado->bindValue(":data_liberacao", $data_liberacao);
            $resultado->bindValue(":crime", $crime);
            $resultado->bindValue(":cela", $cela);
            $resultado->execute();

            
            header("Location: ../presos.php?nome_preso=" . urlencode($nome) . "&sucesso=ok");
            exit();
         } 
    }
    
?>
