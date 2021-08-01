<?php
  require_once'fonctions.php';
?><!doctype html>
<html lang="fr" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=Onglet actif using javascript">
  <meta name="author" content="Jeros VIGAN">
  <meta name="generator" content="Hugo 0.84.0">
  <title><?php if(isset($title)) {echo $title; } else {echo 'Mon Site !';} ?></title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="sticky-footer-navbar.css" rel="stylesheet">

  <!--style perso -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column h-100">

  <header>
    <!-- nemu -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mon Site</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <?php echo onglet_active('index.php','Accueil')?>
            <?= onglet_active('contact.php','Contact')?>
            <?= onglet_active('loisirs.php','Loisirs')?>
          </ul>
        </div>
      </div>
    </nav>
  </header>