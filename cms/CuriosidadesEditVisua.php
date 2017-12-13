<?php

session_start();
//inclusao do arquivo modumo na pagina atual 
require_once('conexao.php');

$botao="salvar";
$foto=null;
$titulo="";
$descricao="";


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

        $sql="select * from tbluploadcuriosidade where id=".$id;
        $rsConteudo=mysql_fetch_array(mysql_query($sql));

        $titulo=$rsConteudo['titulo'];
        $descricao=$rsConteudo['descricao'];
        $foto=$rsConteudo['foto'];
        
       
        //Redireciona para a pagina inicial para apagar o GET da url
        //header('location:visualizaConteudo.php');


    }

}




if(isset($_POST["btnsalvar"])){
      
		$titulo=$_POST['txtTitulo'];
		$descricao=$_POST['txtdescricao'];
   
     if($_POST["btnsalvar"]=='salvar'){
       
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


                    $sql="insert into tbluploadcuriosidade (titulo,descricao,foto)
                    values('".$titulo."','".$descricao."','".$upload_file."')";

                    //echo($sql);
                    mysql_query($sql);

                    header('location:CuriosidadesEditVisua.php');



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
                    $sql="update tbluploadcuriosidade set titulo='".$titulo."',descricao='".$descricao."',foto='".$upload_file."' where id=".$_SESSION['id'];
                     
                    mysql_query($sql);
                    header('location:visualizaConteudo.php');


                }else{
                    echo("nao foi");
                }    
            } 
            
        }else{
                
            $sql="update tbluploadcuriosidade set titulo='".$titulo."',descricao='".$descricao."' where id=".$_SESSION['id'];

            mysql_query($sql);
            header('location:visualizaConteudo.php');
             
             
        
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
                    <h2>Curiosidades</h2>
                  </div>
                     
                  <form class="w3-container" action="CuriosidadesEditVisua.php" enctype="multipart/form-data"  name="addUsuario" method="post">
                    <p>
                      <label class="w3-text-brown"><b>Titulo:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtTitulo" type="text" value="<?php echo($titulo)?>">
                    </p>
                    <p>
                      <label class="w3-text-brown"><b>Descrição:</b></label>
                      <input class="w3-input w3-border w3-sand" name="txtdescricao" type="text" value="<?php echo($descricao)?>">
                    </p>
                      <?php echo($foto)?>
                      <img src="<?php echo($rsConteudo['foto'])?>" width="50" height="50"  >
                    <p>
                      <label class="w3-text-brown"><b>Escolha a Foto:</b></label>
                      <input class="w3-input w3-border w3-sand" type="file" name="flefoto">
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
