<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">
  <title>Webshop</title>

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<div class="container">
  <div class="header">
      <img id="logo" href="index.php" src="assets/img/logoWebshop.JPEG" alt="/">
  </div>
  <div class="header_2">
    <p><a href="index.php" class="header2_tekst">Products</a></p>
    <p><a href="contactpagina.php" class="header2_tekst">Contact</a></p>
  </div>
  <div class="sidebar-1">
    <div class="sidebar_left">
      <a href="" id="sidebar_link" href="url">link text</a><br>
      <a href="" id="sidebar_link" href="url">link text</a><br>
      <a href="" id="sidebar_link" href="url">link text</a><br><br>
      <h3>Categories</h3>
      <button>Free products</button>
        <button>Products under $30</button>
        <div class="slidecontainer">
          <p>Custom range slider:</p>
          <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
        </div>
    </div>
  </div>
  <div class="sidebar-2">sidebar-2</div>
 
  <div class="main">
    <div class="contact_area">
    <div id="titel_contact">
      <h1>Stuur me hier een berichtje!</h1>
      <p>Vul hier je gegevens in.</p><br>
    </div>
      <form class="" ction="/" method="POST" class="form">
        <label class="omschrijving" for="voornaam">Voornaam:</label>
        <div id="input"><input type="text" tabindex="1" name="voornaam" placeholder="Voornaam" value="" required></div><br>

        <label class="omschrijving" for="tv">Tussenvoegsel (optioneel): </label>
        <div id="input"><input type="text" tabindex="2" name="tv" placeholder="Tussenv." value="" size="20"></div><br>

        <label class="omschrijving" for="achternaam">Achternaam:</label>
        <div id="input"><input type="text" tabindex="3" name="anaam" placeholder="achternaam" value="" required></div><br>

        <label class="omschrijving" for="email.">E-mailadres:</label>
        <div id="input"><input type="email" tabindex="3" id="email" name="email" placeholder="random@gmail.com" value=""
            pattern="[a-z0-9.%+-]+@[a-z0-9.-]+.[a-z]{2,}$" required></div><br>

        <label class="omschrijving" for="telnummer">Telefoonnummer:</label>
        <div id="input"><input type="tel" tabindex="4" id="telnummer" name="telnummer" value="" pattern="{5,20}"
            placeholder="telefoonnummer"></div><br>

        <label class="omschrijving" for="geboorte_datum">Geboortedatum:</label>
        <div id="input"><input type="date" tabindex="5" name="geboorte_datum" placeholder="Geboortedatum"></div><br>

        <label class="omschrijving groot" for="Rekening">Opmerkingen?</label>
        <div id="input"><textarea name="omschrijving" tabindex="20" >Hou rekening met...</textarea></div><br>

        <label class="omschrijving" for="nieuwsbrief">Nieuwsbrief:</label>
        <div id="input"><input type="checkbox" tabindex="21" id="niewsbrief" name="nieuwsbrief" label for="nieuwsbrief"> Ja, ik wil
          mij aanmelden voor de nieuwsbrief met $10 korting op mijn volgende bestelling.</label></div><br>
        <input type="Submit" tabindex="22" class="neonbut">
      </form>
      </div>
      </div>
      </div>
  
  <div class="footer">
    <div id="copyright">
      <p>© 2025 All rights reserved
      </p>
    </div>
  </div>
<script src="assets/js/app.js"></script>
</body>

</html>
