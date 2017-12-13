
<?php
//Ativa o uso das variaveis de sessão
session_start();

//inclusao do arquivo modumo na pagina atual
require_once('conexao.php');

?>

<nav id="menu">
    <div id="list_menu">
        <div class="iten_menu" >
            <a href="Adm.Conteudo.php">
                <div class="imgMenu">
                    <img src="imgCms/icons8-Content.png" alt="" title="Adm. Conteudo"/>
                </div>
                 Adm. Conteudo
            </a>
        </div>
        <div class="iten_menu" >
            <a href="AdmFaleConosco.php">
                <div class="imgMenu">
                    <img src="imgCms/icons8-Telephone.png" alt="" title="Adm. Fale conosco"/>
                </div>
                Adm. Fale conosco
            </a>
        </div>
        <div class="iten_menu">
            <a href="Adm_Produtos.php">
                <div class="imgMenu">
                    <img src="imgCms/icons8-Open%20Box.png" alt="" title="Adm. Produtos"/>
                </div>
                Adm. Produtos
            </a>
        </div>
        <div class="iten_menu">
            <a href="Adm.Usuario.php">
                <div class="imgMenu">
                    <img src="imgCms/icons8-User%20Menu%20Female-100.png" alt="" title="Adm. Usuario"/>
                </div>
                Adm. Usuario
            </a>
        </div>
        <div id="areaBemLogout">

            <div id="sejaBemvindo">Bem vindo(a)<span><?php  echo($_SESSION['nome']); ?></span></div>
           
            <a href="../home_frajolas.php">
              <div id="logout" >Logout</div>
            </a>
        </div>
    </div>
</nav>
