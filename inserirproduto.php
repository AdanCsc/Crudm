<?php
    if($_POST["cxprod"] != ""){
      include_once "factory/conexao.php";
      $prod =  $_POST["cxprod"];
      $fabri = $_POST["cxfabri"];
      $qtde =  $_POST["cxqtde"];
      $lote =  $_POST["cxlote"];
      $sql = "insert into tbproduto
      (produto,fabricante,lote,qtde)
      values
      ('$prod','$fabri','$lote','$qtde')";
      $query = mysqli_query($conn,$sql);
      echo "
        <script>
                alert('Produto cadastrado com sucesso');
                window.location.href = 'cadproduto.php';
        </script>
      ";
    }else{
        echo "Campo em branco, Digite o nome do produto";
    }

?>