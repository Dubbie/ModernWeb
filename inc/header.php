<?php
  $title = isset($title) ? $title : 'Home';
  $active = isset($active) ? $active : '';
  $ac = 'is-active';
  

?>
<html>
<head>
  <title><?= $title; ?> - DjSall's Web</title>
  <link rel='stylesheet' href='./css/style.css'>
  <link href='https://fonts.googleapis.com/css?family=Lora|Roboto:400,700' rel='stylesheet'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
  <nav class='nav'>
    <div class='nav-left'>
      <a href='#!' class='nav-item'>
        <img src='../img/logo.png' class='logo'>
      </a>
    </div>
    <ul class='nav-right'>
      <li>
        <a href='index.php' class='nav-item is-link<?= $active == 'index' ? ' ' . $ac : ''; ?>'>Home</a>
      </li>
      <li>
        <a href='photos.php' class='nav-item is-link<?= $active == 'photos' ? ' ' . $ac : ''; ?>'>Photos</a>
      </li>
      <li>
        <a href='about.php' class='nav-item is-link<?= $active == 'about' ? ' ' . $ac : ''; ?>'>About</a>
      </li>
      <li>
        <a href='mailto:proskalevente@gmail.com' class='nav-item is-link'>Contact</a>
      </li>
    </ul>
  </nav>
  <main id='main'>