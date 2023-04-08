<?php
include_once('config.php');
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: index.php');
}
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
$sql_id = mysqli_query($conexao, "select id_usuario from usuarios where email = '$email' and senha = '$senha'");
$fk = mysqli_fetch_assoc($sql_id);
?>
     
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tela_perfis.css">
  </head>
<body>
<header>
        <div class="header">
            <div class="logo">
                <div class="logoimg">
                    <img src="img/logo.jpg">
                </div>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li>
                            <a href="endividados.php" class="end">Tema 1: Endividados</a>
                        </li>
                        <li>
                            <a href="moderado.php" class="poup">Tema 2: Poupadores</a>
                        </li>
                        <li>
                            <a href="investidor.php" class="inv">Tema 3: Investidores</a>
                        </li>
                        <li>
                            <a href="sair.php" class="inicio">Sair</a> 
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="corpo">
    <div class="titulo">
<h1>Tema 1: Endividados</h1>
</div>

<div class="mod1">
<h2>Módulo 1: Como me livrar das dividas</h2>
<div class="container">
<div class="img_content"> 
    <img src="https://picsum.photos/340/200">
    <p>A importancia de poupar</p>
</div>
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Consolide suas dividas</p>
</div>
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Negocie com seus credores</p>
</div>
</div>
</div>

<div class="mod2">
<h2>Módulo 2: Disciplina financeira</h2>
<div class="container">
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Balanço financeiro</p>
</div>
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Nunca gaste mais do que ganha</p>
</div>
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Como controlar minhas despesas</p>
</div>
</div>
</div>

<div class="mod3">
<h3>Módulo 3: Como ganhar mais dinheiro</h2>
<div class="container">
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Renda extra</p>
</div>
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Negocio paralelo</p>
</div>
<div class="img_content"> 
<img src="https://picsum.photos/340/200">
    <p>Renda passiva</p>
</div>
</div>
</div>
</body>
</html>