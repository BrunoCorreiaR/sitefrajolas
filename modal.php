<?php
//inclusao do arquivo modumo na pagina atual
require_once("cms/conexao.php");

$id = $_POST['id'];

$sql = "select * from tbl_produtos where id = ".$id;
$select = mysql_query($sql);
$rsProduto = mysql_fetch_array($select);
?>

<html>
	<head>
		<title>Modal </title>
       <link rel="stylesheet" type="text/css" href="css/Frajolas.css">
       <script>
            $(document).ready(function(){
                $("#form").submit(function(event){
                    //Cancela a ação do submit pelo navegador
                    event.preventDefault();

                    var modo = 'insert';

                    $.ajax({
                        type: "POST",
                        url: "modal.php?modo="+modo,
                        //Cria um objeto do tipo formulario, e herda todos os elementos atuais d form no html
                        data:(id),
                        //Caso tenhamos ym objeto de arquivo (imagem) precisamos configurar os atributos abaixo
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        success: function(dados){
                            $('#modal').html(dados);
                            //alert('dfdfgdfg');
                        }
                    });
                });
            });

        </script>
	</head>

<body>
    <div id="corpo_modal">
        <div id="close">
            <a href="home_frajolas.php" class="fechar">Fechar(x)</a>
        </div>
        <div id="mod1">
            <div class="mod">
                <img src="<?php echo("cms/".$rsProduto['img'])?>" width="200" height="200">
            </div>
        </div>

            <div class="content">Nome:</div>
            <div><?php echo($rsProduto['nome'])?></div>
            <div class="content">Preço:</div>
            <div><?php echo($rsProduto['preco'])?></div>
            <div class="content">Descrição:</div>
            <div><?php echo($rsProduto['sabor'])?></div>
            <div class="content">Ingrediente:</div>
            <div><?php echo($rsProduto['ingrediente'])?></div>

    </div>
</body>
</html>
