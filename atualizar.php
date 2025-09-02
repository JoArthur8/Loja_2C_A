<?php
    require 'conexao.php';
    
    $id = $_GET['id'];
    $novoNome = $_POST['nome_novo'];
    $novoPreco = $_POST['preco_novo'];
    $novoQuantidade = $_POST['quantidade_novo'];


    $sql = "UPDATE produtos SET nome=:nome_novo, preco = :preco_novo, quantidade = :quantidade_novo WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome_novo', $novoNome);
    $stmt->bindParam(':preco_novo', $novoPreco);
    $stmt->bindParam(':quantidade_novo', $novoQuantidade);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
?>