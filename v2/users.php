<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <!-- Left Navigation -->
    <nav class="nav-sidebar">
      <div class="nav-item active">
        <i class="fas fa-comment-alt"></i>
      </div>
      <div class="nav-item">
        <i class="fas fa-users"></i>
      </div>
      <div class="nav-item">
        <i class="fas fa-calendar"></i>
      </div>
      <div class="nav-item">
        <i class="fas fa-phone-alt"></i>
      </div>
      <div class="nav-item">
        <i class="fas fa-file-alt"></i>
      </div>
    </nav>

    <!-- Users List -->
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <input type="text" placeholder="Suche einen Benutzer...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
      </div>
    </section>

    <!-- Empty Chat Area -->
    <section class="chat-area">
      <div class="empty-state">
        <i class="far fa-comment-alt"></i>
        <h3>Wähle einen Chat aus</h3>
        <p>Wähle einen Benutzer aus der Liste aus, um eine Unterhaltung zu beginnen.</p>
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
</body>
</html>
