<?php
require_once 'ConexaoDB.php'; 

$user = $_POST['txtNome'];
$senha = $_POST['txtSenha']; 

$sql = "SELECT * FROM usuario WHERE nome = '".$user."';"; 
$resultado = $conexao->query($sql);  // perigo de sql injection
$linha = mysqli_fetch_array($resultado);
if($linha != null){ 
    if($linha['senha'] == $senha) { 
        header('Location: '.'acesso.php');
    } 
    else{
        header('Location: '.'index.php');
    }
}
?>