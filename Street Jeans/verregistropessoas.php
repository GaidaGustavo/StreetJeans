

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
      $pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');//variavel pdo recebe
      //SELECT

      $sql = $pdo->prepare("SELECT * FROM `pessoa`");//retorna oque for colocado aqui
      $sql->execute();//executa o valor de cima

      $info = $sql->fetchALL();//armazena tudo oque vai ter dentro do sql

      for ($i=0; $i < count($info); $i++) {
      echo "<hr/>";  //count é o tamanho total da info
        echo 'Id : '.$info[$i]['id_pessoa']. ' - ';//ponto é para concatenar(juntar)
        echo "<br/>";
        echo 'Nome: '.$info[$i]['nome'];
        echo '<br/>';
        echo 'Email: '.$info[$i]['email'];
        echo "<br/>";
        echo 'CEP: '.$info[$i]['cep'];
        echo "<br/>";
        echo 'CPF : '.$info[$i]['cpf'];
        echo "<br/>";
        echo 'Endereço : '.$info[$i]['endereço'];
        echo "<br/>";
        echo 'Complemento : '.$info[$i]['complemento'];
        echo "<br/>";
        echo 'Sexo : '.$info[$i]['sexo'];
        echo "<br/>";
        echo 'telefone : '.$info[$i]['telefone'];
        echo "<br/>";
        echo 'Nascimento : '.$info[$i]['nascimento'];
        echo "<br/>";
        echo 'Senha PIN : '.$info[$i]['senhapin'];
      }

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
