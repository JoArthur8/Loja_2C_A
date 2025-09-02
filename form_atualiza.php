<?php 
    include 'pedaco.php';
    $id = $_GET['id'];
?> 

    <div class="container">
        <form action="atualizar.php?id=<?php echo $id ?>" method="POST">

            <?php
                $id = $_GET['id'];
                echo "Valor passado: $id";
                require 'conexao.php';

                $sql = "SELECT * FROM produtos WHERE id = $id";
                $stmt = $pdo->query($sql);
                $produto = $stmt->fetch(PDO::FETCH_ASSOC);

                // print_r($produto);

                // while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                //     echo "ID: " . $produto['id'] . "<br>";
                //     echo "Nome: " . $produto['nome'] . "<br>";
                //     echo "Preço: R$" . $produto['preco'] . "<br>";
                //     echo "Estoque: " . $produto['estoque'] . "<br><br>";
                // }
            ?>


            <div class="mb-3"> 
                Nome: <input type="text" class="form-control" name="nome_novo" value="<?php echo $produto['nome'];?>">
            </div>
            <div class="mb-3"> 
                Preço: <input type="text" class="form-control" name="preco_novo" value="<?php echo $produto['preco'];?>">
            </div>
            <div class="mb-3"> 
                Quantidade: <input type="text" class="form-control" name="quantidade_novo" value="<?php echo $produto['quantidade'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>