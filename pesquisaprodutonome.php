<?php
if ($_POST["cxprodutopesquisa"] != "") {

    include_once 'factory/conexao.php';

    $produto = $_POST["cxprodutopesquisa"];

    $consulta = "SELECT * FROM tbproduto 
                 WHERE produto = '$produto'";

    $executar = mysqli_query($conn, $consulta);

    $linha = mysqli_fetch_array($executar);

    if ($linha == true) {

        echo "<script>
                alert('Produto localizado');
              </script>";

    } else {

        echo "<script>
                alert('Produto não localizado');
                window.location.href='cadproduto.php';
              </script>";
    }

} else {

    echo "<script>
            alert('Campo em branco, digite o nome do produto');
            window.location.href='cadproduto.php';
          </script>";
}
?>

<form>

    Produto:<br/>
    <input type="text"
           value="<?php echo $linha['produto']; ?>" /><br/>

    Fabricante:<br/>
    <input type="text"
           value="<?php echo $linha['fabricante']; ?>" /><br/>

    Lote:<br/>
    <input type="text"
           value="<?php echo $linha['lote']; ?>" /><br/>

    Quantidade:<br/>
    <input type="text"
           value="<?php echo $linha['qtde']; ?>" /><br/>

</form>