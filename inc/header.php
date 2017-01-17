<?php
  $title = isset($title) ? $title : 'Home';
  $active = isset($active) ? $active : '';
  $ac = 'is-active';
  

?>
<html>
<head>
  <title><?= $title ?> - DjSall's Web</title>
  
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lora|Roboto:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <nav class="nav">
    <img src="img/logo.png" class="logo">
      <ul>
        <li class="listItem <?= $active == 'home' ? $ac : ''; ?>"><a href="index.php">Home</a></li>
        <li class="listItem <?= $active == 'photos' ? $ac : ''; ?>"><a href="photos.php">Photos</a></li>
        <li class="listItem <?= $active == 'about' ? $ac : ''; ?>"><a href="about.php">About</a></li>
        <li class="listItem"><a href="mailto:proksalevente@gmail.com">Contact</a></li>
      </ul>
    </nav>
    <main class="main">