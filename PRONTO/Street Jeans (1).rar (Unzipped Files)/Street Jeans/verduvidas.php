


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registros</title>
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
    <div class="registros">
      <?php
      $pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');
      //SELECT

      $sql = $pdo->prepare("SELECT * FROM `pergunta`");
      $sql->execute();

      $info = $sql->fetchALL();

      for ($i=0; $i < count($info); $i++) {
        echo "<hr/>";
        echo 'Número da pergunta : '.$info[$i]['id_pergunta'];
        echo "<br/>";
        echo 'Quem escreveu: '.$info[$i]['nome'];
        echo '<br/>';
        echo 'Email: '.$info[$i]['email'];
        echo "<br/>";
        echo 'ID: '.$info[$i]['id'];
        echo "<br/>";
        echo 'Pergunta : '.$info[$i]['duvida'];
        echo "<br/>";}
echo "<hr/>";
       ?>
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