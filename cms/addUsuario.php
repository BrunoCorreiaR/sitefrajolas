<?php

                                        /*criar a tabela usuario no baco de dados*/
//Ativa o uso das variaveis de sessão
session_start();

/*conexao com o banco*/
require_once('conexao.php');


$botao="salvar";
$nome="";
$telefone="";
$login ="";
$senha ="";


if(isset($_GET['modo']))
{
    $botao="Atualizar";

    //Pega o conteudo da variavel modo
    $modo=$_GET['modo'];



   if ($modo=='visualisar'){

        //Resgata o codigo passado na URL
        $id=$_GET['id'];

        //Essa variavel Global será utilizada no UPDATE do registro
        $_SESSION['id']=$id;

        $sql="select * from tblusuario where id=".$id;
        $rsConteudo=mysql_fetch_array(mysql_query($sql));

       $nome=$rsConteudo["nome"];
       $telefone=$rsConteudo["telefone"];
       $login = $rsConteudo['loguin'];
       $senha = $rsConteudo['Senha'];



        //Redireciona para a pagina inicial para apagar o GET da url
        //header('location:visualizaSobre.php');


    }

}


if(isset($_POST["btnsalvar"])){
  $nome=$_POST["txtNome"];
  $telefone=$_POST["txtTelefone"];
  $login = $_POST['txtloguin'];
  $senha = $_POST['txtSenha'];
    
    if($_POST["btnsalvar"] == "Salvar"){
        //montando o script para envair pra o BD
          addslashes( $sql="INSERT INTO tblUsuario
              (nome,telefone,loguin,Senha)

                values('".$nome."','".$telefone."','".$login."','".$senha."');");

          //Execulta o script no BD
          mysql_query($sql);


          //srve para nao salvar varias vezas no banco de dados
          header('location:addUsuario.php');
        
    }else if($_POST["btnsalvar"]=='Atualizar'){
        $sql="update tblusuario set nome='".$nome."',telefone='".$telefone."',loguin='".$login."',
            Senha='".$senha."' where id=".$_SESSION['id'];

            mysql_query($sql);
            sheader('location:addUsuario.php');
     
    }
}
    





?>
<html>
  <head>
    <title>CMS-Frajola’s Pizzaria </title>
    <link rel="stylesheet" type="text/css" href="css/cms.css">
    <meta charset="UTF-8" />
  </head>
  <body>
      <div id="conte">
          <header>
              <div id="titulo"> <a>CMS</a> - Sistema de gerenciamento de site</div>
              <div id="logo">
              </div>
          </header>

          <!-- menu-->
          <?PHP require_once('menu.php'); ?>

          <div id="main">
            <!-- essa div para selecionar a pagina de mudança do conteudo-->
              <div id="segura_alinha_OpcPag">
                <div class="w3-card-4">
                  <div class="w3-container w3-brown">
                    <h2>Cadastro de Usuarios</h2>
                  </div>
                     
                  <form class="w3-container" action="addUsuario.php"  name="addUsuario" method="post">
                    <p>
                      <label class="w3-text-brown"><b>Nome:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtNome" type="text" value="<?php echo($nome)?>">
                    </p>
                    <p>
                      <label class="w3-text-brown"><b>Telefone/celular:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtTelefone" type="text" value="<?php echo($telefone)?>">
                    </p>
                    <p>
                      <label class="w3-text-brown"><b>loguin:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtloguin" type="text" value="<?php echo($login)?>">
                    </p>
                    <p>
                      <label class="w3-text-brown"><b>Senha:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtSenha" type="password" value="<?php echo($senha)?>">
                    </p>
                    <p>
                       <input class="w3-btn w3-brown" name="btnsalvar" type="submit" value="<?php echo($botao) ?>" />
                    </p>
                  </form>
                </div>
              </div>
          </div>

          <footer>
              <a>Desenvolvido por: Bruno correia</a>
          </footer>
      </div>
  </body>
</html>
