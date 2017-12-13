<?php

//Ativa o uso das variaveis de sessão
session_start();

//inclusao do arquivo modumo na pagina atual
require_once('conexao.php');

$botao="salvar";
$foto=null;
$titulo="";
$img="";
$preco="";
$Sabor="";


if(isset($_GET['modo']))
{
   

    //Pega o conteudo da variavel modo
    $modo=$_GET['modo'];



   if ($modo=='visualisar'){
       
        $botao="Atualizar";

        //Resgata o codigo passado na URL
        $id=$_GET['id'];

        //Essa variavel Global será utilizada no UPDATE do registro
        $_SESSION['id']=$id;

        $sql="select * from tblprodutos where id=".$id;
        $rsConteudo=mysql_fetch_array(mysql_query($sql));

        $titulo=$rsConteudo['nome'];
        $preco=$rsConteudo['preco'];
        $Sabor=$rsConteudo['sabor'];
       
        $sub_categoria=$rsConteudo['sub_categoria'];
       
       
       

      


        //Redireciona para a pagina inicial para apagar o GET da url
        //header('location:Nossos_Ambientes.php');


    }else if(isset($_GET['modo']))
    {
         //Pega o conteudo da variavel modo
        $modo=$_GET['modo'];

        //Verifica se a variavel modo = excluir
        if($modo=='excluir')
        {
            //Resgata o codigo passado na URL
            $id=$_GET['id'];

            //Deleta no BD o Registro
            $sql = "delete from tblprodutos where id=".$id;
            mysql_query($sql);

            //Redireciona para a pagina inicial para apagar o GET da url
            header('location:Adm_Produtos.php');

         //Verifica se a variavel modo = consulta_editar
        }


    }

}




