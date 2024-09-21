<?php
ini_set('display_errors', 0 ); error_reporting(0);
$senha = $_POST['senha'];
if (isset($_POST['acao'])) {
if ($senha == 3452) {
 header('Location: opcadm.php');
}else {
  print"<script>alert('Senha incorreta!')</script>";
}

}







 ?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administração</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="icon" href="img/StreetJeans_Logo.png">
</head>

<body>

    <header class="cabecalho">
        <center>
             <img src="img/StreetJeans_Logo.png" alt="Logo Street Jeans">
        </center>
    </header>
    <div class="opcoes">
            <ol>
                <li>
                <a href="catalogo.html"><button>Catálogo</button></a>
                 </li>
             <li>
                <a href="contato.php"><button>Contato</button></a>
             </li>
             <li>
                <a href="index.html"><button>Início</button></a>
            </li>
        </ol>
    </div><br><br>
    <div class="perguntasa">
        <ol>
          <form class="" action="senhaadm.php" method="post">
            Digite aqui a senha de administrador:
            <li><label for="id"></label><br>
             <input type="password" name="senha" required></li>
             <br>

       </ol>
<br><br>

           <br>
           <input type="submit" name="acao" onclick="funcao()" value="Prosseguir" class="prs">
           </form>
   </div>
   <br>
    <footer class="rodapes">
        <hr color="#3643B5">
        <p>
            Se você quer ser nosso parceiro, para nos representar comercialmente ou para vender nossos produtos,
            entre em contato conosco! Estamos te esperando! Estamos localizados no Loteamento Beckmann, 723;          em Seara - SC; podemos ser contatados também pelos telefones: (49) 3452-0298; (49) 999999990.
            Também pelo email streetjeans@contato.com.
        </p>
    </footer>

</body>
</html>
