<?php
$pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');
if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senhapin = $_POST['senhapin'];
    $nascimento = $_POST['nascimento'];
    $sexo = $_POST['sexo'];

    $sql = $pdo->prepare("INSERT INTO `pessoa` values(null,?,?,?,?,?,?,?,?,?,?,?)");

    $sql->execute(array($nome, $cpf, $cep, $bairro, $endereco, $complemento, $email, $telefone, $senhapin, $nascimento, $sexo));


}
$pdo = new PDO('mysql:host=localhost;dbname=registro', 'root', '');
$sql = $pdo->prepare("SELECT * FROM `pessoa`");
$sql->execute();

$info = $sql->fetchALL();

for ($i=0; $i < count($info); $i++) {
  $codigo = $info[$i]['id_pessoa'];
}

if (isset($_POST['acao'])) {
  for ($i=0; $i < count($info); $i++) {
    $codigopessoa = $info[$i]['id_pessoa'];
  }
  print"<script>alert('Seu ID é $codigopessoa e poderá ser usado para apagar seu registro, certifique-se de que irá lembrar deste código')</script>";
}

?>


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
    <div class="perguntas">
        <ol>
          <form class="" action="registro_pessoas.php" method="post">

            <li><label for="nome">Nome:</label>
             <input type="text" name="nome" required></li>
             <br>
             <li><label for="cpf">CPF:</label>
              <input type="text" name="cpf" required></li>
              <br>
             <li><label for="cep">CEP:</label>
             <input type="text" name="cep" required></li>
             <br>
             <li><label for="bairro">Bairro:</label>
           <input type="text" name="bairro" required></li>
           <br>
               <li><label for="endereco">Endereço:</label>
             <input type="text" name="endereco" required></li>
              <li><label for="complemento">complemento:</label>
            <input type="text" name="complemento" required></li>
            <br>
             <li><label for="email">Email:</label>
            <input type="email" name="email" required></li>
            <br>
             <li><label for="telefone">Telefone:</label>
            <input type="text" name="telefone" required></li>
            <br>
             <li><label for="senhapin">Senha PIN:</label>
            <input type="password" name="senhapin" required></li>
       </ol>
       <br>
       <label for="nascimento">Data de nascimento</label>
         <input type="date" name="nascimento" id="nascimento">
         <br>
         <br>
         <p>Seu sexo:</p>
         <select name="sexo" required>
           <option value="M"> Masculino </option>
           <option value="F"> Feminino </option>
           <option value="outro"> Outro </option>
           <option value="pnd"> Prefiro não dizer </option>
         </select>
           <br>
           <br>
           <input type="submit" name="acao" value="Enviar registro">
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
