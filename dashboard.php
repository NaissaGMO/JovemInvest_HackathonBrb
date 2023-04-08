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
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_dashboard.css">
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
    <h1>
        Funcionalidades
    </h1>
    <p>
    O  usuário entra na aplicação, faz seu  cadastro, e após isso ele tem a possibilidade de utilizar o open finance ao liberar seus dados bancários à jovem invest. 
    O usuário também responderá a um questionário para nos ajudar a entender o seu perfil e, com isso, o BRB poderá utilizar os dados dos clientes para indicar os 
    melhores produtos e serviços do BRB de forma personalizada.

    Além disso, a aplicação conta com uma trilha de aprendizado individual sobre finanças personalizada de acordo com o nível de entendimento de cada perfil e, assim, 
    vai do básico ao avançado de forma lúdica e interativa coletando BRB Coins a cada etapa concluída, ou vídeo assistido, que posteriormente pode ser trocada por serviços, 
    ou produtos ofertados pelo banco, assim como o Curtaí do BRB já faz.

    Ao colocar o conteúdo aprendido no curso em prática, o usuário recebe o dobro de BRB Coins, que são acumulativos.
    Pretendemos criar uma rede social bancária dentro do app, onde amigos podem se conectar e acompanhar a trajetória um do outro na plataforma. Assim, no final de cada mês, 
    os clientes poderão compartilhar
    Assim, no final de cada mês, os clientes poderão compartilhar as suas respectivas com quantidade de pontos, top investimentos, quantidade de aulas assistidas e etc.
    </p>
</div>
</div>
</body>

</html>