if(isset($_POST["btnsalvar"])){

		$titulo=$_POST['txtTitulo'];
		$descricao=$_POST['txtSabor'];
        $preco=$_POST['txtpreco'];
        $sub_categoria= $_POST['txtnivel'];
    
        

     if($_POST["btnsalvar"]=='salvar'){

         //caminho da pasta para onde as imgs serão armazenadas
            $upload_dir="img/";

            //armazena o nome e extenção do arquivo que foi selecionado
            $nome_arq=basename($_FILES['flefoto']['name']);

            //verifica o tipo de extençao permitida paara o upload do arquivo
            //o comando strstr() para localizar  a sequncia do arquivo
            if(strstr($nome_arq,'.jpg')|| strstr($nome_arq,'.png')||strstr($nome_arq,'.gif'))
            {

                //guarda mos o caminho eo nome da img que sera inserida no BD
                $upload_file= $upload_dir . $nome_arq;

                if (move_uploaded_file($_FILES['flefoto']['tmp_name'],$upload_file))
                {


                    $sql="insert into tblprodutos (nome,preco,sabor,img,sub_categoria)
                    values('".$titulo."','".$preco."','".$descricao."','".$upload_file."','".$sub_categoria."')";

                    //echo($sql);
                    mysql_query($sql);

                    header('location:Adm_Produtos.php');



                }else{
                    echo("nao foi");
                }

            }else{
                echo('Extenção invalida');
            }


    }else if($_POST["btnsalvar"]=='Atualizar'){

         if(!empty($_FILES['flefoto']['name'])){



             //caminho da pasta para onde as imgs serão armazenadas
            $upload_dir="arquivos/";

            //armazena o nome e extenção do arquivo que foi selecionado
            $nome_arq=basename($_FILES['flefoto']['name']);

            //verifica o tipo de extençao permitida paara o upload do arquivo
            //o comando strstr() para localizar  a sequncia do arquivo
            if(strstr($nome_arq,'.jpg')|| strstr($nome_arq,'.png')||strstr($nome_arq,'.gif'))
            {

                //guarda mos o caminho eo nome da img que sera inserida no BD
                $upload_file= $upload_dir . $nome_arq;

                if (move_uploaded_file($_FILES['flefoto']['tmp_name'],$upload_file))
                {
                    $sql="update tblNossos_Ambientes set titulo='".$titulo."',descricao='".$descricao."',foto='".$upload_file."' where id=".$_SESSION['id'];

                    mysql_query($sql);
                    header('location:Adm_Produtos.php');


                }else{
                    echo("nao foi");
                }
            }

        }else{

            $sql="update tblNossos_Ambientes set titulo='".$titulo."',descricao='".$descricao."' where id=".$_SESSION['id'];

            mysql_query($sql);
            header('location:Adm_Produtos.php');



         }


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
                    <h2>Produtos:</h2>
                  </div>

                  <form class="w3-container" action="Adm_Produtos.php" enctype="multipart/form-data"  name="addsobre" method="post">
                    <p>
                      <label class="w3-text-brown"><b>Nome:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtTitulo" type="text" value="<?php echo($titulo)?>">
                    </p>
                    <p>
                      <label class="w3-text-brown"><b>valor:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtpreco" type="number" value="<?php echo($preco)?>">
                    </p>
                    <p>
                      <label class="w3-text-brown"><b>Descrição:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtSabor" type="text" value="<?php echo($Sabor)?>">
                    </p>
                      <p>
                         <div id="imgAtualiza" > 
                            <img src="<?php echo($rsConteudo['img'])?>" width="50" height="50"  >
                         </div> 
                      </p>
                      
                    <p>
                      <label class="w3-text-brown"><b>Escolha a Foto:</b></label>
                      <input class="w3-input w3-border w3-sand" type="file" name="flefoto">
                    </p>
                    <p>  
                      <label class="w3-text-brown"><b>Escolha uma categoria:</b></label>
                        <select name="txtnivel" class="w3-input w3-border w3-sand">
                            <?php if($modo=='visualisar'){          
                            ?>
                            <option value="<?php  echo($rsNivel['id']) ?>">selecione uma opção </option>
                            <?php
                                }
                            ?>
                            <?php
                                $sql = "select * from tbl_sub_categoria";
                                $select = mysql_query($sql);
                                while($rsNivel=mysql_fetch_array($select)){
                                    
                                ?>  
                                    <option value="<?php  echo($rsNivel['id']) ?>"> 
                                        <?php echo($rsNivel['sub_categoria']) ?>
                                    </option>
                                <?php 
                                }
                                ?>
                        </select>
                    </p>  
                      
                    

                    <p>

                        <input class="w3-btn w3-brown" name="btnsalvar" type="submit" value="<?php echo($botao) ?>" />

                      </p>
                  </form>
                </div>
              </div>
          </div>

          <div id="main">
               <div id="falec_cabes">
                        <a>Tabela registros de produtos</a>
                     </div>
              <div id="janela_falecons">

                  <table width="100%"  border="1" >
                        <tr>
                            <td><b>Nome</b></td>
                            <td><b>Preço</b></td>
                            <td><b>Sabor</b></td>
                            
                            <td><b>Foto</b></td>
                            <td><b>Opções</b></td>
                        </tr>
                        <?php
                            $sql="select * from tblprodutos order by id desc";
                            $select = mysql_query($sql);

                            while($rsConteudo=mysql_fetch_array($select))
                            {



                        ?>

                                <tr>
                                    <td><?php echo($rsConteudo['nome']); ?></td>
                                    <td><?php echo($rsConteudo['preco']);?></td>
                                    <td><?php echo($rsConteudo['sabor']);?></td>

                                    <td><img src="<?php echo($rsConteudo['img']) ?>" width="200" height="100"></td>
                                    <td>
                                       <a class="ver" href="Adm_Produtos.php?modo=visualisar&id=<?php echo($rsConteudo['id']) ?>" >
                                            <img src="imgCms/edit.png" alt="" title="Editar" />
                                        </a>

                                        <a href="Adm_Produtos.php?modo=excluir&id=<?php echo($rsConteudo['id']) ?>">
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
