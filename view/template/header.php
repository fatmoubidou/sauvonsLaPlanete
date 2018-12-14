<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sauvons la planète</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href=<?php echo "http://".$_SERVER['SERVER_NAME']."/Lab/sauvonslaPlanete/public/css/normalize.css"; ?> >
  <link rel="stylesheet" href=<?php echo "http://".$_SERVER['SERVER_NAME']."/Lab/sauvonslaPlanete/public/css/main.css"; ?> >
  <!-- <link rel="stylesheet" href="../public/css/normalize.css">
  <link rel="stylesheet" href="../public/css/main.css"> -->
</head>

<body class="h-100vh d-flex flex-column justify-content-between">
  <header class="jumbotron-fluid bg-light mb-2">
    <div class="container">
      <div class="d-flex justify-content-between">
        <h1 class="display-4">Sauvons la planète</h1>
        <?php if (isset($_SESSION["user"]) && !empty($_SESSION["user"])): ?>
          <p class="mt-3"><i class="fas fa-user"></i> <?php echo $_SESSION["user"]["firstName"]." ".$_SESSION["user"]["name"]; ?></p>
        <?php endif; ?>

      </div>

      <p class="lead">Interface d'administration</p>
    </div>
    <!-- Affichage du menu si User connecté -->
    <?php if (isLogged()) { ?>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php if ($_SESSION["user"]["status"] === "admin") { ?>
              <li class="nav-item active">
                <a class="nav-link" <?php setHref("benevoles"); ?>>Les bénévoles</a>
              </li>
            <?php } ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" <?php setHref("messages"); ?> id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Les messages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" <?php setHref("messages"); ?>>Reçus</a>
                <a class="dropdown-item" <?php setHref("messages/archived"); ?>>Archivés</a>
                <a class="dropdown-item" <?php setHref("messages/send"); ?>>Envoyer un message</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" <?php setHref("logout"); ?>>Se déconnecter</a>
            </li>
          </ul>
        </div>
</nav>

    <?php } ?>

  </header>
    <main class="flex-grow-1">
