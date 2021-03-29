<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<img class="login_logo3" src="php/images/ui/logo3.png" alt="some text" width=178 height=177>
  <div class="wrapper">
    <section class="form signup">
      <header>Crie uma conta</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
          <p>
          <br>
        </p>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
          <p>
          <br>
        </p>
            <input type="text" name="lname" placeholder="Sobrenome" required>
          </div>
        </div>
        <div class="field input">
        <p>
          <br>
        </p>
          <input type="text" name="email" placeholder="Digite um e-mail" required>
        </div>
        <div class="field input">
        <p>
          <br>
        </p>
          <input type="password" name="password" placeholder="Crie uma senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecione uma imagem</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue para conversar">
        </div>
      </form>
      <div class="link">Já tem uma conta? <a href="login.php">Entrar</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
