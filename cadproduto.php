<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatro de produto</title>
</head>
<body>

<form action = "pesquisaprodutonome.php" method="POST">

    DIGITE O NOME DO PRODUTO:<br/>
    <input type = "text" name="cxprodutopesquisa"/>
    <input type = "submit" value = "Pesquisar"/>
    
</form>    

    <form action="inserirproduto.php" method="POST">
        Produto:<br/>
        <input type="text" name="cxprod"/><br/>
        Quantidade:<br/>
        <input type="number" name="cxqtde"/><br/>
        Fabricante:<br/>
        <input type="text" name="cxfabri"/><br/>
        Lote:<br/>
        <input type="number" name="cxlote"/><br/>
        <input type="submit" value="Gravar"/>

    </form>    
</body>
</html>