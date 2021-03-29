<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<img class="login_logo" src="php/images/ui/logo3.png" alt="some text" width=178 height=177>
  <div class="wrapper">
    <section class="form login">
      <header>Login</header>
      <p>Faça login para continuar.</p>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          
          <input type="text" name="email" placeholder="Digite seu email" required>
        </div>
        <div class="field input">
        <p>
          <br>
        </p>
          <input type="password" name="password" placeholder="Digite sua senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="ENTRAR">
        </div>
      </form>
      <div class="link">Não e registrado? <a href="index.php">Registre-se aqui.</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>

</html>
