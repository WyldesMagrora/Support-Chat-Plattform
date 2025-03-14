<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>MagroChat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Vorname</label>
            <input type="text" name="fname" placeholder="Max" required>
          </div>
          <div class="field input">
            <label>Nachname</label>
            <input type="text" name="lname" placeholder="Mustermann" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Addresse</label>
          <input type="text" name="email" placeholder="max.muster@gmail.com" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="EinDummesPasswort1234" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Wähle dein Profilbild</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Chat Starten">
        </div>
      </form>
      <div class="link">Bist du bereits Registriert? <a href="login.php">Jetzt Anmelden</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
