<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Epitech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php
    if (isset($_SESSION['mail']) && isset($_SESSION['password'])) {
        ?>
        <li class="nav-item"><a class="nav-link" href="user_profile.php" alt="" >Mon Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="library.php" alt="" >Bibliothèque</a></li>
        <li class="nav-item"><a class="nav-link" href="configuration/logout.php" alt="" >Déconnexion</a></li>
        <?php
    } else {
        ?>
        <li class="nav-item"><a class="nav-link" href="index.php" alt="" >Connexion</a></li>
        <li class="nav-item"><a class="nav-link" href="library.php" alt="" >Créer mon profile</a></li>
        <?php
    }
    ?>
      </ul>
    </div>
  </div>
</nav>