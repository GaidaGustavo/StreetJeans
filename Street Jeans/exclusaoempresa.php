<?php

    if (isset($_POST['acao'])) {
$pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');
$sql1 = $pdo->prepare("SELECT * FROM `empresa`");
$sql1->execute();

$info1 = $sql1->fetchALL();

          $id = $_POST['id'];
        $sql = $pdo->prepare("DELETE FROM `empresa` WHERE id_empresa=?");
        $sql->execute(array($id));
          print"<script>alert('Registro do ID: $id foi excluído')</script>";


}



 ?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>apagador</title>
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
    </div>
    <div class="perguntasa">
        <ol>
          <form class="" action="exclusaoempresa.php" method="post">
<br>
            <li><label for="id">Digite aqui o ID que você deseja exlcuir:</label class="t">
              <br>
             <input type="text" name="id" required></li>
             <br>
           <br>
           <br>
           <input type="submit" name="acao" onclick="funcao1()" value="Enviar registro" class="prs">
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
