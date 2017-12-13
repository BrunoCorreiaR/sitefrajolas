<?php

//inclusao do arquivo modumo na pagina atual
require_once("cms/conexao.php");

$c = null;

//Ativa o uso das variaveis de sessão
session_start();

if(isset($_GET['menulateral'])){
    $c = $_GET['menulateral'];

    if($c == 'lateral'){
        $_SESSION['idSub'] = $_GET['idsub'];
    }
}



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Frajola’s Pizzaria</title>
    <link rel="stylesheet" type="text/css" href="css/Frajola.css">
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
    <script src="js/jquery.js" type="text/javascript"></script>

  </head>

  <body>
    <div class="modalContainer">
      <div class="modal">

      </div>
    </div>

    <header>
        <div id="logo">

        </div>
        <!--menu -->
         <?PHP require_once('menu.php'); ?>

    </header>


      <div class="container">
			<!-- Top Navigation -->


			<section id="photostack-1" class="photostack photostack-start">
				<div>

					<figure>
						<a href="" class="photostack-img"><img src="img/3.jpg" alt="img03"/></a>
						<figcaption>
							<h2 class="photostack-title">Beautywood</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="" class="photostack-img"><img src="img/4.jpg" alt="img04"/></a>
						<figcaption>
							<h2 class="photostack-title">Heaven of time</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="" class="photostack-img"><img src="img/5.jpg" alt="img05"/></a>
						<figcaption>
							<h2 class="photostack-title">Speed Racer</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="" class="photostack-img"><img src="img/6.jpg" alt="img06"/></a>
						<figcaption>
							<h2 class="photostack-title">Forever this</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/7.jpg" alt="img07"/></a>
						<figcaption>
							<h2 class="photostack-title">Lovely Green</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/8.jpg" alt="img08"/></a>
						<figcaption>
							<h2 class="photostack-title">Wonderful</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/9.jpg" alt="img09"/></a>
						<figcaption>
							<h2 class="photostack-title">Love Addict</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/10.jpg" alt="img10"/></a>
						<figcaption>
							<h2 class="photostack-title">Friendship</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/11.jpg" alt="img11"/></a>
						<figcaption>
							<h2 class="photostack-title">White Nights</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/12.jpg" alt="img12"/></a>
						<figcaption>
							<h2 class="photostack-title">Serendipity</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/13.jpg" alt="img13"/></a>
						<figcaption>
							<h2 class="photostack-title">Pure Soul</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/14.jpg" alt="img14"/></a>
						<figcaption>
							<h2 class="photostack-title">Winds of Peace</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/15.jpg" alt="img15"/></a>
						<figcaption>
							<h2 class="photostack-title">Shades of blue</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="" class="photostack-img"><img src="img/16.jpg" alt="img16"/></a>
						<figcaption>
							<h2 class="photostack-title">Lightness</h2>
						</figcaption>

					</figure>
				</div>

			</section>



  		</div><!-- /container -->
  		<script src="js/classie.js"></script>
  		<script src="js/photostack.js"></script>
  		<script>
  			 [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

  			new Photostack( document.getElementById( 'photostack-1' ), {
  				callback : function( item ) {
  					console.log(item)
  				}
  			} );
  			new Photostack( document.getElementById( 'photostack-2' ), {
  				callback : function( item ) {
  					console.log(item)
  				}
  			} );
  			new Photostack( document.getElementById( 'photostack-3' ), {
  				callback : function( item ) {
  					console.log(item)
  				}
  			} );



  		</script>
    <main>

       <!-- <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#" ></a>
          <a href="#" ></a>
          <a href="#">Pizzas Salgadas
                <div class="categorias_ocultas">  Vegetarianas</div>
                <div class="categorias_ocultas">  Tradicionais</div>
                <div class="categorias_ocultas">  Peixe</div>
                <div class="categorias_ocultas">  A Moda da casa</div>
                <div class="categorias_ocultas">  Carne</div>
          </a>
          <a href="#">Pizzas Doces
                <div class="categorias_ocultas">  Chocolate</div>
                <div class="categorias_ocultas">  Frutas</div>
                <div class="categorias_ocultas">  Gelados</div>

          </a>
          <a href="#">Pizzas Grandes
                <div class="categorias_ocultas">  Grande 12 fatias</div>
                <div class="categorias_ocultas">  Grande 16 fatias</div>
                <div class="categorias_ocultas">  Big 24 Fatias</div>
                <div class="categorias_ocultas">  Big 26 Fatias </div>
                <div class="categorias_ocultas">  Monster 32 Fatias</div>
          </a>
          <a href="#">Pizzas Pequenas
                <div class="categorias_ocultas">  Brotinho Legal</div>
                <div class="categorias_ocultas">  Kids</div>
                <div class="categorias_ocultas">  Broto 6 fatias</div>
                <div class="categorias_ocultas">  Broto 8 fatias </div>


         </a>
        </div>
        -->



        <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#" ></a>
              <a href="#" ></a>
                    <?php
                        $sql = "select * from tbl_categoria";
                        $select = mysql_query($sql);
                        while($rsCat=mysql_fetch_array($select)){
                    ?>
                        <div>
                             <a href="#">
                                <?php echo($rsCat['nomeCategoria']) ?>
                                 <?php
                                    $sqlSub = "select * from tbl_sub_categoria where idCategoria =".$rsCat['id'].";";
                                    $selectsub = mysql_query($sqlSub);
                                    while($rsSub=mysql_fetch_array($selectsub)){
                                ?>

                                    <div class="categorias_ocultas">

                                        <a href="home_frajolas.php?menulateral=lateral&idsub=<?php echo($rsSub['id']); ?>">

                                            <?php echo($rsSub['sub_categoria']) ?>

                                        </a>

                                       <?php //echo($rsSub['sub_categoria']) ?>
                                    </div>

                                 <?php
                                    }
                                 ?>
                            </a>

                        </div>
                    <?php
                        }
                    ?>
        </div>


        <div  id="opcao" class="button shrink">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Opções de pizza
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

         <form name="pesquisa" method="post" action="home_frajolas.php">

                <div  class="areapesquisa">
                    <input type="text" name="txtpesquisa" placeholder="Pesquisar opeções de pizza:" >
                    <input type="submit" name="btnpesquisar"  value="Pesquisar" class="btnPesquisa">
                </div>

          </form>
         <div id="areaConteudo">

             <div class="alinha_area_produto">
                  <?php
                    if(isset($_POST["btnpesquisar"])){
                        $pesquisa=$_POST["txtpesquisa"];

                        $sql="select * from tblprodutos where nome like'%".$pesquisa."%'" ;

                    } else if($c != null){
                        $sql="select * from tblprodutos where sub_categoria=".$_SESSION['idSub'];
                    }else{
                        $sql="select * from tblprodutos order by rand() ";
                        }


                        $select = mysql_query($sql);
                        while($rsConteudo=mysql_fetch_array($select))
                        {
                 ?>
                 <a class="ver" href="#" onclick="Modal(<?php echo($rsConteudo['id']) ?>)">
                    <div class="area_produto">
                        <div class="img_conteudo">

                           <img src="<?php echo("cms/".$rsConteudo['img']) ?>" width="100%" height="100%">
                        </div>
                        <div class="rodape">
                            <div class="nomeProduto">Nome:<?php echo($rsConteudo['nome']); ?></div>
                            <div class="descricao">Descrição:<?php echo($rsConteudo['sabor']);?></div>
                            <div class="preco">Preço:<?php echo($rsConteudo['preco']);?></div>
                            <div class="detalhes">Detalhes:</div>

                         </div>
                    </div>
                  </a>
                <?php
                    }
                ?>


             </div>
             <script type="text/javascript">

                 $(document).ready(function() {
                   $(".ver").click(function() {
                     $(".modalContainer").fadeIn(200);
                     //slideToggle
                     //toggle
                     //FadeIn

                  

                   });
                 });



                 function Modal(idIten){
                     $.ajax({
                         type: "POST",
                         url: "modal.php",
                         data: {id:idIten},
                         success: function(dados){
                             $('.modal').html(dados);
                         }
                     });
                 }
             </script>
        </div>


    </main>
    <footer>

    </footer>
  </body>
</html>
