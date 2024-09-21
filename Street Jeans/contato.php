<?php
$pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');
if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $duvida = $_POST['duvida'];

    $sql = $pdo->prepare("INSERT INTO `pergunta` values(null,?,?,?,?)");

    $sql->execute(array($nome, $email, $id, $duvida));

  print"<script>alert('Dúvida enviada com sucesso!!!')</script>";
}

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
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
                <a href="index.html"><button>Início</button></a>
             </li>
             <li>
                <a href="registro.html"><button>Registro</button></a>
            </li>
            <li>
               <a href="senhaadm.php"><button>Administração</button></a>
           </li>
        </ol>
    </div>
    <div class="contat">
        <ol>
          <form class="" action="contato.php" method="post">

            <li><label for="nome">Nome:</label>
             <input type="text" name="nome"></li>
             <li><label for="email">Email:</label>
            <input type="email" name="email"></li>
            <br>
            <li><label for="id">Seu id:</label>
           <input type="id" name="id"></li>
           <br>
          <label for="duvida">Dúvida:</label>
       <textarea name="duvida" id="" cols="80" rows="22"></textarea>
<br><br><br><br><br>
       <input type="submit" name="acao" value="Enviar dúvida " class="prs">
     </form>
       </ol>
       <br>
           <br>
</div>
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
