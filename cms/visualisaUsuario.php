<?php

//Ativa o uso das variaveis de sessão
session_start();

/*conexao com o banco*/
require_once('conexao.php');

if(isset($_GET['modo']))
{
     //Pega o conteudo da variavel modo
    $modo=$_GET['modo'];

    //Verifica se a variavel modo = excluir
    if($modo=='excluir')
    {
        //Resgata o codigo passado na URL
        $id=$_GET['id'];

        //Deleta no BD o Registro
        $sql = "delete from tblUsuario where id=".$id;
        mysql_query($sql);

        //Redireciona para a pagina inicial para apagar o GET da url
        header('location:visualisaUsuario.php');

     //Verifica se a variavel modo = consulta_editar
    }else if ($modo=='visualisar'){

        //Resgata o codigo passado na URL
        $id=$_GET['id'];

        $sql="select * from tblUsuario where id=".$id;
        $rsConsulta=mysql_fetch_array(mysql_query($sql));

        $_SESSION['nome']=$rsConsulta['nome'];
        $_SESSION['telefone']=$rsConsulta['telefone'];
        $_SESSION['loguin']=$rsConsulta['loguin'];
        $_SESSION['Senha']=$rsConsulta['Senha'];


        //Redireciona para a pagina inicial para apagar o GET da url
        header('location:visualisar.php');


    }

}

?>
<html>
  <head>
    <title>CMS-Frajola’s visualisa users </title>
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
              <div id="janela_falecons">
                <div id="segura_camp_faleconsco">
                     <div id="falec_cabes">
                        <a>Tabela registros de usuarios</a>
                     </div>
                     <div class="camp_faleconsco">Nome</div>
                     <div class="camp_faleconsco">Telefone</div>
                     <div class="camp_faleconsco">loguin</div>
                     <div class="camp_faleconsco">Senha</div>
                    <div class="camp_faleconsco">Opções</div>
                    <?php
                          $sql="select * from tblUsuario order by id desc";
                          $select=mysql_query($sql);

                          //transforma os dados do bancom em uma reilist
                          #mysql_fetch_assoc

                          while ($rsContatos = mysql_fetch_array($select))
                          {
                            # code...

                    ?>
                     <div class="camp_faleconsco"><?php echo ($rsContatos['nome']); ?></div>
                     <div class="camp_faleconsco"><?php echo ($rsContatos['telefone']); ?></div>
                     <div class="camp_faleconsco"><?php echo ($rsContatos['loguin']); ?></div>
                     <div class="camp_faleconsco"><?php echo ($rsContatos['Senha']); ?></div>
                     <div class="camp_faleconsco">

                        <a class="ver" href="addusuario.php?modo=visualisar&id=<?php echo($rsContatos['id']) ?>" >
                            <img src="imgCms/visualization.png" alt="" title="Visualisar" />
                        </a>

                        <a href="visualisaUsuario.php?modo=excluir&id=<?php echo($rsContatos['id']) ?>">
                            <img src="imgCms/delet.png" alt="" title="excluir"/>
                        </a>

                     </div>
                     <?php
                        }
                    ?>
                </div>

            </div>
          </div>

          <footer>
              <a>Desenvolvido por: Bruno correia</a>
          </footer>
      </div>
  </body>
</html>
