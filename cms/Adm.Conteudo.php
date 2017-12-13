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
                  <div class="alinha_OpcPag">
                      <a href="admCuriosidade.php">
                          <div class="opcPag">
                              <div class="imgopc">
                                <img src="imgCms/Content2.png" alt="">
                              </div>
                              <div class="txtOpc">Curiosidades:</div>
                          </div>
                      </a>

                      <a href="admSobre_a_Pizzaria.php">
                          <div class="opcPag">
                              <div class="imgopc">
                                <img src="imgCms/Content2.png" alt="">
                              </div>
                              <div class="txtOpc">Sobre a Pizzaria:</div>
                          </div>
                      </a>

                      <a href="admPromocoes.php">
                          <div class="opcPag">
                              <div class="imgopc">
                                <img src="imgCms/Content2.png" alt="">
                              </div>
                              <div class="txtOpc">Promoções:</div>
                          </div>
                      </a>
                  </div>
                   <div class="alinha_OpcPag">
                     <a href="Nossos_Ambientes.php">
                         <div class="opcPag">
                             <div class="imgopc">
                               <img src="imgCms/Content2.png" alt="">
                             </div>
                             <div class="txtOpc">Nossos Ambientes:</div>
                         </div>
                     </a>
                     <a href="PizzaMes.php">
                         <div class="opcPag">
                             <div class="imgopc">
                               <img src="imgCms/Content2.png" alt="">
                             </div>
                             <div class="txtOpc">A Pizza do Mês:</div>
                         </div>
                     </a>

                      <div class="opcPag">
                          <div class="imgopc"></div>
                           <div class="txtOpc"></div>
                      </div>
                  </div>
              </div>

          </div>

          <footer>
              <a>Desenvolvido por: Bruno correia</a>
          </footer>
      </div>
  </body>
</html>
