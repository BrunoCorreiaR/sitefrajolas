<?php

//Ativa o uso das variaveis de sessão
session_start();

/*conexao com o banco*/
require_once('cms/conexao.php');



?>


<html>
  <head>
    <title>Frajola’s Sobre a Pizzaria;</title>
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
                    <div class="alinha_area_produto">
                      <div class="Curiosidade">
                        Sobre a Pizzaria
                      </div>

                        <?php
                            $sql="select * from tblsobre_a_pizzaria order by id desc";
                            $select = mysql_query($sql);

                            while($rsConteudo=mysql_fetch_array($select))
                            {

                        ?>

                        <div class="imgTxtCuriosidade">
                             <div class="imgCuriosidades">
                                 <a> <?php echo($rsConteudo['titulo']); ?></a><br>
                                 <?php echo($rsConteudo['descricao']);?><br>
                             </div>
                             <div class="txtCuriosidade">
                                  <img src="<?php echo("cms/".$rsConteudo['foto']) ?>" alt="" title=""/>
                             </div>


                          </div>



                        <?php 
                            } 
                        ?>

                    </div>
                  </div>
               </div>
          </form>
        </main>
        <footer>

        </footer>

  </body>
</html>
