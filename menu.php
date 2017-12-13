<nav id="menu">
     <div id="list_menu">
        <a href="home_frajolas.php">
          <div class="iten_menu" >
            Home
          </div>
        </a>

        <a href="faleconosco.php">
          <div class="iten_menu">
             Fale conosco
           </div>
        </a>


          <a href="curiosidades.php">
            <div class="iten_menu">
              curiosidades
            </div>
          </a>

         <a href="Sobre_a_Pizzaria.php">
            <div class="iten_menu">
              Sobre a Pizzaria
            </div>
          </a>

          <a href="promocoes.php">
             <div class="iten_menu">
               Promoções
             </div>
           </a>

           <a href="NossosAmbientes.php">
              <div class="iten_menu">
                Nossos Ambientes
              </div>
            </a>

            <a href="A_Pizza_do_mes.php">
               <div class="iten_menu">
                 Pizza do mês
               </div>
             </a>


     </div>

 </nav>
<form name="loguin" method="POST" action="faleconosco.php">
  <div id="alinha_input">
      <input type="text" name="txtUsuario"  placeholder="Usuário:" id="login">
      <input type="password" name="txtSenha"  placeholder="Senha:"id="senha">
      <input type="submit" value="entrar" id="entrar" name="btnOk" >
  </div>
</form>


<?php


   if(isset($_POST["btnOk"])){
    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenha"];

    addslashes($sql = "SELECT * FROM tblusuario WHERE loguin = '".$usuario."' AND senha = '".$senha."';");

    // Executa a string "sql", se der erro cairá no "or die" e aparecerá a mensagem de erro.
     $result = mysql_query($sql);



    // A variavel "$total" irá pegar o número de lihhas do resultado do "SELECT" caso volte um total
    // de uma linha, o usuário e senha digitados estão corretos, caso volte um total de zero linhas,
    // usuário e senha digitados estão incorretos.

    // Verifica o total de linhas.
    if(mysql_num_rows($result) > 0){
        //Ativa o uso das variaveis de sessão
    session_start();


        $select = mysql_query($sql);

        $rsUsuario = mysql_fetch_array($select);

        $_SESSION['nome'] = $rsUsuario['nome'];

        header('location:cms/home.php');
    }else{
        echo("<script>alert('Usuário ou senha incorreto.');</script>");
    }
}

?>
