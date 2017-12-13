<?php

$nome = null;
$telefone = null;
$celular = null;
$email = null;
$Home_Page = null;
$sexo = null;
$Link_Facebook = null;
$Sugestao_Criticas = null;
$Informacoes_Produtos = null;
$Proficao = null;

/*conexao com o banco*/
require_once('cms/conexao.php');

//verf se botao salvar foi acionado
if(isset($_POST["btnSalvar"])){

    $nome=$_POST["txtNome"];
    $telefone=$_POST["txtTelefone"];
    $celular=$_POST["txtCelular"];
    $email=$_POST["txtEmail"];
    $Home_Page=$_POST["urlHome_Page"];
    $sexo=$_POST["rdoSexo"];
    $Link_Facebook=$_POST["urlLink_Facebook"];
    $Sugestao_Criticas=$_POST["Sugestao_Criticas"];
    $Informacoes_Produtos=$_POST["Informacoes_Produtos"];
    $Proficao=$_POST["txtProficao"];

    //montando o script para envair pra o BD
    addslashes( $sql="INSERT INTO tblfaleconosco
        (nome,telefone,celular,email,Home_Page,sexo,Link_Facebook,Sugestao_Criticas,Informacoes_Produtos,Proficao)

          values('".$nome."','".$telefone."','".$celular."','".$email."','".$Home_Page."',
          '".$sexo."','".$Link_Facebook."','".$Sugestao_Criticas."','".$Informacoes_Produtos."','".$Proficao."');");

    //Execulta o script no BD
    mysql_query($sql);


    //srve para nao salvar varias vezas no banco de dados
    header('location:faleconosco.php');

    // echo($sql);

}

?>
<html>
  <head>
    <title>Frajola’s Pizzaria</title>
    <link rel="stylesheet" type="text/css" href="css/Frajola.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Scattered Polaroids Gallery: A flat-style take on a Polaroid gallery" />
    <meta name="keywords" content="scattered polaroids, image gallery, javascript, random rotation, 3d, backface, flat design" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.min.js"></script>
  </head>
  <body>

    <header>

            <div id="logo">
                <img height="100%" width="100%" src="imagens/logo.png" href="100_skate.html"  target="_top">
            </div>
            <!--menu -->
             <?PHP require_once('menu.php'); ?>
            
         </header>




        <main>

          <form name="Frajolas" method="post" action="faleconosco.php">
            <div id="areaConteudo">
                <div  class="areafaleconosco">
                    <input type="text" name="txtNome" placeholder="Nome:" required>
                    <input type="text" name="txtTelefone" placeholder="Telefone:" require>
                    <input type="text" name="txtCelular" placeholder="Celular:" require>
                    <input type="text" name="txtEmail" placeholder="Email:" require>
                    <input type="url" name="urlHome_Page" placeholder="Home Page:">
                     <input type="radio" name="rdoSexo" value="m" class="radios"> Masculino<br>
                    <input type="radio" name="rdoSexo" value="f"> Feminino<br>
                    <input type="url" name="urlLink_Facebook" placeholder="Link Facebook:">
                    <textarea name="Sugestao_Criticas" placeholder="Sugestão/Criticas:" rows="4" class="textarea"></textarea>
                    <textarea name="Informacoes_Produtos" placeholder="Informações de Produtos: "  rows="4"  class="textarea"></textarea><br>
                    <input type="text" name="txtProficao" placeholder="Profissão:" require>

                    <input type="submit" name="btnSalvar"  value="Salvar" class="button shrink">

                </div>
            </div>
          </form>
        </main>
        <footer>

        </footer>

  </body>
</html>
