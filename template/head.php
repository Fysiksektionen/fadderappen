<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="/fadderappen/">
    <title>Fadderappen<?php if(isset($title)) { echo " - $title"; }?></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="">Fadderappen</a></h1>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Meny</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul class="left">
        <li class="has-dropdown">
          <a href="#">Fester</a>
          <ul class="dropdown">
            <li><a href="n0llans-biljetter.php">nØllans biljetter</a></li>
            <li><a href="fester.php">Fadderbiljetter</a></li>
            <li><a href="standardglas.php">Alkohol</a></li>
          </ul>
        </li>
          <li><a href="schema.php">nØllans schema</a></li>
          <li><a href="kris.php">Krishantering</a></li>
          <li><a href="lekar.php">Lekar</a></li>
          <li><a href="kontakt.php">Kontaktuppgifter</a></li>
        </ul>
      </section>
    </nav>