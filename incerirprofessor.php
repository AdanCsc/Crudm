<?php
if($_POST["prof"] !=""){
    include_once "factory/conexao.php";
    $professor = $_POST["prof"];
    $materia = $_POST["mat"];
    $curso = $_POST["curs"];
    $sql = "insert into tbproduto
    (professor,materia,curso)
    values
    ('$professor','$materia','$curso')";
    $query = mysqli_query($conn,$sql);

    echo "
    
    <script>
    alert('professor cadastrado com sucesso');
    window.location.href = 'cadprofessor.php';
    </script>";
    
 
 
 }else{
     echo "Campo em branco, digite o nome do professor";
 
 }
?>



