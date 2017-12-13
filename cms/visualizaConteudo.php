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
        $sql = "delete from tbluploadcuriosidade where id=".$id;
        mysql_query($sql);

        //Redireciona para a pagina inicial para apagar o GET da url
        header('location:visualizaConteudo.php');

     //Verifica se a variavel modo = consulta_editar
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
               <div id="falec_cabes">
                        <a>Tabela registros de Conteudo</a>
                     </div>
              <div id="janela_falecons">
                 
                  <table width="100%"  border="1" >
                        <tr>
                            <td><b>Nome</b></td>
                            <td><b>Descriçao</b></td>
                            <td><b>Foto</b></td>
                            <td><b>Opções</b></td>
                        </tr>
                        <?php
                            $sql="select * from tbluploadcuriosidade order by id desc";
                            $select = mysql_query($sql);

                            while($rsConteudo=mysql_fetch_array($select))
                            {



                        ?>

                                <tr>
                                    <td><?php echo($rsConteudo['titulo']); ?></td>
                                    <td><?php echo($rsConteudo['descricao']);?></td>

                                    <td><img src="<?php echo($rsConteudo['foto']) ?>" width="100" height="100"></td>
                                    <td>
                                        <a class="ver" href="CuriosidadesEditVisua.php?modo=visualisar&id=<?php echo($rsConteudo['id']) ?>" >
                                            <img src="imgCms/edit.png" alt="" title="Editar" />
                                        </a>

                                        <a href="visualizaConteudo.php?modo=excluir&id=<?php echo($rsConteudo['id']) ?>">
                                            <img src="imgCms/delet.png" alt="" title="excluir"/>
                                        </a>
                                        
                                      
                                    </td>
                                </tr>	
                            <?php 

                             }
                            ?>
                      
		          </table>
              </div>
          </div>

          <footer>
              <a>Desenvolvido por: Bruno correia</a>
          </footer>
      </div>
  </body>
</html>
