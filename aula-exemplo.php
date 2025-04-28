<?php
echo "<br>";
echo "Recebendo valores da aula um";
session_start();
echo "<br>";
echo $_SESSION['usuario'];
echo "<br>";
echo $_SESSION['nivel'];
# Excluindo uma variável específica de uma sessão
/*unset($_SESSION['usuario']);
session_destroy();*/
?>
<a href="aula-um.php">Voltar para a aula um</a>
<?php
echo "<hr>";
echo "Recebe os dados e guarda em variáveis <br>";
$nome = $_GET['nome'];
$idade = $_GET['idade'];
echo "Seu nome é $nome e sua idade é de $idade anos! <br>";
?>
<a href="formulario.html">Voltar para o formulário</a>