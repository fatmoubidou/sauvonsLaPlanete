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
      <h1 class="display-4">Sauvons la planète</h1>
      <p class="lead">Interface d'administration</p>
    </div>
    <!-- Affichage du menu si User connecté -->
    <?php if (isLogged()) { ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" <?php setHref("benevoles"); ?>>Les bénévoles</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" <?php setHref("messages"); ?>>Les messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Se déconnecter</a>
          </li>
        </ul>
      </div>
    </nav>
    <?php } ?>

  </header>
    <main class="flex-grow-1">
