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
            <div id="segura_alinha_OpcPag">
                <div class="alinha_OpcPag">
                    <a href="CuriosidadesEditVisua.php">
                      <div class="opcPag">
                        <div class="imgopc">
                          <img src="imgCms/curiosidadeAdd.png" alt="">
                        </div>
                        <div class="txtOpc">add curiosidades:</div>
                      </div>
                    </a>

                    <a href="visualizaConteudo.php">  
                      <div class="opcPag">
                          <div class="imgopc">
                            <img src="imgCms/curiosidade.png" alt="">
                          </div>
                           <div class="txtOpc">visu curiosidades:</div>
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
