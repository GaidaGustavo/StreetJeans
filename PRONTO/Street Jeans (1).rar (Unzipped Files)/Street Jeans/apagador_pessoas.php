<?php

    if (isset($_POST['acao'])) {
$senhainserida = $_POST['senhainserida'];
$pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');
$sql1 = $pdo->prepare("SELECT * FROM `pessoa`");
$sql1->execute();

$info1 = $sql1->fetchALL();

for ($i=0; $i < count($info1); $i++) {
  $senhapin = $info1[$i]['senhapin'];
}
  if ($senhapin == $senhainserida) {
          $id = $_POST['id'];
        $sql = $pdo->prepare("DELETE FROM `pessoa` WHERE id_pessoa=?");
        $sql->execute(array($id));
          print"<script>alert('Registro do ID: $id foi excluído')</script>";

    }else {
      print"<script>alert('Senha ou ID errado')</script>";
    }

}

 ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apagador</title>
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
            <li>
               <a href="senhaadm.php"><button>Administração</button></a>
           </li>
        </ol>
    </div>
    <div class="perguntas">
        <ol>
          <form class="" action="apagador_pessoas.php" method="post">

            <li><label for="id">Digite aqui o ID que você deseja exlcuir:</label>
             <input type="text" name="id" required></li>
             <br>
             <li><label for="senhainserida">Digite aqui a senha deste ID:</label>
             <input type="password" name="senhainserida" required></li>
             <br>
       </ol>


           <br>
           <input type="submit" name="acao" onclick="funcao1()" value="Enviar registro">
           </form>
   </div>
   <br>
    <footer class="rodape">
        <hr color="#3643B5">
        <p>
            Se você quer ser nosso parceiro, para nos representar comercialmente ou para vender nossos produtos,
            entre em contato conosco! Estamos te esperando! Estamos localizados no Loteamento Beckmann, 723;          em Seara - SC; podemos ser contatados também pelos telefones: (49) 3452-0298; (49) 999999990.
            Também pelo email streetjeans@contato.com.
        </p>
    </footer>

</body>
</html>
