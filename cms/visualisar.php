<?php
//Ativa o uso das variaveis de sessão
session_start();

/*conexao com o banco*/
require_once('conexao.php');

/* botao voltar*/
if(isset($_POST["btnvoltar"])){header('location:AdmFaleConosco.php');}


?>
<html>
  <head>
    <title>Visualização</title>
    <link rel="stylesheet" type="text/css" href="css/Frajola.css">
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
  </head>
  <body>
      <header>
          
      </header>
        <form name="Frajolas" method="post" action="visualisar.php">
        <main>
            <div id="areaConteudo">
                <div  class="areafaleconosco">
                     <?php
                            $sql="select * from tblfaleconosco order by id desc";
                            $select = mysql_query($sql);

                            while($rsConteudo=mysql_fetch_array($select))
                            {

                        ?>
                    <input disabled type="text" name="txtNome" placeholder="Nome:" value="Nome:  <?php echo($rsConteudo['nome']); ?>">
                    <input  disabled type="text" name="txtTelefone" placeholder="Telefone:" value="Telefone: <?php echo($rsConteudo['telefone']); ?>">
                    <input disabled type="text" name="txtCelular" placeholder="Celular:" value="Celular: <?php echo($rsConteudo['celular']); ?>">
                    <input  disabled type="text" name="txtEmail" placeholder="Email:" value="Email: <?php echo($rsConteudo['email']); ?>">
                    <input  disabled type="url" name="urlHome_Page" placeholder="Home Page:" value="Home Page: <?php echo($rsConteudo['Home_Page']); ?>">
                    
                    <input  disabled type="radio" name="rdoSexo" value="m" class="radios"<?php echo($rsConteudo['sexo']);?>> Masculino<br>
                    <input  disabled type="radio" name="rdoSexo" value="f"<?php echo($rsConteudo['sexo']); ?>> Feminino<br>
                    
                    <input  disabled type="url" name="urlLink_Facebook" placeholder="Link Facebook:" >
                    <textarea disabled name="Sugestao_Criticas" placeholder="Sugestão/Criticas:" rows="4" class="textarea"></textarea>
                    <textarea  disabled name="Informacoes_Produtos" placeholder="Informações de Produtos: "  rows="4"  class="textarea"></textarea><br>
                    <input  disabled type="text" name="txtProficao" placeholder="Profissão:" >

                    <input type="submit" name="btnvoltar"  value="Voltar" class="button shrink" >
                    
                    <?php 

                        }
                     ?>
                </div>
            </div>     
        </main>
       
    </form>
  </body>
</html>
